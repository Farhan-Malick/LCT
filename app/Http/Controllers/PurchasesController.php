<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\EventListing;
use App\Models\Event;

use App\Models\TicketListing;

use App\Models\Purchases;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;





class PurchasesController extends Controller
{
    //
    // public function buyer_tickets_index(Event $event,$id){

    //     $events = Event::find($id);
    //     return view('payment-tickets/browse-tickets',compact('events'));
    // }

    public function buyer_ticket_show(Request $request, $id){
        // dd($request->qty);

        // $events = EventListing::select('*')->join('events', 'events.id', '=', 'event_listings.event_id')->where('event_listings.id', $id)->first();
        $events = Event::join('venues', 'venues.id', '=', 'events.venue_id')->select('events.*', 'venues.title as vTitle')->where('events.id', $id)->first();
        // dd($events);
        $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name', 'vanue_sections.sections', 'venue_section_rows.rows')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('vanue_sections', 'vanue_sections.id', '=', 'ticket_listings.section')
            ->join('venue_section_rows', 'venue_section_rows.id', '=', 'ticket_listings.row')
            ->where('approve','1');

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
