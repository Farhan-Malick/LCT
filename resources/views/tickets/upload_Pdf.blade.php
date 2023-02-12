
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <!-- Bootstrap core CSS -->
    <link href="{{asset('newAssets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Additional CSS Files -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/styles/index.css') }}" /> --}}
    <link rel="stylesheet" href="{{asset('assets/styles/common.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/sellticket.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/templatemo-woox-travel.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    {{-- <link rel="stylesheet" href="{{asset('assets/styles/tablet-noexps.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('assets/styles/experiments-noexps.css')}}">

    {{-- <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/styles/sellticket.css">
    <link rel="stylesheet" href="../../assets/styles/common.css">
    <link rel="stylesheet" href="../../assets/styles/payments.css">
    <link rel="stylesheet" href="../../assets/styles/tablet-noexps.css">
    <link rel="stylesheet" href="../../assets/styles/experiments-noexps.css"> --}}
   
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <title>Upload Tickets</title>
</head>
<style>
    .track-line {
        height: 2px !important;
        background-color: #61c3e3;
        opacity: 1;
        }

        .dot {
        height: 10px;
        width: 10px;
        margin-left: 3px;
        margin-right: 3px;
        margin-top: 0px;
        background-color: #61c3e3;
        border-radius: 50%;
        display: inline-block
        }

        .big-dot {
        height: 25px;
        width: 25px;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0px;
        background-color: #61c3e3;
        border-radius: 50%;
        display: inline-block;
        }

        .big-dot i {
        font-size: 12px;
        }

        .card-stepper {
        z-index: 0
        }
</style>
<style>
     .draggable
{
    filter: alpha(opacity=60);
    opacity: 0.6;
}
.dropped
{
    position: static !important;
}
</style>
<body>

    @include("auth.partials.darkheader")
    <section class="section-two" style="margin-top: 100px"> 
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 mb-3">
                        <div class="card card-stepper" style="border-radius: 10px;background-color: #f9f9f9">
                          <div class="card-body p-4">
                
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="d-flex flex-column">
                                <span class="lead fw-normal">Your Ticket Details</span>
                                <span class="text-muted small">by LAST CHANCE TICKET</span>
                              </div>
                              <div>
                                  <a href="{{URL('/')}}" class="">
                                      <h3 style="font-family: Georgia, 'Times New Roman', Times, serif">LAST CHANCE TICKET</h3>
                                      {{-- <img src="{{asset('assets/images/logo1.png')}}" width="30px" height="40px" alt=""> --}}
                                  </a>
                                {{-- <button class="btn btn-outline-primary" type="button">Track order details</button> --}}
                                {{-- <span class="bg-danger text-white p-2" style=" border-radius: 30%" type="">{{ get_when($events->event_date) }}</span> --}}
                              </div>
                            </div>
                            <hr class="my-4">
                
                            <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
                              <span class="dot"></span>
                              <hr class="flex-fill track-line"><span class="dot"></span>
                              <hr class="flex-fill track-line"><span class="dot"></span>
                              <hr class="flex-fill track-line"><span class="dot"></span>
                              <hr class="flex-fill track-line"><span
                                class="d-flex justify-content-center align-items-center big-dot dot">
                                <i class="fa fa-check text-white"></i></span>
                            </div>
                            <div class="row d-flex flex-row justify-content-between align-items-center">
                              
                              <div class="col-md-2 d-flex flex-column align-items-start"><span><b>EVENT : </b> <br>{{$ticket_listing->event->event_name}}</span></div>
                              <div class="col-md-2 d-flex flex-column "><span></span><b>TIME :</b>{{$ticket_listing->event->start_time}} - {{$ticket_listing->event->end_time}}<span></div>
                              <div class="col-md-2 d-flex  flex-column  "><span><b>DATE : </b><br>({{$ticket_listing->event->event_date}})</span></div>
                              <div class="col-md-2 d-flex flex-column "><span><b>VENUE : </b><br>{{$ticket_listing->event->venue_name}} , {{$ticket_listing->event->location}}</span></div>
                              <div class="col-md-2 d-flex flex-column "><span><b>CATEGORY : </b><br>@if ($ticket_listing->categories == null)
                                  {{$ticket_listing->type_cat}}
                                  @else
                                  {{$ticket_listing->categories}}
                              @endif</span></div>
                              <div class="col-md-2 d-flex flex-column "><span><b>SECTION : ROW</b><br>{{$ticket_listing->section}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $ticket_listing->row }}</span></div>
    
                              {{-- <div class="d-flex flex-column align-items-end"><span></span></div> --}}
                            </div><br>
                            <div class="row d-flex flex-row justify-content-between align-items-center">
                              <div class="col-md-2 d-flex flex-column "><span><b>SEATING AREA :</b><br>{{ $ticket_listing->seated_area }}</span></div>
                              <div class="col-md-2 d-flex flex-column "><span><b>TICKET : </b><br>{{ $ticket_listing->ticket_type }}</span></div>
                              <div class="col-md-2 d-flex flex-column "><span id="noticket"><b>NO.OF TICKETS : </b><br>{{ $ticket_listing->quantity }}</span></div>
                              <div class="col-md-2 d-flex flex-column "><span><b>PER-TICKET :</b><br>${{ $ticket_listing->price }}</span></div>
                              <div class="col-md-2 d-flex flex-column "><span><b>Service Charges : </b><br>${{$webCharge}}</span></div>
                              <div class="col-md-2 d-flex flex-column "><span><b>TOTAL TICKET PRICE:</b><br>${{$price}}</span></div>
                              <input type="hidden" id="pricetotal" value="{{ $ticket_listing->price }}" name="price">
                              {{-- <div class="d-flex flex-column align-items-end"><span></span></div> --}}
                            </div><br>
                            <div class="row d-flex flex-row justify-content-between align-items-center">
                                <div class="col-md-12 d-flex flex-column "><span><b>YOU WILL RECEIVE:</b><br>${{$grand_total}}</span></div>
                                <div class="price-tag d-sm-flex d-block justify-content-between">
                                    <button type="button" id="btn-continue-upload" class="btn primary-btn w-100 fw-700 pri" disabled="true">Continue</button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
              </div>
            <div class="row">
                <div class="col-lg-12" >
                    <div id="js-etuStateToggle" class="js-preUpload">
                        <div id="etuBox" class="pb0">
                            <div id="js-excDropTarget" class="ui-droppable">
                                <style>
                                    .hide{
                                        display: none;
                                    }
                                </style>
                                <div id="js-splashScreen">
                                    <div id="etuUploadSplash" class="tile txtc ptl mauto"style="background-color: #f9f9f9">
                                        <div class="js-loading uuxxl">
                                            <div class="spin l"></div>
                                            <div class="js-loading-text"></div>
                                        </div>
                                        {{-- <h4><strong> <span  style="color: #61c3e3">NO TICKET</span> AVAILABLE ?<span style="color: #61c3e3">UPLOAD</span> Here</strong></h4>
                                        <input type="file" id="" class="btn btn-primary " name="simple_pdf" style="width:300px" > --}}
                                           
                                        {{-- <div class="form-group">
                                            <label class="mb-4 h xl"><strong>PLEASE <span  style="color: #61c3e3">SELECT</span> ONE TO <span style="color: #61c3e3">UPLOAD</span> THE FILE</strong></label>
                                            <label class="m-2"><input type="checkbox" name="" id="myCheck" onclick="myFunction()">&nbsp;&nbsp;&nbsp;<span style="font-size: 18px">No Tiket Available ?</span></label>
                                            <label class="m-2"><input type="checkbox" name="" id="myCheck2" onclick="myFunction2()">&nbsp;&nbsp;&nbsp;<span style="font-size: 18px">I have a Ticket to Split</span></label>
                                        </div>  --}}
                                        
                                        <div class="js-uploadInstructions uul" id="text2">
                                            <h6 class="h xl mtxs">Upload ( P D F ) Ticket</h6>
                                            <div id="etuUploadDesc" class="ptm pbl cGry2 mb0">
                                                <ul class="txtl ibk v-inline-block">
                                                    <li><i class="i-ok"></i>Upload pdf FIle in which you must have the Tickets</li>
                                                    <li><i class="i-ok"></i>Uploaded PDF file will be split for you and you will select the ticket you want</li>
                                                    <li><i class="i-ok"></i>You can retrieve your tickets at any time from LAST CHANCE TICKET SUPPORT</li>
                                                </ul>
                                            </div>
                                            <button id="js-preUploadBtn" class=" btn btn-primary ">
                                                <i class="i-upload-alt prs " style="font-size:18px"></i>
                                                <span>Choose PDF file </span>
                                            </button>
                                            <input id="js-preUploadInput" name="etickets" type="file" multiple="" accept=".pdf" style="display: none;">
                                        </div>
                                    </div>
                                    
                                    <script>
                                       
                                        function myFunction2() 
                                        {
                                                // Get the checkbox
                                            var checkBox = document.getElementById("myCheck2");
                                            // Get the output text
                                            var text = document.getElementById("text2");

                                            // If the checkbox is checked, display the output text
                                            if (checkBox.checked == false){
                                            text.style.display = "none";
                                            } else {
                                                text.style.display = "block";
                                            }
                                        }
                                        function myFunction() 
                                        {
                                                // Get the checkbox
                                            var checkBox = document.getElementById("myCheck");
                                            // Get the output text
                                            var text = document.getElementById("text");

                                            // If the checkbox is checked, display the output text
                                            if (checkBox.checked == false){
                                            text.style.display = "none";
                                            } else {
                                                text.style.display = "block";
                                            }
                                        }
                                    </script>
                                </div>
                                <div id="etuWorkArea">
                                    <h6 class="h l pb0 mb0 txtc">Drag and drop your tickets into consecutive seat number order</h6>
                                    <form method="POST" action="{{route('event.ticketlisting.ticket.uploads',$ticket_listing->id)}}" id="ticekts-upload-form">
                                        @csrf
                                        <div id="js-incViewport" class="txtc">
                                            <div class="js-viewport-inset js-incViewportInset mCustomScrollbar _mCS_1">
                                                <div class="mCSB_container" style="position: relative; left: 0px; width: 944px;">
                                                    <div id="js-incReel" class="ibk cfix">
                                                        <?php for($i = 0; $i < $ticket_listing->quantity; $i++){ ?>
                                                        <div class="js-incDropTarget js-aDoc ui-droppable">
                                                            <div class="js-placeholderBacking js-incDropTargetBacking js-aDoc bdr dash">
                                                                <div class="js-eticketHelpText">
                                                                    <span class="h m cGry2">Drag Ticket <?= $i+1 ?> Here</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div id="js-excViewport" class="txtc">
                                        <div id="js-excReel" class="ibk">

                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->
    @include("auth.partials.footer")
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{asset('newAssets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('newAssets/assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/tabs.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/popup.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/custom.js')}}"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.8.24/jquery-ui.min.js" type="text/javascript"></script>
    <script>
        const publicPath = `<?= asset('etickets/'); ?>`;
        document.getElementById('btn-continue-upload').addEventListener("click", (event) => {
            // $("#btn-continue-upload").prop("disabled", true);
            document.getElementById('ticekts-upload-form').submit();
        });
        const makeDraggables = (draggableImages) => {
            let draggableHtml = '';
            draggableImages.map((image) => {
               draggableHtml += `<div class="js-excPlaceholder etuTicketDimension" data-id="`+image.filename+`" style="height: 283px;">
                                    <div class="js-placeholderBacking js-excBacking etuTicketDimension invis" style="height: 283px;">
                                        <div class="js-eticketHelpText">
                                            <span class="h m cGry2">Moved to Ticket <span class="js-ticket-ordinal"></span></span>
                                        </div>
                                    </div>
                                    <div class="js-data-node js-ticketThumb etuTicketDimension js-excluded ui-draggable" data-id="`+image.filename+`" style="height: 283px;">
                                        <input type="hidden" name="eticket[]" value="`+image.filename+`" class="eticket" />
                                        <img class="thumbnail imgFull" src="`+publicPath+`/`+image.filename+`">
                                    </div>
                                </div>`;
            });
            $('#js-excReel').append(draggableHtml)
            $(".js-data-node").draggable({
                revert: "invalid",
                refreshPositions: true,
                drag: function (event, ui) {
                    ui.helper.addClass("draggable");
                },
                stop: function (event, ui) {
                    // ui.helper.removeClass("draggable");
                    // console.log(this.lastElementChild.src);
                    var image = this.lastElementChild.src.split("/")[this.lastElementChild.src.split("/").length - 1];
                    if ($.ui.ddmanager.drop(ui.helper.data("draggable"), event)) {
                        // alert(image + " dropped.");
                    }
                    else {
                        // alert(image + " not dropped.");
                    }
                }
            });
            $(".js-incDropTarget").droppable({
                drop: function (event, ui) {
                    // console.log($("img", this));
                    if ($("img", this).length == 0) {
                        $(this).html("");
                        ui.draggable.addClass("dropped");
                        console.log(ui.draggable);
                        $(this).append(ui.draggable);
                        var buttonDisable = 0;
                        $.each($(".js-incDropTarget"), function(i, val){ if($(val).has('.js-data-node').length){ buttonDisable++; } })
                        if($(".js-incDropTarget").length === buttonDisable){
                            $("#btn-continue-upload").prop("disabled", false);
                        }
                    } else {
                        ui.draggable.draggable('option', 'revert', true);
                    }

                }
            });
        };
        $("#js-preUploadBtn").click(function() {
            $("#js-preUploadInput").trigger("click")
        });

        $("#js-preUploadInput").change(function(e){
            var myFormData = new FormData();
            myFormData.append('etickets', e.target.files[0]);
            $(".js-uploadInstructions").css("display","none");
            $(".js-loading").css("display","block");
            $.ajax({
                type: 'POST',
                url: `<?= route('seller.ticketlisting.tickets.pdf.store', $ticket_listing->id) ?>`,
                data: myFormData,
                cache: false,
                success: function (data) {
                    $(".js-splashScreen").css("display","none");
                    $(".js-loading").css("display","none");
                    $('#js-etuStateToggle').removeClass('js-preUpload');
                    $('#js-etuStateToggle').addClass('js-activeUpload');
                    makeDraggables(data);
                },
                processData: false,
                contentType: false,
            });
        });
        document.getElementById("ticekts-upload-form").addEventListener('submit', function (event) {

            // Ignore the #toggle-something button
            if (event.submitter.matches('#js-preUploadBtn')) {
                event.preventDefault();
            }

        });
        /* $('#js-excReel').mCustomScrollbar({
            horizontalScroll: !0,
            theme: "dark-thick",
            mouseWheel: !1,
            mouseWheelPixels: 1e3,
            advanced: {
                autoExpandHorizontalScroll: !0
            },
        });
        $('#js-incReel').mCustomScrollbar({
            horizontalScroll: !0,
            theme: "dark-thick",
            mouseWheel: !1,
            mouseWheelPixels: 1e3,
            advanced: {
                autoExpandHorizontalScroll: !0
            },
        }); */
    </script>
    {{-- <script src="../../js/eticket-uplod.js"></script>
    <script src="../../js/web-vitals.js"></script>
    <script type="text/javascript">

        viagogo.viagogoTicketUploader.init({
            content: {
                uploadingText: "Uploading",
                processingText: "Processing",
                timeoutErrorText: "We\u0027re experiencing a high volume of traffic at the moment and are unable to process your upload as fast as we normally would. Please refresh this page until you see a preview of the file you uploaded.",
                fileErrorText: "The file you uploaded is not a valid PDF file, please try again",
                unknownErrorText: "An error occurred, please try again"
            },
            state: {
                authToken: "",
                sellPipelineStateId: <?= $ticket_listing->id ?>
            },
            requiresTicketAllocation: true,
            numberOfPagesMustMatchExpectedQuantity: true,
            processBegun: false,
            quantity: <?= $ticket_listing->quantity ?>,
            numberOfPagesPerETicket: 1,
            //element: $("#etuBox"),
            element: document,
            uploads: [  ],
            platform: 'tablet'
        });


        //<![CDATA[
        $(document).ready(function () {
            $("form").bind("invalid-form.validate", function () {
                var errors = $("form").validate("options").errorList;

                $("form .validation_panel").removeClass('input_validation_error_panel');
                $(errors).each(function () {
                    $(this.element).closest(".validation_panel").addClass('input_validation_error_panel');
                });
            });
        });
        //]]>



            $(document).ready(function () {
                var $search = $("#searchIconHeader");
                var $searchBarWrapper = $("#searchBarWrapper");
                var $searchBar = $("#search");
                var $searchResults = $("#searchResults");
                var searchResultsClick = false;
                $search.click(function () {
                    // display search bar
                    $searchBarWrapper.css({ "display": "block" });
                    // make search icon active color
                    $search.addClass("searchActive");
                    // make the search bar in focus
                    $searchBar.focus();
                    // make sure the search results has not been clicked before focus out
                    $searchResults.mousedown(function () {
                        searchResultsClick = true;
                    });
                    // close div on focus out
                    $searchBar.blur(function () {
                        if (!searchResultsClick) {
                            $searchBarWrapper.css({ "display": "none" });
                            $search.removeClass("searchActive");
                        }
                    });
                });
            });

     $(function(){$("[data-user-setting]").click(function(b){b.preventDefault();var c=$(this).data("user-setting")||"1";var a={};$.modal.post(VGPage.mergeUrlElements("https://www.viagogo.com/secure/Browse/DefaultMaster/LocationSettings","?selected="+c+"&hide=True"),a)})});$(function(){$("#js-toggle-footer").on("click",function(a){a.preventDefault();$("#ftr, #btn-footer-inact, #btn-footer-act").toggleClass("hide");var b=[{LanguageCurrencyCallout:!$("#ftr").hasClass("hide")}];var a=window.VGPageEvent.createPageEvent("Click",b);window.VGPageEvent.insertPageEvent(a)})});(function(a,m){var k=a.tagId;var c=a.conversionEventDedupeKey;var d=a.conversionParameters;if(d==null){d=[]}if(!window.uetq){window.uetq=window.uetq||[];var h=function(){var i={ti:k};i.q=window.uetq;window.uetq=new UET(i);window.uetq.push("pageLoad")};var j=document.createElement("script");j.src="//bat.bing.com/bat.js";j.async=true;j.onload=j.onreadystatechange=function(){var i=this.readyState;if(!i||i==="loaded"||i==="complete"){j.onload=j.onreadystatechange=null;h()}};var e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(j,e);if(c!=null&&d!=null){if(c&&m.vgLocalStorage&&m.vgLocalStorage.get(c,"bingads-tag")){return}var b={ecomm_pagetype:"PURCHASE"};for(var f=0;f<d.length;f++){var g=d[f]["key"];var l=d[f]["value"];b[g]=l}window.uetq.push("event","PRODUCT_PURCHASE",b);if(c&&m.vgLocalStorage){m.vgLocalStorage.set(c,"bingads-tag",{})}}}})({tagId:"23001275"},window.viagogo=window.viagogo||{});

            $(function() {
                $("#menu").dropDownMenu({
                    switchOnHover: false
                });

                viagogo.events.on('header.menu.open', function(data) {
                    var valueName = $(data.menu).data('trackingdatavaluename');
                    if(valueName) {
                        VGPageEvent.insertPageEvent({
                            Name: 'Open',
                            PageVisitId: VGPage.PageVisitId,
                            Data: [
                                {
                                    PageArea: valueName
                                }
                            ]
                        });
                    }
                });
            });


function _defineProperty(e, r, t) {
  return r in e ? Object.defineProperty(e, r, {
      value: t,
      enumerable: !0,
      configurable: !0,
      writable: !0
  }) : e[r] = t, e
}

function _slicedToArray(e, r) {
  return _arrayWithHoles(e) || _iterableToArrayLimit(e, r) || _unsupportedIterableToArray(e, r) || _nonIterableRest()
}

function _nonIterableRest() {
  throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
}

function _unsupportedIterableToArray(e, r) {
  if (e) {
      if ("string" == typeof e) return _arrayLikeToArray(e, r);
      var t = Object.prototype.toString.call(e).slice(8, -1);
      return "Object" === t && e.constructor && (t = e.constructor.name), "Map" === t || "Set" === t ? Array.from(e) : "Arguments" === t || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t) ? _arrayLikeToArray(e, r) : void 0
  }
}

function _arrayLikeToArray(e, r) {
  (null == r || r > e.length) && (r = e.length);
  for (var t = 0, n = new Array(r); t < r; t++) n[t] = e[t];
  return n
}

function _iterableToArrayLimit(e, r) {
  var t = e && ("undefined" != typeof Symbol && e[Symbol.iterator] || e["@@iterator"]);
  if (null != t) {
      var n, a, o = [],
          i = !0,
          l = !1;
      try {
          for (t = t.call(e); !(i = (n = t.next()).done) && (o.push(n.value), !r || o.length !== r); i = !0);
      } catch (e) {
          l = !0, a = e
      } finally {
          try {
              i || null == t.return || t.return()
          } finally {
              if (l) throw a
          }
      }
      return o
  }
}

function _arrayWithHoles(e) {
  if (Array.isArray(e)) return e
}! function(e) {
  function r(e, r) {
      VGPageEvent.storePageEvent(VGPageEvent.createPageEvent(n, [_defineProperty({}, e, r.value.toFixed(2))]))
  }
  var t = _slicedToArray((e.changes.get("28202") || e.changes.get("282f2")).data, 6),
      n = t[0],
      a = t[1],
      o = t[2],
      i = t[3],
      l = t[4],
      u = t[5];
  webVitals.getCLS(function(e) {
      r(a, e)
  }), webVitals.getFID(function(e) {
      r(l, e)
  }), webVitals.getFCP(function(e) {
      r(o, e)
  }), webVitals.getLCP(function(e) {
      r(i, e)
  }), webVitals.getTTFB(function(e) {
      r(u, e)
  })
}(window.viagogo = window.viagogo || {});

function _defineProperty(e, t, n) {
  return t in e ? Object.defineProperty(e, t, {
      value: n,
      enumerable: !0,
      configurable: !0,
      writable: !0
  }) : e[t] = n, e
}

function _classCallCheck(e, t) {
  if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
}

function _defineProperties(e, t) {
  for (var n = 0; n < t.length; n++) {
      var i = t[n];
      i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
  }
}

function _createClass(e, t, n) {
  return t && _defineProperties(e.prototype, t), n && _defineProperties(e, n), e
}
var _js = function(i) {
  var r = {};
  return r.once = new(function() {
      function e() {
          _classCallCheck(this, e), this.experimentPageEvents = {}, this.experimentCp = {}
      }
      return _createClass(e, [{
          key: "recordPageEvent",
          value: function(e, t, n, i) {
              var o = 3 < arguments.length && void 0 !== i ? i : "";
              this.experimentPageEvents.hasOwnProperty(e) || (this.experimentPageEvents[e] = e, r.recordPageEvent(t, n, o))
          }
      }, {
          key: "recordCp",
          value: function(e, t, n) {
              var i = 2 < arguments.length && void 0 !== n ? n : null;
              this.experimentCp.hasOwnProperty(t) || (this.experimentCp[t] = t, r.recordCp(e, t, i))
          }
      }]), e
  }()), r.recordPageEvent = function(e, t) {
      var n = 2 < arguments.length && void 0 !== arguments[2] ? arguments[2] : "";
      VGPageEvent.storePageEvent(VGPageEvent.createPageEvent(e, [_defineProperty({}, t, n)]))
  }, r.recordCp = function(e, t) {
      var n = 2 < arguments.length && void 0 !== arguments[2] ? arguments[2] : null;
      i.cpStore.add(e)(t), n && n()
  }, r.entireInView = function(e) {
      var t = e.getBoundingClientRect();
      return 0 <= t.top && 0 <= t.left && t.bottom <= (window.innerHeight || document.documentElement.clientHeight) && t.right <= (window.innerWidth || document.documentElement.clientWidth)
  }, r.anyInView = function(e) {
      var t = e.getBoundingClientRect(),
          n = window.innerHeight || document.documentElement.clientHeight,
          i = window.innerWidth || document.documentElement.clientWidth,
          o = t.top <= n && 0 <= t.top + t.height,
          r = t.left <= i && 0 <= t.left + t.width;
      return o && r
  }, r.getDocHeight = function() {
      return Math.max(document.body.scrollHeight, document.documentElement.scrollHeight, document.body.offsetHeight, document.documentElement.offsetHeight, document.body.clientHeight, document.documentElement.clientHeight)
  }, r.delayPromise = function(t) {
      return new Promise(function(e) {
          return setTimeout(e, t)
      })
  }, i.jshelpers = i.jshelpers || r.once, r
}(window.viagogo = window.viagogo || {});

function _createForOfIteratorHelper(e, r) {
  var t = "undefined" != typeof Symbol && e[Symbol.iterator] || e["@@iterator"];
  if (!t) {
      if (Array.isArray(e) || (t = _unsupportedIterableToArray(e)) || r && e && "number" == typeof e.length) {
          t && (e = t);

          function n() {}
          var o = 0;
          return {
              s: n,
              n: function() {
                  return o >= e.length ? {
                      done: !0
                  } : {
                      done: !1,
                      value: e[o++]
                  }
              },
              e: function(e) {
                  throw e
              },
              f: n
          }
      }
      throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
  }
  var a, i = !0,
      u = !1;
  return {
      s: function() {
          t = t.call(e)
      },
      n: function() {
          var e = t.next();
          return i = e.done, e
      },
      e: function(e) {
          u = !0, a = e
      },
      f: function() {
          try {
              i || null == t.return || t.return()
          } finally {
              if (u) throw a
          }
      }
  }
}

function _slicedToArray(e, r) {
  return _arrayWithHoles(e) || _iterableToArrayLimit(e, r) || _unsupportedIterableToArray(e, r) || _nonIterableRest()
}

function _nonIterableRest() {
  throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
}

function _unsupportedIterableToArray(e, r) {
  if (e) {
      if ("string" == typeof e) return _arrayLikeToArray(e, r);
      var t = Object.prototype.toString.call(e).slice(8, -1);
      return "Object" === t && e.constructor && (t = e.constructor.name), "Map" === t || "Set" === t ? Array.from(e) : "Arguments" === t || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t) ? _arrayLikeToArray(e, r) : void 0
  }
}

function _arrayLikeToArray(e, r) {
  (null == r || r > e.length) && (r = e.length);
  for (var t = 0, n = new Array(r); t < r; t++) n[t] = e[t];
  return n
}

function _iterableToArrayLimit(e, r) {
  var t = e && ("undefined" != typeof Symbol && e[Symbol.iterator] || e["@@iterator"]);
  if (null != t) {
      var n, o, a = [],
          i = !0,
          u = !1;
      try {
          for (t = t.call(e); !(i = (n = t.next()).done) && (a.push(n.value), !r || a.length !== r); i = !0);
      } catch (e) {
          u = !0, o = e
      } finally {
          try {
              i || null == t.return || t.return()
          } finally {
              if (u) throw o
          }
      }
      return a
  }
}

function _arrayWithHoles(e) {
  if (Array.isArray(e)) return e
}! function(e) {
  var r, t, n = _slicedToArray((e.changes.get("37682") || e.changes.get("37762")).data, 4),
      o = n[0],
      a = n[1],
      i = n[2],
      u = n[3],
      c = window.PerformanceObserver && PerformanceObserver.supportedEntryTypes,
      s = c && PerformanceObserver.supportedEntryTypes.includes("first-input"),
      y = c && PerformanceObserver.supportedEntryTypes.includes("paint");
  c && (r = new PerformanceObserver(function(e) {
      var r, t = _createForOfIteratorHelper(e.getEntries());
      try {
          for (t.s(); !(r = t.n()).done;) {
              var n = r.value;
              "first-contentful-paint" === n.name && _js.recordPageEvent(o, a, Number(n.startTime.toFixed(2))), "first-input" === n.entryType && _js.recordPageEvent(o, i, Number((n.processingStart - n.startTime).toFixed(2)))
          }
      } catch (e) {
          t.e(e)
      } finally {
          t.f()
      }
  }), y && r.observe({
      type: "paint",
      buffered: !0
  }), s && r.observe({
      type: "first-input",
      buffered: !0
  })), !s && window.performance.timing && (t = function() {
      "interactive" !== document.readyState && "complete" !== document.readyState || (_js.recordPageEvent(o, u, Number(window.performance.getEntriesByType("navigation")[0].domInteractive.toFixed(2))), document.removeEventListener("readystatechange", t))
  }, "complete" === document.readyState ? _js.recordPageEvent(o, u, Number(window.performance.getEntriesByType("navigation")[0].domInteractive.toFixed(2))) : document.addEventListener("readystatechange", t))
}(window.viagogo = window.viagogo || {});

function _defineProperty(e, t, n) {
  return t in e ? Object.defineProperty(e, t, {
      value: n,
      enumerable: !0,
      configurable: !0,
      writable: !0
  }) : e[t] = n, e
}
document.addEventListener("DOMContentLoaded", function() {
  var d, n;
  window.MutationObserver && window.WebKitMutationObserver && (d = new Set, n = function(e) {
      e.querySelectorAll("[data-trackedmessagekey]").forEach(function(e) {
          var t, n, a;
          d.has(e.dataset.trackedmessagekey) || (t = e.dataset.trackedmessageevent, n = e.dataset.trackedmessagekey, a = e.dataset.trackedmessagevalue, VGPageEvent.storePageEvent(VGPageEvent.createPageEvent(t, [_defineProperty({}, n, a)])), d.add(e.dataset.trackedmessagekey))
      })
  }, new MutationObserver(function(e) {
      e.forEach(function(e) {
          0 < e.addedNodes.length && e.addedNodes.forEach(function(e) {
              var t;
              (t = e) instanceof Element == !1 && t instanceof HTMLDocument == !1 || "SCRIPT" === t.nodeName || "#comment" === t.nodeName || "none" === window.getComputedStyle(t).display || "hidden" === window.getComputedStyle(t).visibility || "" === t.innerHtml || n(e)
          })
      })
  }).observe(document, {
      childList: !0,
      subtree: !0
  }), n(document))
});
</script>
<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div><div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon311809122921"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon833998061291" alt="" src="https://bat.bing.com/action/0?ti=23001275&amp;Ver=2&amp;mid=f3e38324-5d5f-44c6-a51b-784876c3a052&amp;sid=b95fc7307edd11edb13ddb84302bba18&amp;vid=b95fdb407edd11ed9baae3d720f577a2&amp;vids=0&amp;msclkid=N&amp;pi=918639831&amp;lg=en-US&amp;sw=1600&amp;sh=900&amp;sc=24&amp;tl=Sell%20Tickets%20-%20Sell%20Concert,%20Sports,%20Theatre%20tickets%20%7C%20viagogo%20Ticket%20Exchange&amp;kw=viagogo,%20buy%20tickets,%20sell%20tickets,%20concert%20tickets,%20sport%20tickets,%20theatre%20tickets&amp;p=https%3A%2F%2Fwww.viagogo.com%2FSecure%2FPipeline%2FSell%2FETicketUpload%3FID%3D4e00d30c-3483-4e1e-9532-8e06939c8b4d&amp;r=https%3A%2F%2Fwww.viagogo.com%2FSecure%2FPipeline%2FSell%2FTicketDetails%3FID%3D4e00d30c-3483-4e1e-9532-8e06939c8b4d&amp;lt=3819&amp;mtp=256&amp;evt=pageLoad&amp;sv=1&amp;rn=88174" width="0" height="0"></div> --}}
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html> 