@extends('Admin.layouts.default') @section('title', 'All Tickets')
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
    <li class="breadcrumb-item active">All Tickets</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">All Tickets</h1>
<!-- end page-header -->
<div class="row">
    <!-- begin col-6 -->
    <div class="col-xl-12">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-validation-1">
            <!-- begin panel-body -->
            <div class="panel-body">
                
                <table class="table mt-3">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">title</th>
                            <th scope="col">Event</th>
                            <th scope="col">price</th>
                            <th scope="col">currency</th>
                            <th scope="col">quantity</th>
                            <th scope="col">section</th>
                            <th scope="col">row</th>
                            <th scope="col">seat from</th>
                            <th scope="col">seat to</th>
                            <th scope="col">ticket type</th>
                            <th scope="col">ticket restrictions</th>
                            <th scope="col">status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach($tickets as $ticket)
                        <tr>
                            <td>{{$ticket->id}}</td>
                            <td>{{$ticket->title}}</td>
                            <td>{{$ticket->event->title}}</td>
                            <td>{{$ticket->price}}</td>
                            <td>{{$ticket->currency}}</td>
                            <td>{{$ticket->quantity}}</td>
                            <td>{{$ticket->section}}</td>
                            <td>{{$ticket->row}}</td>
                            <td>{{$ticket->seat_from}}</td>
                            <td>{{$ticket->seat_to}}</td>
                            <td>{{$ticket->ticket_type}}</td>
                            <td>{{$ticket->ticket_restrictions}}</td>
                            <td>{{$ticket->status}}</td>
                            <td>
                                <a
                                    class="btn btn-primary"
                                    href="{{route('admin.section_rows.edit',$ticket->id)}}"
                                    >edit</a
                                >

                                <a
                                    class="btn btn-danger"
                                    href="{{route('admin.section_rows.destroy',$ticket->id)}}"
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
