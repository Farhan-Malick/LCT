<?php

namespace App\Http\Controllers;

use App\Models\EventListing;
use App\Models\Event;
use App\Models\TicketListing;
use App\Models\Category;
use App\Models\Currency;
use App\Models\User;
use App\Models\Seller;
use Illuminate\Http\Request;
use App\Models\VanueSections;
use App\Models\VenueSectionRows;
use App\Models\ETicket;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Mail;
use App\Mail\Seller as SellerMail;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(VanueSections $vanuesections,VenueSectionRows $venuesectionrows, EventListing $EventListing,Currency $currency,$id)
    {
        //
        $currencies = Currency::all();
        $EventListing = EventListing::find($id);
        $venue_section_rows = VenueSectionRows::all();
        $venue_sections = VanueSections::all();
        return view('tickets/tickets-details',compact('venue_section_rows','venue_sections','EventListing','currencies'));
    }

    public function sendAwienMail(){
        Mail::to("usamaayub00@gmail.com")->send(new SellerMail("usamaayub00@gmail.com"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function eticketStore(Request $request, $id)
    {
        //
        // dd($request);
        $tickets = $request->eticket;

        foreach ($tickets as $ticket) {
            $eTicket = new ETicket();
            $eTicket->ticketlisting_id = $id;
            $eTicket->ticket_path = $ticket;
            $eTicket->save();
        }
        return redirect()->route('seller.ticket_price.index', ['id' => $id]);

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
        // dd($request);
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

    public function storeAddress(Request $request, $id, TicketListing $tickets, User $user, Seller $seller)
    {
        $tickets = TicketListing::find($id);
        $user = User::find($tickets->user_id);

        $seller = new Seller();
        $seller->user_id = $user->id;
        $seller->email = $request->email;
        $seller->first_name = $request->firstname;
        $seller->last_name = $request->lastname;
        $seller->country = $request->country;
        $seller->address_line_1 = $request->address1;
        $seller->address_line_2 = $request->address2;
        $seller->address_line_3 = $request->address3;
        $seller->city = $request->city;
        $seller->state = $request->state;
        $seller->zip_code = $request->zipcode;
        $seller->phone = $request->phone;
        $seller->save();

        if(!Auth::check()) {
            $user->first_name = $request->firstname;
            $user->last_name = $request->lastname;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->update();
        }
        return redirect()->back()->with('msg','Your tickets has been created, Your ticket will be in the Listings when Admin will Approve.');
    }

    public function showAddressPage(Currency $currencies, TicketListing $tickets, $id, EventListing $event)
    {
        $events = EventListing::all();
        $tickets = TicketListing::find($id);
        $currencies = Currency::all();
        $ticketCurrency = Currency::find($tickets->currency);
        // dd($ticketCurrency, $tickets);
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
        $maxValue = TicketListing::where('eventlisting_id', $tickets->eventlisting_id)->max('price');
        $minValue = TicketListing::where('eventlisting_id', $tickets->eventlisting_id)->min('price');
        $currencies = Currency::all();
        $ticketCurrency = Currency::find($tickets->currency);
        $price = $tickets->price * $tickets->quantity;
        $divide = $price / 100;
        $percentage = $divide * 15;
        $grand_total = $price - $percentage;
        return view('tickets/setticketprice',compact('currencies','tickets','events','price','percentage','grand_total', 'ticketCurrency', 'maxValue', 'minValue'));
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
            $events = EventListing::all();
            $ticket_listing = TicketListing::find($ticketlistingid);
            $currencies = Currency::all();
            $ticketCurrency = Currency::find($ticket_listing->currency);
            // dd($ticketCurrency, $tickets);
            $price = $ticket_listing->price * $ticket_listing->quantity;
            $divide = $price / 100;
            $percentage = $divide * 15;
            $grand_total = $price - $percentage;
            return view('tickets/upload_Pdf',compact('currencies','ticket_listing','events','price','percentage','grand_total', 'ticketCurrency'));
        //dd($ticketlistingid);
        // $ticket_listing = TicketListing::find($ticketlistingid);
        // return view('tickets/upload_Pdf', compact('ticket_listing'));
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

    public function admin_tickets_show(TicketListing $TicketListing)
    {
        $tickets = TicketListing::all();
        return view('Admin/pages/index',compact('tickets'));
    }
    public function admin_e_tickets_show(TicketListing $TicketListing)
    {
        $tickets = TicketListing::all();
        return view('Admin/pages/e_TicketListing',compact('tickets'));
    }
    public function admin_mobile_tickets_show(TicketListing $TicketListing)
    {
        $tickets = TicketListing::all();
        return view('Admin/pages/mobileTicket',compact('tickets'));
    }
    public function Approval(Request $request)
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
    public function edit_tickets($id){
        $tickets = Event::find($id);
        return view('Admin/pages/editTickets',compact('tickets'));
    }
    public function ticket_destroy($id){
        //return $id;
        $tickets = TicketListing::find($id);
        $tickets->delete();
        return back()->with('msg',"Ticket has been Deleted Successfully");

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
