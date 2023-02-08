<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventListing;
use App\Models\Category;


class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // var_dump($request->filter);
        //
        // $events = EventListing::select('*')->join('events', 'events.id', '=', 'event_listings.event_id')->get();
        $events = Event::all();
        $allevents=EventListing::select('event_listings.*', 'venues.title as vTitle', 'events.poster as poster')
        ->join('events', 'events.id', '=', 'event_listings.event_id')
        ->join('venues', 'venues.id', '=', 'events.venue_id');
        if($request->sort == 'Sports'){
            $allevents=EventListing::select('event_listings.*', 'venues.title as vTitle', 'events.poster as poster')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join('venues', 'venues.id', '=', 'events.venue_id')
            ->where('category_event', '=', $request->sort);
        }
        if($request->sort == 'Concert'){
            $allevents=EventListing::select('event_listings.*', 'venues.title as vTitle', 'events.poster as poster')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join('venues', 'venues.id', '=', 'events.venue_id')
            ->where('category_event', '=', $request->sort);
        }
        if($request->sort == 'Festival'){
            $allevents=EventListing::select('event_listings.*', 'venues.title as vTitle', 'events.poster as poster')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join('venues', 'venues.id', '=', 'events.venue_id')
            ->where('category_event', '=', $request->sort);
        }
        if($request->sort == 'Theater'){
            $allevents=EventListing::select('event_listings.*', 'venues.title as vTitle', 'events.poster as poster')
            ->join('events', 'events.id', '=', 'event_listings.event_id')
            ->join('venues', 'venues.id', '=', 'events.venue_id')
            ->where('category_event', '=', $request->sort);
        }
        // ->join('event_listings','event_id' , '=', 'events.id');
        $categories = Category::all();
        if($request->search_text !== null){
            $allevents = $allevents->where('event_listings.event_name', 'like', '%'.$request->search_text.'%');
        }

        if($request->filter !== null){
            $allevents = $allevents->where('event_listings.event_id', '=', $request->filter);
        }

        $allevents = $allevents->get();
        return view('home', compact('events', 'categories','allevents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
