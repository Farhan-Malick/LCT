<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\EventListing;
use App\Models\Event;

use App\Models\TicketListing;

use App\Models\Purchases;

use Barryvdh\DomPDF\Facade\Pdf;
use Auth;
use App\Http\Controllers\MailController;
// use Illuminate\Http\Request;
use Request;

class PurchasesController extends Controller
{

    //
    // public function buyer_tickets_index(Event $event,$id){

    //     $events = Event::find($id);
    //     return view('payment-tickets/browse-tickets',compact('events'));
    // }
    public function buyer_ticket_purchase(Request $request, $id)
    {
        // dd(auth()->check());
        if(!auth()->check()){
            return redirect('/login');
        }

        $ticket = TicketListing::select('ticket_listings.*', 'event_listings.event_name', 'event_listings.event_date', 'event_listings.start_time','event_listings.venue_name')
        ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
        ->where('ticket_listings.id', $id)
        ->first();

        $seller = User::find($ticket->user_id);

        $purchase = new Purchases();
        $purchase->user_id = auth()->id();
        $purchase->event_id = $ticket->eventlisting_id;
        $purchase->ticket_id = $ticket->id;
        $purchase->seller_id = $ticket->user_id;
        $purchase->price = (int) $ticket->price * (int) Request::get('quantity');
        $purchase->quantity = Request::get('quantity');
        $purchase->save();
        MailController::ticketpurchased(auth()->user()->email, $ticket);
        MailController::sellerticketpurchased($seller->email, $ticket);
        return redirect()->back()->with('message', 'Admin will approve your purchase and will notify you.');
    }
    public function downloadPdf(){
        $pdf = Pdf::loadView('download.PDF');
        return $pdf->download('ticket.pdf');
    } 

    public function buyer_ticket_show(Request $request, $id){
        // dd($request->qty);

        // $events = EventListing::select('*')->join('events', 'events.id', '=', 'event_listings.event_id')->where('event_listings.id', $id)->first();
        $events = Event::join('venues', 'venues.id', '=', 'events.venue_id')->select('events.*', 'venues.title as vTitle', 'venues.image as vImage')->where('events.id', $id)->first();
        $eventListings = EventListing::where('status', 1)->where('event_id', $id)->select('id', 'event_name')->get();
        // dd($events);
        $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name', 'vanue_sections.sections', 'venue_section_rows.rows')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join('vanue_sections', 'vanue_sections.id', '=', 'ticket_listings.section')
            ->join('venue_section_rows', 'venue_section_rows.id', '=', 'ticket_listings.row')
            ->where('approve','1')
            ->where('events.id',$id);
            
        if(Request::get('sort') == 'price_asc'){
            $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name', 'vanue_sections.sections', 'venue_section_rows.rows')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join('vanue_sections', 'vanue_sections.id', '=', 'ticket_listings.section')
            ->join('venue_section_rows', 'venue_section_rows.id', '=', 'ticket_listings.row')
            // ->join('seller_categories', 'seller_categories.id', '=', 'ticket_listings.categories')
            ->orderBy('price','asc')
            ->where('approve','1')
            ->where('events.id',$id);
        }
        elseif(Request::get('sort') == 'price_desc'){
            $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name', 'vanue_sections.sections', 'venue_section_rows.rows')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join('vanue_sections', 'vanue_sections.id', '=', 'ticket_listings.section')
            ->join('venue_section_rows', 'venue_section_rows.id', '=', 'ticket_listings.row')
            // ->join('seller_categories', 'seller_categories.id', '=', 'ticket_listings.categories')
            ->orderBy('price','desc')
            ->where('approve','1')
            ->where('events.id',$id);
        }
        elseif(Request::get('sort') == 'newest'){
            $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name', 'vanue_sections.sections', 'venue_section_rows.rows')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join('vanue_sections', 'vanue_sections.id', '=', 'ticket_listings.section')
            ->join('venue_section_rows', 'venue_section_rows.id', '=', 'ticket_listings.row')
            // ->join('seller_categories', 'seller_categories.id', '=', 'ticket_listings.categories')
            ->orderBy('created_at','desc')
            ->where('approve','1')
            ->where('events.id',$id);
        }
        elseif(Request::get('sort') == 'best_value'){
            $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name', 'vanue_sections.sections', 'venue_section_rows.rows')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join('vanue_sections', 'vanue_sections.id', '=', 'ticket_listings.section')
            ->join('venue_section_rows', 'venue_section_rows.id', '=', 'ticket_listings.row')
            // ->join('seller_categories', 'seller_categories.id', '=', 'ticket_listings.categories')
            ->orderBy('price','asc')
            ->where('approve','1')
            ->where('events.id',$id);
        }
        if (Request::get('qty') !== null) {
            $tickets = $tickets->where('quantity', '=', Request::get('qty'));
        }
        if (Request::get('ticket_restrictions') !== null) {
            $tickets = $tickets->where('ticket_restrictions', '=', Request::get('ticket_restrictions'));
        }
        if (Request::get('categories') !== null) {
            $tickets = $tickets->where('categories', '=',Request::get('categories'));
        }
        
        if (Request::get('ticket_event') !== null) {
            $tickets = $tickets->where('eventlisting_id', '>=', Request::get('ticket_event'));
        }
       
        if (Request::get('ticket_type') !== null) {
            $tickets = $tickets->where('ticket_type', '=',Request::get('ticket_type'));
        }
        if(Request::get('search_text') !== null){
            $tickets = $tickets->where('event_listings.event_name', 'like', '%'.Request::get('search_text').'%');
        }

        $tickets = $tickets->get();
        // dd($tickets);
        // $tickets = TicketListing::where('eventlisting_id',$id)->get();
        return view('payment-tickets/browse-ticket',compact('events','tickets', 'eventListings'));
    }

    public function buyer_ticket_create(Request $request, $eventlisting_id, $ticketid, $sellerid){
        $tickets =TicketListing::find($ticketid);
        $events = Event::find($eventlisting_id);
        $purchases = new Purchases;
        $purchases->user_id = auth()->user()->id;
        $purchases->event_id = $eventlisting_id;
        $purchases->seller_id =$sellerid;
        $purchases->ticket_id = $ticketid;
        $purchases->quantity = Request::get('quantity');
        $purchases->price = Request::get('price');
        $purchases->save();
        return redirect()->route('downloadPdfTicket',['eventlisting_id' => $events->id,'ticketid' => $tickets->id, 'sellerid' => $tickets->user_id]);
    }

    public function buyer_ticket_checkout( TicketListing $ticket, EventListing $event, $eventid, $ticketid, $sellerid){

        // $events = EventListing::select('event_listings.*', 'events.*')
        // ->join('events', 'events.id', '=', 'event_listings.event_id')
        // ->where('event_listings.id',$eventid)
        // ->first();
        $events = Event::join('venues', 'venues.id', '=', 'events.venue_id')->select('events.*', 'venues.title as vTitle', 'venues.image as vImage')->where('events.id', $eventid)->first();

        $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name', 'vanue_sections.sections', 'venue_section_rows.rows')
        ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
        ->join('vanue_sections', 'vanue_sections.id', '=', 'ticket_listings.section')
        ->join('venue_section_rows', 'venue_section_rows.id', '=', 'ticket_listings.row')
        ->where('ticket_listings.id',$ticketid)->first();
        // dd($tickets);
        $sellers = User::find($sellerid);
        return view('payment-tickets/checkout',compact('tickets','events','sellers'));
    }

    public function dashboard_orders_show(Purchases $purchases,TicketListing $ticket,Event $event)
    {
        $purchases = Purchases::select('purchases.*', 'event_listings.event_name as event_name')
        ->join('ticket_listings', 'ticket_listings.id', '=', 'purchases.ticket_id')
        ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
        ->where('purchases.user_id',auth()->user()->id)->get();
        return view('dashboard/orders',compact('purchases'));
    }

    public function Pdf_template(TicketListing $ticket, Event $event,$id ){

        $events = Event::join('venues', 'venues.id', '=', 'events.venue_id')->select('events.*', 'venues.title as vTitle', 'venues.image as vImage')->where('events.id', $id)->first();
        $eventListings = EventListing::where('status', 1)->where('event_id', $id)->select('id', 'event_name','venue_name')->first();
        // dd($events);
        $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name', 'vanue_sections.sections', 'venue_section_rows.rows')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join('vanue_sections', 'vanue_sections.id', '=', 'ticket_listings.section')
            ->join('venue_section_rows', 'venue_section_rows.id', '=', 'ticket_listings.row')
            ->where('approve','1')
            // ->where('ticket_listings.id',$id)
            ->where('events.id',$id)
            ->first();

        $pdf = Pdf::loadView('downloadPDF',[
            'tickets'=>$tickets,
            'events'=>$events,
            'eventListings'=>$eventListings
        ]);
        return $pdf->download('ticket.pdf');
        
        return view('downloadPDF',compact('tickets','events','sellers'));
    }


   
}
