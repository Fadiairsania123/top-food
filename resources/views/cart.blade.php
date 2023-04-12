<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Cart</title>

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
                            <h1 class="text-white mb-lg-0">Cart</h1>
                        </div>


                    </div>
                </div>
            </section>
         

            <section class="services-detail-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col consulting-form shadow-lg">
                            <table class="table">
                                <tr>
                                    <td>No</td>
                                    <td>Nama</td>
                                    <td>Harga</td>
                                    <td>Qty</td>
                                    <td>Action</td>
                                </tr>
                                @foreach ($data as $key => $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->menu->makanan }}</td>
                                        <td>{{ $item->menu->harga }}</td>
                                        <td><input type="number" style="width: 40px" value="{{ $item->qty }}" data-id="{{ $item->id }}" class="qty_edit"></td>
                                        <td><a class="btn-danger btn button" href="{{ route('cart.destroy',$item->id) }}">Hapus</a></td>
                                    </tr>
                                @endforeach
                            </table>
                            <div class="mx-auto">
                                @if (count($data) >= 1)
                                <a href="{{ route('checkout') }}" class="custom-btn btn button button--atlas mt-2 ms-auto">Checkout</a>
                                
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            


            <section class="partners-section">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-12 col-12">
                            <h4 class="partners-section-title bg-white shadow-lg">Trusted by companies</h4>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="{{ asset('') }}images/partners/glorix.svg" class="partners-image img-fluid">
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
                            <img src="{{ asset('') }}images/bubbles.png" class="logo img-fluid" alt="">
                        </div>

                        <ul class="footer-menu d-flex flex-wrap ms-5">
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">About Us</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Blog</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Reviews</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                        <h5 class="site-footer-title mb-3">Our Services</h5>

                        <ul class="footer-menu">
                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    House Cleaning
                                </a>
                            </li>

                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    Car Washing
                                </a>
                            </li>

                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    Laundry
                                </a>
                            </li>

                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    Office Cleaning
                                </a>
                            </li>

                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    Toilet Cleaning
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                        <h5 class="site-footer-title mb-3">Office</h5>

                        <p class="text-white d-flex mt-3 mb-2">
                            <i class="bi-geo-alt-fill me-2"></i>
                            Akershusstranda 20, 0150 Oslo, Norway
                        </p>

                        <p class="text-white d-flex mb-2">
                            <i class="bi-telephone-fill me-2"></i>

                            <a href="tel: 110-220-9800" class="site-footer-link">
                                110-220-9800
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <i class="bi-envelope-fill me-2"></i>

                            <a href="mailto:info@company.com" class="site-footer-link">
                                info@company.com
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
                            <h5 class="text-white mb-3">Service Hours</h5>

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
                            <p class="copyright-text mb-0">Copyright © 2036 Clean Work Co., Ltd.</p>
                        </div>
                        
                        <div class="col-lg-6 col-12 text-end">
                            <p class="copyright-text mb-0">
                            // Designed by <a href="https://www.tooplate.com" target="_parent">Tooplate</a> //</p>
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
                $('.qty_edit').change(function(){
                    var id = $(this).data('id');
                    var qty = this.value;
                    $.ajax({
                        type:'POST',
                        url:"{{ route('cart.update') }}",
                        data:{id:id,qty:qty},
                        success:function(data){
                            console.log(data);
                        }
                    });
                })
            })
        </script>
    </body>
</html>
