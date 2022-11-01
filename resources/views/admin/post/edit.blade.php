@extends('admin.master')

@section('content')
    
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Edit Post </h3>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{route('post.update', $_id = Hashids::encode($post->id))}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label>Post Title</label>
                                <input type="text" name="post_title" class="form-control @error('post_title') is-invalid @enderror" placeholder="Post Title" value="{{$post->name}}">
                            </div>
                            @error('post_title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control @error('post_category') is-invalid @enderror" name="post_category" style="width:100%">  
                                    <option value="" selected>{{$post->category->name}}</option>
                                    @foreach ($category as $row)
                                        <option value="{{$row->id}}"> {{$row->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('post_category')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Featured Image</label>
                                <img src="{{asset('Image/' . $post->image)}}" class="rounded float-start d-inline-flex m-3" height="100%" width="250px" alt="Img">
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                            </div>
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Post Description</label>
                                <textarea name="post_description" class="form-control @error('post-description') is-invalid @enderror" rows="10"></textarea>                          
                            </div>
                            @error('post-description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group mt-5">
                                <h5 class="page-title mb-3 text-success"> SEO Tools </h5>
                            </div>

                            <div class="form-group">
                                <label>Meta Title</label>
                                <input type="text" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror" value="{{$post->meta_title}}">
                            </div>
                            @error('meta_title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Meta Keyword</label>
                                <input type="text" name="meta_keyword" class="form-control @error('meta_keyword') is-invalid @enderror" {{$post->meta_keyword}}>
                            </div>
                            @error('meta_keyword')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea class="form-control @error('meta_description') is-invalid @enderror" name="meta_description" id="editor" rows="4"></textarea>
                            </div>
                            @error('meta_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-check form-check-flat form-check-primary">
                                <label class="form-check-label">
                                @if ($post->status === 1)
                                    <input type="checkbox" checked name="status" class="form-check-input @error('status') is-invalid @enderror"> is Publish! </label>
                                @else
                                <input type="checkbox"  name="status" class="form-check-input @error('status') is-invalid @enderror"> is Publish! </label>                                         
                                @endif  
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