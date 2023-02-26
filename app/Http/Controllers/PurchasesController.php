<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\EventListing;
use App\Models\Event;

use App\Models\TicketListing;

use App\Models\Purchases;
use App\Models\Seller;

use Barryvdh\DomPDF\Facade\Pdf;
use Auth;
use App\Http\Controllers\MailController;
// use Illuminate\Http\Request;
use Request;
use Carbon\Carbon;

class PurchasesController extends Controller
{
    //
    // public function buyer_tickets_index(Event $event,$id){

    //     $events = Event::find($id);
    //     return view('payment-tickets/browse-tickets',compact('events'));
    // }
    public function buyer_ticket_purchase(Request $request, $id)
    {
        if(!auth()->check()){
            return redirect('/login');
        }
        $ticket = TicketListing::select('ticket_listings.*','users.last_name', 'event_listings.event_name',
        'event_listings.event_date', 'event_listings.start_time',
        'event_listings.venue_name','categories.id as cat_id',
        // 'purchases.quantity as ticketQuantity',
        )
        ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
        ->join('users','users.id','=','ticket_listings.user_id')
        // ->join('purchases','purchases.ticket_id','=','ticket_listings.id')
        ->join('events', 'events.id', '=', 'event_listings.event_id')
        ->join( 'categories','categories.id', '=','events.category_id')
        ->where('ticket_listings.id',$id)
        ->first();
        $sub_dateForPaper = '';$sub_dateForMobile = '';$sub_dateForE = '';
        $ticket->msg=''; $ticket->msg2=''; $ticket->msg3='';
        if($ticket->ticket_type === "Paper-Ticket") {
            $sub_dateForPaper = Carbon::parse($ticket->event_date)->subDays(10)->toDateString();
            $ticket->msg = 'Must Ship The Paper Ticket by Date: ' .$sub_dateForPaper;
            $ticket->msg2 = '(10days before the event is the deadline to ship the Paper Tickets).';
            $ticket->msg3 = 'The Buyers Address to ship the tickets will be communicated to you shortly.';
        }elseif($ticket->ticket_type === "Mobile-Ticket"){
            $sub_dateForMobile = Carbon::parse($ticket->event_date)->subDays(5)->toDateString();
            $ticket->msg = 'Must Transfer The Mobile Ticket by Date: ' .$sub_dateForMobile;
            $ticket->msg2 = '(5days before the event is the deadline to transfer the mobile).';
            $ticket->msg3 = 'The Mobile Ticket attendees information will be communicated to you shortly.';
        }elseif($ticket->ticket_type === "E-Ticket"){
            $sub_dateForE = Carbon::parse($ticket->event_date)->subDays(5)->toDateString();
            $ticket->msg = 'Must Upload The E-Ticket by Date: ' .$sub_dateForE;
            $ticket->msg2 = ' (5days before the event is the deadline to Upload the E-Tickets if the tickets are not pre uploaded).';
        }
        // dd($ticket);
        $seller = User::find($ticket->user_id);
        $purchase = new Purchases();
        $purchase->user_id = auth()->id();
        $purchase->event_id = $ticket->eventlisting_id;
        $purchase->ticket_id = $ticket->id;
        $purchase->seller_id = $ticket->user_id;
        $purchase->price = (int) $ticket->price * (int) Request::get('quantity');
        $purchase->quantity = Request::get('quantity');
        $purchase->country_id = Request::get('country_id');
        // dd($purchase);
        $purchase->save();
        MailController::ticketpurchased(auth()->user()->email, $ticket, $purchase);
        MailController::sellerticketpurchased($seller->email, $ticket, $purchase);
        return redirect()->back()->with('message', 'Admin will approve your purchase and will notify you.');
    }
    public function downloadPdf(){
        $pdf = Pdf::loadView('download.PDF');
        return $pdf->download('ticket.pdf');
    }

    public function buyer_ticket_show(Request $request, $id){
        // dd($request->qty);

        $events = EventListing::select('*','venues.title as vTitle', 'venues.image as vImage')
        ->join('events', 'events.id', '=', 'event_listings.event_id')
        // ->join('venues', 'venues.id', '=', 'events.venue_id')
        ->join('venues', 'venues.title', '=', 'event_listings.venue_name')
        ->where('event_listings.id', $id)
        ->first();

        $eventListings = EventListing::where('status', 1)->where('event_id', $id)->select('id', 'event_name')->get();
        // dd($events);

        $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name','categories.id as cat_id')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join( 'categories','categories.id', '=','events.category_id')
            ->orderBy('price','asc')
            ->where('approve','1')
            ->where('ticket_listings.eventlisting_id',$id);
        $categoriesFromTicketListing = TicketListing::select('ticket_listings.type_cat')
            ->groupBy('type_cat')
            ->orderBy('type_cat','asc')
            ->where('approve','1')
            ->where('ticket_listings.eventlisting_id',$id)
            ->get();
        $colors = TicketListing::select('ticket_listings.type_cat')
        ->groupBy('type_cat')
        ->where('approve','1')
        ->orderBy('type_cat','asc')
        ->where('ticket_listings.eventlisting_id',$id)->get();
        // dd($colors);

        $restrictionsFromTicketListing = TicketListing::select('ticket_listings.ticket_restrictions')
        ->groupBy('ticket_restrictions')
        ->where('ticket_listings.eventlisting_id',$id)
        ->get();

        $quantityFromTicketListing = TicketListing::select('ticket_listings.quantity')
        ->groupBy('quantity')
        ->where('approve','1')
        ->where('ticket_listings.eventlisting_id',$id)
        ->get();
        if (Request::get('Restriction_filter') !== null) {
            $tickets = $tickets->where('ticket_restrictions', '=',Request::get('Restriction_filter'));
        }
        if (Request::get('Cat_filter') !== null) {
            $tickets = $tickets->where('type_cat', '=',Request::get('Cat_filter'));
        }
        if(Request::get('sort') == 'price_asc'){
            $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name','categories.id as cat_id')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join( 'categories','categories.id', '=','events.category_id')
            ->orderBy('price','asc')
            ->where('approve','1')
            ->where('ticket_listings.eventlisting_id',$id);
        }
        elseif(Request::get('sort') == 'price_desc'){
            $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name','categories.id as cat_id')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join( 'categories','categories.id', '=','events.category_id')
            ->orderBy('price','desc')
            ->where('approve','1')
            ->where('ticket_listings.eventlisting_id',$id);
        }
        elseif(Request::get('sort') == 'newest'){
            $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name','categories.id as cat_id')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join( 'categories','categories.id', '=','events.category_id')
            ->orderBy('created_at','desc')
            ->where('approve','1')
            ->where('ticket_listings.eventlisting_id',$id);

        }
        elseif(Request::get('sort') == 'best_value'){
            $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name','categories.id as cat_id')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join( 'categories','categories.id', '=','events.category_id')
            ->orderBy('price','asc')
            ->where('approve','1')
            ->where('ticket_listings.eventlisting_id',$id);
        }
        if (Request::get('qty') !== null) {
            $tickets = $tickets->where('quantity', '>=', Request::get('qty'));
        }
        if (Request::get('search-no-of-tickets') !== null) {
            $tickets = $tickets->where('quantity', '>=', Request::get('search-no-of-tickets'));
        }
        if (Request::get('no_of_tickets') == '1') {
            // $tickets = $tickets->get(0)->name;
            // $tickets = $tickets->where('quantity', '=', Request::get('no_of_tickets'));
        }
        if (Request::get('ticket_restrictions') !== null) {
            $tickets = $tickets->where('ticket_restrictions', '=', Request::get('ticket_restrictions,'));
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
        if(Request::get('homeFilters') !== null){
            $events = $events->where('events.title', 'like', '%'.Request::get('homeFilters').'%');
        }
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();

        $tickets = $tickets->get();
        // dd($tickets);
        // $tickets = TicketListing::where('eventlisting_id',$id)->get();
        return view('payment-tickets/browse-ticket',compact('Footerevents','FooterEventListing','quantityFromTicketListing','restrictionsFromTicketListing','events','tickets', 'eventListings','categoriesFromTicketListing','colors'));
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

    public function buyer_ticket_checkout( TicketListing $ticket, EventListing $event, $eventlisting_id, $ticketid, $sellerid){

        $events = EventListing::select('*','venues.title as vTitle', 'venues.image as vImage')
        ->join('events', 'events.id', '=', 'event_listings.event_id')
        // ->join('venues', 'venues.id', '=', 'events.venue_id')
        ->join('venues', 'venues.title', '=', 'event_listings.venue_name')
        ->where('event_listings.id', $eventlisting_id)
        ->first();
        // dd($events);
        $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name','categories.id as cat_id')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join( 'categories','categories.id', '=','events.category_id')
            ->where('approve','1')
            ->where('ticket_listings.id',$ticketid)
            ->first();
        // dd($tickets);
        $sellers = User::find($sellerid);
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
        $sellerCountry = Seller::where('user_id',$sellerid)->first();
        return view('payment-tickets/checkout',compact('Footerevents','FooterEventListing','tickets','events','sellers','sellerCountry'));
    }

    public function buyer_ticket_detail( TicketListing $ticket, EventListing $event, $eventid, $ticketid, $sellerid){

        $events = Event::join('venues', 'venues.id', '=', 'events.venue_id')->select('events.*', 'venues.title as vTitle', 'venues.image as vImage')->where('events.id', $eventid)->first();
        // $eventListing = EventListing::select('event_listings.*')->where('event_listings.event_id', $eventid)->first();
        $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name')
        ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
        ->join('vanue_sections', 'vanue_sections.id', '=', 'ticket_listings.section')
        ->join('venue_section_rows', 'venue_section_rows.id', '=', 'ticket_listings.row')
        ->where('ticket_listings.id',$ticketid)->first();
        // dd($tickets);
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
        $sellers = User::find($sellerid);
        return view('payment-tickets/ticket_detail',compact('FooterEventListing','Footerevents','tickets','events','sellers'));
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
        $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name')
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
