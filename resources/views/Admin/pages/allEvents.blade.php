@extends('Admin.layouts.default') @section('title', 'All Sales')
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
    <li class="breadcrumb-item active">All Events</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">All Events</h1>
<!-- end page-header -->
<div class="row">
    <!-- begin col-6 -->
    <div class="col-xl-12">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-validation-1">
            <!-- begin panel-body -->
           
            <div class="panel-body">
                @if (session('msg'))
                <div class="col-sm-6 mx-auto " style="text-align: center;  font-size:20px">
                    {{ session('msg') }}</div>
            @endif
                <table class="table mt-3">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Poster</th>
                            <th scope="col">Venue_id</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Start Time</th>
                            <th scope="col">End Time</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event) 
                        <tr>
                            
                            <td>{{$event->id}}</td>
                            <td>{{$event->slug}}</td>
                            <td>{{$event->title}}</td>
                            <td>{{$event->description}}</td>
                            <td><img
                                src="{{ asset('uploads/events/thumbnail/' . $event->thumbnail) }}"
                                class="img-rounded height-30 width-30" /></td>
                                <td><img
                                    src="{{ asset('uploads/events/poster/' . $event->poster) }}"
                                    class="img-rounded height-30 width-30" /></td>
                            <td>{{$event->venue_id}}</td>
                            <td>{{$event->start_date}}</td>
                            <td>{{$event->end_date}}</td>
                            <td>{{$event->start_time}}</td>
                            <td>{{$event->end_time}}</td>
                            
                            <td>
                                <a
                                    class="btn btn-primary"
                                    href="{{ URL('/Admin-Panel/Edit-Event/' . $event->id) }}"
                                    >edit</a
                                >

                                <a
                                    class="btn btn-danger"
                                    href="{{ URL('/Admin-Panel/event/delete/' . $event->id) }}"
                                    >Delete</a
                                >
                            </td>

                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
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
