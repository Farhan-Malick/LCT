<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\TicketListing;
use App\Models\Category;

class TicketListingController extends Controller
{
    public function ticketListingForm()
    {
        $categories = Category::all();
        $events = Event::all();
        return view("Admin/pages/ticket_ListingForm",compact('categories','events'));
    }

    public function ticketListing(Request $request){
        
        $ticket= new TicketListing();
        $ticket->title=$request->title;
        $ticket->event_id=$request->event;
        $ticket->status=$request->status;
        // dd($ticket);
        $ticket->save();
        $request->session()->flash('msg','Listing Has Been Added Successfully'); 
        return redirect('Admin-Panel/tickets/ticket-listing');
    }
    public function showListing()
    {
        $listing = TicketListing::all();
        return view("Admin/pages/ticket_Listing",compact('listing'));
    }
    public function editListing($id){
        $events = Event::all();
        $listings = ticketListing::find($id);
        return view('Admin/pages/editListing',compact('listings','events'));
    }

    public function updateListing(Request $request,$id){
        //return $request;
        $listings = ticketListing::find($id);
        $listings->title = $request->title;
        $listings->event_id=$request->event;
        $listings->status=$request->status;

        $listings->update();
        $request->session()->flash('msg','Data Has Been Updated Successfully'); 
        return redirect('Admin-Panel/tickets/ticket-listing');
    }
    public function delete(Request $request,$id){
        
        $listings = ticketListing::find($id);
        $listings->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}
