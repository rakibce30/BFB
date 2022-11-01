<div class="header-top d-none d-lg-block">
    <div class="container-fluid">
        <div class="col-xl-12">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="header-info-left d-flex">
                    @foreach ($settings as $item)
                    <ul>      
                        <li>Call Us: {{$item->site_phone}}</li>
                        <li>{{$item->site_email}} </li>
                    </ul>
                    <div class="header-social">    
                        <ul>
                            <li><a href="{{$item->site_twitter}}"><i class="fab fa-twitter"></i></a></li>
                            <li><a  href="{{$item->site_facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{$item->site_linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                            <li> <a href="{{$item->site_googleplus}}"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                        @endforeach
                    </div>
                </div>
                <div class="header-info-right d-flex">
                    @if (!Auth::user())
                        <a href="{{route('login')}}" style="color: #d80c39">Login</a>
                        <a href="{{route('register')}}" style="color: #fc4732; margin-left: 10px">Singup</a>
                    @else
                        <a href="{{route('page.dashboard')}}" style="color: #d80c39">Dashboard</a>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-bottom  header-sticky">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-xl-2 col-lg-2">
                <div class="logo">
                    <a href="index.html">
                        @foreach ($settings as $item)
                            <img src="{{asset('Image/'. $item->logo)}}" alt="">
                        @endforeach
                    </a>
                </div>
            </div>
            <div class="col-xl-10 col-lg-10">
                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul id="navigation">                                                                                       
                                <li><a href="{{route('page.home')}}">Home</a></li>
                                <li><a href="{{route('page.about')}}">About</a></li>
                                <li><a href="{{route('page.package')}}">Package</a></li>
                                <li><a href="features.html">Features</a></li>
                                <li><a href="{{route('page.blogs')}}">Blog</a>
                                    {{-- <ul class="submenu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog_details.html">Blog Details</a></li>
                                        <li><a href="elements.html">Element</a></li>
                                    </ul> --}}
                                </li>
                                <li><a href="{{route('page.contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header-btn -->
                    <div class="header-right-btn d-none d-lg-block ml-30">
                        <a href="contact.html" class="btn header-btn">Get Started</a>
                    </div>
                </div>
            </div> 
            <!-- Mobile Menu -->
            <div class="col-12">
                <div class="mobile_menu d-block d-lg-none">
                </div>
            </div>
        </div>
    </div>
</div>