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
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="col-md-4 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            <img class="rounded-circle mt-5" width="150px" height="150px" src=" {{asset('Image/' . $userData->image)}} " style="background: white;">
                            <span class="font-weight-bold text-success mt-2"> {{$userData->name}} </span>
                            <span class="text-white-50"> {{$userData->email}} </span>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right text-warning font-weight-bold">Profile Settings</h4>
                            </div>
                            {{-- @if (!empty ($userData->about)) --}}
                                <div class=" text-right"><a href="{{route('UserDetail.edit', $_id = Hashids::encode($userData->id))}}" class="btn btn-sm btn-success" type="submit">Edit Profile</a></div>
                            {{-- @else
                                <div class="text-right"><a href="{{route('UserDetail.create')}}" class="btn btn-sm btn-info">Create</a></div>
                            @endif
                                 --}}
                                <div class="row mt-3">
                                    <div class="col-md-12"><label class="labels text-info">About Me</label><p class="form-control"> {{$userData->about}} </p></div>
                                    <div class="col-md-12"><label class="labels text-info">Mobile Number</label><p class="form-control"> {{$userData->phone}} </p></div>
                                    <div class="col-md-12"><label class="labels text-info">Date of Birth</label><p class="form-control"> {{$userData->dob}} </p></div>
                                    <div class="col-md-12"><label class="labels text-info">Gender</label><p class="form-control"> {{$userData->gender}} </p></div>
                                    <div class="col-md-12"><label class="labels text-info">Address</label><p class="form-control"> {{$userData->address}} </p></div>
                                    <div class="col-md-12"><label class="labels text-info">Postcode</label><p class="form-control"> {{$userData->postal_code}} </p></div>
    
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6"><label class="labels text-info">City</label><p class="form-control"> {{$userData->city}} </p></div>
                                    <div class="col-md-6"><label class="labels text-info">Country</label><p class="form-control"> {{$userData->country}} </p></div>
                                </div>                            
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
@endsection