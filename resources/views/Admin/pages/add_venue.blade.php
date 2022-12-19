    @extends('Admin.layouts.default')
    @section('title', 'Add Category')

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
                                    {{-- Categories --}}
                                    <select class="form-control" name="country_id">
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->country_name }}
                                            </option>
                                        @endforeach
                                    </select>
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
    @endsection

    @push('scripts')
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
    @endpush
