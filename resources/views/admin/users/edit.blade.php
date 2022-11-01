@extends('admin.master')

@section('content')
    
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Edit User </h3>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        @if(Session::has('status'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{Session::get('status')}}
                            </div>
                        @endif
                        <form class="forms-sample" action="{{route('users.update', $_id = Hashids::encode($data->id))}}" method="POST">
                          @csrf
                          @method('put')
                          <div class="form-group"><label for="exampleInputUsername1">Name</label><p class="form-control">{{$data->name}} </p></div>
                          <div class="form-group"><label for="exampleInputEmail1">Email address</label><p class="form-control">{{$data->email}} </p></div>
                          <div class="form-group">
                            <label>User Role</label>
                            <select name="user_role" class="form-control @error('user_role') is-invalid @enderror" style="width:100%" required>
                                <option selected>Choose Role</option>
                                <option value="1">Super Admin</option>
                                <option value="2">Admin</option>
                                <option value="3">Editor</option>
                                <option value="0">User</option>
                            </select>
                            @error('user_role')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                          <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        </form>
                      </div>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
@endsection