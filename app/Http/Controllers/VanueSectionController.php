<?php

namespace App\Http\Controllers;

use App\Models\VanueSections;
use Illuminate\Http\Request;

class VanueSectionController extends Controller
{
    //
    public function index(VanueSections $venue_sections){

        $venue_sections = VanueSections::all();
        return view('Admin/pages/venue_section',compact('venue_sections'));
    }

    public function create(Request $request){

        //return $request;
        $venue_sections = new VanueSections();
        $venue_sections->sections = $request->venue_section;
        $venue_sections->save();

        return redirect()->route('admin.sections.index',compact('venue_sections'));
       

    }

    public function edit($id){
        //return $id;
        $venue_sections = VanueSections::find($id);

        return view('Admin/pages/venue_section_update',compact('venue_sections'));
    }

    public function update(Request $request,$id){
        //return $request;
        $venue_sections = VanueSections::find($id);
        $venue_sections->sections = $request->venue_section;
        $venue_sections->update();

        return redirect()->route('admin.sections.index');
        //return view('Admin/pages/venue_section',compact('venue_sections'));
    }

    public function destroy($id){
        
        $venue_sections = VanueSections::find($id);
        $venue_sections->delete();
        return redirect()->route('admin.sections.index');
    }
}
