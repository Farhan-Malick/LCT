<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\EventListing;
use App\Models\Event;
use App\Models\Purchases;

class AdminController extends Controller
{
    public function Users()
    {
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
        $users = User::orderBy('id','desc')->get();
        $price = Purchases::sum('price');
        $totalprofitDivision = $price / 100;
        $totalCompanyProfit =  $totalprofitDivision * 20;
        $userCount = User::count();
        $total_no_sold_tickets = Purchases::sum('quantity');
        return view('Admin.pages.RegisteredUsers',compact('totalCompanyProfit','price','userCount','total_no_sold_tickets','totalprofitDivision','users','FooterEventListing','Footerevents'));
    }
}
