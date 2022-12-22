<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\PdfUploadController;
use App\Http\Controllers\PurchasesController;
use App\Http\Controllers\VanueSectionController;
use App\Http\Controllers\VenueSectionRowsController;
use App\Http\Controllers\TicketListingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',  [WebController::class, 'index'])->name('home');
Route::get('/login', function () {
    return view('auth.login');
})->name("login");
Route::get('/signup', function () {
    return view('auth.signup');
})->name("signup");
// DASHBOARD Routes
Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});
// Route::get('/dashboard/orders', function () {
//     return view('dashboard/orders');
// });

Route::get('/dashboard/orders' , [PurchasesController::class,'dashboard_orders_show'])->name('dashboard.orders_show');
// Route::get('/dashboard/listings', function () {
//     return view('dashboard/listings');
// });

Route::get('/dashboard/listings' , [TicketController::class,'dashboard_listing'])->name('dashboard.listing');

Route::post('/dashboard/create/listings' , [TicketController::class,'dashboard_add_listing'])->name('dashboard.add.listing');

// Route::get('/dashboard/sales', function () {
//     return view('dashboard/sales');
// });

Route::get('/dashboard/sales' , [SalesController::class,'dashboard_sales_show'])->name('dashboard.sales_show');

Route::get('/dashboard/my-payments', function () {
    return view('dashboard/my-payments');
});
Route::get('/dashboard/settings', function () {
    return view('dashboard/settings');
});
Route::get('/dashboard/wallet', function () {
    return view('dashboard/wallet');
});

// Seller Module Routes
// Route::get('/Sell-tickets', function () {
//     return view('tickets/selltickets');
// });
Route::get('/Sell-tickets' , [TicketController::class,'sell_category_show'])->name('sell.ticket.index');

Route::get('/Sell-tickets/set-ticket-address', function () {
    return view('tickets/set-ticket-address');
});
// Route::get('/Sell-tickets/setticketprice', function () {
//     return view('tickets/setticketprice');
// });
Route::get('/tickets/{id}/setticketprice' , [TicketController::class,'show_price'])->name('seller.ticket_price.index');

Route::post('/tickets/{id}/save-price' , [TicketController::class,'savePrice'])->name('seller.complete_ticket.save');
Route::get('/tickets/{id}/add-address' , [TicketController::class,'showAddressPage'])->name('seller.complete_ticket.address.save');

Route::get('/tickets/{id}/upload-ticket' , [TicketController::class,'show_ticket'])->name('seller.complete_ticket.show');

Route::get('/tickets/upload-E-tickets', function () {
    return view('tickets.upload_Pdf');
});

Route::get('/Sell-tickets/ticket-authentication', function () {
    return view('tickets/ticket-authentication');
});
// Route::get('/Sell-tickets/tickets-details', function () {
//     return view('tickets/tickets-details');
// });
Route::get('/tickets/{id}/tickets-details' , [TicketController::class,'index'])->name('seller.ticket.index');
Route::post('/tickets/{id}/tickets-details' , [TicketController::class,'store'])->name('seller.ticketlisting.store');
// Route::get('/Sell-tickets/tickets-home', function () {
//     return view('tickets/tickets-home');
// });

Route::get('/Sell-tickets/tickets-home/{id}' , [TicketController::class,'event_category_ticket'])->name('event.category.ticket');
Route::get('/Sell-tickets/tickets-home/{id}' , [TicketController::class,'event_category_ticket'])->name('event.category.ticket');

Route::get('/Sell-tickets/{ticket_listing}/upload-ticket', [TicketController::class,'upload_tickets'])->name('event.ticketlisting.ticket.upload');


// Buyer Module Routes
// Route::get('/tickets/browse', function () {
//     return view('payment-tickets.browse-tickets');
// })->name("tickets.view");

// Route::get('/tickets/{id}/browse' , [TicketController::class,'buyer_tickets_index'])->name('buyer.tickets.index');
// Route::get('/tickets/{id}/browse' , [PurchasesController::class,'buyer_tickets_index'])->name('buyer.tickets.index');
// Route::get('/ticket/view', function () {
//     return view('payment-tickets.browse-ticket');
// })->name("tickets.single");

// Route::get('/ticket/{id}/view' , [TicketController::class,'buyer_ticket_show'])->name('buyer.ticket.show');

// Purchase module
Route::get('/ticket/{id}/view' , [PurchasesController::class,'buyer_ticket_show'])->name('buyer.ticket.show');
Route::post('/tickets/{eventlisting_id}/{ticketid}/{sellerid}/view' , [PurchasesController::class,'buyer_ticket_create'])->name('buyer.ticket.create');

Route::get('/ticket/{eventlisting_id}/{ticketid}/{sellerid}/checkout' , [PurchasesController::class,'buyer_ticket_checkout'])->name('buyer.ticket.checkout');
// Route::get('/ticket/checkout', function () {
//     return view('payment-tickets.checkout');
// })->name("tickets.checkout");


// Route::get('/ticket/checkout/pages', function () {
    //     return view('tickets.checkout');
    // });

// Route::get('/ticket/{id}/checkout' , [TicketController::class,'buyer_ticket_checkout'])->name('buyer.ticket.checkout');



Route::get('/tickets', function () {
    return view('payment-tickets.home');
})->middleware(['auth'])->name("tickets");

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();
Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//purchases dashboard

Route::get('dashboard/my_orders', [PurchasesController::class, 'dashboard_purchase_show'])->name('dashboard.purchases.show');

//Download PDF

Route::get('/Pdf_template/{eventid}/{sellerid}/{ticketid}/',[PurchasesController::class,'Pdf_template'])->name('Pdftemplate');

Route::get('/downloadPdf/{eventid}/{sellerid}/{ticketid}/',[PurchasesController::class,'downloadPdf'])->name('downloadPdfTicket');

//E- Ticket

Route::get('/E-Ticket',[MailController::class,'index'])->name('E-Ticket');

// Upload PDF

Route::post('/upload-pdfticket',[PdfUploadController::class,'store'])->name('upload_pdf_ticket');
