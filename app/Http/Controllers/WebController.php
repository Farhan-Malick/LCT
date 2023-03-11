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
        
        if($request->ajax()){
            $data = [];
            if(!empty($request->search_text)){
                $data=EventListing::where('event_name','LIKE','%'.$request->search_text.'%')->get();
            }
            



            
            $output = '';
            if(count($data) > 0)
            {
                $output = '<ul id="myUL" class="list-group" style="display:block;position:relative; z-index:1">';
                    foreach($data as $row)
                    {  
                        $output .= '<li id="list" class="list-group-item">'.$row->event_name.'</li>';
                    }
                $output .= '</ul>';
            }else{
                $output .= '<li class="list-group-item">No Data Found </li>';
            }
            return $output;
           
        }
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
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
        
        if($request->filter !== null){
            $allevents = $allevents->where('event_listings.event_id', '=', $request->filter);
        }
        if($request->search_text !== null){
            $allevents = $allevents->where('event_listings.event_name', 'like', '%'.$request->search_text.'%');
        }
        $allevents = $allevents->get();
        return view('home', compact('Footerevents','FooterEventListing','events', 'categories','allevents'));
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
    // public function footerEvents(Request $request){
        // $allevents = allevents::get();
        // $events = Event::get();
    //     return view('auth.partials.footer',compact('events','eventListing'));
    // }
}
