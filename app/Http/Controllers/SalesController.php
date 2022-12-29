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
        
        $purchases = Purchases::all();
        $tickets = TicketListing::all();
        $events = Event::all();
        
        $price = Purchases::sum('price');
        $userCount = User::count();
        $total_no_sold_tickets = Purchases::sum('quantity');
        return view('Admin/pages/all_sales',compact('purchases','events','tickets','price','userCount','total_no_sold_tickets'));

        // return view('/Admin/pages/all_sales',compact('purchases','tickets','events'));
    }

    public function dashboard_sales_show(Purchases $purchases){

        $sales = Purchases::where('seller_id',auth()->user()->id)->get();
        
        return view('dashboard/sales',compact('sales'));
    }

    public function ApprovalForPurchase(Request $request) 
    {
        $tickets=TicketListing::find($request->ticket_id);
        $approval=$request->approve;
        if ($approval=='on') {
            $approval=1;
        }else {
            $approval=0;
        }
        $tickets->approve=$approval;
        $tickets->save();
        return redirect()->back()->with('approve','Ticket has been Approved Successfully');
    }

    public function ticket_destroy($id){
        //return $id;
        $tickets = Purchases::find($id);
        $tickets->delete();
        return back()->with('approve',"Ticket has been Deleted Successfully");

    }
}
