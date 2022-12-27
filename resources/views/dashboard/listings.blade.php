<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../../css/bootstrap.min.css" />
      <link rel="stylesheet" href="../../assets/styles/dashboard.css" />
      <link rel="stylesheet" href="{{ asset('assets/styles/common.css') }}" />
      <!-- <link rel="stylesheet" href="../../assets/styles/common.css"> -->
      <link
         rel="stylesheet"
         href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
         />
      <title>Last Chance Ticket - Dashboard</title>
   </head>
   <body>
      <div class="container-fluid px-0 mx-0">
         <!-- header menu starts here  -->
         @include("auth.partials.darkheader")
         <div class="container-md sidebar-con">
            <div class="row">
               <!-- sidebar starts here  -->
               @include("auth.partials.dashboardSidebar")
               <!-- dashboard starts here  -->
               <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                  <div
                     class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3"
                     >
                     <h1 class="h2">Listings</h1>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <nav class="orders-tabs">
                           <div
                              class="nav nav-tabs"
                              id="nav-tab"
                              role="tablist"
                              >
                              <button
                                 class="nav-link active fw-600"
                                 id="nav-active-tab"
                                 data-bs-toggle="tab"
                                 data-bs-target="#nav-active"
                                 type="button"
                                 role="tab"
                                 aria-controls="nav-active"
                                 aria-selected="true"
                                 >
                              Active
                              </button>
                              <button
                                 class="nav-link fw-600"
                                 id="nav-pending-tab"
                                 data-bs-toggle="tab"
                                 data-bs-target="#nav-pending"
                                 type="button"
                                 role="tab"
                                 aria-controls="nav-pending"
                                 aria-selected="false"
                                 >
                              Pending
                              </button>
                              <button
                                 class="nav-link fw-600"
                                 id="nav-deactiveted-tab"
                                 data-bs-toggle="tab"
                                 data-bs-target="#nav-deactiveted"
                                 type="button"
                                 role="tab"
                                 aria-controls="nav-deactiveted"
                                 aria-selected="false"
                                 >
                              Deactivated
                              </button>
                              <button
                                 class="nav-link fw-600"
                                 id="nav-expired-tab"
                                 data-bs-toggle="tab"
                                 data-bs-target="#nav-expired"
                                 type="button"
                                 role="tab"
                                 aria-controls="nav-expired"
                                 aria-selected="false"
                                 >
                              Expired
                              </button>
                              {{-- <button
                                 class="nav-link fw-600"
                                 id="nav-add-ticket-tab"
                                 data-bs-toggle="tab"
                                 data-bs-target="#nav-add-ticket"
                                 type="button"
                                 role="tab"
                                 aria-controls="nav-expired"
                                 aria-selected="false"
                                 >
                              Add Ticket
                              </button> --}}
                           </div>
                        </nav>
                        <div
                           class="tab-content mt-3"
                           id="nav-tabContent"
                           >
                           <!-- First  tab starts here  -->
                           <div
                              class="tab-pane fade show active"
                              id="nav-active"
                              role="tabpanel"
                              aria-labelledby="nav-active-tab"
                              >
                              <div class="Table-toolbar">
                                 <div class="row my-3">
                                    <div class="col-lg-6">
                                       <form action="">
                                          <div
                                             class="input-group mb-3"
                                             >
                                             <input
                                                type="search"
                                                class="form-control"
                                                placeholder="Search for listing by event name or listing ID"
                                                aria-label="Recipient's username"
                                                aria-describedby="basic-addon2"
                                                />
                                             <span
                                                class="input-group-text"
                                                id="basic-addon2"
                                                ><i
                                                class="bi bi-search"
                                                ></i
                                                ></span>
                                          </div>
                                       </form>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="row">
                                          <div class="col-lg-6">
                                             <form action="">
                                                <select
                                                   class="form-select"
                                                   aria-label="Default select example"
                                                   >
                                                   <option
                                                      value="0"
                                                      selected
                                                      disabled
                                                      >
                                                      Sort By
                                                   </option>
                                                   <option
                                                      value="1"
                                                      >
                                                      Event
                                                      Date
                                                   </option>
                                                   <option
                                                      value="2"
                                                      >
                                                      Ticket
                                                      In Hand
                                                      Date
                                                   </option>
                                                   <option
                                                      value="3"
                                                      >
                                                      Listing
                                                      End Date
                                                   </option>
                                                   <option
                                                      value="4"
                                                      >
                                                      Price
                                                      Per
                                                      Ticket
                                                      (accending)
                                                   </option>
                                                   <option
                                                      value="5"
                                                      >
                                                      Price
                                                      Per
                                                      Ticket
                                                      (decending)
                                                   </option>
                                                </select>
                                             </form>
                                          </div>
                                          <div
                                             class="col-2 filters-icons"
                                             data-bs-toggle="modal"
                                             data-bs-target="#exampleModal"
                                             >
                                             <i
                                                class="bi bi-filter"
                                                ></i>
                                          </div>
                                          <div
                                             class="col-2 filters-icons"
                                             >
                                             <i
                                                class="bi bi-card-list"
                                                ></i>
                                          </div>
                                          <div
                                             class="col-2 filters-icons"
                                             >
                                             <i
                                                class="bi bi-card-text"
                                                ></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- Modal -->
                              <div
                                 class="modal fade"
                                 id="exampleModal"
                                 tabindex="-1"
                                 aria-labelledby="exampleModalLabel"
                                 aria-hidden="true"
                                 >
                                 <div class="modal-dialog">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5
                                             class="modal-title"
                                             id="exampleModalLabel"
                                             >
                                             Filter listing
                                          </h5>
                                          <button
                                             type="button"
                                             class="btn-close"
                                             data-bs-dismiss="modal"
                                             aria-label="Close"
                                             ></button>
                                       </div>
                                       <div class="modal-body">
                                          <div class="row">
                                             <div
                                                class="col-lg-4"
                                                >
                                                <div
                                                   class="card mb-3 shadow-sm"
                                                   >
                                                   <div
                                                      class="card-body"
                                                      >
                                                      <p>
                                                         Genre
                                                      </p>
                                                   </div>
                                                </div>
                                             </div>
                                             <div
                                                class="col-lg-4"
                                                >
                                                <div
                                                   class="card mb-3 shadow-sm"
                                                   >
                                                   <div
                                                      class="card-body"
                                                      >
                                                      <p>
                                                         Venue
                                                      </p>
                                                   </div>
                                                </div>
                                             </div>
                                             <div
                                                class="col-lg-4"
                                                >
                                                <div
                                                   class="card mb-3 shadow-sm"
                                                   >
                                                   <div
                                                      class="card-body"
                                                      >
                                                      <p>
                                                         Delivery
                                                      </p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <form action="">
                                             <div class="row">
                                                <label
                                                   for="price_range"
                                                   >Price Range
                                                (per
                                                ticket)</label
                                                   >
                                                <div
                                                   class="col-lg-6"
                                                   >
                                                   <input
                                                      type="text"
                                                      placeholder="from 0.00"
                                                      class="form-control"
                                                      id="price_range"
                                                      />
                                                </div>
                                                <div
                                                   class="col-lg-6"
                                                   >
                                                   <input
                                                      type="text"
                                                      placeholder="to 0.00"
                                                      class="form-control"
                                                      id="price_range"
                                                      />
                                                </div>
                                                <div
                                                   class="col-lg-12 my-3"
                                                   >
                                                   <label
                                                      for=""
                                                      >Date
                                                   Range</label
                                                      >
                                                   <br />
                                                   <div
                                                      class="form-check form-check-inline"
                                                      >
                                                      <input
                                                         class="form-check-input"
                                                         type="radio"
                                                         name="inlineRadioOptions"
                                                         id="inlineRadio1"
                                                         value="option1"
                                                         />
                                                      <label
                                                         class="form-check-label"
                                                         for="inlineRadio1"
                                                         >Event
                                                      Date</label
                                                         >
                                                   </div>
                                                   <div
                                                      class="form-check form-check-inline"
                                                      >
                                                      <input
                                                         class="form-check-input"
                                                         type="radio"
                                                         name="inlineRadioOptions"
                                                         id="inlineRadio2"
                                                         value="option2"
                                                         />
                                                      <label
                                                         class="form-check-label"
                                                         for="inlineRadio2"
                                                         >In-Hand
                                                      Date</label
                                                         >
                                                   </div>
                                                   <div
                                                      class="form-check form-check-inline"
                                                      >
                                                      <input
                                                         class="form-check-input"
                                                         type="radio"
                                                         name="inlineRadioOptions"
                                                         id="inlineRadio3"
                                                         value="option3"
                                                         />
                                                      <label
                                                         class="form-check-label"
                                                         for="inlineRadio3"
                                                         >Sale
                                                      Date</label
                                                         >
                                                   </div>
                                                </div>
                                                <div
                                                   class="col-lg-6"
                                                   >
                                                   <input
                                                      type="date"
                                                      class="form-control"
                                                      />
                                                </div>
                                                <div
                                                   class="col-lg-6"
                                                   >
                                                   <input
                                                      type="date"
                                                      class="form-control"
                                                      />
                                                </div>
                                             </div>
                                          </form>
                                       </div>
                                       <div class="modal-footer">
                                          <button
                                             type="button"
                                             class="btn warning-btn"
                                             data-bs-dismiss="modal"
                                             >
                                          Reset
                                          </button>
                                          <button
                                             type="button"
                                             class="btn primary-btn px-4"
                                             >
                                          Apply
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card shadow-sm mb-3">
                                 <div class="card-body">
                                    <h5
                                       class="card-title fw-600 text-center"
                                       >
                                       All Active Listings here
                                    </h5>
                                    {{-- @foreach($active_tickets as $key
                                    => $active_ticket)
                                    <div
                                       class="card-body"
                                       style="
                                       border-bottom: 3px solid
                                       #61c3e3;
                                       "
                                       >
                                       <div class="row">
                                          <div
                                             class="col-md-2 col-lg-2"
                                             >
                                             <p>
                                                <br />
                                                {{$active_ticket->created_at}}
                                                <br />
                                             </p>
                                          </div>
                                          <div
                                             class="col-md-10 col-lg-10"
                                             >
                                             <div
                                                class="card-content d-md-flex justify-content-between"
                                                >
                                                <div
                                                   class="card-des"
                                                   >
                                                   <h5>
                                                      {{$active_ticket->title}}
                                                   </h5>
                                                   <p></p>
                                                   <div
                                                      class="alert alert-danger"
                                                      role="alert"
                                                      >
                                                      <strong
                                                         >Only
                                                      {{$active_ticket->quantity}}
                                                      available
                                                      tickets.</strong
                                                         >
                                                      Creating
                                                      a
                                                      listing
                                                      now will
                                                      increase
                                                      the
                                                      chances
                                                      of your
                                                      tickets
                                                      selling.
                                                   </div>
                                                </div>
                                                <div
                                                   class="card-action d-flex flex-column text-end"
                                                   >
                                                   <span
                                                      >From</span
                                                      >
                                                   <span
                                                      >${{$active_ticket->price}}</span
                                                      >
                                                   <button
                                                      class="btn primary-btn"
                                                      href="{{
                                                      URL(
                                                      'Sell-tickets/tickets-details'
                                                      )
                                                      }}"
                                                      >
                                                   Sell
                                                   Tickets
                                                   </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    @endforeach --}}
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            {{-- <th scope="col">title</th> --}}
                                            <th scope="col">Event</th>
                                            <th scope="col">price</th>
                                            {{-- <th scope="col">currency</th> --}}
                                            <th scope="col">quantity</th>
                                            <th scope="col">section</th>
                                            <th scope="col">row</th>
                                            <th scope="col">seat from</th>
                                            <th scope="col">seat to</th>
                                            <th scope="col">ticket type</th>
                                            <th scope="col">ticket restrictions</th>
                                            {{-- <th scope="col">status</th> --}}
                                          </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            @foreach ($active_tickets as $ticket)
                                            @if ($ticket->approve == 1)
                                            <tr>
                                               <th scope="row">1</th>
                                               {{-- <td>{{$ticket->title}}</td> --}}
                                               <td>{{$ticket->event->title}}</td>
                                               <td>{{$ticket->price}}</td>
                                               {{-- <td>{{$ticket->currency}}</td> --}}
                                               <td>{{$ticket->quantity}}</td>
                                               <td>{{$ticket->section}}</td>
                                               <td>{{$ticket->row}}</td>
                                               <td>{{$ticket->seat_from}}</td>
                                               <td>{{$ticket->seat_to}}</td>
                                                  <td>{{$ticket->ticket_type}}</td>
                                         
                                               <td>{{$ticket->ticket_restrictions}}</td>
                                               {{-- <td>{{$ticket->status}}</td> --}}
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                      </table>
                                 </div>
                              </div>
                           </div>
                           <!-- second tab starts here  -->
                           <div
                              class="tab-pane fade"
                              id="nav-pending"
                              role="tabpanel"
                              aria-labelledby="nav-pending-tab"
                              >
                              <div class="Table-toolbar">
                                 <div class="row my-3">
                                    <div class="col-lg-6">
                                       <form action="">
                                          <div
                                             class="input-group mb-3"
                                             >
                                             <input
                                                type="search"
                                                class="form-control"
                                                placeholder="Search for listing by event name or listing ID"
                                                aria-label="Recipient's username"
                                                aria-describedby="basic-addon2"
                                                />
                                             <span
                                                class="input-group-text"
                                                id="basic-addon2"
                                                ><i
                                                class="bi bi-search"
                                                ></i
                                                ></span>
                                          </div>
                                       </form>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="row">
                                          <div class="col-lg-6">
                                             <form action="">
                                                <select
                                                   class="form-select"
                                                   aria-label="Default select example"
                                                   >
                                                   <option
                                                      value="0"
                                                      selected
                                                      disabled
                                                      >
                                                      Sort By
                                                   </option>
                                                   <option
                                                      value="1"
                                                      >
                                                      Event
                                                      Date
                                                   </option>
                                                   <option
                                                      value="2"
                                                      >
                                                      Ticket
                                                      In Hand
                                                      Date
                                                   </option>
                                                   <option
                                                      value="3"
                                                      >
                                                      Listing
                                                      End Date
                                                   </option>
                                                   <option
                                                      value="4"
                                                      >
                                                      Price
                                                      Per
                                                      Ticket
                                                      (accending)
                                                   </option>
                                                   <option
                                                      value="5"
                                                      >
                                                      Price
                                                      Per
                                                      Ticket
                                                      (decending)
                                                   </option>
                                                </select>
                                             </form>
                                          </div>
                                          <div
                                             class="col-2 filters-icons"
                                             >
                                             <i
                                                class="bi bi-filter"
                                                ></i>
                                          </div>
                                          <div
                                             class="col-2 filters-icons"
                                             >
                                             <i
                                                class="bi bi-card-list"
                                                ></i>
                                          </div>
                                          <div
                                             class="col-2 filters-icons"
                                             >
                                             <i
                                                class="bi bi-card-text"
                                                ></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card shadow-sm mb-3">
                                 <div class="card-body">
                                    <h5
                                       class="card-title fw-600 text-center"
                                       >
                                       You don't have any listings
                                    </h5>
                                 </div>
                              </div>
                           </div>
                           <!-- Third tab starts here  -->
                           <div
                              class="tab-pane fade"
                              id="nav-deactiveted"
                              role="tabpanel"
                              aria-labelledby="nav-deactiveted-tab"
                              >
                              <div class="Table-toolbar">
                                 <div class="row my-3">
                                    <div class="col-lg-6">
                                       <form action="">
                                          <div
                                             class="input-group mb-3"
                                             >
                                             <input
                                                type="search"
                                                class="form-control"
                                                placeholder="Search for listing by event name or listing ID"
                                                aria-label="Recipient's username"
                                                aria-describedby="basic-addon2"
                                                />
                                             <span
                                                class="input-group-text"
                                                id="basic-addon2"
                                                ><i
                                                class="bi bi-search"
                                                ></i
                                                ></span>
                                          </div>
                                       </form>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="row">
                                          <div class="col-lg-6">
                                             <form action="">
                                                <select
                                                   class="form-select"
                                                   aria-label="Default select example"
                                                   >
                                                   <option
                                                      value="0"
                                                      selected
                                                      disabled
                                                      >
                                                      Sort By
                                                   </option>
                                                   <option
                                                      value="1"
                                                      >
                                                      Event
                                                      Date
                                                   </option>
                                                   <option
                                                      value="2"
                                                      >
                                                      Ticket
                                                      In Hand
                                                      Date
                                                   </option>
                                                   <option
                                                      value="3"
                                                      >
                                                      Listing
                                                      End Date
                                                   </option>
                                                   <option
                                                      value="4"
                                                      >
                                                      Price
                                                      Per
                                                      Ticket
                                                      (accending)
                                                   </option>
                                                   <option
                                                      value="5"
                                                      >
                                                      Price
                                                      Per
                                                      Ticket
                                                      (decending)
                                                   </option>
                                                </select>
                                             </form>
                                          </div>
                                          <div
                                             class="col-2 filters-icons"
                                             >
                                             <i
                                                class="bi bi-filter"
                                                ></i>
                                          </div>
                                          <div
                                             class="col-2 filters-icons"
                                             >
                                             <i
                                                class="bi bi-card-list"
                                                ></i>
                                          </div>
                                          <div
                                             class="col-2 filters-icons"
                                             >
                                             <i
                                                class="bi bi-card-text"
                                                ></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card shadow-sm mb-3">
                                 <div class="card-body">
                                    <h5
                                       class="card-title fw-600 text-center"
                                       >
                                       You don't have any listings
                                    </h5>
                                 </div>
                              </div>
                           </div>
                           <!-- Fourth tab starts here  -->
                           <div
                              class="tab-pane fade"
                              id="nav-expired"
                              role="tabpanel"
                              aria-labelledby="nav-expired-tab"
                              >
                              <div class="Table-toolbar">
                                 <div class="row my-3">
                                    <div class="col-lg-6">
                                       <form action="">
                                          <div
                                             class="input-group mb-3"
                                             >
                                             <input
                                                type="search"
                                                class="form-control"
                                                placeholder="Search for listing by event name or listing ID"
                                                aria-label="Recipient's username"
                                                aria-describedby="basic-addon2"
                                                />
                                             <span
                                                class="input-group-text"
                                                id="basic-addon2"
                                                ><i
                                                class="bi bi-search"
                                                ></i
                                                ></span>
                                          </div>
                                       </form>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="row">
                                          <div class="col-lg-6">
                                             <form action="">
                                                <select
                                                   class="form-select"
                                                   aria-label="Default select example"
                                                   >
                                                   <option
                                                      value="0"
                                                      selected
                                                      disabled
                                                      >
                                                      Sort By
                                                   </option>
                                                   <option
                                                      value="1"
                                                      >
                                                      Event
                                                      Date
                                                   </option>
                                                   <option
                                                      value="2"
                                                      >
                                                      Ticket
                                                      In Hand
                                                      Date
                                                   </option>
                                                   <option
                                                      value="3"
                                                      >
                                                      Listing
                                                      End Date
                                                   </option>
                                                   <option
                                                      value="4"
                                                      >
                                                      Price
                                                      Per
                                                      Ticket
                                                      (accending)
                                                   </option>
                                                   <option
                                                      value="5"
                                                      >
                                                      Price
                                                      Per
                                                      Ticket
                                                      (decending)
                                                   </option>
                                                </select>
                                             </form>
                                          </div>
                                          <div
                                             class="col-lg-2 filters-icons"
                                             >
                                             <i
                                                class="bi bi-filter"
                                                ></i>
                                          </div>
                                          <div
                                             class="col-lg-2 filters-icons"
                                             >
                                             <i
                                                class="bi bi-card-list"
                                                ></i>
                                          </div>
                                          <div
                                             class="col-lg-2 filters-icons"
                                             >
                                             <i
                                                class="bi bi-card-text"
                                                ></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card shadow-sm mb-3">
                                 <div class="card-body">
                                    <h5
                                       class="card-title fw-600 text-center"
                                       >
                                       You don't have any listings
                                    </h5>
                                 </div>
                              </div>
                           </div>
                           <!-- Fifth tab starts here  -->
                           <div
                              class="tab-pane fade"
                              id="nav-add-ticket"
                              role="tabpanel"
                              aria-labelledby="nav-add-ticket-tab"
                              >
                              <div class="Table-toolbar">
                                 <div class="row my-3">
                                    <div class="col-lg-6">
                                       <form action="">
                                          <div
                                             class="input-group mb-3"
                                             >
                                             <input
                                                type="search"
                                                class="form-control"
                                                placeholder="Search for listing by event name or listing ID"
                                                aria-label="Recipient's username"
                                                aria-describedby="basic-addon2"
                                                />
                                             <span
                                                class="input-group-text"
                                                id="basic-addon2"
                                                ><i
                                                class="bi bi-search"
                                                ></i
                                                ></span>
                                          </div>
                                       </form>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="row">
                                          <div class="col-lg-6">
                                             <form action="">
                                                <select
                                                   class="form-select"
                                                   aria-label="Default select example"
                                                   >
                                                   <option
                                                      value="0"
                                                      selected
                                                      disabled
                                                      >
                                                      Sort By
                                                   </option>
                                                   <option
                                                      value="1"
                                                      >
                                                      Event
                                                      Date
                                                   </option>
                                                   <option
                                                      value="2"
                                                      >
                                                      Ticket
                                                      In Hand
                                                      Date
                                                   </option>
                                                   <option
                                                      value="3"
                                                      >
                                                      Listing
                                                      End Date
                                                   </option>
                                                   <option
                                                      value="4"
                                                      >
                                                      Price
                                                      Per
                                                      Ticket
                                                      (accending)
                                                   </option>
                                                   <option
                                                      value="5"
                                                      >
                                                      Price
                                                      Per
                                                      Ticket
                                                      (decending)
                                                   </option>
                                                </select>
                                             </form>
                                          </div>
                                          <div
                                             class="col-lg-2 filters-icons"
                                             >
                                             <i
                                                class="bi bi-filter"
                                                ></i>
                                          </div>
                                          <div
                                             class="col-lg-2 filters-icons"
                                             >
                                             <i
                                                class="bi bi-card-list"
                                                ></i>
                                          </div>
                                          <div
                                             class="col-lg-2 filters-icons"
                                             >
                                             <i
                                                class="bi bi-card-text"
                                                ></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              {{-- 
                              <div class="card shadow-sm mb-3">
                                 <div class="card-body">
                                    <h5
                                       class="card-title fw-600 text-center"
                                       >
                                       Create Your Ticket Here
                                    </h5>
                                    <form
                                       method="post"
                                       action="{{
                                       route(
                                       'dashboard.add.listing'
                                       )
                                       }}"
                                       >
                                       @csrf
                                       <div class="form-row">
                                          <div
                                             class="form-group col-md-6"
                                             >
                                             <label
                                                for="inputTitle4"
                                                >Title</label
                                                >
                                             <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Enter Ticket Title here"
                                                name="title"
                                                />
                                          </div>
                                          <div
                                             class="form-group col-md-6"
                                             >
                                             <label
                                                for="inputPrice4"
                                                >Price</label
                                                >
                                             <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Price"
                                                name="price"
                                                />
                                          </div>
                                       </div>
                                       <div class="form-row">
                                          <div
                                             class="form-group col-md-5"
                                             >
                                             <label
                                                for="inputQuantity"
                                                >Quantity</label
                                                >
                                             <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Put Tickets Quantity"
                                                name="quantity"
                                                />
                                          </div>
                                          <!-- <div
                                             class="form-group col-md-4"
                                             >
                                             <label
                                                 for="inputState"
                                                 >Category</label
                                             >
                                             <select
                                                 id="inputState"
                                                 class="form-control"
                                                 name="category"
                                             >
                                                 <option
                                                     selected
                                                 >
                                                     Select
                                                     Category
                                                 </option>
                                                 @foreach($categories
                                                 as $category)
                                                 <option
                                                     value="{{$category->name}}"
                                                 >
                                                     {{$category->name}}
                                                 </option>
                                                 @endforeach
                                             </select>
                                             </div> -->
                                          <div
                                             class="form-group col-md-4"
                                             >
                                             <label
                                                for="inputState"
                                                >Event</label
                                                >
                                             <select
                                                id="inputState"
                                                class="form-control"
                                                name="event"
                                                >
                                                <option
                                                   selected
                                                   >
                                                   Select Event
                                                </option>
                                                @foreach($events
                                                as $event)
                                                <option
                                                   value="{{$event->id}}"
                                                   >
                                                   {{$event->title}}
                                                </option>
                                                @endforeach
                                             </select>
                                          </div>
                                          <div
                                             class="form-group col-md-2 mb-3"
                                             >
                                             <label
                                                for="inputState"
                                                >Status</label
                                                >
                                             <select
                                                id="inputState"
                                                class="form-control"
                                                name="status"
                                                >
                                                <option
                                                   selected
                                                   >
                                                   Select
                                                   Status
                                                </option>
                                                <option
                                                   value="1"
                                                   >
                                                   enable
                                                </option>
                                                <option
                                                   value="0"
                                                   >
                                                   disable
                                                </option>
                                             </select>
                                          </div>
                                       </div>
                                       <button
                                          type="submit"
                                          class="btn btn-primary"
                                          >
                                       Add Ticket
                                       </button>
                                    </form>
                                 </div>
                              </div>
                              --}}
                           </div>
                        </div>
                     </div>
                  </div>
               </main>
            </div>
         </div>
      </div>
      <!-- Optional JavaScript; choose one of the two! -->
      @include("auth.partials.footer")
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="../../js/bootstrap.bundle.min.js"></script>
      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
         -->
   </body>
</html>