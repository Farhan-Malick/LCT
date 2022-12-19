<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;

use App\Models\Ticket;

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
        $tickets = Ticket::where('event_id',$id)->get();
        return view('payment-tickets/browse-ticket',compact('events','tickets'));
    }

    public function buyer_ticket_create(Request $request, $eventid, $ticketid, $sellerid){
        
        $tickets =Ticket::find($ticketid);
        $events =Event::find($eventid);
        $purchases = new Purchases;
        $purchases->user_id = auth()->user()->id; 
        $purchases->event_id = $eventid;
        $purchases->seller_id =$sellerid;
        $purchases->ticket_id = $ticketid;  
        $purchases->quantity = $request->quantity;
        $purchases->price = $request->price;
        $purchases->save();
        return redirect()->route('downloadPdfTicket',['eventid' => $events->id,'ticketid' => $tickets->id, 'sellerid' => $tickets->user_id]);
        


        

    }

    public function buyer_ticket_checkout( Ticket $ticket, Event $event, $eventid, $ticketid, $sellerid){

        
        $events = Event::find($eventid);
        $tickets = Ticket::find($ticketid);
        $sellers = User::find($sellerid);
        return view('payment-tickets/checkout',compact('tickets','events','sellers'));
    }

    public function dashboard_orders_show(Purchases $purchases,Ticket $ticket,Event $event)
    {
        $purchases = Purchases::where('user_id',auth()->user()->id)->get();
        return view('dashboard/orders',compact('purchases'));
    }

    public function Pdf_template(Ticket $ticket, Event $event, $eventid, $ticketid, $sellerid){

        $events = Event::find($eventid);
        $tickets = Ticket::find($ticketid);
        $sellers = User::find($sellerid);

        return view('invoice',compact('tickets','events','sellers'));

    }


    public function downloadPdf(){

        
        
        
        $pdf = Pdf::loadView('invoice');
        return $pdf->download('invoice.pdf');
    }
}
