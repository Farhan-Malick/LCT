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
    <li class="breadcrumb-item active">Edit Event</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Edit Event</h1>
<!-- end page-header -->
<div class="row">
    <!-- begin col-6 -->
    <div class="col-xl-12">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-validation-1">
            <!-- begin panel-body -->
            <div class="panel-body">
                <form
                    class="form-horizontal"
                    data-parsley-validate="true"
                    action="{{ URL('/Admin-Panel/event/update/'.$events->id) }} "enctype="multipart/form-data"
                    method="POST"
                >
                    @csrf
                    <div class="form-group row m-b-15">
                        <div class="col-md-4">
                            <label
                            class="col-md-4 col-sm-4 col-form-label"
                            for="category_name"
                            >Title :</label
                        >
                            <input
                                    class="form-control"
                                    type="text"
                                    name="title"
                                    placeholder="Enter title"
                                    value="{{$events->title}}"
                                />
                        </div>
                        <div class="col-md-4">
                            <label
                            class="col-md-4 col-sm-4 col-form-label"
                            for="category_name"
                            >Description :</label
                        >
                            <input
                                    class="form-control"
                                    type="text"
                                    name="description"
                                    placeholder="Enter description"
                                    value="{{$events->description}}"
                                />
                        </div>
                        <div class="col-md-4">
                            <label
                            class="col-md-4 col-sm-4 col-form-label"
                            for="category_name"
                            >SLUG :</label
                        >
                            <input
                                    class="form-control"
                                    type="text"
                                    name="slug"
                                    placeholder="Enter slug"
                                    value="{{$events->slug}}"
                                />
                           
                        </div>
                    </div>

                    <div class="form-group row m-b-15">
                        <div class="col-md-4">
                            <label
                            class="col-md-4 col-sm-4 col-form-label"
                            for="category_name"
                            >Poster :</label
                        >
                        <div class="input-group">
                            <img class=""
                                src="{{ asset('uploads/events/poster/' . $events->poster) }}"
                                width="80px" alt="" height="35px">
                            <div class="custom-file">
                                <input type="file" name="poster" class="custom-file-input"
                                    id="exampleInputFile">
                                <label class="custom-file-label"
                                    for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                            <label
                            class="col-md-4 col-sm-4 col-form-label"
                            for="category_name"
                            >Start Date :</label
                        >
                            <input
                                    class="form-control"
                                    type="text"
                                    name="start_date"
                                    placeholder="Enter Start date"
                                    value="{{$events->start_date}}"
                                />
                        </div>
                        <div class="col-md-4">
                            <label
                            class="col-md-4 col-sm-4 col-form-label"
                            for="category_name"
                            >End Date :</label
                        >
                            <input
                                    class="form-control"
                                    type="text"
                                    name="end_date"
                                    placeholder="Enter End_date"
                                    value="{{$events->end_date}}"
                                />
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <div class="col-md-4">
                            <label
                            class="col-md-4 col-sm-4 col-form-label"
                            for="category_name"
                            >Start Time :</label
                        >
                            <input
                                    class="form-control"
                                    type="text"
                                    name="start_time"
                                    placeholder="Enter Start time"
                                    value="{{$events->start_time}}"
                                />
                        </div>
                        <div class="col-md-4">
                            <label
                            class="col-md-4 col-sm-4 col-form-label"
                            for="category_name"
                            >End Time :</label
                        >
                            <input
                                    class="form-control"
                                    type="text"
                                    name="end_time"
                                    placeholder="Enter End time"
                                    value="{{$events->end_time}}"
                                />
                        </div>
                        <div class="col-md-4">
                            <label class="">Thumbnail : </label>
                            <div class="input-group">
                                <img class=""
                                    src="{{ asset('uploads/events/thumbnail/'.$events->thumbnail) }}"
                                    width="80px" alt="" height="35px">

                                <div class="custom-file">
                                    <input type="file" name="thumbnail" class="custom-file-input"
                                        id="exampleInputFile">
                                    <label class="custom-file-label"
                                        for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row m-b-0">
                        <label class="col-md-4 col-sm-4 col-form-label"
                            >&nbsp;</label
                        >
                        <div class="col-md-8 col-sm-8">
                            <button type="submit" class="btn btn-primary">
                                Update Event
                            </button>
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
    
 