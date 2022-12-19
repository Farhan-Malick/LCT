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
    <li class="breadcrumb-item active">All Sales</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">All Sales</h1>
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
                            <th scope="col">purchaser</th>
                            {{-- <th scope="col">event name</th> --}}
                            <th scope="col">ticket name</th>
                            <th scope="col">total price</th>
                            <th scope="col">quantity</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($purchases as $purchase) 
                        <tr>
                            
                            <td>{{$purchase->id}}</td>
                            <td>{{$purchase->user->first_name}}</td>
                            {{-- <td>{{$purchase->event->title}}</td> --}}
                            <td>{{$purchase->ticket->title}}</td>
                            <td>{{$purchase->price}}</td>
                            <td>{{$purchase->quantity}}</td>
                            
                            <td>
                                <a
                                    class="btn btn-primary"
                                    href=""
                                    >edit</a
                                >

                                <a
                                    class="btn btn-danger"
                                    href=""
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
