@extends('admin.master')

@section('content')
    
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Create Post </h3>
            </div>
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{Session::get('message')}}
                </div>
            @endif
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- @method('put') --}}
                            <div class="form-group">
                                <label>Post Title</label>
                                <input type="text" name="post_title" class="form-control @error('post_title') is-invalid @enderror" placeholder="Post Title">
                            </div>
                            @error('post_title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control @error('post_category') is-invalid @enderror" name="post_category" style="width:100%">  
                                    <option value="" selected>Choose</option>
                                    @foreach ($category as $item)
                                        <option value="{{$item->id}}"> {{$item->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('post_category')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Featured Image</label>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                            </div>
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Post Description</label>
                                <textarea name="post_description" class="form-control @error('post-description') is-invalid @enderror" rows="10" placeholder="Write your post description"></textarea>                          
                            </div>
                            @error('post-description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group mt-5">
                                <h5 class="page-title mb-3 text-success"> SEO Tools </h5>
                            </div>

                            <div class="form-group">
                                <label>Meta Title</label>
                                <input type="text" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror" placeholder="Meta Title">
                            </div>
                            @error('meta_title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Meta Keyword</label>
                                <input type="text" name="meta_keyword" class="form-control @error('meta_keyword') is-invalid @enderror" placeholder="Meta Keyword">
                            </div>
                            @error('meta_keyword')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea class="form-control @error('meta_description') is-invalid @enderror" name="meta_description" id="editor" rows="4" placeholder="Meta Description"></textarea>
                            </div>
                            @error('meta_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-check form-check-flat form-check-primary">
                                <label class="form-check-label">
                                <input type="checkbox" name="status" class="form-check-input @error('status') is-invalid @enderror"> is Publish! </label>
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
            </div>
        </div>
    </div>
@endsection