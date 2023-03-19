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
use App\Http\Controllers\EventListingController;
use App\Http\Controllers\MisController;
use App\Http\Controllers\SellerCategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VisitorAnalyticsController;
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


// group route for admin with middleware
Route::group(['middleware' => 'web'], function () {
    Route::get('/admin', function () {
        return view('Admin.pages.login');
    });
    Route::get('/Admin-Register', function () {
        return view('Admin.pages.register_v3');
    });
    Route::get('/Admin-Panel/Dashboard', function () {
        $tickets = App\Models\TicketListing::select('ticket_listings.*', 'vanue_sections.sections as section_name')
        ->join('vanue_sections', 'vanue_sections.id', '=', 'ticket_listings.section')
        ->where('completed', 1)->get();
        $price = App\Models\Purchases::sum('price');
        $totalprofitDivision = $price / 100;
        $totalCompanyProfit =  $totalprofitDivision * 20;
        $userCount = App\Models\User::count();
        $total_no_sold_tickets = App\Models\Purchases::sum('quantity');
        return view('Admin/pages/dashboard',compact('totalCompanyProfit','tickets','price','userCount','total_no_sold_tickets'));
    });
    Route::middleware('adminauth')->group(function () {

       

        Route::get('/view-PDF-File/P-Ticket/{id}', [TicketController::class, 'viewPdfForPaperticket']);
        Route::get('/view-PDF-File/M-Ticket/{id}', [TicketController::class, 'viewPdfForMobileticket']);
        Route::get('/view-PDF-File/E-Ticket/{id}', [TicketController::class, 'viewPdfForEticket']);

        Route::get('/Admin-Panel/Contact-Us', [ContactController::class, 'contactDetailForAdmin']);
        Route::get('/Admin-Panel/Contact-Us/delete/{id}', [ContactController::class, 'contactDelete']);

        Route::get('/Admin-Panel/EventListing-Visitors', [VisitorAnalyticsController::class, 'visitors']);
        Route::get('/Admin-Panel/Event-Visitors', [VisitorAnalyticsController::class, 'eventVisitors']);
        Route::get('/Admin-Panel/Ticket-Visitors', [VisitorAnalyticsController::class, 'TicketVisitors']);
                //paperTicket
        Route::get('/Admin-Panel/Edit-PaperTicket/{id}', [TicketController::class, 'editPaperTicket']);
        Route::post('/Admin-Panel/PaperTicket/update/{id}', [TicketController::class, 'updatePaperTicket']);
                // E_Ticket 
        Route::get('/Admin-Panel/Edit-E_Ticket/{id}', [TicketController::class, 'editE_Ticket']);
        Route::post('/Admin-Panel/E-Ticket/update/{id}', [TicketController::class, 'updateE_Ticket']);
                //Mobile Ticket
        Route::get('/Admin-Panel/Edit-MobileTicket/{id}', [TicketController::class, 'editMobileTicket']);
        Route::post('/Admin-Panel/MobileTicket/update/{id}', [TicketController::class, 'updateMobileTicket']);

        Route::get('/Admin-Panel/SellerPurchasing', [SalesController::class, 'sellerTicketsPurchased']);

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
        Route::get('/Admin-Panel/venue/edit/venue/{id}', [VenuesController::class, 'editVenues']);
        Route::post('/Admin-Panel/venue/updateVenues/{id}', [VenuesController::class, 'update']);
        Route::get('/Admin-Panel/venue/all-venues/delete/{id}', [VenuesController::class, 'deleteVenue']);
        Route::get('/Admin-Panel/add-category',function() {
            return view('Admin.pages.add_category');
        });
        Route::post('/Admin-Panel/addCategory', [CategoryController::class, 'store']);

        //Category For seller
        Route::get('Admin-Panel/Sellers-Categories', [SellerCategoryController::class, 'index'])->name('admin.sellerCategory.index');
        Route::post('Admin-Panel/Sellers-Categories/create', [SellerCategoryController::class, 'create'])->name('admin.sellerCategory.create');
        Route::get('Admin-Panel/Sellers-Categories/{id}/edit', [SellerCategoryController::class, 'edit'])->name('admin.sellerCategory.edit');
        Route::post('Admin-Panel/Sellers-Categories/update/{id}', [SellerCategoryController::class, 'update'])->name('admin.sellerCategory.updateCat');
        Route::get('Admin-Panel/Sellers-Categories/{id}/destroy', [SellerCategoryController::class, 'destroy'])->name('admin.sellerCategory.destroy');
        //Admin Category Request
        Route::get('event_requests', [EventController::class, 'admin_show_request'])->name('admin.request.show');
        Route::get('event_requests/{id}/destroy', [EventController::class, 'destroy_request'])->name('admin.request.destroy');
      
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

        Route::get('/eTicket_Pdf_template/{eventlisting_id}/{ticketid}',[TicketController::class,'eTicket_Pdf_template'])->name('Pdftemplate');

        Route::get('/Admin-Panel', [TicketController::class, 'admin_tickets_show'])->name('admin.home');
        Route::get('/Admin-Panel/E_tickets', [TicketController::class, 'admin_e_tickets_show']);
        Route::get('/Admin-Panel/Download-eTickets', [TicketController::class, 'downloadTicket']);
        Route::get('/Admin-Panel/Mobile_tickets', [TicketController::class, 'admin_mobile_tickets_show']);
        Route::post('/toggle-approve', [TicketController::class, 'Approval']);
        Route::post('/toggle-reject', [TicketController::class, 'Rejection']);

        Route::post('/toggle-Paid', [SalesController::class, 'Pain_Unpaid']);
        Route::post('/toggle-release_ticket', [SalesController::class, 'release_ticket']);
        
        Route::post('/toggle-approve/purchase', [TicketController::class, 'ApprovalForPurchase']);
        Route::get('/Admin-Panel/{id}/destroy', [TicketController::class, 'ticket_destroy'])->name('admin.ticket.destroy');
        Route::get('/Admin-Panel/Ticket/Edit/{id}', [TicketController::class, 'edit_tickets']);
        Route::get('/Admin-Panel/Ticket/view-tickets/{id}', [PdfUploadController::class, 'view_tickets'])->name('admin.ticket.view');

        Route::get('Admin-Panel/event-listing-form', [EventListingController::class, 'EventListingForm']);
        Route::get('Admin-Panel/event-listing', [EventListingController::class, 'showListing']);
        Route::get('/Admin-Panel/listing-edit/{id}', [EventListingController::class, 'editListing']);
        Route::post('/Admin-Panel/ticket-listing/update/{id}', [EventListingController::class, 'updateListing']);
        Route::get('/Admin-Panel/event-listing/delete/{id}', [EventListingController::class, 'delete']);

        Route::post('Admin-Panel/tickets/ticket-listing', [EventListingController::class, 'EventListing']);
        //Admin Puchase Module

        Route::get('admin/all_sales', [SalesController::class, 'admin_purchase_show'])->name('admin.sales.show');

        Route::get('/Admin-Panel/all_sales/{id}/destroy', [SalesController::class, 'ticket_destroy'])->name('admin.purchase.ticket.destroy');

        Route::get('/Admin-Panel/EventsForFooter', [EventController::class, 'footerEvents']);
        Route::post('/toggle-Footerapprove-for-footer', [EventController::class, 'Approval']);

        
        Route::get('/Admin-Panel/HotTickets', [EventController::class, 'HotTickets']);
        Route::post('/toggle-Footerapprove-HotTickets', [EventController::class, 'HotTicketsApproval']);
    });
});
