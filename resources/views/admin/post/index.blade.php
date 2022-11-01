@extends('admin.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> All Category </h3>
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
                            <th> Post Title </th>
                            <th> Category </th>
                            <th> Author </th>
                            <th> Date </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($post as $item)
                            <tr>
                              <td> {{$item->name}} </td>
                              <td> {{$item->category->name}} </td>
                              <td> {{$item->user->name}} </td>
                              <td> {{$item->created_at}} </td>
                              <td>
                                <a href="{{route('post.edit', $_id = Hashids::encode($item->id))}}" class="btn btn-info btn-sm">Edit</a>  
                                  <form action="{{route('post.destroy', $_id = Hashids::encode($item->id))}}" method="POST" class="d-inline-flex">
                                    @csrf
                                    @method('delete')
                                    <div class="mt-1">
                                      <input type="submit" value="delete" class="btn btn-danger btn-sm">
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