@extends('admin.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Create Category </h3> 
      </div>
      <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <form class="forms-sample" action="{{route('category.update', $_id = Hashids::encode($data->id))}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" name="cat_name" class="form-control @error('cat_name') is-invalid @enderror" value="{{$data->name}}" placeholder="Category Name">
                        </div>
                        @error('cat_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="exampleTextarea1">Description</label>
                            <textarea class="form-control @error('cat_des') is-invalid @enderror" name="cat_des" id="exampleTextarea1" rows="3" placeholder="Description"></textarea>
                        </div>
                        @error('cat_des')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                        </div>
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Meta Title</label>
                            <input type="text" name="meta_title" value="{{$data->meta_title}}" class="form-control @error('meta_title') is-invalid @enderror"  placeholder="Meta Title">
                        </div>
                        @error('meta_title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Meta Keyword</label>
                            <input type="text" name="meta_key" value="{{$data->meta_keyword}}" class="form-control @error('meta_keyword') is-invalid @enderror "  placeholder="Meta Keyword">
                        </div>
                        @error('meta_keyword')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Category Meta Description</label>
                            <textarea class="form-control @error('meta_des') is-invalid @enderror" name="meta_des" id="exampleTextarea1" rows="3" placeholder="Description"></textarea>
                        </div>
                        @error('meta_des')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                            <input type="checkbox" name="navbar_status" class="form-check-input @error('navbar_status') is-invalid @enderror"> Navbar Status </label>
                        </div>
                        @error('navbar_status')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                            <input type="checkbox" name="status" class="form-check-input @error('status') is-invalid @enderror"> Published </label>
                        </div>
                        @error('status')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-dark">Cancel</button>
                    </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
      </div>
    </div>
</div>
    
@endsection