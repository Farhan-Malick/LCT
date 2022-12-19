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
    <li class="breadcrumb-item active">All Venues</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">All Venues</h1>
<!-- end page-header -->
<div class="row">
    <!-- begin col-6 -->
    <div class="col-xl-12">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-validation-1">
            <!-- begin panel-body -->
            <div class="panel-body">
                
                <table class="table mt-3 responsive">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Venue_type</th>
                            <th scope="col">Amenities</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Seated Guest.No</th>
                            <th scope="col">Standing Guest.No</th>
                            <th scope="col">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">Country</th>
                            <th scope="col">State</th>
                            <th scope="col">Zip Code</th>
                            <th scope="col">G.LAT</th>
                            <th scope="col">G.Long</th>
                            <th scope="col">Image</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($venues as $venue)
                        <tr>
                            <td>{{$venue->id}}</td>
                            <td>{{$venue->title}}</td>
                            <td>{{$venue->description}}</td>
                            <td>{{$venue->venue_type}}</td>
                            <td> {{ Str::limit($venue->amenities, 50) }}</td>
                            <td>{{$venue->slug}}</td>
                            <td>{{$venue->seated_guestnumber}}</td>
                            <td>{{$venue->standing_guestnumber}}</td>
                            <td>{{$venue->address}}</td>
                            <td>{{$venue->city}}</td>
                           
                            <td>{{$venue->country->country_name}}</td>
                            <td>{{$venue->state}}</td>
                            <td>{{$venue->zipcode}}</td>
                            <td>{{$venue->glat}}</td>
                            <td>{{$venue->glong}}</td>
                            <td>{{$venue->image}}</td>
                            <td>{{$venue->status}}</td>
                            <td>
                                {{-- <a
                                    class="btn btn-primary"
                                    href="{{route('admin.section_rows.edit',$venue->id)}}"
                                    >edit</a
                                > --}}

                                <a
                                    class="btn btn-danger"
                                    href="{{URL('/Admin-Panel/venue/all-venues/delete',$venue->id)}}"
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
