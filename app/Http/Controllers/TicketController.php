<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use App\Models\Category;
use App\Models\Currency;
use Illuminate\Http\Request;
use App\Models\VanueSections;
use App\Models\VenueSectionRows;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(VanueSections $vanuesections,VenueSectionRows $venuesectionrows, Ticket $ticket,Currency $currency,$id)
    {
        //
        $currencies = Currency::all();
        $tickets = Ticket::find($id);
        $venue_section_rows = VenueSectionRows::all();
        $venue_sections = VanueSections::all();
        return view('tickets/tickets-details',compact('venue_section_rows','venue_sections','tickets','currencies'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        dd($request);
        exit;
        $ticket_details = Ticket::find($id);
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

    public function show_price(Currency $currencies, Ticket $tickets, $id, Event $event){

        $events = Event::all();
        $tickets = Ticket::find($id);
        $currencies = Currency::all();
        $price = $tickets->price * $tickets->quantity;
        $divide = $price / 100;
        $percentage = $divide * 15;
        $grand_total = $price - $percentage;
        return view('tickets/setticketprice',compact('currencies','tickets','events','price','percentage','grand_total'));
    }

    public function show_ticket(Currency $currencies, Ticket $tickets, $id, Event $event){

        $events = Event::all();
        $tickets = Ticket::find($id);
        $currencies = Currency::all();
        $price = $tickets->price * $tickets->quantity;
        $divide = $price / 100;
        $percentage = $divide * 15;
       $grand_total = $price - $percentage;
        return view('tickets/upload-ticket',compact('currencies','tickets','events','price','percentage','grand_total'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
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

    public function event_category_ticket(Ticket $ticket,Event $event,$id){
        //return $id;

        $tickets = Ticket::where('event_id',$id)->get();
        $events = Event::where('id',$id)->get();


        return view('tickets/tickets-home',compact('events','tickets'));
    }



    public function dashboard_add_listing(Request $request){

        //return $request;

        // $ticket= new Ticket();
        // $ticket->user_id=auth()->user()->id;
        // $ticket->title=$request->title;
        // $ticket->price=$request->price;
        // $ticket->quantity=$request->quantity;
        // $ticket->event_id=$request->event;
        // $ticket->status=$request->status;

        // $ticket->save();
        // return back();

    }
    public function dashboard_listing(Category $category, Event $event, Ticket $ticket){


        $categories = Category::all();
        $events = Event::all();
        //$activetickets = Ticket::all();
        //$active_tickets = Ticket::where('status',1)->get();
         $active_tickets =Ticket::where([['user_id',auth()->user()->id],['status',1]])->get();
        // dd ($active_tickets);
        return view('dashboard/listings',compact('categories','active_tickets','events'));

    }

    public function admin_tickets_show(Ticket $ticket){

        $tickets = Ticket::all();

        return view('Admin/pages/all_tickets',compact('tickets'));
    }

    //buyer functions

    // public function buyer_tickets_index(Event $event,$id){

    //     $events = Event::find($id);
    //     return view('payment-tickets/browse-tickets',compact('events'));
    // }

    // public function buyer_ticket_show(Event $event,Ticket $ticket,$id){

    //     $events = Event::find($id);
    //     $tickets = Ticket::where('event_id',$id)->get();
    //     return view('payment-tickets/browse-ticket',compact('events','tickets'));
    // }

    public function buyer_ticket_checkout( Ticket $ticket,$id){

        $tickets = Ticket::find($id);
        return view('payment-tickets/checkout',compact('tickets'));
    }

}
