<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Purchases;
use App\Models\EventListing;
use App\Models\TicketListing;
use App\Models\Event;

class VisitorAnalyticsController extends Controller
{
    public function visitors()
    {   
        $price = Purchases::sum('price');
        $totalprofitDivision = $price / 100;
        $totalCompanyProfit =  $totalprofitDivision * 20;
        $userCount = User::count();
        $total_no_sold_tickets = Purchases::sum('quantity');
        $EventListingVistors = EventListing::get();
        return view('Admin/pages/Visitors',compact('totalCompanyProfit','EventListingVistors','price','userCount','total_no_sold_tickets'));

    }
    public function eventVisitors()
    {   
        $price = Purchases::sum('price');
        $totalprofitDivision = $price / 100;
        $totalCompanyProfit =  $totalprofitDivision * 20;
        $userCount = User::count();
        $total_no_sold_tickets = Purchases::sum('quantity');
        $eventVisitors = Event::get();
        return view('Admin/pages/eventVisitors',compact('totalCompanyProfit','eventVisitors','price','userCount','total_no_sold_tickets'));
    }
    public function TicketVisitors()
    {   
        $price = Purchases::sum('price');
        $totalprofitDivision = $price / 100;
        $totalCompanyProfit =  $totalprofitDivision * 20;
        $userCount = User::count();
        $total_no_sold_tickets = Purchases::sum('quantity');
        // $ticketVisitors = TicketListing::get();
        $ticketVisitors = TicketListing::select('ticket_listings.*', 'event_listings.event_name','categories.id as cat_id')
        ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
        ->join('events', 'events.id', '=', 'event_listings.event_id')
        ->join( 'categories','categories.id', '=','events.category_id')->get();
        return view('Admin/pages/ticketVisitors',compact('totalCompanyProfit','ticketVisitors','price','userCount','total_no_sold_tickets'));
    }
}
