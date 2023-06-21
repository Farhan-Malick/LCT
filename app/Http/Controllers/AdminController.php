<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\EventListing;
use App\Models\Event;
use App\Models\Purchases;
use Illuminate\Support\Facades\Hash;
use Auth;


class AdminController extends Controller
{
    public function Users()
    {
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
        $users = User::orderBy('id','desc')->get();
        $price = Purchases::sum('price');
        $totalprofitDivision = $price / 100;
        $totalCompanyProfit =  $totalprofitDivision * 20;
        $userCount = User::count();
        $total_no_sold_tickets = Purchases::sum('quantity');
        return view('Admin.pages.RegisteredUsers',compact('totalCompanyProfit','price','userCount','total_no_sold_tickets','totalprofitDivision','users','FooterEventListing','Footerevents'));
    }

    public function editPassword($id)
{
    // Find the user by ID
    $user = User::findOrFail($id);

    // Return the view with the user data
    return view('Admin.pages.adminPassword', compact('user'));
}
    
public function updatePassword(Request $request, $id)
{
    // Only allow the authenticated user with ID 2 to update their password
    if ($id != 2 || Auth::id() != $id) {
        abort(403, 'Unauthorized action.');
    }

    // Validate the request data
    $validatedData = $request->validate([
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Find the user by ID
    $user = User::findOrFail($id);

    // Update the user's password
    $user->password = Hash::make($validatedData['password']);

    // Save the user
    $user->save();

    // Redirect the user with a success message
    return redirect()->back()->with('success', 'Password updated successfully.');
}


}
