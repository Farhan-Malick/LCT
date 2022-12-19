    @extends('Admin.layouts.default')
    @section('title', 'Add Eevnt')

    @push('css')
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
    @endpush
    @section('content')
        <!-- begin breadcrumb -->
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item active">Add Event</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Add Event</h1>
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
        <!-- end page-header -->
        <!-- begin wizard-form -->
        <form action="{{ url('Admin-Panel/add-event') }}" method="POST" enctype="multipart/form-data" name="form-wizard"
            class="form-control-with-bg">
            @csrf
            <!-- begin wizard -->
            <div id="wizard">
                <!-- begin wizard-step -->
                <ul>
                    <li>
                        <a href="#step-1">
                            <span class="number">1</span>
                            <span class="info">
                                Details
                                <small>Title & Description</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-2">
                            <span class="number">2</span>
                            <span class="info">
                                Timings
                                <small>Dates & Schedules</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-3">
                            <span class="number">3</span>
                            <span class="info">
                                Location
                                <small>Add venues</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-4">
                            <span class="number">4</span>
                            <span class="info">
                                Media
                                <small>Poster & Thumbnail </small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-5">
                            <span class="number">5</span>
                            <span class="info">
                                Completed
                                <small>Publish</small>
                            </span>
                        </a>
                    </li>
                </ul>
                <!-- end wizard-step -->
                <!-- begin wizard-content -->
                <div>
                    <!-- begin step-1 -->
                    <div id="step-1">
                        <!-- begin fieldset -->
                        <fieldset>
                            <!-- begin row -->
                            <div class="row">
                                <!-- begin col-8 -->
                                <div class="col-xl-8 offset-xl-2">
                                    <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Event Info
                                    </legend>
                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-lg-3 text-lg-right col-form-label">Select Category <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9 col-xl-6">
                                            {{-- Categories --}}
                                            <select data-parsley-group="step-1" data-parsley-required="true"
                                                class="form-control" name="category_id">
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- end form-group -->
                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-lg-3 text-lg-right col-form-label">Event Name<span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input type="text" name="title" placeholder="" data-parsley-group="step-1"
                                                data-parsley-required="true" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-10">
                                        <label class="col-lg-3 text-lg-right col-form-label">Excerpt</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input type="text" name="excerpt" placeholder="" data-parsley-group="step-1"
                                                data-parsley-required="true" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- end form-group -->
                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-lg-3 text-lg-right col-form-label">Description<span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col panel panel-inverse">
                                        <div class="panel-body panel-form">
                                            <textarea data-parsley-group="step-1" data-parsley-required="true" class="ckeditor" id="editor1"
                                                name="description" rows="20">&lt;p&gt;This is some &lt;strong&gt;sample text&lt;/strong&gt;. You are using &lt;a href="http://ckeditor.com/"&gt;CKEditor&lt;/a&gt;.&lt;/p&gt;</textarea>
                                        </div>
                                    </div>
                                    <!-- end form-group -->
                                </div>
                                <!-- end col-8 -->
                            </div>
                            <!-- end row -->
                        </fieldset>
                        <!-- end fieldset -->
                    </div>
                    <!-- end step-1 -->
                    <!-- begin step-2 -->
                    <div id="step-2">
                        <!-- begin fieldset -->
                        <fieldset>
                            <!-- begin row -->
                            <div class="row">
                                <!-- begin col-8 -->
                                <div class="col-xl-8 offset-xl-2">
                                    <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Timings
                                    </legend>
                                    <!-- begin form-group -->
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Range Datepicker</label>
                                        <div class="col-lg-8">
                                            <div class="input-group input-daterange">
                                                <input data-parsley-group="step-2" data-parsley-required="true"
                                                    type="text" class="form-control" name="start_date"
                                                    placeholder="Date Start" />
                                                <span class="input-group-addon">to</span>
                                                <input data-parsley-group="step-2" data-parsley-required="true"
                                                    type="text" class="form-control" name="end_date"
                                                    placeholder="Date End" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Start Time</label>
                                        <div class="col-lg-8">
                                            <div class="input-group date" id="datetimepicker2">
                                                <input data-parsley-group="step-2" data-parsley-required="true"
                                                    type="text" name="start_time" class="form-control" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-clock"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">End Time</label>
                                        <div class="col-lg-8">
                                            <div class="input-group date" id="datetimepicker2">
                                                <input data-parsley-group="step-2" data-parsley-required="true"
                                                    type="text" name="end_time" class="form-control" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-clock"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end col-8 -->
                            </div>
                            <!-- end row -->
                        </fieldset>
                        <!-- end fieldset -->
                    </div>
                    <!-- end step-2 -->
                    <!-- begin step-3 -->
                    <div id="step-3">
                        <!-- begin fieldset -->
                        <fieldset>
                            <!-- begin row -->
                            <div class="row">
                                <!-- begin col-8 -->
                                <div class="col-xl-8 offset-xl-2">
                                    <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Add Venue
                                    </legend>
                                    <div class="form-group row m-b-10">
                                        <label class="col-lg-3 text-lg-right col-form-label">Select Venue <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9 col-xl-6">
                                            {{-- Categories --}}
                                            <select data-parsley-group="step-3" data-parsley-required="true"
                                                class="form-control" name="venue_id">
                                                <option value="">Select Venue</option>
                                                @foreach ($venues as $venue)
                                                    <option value="{{ $venue->id }}">{{ $venue->title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-8 -->
                            </div>
                            <!-- end row -->
                        </fieldset>
                        <!-- end fieldset -->
                    </div>
                    <!-- end step-3 -->
                    <!-- begin step-4 -->
                    <div id="step-4">
                        <fieldset>
                            <!-- begin row -->
                            <div class="row">
                                <!-- begin col-8 -->
                                <div class="col-xl-8 offset-xl-2">
                                    <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse"> Poster &
                                        Thumbnail Image
                                    </legend>
                                    <div class="form-group row m-b-10">
                                        <label class="col-lg-3 text-lg-right col-form-label">Poster Image<span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input type="file" name="poster" placeholder=""
                                                data-parsley-group="step-4" data-parsley-required="true"
                                                class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-10">
                                        <label class="col-lg-3 text-lg-right col-form-label">Thumbnail Image<span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input type="file" name="thumbnail" placeholder=""
                                                data-parsley-group="step-4" data-parsley-required="true"
                                                class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-8 -->
                            </div>
                            <!-- end row -->
                        </fieldset>
                    </div>
                    <div id="step-5">
                        <div class="jumbotron m-b-0 text-center">
                            <h2 class="display-4">Form filled!</h2>
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                    </div>
                    <!-- end step-4 -->
                </div>
                <!-- end wizard-content -->
            </div>
            <!-- end wizard -->
        </form>
        <!-- end wizard-form -->
    @endsection

    @push('scripts')
        <!-- ================== BEGIN PAGE LEVEL JS ================== -->

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
    @endpush
