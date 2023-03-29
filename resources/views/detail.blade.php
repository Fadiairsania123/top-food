<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Detail Resto</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="{{ asset('') }}css/bootstrap.min.css" rel="stylesheet">

        <link href="{{ asset('') }}css/bootstrap-icons.css" rel="stylesheet">

        <link href="{{ asset('') }}css/magnific-popup.css" rel="stylesheet">

        <link href="{{ asset('') }}css/tooplate-clean-work.css" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    
    <body>

        <header class="site-header">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-house-fill me-2"></i>
                            Top Food
                        </p>

                        <p class="d-flex d-lg-block d-md-block d-none me-4 mb-0">
                            <i class="bi-clock-fill me-2"></i>
                            <strong class="me-2">Mon - Fri</strong> 8:00 AM - 5:30 PM
                        </p>

                        <p class="site-header-icon-wrap text-white d-flex mb-0 ms-auto">
                            <i class="site-header-icon bi-whatsapp me-2"></i>

                            <a href="tel: 110-220-9800" class="text-white">
                                0831-7649-7537
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('') }}images/newlogo.png" class="logo img-fluid" alt="">

                    <span class="ms-2">Top Food</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}"></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.html"></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.html"></a>
                        </li>

                        <li class="nav-item ms-3 dropdown">
                            @if (Auth::user())
                            <a class="nav-link dropdown-toggle custom-btn custom-border-btn custom-btn-bg-white btn" >{{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('transaction') }}">Pesanan</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                            <a class="nav-link custom-btn custom-border-btn custom-btn-bg-white btn" href="{{route('cart')}}"><i class="bi bi-bag-check iconBeli"></i> Cart</a>
                            @else 
                            <a class="nav-link custom-btn custom-border-btn custom-btn-bg-white btn" href="{{route('login')}}">Login</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>

            <section class="banner-section d-flex justify-content-center align-items-end">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-12">
                            <h1 class="text-white mb-lg-0">Resto Pilihan</h1>
                        </div>

                        <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="home">Home</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Detail Resto</li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $data->nama }}</li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
            </section>
         

            <section class="services-detail-section section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <div class="services-image-wrap">
                                <img src="{{ asset('resto/'.$data->image) }}" class="services-image img-fluid" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="services-info px-4 pt-4">
                                <h3 class="mb-4"><b>{{ $data->nama }}</h3></b>
                                {{-- <p>Spesial Lalapan</p> --}}

                                <h6 class="mt-4">Deskripsi</h6>

                                <p>{{ $data->deskripsi }}</p>

                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="section-padding pt-0">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h2 class="mb-4">Menu</h2>
                        </div>

                        @foreach ($data->menu as $item)
                            
                        <div class="col-lg-6 col-12 border bg-light">
                            <div class="services-thumb bg-light">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="services-image-wrap">
                                            <a href="services-detail.html">
                                                <img src="{{ asset('menu/'.$item->image) }}" width="200" class="services-image img-fluid" alt="">

                                                {{-- <div class="services-icon-wrap">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-white mb-0">
                                                            <i class="bi-cash me-2"></i>
                                                            Promo
                                                        </p>

                                                        <p class="text-white mb-0">
                                                            <i class="bi-clock-fill me-2"></i>
                                                            20 mnt
                                                        </p>
                                                    </div>                                                    
                                                </div> --}}
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                        <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                            <h5 class="services-title mb-1 mb-lg-2">
                                                <a class="services-title-link" href="services-detail.html">{{ $item->makanan }}</a>
                                            </h5>

                                            <p>{{ $item->deskripsi }}</p>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <span class="text-primary">Rp. {{ number_format($item->harga,0,',','.'); }}</span>

                                                <a data-id="{{ $item->id }}" id="cart-{{ $item->id }}" class="btn-success btn button mt-2 ms-auto beli">
                                                    <i class="bi bi-plus iconBeli"></i>
                                                </a>
                                                <a style="display:none" href="{{ route('cart') }}" class="btn-outline-success btn button mt-2 ms-auto cart-{{ $item->id }}">
                                                    {{-- <i class="bi bi-plus iconBeli"></i> --}}
                                                    <i class="bi bi-bag-check iconBeli"></i>
                                                </a>
                                            </div>
                                            <br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>

            {{-- <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h2 class="mb-4">Related Services</h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="services-thumb mb-lg-0">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="services-image-wrap">
                                            <a href="services-detail.html">
                                                <img src="images/services/man-polishing-car-inside-car-service.jpg" class="services-image img-fluid" alt="">
                                                <img src="images/services/man-polishing-car-inside.jpg" class="services-image services-image-hover img-fluid" alt="">

                                                <div class="services-icon-wrap">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-white mb-0">
                                                            <i class="bi-cash me-2"></i>
                                                            $240
                                                        </p>

                                                        <p class="text-white mb-0">
                                                            <i class="bi-clock-fill me-2"></i>
                                                            2 hrs
                                                        </p>
                                                    </div>                                                    
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                        <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                            <h4 class="services-title mb-1 mb-lg-2">
                                                <a class="services-title-link" href="services-detail.html">Car Washing</a>
                                            </h4>

                                            <p>Best Cleaning Service Provider Ipsum dolor sit consectetur kengan</p>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="reviews-icons">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                </div>

                                                <a href="services-detail.html" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                                    <span>Learn More</span>

                                                    <div class="marquee" aria-hidden="true">
                                                        <div class="marquee__inner">
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="services-thumb mb-lg-0">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="services-image-wrap">
                                            <a href="services-detail.html">
                                                <img src="images/services/professional-industrial-cleaner-protective-uniform-cleaning-floor-food-processing-plant.jpg" class="services-image img-fluid" alt="">
                                                <img src="images/services/close-up-mop-cleaning-industrial-plant-floor.jpg" class="services-image services-image-hover img-fluid" alt="">

                                                <div class="services-icon-wrap">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-white mb-0">
                                                            <i class="bi-cash me-2"></i>
                                                            $6,800
                                                        </p>

                                                        <p class="text-white mb-0">
                                                            <i class="bi-clock-fill me-2"></i>
                                                            30 hrs
                                                        </p>
                                                    </div>                                                    
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                        <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                            <h4 class="services-title mb-1 mb-lg-2">
                                                <a class="services-title-link" href="services-detail.html">Factory Cleaning</a>
                                            </h4>

                                            <p>Best Cleaning Service Provider Ipsum dolor sit consectetur kengan</p>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="reviews-icons">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star"></i>
                                                </div>

                                                <a href="services-detail.html" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                                    <span>Learn More</span>

                                                    <div class="marquee" aria-hidden="true">
                                                        <div class="marquee__inner">
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section> --}}


            <section class="partners-section">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-12 col-12">
                            <h4 class="partners-section-title bg-white shadow-lg">Trusted by companies</h4>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="{{ asset('') }}images/about/food1.jpg" class="partners-image img-fluid">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="{{ asset('') }}images/partners/rolf-leasing.svg" class="partners-image img-fluid">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="{{ asset('') }}images/partners/woocommerce.svg" class="partners-image img-fluid">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="{{ asset('') }}images/partners/toprak-leasing.svg" class="partners-image img-fluid">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="{{ asset('') }}images/partners/unilabs.svg" class="partners-image img-fluid">
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
        
                    <div class="col-lg-12 col-12 d-flex align-items-center mb-4 pb-2">
                        <div>
                            <img src=" " class="logo img-fluid" alt="">
                        </div>
        
                        <ul class="footer-menu d-flex flex-wrap ms-5">
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">About Us</a></li>
        
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Blog</a></li>
        
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Reviews</a></li>
        
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                        </ul>
                    </div>
        
                    <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                        <h5 class="site-footer-title mb-3">Pilihan</h5>
        
                        <ul class="footer-menu">
                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    Drinks
                                </a>
                            </li>
        
                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    Snack
                                </a>
                            </li>
        
                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    Food
                                </a>
                            </li>
        
                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    Restaurant
                                </a>
                            </li>
        
                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    Restaurant
                                </a>
                            </li>
                        </ul>
                    </div>
        
                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                        <h5 class="site-footer-title mb-3">Office</h5>
        
                        <p class="text-white d-flex mt-3 mb-2">
                            <i class="bi-geo-alt-fill me-2"></i>
                            Malang, Jawa Timur, Indonesia
                        </p>
        
                        <p class="text-white d-flex mb-2">
                            <i class="bi-telephone-fill me-2"></i>
        
                            <a href="tel: 110-220-9800" class="site-footer-link">
                                0831-7649-7537
                            </a>
                        </p>
        
                        <p class="text-white d-flex">
                            <i class="bi-envelope-fill me-2"></i>
        
                            <a href="mailto:info@company.com" class="site-footer-link">
                                TopFood@gmail.com
                            </a>
                        </p>
        
                        <ul class="social-icon mt-4">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link button button--skoll">
                                    <span></span>
                                    <span class="bi-twitter"></span>
                                </a>
                            </li>
        
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link button button--skoll">
                                    <span></span>
                                    <span class="bi-facebook"></span>
                                </a>
                            </li>
        
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link button button--skoll">
                                    <span></span>
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mt-3 mt-lg-0 mt-md-0">
                        <div class="featured-block">
                            <h5 class="text-white mb-3">Service Admin</h5>
        
                            <strong class="d-block text-white mb-1">Mon - Fri</strong>
        
                            <p class="text-white mb-3">8:00 AM - 5:30 PM</p>
        
                            <strong class="d-block text-white mb-1">Sat</strong>
        
                            <p class="text-white mb-0">6:00 AM - 2:30 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">
        
                        <div class="col-lg-6 col-12">
                            <p class="copyright-text mb-0">Copyright © Top Food East 2023</p>
                        </div>
        
                        <div class="col-lg-6 col-12 text-end">
                            <p class="copyright-text mb-0">
                            // Designed by Kelompok 5 //</p>
                        </div>
        
                    </div>
                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('') }}js/jquery.min.js"></script>
        <script src="{{ asset('') }}js/bootstrap.min.js"></script>
        <script src="{{ asset('') }}js/jquery.backstretch.min.js"></script>
        <script src="{{ asset('') }}js/counter.js"></script>
        <script src="{{ asset('') }}js/countdown.js"></script>
        <script src="{{ asset('') }}js/init.js"></script>
        <script src="{{ asset('') }}js/modernizr.js"></script>
        <script src="{{ asset('') }}js/animated-headline.js"></script>
        <script src="{{ asset('') }}js/jquery.magnific-popup.min.js"></script>
        <script src="{{ asset('') }}js/magnific-popup-options.js"></script>
        <script src="{{ asset('') }}js/custom.js"></script>
        
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).ready(function(){
                $('.beli').on('click',function(){
                    var id_menu = $(this).data('id')
                    $.ajax({
                        type:'POST',
                        url:"{{ route('addToCart') }}",
                        data:{id_menu:id_menu},
                        success:function(data){
                            if(data.login){
                                window.location.href = "{{route('login')}}";
                            }else{
                                $('#cart-'+id_menu).remove();
                                $('.cart-'+id_menu).show();
                            }
                        }
                    });
                })
            })
        </script>
    </body>
</html>
