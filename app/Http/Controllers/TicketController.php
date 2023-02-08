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
use App\Models\Purchases;
use App\Models\SellerCategory;
use App\Http\Controllers\Auth\LoginController;
use Mail;
use App\Mail\Seller as SellerMail;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Http\Controllers\MailController;

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
        if(!auth()->check()){
            return redirect('/login');
        }
        $currencies = Currency::all();
        $EventListing = EventListing::find($id);
        $venue_section_rows = VenueSectionRows::all();
        $venue_sections = VanueSections::all();
        $sellerCategories = SellerCategory::all();
        $Listing = TicketListing::first();
        $cat = SellerCategory::first();
        $sec = VanueSections::first();
        return view('tickets/tickets-details',compact('Listing','sec','cat','venue_section_rows','venue_sections','EventListing','currencies','sellerCategories'));
    }

    public function sendAwienMail(){
        Mail::to("usamaayub00@gmail.com")->send(new SellerMail("usamaayub00@gmail.com"));
        /* if (Mail::failures()) {
            // return failed mails
            dd(Mail::failures());
        } */
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

    public function showCatTickets(Request $request, $id)
    {

        // $events = [];
        $events = Event::select('events.*', 'venues.title as vTitle')
        ->join('categories', 'categories.id', '=', 'events.category_id')
        ->join('venues', 'venues.id', '=', 'events.venue_id')
        ->where('categories.id', '=', $id)
        ->get();
        $categories = Category::all();
        // dd($tickets);
        return view('payment-tickets.home',compact('events', 'categories'));
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
        $sellerCategories = SellerCategory::first();
        $Listing = TicketListing::first();
        $venue_sections = VanueSections::first();
        
        $this->validate($request, [
            'ticket_restrictions'         => 'required',
            'seated_area'                 => 'required',
            'ticket_type'                 => 'required'
        ]
    );
        // $request->validate([
        //     'ticket_restrictions' => 'required',
        //     'seated_area' => 'required'
            
        // ]);
        // dd($request);
      

        $ticketListing->user_id = $guestUser;
        $ticketListing->eventlisting_id = $id;
        $ticketListing->currency = $request->currency;
        $ticketListing->seated_area = $request->seated_area;
        $ticketListing->categories = $request->categories;
        
       if($sellerCategories == null){
        $ticketListing->type_cat = $request->type_cat;
       }
       if($venue_sections == null){
        $ticketListing->type_sec = $request->type_sec;
       }
        $ticketListing->type_row = $request->type_row;
        $ticketListing->ticket_benefits = json_encode($request->ticket_benefits);
        $ticketListing->fan_section = $request->fan_section;

        $ticketListing->section = $request->sections;
        $ticketListing->row = $request->row;
        $ticketListing->seat_from = $request->seat_from;
        $ticketListing->seat_to = $request->seat_to;
        $ticketListing->price = $request->price;
        $ticketListing->ticket_restrictions = json_encode($request->ticket_restrictions);
        
        $ticketListing->ticket_type = $request->ticket_type;
        $ticketListing->quantity = $request->total_tickets;
        $ticketListing->reason_seating_unable = $request->reason_seating_unable;
        
        if($ticketListing->ticket_type == "Paper-Ticket"){
            $ticketListing->country = $request->country;
        }
        // if($request->hasFile('simple_pdf')){
        //     $simple_pdf = $request->file('simple_pdf');
        //     $thumbnail_name = time().'_'.$simple_pdf->getClientOriginalName();
        //     $simple_pdf->move(public_path('/booking'), $thumbnail_name);
        //     $ticketListing->simple_pdf = $thumbnail_name;
        // }
       
        $ticketListing->save();

        if ($request->ticket_type === "E-Ticket") {
            return redirect()->route('event.ticketlisting.ticket.upload', ['ticket_listing' => $ticketListing->id]);
        } else {
            return redirect()->route('seller.ticket_price.index', ['id' => $ticketListing->id]);
        }
    }


    public function savePrice(Request $request, $id, TicketListing $tickets, User $user,)
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

        if($tickets->ticket_type !== "E-Ticket")
        {
            $request->validate(
                [
                  'simple_pdf'       =>  'required|mimes: csv,txt,xlx,xls,pdf|max:2048'
                ]);
        }
       
        $user = User::find($tickets->user_id);
        $seller = new Seller();
        $seller->user_id = $user->id;
        // $seller->email = $request->email;
        // $seller->first_name = $request->firstname;
        // $seller->last_name = $request->lastname;
        $seller->country = $request->country;
        if($request->hasfile('simple_pdf'))
        {
            $simple_pdf=$request->file('simple_pdf');
            $ext = $simple_pdf->GetClientOriginalExtension();
            $file2=time().'.'.$ext;
            $simple_pdf->storeAs('public/post',$file2);
            $seller['simple_pdf']=$file2;
        } 
        // $seller->address_line_1 = $request->address1;
        // $seller->address_line_2 = $request->address2;
        // $seller->address_line_3 = $request->address3;
        // $seller->city = $request->city;
        // $seller->state = $request->state;
        // $seller->zip_code = $request->zipcode;
        // $seller->phone = $request->phone;
        $seller->save();

        /* if(!Auth::check()) {
            $user->first_name = $request->firstname;
            $user->last_name = $request->lastname;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->update();
        } */    
        $tickets->completed = 1;
        $tickets->update();
        MailController::ticketlistingadded($user->email);
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
        $percentage = $divide * 10;
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

    public function show_price(Currency $currencies, TicketListing $tickets, $id, EventListing $event)
    {
        $events = EventListing::all();
        $tickets = TicketListing::find($id);
        $maxValue = TicketListing::where(['eventlisting_id' => $tickets->eventlisting_id, 'section' => $tickets->section, 'row' => $tickets->row])->where('id', '!=', $tickets->id)->max('price');
        $minValue = TicketListing::where(['eventlisting_id' => $tickets->eventlisting_id, 'section' => $tickets->section, 'row' => $tickets->row])->where('id', '!=', $tickets->id)->min('price');
        $currencies = Currency::all();
        $ticketCurrency = Currency::find($tickets->currency);
        $price = $tickets->price * $tickets->quantity;
        $divide = $price / 100;
        $percentage = $divide * 10;
        $grand_total = $price - $percentage;
        $webCharge = $price / 10;
        return view('tickets/setticketprice',compact(
            'currencies','tickets','events','price','percentage','grand_total', 'ticketCurrency', 'maxValue', 'minValue','webCharge'
        ));
    }

    public function show_ticket(Currency $currencies, TicketListing $tickets, $id, EventListing $event){

        dd();

        $events = EventListing::all();
        $tickets = TicketListing::find($id);
        $currencies = Currency::all();
        $price = $tickets->price * $tickets->quantity;
        $divide = $price / 100;
        $percentage = $divide * 10;
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
            $percentage = $divide * 10;
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
        $events_concert = Event::where('category_id', '1')->get();
        $events_sports = Event::where('category_id', '2')->get();
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
        //  $active_tickets =TicketListing::where([['user_id',auth()->user()->id],['status',1]])->get();
         $active_tickets = TicketListing::select('ticket_listings.*', 'vanue_sections.sections as section_name')
        ->join('vanue_sections', 'vanue_sections.id', '=', 'ticket_listings.section')
        ->where([['user_id',auth()->user()->id],['status',1]])
        ->where('completed', 1)->get();
        $purchases = Purchases::select('purchases.*', 'event_listings.event_name as event_name','event_listings.event_date as start_date')
        ->join('ticket_listings', 'ticket_listings.id', '=', 'purchases.ticket_id')
        ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
        ->where('purchases.user_id',auth()->user()->id)->get();
        $data = Purchases::select('purchases.*', 'event_listings.event_name as event_name','event_listings.event_date as start_date')
        ->join('ticket_listings', 'ticket_listings.id', '=', 'purchases.ticket_id')
        ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
        ->where('purchases.user_id',auth()->user()->id)->first();
        // dd ($active_tickets);
        
        $sales = Purchases::select('purchases.*', 'event_listings.event_name as event_name','event_listings.event_date as start_date')
        ->join('ticket_listings', 'ticket_listings.id', '=', 'purchases.ticket_id')
        ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
        ->where('seller_id',auth()->user()->id)->get();
        return view('dashboard/dashboard',compact('categories','active_tickets','events','purchases','data','sales'));
    }

    public function admin_tickets_show(TicketListing $TicketListing)
    {
        $tickets = TicketListing::select('ticket_listings.*', 'vanue_sections.sections as section_name')
        ->join('vanue_sections', 'vanue_sections.id', '=', 'ticket_listings.section')
        ->where('completed', 1)->get();
        $price = Purchases::sum('price');
        $userCount = User::count();
        $total_no_sold_tickets = Purchases::sum('quantity');
        return view('Admin/pages/index',compact('tickets','price','userCount','total_no_sold_tickets'));
    }
    public function admin_e_tickets_show(TicketListing $TicketListing)
    {
        $tickets = TicketListing::select('ticket_listings.*', 'vanue_sections.sections as section_name')
        ->join('vanue_sections', 'vanue_sections.id', '=', 'ticket_listings.section')
        ->where('completed', 1)->get();
        $price = Purchases::sum('price');
        $userCount = User::count();
        $total_no_sold_tickets = Purchases::sum('quantity');
        return view('Admin/pages/e_TicketListing',compact('tickets','price','userCount','total_no_sold_tickets'));
    }
    public function admin_mobile_tickets_show(TicketListing $TicketListing)
    {
        $tickets = TicketListing::select('ticket_listings.*', 'vanue_sections.sections as section_name')
        ->join('vanue_sections', 'vanue_sections.id', '=', 'ticket_listings.section')
        ->where('completed', 1)->get();
        $price = Purchases::sum('price');
        $userCount = User::count();
        $total_no_sold_tickets = Purchases::sum('quantity');
        return view('Admin/pages/mobileTicket',compact('tickets','price','userCount','total_no_sold_tickets'));
    }
    public function Approval(Request $request)
    {
        $tickets=TicketListing::select('ticket_listings.*', 'event_listings.event_name')->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')->where('ticket_listings.id', $request->ticket_id)->first();
        $user = User::find($tickets->user_id);
        $tickets->approve=1;
        $tickets->update();
        MailController::ticketlistingapproved($user->email, $tickets);
        return redirect()->back()->with('approve','Ticket has been Approved Successfully');
    }

    public function Rejection(Request $request)
    {
        // dd($request->all());
        $tickets=TicketListing::select('ticket_listings.*', 'event_listings.event_name')->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')->where('ticket_listings.id', $request->ticket_id)->first();
        $user = User::find($tickets->user_id);
        $tickets->approve=2;
        $tickets->rejection_reason=$request->reason;
        $tickets->update();
        MailController::ticketlistingrejected($user->email, $tickets);
        return redirect()->back()->with('approve','Ticket has been Rejected Successfully');
    }
    public function ticket_deActivation(Request $request)
    {
            $tickets=TicketListing::select('ticket_listings.*', 'event_listings.event_name')->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')->where('ticket_listings.id', $request->ticket_id)->first();
            $user = User::find($tickets->user_id);
            $tickets->approve=4;
            $tickets->update();
            // MailController::ticketlistingapproved($user->email, $tickets);
            return redirect()->back()->with('deactivate','Ticket has been De-Activated Successfully');
    }
    public function ticket_Activation(Request $request)
    {
            $tickets=TicketListing::select('ticket_listings.*', 'event_listings.event_name')->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')->where('ticket_listings.id', $request->ticket_id)->first();
            $user = User::find($tickets->user_id);
            $tickets->approve=1;
            $tickets->update();
            // MailController::ticketlistingapproved($user->email, $tickets);
            return redirect()->back()->with('activate','Ticket has been Activated Successfully');
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
