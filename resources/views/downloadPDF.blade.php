{{--  Hello {{ $email_data['name'] }}
<br><br>
Welcome to Our Website
<br>
Please click the below link to verify your email and activate your account.
<br><br>
<a href="http://localhost/Site/verify?code={{ $email_data['verification_code'] }}">Verify Account</a>
<br><br>
Thank you.!
<br>
By Farhan  --}}


<!doctype html>
<html lang="en-US">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Ticket Detail</title>
    <meta name="description" content="Reset Password Email Template.">
    <style type="text/css">
        a:hover {text-decoration: underline !important;}
    </style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
    <!--100% body table-->
    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td>
                <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                    align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                    <tr>
                        {{-- <td style="text-align:center;">
                          <a href="https://rakeshmandal.com" title="logo" target="_blank">
                            <img width="60" src="https://i.ibb.co/hL4XZp2/android-chrome-192x192.png" title="logo" alt="logo">
                          </a>
                        </td> --}}
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="padding:0 35px;">
                                        <h1 style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:'Rubik',sans-serif;">
                                            <br>
                                            <span style="color:#455056; font-size:15px;line-height:24px; margin:0;">Ticket Detail</span></h1>
                                        <span
                                            style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                                        <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                                            EVENT : {{$eventListings->event_name}} : {{$eventListings->venue_name}}
                                        </p>
                                        <div class="col-md-2 d-flex flex-column align-items-start"><span><b>EVENT : </b> <br>{{ $events->title }}</span></div>
                                        <div class="col-md-2 d-flex flex-column "><span></span><b>TIME :</b>{{ $events->start_time }}-{{ $events->end_time }}<span></div>
                                        <div class="col-md-2 d-flex  flex-column  "><span><b>DATE : </b><br>{{ $events->start_date }}</span></div>
                                        <div class="col-md-2 d-flex flex-column "><span><b>VENUE : </b><br>{{ $events->vTitle }}</span></div>
                                        <div class="col-md-2 d-flex flex-column "><span><b>CATEGORY : </b><br>{{ $tickets->categories }}</span></div>
                                        {{-- <div class="d-flex flex-column align-items-end"><span></span></div> --}}
                                      </div><br>
                                      <div class="row d-flex flex-row justify-content-between align-items-center">
                                        <div class="col-md-2 d-flex flex-column "><span><b>SECTION : ROW</b><br>{{ $tickets->sections }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $tickets->rows }}</span></div>
                                        <div class="col-md-2 d-flex flex-column "><span><b>SEATED AREA :</b><br>{{ $tickets->seated_area }}</span></div>
                                        <div class="col-md-2 d-flex flex-column "><span><b>TICKET : </b><br>{{ $tickets->ticket_type }}</span></div>
                                        <div class="col-md-2 d-flex flex-column "><span id="noticket"><b>AVAILABLE TICKETS : </b><br>{{ $tickets->quantity }}</span></div>
                                        <div class="col-md-2 d-flex flex-column "><span><b>PER-TICKET :</b><br>${{ $tickets->price }}</span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                            <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">&copy; <strong>LAST CHANCE TICKET</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--/100% body table-->
</body>

</html>
