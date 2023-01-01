<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Last-Chance-Ticket Admin | Dashboard V2</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<link href="{{asset("AdminAssets/css/google/app.min.css")}}" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
	<link href="{{asset("AdminAssets/plugins/jvectormap-next/jquery-jvectormap.css")}}" rel="stylesheet" />
            <link href="{{asset("AdminAssets/plugins/bootstrap-calendar/css/bootstrap_calendar.css")}}" rel="stylesheet" />
            <link href="{{asset("AdminAssets/plugins/gritter/css/jquery.gritter.css")}}"  rel="stylesheet" />
            <link href="{{asset("AdminAssets/plugins/nvd3/build/nv.d3.css")}}"  rel="stylesheet" />
            <link href="{{ asset('AdminAssets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
            <link href="{{ asset('AdminAssets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css') }}"
                rel="stylesheet" />
            <link href="{{ asset('AdminAssets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') }}"
                rel="stylesheet" />
            <link href="{{ asset('AdminAssets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css') }}" rel="stylesheet" />
            <link href="{{ asset('AdminAssets/plugins/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}"
                rel="stylesheet" />
            <link href="{{ asset('AdminAssets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}"
                rel="stylesheet" />
            <link href="{{ asset('AdminAssets/plugins/@danielfarrell/bootstrap-combobox/css/bootstrap-combobox.css') }}"
                rel="stylesheet" />
            <link href="{{ asset('AdminAssets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css') }}"
                rel="stylesheet" />
            <link href="{{ asset('AdminAssets/plugins/tag-it/css/jquery.tagit.css') }}" rel="stylesheet" />
            <link href="{{ asset('AdminAssets/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" />
            <link href="{{ asset('AdminAssets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
            <link
                href="{{ asset('AdminAssets/plugins/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}"
                rel="stylesheet" />
            <link href="{{ asset('AdminAssets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css') }}"
                rel="stylesheet" />
            <link href="{{ asset('AdminAssets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.css') }}"
                rel="stylesheet" />
            <link href="{{ asset('AdminAssets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-fontawesome.css') }}"
                rel="stylesheet" />
    <link href="{{ asset('AdminAssets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-glyphicons.css') }}"
        rel="stylesheet" />
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar page-with-light-sidebar">
		<!-- begin #header -->
        @include('Admin.includes.header')
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		@include('Admin.includes.sidebar')
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
             <!-- begin breadcrumb -->
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item active">Add Venue</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Add Venue</h1>
        <!-- end page-header -->
        <div class="row">
            <!-- begin col-6 -->
            <div class="col-xl-12">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                    <!-- begin panel-body -->
                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal" data-parsley-validate="true" name="demo-form"
                            action="{{ url('Admin-Panel/add-venue') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Venue Name<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" name="venue_name" placeholder="" data-parsley-group="step-1"
                                        data-parsley-required="true" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Description<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 panel panel-inverse">
                                    <div class="panel-body panel-form">
                                        <textarea class="ckeditor" id="editor1" name="venue_description" rows="20">&lt;p&gt;This is some &lt;strong&gt;sample text&lt;/strong&gt;. You are using &lt;a href="http://ckeditor.com/"&gt;CKEditor&lt;/a&gt;.&lt;/p&gt;</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Venue Type<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" name="venue_type" placeholder="e.g Stadium"
                                        data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Amenities<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 panel panel-inverse">
                                    <div class="panel-body panel-form">
                                        <textarea class="ckeditor" id="editor1" name="venue_amenities" rows="20">&lt;p&gt;This is some &lt;strong&gt;sample text&lt;/strong&gt;. You are using &lt;a href="http://ckeditor.com/"&gt;CKEditor&lt;/a&gt;.&lt;/p&gt;</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Google Map LAT<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" name="venue_latitude" placeholder="" data-parsley-group="step-1"
                                        data-parsley-required="true" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Google Map LONG<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" name="venue_longitude" placeholder=""
                                        data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Seated Guest Number<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" name="venue_seated_guest" placeholder=""
                                        data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Standing Guest Number<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" name="venue_standing_guest" placeholder=""
                                        data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Address<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" name="venue_address" placeholder=""
                                        data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">City<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" name="venue_city" placeholder="" data-parsley-group="step-1"
                                        data-parsley-required="true" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">State<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" name="venue_state" placeholder="" data-parsley-group="step-1"
                                        data-parsley-required="true" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Zipcode<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" name="venue_zipcode" placeholder=""
                                        data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Select Country <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 col-xl-6">
                                    
                                    <select name="country_id" class="form-control" id="country_id" >
                                        <option >Select Country</option>
                                        <option name="country_id">Afghanistan</option>
                                        <option name="country_id">Åland Islands</option>
                                        <option  name="country_id" >Albania</option>
                                        <option  name="country_id" >Algeria</option>
                                        <option  name="country_id" >American Samoa</option>
                                        <option  name="country_id" >Andorra</option>
                                        <option  name="country_id" >Angola</option>
                                        <option  name="country_id" >Anguilla</option>
                                        <option  name="country_id" >Antarctica</option>
                                        <option  name="country_id" >Antigua & Barbuda</option>
                                        <option  name="country_id" >Argentina</option>
                                        <option  name="country_id" >Armenia</option>
                                        <option  name="country_id" >Aruba</option>
                                        <option  name="country_id" >Australia</option>
                                        <option  name="country_id" >Austria</option>
                                        <option  name="country_id" >Azerbaijan</option>
                                        <option  name="country_id" >Bahamas</option>
                                        <option  name="country_id" >Bahrain</option>
                                        <option  name="country_id" >Bangladesh</option>
                                        <option  name="country_id" >Barbados</option>
                                        <option  name="country_id" >Belarus</option>
                                        <option  name="country_id" >Belgium</option>
                                        <option  name="country_id" >Belize</option>
                                        <option  name="country_id" >Benin</option>
                                        <option  name="country_id" >Bermuda</option>
                                        <option  name="country_id" >Bhutan</option>
                                        <option  name="country_id" >Bolivia</option>
                                        <option  name="country_id" >Caribbean Netherlands</option>
                                        <option  name="country_id" >Bosnia & Herzegovina</option>
                                        <option  name="country_id" >Botswana</option>
                                        <option  name="country_id" >Bouvet Island</option>
                                        <option  name="country_id" >Brazil</option>
                                        <option  name="country_id" >British Indian Ocean Territory</option>
                                        <option  name="country_id" >Brunei</option>
                                        <option  name="country_id" >Bulgaria</option>
                                        <option  name="country_id" >Burkina Faso</option>
                                        <option  name="country_id" >Burundi</option>
                                        <option  name="country_id" >Cambodia</option>
                                        <option  name="country_id" >Cameroon</option>
                                        <option  name="country_id" >Canad</option>
                                        <option  name="country_id" >Cape Verde</option>
                                        <option  name="country_id" >Cayman Islands</option>
                                        <option  name="country_id" >Central African Republic</option>
                                        <option  name="country_id" >Chad</option>
                                        <option  name="country_id" >Chile</option>
                                        <option  name="country_id" >China</option>
                                        <option  name="country_id" >Christmas Island</option>
                                        <option  name="country_id" >Cocos (Keeling) Islands</option>
                                        <option  name="country_id" >Colombia</option>
                                        <option  name="country_id" >Comoros</option>
                                        <option  name="country_id" >Congo - Brazzaville</option>
                                        <option  name="country_id" >Congo - Kinshasa</option>
                                        <option  name="country_id" >Cook Islands</option>
                                        <option  name="country_id" >Costa Rica</option>
                                        <option  name="country_id" >Côte d’Ivoire</option>
                                        <option  name="country_id" >Croatia</option>
                                        <option  name="country_id" >Cuba</option>
                                        <option  name="country_id" >Curaçao</option>
                                        <option  name="country_id" >Cyprus</option>
                                        <option  name="country_id" >Czechia</option>
                                        <option  name="country_id" >Denmark</option>
                                        <option  name="country_id" >Djibouti</option>
                                        <option  name="country_id" >Dominica</option>
                                        <option  name="country_id" >Dominican Republic</option>
                                        <option  name="country_id" >Ecuador</option>
                                        <option  name="country_id" >Egypt</option>
                                        <option  name="country_id" >El Salvador</option>
                                        <option  name="country_id" >Equatorial Guinea</option>
                                        <option  name="country_id" >Eritrea</option>
                                        <option  name="country_id" >Estonia</option>
                                        <option  name="country_id" >Ethiopia</option>
                                        <option  name="country_id" >Falkland Islands (Islas Malvinas)</option>
                                        <option  name="country_id" >Faroe Islands</option>
                                        <option  name="country_id" >Fiji</option>
                                        <option  name="country_id" >Finland</option>
                                        <option  name="country_id" >France</option>
                                        <option  name="country_id" >French Guiana</option>
                                        <option  name="country_id" >French Polynesia</option>
                                        <option  name="country_id" >French Southern Territories</option>
                                        <option  name="country_id" >Gabon</option>
                                        <option  name="country_id" >Gambia</option>
                                        <option  name="country_id" >Georgia</option>
                                        <option  name="country_id" >Germany</option>
                                        <option  name="country_id" >Ghana</option>
                                        <option  name="country_id" >Gibraltar</option>
                                        <option  name="country_id" >Greece</option>
                                        <option  name="country_id" >Greenland</option>
                                        <option  name="country_id" >Grenada</option>
                                        <option  name="country_id" >Guadeloupe</option>
                                        <option  name="country_id" >Guam</option>
                                        <option  name="country_id" >Guatemala</option>
                                        <option  name="country_id" >Guernsey</option>
                                        <option  name="country_id" >Guinea</option>
                                        <option  name="country_id" >Guinea-Bissau</option>
                                        <option  name="country_id" >Guyana</option>
                                        <option  name="country_id" >Haiti</option>
                                        <option  name="country_id" >Heard & McDonald Island</option>
                                        <option  name="country_id" >Vatican City</option>
                                        <option  name="country_id" >Honduras</option>
                                        <option  name="country_id" >Hong Kong</option>
                                        <option  name="country_id" >Hungary</option>
                                        <option  name="country_id" >Iceland</option>
                                        <option  name="country_id" >India</option>
                                        <option  name="country_id" >Indonesia</option>
                                        <option  name="country_id" >Iran</option>
                                        <option  name="country_id" >Iraq</option>
                                        <option  name="country_id" >Ireland</option>
                                        <option  name="country_id" >Isle of Man</option>
                                        <option  name="country_id" >Israel</option>
                                        <option  name="country_id" >Italy</option>
                                        <option  name="country_id" >Jamaica</option>
                                        <option  name="country_id" >Japan</option>
                                        <option  name="country_id" >Jersey</option>
                                        <option  name="country_id" >Jordan</option>
                                        <option  name="country_id" >Kazakhsta</option>
                                        <option  name="country_id" >Kenya</option>
                                        <option  name="country_id" >Kiribati</option>
                                        <option  name="country_id" >North Korea</option>
                                        <option  name="country_id" >South Korea</option>
                                        <option  name="country_id" >Kosovo</option>
                                        <option  name="country_id" >Kuwait</option>
                                        <option  name="country_id" >Kyrgyzstan</option>
                                        <option  name="country_id" >Laos</option>
                                        <option  name="country_id" >Latvia</option>
                                        <option  name="country_id" >Lebanon</option>
                                        <option  name="country_id" >Lesotho</option>
                                        <option  name="country_id" >Liberia</option>
                                        <option  name="country_id" >Libya</option>
                                        <option  name="country_id" >Liechtenstein</option>
                                        <option  name="country_id" >Lithuania</option>
                                        <option  name="country_id" >Luxembourg</option>
                                        <option  name="country_id" >Macao</option>
                                        <option  name="country_id" >North Macedonia</option>
                                        <option  name="country_id" >Madagascar</option>
                                        <option  name="country_id" >Malawi</option>
                                        <option  name="country_id" >Malaysia</option>
                                        <option  name="country_id" >Maldives</option>
                                        <option  name="country_id" >Mali</option>
                                        <option  name="country_id" >Malta</option>
                                        <option  name="country_id" >Marshall Islands</option>
                                        <option  name="country_id" >Martinique</option>
                                        <option  name="country_id" >Mauritania</option>
                                        <option  name="country_id" >Mauritius</option>
                                        <option  name="country_id" >Mayotte</option>
                                        <option  name="country_id" >Mexico</option>
                                        <option  name="country_id" >Micronesia</option>
                                        <option  name="country_id" >Moldova</option>
                                        <option  name="country_id" >Monaco</option>
                                        <option  name="country_id" >Mongolia</option>
                                        <option  name="country_id" >Montenegro</option>
                                        <option  name="country_id" >Montserrat</option>
                                        <option  name="country_id" >Morocco</option>
                                        <option  name="country_id" >Mozambique</option>
                                        <option  name="country_id" >Myanmar (Burma)</option>
                                        <option  name="country_id" >Namibia</option>
                                        <option  name="country_id" >Nauru</option>
                                        <option  name="country_id" >Nepal</option>
                                        <option  name="country_id" >Netherlands</option>
                                        <option  name="country_id" >Curaçao</option>
                                        <option  name="country_id" >New Caledonia</option>
                                        <option  name="country_id" >New Zealand</option>
                                        <option  name="country_id" >Nicaragua</option>
                                        <option  name="country_id" >Niger</option>
                                        <option  name="country_id" >Nigeria</option>
                                        <option  name="country_id" >Niue</option>
                                        <option  name="country_id" >Norfolk Island</option>
                                        <option  name="country_id" >Northern Mariana Islands</option>
                                        <option  name="country_id" >Norway</option>
                                        <option  name="country_id" >Oman</option>
                                        <option  name="country_id" >Pakistan</option>
                                        <option  name="country_id" >Palau</option>
                                        <option  name="country_id" >Palestine</option>
                                        <option  name="country_id" >Panama</option>
                                        <option  name="country_id" >Papua New Guinea</option>
                                        <option  name="country_id" >Paraguay</option>
                                        <option  name="country_id" >Peru</option>
                                        <option  name="country_id" >Philippines</option>
                                        <option  name="country_id" >Pitcairn Islands</option>
                                        <option  name="country_id" >Poland</option>
                                        <option  name="country_id" >Portugal</option>
                                        <option  name="country_id" >Puerto Rico</option>
                                        <option  name="country_id" >Qatar</option>
                                        <option  name="country_id" >Réunion</option>
                                        <option  name="country_id" >Romania</option>
                                        <option  name="country_id" >Russia</option>
                                        <option  name="country_id" >Rwanda</option>
                                        <option  name="country_id" >St. Barthélemy</option>
                                        <option  name="country_id" >St. Helena</option>
                                        <option  name="country_id" >St. Kitts & Nevis</option>
                                        <option  name="country_id" >St. Lucia</option>
                                        <option  name="country_id" >St. Martin</option>
                                        <option  name="country_id" >St. Pierre & Miquelon</option>
                                        <option  name="country_id" >St. Vincent & Grenadines</option>
                                        <option  name="country_id" >Samoa</option>
                                        <option  name="country_id" >San Marino</option>
                                        <option  name="country_id" >São Tomé & Príncipe</option>
                                        <option  name="country_id" >Saudi Arabia</option>
                                        <option  name="country_id" >Senegal</option>
                                        <option  name="country_id" >Serbia</option>
                                        <option  name="country_id" >Serbia</option>
                                        <option  name="country_id" >Seychelles</option>
                                        <option  name="country_id" >Sierra Leone</option>
                                        <option  name="country_id" >Singapore</option>
                                        <option  name="country_id" >Sint Maarte</option>
                                        <option  name="country_id" >Slovakia</option>
                                        <option  name="country_id" >Slovenia</option>
                                        <option  name="country_id" >Solomon Islands</option>
                                        <option  name="country_id" >Somalia</option>
                                        <option  name="country_id" >South Africa</option>
                                        <option  name="country_id" >South Georgia & South Sandwich Islands</option>
                                        <option  name="country_id" >South Sudan</option>
                                        <option  name="country_id" >Spain</option>
                                        <option  name="country_id" >Sri Lanka</option>
                                        <option  name="country_id" >Sudan</option>
                                        <option  name="country_id" >Suriname</option>
                                        <option  name="country_id" >Svalbard & Jan Mayen</option>
                                        <option  name="country_id" >Eswatini</option>
                                        <option  name="country_id" >Sweden</option>
                                        <option  name="country_id" >Switzerland</option>
                                        <option  name="country_id" >Syria</option>
                                        <option  name="country_id" >Taiwan</option>
                                        <option  name="country_id" >Tajikistan</option>
                                        <option  name="country_id" >Tanzania</option>
                                        <option  name="country_id" >Thailand</option>
                                        <option  name="country_id" >Timor-Leste</option>
                                        <option  name="country_id" >Togo</option>
                                        <option  name="country_id" >Tokelau</option>
                                        <option  name="country_id" >Tonga</option>
                                        <option  name="country_id" >Trinidad & Tobago</option>
                                        <option  name="country_id" >Tunisia</option>
                                        <option  name="country_id" >Turkey</option>
                                        <option  name="country_id" >Turkmenistan</option>
                                        <option  name="country_id" >Turks & Caicos Islands</option>
                                        <option  name="country_id" >Tuvalu</option>
                                        <option  name="country_id" >Uganda</option>
                                        <option  name="country_id" >Ukraine</option>
                                        <option  name="country_id" >United Arab Emirates</option>
                                        <option  name="country_id" >United Kingdom</option>
                                        <option  name="country_id" >United State</option>
                                        <option  name="country_id" >U.S. Outlying Island</option>
                                        <option  name="country_id" >Uruguay</option>
                                        <option  name="country_id" >Uzbekistan</option>
                                        <option  name="country_id" >Vanuatu</option>
                                        <option  name="country_id" >Venezuela</option>
                                        <option  name="country_id" >Vietnam</option>
                                        <option  name="country_id" >British Virgin Islands</option>
                                        <option  name="country_id" >U.S. Virgin Islands</option>
                                        <option  name="country_id" >Wallis & Futuna</option>
                                        <option  name="country_id" >Western Sahara</option>
                                        <option  name="country_id" >Yemen</option>
                                        <option  name="country_id" >Zambia</option>
                                        <option  name="country_id" >Zimbabwe</option>
                                    </select>
                                    {{-- <select class="form-control" name="country_id">
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->country_name }}
                                            </option>
                                        @endforeach
                                    </select> --}}
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Image<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="file" name="file" placeholder="" data-parsley-group="step-1"
                                        data-parsley-required="true" class="form-control" />
                                </div>
                            </div>

                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">&nbsp;</label>
                                <div class="col-lg-9 col-xl-6">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end panel-body -->
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-6 -->
        </div>
		</div>
		<!-- end #content -->
	
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset("AdminAssets/js/app.min.js")}}"></script>
	<script src="{{asset("AdminAssets/js/theme/google.min.js")}}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{asset("AdminAssets/plugins/d3/d3.min.js")}}"></script>
            <script src="{{asset("AdminAssets/plugins/nvd3/build/nv.d3.min.js")}}"></script>
            <script src="{{asset("AdminAssets/plugins/jvectormap-next/jquery-jvectormap.min.js")}}"></script>
            <script src="{{asset("AdminAssets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js")}}"></script>
            <script src="{{asset("AdminAssets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js")}}"></script>
            <script src="{{asset("AdminAssets/plugins/gritter/js/jquery.gritter.js")}}"></script>
            <script src="{{ asset('AdminAssets/plugins/parsleyjs/dist/parsley.js') }}"></script>
            <script src="{{ asset('AdminAssets/plugins/smartwizard/dist/js/jquery.smartWizard.js') }}"></script>
            <script src="{{ asset('AdminAssets/js/demo/form-wizards-validation.demo.js') }}"></script>
            <script src="{{ asset('AdminAssets/plugins/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
            <script src="{{ asset('AdminAssets/plugins/moment/min/moment.min.js') }}"></script>
            <script src="{{ asset('AdminAssets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}"></script>
            <script src="{{ asset('AdminAssets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
            <script src="{{ asset('AdminAssets/plugins/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
            <script src="{{ asset('AdminAssets/plugins/jquery.maskedinput/src/jquery.maskedinput.js') }}"></script>
            <script src="{{ asset('AdminAssets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
            <script src="{{ asset('AdminAssets/plugins/pwstrength-bootstrap/dist/pwstrength-bootstrap.min.js') }}"></script>
            <script src="{{ asset('AdminAssets/plugins/@danielfarrell/bootstrap-combobox/js/bootstrap-combobox.js') }}"></script>
            <script src="{{ asset('AdminAssets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
            <script src="{{ asset('AdminAssets/plugins/tag-it/js/tag-it.min.js') }}"></script>
            <script src="{{ asset('AdminAssets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
            <script src="{{ asset('AdminAssets/plugins/select2/dist/js/select2.min.js') }}"></script>
            <script
                src="{{ asset('AdminAssets/plugins/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}">
            </script>
            <script src="{{ asset('AdminAssets/plugins/bootstrap-show-password/dist/bootstrap-show-password.js') }}"></script>
            <script src="{{ asset('AdminAssets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js') }}"></script>
            <script src="{{ asset('AdminAssets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js') }}"></script>
            <script src="{{ asset('AdminAssets/plugins/clipboard/dist/clipboard.min.js') }}"></script>
            <script src="{{ asset('AdminAssets/js/demo/form-plugins.demo.js') }}"></script>

            <script src="{{ asset('AdminAssets/plugins/ckeditor/ckeditor.js') }}"></script>
            <script src="{{ asset('AdminAssets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js') }}">
            </script>
            <script src="{{ asset('AdminAssets/js/demo/form-wysiwyg.demo.js') }}"></script>
            <script>
                COLOR_BLUE = COLOR_INDIGO = COLOR_RED = COLOR_ORANGE = COLOR_LIME = COLOR_TEAL = 'rgba(0,0,0,0.5)';
                COLOR_AQUA = COLOR_DARK_LIGHTER = COLOR_GREEN = 'rgba(0,0,0,0.75)';
            </script>
	
	<script src="{{asset("AdminAssets/js/demo/dashboard-v2.js")}}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
</body>
</html>
    
 