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
use Illuminate\Support\Facades\Hash;
use App\Mail\Seller as SellerMail;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Http\Controllers\MailController;
use Response;
use Illuminate\Support\Facades\File;


class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index( TicketListing $tickets,VanueSections $vanuesections,VenueSectionRows $venuesectionrows, EventListing $EventListing,Currency $currency,$id)
    {
        //
        if(!auth()->check()){
            return redirect('/login');
        }
        $maxValue = TicketListing::where(['eventlisting_id' => $tickets->eventlisting_id, 'section' => $tickets->section, 'row' => $tickets->row])->where('id', '!=', $tickets->id)->max('price');
        $minValue = TicketListing::where(['eventlisting_id' => $tickets->eventlisting_id, 'section' => $tickets->section, 'row' => $tickets->row])->where('id', '!=', $tickets->id)->min('price');
       
        $currencies = Currency::all();
        $ticketCurrency = Currency::find($tickets->currency);
        $EventListing = EventListing::find($id);
        $venue_section_rows = VenueSectionRows::all();
        $venue_sections = VanueSections::all();
        $sellerCategories = SellerCategory::all();
        $Listing = TicketListing::first();
        $cat = SellerCategory::first();
        $sec = VanueSections::first();
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
        return view('tickets/tickets-details',compact('FooterEventListing','Footerevents','maxValue','minValue','Listing','sec','cat','venue_section_rows','venue_sections','EventListing','currencies','sellerCategories','ticketCurrency'));
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
        return redirect()->route('seller.complete_ticket.address.save', ['id' => $id]);

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
        $request->validate([
            'ticket_restrictions'        => 'required',
            'seated_area'                 => 'required',
            'ticket_type'                 => 'required',
            'price'                       => 'required',
            'face_price'                  => 'required',
            'type_cat'                    => 'required',  
            'type_sec'                    => 'required',
            // 'type_row'                    => 'required',
            'currency'                    => 'required',
        ]);

        if($request->ticket_type === "Paper-Ticket"){
            $request->validate([
                'country'        => 'required',
                'simple_pdfForPaper'        => 'required',
            ]);
        }
        if($request->ticket_type === "Mobile-Ticket"){
            $request->validate([
                'simple_pdfForMobileTicket'        => 'required',
            ]);
        }if($request->ticket_type === "E-Ticket"){
            $request->validate([
                'book_eticket'        => 'required',
            ]);
        }if($request->book_eticket === "No"){
            $request->validate([
                'simple_pdf'        => 'required',
            ]);
        }
        $guestUser = LoginController::guestLogin();
        $ticketListing = new TicketListing();
        $sellerCategories = SellerCategory::first();
        $Listing = TicketListing::first();
        $venue_sections = VanueSections::first();
    
        $ticketListing->user_id = $guestUser;
        $ticketListing->eventlisting_id = $id;
        $ticketListing->currency = $request->currency;
        $ticketListing->seated_area = $request->seated_area;
        $ticketListing->type_cat = $request->type_cat;
        $ticketListing->type_sec = $request->type_sec;
        $ticketListing->type_row = $request->type_row;
        $ticketListing->ticket_benefits = json_encode($request->ticket_benefits);
        $ticketListing->fan_section = $request->fan_section;

        $ticketListing->categories = $request->categories;
        $ticketListing->section = $request->sections;
        $ticketListing->row = $request->row;

        $ticketListing->seat_from = $request->seat_from;
        $ticketListing->seat_to = $request->seat_to;
        $ticketListing->face_price = $request->face_price;
        $ticketListing->price = $request->price;
        $ticketListing->ticket_restrictions = json_encode($request->ticket_restrictions);
        
        $ticketListing->ticket_type = $request->ticket_type;
        $ticketListing->book_eticket = $request->book_eticket;
        $ticketListing->quantity = $request->total_tickets;
        $ticketListing->reason_seating_unable = $request->reason_seating_unable;

            $ticketListing->country = $request->country;
            if($request->hasfile('simple_pdfForPaper'))
            {
                $simple_pdfForPaper=$request->file('simple_pdfForPaper');
                $ext = $simple_pdfForPaper->GetClientOriginalExtension();
                $file2=time().'.'.$ext;
                $simple_pdfForPaper->storeAs('public/post',$file2);
                $ticketListing['simple_pdfForPaper']=$file2;
            }
            if($request->hasfile('simple_pdfForMobileTicket'))
            {
                $simple_pdfForMobileTicket=$request->file('simple_pdfForMobileTicket');
                $ext = $simple_pdfForMobileTicket->GetClientOriginalExtension();
                $file2=time().'.'.$ext;
                $simple_pdfForMobileTicket->storeAs('public/post',$file2);
                $ticketListing['simple_pdfForMobileTicket']=$file2;
            }
          if($request->hasfile('simple_pdf'))
            {
                $simple_pdf=$request->file('simple_pdf');
                $ext = $simple_pdf->GetClientOriginalExtension();
                $file2=time().'.'.$ext;
                $simple_pdf->storeAs('public/post',$file2);
                $ticketListing['simple_pdf']=$file2;
            }
        // dd($ticketListing); 
        $ticketListing->save();
        if ($request->book_eticket === "Yes") {
            return redirect()->route('event.ticketlisting.ticket.upload', ['ticket_listing' => $ticketListing->id]);
        } else {
            return redirect()->route('seller.complete_ticket.address.save', ['id' => $ticketListing->id]);
        }
    }
    public function viewPdf($id)
        {
            $Listing = TicketListing::find($id);
            // return File::get(storage_path('app/public/post/'.$Listing->simple_pdf));

            $filename = $Listing->simple_pdf;
            $path = storage_path('app/public/post/'.$filename);

            return Response::make(file_get_contents($path), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="'.$filename.'"'
                ]);
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
    public function UserPasswordUpdate(Request $request,User $user){
        $user = User::find(auth()->user()->id);
        $user->password =  Hash::make( $request->password);
        $user->update();
        return redirect()->back()->with('msg','Your Password has been Reset');  

    }
    public function storeAddress(Request $request, $id, TicketListing $tickets, User $user, Seller $seller)
    {
        $tickets = TicketListing::find($id);
        $user = User::find($tickets->user_id);
        $seller = new Seller();
        $seller->user_id = $user->id;

        $seller->save();
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
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
        $ticketCurrency = Currency::find($tickets->currency);
        // dd($ticketCurrency, $tickets);
        $price = $tickets->price * $tickets->quantity;
        $divide = $price / 100;
        $percentage = $divide * 10;
        $grand_total = $price - $percentage;
        $webCharge = $price / 10;
        return view('tickets/set-ticket-address',compact('FooterEventListing','Footerevents','currencies','tickets','events','price','percentage','grand_total', 'ticketCurrency','webCharge'));

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
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
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
        return view('tickets/setticketprice',compact('FooterEventListing','Footerevents',
            'currencies','tickets','events','price','percentage','grand_total', 'ticketCurrency', 'maxValue', 'minValue','webCharge'
        ));
    }

    public function show_ticket(Currency $currencies, TicketListing $tickets, $id, EventListing $event){

        dd();
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
        $events = EventListing::all();
        $tickets = TicketListing::find($id);
        $currencies = Currency::all();
        $price = $tickets->price * $tickets->quantity;
        $divide = $price / 100;
        $percentage = $divide * 10;
       $grand_total = $price - $percentage;
       $webCharge = $price / 10;
        return view('tickets/set-ticket-address',compact('FooterEventListing','Footerevents','currencies','tickets','events','price','percentage','grand_total',''));

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
            $webCharge = $price / 10;
            $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
            return view('tickets/upload_Pdf',compact('FooterEventListing','Footerevents','currencies','ticket_listing','events','price','percentage','grand_total', 'ticketCurrency','webCharge'));
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
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
        return view('tickets/selltickets',compact('FooterEventListing','Footerevents','events_sports','events_concert','events_theatre','events_festival'));
    }

    public function event_category_ticket(TicketListing $TicketListing,EventListing $event,$id){
        //return $id;

        $eventListings = EventListing::where('event_id',$id)->get();
        $events = Event::where('id',$id)->get();
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();

        return view('tickets/tickets-home',compact('FooterEventListing','Footerevents','events','eventListings'));
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
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
        //  $active_tickets = TicketListing::select('ticket_listings.*', 'vanue_sections.sections as section_name')
        // ->join('vanue_sections', 'vanue_sections.id', '=', 'ticket_listings.section')
        // ->where([['user_id',auth()->user()->id],['status',1]])
        // ->where('completed', 1)->get();
        $active_tickets = TicketListing::select('ticket_listings.*')
        ->where([['user_id',auth()->user()->id],['status',1]])
        ->where('completed', 1)->get();
        
        $purchases = Purchases::select('purchases.*', 'event_listings.event_name as event_name','event_listings.event_date as start_date')
        ->join('ticket_listings', 'ticket_listings.id', '=', 'purchases.ticket_id')
        ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
        ->where('purchases.user_id',auth()->user()->id)->get();
      
        $data = Purchases::select('purchases.*', 'event_listings.event_name as event_name','event_listings.event_date as start_date')
        ->join('ticket_listings', 'ticket_listings.id', '=', 'purchases.ticket_id')
        ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
        ->where('purchases.user_id',auth()->user()->id)
        ->first();
       
      
        // dd ($active_tickets);

        $sales = Purchases::select('purchases.*', 'event_listings.event_name as event_name','event_listings.event_date as start_date')
        ->join('ticket_listings', 'ticket_listings.id', '=', 'purchases.ticket_id')
        ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
        ->where('seller_id',auth()->user()->id)->get();
        return view('dashboard/dashboard',compact('FooterEventListing','Footerevents','categories','active_tickets','events','purchases','data','sales'));
    }

    // Paper Ticket in Admin Panel
    
    public function admin_tickets_show(TicketListing $TicketListing)
    {
        $tickets = TicketListing::select('ticket_listings.*')
        ->where('completed', 1)->get();
        $price = Purchases::sum('price');
        $userCount = User::count();
        $total_no_sold_tickets = Purchases::sum('quantity');
        return view('Admin/pages/index',compact('tickets','price','userCount','total_no_sold_tickets'));
    }
    public function editPaperTicket($id){
        $paper_ticket = TicketListing::find($id);
        return view('Admin/pages/editPaperTicket',compact('paper_ticket'));
    }
    public function updatePaperTicket(Request $request,$id){
        //return $request;
        $paper_ticket = TicketListing::find($id);
        $paper_ticket->type_row = $request->type_row;
        $paper_ticket->type_sec = $request->type_sec;
        $paper_ticket->type_cat = $request->type_cat;
        $paper_ticket->update();
        $request->session()->flash('msg2','Data Has Been Updated Successfully'); 
        return redirect('Admin-Panel/');
    }
//END OF PAPER TICKET


     // E-Ticket in Admin Panel

    public function admin_e_tickets_show(TicketListing $TicketListing)
    {
        $tickets = TicketListing::select('ticket_listings.*')
        ->where('completed', 1)->get();
        $price = Purchases::sum('price');
        $userCount = User::count();
        $total_no_sold_tickets = Purchases::sum('quantity');
        return view('Admin/pages/e_TicketListing',compact('tickets','price','userCount','total_no_sold_tickets'));
    }
    public function editE_Ticket($id){
        $e_ticket = TicketListing::find($id);
        return view('Admin/pages/editE_Ticket',compact('e_ticket'));
    }
    public function updateE_Ticket(Request $request,$id){
        $e_ticket = TicketListing::find($id);
        $e_ticket->type_row = $request->type_row;
        $e_ticket->type_sec = $request->type_sec;
        $e_ticket->type_cat = $request->type_cat;
        $e_ticket->update();
        $request->session()->flash('msg2','Data Has Been Updated Successfully'); 
        return redirect('Admin-Panel/E_tickets');
    }

     // Mobile Ticket in Admin Panel

    public function admin_mobile_tickets_show(TicketListing $TicketListing)
    {
        $tickets = TicketListing::select('ticket_listings.*')
        ->where('completed', 1)->get();
        $price = Purchases::sum('price');
        $userCount = User::count();
        $total_no_sold_tickets = Purchases::sum('quantity');
        return view('Admin/pages/mobileTicket',compact('tickets','price','userCount','total_no_sold_tickets'));
    }
    public function editMobileTicket($id){
        $mobile_ticket = TicketListing::find($id);
        return view('Admin/pages/editmobileTicket',compact('mobile_ticket'));
    }
    public function updatemobileTicket(Request $request,$id){
        //return $request;
        $mobile_ticket = TicketListing::find($id);
        $mobile_ticket->type_row = $request->type_row;
        $mobile_ticket->type_sec = $request->type_sec;
        $mobile_ticket->type_cat = $request->type_cat;
        $mobile_ticket->update();
        $request->session()->flash('msg2','Data Has Been Updated Successfully'); 
        return redirect('Admin-Panel/Mobile_tickets');
    }
    public function Approval(Request $request)
    {
        $tickets=TicketListing::select('ticket_listings.*', 'event_listings.event_name')
        ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
        ->where('ticket_listings.id', $request->ticket_id)
        ->first();
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
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
        $tickets = TicketListing::find($id);
        return view('payment-tickets/checkout',compact('FooterEventListing','Footerevents','tickets'));
    }

}
