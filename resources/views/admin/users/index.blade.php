@extends('admin.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> All Users </h3>
        </div>
        @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{Session::get('message')}}
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>  
                            <th> User Name </th>
                            <th> Email </th>
                            <th> Role </th>
                            <th> Create At </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $row)
                          <tr>
                            <td> {{$row->name}}</td>
                            <td> {{$row->email}} </td>
                            <td>   
                                @switch($row->user_role)
                                    @case('1')
                                        <span class="status">Super Admin</span>
                                        @break
                                    @case('2')
                                        <span class="status">Admin</span>
                                        @break
                                    @case('3')
                                        <span class="status">Editor</span>
                                        @break
                                    @default
                                        <span class="status">User</span>
                                @endswitch                   
                            </td>
                            <td> {{$row->created_at}} </td>
                            <td>
                                <a class="btn btn-info btn-sm" href="{{route('users.edit',$_id = Hashids::encode($row->id))}}">Edit</button></a>
                                <form action="{{route('users.destroy', $_id = Hashids::encode($row->id))}}" method="post" class="d-inline-flex">
                                  @csrf
                                  @method('delete')
                                  <div class="mt-1">
                                      <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                  </div>
                              </form>
                            </td>
                          </tr>
                        @endforeach  
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection