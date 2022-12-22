<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/styles/sellticket.css">
    <link rel="stylesheet" href="../../assets/styles/common.css">
    <link rel="stylesheet" href="../../assets/styles/payments.css">
    <link rel="stylesheet" href="../../assets/styles/tablet-noexps.css">
    <link rel="stylesheet" href="../../assets/styles/experiments-noexps.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Upload Tickets</title>
</head>

<body>

    @include("auth.partials.darkheader")
    <section class="section-two">
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-8">
                    <div id="js-etuStateToggle" class="js-preUpload">
                        <div id="etuBox" class="pb0">
                            <div id="js-excDropTarget" class="ui-droppable">
                                <div id="js-splashScreen">
                                    <div id="etuUploadSplash" class="tile txtc ptl mauto">
                                        <div class="js-loading uuxxl">
                                            <div class="spin l"></div>
                                            <div class="js-loading-text"></div>
                                        </div>
                                        <div class="js-uploadInstructions uul">
                                            <i class="i-upload-alt cGry6"></i>
                                            <h6 class="h xl mtxs">Upload Your Tickets Now</h6>
                                            <div id="etuUploadDesc" class="ptm pbl cGry2 mb0">
                                                <ul class="txtl ibk v-inline-block">
                                                    <li><i class="i-ok"></i>Tickets are more likely to sell if ready for 'Instant Download'</li>
                                                    <li><i class="i-ok"></i>Keep your tickets listed right up until the event</li>
                                                    <li><i class="i-ok"></i>You can retrieve your tickets at any time</li>
                                                </ul>
                                            </div>
                                            <button id="js-preUploadBtn" class="btn pri l mtm mbxxs ">
                                                <i class="i-upload-alt prs" style="font-size:18px"></i>
                                                <span>Choose file</span>
                                            </button>
                                            <form class="js-fileUpload" method="POST" action="{{route('seller.ticketlisting.tickets.pdf.store',$ticket_listing->id)}}" id="initialETicketFileUpload" novalidate="novalidate">
                                                <input id="js-preUploadInput" name="etickets" type="file" multiple="" accept=".pdf">
                                                <input data-val="true" data-val-number="Not a valid number" data-val-required="The EventId field is required." id="eventId" name="eventId" type="hidden" value="150113682">
                                                <input data-val="true" data-val-number="Not a valid number" id="transactionId" name="transactionId" type="hidden" value="">
                                                <input data-val="true" data-val-number="Not a valid number" id="listingId" name="listingId" type="hidden" value="">
                                                <input id="sellPipelineStateId" name="sellPipelineStateId" type="hidden" value="2e816991-2e26-452a-bb63-c1d959c0b502">
                                                <input data-val="true" data-val-required="The PageVisitId field is required." id="pageVisitId" name="pageVisitId" type="hidden" value="e56b978b-1ef7-4ab6-9bb5-811ef92335fd">
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div id="etuWorkArea">
                                    <h6 class="h l pb0 mb0 txtc">Drag and drop your tickets into consecutive seat number order</h6>
                                    <div id="js-incViewport" class="txtc">
                                    </div>
                                    <div id="js-excViewport" class="txtc">

                                    </div>
                                </div>
                            </div>

                            <div id="etuToolStrip" class="reduceVSpace">
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
                            </div>

                            <div class="js-zoomBackdrop">
                                <div class="js-zoomFrame js-data-node">
                                    <div class="etuThumbIcon js-trash"></div>
                                    <div class="etuThumbIcon js-close"></div>
                                </div>
                            </div>

                            <form method="POST" class="js-eticket-state" novalidate="novalidate">
                                <input type="hidden" name="transactionId">
                                <input type="hidden" name="listingId">
                                <input type="hidden" name="pipelineStateId" value="2e816991-2e26-452a-bb63-c1d959c0b502">
                                <input type="hidden" name="submitMode" id="eTicketSelectionSubmitMode">
                                <input type="hidden" name="pageIds" id="eTicketSelectionPageIds">
                                <input type="hidden" class="js-upload-process-begun" value="0">
                            </form>
                        </div>



                        <script class="js-ticketThumbTmpl" type="text/x-jquery-tmpl">
                            <div class="js-excPlaceholder etuTicketDimension invis" data-id="${ETicketPageId}" style="height: ${PageHeight}px;">
                                <div class="js-placeholderBacking js-excBacking etuTicketDimension invis" style="height: ${PageHeight}px;">
                                    <div class="js-eticketHelpText">
                                        <span class="h m cGry2">Moved to Ticket <span class="js-ticket-ordinal"></span></span>
                                    </div>
                                </div>
                                <div class="js-data-node js-ticketThumb etuTicketDimension js-excluded" data-id="${ETicketPageId}" style="height: ${PageHeight}px;">

                                    <div class="etuThumbIcon js-trash"></div>
                                    <div class="etuThumbIcon js-magnify"></div>
                                    <div class="etuThumbInfo">
                                        <div class="t s cGry3">${UploadFileName}</div>
                                        <div class="t s cGry3">
                                               ${PageIndex + 1} of ${UploadPageCount}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </script>

                        <!-- Dialog templates -->
                        <script class="js-vgDialog-template" type="text/x-jquery-tmpl">
                            <div class="js-vgDialog-root" data-id="${dataId}">
                                <div class="js-vgDialog-root-inner">
                                    <div class="js-vgDialog-border">
                                        <div class="js-vgDialog-body">
                                            <div class="js-vgDialog-content-hook"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </script>

                        <script class="js-vgDialog-template-content-duplicateUpload" type="text/x-jquery-tmpl">
                            <div class="js-vgDialog-content">
                                <h2 class="v-serif v-vgDialog-content-heading">This file has the same name as a file already uploaded</h2>
                                <div class="v-vgDialog-content-body">
                                    <div>${filename}</div><br />
                                    <h4>Do you still want to upload this file?</h4>
                                </div>
                                <div class="v-vgDialog-button-container">
                                    <div class="js-vgDialog-button-confirm v-vgDialog-button btn pri">Yes</div>
                                    <div class="js-vgDialog-button-cancel v-vgDialog-button btn">Cancel</div>
                                </div>
                            </div>
                        </script>

                        <script class="js-vgDialog-template-content-confirmDelete" type="text/x-jquery-tmpl">
                            <div class="js-vgDialog-content">
                                <h2 class="v-serif v-vgDialog-content-heading">Confirm</h2>
                                <h4 class="v-vgDialog-content-body">Are you sure you want to delete this page?</h4>
                                <div class="v-vgDialog-button-container">
                                    <div class="js-vgDialog-button-confirm v-vgDialog-button btn pri">Delete</div>
                                    <div class="js-vgDialog-button-cancel v-vgDialog-button btn">Cancel</div>
                                </div>
                            </div>
                        </script>

                        <script class="js-vgDialog-template-content-confirmUpload" type="text/x-jquery-tmpl">
                            <div class="js-vgDialog-content">
                                <h2 class="v-serif v-vgDialog-content-heading">Confirm Upload</h2>
                                <h4 class="v-vgDialog-content-body">Please confirm you have sorted your tickets into consecutive seat number order</h4>
                                <div class="v-vgDialog-button-container">
                                    <div class="js-vgDialog-button-confirm v-vgDialog-button btn pri">Confirm</div>
                                    <div class="js-vgDialog-button-cancel v-vgDialog-button btn">Cancel</div>
                                </div>
                            </div>
                        </script>

                        <script class="js-vgDialog-template-content-uploadIncomplete" type="text/x-jquery-tmpl">
                            <div class="js-vgDialog-content">
                                <h2 class="v-serif v-vgDialog-content-heading">Upload Incomplete</h2>
                                <h4 class="v-vgDialog-content-body">Drag and drop your tickets into the slots provided</h4>
                                <div class="v-vgDialog-button-container">
                                    <div class="js-vgDialog-button-confirm v-vgDialog-button btn pri">Cancel</div>
                                </div>
                            </div>
                        </script>
                    </div>


                    <div class="card p-4 mb-3 shadow-sm main-card br-10">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h4>Don't have Tickets Yet?</h4>
                                <a class="primary-text cursor-pointer"
                                    href="{{URL('Sell-tickets/ticket-authentication')}}">Upload Later</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card shadow-sm mb-3 type-card main-card br-10">
                        <div class="card-body">
                            <div class="card-title">
                                <h4>Title</h4>
                            </div>
                            <div class="card-subtitle">
                                <span class="fw-600">Start Time<br>End Time</span><br>
                                <span class="text-muted">Singapore National Stadium, Singapore, Singapore</span>
                            </div>
                            <div class="tags d-flex">
                                <span class="ticket-type p-1 rounded-3 me-2"> <strong>Ticket Type: </strong>Ticket type</span>
                                <span class="ticket-type p-1 rounded-3 me-2"><strong>Split Type: </strong>any</span>
                            </div>

                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>Price/Ticket: </strong></span>
                                <span><strong> $ 10000</strong></span>
                            </div>

                            <div class="price-tag d-sm-flex d-block justify-content-between tags">
                                <span> <strong>Number of Tickets: </strong></span>
                                <span><strong> × 2(Quantity)</strong></span>
                            </div>
                            <div class="tags d-flex mt-1">
                                <span class="ticket-type p-1 rounded-3 me-2"> <strong>Section: </strong>A</span>
                                <span class="ticket-type p-1 rounded-3 me-2"><strong>Row: </strong>5</span>
                            </div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>Website Price: </strong></span>
                                <span><strong> $10000</strong></span>
                            </div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong> Seller Fees: </strong></span>
                                <span><strong> $ (Percentage)</strong></span>
                            </div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>VAT currency: </strong></span>
                                <span><strong> 1.86</strong></span>
                            </div>
                            <div class="small tags"> VAT amount can change depending on your location.
                                YOU'LL RECEIVE $ (Grand total)</div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>YOU'LL RECEIVE: </strong></span>
                                <span><strong> $ (Grand total)</strong></span>
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
    <script src="../../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
    <script src="../../js/eticket-uplod.js"></script>
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
                sellPipelineStateId: "4e00d30c-3483-4e1e-9532-8e06939c8b4d"
            },
            requiresTicketAllocation: true,
            numberOfPagesMustMatchExpectedQuantity: true,
            processBegun: false,
            quantity: 5,
            numberOfPagesPerETicket: 1,
            //element: $("#etuBox"),
            element: document,
            uploads: [  ],
            platform: 'tablet'
        });



        //<![CDATA[

        window.vgAsyncExec.push(function () {
            $(document).bind(VGModal.Events.VGColorboxMessage, function (e, data) {
                if (data.LoginResult == 'VGLogin' || data.LoginResult == 'FBLogin') {
                    $.colorbox.close();
                    document.location.reload();
                }
            });


        });
        //]]>



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


            $(function() {
  $("[data-user-setting]").click(function(a) {
      a.preventDefault();
      var b = $(this).data("user-setting") || "1";
      $.modal.post(VGPage.mergeUrlElements("https://www.viagogo.com/Browse/DefaultMaster/LocationSettings", "?selected=" + b + "&hide=True"))
  })
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
<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div><div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon311809122921"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon833998061291" alt="" src="https://bat.bing.com/action/0?ti=23001275&amp;Ver=2&amp;mid=f3e38324-5d5f-44c6-a51b-784876c3a052&amp;sid=b95fc7307edd11edb13ddb84302bba18&amp;vid=b95fdb407edd11ed9baae3d720f577a2&amp;vids=0&amp;msclkid=N&amp;pi=918639831&amp;lg=en-US&amp;sw=1600&amp;sh=900&amp;sc=24&amp;tl=Sell%20Tickets%20-%20Sell%20Concert,%20Sports,%20Theatre%20tickets%20%7C%20viagogo%20Ticket%20Exchange&amp;kw=viagogo,%20buy%20tickets,%20sell%20tickets,%20concert%20tickets,%20sport%20tickets,%20theatre%20tickets&amp;p=https%3A%2F%2Fwww.viagogo.com%2FSecure%2FPipeline%2FSell%2FETicketUpload%3FID%3D4e00d30c-3483-4e1e-9532-8e06939c8b4d&amp;r=https%3A%2F%2Fwww.viagogo.com%2FSecure%2FPipeline%2FSell%2FTicketDetails%3FID%3D4e00d30c-3483-4e1e-9532-8e06939c8b4d&amp;lt=3819&amp;mtp=256&amp;evt=pageLoad&amp;sv=1&amp;rn=88174" width="0" height="0"></div>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
