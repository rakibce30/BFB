@extends('front-end.master')

@section('content')
    <main>
        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-6 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Don't suffer the buffer, get super internet.</h1>
                                    <P data-animation="fadeInUp" data-delay=".6s" >Onsectetur adipiscing elit, sed do eiusmod tempor incididunt ufrot bore et dolore magnt, sed do eiusmod.</P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="industries.html" class="btn hero-btn mb-10"  data-animation="fadeInUp" data-delay=".8s">View Packages</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-6 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Dont't suffer the buffer, get super internet.</h1>
                                    <P data-animation="fadeInUp" data-delay=".6s" >Onsectetur adipiscing elit, sed do eiusmod tempor incididunt ufrot bore et dolore magnt, sed do eiusmod.</P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="{{route('page.package')}}" class="btn hero-btn mb-10"  data-animation="fadeInUp" data-delay=".8s">View Packages</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? About 1 Start-->
        <section class="about-low-area section-padding2">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-6 col-md-9">
                        <!-- about-img -->
                        <div class="about-img">
                            <img src="{{asset('/')}}front-assets/img/gallery/about1.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span></span>
                                <h2>We listen and work  together for Great experience.</h2>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,mod tempor incididunt ut labore et dolore magna aliqua. Utnixm, quis nostrud exercitation ullamc.</p> -->
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,mod tempor incididunt ut labore et dolore magna aliqua. Utnixm, quis nostrud exercitation ullamc.</p>
                        </div>
                        <a href="about.html" class="btn">About US</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- About  End-->
        <!--? service Area Start -->
        <section class="service-area pb-bottom">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-9">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 mb-50">
                            <h2 class="mb-35">Mission is to bring all the power of every  business.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,mod tempor incididunt ut labore et dolore magna aliqua. Utnixm, quis nostrud exercitation ullamc.</p>
                            <a href="#" class="btn  mt-30">View Packages</a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-sm-6">
                                <div class="single-services mb-30 text-center">
                                    <i class="flaticon-null"></i>
                                    <p>Perfect in Coverage</p>
                                </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-6">
                                <div class="single-services mb-30 text-center">
                                    <i class="flaticon-null-1"></i>
                                    <p>Live Call Support</p>
                                </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-6">
                                <div class="single-services mb-30 text-center">
                                    <i class="flaticon-null-2"></i>
                                    <p>Secured Payment</p>
                                </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-6">
                                <div class="single-services mb-30 text-center">
                                    <i class="flaticon-null-3"></i>
                                    <p>1 Gbps Data Rate</p>
                                </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service Area End -->  
        <!--? Pricing Card Start -->
        <section class="pricing-card-area section-padding2">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 col-sm-10">
                        <div class="section-tittle text-center mb-100">
                            <p>Our pricing plan for you</p>
                            <h2>No hidden charges! choose  your plan wisely.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <p>Single Package</p>
                                <h4>Only Broadband connection</h4>
                            </div>
                            <div class="card-mid">
                                <h4>$20.00 <span>/ mo</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Line Rental Included</li>
                                    <li>12 Month Contract</li>
                                    <li>No Activation Charges</li>
                                    <li>Up to 12Mbps average Speed</li>
                                    <li>Enjoy family on weekends</li>
                                </ul>
                                <a href="#" class="borders-btn">View Packages</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <p>Half Package</p>
                                <h4>Broadband & TV connection</h4>
                            </div>
                            <div class="card-mid">
                                <h4>$25.00 <span>/ mo</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Line Rental Included</li>
                                    <li>12 Month Contract</li>
                                    <li>No Activation Charges</li>
                                    <li>Up to 12Mbps average Speed</li>
                                    <li>Enjoy family on weekends</li>
                                </ul>
                                <a href="#" class="borders-btn">View Packages</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <p>Full  Package</p>
                                <h4>TV, Broadband And Phone</h4>
                            </div>
                            <div class="card-mid">
                                <h4>$29.00 <span>/ mo</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Line Rental Included</li>
                                    <li>12 Month Contract</li>
                                    <li>No Activation Charges</li>
                                    <li>Up to 12Mbps average Speed</li>
                                    <li>Enjoy family on weekends</li>
                                </ul>
                                <a href="#" class="borders-btn">View Packages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Card End -->
        <!-- Latest Offers Start -->
        <div class="latest-wrapper">
            <div class="container">
                <div class="latest-area latest-height  section-bg2" data-background="{{asset('/')}}front-assets/img/gallery/section_bg01.png">
                    <div class="row  align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-7">
                            <div class="latest-caption">
                                <h2>Check our unbelievable super  fast Broadband availability in your area.</h2>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-10 ">
                            <div class="latest-subscribe">
                                <form action="#">
                                    <input type="email" placeholder="Enter Zipcode">
                                    <button>Check Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest Offers End -->
        <!--? About-2 Area Start -->
        <section class="about-area2 testimonial-area section-padding30 fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class=" col-lg-6 col-md-9 col-sm-9">
                        <div class="about-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-55">
                                <h2>What our clint think about us!</h2>
                            </div>
                            <!-- Testimonial Start -->
                            <div class="h1-testimonial-active">
                                <!-- Single Testimonial -->
                                <div class="single-testimonial">
                                    <div class="testimonial-caption">
                                        <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls intended csents your se.</p>
                                        <div class="rattiong-caption">
                                            <span>Jhon Smith<span>Gym Trainer</span> </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Testimonial -->
                                <div class="single-testimonial">
                                    <div class="testimonial-caption">
                                        <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls intended csents your se.</p>
                                        <div class="rattiong-caption">
                                            <span>Jhon Smith<span>Gym Trainer</span> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial End -->
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-11 col-sm-11">
                        <!-- about-img -->
                        <div class="about-img2">
                            <img src="{{asset('/')}}front-assets/img/gallery/about2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-2 Area End -->
        <!--? Blog Area Start -->
        <section class="home-blog-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 col-sm-10">
                        <div class="section-tittle text-center mb-90">
                            <span>Our pricing plan for you</span>
                            <h2>No hidden charges! choose your plan wisely.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{asset('/')}}front-assets/img/gallery/home-blog1.png" alt="">
                                </div>
                                <div class="blog-cap">
                                    <h3><a href="blog_details.html">The purpose of lolght invera jgrlie.</a></h3>
                                    <p>January 22, 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{asset('/')}}front-assets/img/gallery/home-blog2.png" alt="">
                                </div>
                                <div class="blog-cap">
                                    <h3><a href="blog_details.html">The purpose of lolght invera jgrlie.</a></h3>
                                    <p>January 22, 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{asset('/')}}front-assets/img/gallery/home-blog3.png" alt="">
                                </div>
                                <div class="blog-cap">
                                    <h3><a href="blog_details.html">The purpose of lolght invera jgrlie.</a></h3>
                                    <p>January 22, 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>
@endsection