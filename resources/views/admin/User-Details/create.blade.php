@extends('admin.master')

@section('title')
    Profile    
@endsection

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Profile </h3>
            </div>
            <div class="row">
                <form action="{{route('UserDetail.store')}}" class="col-lg-12 grid-margin stretch-card" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('put') --}}
                    <div class="col-md-4 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5 form-group">
                            <img class="rounded-circle mt-5" width="150px" src="#" style="background: white;">
                            <span class="font-weight-bold text-success mt-2">{{Auth::user()->name}}</span>
                            <span class="text-white-50">{{Auth::user()->email}}</span>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right text-warning font-weight-bold">Profile Settings</h4>
                            </div>
                            <div class=" text-right"><button class="btn btn-sm btn-success">Save</button></div>
                            <div class="row mt-2">
                                <div class="col-md-12 form-group"><label class="labels text-info">About Me</label><input type="text" class="form-control" name="user_about" placeholder="Enter your self"></div>
                                <div class="col-md-12 form-group"><label class="labels text-info">Image</label><input type="file" class="form-control" name="image" placeholder="Enter your self"></div>
                                <div class="col-md-12 form-group"><label class="labels text-info">Mobile Number</label><input type="text" class="form-control" name="user_number" placeholder="Enter your Mobile Number"></div>
                                <div class="col-md-12 form-group"><label class="labels text-info">Date of Birth</label><input type="text" class="form-control" name="user_dob" placeholder="Enter your Date of Birth"></div>
                                <div class="col-md-12 form-group"><label class="labels text-info">Gender</label><input type="text" class="form-control" name="user_gender" placeholder="Enter your Gender"></div>
                                <div class="col-md-12 form-group"><label class="labels text-info">Address</label><input type="text" class="form-control" name="user_address" placeholder="Enter your Address"></div>
                                <div class="col-md-12 form-group"><label class="labels text-info">Postcode</label><input type="text" class="form-control" name="user_postcode" placeholder="Enter your post code"></div>

                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group"><label class="labels text-info">City</label><input type="text" class="form-control" name="user_city" placeholder="Enter your city"></div>
                                <div class="col-md-6 form-group"><label class="labels text-info">Country</label><input type="text" class="form-control" name="user_country" placeholder="Enter your Conuntry"></div>
                            </div> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection