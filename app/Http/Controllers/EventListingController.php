<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventListing;
use App\Models\Category;

class EventListingController extends Controller
{
    public function EventListingForm()
    {
        $categories = Category::all();
        $events = Event::all();
        return view("Admin/pages/ticket_ListingForm",compact('categories','events'));
    }

    public function EventListing(Request $request){
        
        $ticket= new EventListing();
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
        $listing = EventListing::all();
        return view("Admin/pages/ticket_Listing",compact('listing'));
    }
    public function editListing($id){
        $events = Event::all();
        $listings = EventListing::find($id);
        return view('Admin/pages/editListing',compact('listings','events'));
    }

    public function updateListing(Request $request,$id){
        //return $request;
        $listings = EventListing::find($id);
        $listings->title = $request->title;
        $listings->event_id=$request->event;
        $listings->status=$request->status;

        $listings->update();
        $request->session()->flash('msg','Data Has Been Updated Successfully'); 
        return redirect('Admin-Panel/tickets/ticket-listing');
    }
    public function delete(Request $request,$id){
        
        $listings = EventListing::find($id);
        $listings->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}
