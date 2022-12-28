<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\EventListing;
use App\Models\Event;

use App\Models\TicketListing;

use App\Models\Purchases;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Auth;
use App\Http\Controllers\MailController;

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
<<<<<<< HEAD
        $ticket = TicketListing::find($id);
=======

        $ticket = TicketListing::select('ticket_listings.*', 'event_listings.event_name', 'event_listings.event_date', 'event_listings.start_time')
        ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
        ->where('ticket_listings.id', $id)
        ->first();

>>>>>>> a3a92ac4749e7bcde22787ab25589238a6710f0b
        $purchase = new Purchases();
        $purchase->user_id = auth()->id();
        $purchase->event_id = $ticket->eventlisting_id;
        $purchase->ticket_id = $ticket->id;
        $purchase->seller_id = $ticket->user_id;
        $purchase->price = (int) $ticket->price * (int) $request->quantity;
        $purchase->quantity = $request->quantity;
        $purchase->save();
        MailController::ticketpurchased(auth()->user()->email, $ticket);
        return redirect()->back()->with('message', 'Admin will approve your purchase and will notify you.');
    }
    
    public function buyer_ticket_show(Request $request, $id){
        // dd($request->qty);

        // $events = EventListing::select('*')->join('events', 'events.id', '=', 'event_listings.event_id')->where('event_listings.id', $id)->first();
        $events = Event::join('venues', 'venues.id', '=', 'events.venue_id')->select('events.*', 'venues.title as vTitle')->where('events.id', $id)->first();
        // dd($events);
        $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name', 'vanue_sections.sections', 'venue_section_rows.rows')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join('vanue_sections', 'vanue_sections.id', '=', 'ticket_listings.section')
            ->join('venue_section_rows', 'venue_section_rows.id', '=', 'ticket_listings.row')
            ->where('approve','1')
            ->where('events.id',$id);

        if ($request->qty !== null) {
            $tickets = $tickets->where('quantity', '>=', $request->qty);
        }

        if($request->search_text !== null){
            $tickets = $tickets->where('event_listings.event_name', 'like', '%'.$request->search_text.'%');
        }

        $tickets = $tickets->get();
        // dd($tickets);
        // $tickets = TicketListing::where('eventlisting_id',$id)->get();
        return view('payment-tickets/browse-ticket',compact('events','tickets'));
    }

    public function buyer_ticket_create(Request $request, $eventlisting_id, $ticketid, $sellerid){
        $tickets =TicketListing::find($ticketid);
        $events = Event::find($eventlisting_id);
        $purchases = new Purchases;
        $purchases->user_id = auth()->user()->id;
        $purchases->event_id = $eventlisting_id;
        $purchases->seller_id =$sellerid;
        $purchases->ticket_id = $ticketid;
        $purchases->quantity = $request->quantity;
        $purchases->price = $request->price;
        $purchases->save();
        return redirect()->route('downloadPdfTicket',['eventlisting_id' => $events->id,'ticketid' => $tickets->id, 'sellerid' => $tickets->user_id]);
    }

    public function buyer_ticket_checkout( TicketListing $ticket, EventListing $event, $eventid, $ticketid, $sellerid){


        $events = EventListing::select('event_listings.*', 'events.*')
        ->join('events', 'events.id', '=', 'event_listings.event_id')
        ->where('event_listings.id',$eventid)
        ->first();

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
        $purchases = Purchases::where('user_id',auth()->user()->id)->get();
        return view('dashboard/orders',compact('purchases'));
    }

    public function Pdf_template(TicketListing $ticket, Event $event, $eventid, $ticketid, $sellerid){

        $events = Event::find($eventid);
        $tickets = TicketListing::find($ticketid);
        $sellers = User::find($sellerid);

        return view('invoice',compact('tickets','events','sellers'));

    }


    public function downloadPdf(){




        $pdf = Pdf::loadView('invoice');
        return $pdf->download('invoice.pdf');
    }
}
