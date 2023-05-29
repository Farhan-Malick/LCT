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
use App\Http\Controllers\SellerCategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserEditController;
use App\Http\Controllers\LanguageController;
use App\Http\Middleware\AdminAuth;

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
Route::get('/login', [LoginController::class])->name("login");
Route::get('/User-Edit/{id}', [UserEditController::class, 'userProfileEdit']);
Route::post('/User-Update/{id}', [UserEditController::class, 'userProfileUpdate']);

Route::get('/Forget-Password', [UserEditController::class, 'forgetpass']);
Route::post('/Password-Reset', [UserEditController::class, 'updateForgottenPassword']);

// Route::get('/New-password', [UserEditController::class, 'EnterNewPassword']);

Route::get('/signup', function () {
    $FooterEventListing = App\Models\EventListing::get();
    $Footerevents = App\Models\Event::get();
    return view('auth.signup',compact('FooterEventListing','Footerevents'));
})->name("signup");
// DASHBOARD Routes
Route::get('/dashboard', function () {
    $FooterEventListing = App\Models\EventListing::get();
    $Footerevents = App\Models\Event::get();
return view('dashboard/dashboard',compact('FooterEventListing','Footerevents'));
});
Route::get('/TicketDetail', function () {
    return view('payment-tickets/ticket_detail');
});

Route::get('/contact-us', function () {
    $FooterEventListing = App\Models\EventListing::get();
        $Footerevents = App\Models\Event::get();
    return view('/contactus',compact('FooterEventListing','Footerevents'));
});
// Route::get('/dashboard/orders', function () {
//     return view('dashboard/orders');
// });
Route::get('show/request', [EventController::class, 'show_request'])->name('request.show');
Route::post('request/event', [EventController::class, 'store_request'])->name('request.event');
Route::post('contact-us', [ContactController::class, 'Store'])->name('contact-us');

Route::get('/dashboard/orders' , [PurchasesController::class,'dashboard_orders_show'])->name('dashboard.orders_show');

// Route::get('/dashboard/listings', function () {
//     return view('dashboard/listings');
// });
Route::get('/dashboard' , [TicketController::class,'dashboard_listing'])->name('dashboard.listing');
Route::get('/dashboard/Set-Price/{id}' , [PurchasesController::class,'setPriceFromProfile']);
Route::post('/dashboard/update-Price/{id}' , [PurchasesController::class,'updatePriceFromProfile']);

Route::get('/dashboard/listings/{id}/destroy', [TicketController::class, 'ticket_deActivation'])->name('dashboard.ticket.Deactivate');
Route::get('/dashboard/ticket/view', [TicketController::class, 'ticket_deActivationView'])->name('dashboard/ticket/Deactivation-view');

Route::post('/toggle-deactivate', [TicketController::class, 'ticket_deActivation']);
Route::post('/toggle-Active', [TicketController::class, 'ticket_Activation']);

Route::post('/dashboard/create/listings' , [TicketController::class,'dashboard_add_listing'])->name('dashboard.add.listing');

// Route::get('/dashboard/sales', function () {
//     return view('dashboard/sales');
// });

Route::get('/dashboard/sales' , [SalesController::class,'dashboard_sales_show'])->name('dashboard.sales_show');

Route::get('/dashboard/my-payments', function () {
    $FooterEventListing = App\Models\EventListing::get();
    $Footerevents = App\Models\Event::get();
return view('dashboard/my-payments',compact('FooterEventListing','Footerevents'));
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
//     return view('ticketsTicketController');
// });
Route::get('/tickets/{id}/setticketprice' , [TicketController::class,'show_price'])->name('seller.ticket_price.index');

Route::post('/tickets/{id}/save-price' , [TicketController::class,'savePrice'])->name('seller.complete_ticket.save');
Route::get('/tickets/{id}/add-address' , [TicketController::class,'showAddressPage'])->name('seller.complete_ticket.address.save');
Route::post('/tickets/{id}/store-address' , [TicketController::class,'storeAddress'])->name('seller.complete_ticket.address.store');

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

Route::get('/Sell-tickets/{ticket_listing}/upload-ticket', [TicketController::class,'upload_tickets'])->name('event.ticketlisting.ticket.uploads');
Route::post('/Sell-tickets/{ticket_listing}/upload-ticket', [TicketController::class,'eticketStore'])->name('event.ticketlisting.ticket.upload');

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
Route::get('/ticket/{ticketid}/purchase' , [PurchasesController::class,'buyer_ticket_purchase'])->name('buyer.ticket.purchase');
Route::post('/tickets/{eventlisting_id}/{ticketid}/{sellerid}/view' , [PurchasesController::class,'buyer_ticket_create'])->name('buyer.ticket.create');

Route::get('/ticket/{eventlisting_id}/{ticketid}/{sellerid}/checkout' , [PurchasesController::class,'buyer_ticket_checkout'])->name('buyer.ticket.checkout');
Route::get('ticket/{eventlisting_id}/{ticketid}/{sellerid}/ProceedToCheckout', [PurchasesController::class,'ProceedToCheckout'])->name('buyer.ticket.proceedToCheckout');
Route::post('ticket/{eventlisting_id}/{ticketid}/{sellerid}/ProceedToCheckout', [PurchasesController::class,'buyer_ticket_purchase_CheckOut'])->name('payment.checkout.finalize');

Route::get('/ticket/{eventlisting_id}/{ticketid}/{sellerid}/TicketDetail' , [PurchasesController::class,'buyer_ticket_detail'])->name('buyer.ticket.detail');
// Route::get('/ticket/checkout', function () {
//     return view('payment-tickets.checkout');
// })->name("tickets.checkout");

// Route::get('/ticket/checkout/pages', function () {
    //     return view('tickets.checkout');
    // });

// Route::get('/ticket/{id}/checkout' , [TicketController::class,'buyer_ticket_checkout'])->name('buyer.ticket.checkout');

//mail route
Route::get('/tickets/{id}', [TicketController::class,'showCatTickets'])->name("tickets.category");
Route::get('/tickets', [TicketController::class,'showCatTickets'])->name("tickets");
// Route::get('/sendmail' , [TicketController::class,'sendAwienMail'])->name('buyer.ticket.email');
Route::get('/sendmail' , [MailController::class,'index']);

/* Route::get('/tickets', function () {
    return view('payment-tickets.home');
})->middleware(['auth'])->name("tickets"); */

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

Route::get('/Pdf_template/{eventlisting_id}/{ticketid}',[PurchasesController::class,'Pdf_template'])->name('Pdftemplate');

// Route::get('/downloadPdf/{eventid}/{sellerid}/{ticketid}/',[PurchasesController::class,'downloadPdf'])->name('downloadPdfTicket');

//E- Ticket

Route::get('/E-Ticket',[MailController::class,'index'])->name('E-Ticket');

// Upload PDF

Route::post('/upload-pdfticket',[PdfUploadController::class,'store'])->name('upload_pdf_ticket');

Route::post('/dashboard',[TicketController::class,'UserPasswordUpdate'])->name('reset');
Route::post('/bank_details',[TicketController::class,'BankDetailsFrom']);
Route::post('language/change',[LanguageController::class,'change'])->name('language.change');



