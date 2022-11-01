@extends('front-end.master')

@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-50 text-center">
                            <h2>Blog Details</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero End -->
        <!--? Blog Area Start -->
        <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                    <div class="feature-img">
                        {{-- <img class="img-fluid" src="{{asset('Image/' . $post->image)}}" alt=""> --}}
                    </div>
                    <div class="blog_details">
                        <h2 style="color: #2d2d2d;">{{$post->name}}</h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="fa fa-user"></i> {{$post->user->name}}</a></li>
                            <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                            <li><a href="#">{{ $post->created_at->format('M d, Y') }}</a></li>
                            
                        </ul>
                        <p class="excert">
                            {{$post->description}}
                        </p>

                        <div class="quote-wrapper">
                            <div class="quotes">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at
                                a fraction of the camp price. However, who has the willpower to actually sit through a
                                self-imposed MCSE training.
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                        <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                            people like this</p>
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                        </div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <div class="navigation-area">
                        <div class="row">
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                <a href="#">
                                    <img class="img-fluid" src="{{asset('/')}}front-assets/img/post/preview.png" alt="">
                                </a>
                                </div>
                                <div class="arrow">
                                <a href="#">
                                    <span class="lnr text-white ti-arrow-left"></span>
                                </a>
                                </div>
                                <div class="detials">
                                <p>Prev Post</p>
                                <a href="#">
                                    <h4 style="color: #2d2d2d;">Space The Final Frontier</h4>
                                </a>
                                </div>
                            </div>
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                <p>Next Post</p>
                                <a href="#">
                                    <h4 style="color: #2d2d2d;">Telescopes 101</h4>
                                </a>
                                </div>
                                <div class="arrow">
                                <a href="#">
                                    <span class="lnr text-white ti-arrow-right"></span>
                                </a>
                                </div>
                                <div class="thumb">
                                <a href="#">
                                    <img class="img-fluid" src="{{asset('/')}}front-assets/img/post/next.png" alt="">
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    {{-- <div class="blog-author">
                    <div class="media align-items-center">
                        <img src="{{asset('Image/' . $post->user->image)}}" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>{{$post->user->name}}</h4>
                            </a>
                            <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                                our dominion twon Second divided from</p>
                        </div>
                    </div>
                    </div> --}}
                    <div class="comments-area">
                        <h4>{{$post->comment->count()}} Comments</h4>
                       @foreach ($post->comment as $item) 
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                    <img src="assets/img/blog/comment_1.png" alt="">
                                    </div>
                                    
                                        <div class="desc">
                                            <p class="comment">{{$item->description}}</p>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <h5>
                                                        <a href="#">{{$item->name}}</a>
                                                    </h5>
                                                    <p class="date">{{ $item->created_at->format('M d, Y') }} </p>
                                                </div>
                                                <div class="reply-btn">
                                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{-- --------------------Comment Form----------------------- --}}
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form class="form-contact comment_form" action="{{route('comment.store')}}" id="commentForm" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                    <textarea class="form-control w-100 @error('comment') is-invalid @enderror" name="comment" id="comment" cols="30" rows="9"
                                        placeholder="Write Comment"></textarea>
                                    </div>
                                    @error('comment')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" placeholder="Name" value="{{old('name')}}">
                                    </div>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email" placeholder="Email" value="{{old('email')}}">
                                    </div>
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                    <input class="form-control" name="website" id="website" type="text" placeholder="Website" value="{{old('website')}}">
                                    <input class="form-control" name="post_id" hidden type="text" value="{{$post->id}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    @include('front-end.inc.right-sidebar')
                </div>
            </div>
        </div>
        </section>
        <!-- Blog Area End -->
    </main>
@endsection