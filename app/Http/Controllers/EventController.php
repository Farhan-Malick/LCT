<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use App\Models\EventRequest;
use App\Models\Venues;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get categories
        $categories = Category::all();
        $venues = Venues::all();
        return view('Admin.pages.add_event', compact('categories', 'venues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function dashboard_add_listing(Request $request){

    //     //return $request;

    //     $ticket= new Ticket();
    //     $ticket->user_id=auth()->user()->id;
    //     $ticket->title=$request->title;
    //     $ticket->price=$request->price;
    //     $ticket->quantity=$request->quantity;
    //     $ticket->event_id=$request->event;
    //     $ticket->status=$request->status;
    //     $ticket->save();
    //     return back();

    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required',
            'poster' => 'required',
            'venue_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'category_id' => 'required',
        ]);

        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->slug = str_replace(' ', '-', $request->title);
        $event->venue_id = $request->venue_id;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->start_time = $request->start_time;
        $event->end_time = $request->end_time;
        $event->category_id = $request->category_id;

        // get current user id
        // $event->user_id = Auth::user()->id;
        $event->user_id = 1;

        // upload thumbnail & poster image
        if($request->hasFile('thumbnail')){
            $thumbnail = $request->file('thumbnail');
            $thumbnail_name = time().'_'.$thumbnail->getClientOriginalName();
            $thumbnail->move(public_path('uploads/events/thumbnail'), $thumbnail_name);
            $event->thumbnail = $thumbnail_name;
        }

        if($request->hasFile('poster')){
            $poster = $request->file('poster');
            $poster_name = time().'_'.$poster->getClientOriginalName();
            $poster->move(public_path('uploads/events/poster'), $poster_name);
            $event->poster = $poster_name;
        }

        // relation with venue id on event_venue table
        $event->save();
        $event->venues()->attach($request->venue_id);
        return redirect()->back()->with('success', 'Event created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }

    public function show_request()
    {
      
        return view('event_request');
    }
    public function admin_show_request(EventRequest $eventRequest)
    {
        $requests=EventRequest::all();
        
      
        return view('Admin/pages/event_requests',compact('requests'));
    }

    public function store_request(Request $request,  EventRequest $eventRequest)
    {
        //return $request;
        $eventRequest->event = $request->event;
        $eventRequest->category_event = $request->event_category;
        $eventRequest->event_date = $request->event_date;
        $eventRequest->start_time = $request->start_time;
        $eventRequest->end_time = $request->end_time;
        $eventRequest->venue_name = $request->venue_name;
        $eventRequest->location = $request->location;
        $eventRequest->save();
        return back()->with('msg',"Your request has been sent to the Admin center");
    }
    public function destroy_request($id){
        //return $id;
        $eventRequest = EventRequest::find($id);
        $eventRequest->delete();
        return redirect()->route('admin.request.show');
    }
    
    public function allEvents(){
        // $tickets = Ticket::all();
        $events = Event::all();
        return view('/Admin/pages/allEvents',compact('events'));
    }
    public function editEvents($id){
        $events = Event::find($id);
        return view('Admin/pages/editEvent',compact('events'));
    }
    public function updateEvents(Request $request,$id){
        //return $request;
        $events = Event::find($id);
        $events->title = $request->title;
        $events->description = $request->description;
        $events->slug = $request->slug;
        // $events->poster = $request->poster;
        $events->start_date = $request->start_date;
        $events->end_date = $request->end_date;
        $events->start_time = $request->start_time;
        $events->end_time = $request->end_time;
        // upload thumbnail & poster image
       // upload thumbnail & poster image
       if($request->hasFile('thumbnail')){
        $thumbnail = $request->file('thumbnail');
        $thumbnail_name = time().'_'.$thumbnail->getClientOriginalName();
        $thumbnail->move(public_path('uploads/events/thumbnail'), $thumbnail_name);
        $events->thumbnail = $thumbnail_name;
    }
    if($request->hasFile('poster')){
        $poster = $request->file('poster');
        $poster_name = time().'_'.$poster->getClientOriginalName();
        $poster->move(public_path('uploads/events/poster'), $poster_name);
        $events->poster = $poster_name;
    }
        $events->update();
        $request->session()->flash('msg','Data Has Been Updated Successfully'); 
        return redirect('Admin-Panel/All-event');
    }
    public function delete($id, Request $request){
        $events = Event::find($id);
        $events->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
    
}

    

