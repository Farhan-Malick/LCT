<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SellerCategory;

class SellerCategoryController extends Controller
{
    public function index(SellerCategory $sellerCategories){

        $sellerCategories = SellerCategory::all();
        return view('Admin/pages/sellerCategories',compact('sellerCategories'));
    }

    public function create(Request $request){
        //return $request;
        $sellerCategories = new SellerCategory();
        $sellerCategories->categories = $request->categories;
        $sellerCategories->save();
        return redirect()->route('admin.sellerCategory.index',compact('sellerCategories'));
    }

    public function edit($id){
        //return $id;
        $sellerCategories = SellerCategory::find($id);
        return view('Admin/pages/sellerCategories_update',compact('sellerCategories'));
    }

    public function update(Request $request,$id){
        //return $request;
        $sellerCategories = SellerCategory::find($id);
        $sellerCategories->categories = $request->categories;
        $sellerCategories->update();
        return redirect()->route('admin.sellerCategory.index');
        //return view('Admin/pages/venue_section',compact('venue_sections'));
    }

    public function destroy($id){
        
        $sellerCategories = SellerCategory::find($id);
        $sellerCategories->delete();
        return redirect()->route('admin.sellerCategory.index');
    }
}

