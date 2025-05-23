<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ $metaTitle ?: 'NSC MESKANA GLOBAL CO LTD'}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="meskana store" name="keywords">
    <meta name="description" content="{{$metaDescription}}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/meskana_logo.jpeg') }}">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <meta name="google-site-verification" content="LHFK-NjY8U3tlvOZIPttMHo2HrkRkDQVldO6YYaMEyQ"/>  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E4QLGDLHF8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E4QLGDLHF8');
</script>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                {{-- <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="">About</a>
                    <a class="text-body mr-3" href="">Contact</a>
                    <a class="text-body mr-3" href="">Help</a>
                    <a class="text-body mr-3" href="">FAQs</a>
                </div> --}}
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                
                    <div class="d-inline-flex align-items-center">
                        <a class="text-dark px-2" href="https://www.facebook.com/share/1A7GWXtyRX/" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="https://www.instagram.com/nsc.lightings.store?igsh=MXUweWttOGRvdWYwNw%3D%3D" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        
                        <a class="text-dark px-2" href="https://www.facebook.com/share/1Dq9aM2QT3/" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>

                        <a class="text-dark px-2" href="https://www.instagram.com/my_furniture.store?igsh=bjU0M3Axd3pyZ3B4" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        
                        <a class="text-dark pl-2" href="https://www.instagram.com/meskana_global_energy?igsh=MWt2cmQxZzl2c2RwNQ==" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>

                        <a class="text-dark px-2" href="https://www.facebook.com/share/14xbSf2REu/" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>
                
                <!-- <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">Sign in</button>
                            <button class="dropdown-item" type="button">Sign up</button>
                        </div>
                    </div>
                    <div class="btn-group mx-2">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">USD</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">EUR</button>
                            <button class="dropdown-item" type="button">GBP</button>
                            <button class="dropdown-item" type="button">CAD</button>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">EN</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">FR</button>
                            <button class="dropdown-item" type="button">AR</button>
                            <button class="dropdown-item" type="button">RU</button>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div> -->
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="{{route('home')}}" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">MESKANA</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">GLOBAL</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                {{-- <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form> --}}
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0">0814 690 1808, 0813 369 8934</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="cat-contain container-fluid  mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <!-- <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dresses <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Men's Dresses</a>
                                <a href="" class="dropdown-item">Women's Dresses</a>
                                <a href="" class="dropdown-item">Baby's Dresses</a>
                            </div> -->
                        </div>
                        @foreach ($categories as $category )
                            
                        <a href="{{route('by-category', $category)}}" class="nav-item nav-link">{{$category->title}}</a>
                        @endforeach
                        
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="meskana h1 text-uppercase text-dark bg-light px-2">MESKANA</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">GLOBAL</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                            @foreach ($categories as $category )
                            <a href="{{route('by-category', $category)}}" class="nav-item nav-link">{{$category->title}}</a>
                            @endforeach
                            
                            <!-- <a href="detail.html" class="nav-item nav-link">Shop Detail</a> -->
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div> -->
                            <a href="{{route('blog')}}" class="nav-item nav-link">Blog</a>
                            <a href="{{route('contact-us')}}" class="nav-item nav-link">Contact</a>
                        </div>
                        <!-- <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                        </div> -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
    
    <!-- Carousel Start -->
    {{$slot}}


    <!-- Footer Start -->
    <div class="footer-con container-fluid  text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-4">Have questions about our products or need help placing an order? Chat with us on WhatsApp for instant support. We’re here to assist you with product recommendations, pricing, and order processing!</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Alaba International Market, Lagos</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>nscmeskanaglobalcoltd@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>0814 690 1808, 0813 369 8934</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="{{route('home')}}"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            @foreach ($categories as $category )
                            <a class="text-secondary mb-2" href="{{route('by-category', $category)}}"><i class="fa fa-angle-right mr-2"></i>{{$category->title}}</a>
                            @endforeach
                            <!-- <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a> -->
                            <!-- <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a> -->
                            <!-- <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a> -->
                            <a class="text-secondary" href="{{route('contact-us')}}"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <!-- <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div> -->
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                        <p>Coming Soon!</p>
                        {{-- <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                        </form> --}}
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="https://www.instagram.com/nsc.lightings.store?igsh=MXUweWttOGRvdWYwNw==" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="https://www.facebook.com/share/1A7GWXtyRX/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square" href="https://www.instagram.com/meskana_global_energy?igsh=MWt2cmQxZzl2c2RwNQ==" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="https://www.facebook.com/share/1Dq9aM2QT3/" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a class="btn btn-primary btn-square" href="https://www.instagram.com/my_furniture.store?igsh=bjU0M3Axd3pyZ3B4" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="https://www.facebook.com/share/14xbSf2REu/" target="_blank"><i class="fab fa-facebook-f"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed
                    by
                    <a class="text-primary" href="#">SMLE Teach</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <div class="whatsapp-float" id="whatsappFloat">
        <div class="whatsapp-float-message">How can we help you?</div>
        <a href="https://api.whatsapp.com/send?phone=2348133698934" class="whatsapp-float-btn" target="_blank">
          <i class="fab fa-whatsapp"></i>
        </a>
      </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="{{asset('mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>