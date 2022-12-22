<?php

namespace App\Http\Controllers;

use App\Models\EventListing;
use App\Models\Event;
use App\Models\TicketListing;
use App\Models\Category;
use App\Models\Currency;
use Illuminate\Http\Request;
use App\Models\VanueSections;
use App\Models\VenueSectionRows;
use App\Http\Controllers\Auth\LoginController;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(VanueSections $vanuesections,VenueSectionRows $venuesectionrows, TicketListing $TicketListing,Currency $currency,$id)
    {
        //
        $currencies = Currency::all();
        $ticketListing = TicketListing::find($id);
        $venue_section_rows = VenueSectionRows::all();
        $venue_sections = VanueSections::all();
        return view('tickets/tickets-details',compact('venue_section_rows','venue_sections','ticketListing','currencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        // Sell-tickets/setticketprice

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $guestUser = LoginController::guestLogin();
        $ticketListing = new TicketListing();
        $ticketListing->user_id = $guestUser;
        $ticketListing->eventlisting_id = $id;
        $ticketListing->currency = $request->currency;
        $ticketListing->section = $request->sections;
        $ticketListing->row = $request->row;
        $ticketListing->seat_from = $request->seat_from;
        $ticketListing->seat_to = $request->seat_to;
        $ticketListing->price = $request->price;
        $ticketListing->ticket_restrictions = $request->ticket_restrictions;
        $ticketListing->ticket_type = $request->ticket_type;
        $ticketListing->quantity = $request->total_tickets;
        $ticketListing->reason_seating_unable = $request->reason_seating_unable;
        $ticketListing->save();

        if ($request->ticket_type === "e-ticket") {
            return redirect()->route('event.ticketlisting.ticket.upload', ['ticket_listing' => $ticketListing->id]);
        } else {
            return redirect()->route('seller.ticket_price.index', ['id' => $ticketListing->id]);
        }
    }


    public function savePrice(Request $request, $id, TicketListing $tickets)
    {
        // dd($id, $request->price, $request->currency);
        $tickets = TicketListing::find($id);
        $tickets->price = $request->price;
        $tickets->currency = $request->currency;
        $tickets->update();
        return redirect()->route('seller.complete_ticket.address.save', ['id' => $tickets->id]);
    }

    public function showAddressPage(Currency $currencies, TicketListing $tickets, $id, EventListing $event)
    {
        $events = EventListing::all();
        $tickets = TicketListing::find($id);
        $currencies = Currency::all();
        $ticketCurrency = Currency::find($tickets->currency);
        $price = $tickets->price * $tickets->quantity;
        $divide = $price / 100;
        $percentage = $divide * 15;
        $grand_total = $price - $percentage;
        return view('tickets/set-ticket-address',compact('currencies','tickets','events','price','percentage','grand_total', 'ticketCurrency'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TicketListing  $TicketListing
     * @return \Illuminate\Http\Response
     */
    public function show(TicketListing $TicketListing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TicketListing  $TicketListing
     * @return \Illuminate\Http\Response
     */
    public function edit(TicketListing $TicketListing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TicketListing  $TicketListing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        dd($request);
        exit;
        $ticket_details = TicketListing::find($id);
        $ticket_details->section = $request->sections;
        $ticket_details->row = $request->row;
        $ticket_details->seat_from = $request->seat_from;
        $ticket_details->seat_to = $request->seat_to;
        $ticket_details->price = $request->price;
        $ticket_details->currency = $request->currency;
        $ticket_details->ticket_restrictions = $request->ticket_restrictions;
        $ticket_details->update();

        return back();

    }

    public function show_price(Currency $currencies, TicketListing $tickets, $id, EventListing $event){

        $events = EventListing::all();
        $tickets = TicketListing::find($id);
        $currencies = Currency::all();
        $ticketCurrency = Currency::find($tickets->currency);
        $price = $tickets->price * $tickets->quantity;
        $divide = $price / 100;
        $percentage = $divide * 15;
        $grand_total = $price - $percentage;
        return view('tickets/setticketprice',compact('currencies','tickets','events','price','percentage','grand_total', 'ticketCurrency'));
    }

    public function show_ticket(Currency $currencies, TicketListing $tickets, $id, EventListing $event){

        dd();

        $events = EventListing::all();
        $tickets = TicketListing::find($id);
        $currencies = Currency::all();
        $price = $tickets->price * $tickets->quantity;
        $divide = $price / 100;
        $percentage = $divide * 15;
       $grand_total = $price - $percentage;
        return view('tickets/set-ticket-address',compact('currencies','tickets','events','price','percentage','grand_total'));

    }

    public function upload_tickets($ticketlistingid){
        //dd($ticketlistingid);
        $ticket_listing = TicketListing::find($ticketlistingid);
        return view('tickets/upload_Pdf', compact('ticket_listing'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TicketListing  $TicketListing
     * @return \Illuminate\Http\Response
     */
    public function destroy(TicketListing $TicketListing)
    {
        //
    }

    public function sell_category_show(Event $event,Category $category){
        $events_sports = Event::where('category_id', '2')->get();
        $events_concert = Event::where('category_id', '1')->get();
        $events_theatre = Event::where('category_id', '3')->get();
        $events_festival = Event::where('category_id', '4')->get();

        return view('tickets/selltickets',compact('events_sports','events_concert','events_theatre','events_festival'));
    }

    public function event_category_ticket(TicketListing $TicketListing,EventListing $event,$id){
        //return $id;

        $eventListings = EventListing::where('event_id',$id)->get();
        $events = Event::where('id',$id)->get();


        return view('tickets/tickets-home',compact('events','eventListings'));
    }



    public function dashboard_add_listing(Request $request){

        //return $request;

        // $TicketListing= new TicketListing();
        // $TicketListing->user_id=auth()->user()->id;
        // $TicketListing->title=$request->title;
        // $TicketListing->price=$request->price;
        // $TicketListing->quantity=$request->quantity;
        // $TicketListing->event_id=$request->event;
        // $TicketListing->status=$request->status;

        // $TicketListing->save();
        // return back();

    }
    public function dashboard_listing(Category $category, EventListing $event, TicketListing $TicketListing){
        $categories = Category::all();
        $events = EventListing::all();
        //$activetickets = TicketListing::all();
        //$active_tickets = TicketListing::where('status',1)->get();
         $active_tickets =TicketListing::where([['user_id',auth()->user()->id],['status',1]])->get();
        // dd ($active_tickets);
        return view('dashboard/listings',compact('categories','active_tickets','events'));
    }

    public function admin_tickets_show(TicketListing $TicketListing){

        $tickets = TicketListing::all();

        return view('Admin/pages/index',compact('tickets'));
    }

    //buyer functions

    // public function buyer_tickets_index(EventListing $event,$id){

    //     $events = EventListing::find($id);
    //     return view('payment-tickets/browse-tickets',compact('events'));
    // }

    // public function buyer_ticket_show(EventListing $event,TicketListing $TicketListing,$id){

    //     $events = EventListing::find($id);
    //     $tickets = TicketListing::where('event_id',$id)->get();
    //     return view('payment-tickets/browse-TicketListing',compact('events','tickets'));
    // }

    public function buyer_ticket_checkout( TicketListing $TicketListing,$id){

        $tickets = TicketListing::find($id);
        return view('payment-tickets/checkout',compact('tickets'));
    }

}
