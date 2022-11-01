@extends('admin.master')

@section('title')
    Settings    
@endsection

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Settings </h3>
            </div>
            <div class="row">
                @foreach ($settings as $item)
                    <form action="{{route('settings.edit', $id= Hashids::encode($item->id))}}" method="POST" enctype="multipart/form-data" class="col-lg-12 grid-margin stretch-card">
                        @csrf
                        {{-- @method('patch') --}}
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-3 pt-2 form-group">
                                </div>
                                <div class="col-md-6 form-group">
                                    <img src="{{asset('Image/' . $item->logo)}}" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pt-2 form-group">
                                    <label class="labels text-info">Website Logo</label>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pt-2 form-group">
                                    <label class="labels text-info">Website Name</label>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Write your Website name" value="{{$item->site_name}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pt-2 form-group">
                                    <label class="labels text-info">Company Address</label>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="address" placeholder="Write your company" value="{{$item->site_address}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pt-2 form-group">
                                    <label class="labels text-info">Website Phone Number</label>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Write your Website Phone number" value="{{$item->site_phone}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pt-2 form-group">
                                    <label class="labels text-info">Website Email</label>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Write your Website Email" value="{{$item->site_email}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pt-2 form-group">
                                    <label class="labels text-primary"><i class="mdi mdi-facebook"></i> Facebook</label>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="facebook" placeholder="facebook link" value="{{$item->site_facebook}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pt-2 form-group">
                                    <label class="labels text-danger"><i class="mdi mdi-google-plus"></i> Google+</label>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="google" placeholder="google+ link" value="{{$item->site_googleplus}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pt-2 form-group">
                                    <label class="labels text-primary"><i class="mdi mdi-linkedin "></i> Linkedin</label>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="linkedin" placeholder="linkedin link" value="{{$item->site_linkedin}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pt-2 form-group">
                                    <label class="labels text-primary"><i class="mdi mdi-twitter"></i> Twitter</label>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="twitter" placeholder="twitter link" value="{{$item->site_twitter}}">
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-md btn-success">Save</button>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection