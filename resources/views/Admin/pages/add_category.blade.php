    @extends('Admin.layouts.default')
    @section('title', 'Add Category')

    @push('css')
        <link href="{{ asset('AdminAssets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
    @endpush
    @section('content')
        <!-- begin breadcrumb -->
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item active">Add Category</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Add Category</h1>
        <!-- end page-header -->
        <div class="row">
            <!-- begin col-6 -->
            <div class="col-xl-12">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                    <!-- begin panel-body -->
                    <div class="panel-body">
                        <form class="form-horizontal" data-parsley-validate="true" name="demo-form"
                            action="{{ url('Admin-Panel/addCategory') }}" method="POST"> @csrf
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="category_name">Category Name *
                                    :</label>
                                <div class="col-md-8 col-sm-8">
                                    <input class="form-control" type="text" id="category_name" name="category_name"
                                        placeholder="Required" data-parsley-required="true" />
                                </div>
                            </div>
                            <div class="form-group row m-b-0">
                                <label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
                                <div class="col-md-8 col-sm-8">
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
        <!-- ================== BEGIN PAGE LEVEL JS ================== -->
        <script src="{{ asset('AdminAssets/plugins/parsleyjs/dist/parsley.js') }}"></script>
        <script src="{{ asset('AdminAssets/plugins/smartwizard/dist/js/jquery.smartWizard.js') }}"></script>
        <script src="{{ asset('AdminAssets/js/demo/form-wizards-validation.demo.js') }}"></script>
    @endpush
