@extends('Admin.layouts.default') @section('title', 'Edit venue Section Rows')
@push('css')
<link
    href="{{
        asset('AdminAssets/plugins/smartwizard/dist/css/smart_wizard.css')
    }}"
    rel="stylesheet"
/>
@endpush @section('content')
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
@endsection @push('scripts')
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{
        asset('AdminAssets/plugins/parsleyjs/dist/parsley.js')
    }}"></script>
<script src="{{
        asset('AdminAssets/plugins/smartwizard/dist/js/jquery.smartWizard.js')
    }}"></script>
<script src="{{
        asset('AdminAssets/js/demo/form-wizards-validation.demo.js')
    }}"></script>
@endpush
