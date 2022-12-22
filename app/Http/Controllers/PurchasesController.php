<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function buyer_ticket_show($id){

        $events = Event::find($id);
        $tickets = TicketListing::where('approve','1')->get();
        // $tickets = TicketListing::where('eventlisting_id',$id)->get();
        return view('payment-tickets/browse-ticket',compact('events','tickets'));
    }

    public function buyer_ticket_create(Request $request, $eventlisting_id, $ticketid, $sellerid){
        $tickets =TicketListing::find($ticketid);
        $events =Event::find($eventlisting_id);
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

    public function buyer_ticket_checkout( TicketListing $ticket, Event $event, $eventid, $ticketid, $sellerid){

        
        $events = Event::find($eventid);
        $tickets = TicketListing::find($ticketid);
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
