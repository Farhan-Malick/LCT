<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\TicketListing;
use App\Models\Purchases;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    //

    public function admin_purchase_show(TicketListing $ticket,Event $event,Purchases $purchases){
        
        $purchases = Purchases::all();
        $tickets = TicketListing::all();
        $events = Event::all();

        return view('/Admin/pages/all_sales',compact('purchases','tickets','events'));
    }

    public function dashboard_sales_show(Purchases $purchases){

        $sales = Purchases::where('seller_id',auth()->user()->id)->get();
        
        return view('dashboard/sales',compact('sales'));
    }
}
