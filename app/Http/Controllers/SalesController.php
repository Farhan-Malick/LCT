<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\TicketListing;
use App\Models\Purchases;
use App\Models\User;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    //

    public function admin_purchase_show(TicketListing $ticket,Event $event,Purchases $purchases){
        
        $purchases = Purchases::select('purchases.*', 'event_listings.event_name as event_name','ticket_listings.ticket_type')
        ->join('ticket_listings', 'ticket_listings.id', '=', 'purchases.ticket_id')
        ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')->get();
        $tickets = TicketListing::all();
        $events = Event::all();
        
        $price = Purchases::sum('price');
        $totalprofitDivision = $price / 100;
        $totalCompanyProfit =  $totalprofitDivision * 20;
        $userCount = User::count();
        $total_no_sold_tickets = Purchases::sum('quantity');
        return view('Admin/pages/all_sales',compact('totalCompanyProfit','purchases','events','tickets','price','userCount','total_no_sold_tickets'));

        // return view('/Admin/pages/all_sales',compact('purchases','tickets','events'));
    }

    public function dashboard_sales_show(Purchases $purchases){
        $sales = Purchases::select('purchases.*', 'event_listings.event_name as event_name')
        ->join('ticket_listings', 'ticket_listings.id', '=', 'purchases.ticket_id')
        ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
        ->where('seller_id',auth()->user()->id)->get();
        
        return view('dashboard/sales',compact('sales'));
    }


    public function ticket_destroy($id){
        //return $id;
        $tickets = Purchases::find($id);
        $tickets->delete();
        return back()->with('approve',"Ticket has been Deleted Successfully");

    }
}
