<?php
use App\Http\Controllers\CategoryController;
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
use App\Http\Controllers\VenuesController;
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
Route::get('/Admin', function () {
	return view('Admin.pages.login');
});
Route::get('/Admin-Register', function () {
	return view('Admin.pages.register_v3');
});
Route::get('/Admin-Panel', function () {
	return view('Admin.pages.index');
});

// group route for admin with middleware
Route::group(['middleware' => ['web']], function () {
    Route::get('/Admin-Panel/add-event', [EventController::class, 'index']);
    Route::post('/Admin-Panel/add-event', [EventController::class, 'store']);
    // ALL EVENTS CRUD
    Route::get('/Admin-Panel/All-event', [EventController::class, 'allEvents']);
    Route::get('/Admin-Panel/Edit-Event/{id}', [EventController::class, 'editEvents']);
    Route::post('/Admin-Panel/event/update/{id}', [EventController::class, 'updateEvents']);
    Route::get('/Admin-Panel/event/delete/{id}', [EventController::class, 'delete']);


    Route::get('/Admin-Panel/add-venue', [VenuesController::class, 'index']);
    Route::post('/Admin-Panel/add-venue', [VenuesController::class, 'store']);
    Route::get('/Admin-Panel/venue/all-venues', [VenuesController::class, 'allVenues']);
    Route::get('/Admin-Panel/venue/all-venues/delete/{id}', [VenuesController::class, 'deleteVenue']);
    Route::get('/Admin-Panel/add-category',function() {
        return view('Admin.pages.add_category');
    });
    Route::post('/Admin-Panel/addCategory', [CategoryController::class, 'store']);


    //Admin Category Request
        Route::get('show/request', [EventController::class, 'show_request'])->name('request.show');
        Route::get('event_requests', [EventController::class, 'admin_show_request'])->name('admin.request.show');
        Route::get('event_requests/{id}/destroy', [EventController::class, 'destroy_request'])->name('admin.request.destroy');
        Route::post('request/event', [EventController::class, 'store_request'])->name('request.event');
        //Admin Sales
        Route::get('admin/sales', [SalesController::class, 'index'])->name('admin.sales.index');

        //Admin Add venue Sections

        Route::get('venue_sections', [VanueSectionController::class, 'index'])->name('admin.sections.index');
        Route::post('venue_sections/create', [VanueSectionController::class, 'create'])->name('admin.sections.create');
        Route::get('venue_sections/{id}/edit', [VanueSectionController::class, 'edit'])->name('admin.sections.edit');
        Route::post('venue_sections/{id}/update', [VanueSectionController::class, 'update'])->name('admin.sections.update');
        Route::get('venue_sections/{id}/destroy', [VanueSectionController::class, 'destroy'])->name('admin.sections.destroy');

        //Admin Add Venue Section Rows

        Route::get('venue_section_rows', [VenueSectionRowsController::class, 'index'])->name('admin.section_rows.index');
        Route::post('venue_section_rows/create', [VenueSectionRowsController::class, 'create'])->name('admin.section_rows.create');
        Route::get('venue_section_rows/{id}/edit', [VenueSectionRowsController::class, 'edit'])->name('admin.section_rows.edit');
        Route::post('venue_section_rows/{id}/update', [VenueSectionRowsController::class, 'update'])->name('admin.section_rows.update');
        Route::get('venue_section_rows/{id}/destroy', [VenueSectionRowsController::class, 'destroy'])->name('admin.section_rows.destroy');

        //Admin Add Currency 

        Route::get('currency', [CurrencyController::class, 'index'])->name('admin.currency.index');
        Route::post('currency/create', [CurrencyController::class, 'create'])->name('admin.currency.create');
        Route::get('currency/{id}/edit', [CurrencyController::class, 'edit'])->name('admin.currency.edit');
        Route::post('currency/{id}/update', [CurrencyController::class, 'update'])->name('admin.currency.update');
        Route::get('currency/{id}/destroy', [CurrencyController::class, 'destroy'])->name('admin.currency.destroy');

        //Admin Ticket Routes

        Route::get('admin/all_tickets', [TicketController::class, 'admin_tickets_show'])->name('admin.tickets.show');

        Route::get('Admin-Panel/tickets/ticket-listing-form', [TicketListingController::class, 'ticketListingForm']);
        Route::get('Admin-Panel/tickets/ticket-listing', [TicketListingController::class, 'showListing']);
        Route::get('/Admin-Panel/tickets/listing-edit/{id}', [TicketListingController::class, 'editListing']);
        Route::post('/Admin-Panel/tickets/ticket-listing/update/{id}', [TicketListingController::class, 'updateListing']);
        Route::get('/Admin-Panel/tickets/ticket-listing/delete/{id}', [TicketListingController::class, 'delete']);

        Route::post('Admin-Panel/tickets/ticket-listing', [TicketListingController::class, 'ticketListing']);
        //Admin Puchase Module

        Route::get('admin/all_sales', [SalesController::class, 'admin_purchase_show'])->name('admin.sales.show');


});