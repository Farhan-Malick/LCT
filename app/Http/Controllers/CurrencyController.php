<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    //

    public function index(Currency $currency){

        $currencies = Currency::all();
        return view('Admin/pages/currency',compact('currencies'));
    }

    public function create(Request $request){

        //return $request;
        $currencies = new Currency();
        $currencies->currency_type = $request->currency;
        $currencies->save();

        return redirect()->route('admin.currency.index',compact('currencies'));
       

    }

    public function edit($id){
        //return $id;
        $currencies = Currency::find($id);

        return view('Admin/pages/currency_update',compact('currencies'));
    }

    public function update(Request $request,$id){
        //return $request;
        $currencies = Currency::find($id);
        $currencies->currency_type = $request->currency;
        $currencies->update();

        return redirect()->route('admin.currency.index');
    }

    public function destroy($id){
        
        $currencies = Currency::find($id);
        $currencies->delete();
        return redirect()->route('admin.currency.index');
    }
}
