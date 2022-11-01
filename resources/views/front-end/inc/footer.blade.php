<footer>
    <!--? Footer Start-->
    <div class="footer-area section-bg" data-background="{{asset('/')}}front-assets/img/gallery/footer_bg.png">
        <div class="container">
             <!-- Brand Area Start -->
            <div class="brand-area pt-25 pb-30">
                <div class="container">
                    <div class="brand-active brand-border pt-50 pb-40">
                        <div class="single-brand">
                            <img src="{{asset('/')}}front-assets/img/gallery/brand1.png" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="{{asset('/')}}front-assets/img/gallery/brand2.png" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="{{asset('/')}}front-assets/img/gallery/brand3.png" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="{{asset('/')}}front-assets/img/gallery/brand4.png" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="{{asset('/')}}front-assets/img/gallery/brand2.png" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="{{asset('/')}}front-assets/img/gallery/brand3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Brand Area End -->
            <div class="footer-top footer-padding">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html">
                                    @foreach ($settings as $item)
                                        <img src="{{asset('Image/'. $item->logo)}}" alt="">
                                    @endforeach
                                </a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p class="info1">Receive updates and latest news direct from Simply enter.</p>
                                </div>
                            </div>
                            <div class="footer-number">
                                {{-- @php( $settings = \App\Models\Setting::all()) 
                                @foreach ($settings as $item)
                                    <h4>{{$item->site_phone}}</h4>
                                    <p>{{$item->site_email}}</p>   
                                @endforeach   --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Our Support</h4>
                                <ul>
                                    <li><a href="#">Advanced</a></li>
                                    <li><a href="#"> Management</a></li>
                                    <li><a href="#">Corporate</a></li>
                                    <li><a href="#">Customer</a></li>
                                    <li><a href="#">Information</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Link</h4>
                                <ul>
                                    <li><a href="#">New Law</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Licenses</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Newslatter</h4>
                                <div class="footer-pera">
                                    <p class="info1">Subscribe now to get daily updates</p>
                                </div>
                            </div>
                            <!-- Form -->
                            <div class="footer-form">
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                        <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                                        <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                Send
                                            </button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <!-- Footer Social -->
                        <div class="footer-social f-right">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>