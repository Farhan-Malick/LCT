<?php

namespace App\Http\Controllers;

use App\Models\Venues;
use App\Models\Country;
use Illuminate\Http\Request;

class VenuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get countries
        $countries = Country::all();
        return view('Admin.pages.add_venue', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allVenues()
    {
        $venues = Venues::all();
        return view('Admin.pages.allVenues', compact('venues'));
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
        $request->validate([
            "venue_name" => "required",
            "venue_address" => "required",
            "venue_city" => "required",
            "venue_state" => "required",
            "country_id" => "required",
            "venue_zipcode" => "required",
            "venue_seated_guest" => "required",
            "venue_standing_guest" => "required",
            "venue_description" => "required",
            "venue_longitude" => "required",
            "venue_latitude" => "required",
            "venue_type" => "required",
            "venue_amenities" => "required",
            'file' => 'required|mimes:png,gif,jpg,jpeg|max:10000',
        ]);

        //image upload
        $fileName = time().'.'.$request->file->extension();

        $request->file->move(public_path('uploads/venues'), $fileName);


        $venue = new Venues();
        $venue->title = $request->venue_name;
        $venue->description = $request->venue_description;
        $venue->venue_type = $request->venue_type;
        $venue->amenities = $request->venue_amenities;
        $venue->slug =str_replace(' ', '-', $request->venue_name);
        $venue->seated_guestnumber = $request->venue_seated_guest;
        $venue->standing_guestnumber = $request->venue_standing_guest;
        $venue->address = $request->venue_address;
        $venue->city = $request->venue_city;
        $venue->country_id = $request->country_id;
        $venue->state = $request->venue_state;
        $venue->zipcode = $request->venue_zipcode;
        $venue->image = $fileName;
        $venue->glat = $request->venue_longitude;
        $venue->glong = $request->venue_latitude;
        $venue->status = 1;
        $venue->save();
        return redirect()->back()->with('success', 'Venue added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venues  $venues
     * @return \Illuminate\Http\Response
     */
    public function show(Venues $venues)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venues  $venues
     * @return \Illuminate\Http\Response
     */
    public function editVenues(Venues $venues,$id)
    {
        // return view('Admin.pages.editVenue');
        $venues = Venues::find($id);
        return view('Admin/pages/editVenue',compact('venues'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venues  $venues
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'image' => 'required|mimes:png,gif,jpg,jpeg|max:10000',
        ]);
        //image upload
        // $fileName = time().'.'.$request->file->extension();

        // $request->file->move(public_path('uploads/venues'), $fileName);

        $venues = Venues::find($id);
        $venues->title = $request->venue_name;
        $venues->venue_type = $request->venue_type;
        $venues->seated_guestnumber = $request->venue_seated_guest;
        $venues->standing_guestnumber = $request->venue_standing_guest;
        $venues->address = $request->venue_address;
        $venues->city = $request->venue_city;
        // $venues->country_id = $request->country_id;
        $venues->state = $request->venue_state;
        $venues->zipcode = $request->venue_zipcode;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads/venues'), $image_name);
            $venues->image = $image_name;
        }
        $venues->update();
        return redirect('Admin-Panel/venue/all-venues')->with('success', 'Venue Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venues  $venues
     * @return \Illuminate\Http\Response
     */
    public function deleteVenue(Request $request,$id){
        
        $venues = Venues::find($id);
        $venues->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}
