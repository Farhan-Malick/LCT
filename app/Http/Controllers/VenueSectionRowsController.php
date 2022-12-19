<?php

namespace App\Http\Controllers;

use App\Models\VenueSectionRows;
use Illuminate\Http\Request;

class VenueSectionRowsController extends Controller
{
    //

    public function index(VenueSectionRows $venue_section_rows){

        $venue_section_rows = VenueSectionRows::all();
        

        return view('Admin/pages/venue_section_rows',compact('venue_section_rows'));
    }

    public function create(Request $request){

        //return $request;
        $venue_section_rows = new VenueSectionRows();
        $venue_section_rows->rows = $request->venue_section_row;
        $venue_section_rows->save();

        return redirect()->route('admin.section_rows.index',compact('venue_section_rows'));
       

    }

    public function edit($id){
        //return $id;
        $venue_section_rows = VenueSectionRows::find($id);

        return view('Admin/pages/venue_section_rows_update',compact('venue_section_rows'));
    }

    public function update(Request $request,$id){
        //return $request;
        $venue_section_rows = VenueSectionRows::find($id);
        $venue_section_rows->rows = $request->venue_section_row;
        $venue_section_rows->update();

        return redirect()->route('admin.section_rows.index');
        //return view('Admin/pages/venue_section',compact('venue_sections'));
    }

    public function destroy($id){
        
        $venue_section_rows = VenueSectionRows::find($id);
        $venue_section_rows->delete();
        return redirect()->route('admin.section_rows.index');
    }
}
