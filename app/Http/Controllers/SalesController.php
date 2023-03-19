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

    public function admin_purchase_show(TicketListing $ticket,Event $event,Purchases $purchases)
    {
        $purchases = Purchases::select('purchases.*', 'event_listings.event_name as event_name','ticket_listings.ticket_type')
        ->join('ticket_listings', 'ticket_listings.id', '=', 'purchases.ticket_id')
        ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
        ->orderBy('id','desc')
        ->get();

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
        ->where('seller_id',auth()->user()->id)
        ->orderBy('id','desc')
        ->get();
        
        return view('dashboard/sales',compact('sales'));
    }


    public function ticket_destroy($id){
        //return $id;
        $tickets = Purchases::find($id);
        $tickets->delete();
        return back()->with('approve',"Ticket has been Deleted Successfully");
    }

    public function sellerTicketsPurchased(){
        
        $price = Purchases::sum('price');
        $totalprofitDivision = $price / 100;
        $totalCompanyProfit =  $totalprofitDivision * 20;
        $userCount = User::count();
        $total_no_sold_tickets = Purchases::sum('quantity');

        $ticket = Purchases::select('purchases.*', 'event_listings.event_name as event_name','ticket_listings.quantity as totalQty')
        ->join('ticket_listings', 'ticket_listings.id', '=', 'purchases.ticket_id')
        ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
        ->orderBy('id','desc')
        ->get();

        // $ticket = TicketListing::select('ticket_listings.*','users.last_name', 'event_listings.event_name',
        // 'event_listings.event_date', 'event_listings.start_time',
        // 'event_listings.venue_name','categories.id as cat_id',
        // // 'purchases.quantity as ticketQuantity',
        // )
        // ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
        // ->join('users','users.id','=','ticket_listings.user_id')
        // // ->join('purchases','purchases.ticket_id','=','ticket_listings.id')
        // ->join('events', 'events.id', '=', 'event_listings.event_id')
        // ->join( 'categories','categories.id', '=','events.category_id')
        // // ->where('ticket_listings.id',$id)
        // ->get();
        
        return view('Admin.pages.SellerPurchasing',compact('userCount','price','totalCompanyProfit','total_no_sold_tickets','ticket'));
       
    }
    public function Pain_Unpaid(Request $request)
    {
        $ticket = Purchases::select('purchases.*', 'event_listings.event_name as event_name','ticket_listings.quantity as totalQty')
        ->join('ticket_listings', 'ticket_listings.id', '=', 'purchases.ticket_id')
        ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
        ->where('purchases.id', $request->seller_id)
        ->first();
        $ticket->approve=1;
        $ticket->update();
        return redirect()->back()->with('approve','Ticket has been Checked To Paid Successfully');
    }
    public function release_ticket(Request $request)
    {
        $purchases = Purchases::select('purchases.*', 'event_listings.event_name as event_name','ticket_listings.ticket_type')
        ->join('ticket_listings', 'ticket_listings.id', '=', 'purchases.ticket_id')
        ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
        ->where('purchases.id', $request->buyer_id)
        ->first();
        $purchases->release_ticket=1;
        $purchases->update();
        return redirect()->back()->with('approve','Ticket has been Released Successfully');
    }
}
