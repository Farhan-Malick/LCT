
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
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-8" >
                    <div id="js-etuStateToggle" class="js-preUpload">
                        <div id="etuBox" class="pb0">
                            <div id="js-excDropTarget" class="ui-droppable">

                                <div id="js-splashScreen">
                                    <div id="etuUploadSplash" class="tile txtc ptl mauto"style="background-color: #f9f9f9">
                                        <div class="js-loading uuxxl">
                                            <div class="spin l"></div>
                                            <div class="js-loading-text"></div>
                                        </div>
                                        <div class="js-uploadInstructions uul">
                                            <h6 class="h xl mtxs">Upload ( P D F ) Ticket</h6>
                                            <div id="etuUploadDesc" class="ptm pbl cGry2 mb0">
                                                <ul class="txtl ibk v-inline-block">
                                                    <li><i class="i-ok"></i>Upload pdf FIle in which you must have the Tickets</li>
                                                    <li><i class="i-ok"></i>Uploaded PDF file will be split for you and you will select the ticket you want</li>
                                                    <li><i class="i-ok"></i>You can retrieve your tickets at any time from LAST CHANCE TICKET SUPPORT</li>
                                                </ul>
                                            </div>
                                            <button id="js-preUploadBtn" class=" btn btn-primary">
                                                <i class="i-upload-alt prs" style="font-size:18px"></i>
                                                <span>Choose PDF file </span>
                                            </button>
                                            <input id="js-preUploadInput" name="etickets" type="file" multiple="" accept=".pdf" style="display: none;">
                                        </div>
                                    </div>
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

                            {{-- <div id="etuToolStrip" class="reduceVSpace">
                                <div class="js-loading" style="display: none">
                                    <div class="spin m"></div>
                                </div>
                                <div class="txtc">
                                    <button id="js-activeUploadBtn" class="btn pri">
                                        <i class="i-upload-alt prxxs" style="font-size:18px"></i>
                                        <span>Add Another File</span>
                                    </button>
                                    <div class="js-save btn">
                                        Continue
                                        <i class="plxs i-chevron-right" style="font-size:14px"></i>
                                    </div>
                                    <div class="ibk" style="width:35px; height:1px"></div>

                                </div>
                                    <div class="gCol3 gCol3m mb0 1bGrn2 upload-later">
                                        <div class="js-skipStep btn a cWht nowrap">Upload Later</div>
                                    </div>

                                <div class="js-fileUpload">
                                    <form method="POST" action="{{route('seller.ticketlisting.tickets.pdf.store',$ticket_listing->id)}}" id="toolbarETicketFileUpload" novalidate="novalidate">
                                        <input name="etickets" type="file" id="js-activeUploadInput" multiple="" accept=".pdf">
                                        <input id="eventId" name="eventId" type="hidden" value="150113682">
                                        <input id="transactionId" name="transactionId" type="hidden" value="">
                                        <input id="listingId" name="listingId" type="hidden" value="">
                                        <input id="sellPipelineStateId" name="sellPipelineStateId" type="hidden" value="2e816991-2e26-452a-bb63-c1d959c0b502">
                                        <input id="pageVisitId" name="pageVisitId" type="hidden" value="e56b978b-1ef7-4ab6-9bb5-811ef92335fd">
                                    </form>
                                </div>
                            </div> --}}
                        </div>
                    </div>


                    {{-- <div class="card p-4 mb-3 shadow-sm main-card br-10">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h4>Don't have Tickets Yet?</h4>
                                <a class="primary-text cursor-pointer"
                                    href="{{URL('Sell-tickets/ticket-authentication')}}">Upload Later</a>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <div class="col-lg-4">
                    <div class="card shadow-sm mb-3 type-card main-card br-10">
                        <div class="card-body">
                            <div class="card-title">
                                <h4>{{$ticket_listing->event->title}}</h4>
                            </div>
                            <div class="card-subtitle">
                                <span class="fw-600"><strong>{{$ticket_listing->event->start_date}}
                                    <strong>{{$ticket_listing->event->start_time}}</strong>
                                </strong></span>
                                <br>
                                <span class="text-muted">Singapore National Stadium, Singapore, Singapore</span>
                            </div>
                            <div class="tags d-flex">
                                <span class="ticket-type p-1 rounded-3 me-2"> <strong>Ticket Type: </strong>{{$ticket_listing->ticket_type}}</span>
                                <span class="ticket-type p-1 rounded-3 me-2"><strong>Split Type: </strong>any</span>
                            </div>

                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>Price/Ticket: </strong></span>
                                <span><strong> {{$ticketCurrency->currency_type}} <span class="price">{{$ticket_listing->price}}</span></strong></span>
                            </div>

                            <div class="price-tag d-sm-flex d-block justify-content-between tags">
                                <span> <strong>Number of Tickets: </strong></span>
                                <span><strong> × {{$ticket_listing->quantity}}</strong></span>
                            </div>
                            <div class="tags d-flex mt-1">
                                <span class="ticket-type p-1 rounded-3 me-2"> <strong>Section: </strong>{{$ticket_listing->section}}</span>
                                <span class="ticket-type p-1 rounded-3 me-2"><strong>Row: </strong>{{$ticket_listing->row}}</span>
                            </div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>Website Price: </strong></span>
                                <span><strong> {{$ticketCurrency->currency_type}} <span class="price">{{$price}}</span></strong></span>
                            </div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong> Seller Fees: </strong></span>
                                <span><strong> {{$ticketCurrency->currency_type}} <span class="percentage">{{$percentage}}</span></strong></span>
                            </div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>VAT {{$ticketCurrency->currency_type}}: </strong></span>
                                <span><strong> 1.86</strong></span>
                            </div>
                            <div class="small tags"> VAT amount can change depending on your location.
                                YOU'LL RECEIVE {{$ticketCurrency->currency_type}} <span class="grandTotal">{{$grand_total}}</span></div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>YOU'LL RECEIVE: </strong></span>
                                <span><strong> {{$ticketCurrency->currency_type}} <span class="grandTotal">{{$grand_total}}</span></strong></span>
                            </div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <button type="button" id="btn-continue-upload" class="btn primary-btn w-100 fw-700 pri" disabled="true">Continue</button>
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
</body>

</html>
