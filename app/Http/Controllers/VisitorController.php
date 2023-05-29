<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\TicketListing;
use App\Models\Purchases;
use App\Models\User;
use GeoIp2\Database\Reader;
use DB;

class VisitorController extends Controller
{
        
function getVisitorCountry($ipAddress)
{
   $databaseFile = storage_path('app/GeoLite2-Country_20230331/GeoLite2-Country.mmdb');
    $reader = new Reader($databaseFile);
        if (!$reader) {
        echo "Failed to create GeoIP reader object";
        return;
    }
    // dd(file_exists($databaseFile));
    // dd($ipAddress);
    // Look up the location of the IP address
    $record = $reader->country($ipAddress);
    // dd($record);
    // dd($ipAddress);

    // Get the ISO country code of the location
    $country = $record->country->isoCode;

    // Create a new visitor record in the database
    $visitor = new Visitor;
    $visitor->ip_address = $ipAddress;
    $visitor->country = $country;
    $visitor->save();

    $tickets = TicketListing::select('ticket_listings.*', 'vanue_sections.sections as section_name')
        ->join('vanue_sections', 'vanue_sections.id', '=', 'ticket_listings.section')
        ->where('completed', 1)->get();
        // $countries = Visitor::select('ip_address','country','visits')->distinct()->get();
        $countries = Visitor::select('ip_address', 'country', DB::raw('SUM(visits) as total_visits'))
                ->groupBy('ip_address', 'country')
                ->get();
        // $countries = Visitor::select('visitors.ip_address','visitors.country')->groupBy('ip_address','country')->get()->unique();
    // $countries = Visitor::pluck('country','ip_address','visits')->unique();
    $price = Purchases::sum('price');
    $totalprofitDivision = $price / 100;
    $totalCompanyProfit =  $totalprofitDivision * 20;
    $userCount = User::count();
    $total_no_sold_tickets = Purchases::sum('quantity');
    return view('Admin/pages/dashboard',compact('countries','visitor','totalCompanyProfit','tickets','price','userCount','total_no_sold_tickets'));
}
}
