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
    <li class="breadcrumb-item active">Edit Venue Section Rows</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Edit Venue Section Rows</h1>
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
                    action="{{ route('admin.section_rows.update',$venue_section_rows->id) }}"
                    method="POST"
                >
                    @csrf
                    <div class="form-group row m-b-15">
                        <label
                            class="col-md-4 col-sm-4 col-form-label"
                            for="category_name"
                            >Row Name* :</label
                        >
                        <div class="col-md-8 col-sm-8">
                            <input
                                class="form-control"
                                type="text"
                                name="venue_section_row"
                                placeholder="Enter Venue Section"
                                value="{{$venue_section_rows->rows}}"
                            />
                        </div>
                    </div>
                    <div class="form-group row m-b-0">
                        <label class="col-md-4 col-sm-4 col-form-label"
                            >&nbsp;</label
                        >
                        <div class="col-md-8 col-sm-8">
                            <button type="submit" class="btn btn-primary">
                                Update Venue Section Row
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