<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventListing;
use App\Models\Category;
use App\Models\Venues;

class EventListingController extends Controller
{
    public function EventListingForm()
    {
        $categories = Category::all();
        $events = Event::all();
        $venues_dropdown = Venues::all();
        return view("Admin/pages/event_ListingForm",compact('categories','events','venues_dropdown'));
    }

    public function EventListing(Request $request){
        
        $ticket= new EventListing();
        $ticket->event_name=$request->event_name;
        $ticket->event_id=$request->event;
        $ticket->status=$request->status;

        $ticket->category_event=$request->category_event;
        $ticket->location=$request->location;
        $ticket->event_date=$request->event_date;
        $ticket->venue_name=$request->venue_name;
        $ticket->start_time=$request->start_time;
        $ticket->end_time=$request->end_time;

        if($request->hasfile('layoutImage'))
        {
            $layoutImage=$request->file('layoutImage');
            $ext = $layoutImage->GetClientOriginalExtension();
            $file2=time().'.'.$ext;
            
            $layoutImage->move(public_path('uploads/eventListing'), $file2);
            $ticket['layoutImage']=$file2;
        } 
        // dd($ticket);
        $ticket->save();
        $request->session()->flash('msg','Listing Has Been Added Successfully'); 
        return redirect('Admin-Panel/event-listing');
    }
    public function showListing()
    {
        $listing = EventListing::all();
        return view("Admin/pages/event_Listing",compact('listing'));
    }
    public function EnableEventListing(Request $request)
    {
        $events = EventListing::where('event_listings.id', $request->buyer_id)->first();
        $events->status=1;
        $events->update();
        return redirect()->back()->with('msg','Event has been Enable Successfully ');
    }
    public function DisableEventListing(Request $request)
    {
        $events = EventListing::where('event_listings.id', $request->buyer_id)->first();
        $events->status=0;
        $events->update();
        return redirect()->back()->with('msg','Event has been Disable Successfully');
    }
    public function editListing($id){
        $events = Event::all();
        $listings = EventListing::find($id);
        return view('Admin/pages/editListing',compact('listings','events'));
    }

    public function updateListing(Request $request,$id){
        //return $request;
        $listings = EventListing::find($id);
        $listings->event_name=$request->event_name;
        $listings->event_id=$request->event;
        $listings->status=$request->status;
        $listings->category_event=$request->category_event;
        $listings->location=$request->location;
        $listings->event_date=$request->event_date;
        $listings->venue_name=$request->venue_name;
        $listings->start_time=$request->start_time;
        $listings->end_time=$request->end_time;
        if($request->hasfile('layoutImage'))
        {
            $layoutImage=$request->file('layoutImage');
            $ext = $layoutImage->GetClientOriginalExtension();
            $file2=time().'.'.$ext;
            $layoutImage->move(public_path('uploads/eventListing'), $file2);
            $listings['layoutImage']=$file2;
        } 
        $listings->update();
        $request->session()->flash('msg','Data Has Been Updated Successfully'); 
        return redirect('Admin-Panel/event-listing');
    }
    public function delete(Request $request,$id){
        $listings = EventListing::find($id);
        $listings->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}
