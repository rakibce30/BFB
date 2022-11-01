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
                            <th> Category Name </th>
                            <th> Image </th>
                            <th> Created By </th>
                            <th> Status </th>
                            <th> Navbar Status </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach ($data as $row)
                          
                            <tr>
                              <td> {{$row->name}}</td>
                              <td> 
                                  <img src="{{asset('Image/' . $row->image)}}" height="50px" width="50px" alt="Img">
                              </td>
                              <td> {{$row->user->name}} </td>
                              <td> {{$row->status}} </td>
                              <td> {{$row->navbar_status}} </td>
                              @if (Auth::user()->id === $row->created_by)
                              <td>
                                  <a href="{{route('category.edit', $_id = Hashids::encode($row->id))}}" class="btn btn-info btn-sm">Edit</a>
                                  
                                  <form action="{{route('category.destroy', $_id = Hashids::encode($row->id))}}" method="post" class="d-inline-flex">
                                      @csrf
                                      @method('delete')
                                      <div class="mt-1">
                                          <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                      </div>
                                  </form>                           
                              </td>
                              @elseif (Auth::user()->id === 1)
                              <td>
                                  <a href="{{route('category.edit', $_id = Hashids::encode($row->id))}}" class="btn btn-info btn-sm">Edit</a>
                                  
                                  <form action="{{route('category.destroy', $_id = Hashids::encode($row->id))}}" method="post" class="d-inline-flex">
                                      @csrf
                                      @method('delete')
                                      <div class="mt-1">
                                          <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                      </div>
                                  </form>                           
                              </td>
                              @else
                              <td>Not Allow</td> 
                              @endif
                              
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