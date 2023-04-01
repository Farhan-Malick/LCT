<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\EventListing;
use App\Models\Event;
use App\Models\TicketListing;

use App\Models\Purchases;
use App\Models\Seller;
use DB;

use Barryvdh\DomPDF\Facade\Pdf;
use Auth;
use App\Http\Controllers\MailController;
// use Illuminate\Http\Request;
use Request;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Stripe\Stripe;
use Stripe\Charge;

class PurchasesController extends Controller
{
    //
    public function ProceedToCheckout(TicketListing $ticket, EventListing $event, $eventlisting_id, $ticketid, $sellerid)
    {
        $events = EventListing::select('*', 'venues.title as vTitle', 'venues.image as vImage')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            // ->join('venues', 'venues.id', '=', 'events.venue_id')
            ->join('venues', 'venues.title', '=', 'event_listings.venue_name')
            ->where('event_listings.id', $eventlisting_id)
            ->first();
        // dd($events);
        TicketListing::find($ticketid)->increment('views');
        $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name', 'categories.id as cat_id')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join('categories', 'categories.id', '=', 'events.category_id')
            ->where('approve', '1')
            ->where('ticket_listings.id', $ticketid)
            ->first();
        // dd($tickets);
        $sellers = User::find($sellerid);
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
        $sellerCountry = Seller::where('user_id', $sellerid)->first();
        return view('payment-tickets/proceedTocheckout', compact('Footerevents', 'FooterEventListing', 'tickets', 'events', 'sellers', 'sellerCountry'));
    }

    public function buyer_ticket_purchase(Request $request, $id)
    {
        $ticket = TicketListing::select(
            'ticket_listings.*',
            'users.first_name',
            'event_listings.event_name',
            'event_listings.event_date',
            'event_listings.start_time',
            'event_listings.venue_name',
            'categories.id as cat_id',
            // 'purchases.quantity as ticketQuantity',
        )
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('users', 'users.id', '=', 'ticket_listings.user_id')
            // ->join('purchases','purchases.ticket_id','=','ticket_listings.id')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join('categories', 'categories.id', '=', 'events.category_id')
            ->where('ticket_listings.id', $id)
            ->first();
        Request::validate([
            'quantity' => 'required',
        ]);
        if ($ticket->ticket_type === 'Paper-Ticket') {
            Request::validate([
                'country_id' => 'required',
            ]);
        }
        if (!auth()->check()) {
            return redirect('/login');
        }

        $quantity = Request::get('quantity');
        $country = Request::get('country_id');
        $shipping_charges = Request::get('shipingCharges');
        $eventlisting_id = $ticket->eventlisting_id;

        $ticketPrice = (int) $ticket->price * (int) Request::get('quantity');

        $seller = User::find($ticket->user_id);
        $purchase = new Purchases();
        $purchase->user_id = auth()->id();
        $purchase->event_id = $ticket->eventlisting_id;
        $purchase->ticket_id = $ticket->id;
        $purchase->seller_id = $ticket->user_id;

        // Service Charges for seller

        $purchase->price = (int) $ticket->price * (int) Request::get('quantity') + (int) $purchase->webCharge;
        $webCharge = $purchase->price / 10;
        $divide = $purchase->price / 100;
        $percentage = $divide * 10;
        $purchase->webCharge = $percentage;

        // service Charge for buyer
        $webChargeforBuyer = $purchase->price / 15;
        $divideForBuyer = $purchase->price / 100;
        $percentageForBuyer = $divideForBuyer * 15;
        $purchase->webChargeforBuyer = $percentageForBuyer;
        //  dd($purchase->webChargeforBuyer);

        //Shipping Charges
        $purchase->shipingCharges = Request::get('shipingCharges');

        // Seller gonna receive
        $grand_total = $purchase->price - $percentage;
        $grand_total2 = $purchase->price + $percentageForBuyer + (int) Request::get('shipingCharges');

        // dd( $grand_total2 );

        $purchase->grand_total = $grand_total;
        $purchase->grand_total2 = $grand_total2;

        $ticket_id = $ticket->id;
        $seller_id = $ticket->user_id;

        $events = EventListing::select('*', 'venues.title as vTitle', 'venues.image as vImage')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            // ->join('venues', 'venues.id', '=', 'events.venue_id')
            ->join('venues', 'venues.title', '=', 'event_listings.venue_name')
            ->where('event_listings.id', $ticket->eventlisting_id)
            ->first();
        // dd($events);

        TicketListing::find($ticket->id)->increment('views');
        $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name', 'categories.id as cat_id')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join('categories', 'categories.id', '=', 'events.category_id')
            ->where('approve', '1')
            ->where('ticket_listings.id', $ticket->id)
            ->first();
        // dd($tickets);
        $sellers = User::find($ticket->user_id);
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
        $sellerCountry = Seller::where('user_id', $ticket->user_id)->first();

        return view('payment-tickets.proceedTocheckout', compact('ticketPrice', 'grand_total2', 'Footerevents', 'FooterEventListing', 'tickets', 'events', 'sellers', 'sellerCountry', 'webCharge', 'percentageForBuyer', 'quantity', 'country', 'shipping_charges', 'eventlisting_id', 'seller_id', 'ticket_id'));
        // return redirect()->route('buyer.ticket.proceedToCheckout', ['eventlisting_id' => $ticket->eventlisting_id,'ticketid' => $ticket->id, 'sellerid' => $ticket->user_id]);
    }
    public function buyer_ticket_purchase_CheckOut(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $ticket = TicketListing::select('ticket_listings.*', 'users.first_name', 'event_listings.event_name', 'event_listings.event_date', 'event_listings.start_time', 'event_listings.venue_name', 'categories.id as cat_id')
                ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
                ->join('users', 'users.id', '=', 'ticket_listings.user_id')
                ->join('events', 'events.id', '=', 'event_listings.event_id')
                ->join('categories', 'categories.id', '=', 'events.category_id')
                ->where('ticket_listings.id', Request::get('ticketid'))
                ->lockForUpdate()
                ->first();
            if ($ticket->quantity >= Request::get('quantity')) {
                //  // Lock the ticket record for update
                //  $ticket = TicketListing::where('id', Request::get('ticketid'))->lockForUpdate()->first();

                $ticket->quantity = $ticket->quantity - (int) Request::get('quantity');
                $ticket->update();

                // dd($ticket);
                if (!auth()->check()) {
                    return redirect('/login');
                }

                $sub_dateForPaper = '';
                $sub_dateForMobile = '';
                $sub_dateForE = '';
                if ($ticket) {
                    $ticket->msg = '';
                    $ticket->msg2 = '';
                    $ticket->msg3 = '';
                }
                if ($ticket->ticket_type === 'Paper-Ticket') {
                    $sub_dateForPaper = Carbon::parse($ticket->event_date)
                        ->subDays(10)
                        ->toDateString();
                    $ticket->msg = 'Must Ship The Paper Ticket by Date: ' . $sub_dateForPaper;
                    $ticket->msg3 = 'The Buyers Address to ship the tickets will be communicated to you shortly.';
                } elseif ($ticket->ticket_type === 'Mobile-Ticket') {
                    $sub_dateForMobile = Carbon::parse($ticket->event_date)
                        ->subDays(5)
                        ->toDateString();
                    $ticket->msg = 'Must Transfer The Mobile Ticket by Date: ' . $sub_dateForMobile;
                    $ticket->msg3 = 'The Mobile Ticket attendees information will be communicated to you shortly.';
                } elseif ($ticket->book_eticket === 'No') {
                    $sub_dateForE = Carbon::parse($ticket->event_date)
                        ->subDays(5)
                        ->toDateString();
                    $ticket->msg = 'Must Upload The E-Ticket by Date: ' . $sub_dateForE;
                } elseif ($ticket->book_eticket === 'Yes') {
                    $sub_dateForE = Carbon::parse($ticket->event_date)
                        ->subDays(5)
                        ->toDateString();
                    $ticket->msg3 = 'There is nothing you need to do. We will send the pre uploaded tickets to the buyer soon';
                }
                $purchase = Purchases::find($id);
                $purchase = new Purchases();
                $purchase->approve = 1;
                $purchase->update();

                $seller = User::find($ticket->user_id);
                $purchase = new Purchases();
                $purchase->user_id = auth()->id();
                $purchase->event_id = $ticket->eventlisting_id;
                $purchase->ticket_id = $ticket->id;
                $purchase->seller_id = $ticket->user_id;
                // Service Charges

                $purchase->price = (int) $ticket->price * (int) Request::get('quantity') + (int) $purchase->webCharge;
                $purchase->quantity = Request::get('quantity');
                $purchase->country_id = Request::get('country_id');
                // service Charge for seller
                $webCharge = $purchase->price / 10;
                $divide = $purchase->price / 100;
                $percentage = $divide * 10;
                $purchase->webCharge = $percentage;

                // service Charge for buyer
                $webChargeforBuyer = $purchase->price / 15;
                $divideForBuyer = $purchase->price / 100;
                $percentageForBuyer = $divideForBuyer * 15;
                $purchase->webChargeforBuyer = $percentageForBuyer;
                //  dd($purchase->webChargeforBuyer);

                //Shipping Charges
                $purchase->shipingCharges = Request::get('shipingCharges');
                // Seller gonna receive
                $grand_total = $purchase->price - $percentage;
                //buyer gonna pay
                $grand_total2 = $purchase->price + $percentageForBuyer + (int) Request::get('shipingCharges');

                $purchase->grand_total = $grand_total;
                $purchase->grand_total2 = $grand_total2;
                $purchase->save();
                // Check if enough tickets are available
                // Make a Stripe charge for the ticket purchase
                Stripe::setApiKey(env('STRIPE_SECRET'));
                Charge::create([
                    'amount' => $grand_total2 * 100,
                    'currency' => 'usd',
                    'source' => Request::get('stripeToken'),
                    'description' => 'Making test payment.',
                ]);
                // Commit the transaction
                DB::commit();

                // Send a success response
                return redirect()
                    ->route('dashboard.listing')
                    ->with('message', 'Congratulations!! You have successfully purchased the tickets. You will shortly receive an email from us about the delivery of the tickets.');
                // return response()->json(['message' => 'Ticket purchase successful']);
            } else {
                // Roll back the transaction
                DB::rollBack();
                // Send an error response
                return redirect()
                    ->back()
                    ->with('NotEnough', 'Not enough tickets available. Someone purchased selected tickets');
                // return response()->json(['error' => 'Not enough tickets available'], 400);
            }
        } catch (Exception $e) {
            // Roll back the transaction
            DB::rollBack();
            // Handle the exception
            return redirect()
                ->back()
                ->with('message', 'Ticket purchase failed');
            // return response()->json(['error' => 'Ticket purchase failed'], 500);
        }
        // Stripe::setApiKey(env('STRIPE_SECRET'));
        // Charge::create ([
        //         "amount" => $grand_total2 * 100,
        //         "currency" => "usd",
        //         "source" => Request::get('stripeToken'),
        //         "description" => "Making test payment."
        // ]);
        MailController::ticketpurchased(auth()->user()->email, $ticket, $purchase, $webCharge, $percentageForBuyer, $grand_total2);
        MailController::sellerticketpurchased($seller->email, $ticket, $purchase, $webCharge, $grand_total);
        return redirect()
            ->route('dashboard.listing')
            ->with('message', 'Congratulations!! You have successfully purchased the tickets. You will shortly receive an email from us about the delivery of the tickets.');
    }

    public function downloadPdf()
    {
        $pdf = Pdf::loadView('download.PDF');
        return $pdf->download('ticket.pdf');
    }

    public function buyer_ticket_show(Request $request, $id)
    {
        EventListing::find($id)->increment('views');

        $events = EventListing::select('*', 'venues.title as vTitle', 'venues.image as vImage')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            // ->join('venues', 'venues.id', '=', 'events.venue_id')
            ->join('venues', 'venues.title', '=', 'event_listings.venue_name')
            ->where('event_listings.id', $id)
            ->first();

        $eventListings = EventListing::where('status', 1)
            ->where('event_id', $id)
            ->select('id', 'event_name')
            ->get();
        // dd($events);

        $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name', 'categories.id as cat_id')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join('categories', 'categories.id', '=', 'events.category_id')
            // ->groupBy('quantity')
            ->orderBy('price', 'asc')
            ->where('approve', '1')
            ->where('ticket_listings.eventlisting_id', $id);

        $categoriesFromTicketListing = TicketListing::select('ticket_listings.type_cat')
            ->groupBy('type_cat')
            ->orderBy('type_cat', 'asc')
            ->where('approve', '1')
            ->where('ticket_listings.eventlisting_id', $id)
            ->get();
        $colors = TicketListing::select('ticket_listings.type_cat')
            ->groupBy('type_cat')
            ->where('approve', '1')
            ->orderBy('type_cat', 'asc')
            ->where('ticket_listings.eventlisting_id', $id)
            ->get();
        // dd($colors);

        $restrictionsFromTicketListing = TicketListing::select('ticket_listings.ticket_restrictions')
            ->groupBy('ticket_restrictions')
            ->where('ticket_listings.eventlisting_id', $id)
            ->get();

        $ticketsNoFilter = TicketListing::select('ticket_listings.quantity')
            ->groupBy('quantity')
            ->orderBy('price', 'asc')
            ->where('approve', '1')
            ->where('ticket_listings.eventlisting_id', $id);
        // dd($eventListings);
        if (Request::get('Restriction_filter') !== null) {
            $tickets = $tickets->where('ticket_restrictions', '=', Request::get('Restriction_filter'));
        }
        if (Request::get('Cat_filter') !== null) {
            $tickets = $tickets->where('type_cat', '=', Request::get('Cat_filter'));
        }
        if (Request::get('sort') == 'price_asc') {
            $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name', 'categories.id as cat_id')
                ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
                ->join('events', 'events.id', '=', 'event_listings.event_id')
                ->join('categories', 'categories.id', '=', 'events.category_id')
                ->orderBy('price', 'asc')
                ->where('approve', '1')
                ->where('ticket_listings.eventlisting_id', $id);
        } elseif (Request::get('sort') == 'price_desc') {
            $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name', 'categories.id as cat_id')
                ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
                ->join('events', 'events.id', '=', 'event_listings.event_id')
                ->join('categories', 'categories.id', '=', 'events.category_id')
                ->orderBy('price', 'desc')
                ->where('approve', '1')
                ->where('ticket_listings.eventlisting_id', $id);
        } elseif (Request::get('sort') == 'newest') {
            $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name', 'categories.id as cat_id')
                ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
                ->join('events', 'events.id', '=', 'event_listings.event_id')
                ->join('categories', 'categories.id', '=', 'events.category_id')
                ->orderBy('created_at', 'desc')
                ->where('approve', '1')
                ->where('ticket_listings.eventlisting_id', $id);
        } elseif (Request::get('sort') == 'best_value') {
            $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name', 'categories.id as cat_id')
                ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
                ->join('events', 'events.id', '=', 'event_listings.event_id')
                ->join('categories', 'categories.id', '=', 'events.category_id')
                ->orderBy('price', 'asc')
                ->where('approve', '1')
                ->where('ticket_listings.eventlisting_id', $id);
        }
        if (Request::get('qty') !== null) {
            $tickets = $tickets->where('quantity', '>=', Request::get('qty'));
        }
        if (Request::get('search-no-of-tickets') !== null) {
            $tickets = $tickets->where('quantity', '>=', Request::get('search-no-of-tickets'));
        }
        if (Request::get('ticket_restrictions') !== null) {
            $tickets = $tickets->where('ticket_restrictions', '=', Request::get('ticket_restrictions,'));
        }
        if (Request::get('ticket_restrictions') == 'all-tickets') {
            $tickets = $tickets->all();
        }
        if (Request::get('ticket_event') !== null) {
            $tickets = $tickets->where('eventlisting_id', '>=', Request::get('ticket_event'));
        }
        if (Request::get('ticket_type') !== null) {
            $tickets = $tickets->where('ticket_type', '=', Request::get('ticket_type'));
        }
        if (Request::get('search_text') !== null) {
            $tickets = $tickets->where('event_listings.event_name', 'like', '%' . Request::get('search_text') . '%');
        }
        if (Request::get('homeFilters') !== null) {
            $events = $events->where('events.title', 'like', '%' . Request::get('homeFilters') . '%');
        }
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();

        $tickets = $tickets->get();
        $ticketsNoFilter = $ticketsNoFilter->get();
        // dd($tickets);

        // $tickets = TicketListing::where('eventlisting_id',$id)->get();
        return view('payment-tickets/browse-ticket', compact('ticketsNoFilter', 'Footerevents', 'FooterEventListing', 'restrictionsFromTicketListing', 'events', 'tickets', 'eventListings', 'categoriesFromTicketListing', 'colors'));
    }

    public function buyer_ticket_create(Request $request, $eventlisting_id, $ticketid, $sellerid)
    {
        $tickets = TicketListing::find($ticketid);
        $events = Event::find($eventlisting_id);
        $purchases = new Purchases();
        $purchases->user_id = auth()->user()->id;
        $purchases->event_id = $eventlisting_id;
        $purchases->seller_id = $sellerid;
        $purchases->ticket_id = $ticketid;
        $purchases->quantity = Request::get('quantity');
        $purchases->price = Request::get('price');
        $purchases->save();
        return redirect()->route('downloadPdfTicket', ['eventlisting_id' => $events->id, 'ticketid' => $tickets->id, 'sellerid' => $tickets->user_id]);
    }

    public function buyer_ticket_checkout(TicketListing $ticket, EventListing $event, $eventlisting_id, $ticketid, $sellerid)
    {
        $events = EventListing::select('*', 'venues.title as vTitle', 'venues.image as vImage')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            // ->join('venues', 'venues.id', '=', 'events.venue_id')
            ->join('venues', 'venues.title', '=', 'event_listings.venue_name')
            ->where('event_listings.id', $eventlisting_id)
            ->first();
        // dd($events);
        TicketListing::find($ticketid)->increment('views');
        $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name', 'categories.id as cat_id')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join('categories', 'categories.id', '=', 'events.category_id')
            ->where('approve', '1')
            ->where('ticket_listings.id', $ticketid)
            ->first();
        // dd($tickets);
        $sellers = User::find($sellerid);
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
        $sellerCountry = Seller::where('user_id', $sellerid)->first();
        return view('payment-tickets/checkout', compact('Footerevents', 'FooterEventListing', 'tickets', 'events', 'sellers', 'sellerCountry'));
    }

    public function buyer_ticket_detail(TicketListing $ticket, EventListing $event, $eventid, $ticketid, $sellerid)
    {
        $events = Event::join('venues', 'venues.id', '=', 'events.venue_id')
            ->select('events.*', 'venues.title as vTitle', 'venues.image as vImage')
            ->where('events.id', $eventid)
            ->first();
        // $eventListing = EventListing::select('event_listings.*')->where('event_listings.event_id', $eventid)->first();
        $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('vanue_sections', 'vanue_sections.id', '=', 'ticket_listings.section')
            ->join('venue_section_rows', 'venue_section_rows.id', '=', 'ticket_listings.row')
            ->where('ticket_listings.id', $ticketid)
            ->first();
        // dd($tickets);
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
        $sellers = User::find($sellerid);
        return view('payment-tickets/ticket_detail', compact('FooterEventListing', 'Footerevents', 'tickets', 'events', 'sellers'));
    }

    public function dashboard_orders_show(Purchases $purchases, TicketListing $ticket, Event $event)
    {
        $purchases = Purchases::select('purchases.*', 'event_listings.event_name as event_name')
            ->join('ticket_listings', 'ticket_listings.id', '=', 'purchases.ticket_id')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->where('purchases.user_id', auth()->user()->id)
            ->get();

        return view('dashboard/orders', compact('purchases'));
    }

    public function Pdf_template(TicketListing $ticket, Event $event, $id)
    {
        $events = Event::join('venues', 'venues.id', '=', 'events.venue_id')
            ->select('events.*', 'venues.title as vTitle', 'venues.image as vImage')
            ->where('events.id', $id)
            ->first();
        $eventListings = EventListing::where('status', 1)
            ->where('event_id', $id)
            ->select('id', 'event_name', 'venue_name')
            ->first();
        // dd($events);
        $tickets = TicketListing::select('ticket_listings.*', 'event_listings.event_name')
            ->join('event_listings', 'event_listings.id', '=', 'ticket_listings.eventlisting_id')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join('vanue_sections', 'vanue_sections.id', '=', 'ticket_listings.section')
            ->join('venue_section_rows', 'venue_section_rows.id', '=', 'ticket_listings.row')
            ->where('approve', '1')
            // ->where('ticket_listings.id',$id)
            ->where('events.id', $id)
            ->first();

        $pdf = Pdf::loadView('downloadPDF', [
            'tickets' => $tickets,
            'events' => $events,
            'eventListings' => $eventListings,
        ]);
        return $pdf->download('ticket.pdf');

        return view('downloadPDF', compact('tickets', 'events', 'sellers'));
    }
}
