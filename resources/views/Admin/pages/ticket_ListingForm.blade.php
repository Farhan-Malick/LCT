@extends('Admin.layouts.default')
@section('title', 'Add Category')

@push('css')
    <link href="{{ asset('AdminAssets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item active">Add Ticket Listing</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add Ticket Listing</h1>
    <!-- end page-header -->
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-xl-12">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                <!-- begin panel-body -->
                <div class="panel-body">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            
                            <h5
                                class="card-title fw-600 text-center"
                            >
                                Create Ticket Listing Here
                            </h5>
                            @if (session('msg'))
                                <div class="col-sm-6 mx-auto " style="text-align: center;  font-size:20px">
                                    {{ session('msg') }}</div>
                            @endif
                            <form method="post" action="{{URL('Admin-Panel/tickets/ticket-listing')}}" >
                                @csrf
                                <div class="form-row">
                                    <div
                                        class="form-group col-md-6"
                                    >
                                        <label
                                            for="inputTitle4"
                                            >Title</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Enter Ticket Title here"
                                            name="title"
                                        />
                                    </div>
                                  
                                </div>
                    
                                <div class="form-row">
                                    
                                     {{-- <div
                                        class="form-group col-md-4"
                                    >
                                        <label
                                            for="inputState"
                                            >Category</label
                                        >
                                        <select
                                            id="inputState"
                                            class="form-control"
                                            name="category"
                                        >
                                            <option
                                                selected
                                            >
                                                Select
                                                Category
                                            </option>
                                            @foreach($categories
                                            as $category) 
                                            <option
                                                value="{{$category->name}}"
                                            >
                                                {{$category->name}}
                                            </option>
                                         @endforeach
                                        </select>
                                    </div> --}}
                    
                                    <div
                                        class="form-group col-md-4"
                                    >
                                        <label
                                            for="inputState"
                                            >Event</label
                                        >
                                        <select
                                            id="inputState"
                                            class="form-control"
                                            name="event"
                                        >
                                            <option
                                                selected
                                            >
                                                Select Event
                                            </option>
                                            @foreach($events
                                            as $event)
                                            <option
                                                value="{{$event->id}}"
                                            >
                                                {{$event->title}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div
                                        class="form-group col-md-2 mb-3"
                                    >
                                        <label
                                            for="inputState"
                                            >Status</label
                                        >
                                        <select
                                            id="inputState"
                                            class="form-control"
                                            name="status"
                                        >
                                            <option
                                                selected
                                            >
                                                Select
                                                Status
                                            </option>
                                            <option
                                                value="1"
                                            >
                                                enable
                                            </option>
                                            <option
                                                value="0"
                                            >
                                                disable
                                            </option>
                                        </select>
                                    </div>
                                </div>
                    
                                <button
                                    type="submit"
                                    class="btn btn-primary"
                                >
                                    Add Ticket
                                </button>
                            </form>
                        </div>
                    </div>
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
