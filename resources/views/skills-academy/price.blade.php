@include('components.header')
    <!--Preloader area End here-->
     
		<!-- Main content Start -->
        <div class="main-content">
            
            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <header id="rs-header" class="rs-header">
                    <!-- Topbar Area Start -->
                    <div class="topbar-area">
                        <div class="container">
                            <div class="row rs-vertical-middle">
                                <div class="col-lg-2">
                                    <div class="logo-part">
                                        <a href="/homepage"><img src="{{asset('assets/images/logo-dark.png')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-10 text-right">
                                    <ul class="rs-contact-info">
                                        <li class="contact-part">
                                            <i class="flaticon-location"></i>
                                            <span class="contact-info">
                                                <span>Address</span>
                                                Abuja-Keffi Rd, Nassarawa
                                            </span>
                                        </li>
                                        <li class="contact-part">
                                            <i class="flaticon-email"></i>
                                            <span class="contact-info">
                                                <span>E-mail</span>
                                                <a href="mailto:support@enski.com.ng"> support@enski.com.ng</a>
                                            </span>
                                        </li>
                                        <li class="contact-part no-border">
                                             <i class="flaticon-call"></i>
                                            <span class="contact-info">
                                                <span>Phone</span>
                                                 +2348162237272
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Topbar Area End -->

                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container">
                            <div class="logo-area">
                                <a href="/homepage">
                                    <img class="sticky-logo" src="{{asset('assets/images/logo-dark.png')}}" alt="logo">
                                </a>
                            </div>
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <div class="mobile-menu">
                                        <a href="/homepage" class="mobile-logo">
                                            <img src="{{asset('assets/images/logo-light.png')}}" alt="logo">
                                        </a>
                                        <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                    <nav class="rs-menu">
                                        <ul class="nav-menu">
                                            <li class="rs-mega-menu"> <a href="/homepage">Home</a> <!-- //.mega-menu -->
                                            </li>
                                            <li class="current-menu-item">
                                                <a href="#">About</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Services</a>
                                                <ul class="sub-menu">
                                                    <li><a href="/entertainment">Entertainment</a> </li>
                                                    <li><a href="/skills-academy">Skills Academy</a> </li>
                                                    <li><a href="/branding">Branding Agency</a> </li>
                                                    {{--    add a comming soon page @todo--}}
                                                    <li><a href="#">Financial Services</a></li>
                                                    <li><a href="#">Skill Set Connector</a> </li>
                                                    <li><a href="#">Logistics</a> </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="/blog">Blog</a>
                                                <ul class="sub-menu">
                                                    <li><a href="/blog">Blog</a> </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Contact</a>
                                            </li>
                                        </ul> <!-- //.nav-menu -->
                                    </nav>
                                </div> <!-- //.main-menu -->
                            </div>
                            <div class="expand-btn-inner search-icon hidden-sticky hidden-md">
                                <ul>
                                    <li class="sidebarmenu-search">
                                        <a class="hidden-xs rs-search" data-bs-toggle="modal" data-bs-target="#searchModal" href="#">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="toolbar-sl-share">
                                    <ul class="social">
                                         <li><a href="https://www.twitter.com/enski_connect"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://fb.me/enski.impact.summit"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.linkedin.com/company/enski-integrated-services/"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="https://www.instagram.com/enski_impact_summit/"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu End -->
                </header>
                <!--Header End-->
            </div>
            <!--Full width header End-->
         
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img2">
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">Pricing</h1>
                    <ul>
                        <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="#">Home</a>
                        </li>
                       <li>Pricing</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Pricing section start -->
            <div class="rs-pricing style2 gray-color pt-120 pb-150 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text style-bg">Pricing</span>
                        <h2 class="title title2">
                           Our Pricing Plan
                        </h2>
                    </div>
                   <div class="row">
                       <div class="col-lg-4">
                           <div class="pricing-table new-style2">
                               <div class="pricing-badge">
                                   Silver
                               </div>
                               <div class="pricing-icon">
                                   <img src="{{asset('assets/images/pricing/main-home/icons/1.png')}}" alt="">
                               </div>
                               <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">$</span>
                                        <span class="table-price-text">29.99</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                               </div>
                               <div class="pricing-table-body">
                                   <ul>
                                       <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                       <li><i class="fa fa-check"></i><span>1 Native Android App</span></li>
                                       <li><i class="fa fa-close"></i><span>Multi-Language Support</span></li>
                                       <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                   </ul>
                               </div>
                               <div class="btn-part">
                                   <a class="readon buy-now pricing" href="/contact">Buy Now</a>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 md-mb-30 md-mt-30">
                           <div class="pricing-table primary-bg">
                               <div class="pricing-badge white-color-bg">
                                   Gold
                               </div>
                               <div class="pricing-icon">
                                   <img src="{{asset('assets/images/pricing/main-home/icons/2.png')}}" alt="">
                               </div>
                              <div class="pricing-table-price">
                                   <div class="pricing-table-bags">
                                       <span class="pricing-currency">$</span>
                                       <span class="table-price-text">39.99</span>
                                       <span class="table-period">Monthly Package</span>
                                   </div>
                              </div>
                               <div class="pricing-table-body">
                                   <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>2 Native Android App</span></li>
                                        <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                   </ul>
                               </div>
                               <div class="btn-part">
                                   <a class="readon buy-now pricing" href="/contact">Buy Now</a>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4">
                           <div class="pricing-table new-style2">
                               <div class="pricing-badge">
                                   Platinum
                               </div>
                               <div class="pricing-icon">
                                   <img src="{{asset('assets/images/pricing/main-home/icons/3.png')}}" alt="">
                               </div>
                                <div class="pricing-table-price">
                                     <div class="pricing-table-bags">
                                         <span class="pricing-currency">$</span>
                                         <span class="table-price-text">79.99</span>
                                         <span class="table-period">Monthly Package</span>
                                     </div>
                                </div>
                               <div class="pricing-table-body">
                                   <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>3 Native Android App</span></li>
                                        <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                   </ul>
                               </div>
                               <div class="btn-part">
                                   <a class="readon buy-now pricing" href="/contact">Buy Now</a>
                               </div>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
            <!-- Pricing section end -->

        </div> 
        <!-- Main content End -->
     
        <!-- Footer Start -->
            @include('components.footer')
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div class="modal fade search-modal" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
            <button type="button" class="close" data-bs-dismiss="modal">
                <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        <!-- modernizr js -->
        @include('components.scripts')