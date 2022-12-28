<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchases;
use Illuminate\Support\Facades\DB;

class MisController extends Controller
{
    public function index()
    {
        // $prices = DB::table('purchases')->sum('price');
        // dd($prices);
        // return view('Admin.includes.misPoints',compact('prices'));
    }
}
