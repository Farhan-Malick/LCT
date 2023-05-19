<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\EventListing;
use App\Models\Event;
use App\Models\TicketListing;
use App\Models\Purchases;
use App\Models\Seller;
use App\Models\Visitor;
use App\Models\BuyerSellerCharges;

class BuyerSellerChargesController extends Controller
{
    public function BuyerSellerChargesForm()
    {
        $visitors =  Visitor::get();
        $price = Purchases::sum('price');
        $totalprofitDivision = $price / 100;
        $totalCompanyProfit =  $totalprofitDivision * 20;
        $userCount = User::count();
        $total_no_sold_tickets = Purchases::sum('quantity');
        $buyerCharges = BuyerSellerCharges::first();
        return view('Admin/pages/BuyerSellerCharges',compact('buyerCharges','visitors','totalCompanyProfit','price','userCount','total_no_sold_tickets'));
    }
    public function BuyerCharges(Request $request)
    {
        $BuyerCharges = BuyerSellerCharges::find(1);
        $BuyerCharges->buyer_charges = $request->buyer_charges;
        $BuyerCharges->save();
        return back()->with('buyer', "Charges for buyer have been updated successfully.");
    }
    public function SellerCharges(Request $request)
    {
        $SellerCharges = BuyerSellerCharges::find(1);
        $SellerCharges->seller_charges = $request->seller_charges;
        $SellerCharges->save();
        return back()->with('seller',"Charges for seller has been updated successfully.");
    }
}
