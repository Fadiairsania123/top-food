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

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet">

    <link href="{{ asset('') }}css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('') }}css/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('') }}css/magnific-popup.css" rel="stylesheet">

    <link href="{{ asset('') }}css/tooplate-clean-work.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel='stylesheet' href='https://static.fontawesome.com/css/fontawesome-app.css'>
    <style>
        .container-wrapper {
            background-color: #EDF0F9;
        }



        .rating-wrapper {
            align-self: center;
            box-shadow: 7px 7px 25px rgba(198, 206, 237, 0.7), -7px -7px 35px rgba(255, 255, 255, 0.7), inset 0px 0px 4px rgba(255, 255, 255, 0.9), inset 7px 7px 15px rgba(198, 206, 237, 0.8);
            border-radius: 5rem;
            display: inline-flex;
            direction: rtl !important;
            padding: 0.1rem 0.5rem;
            margin-left: auto;
        }

        .rating-wrapper label {
            color: #E1E6F6;
            cursor: pointer;
            display: inline-flex;
            font-size: 3rem;
            padding: 1rem 0.6rem;
            transition: color 0.5s;
        }

        .rating-wrapper svg {
            -webkit-text-fill-color: transparent;
            -webkit-filter: drop-shadow 4px 1px 6px #c6ceed;
            filter: drop-shadow(5px 1px 3px #c6ceed);
        }

        .rating-wrapper input {
            height: 100%;
            width: 100%;
        }

        .rating-wrapper input {
            display: none;
        }

        .rating-wrapper label:hover,
        .rating-wrapper label:hover~label,
        .rating-wrapper input:checked~label {
            color: #e6e200;
        }

        .rating-wrapper label:hover,
        .rating-wrapper label:hover~label,
        .rating-wrapper input:checked~label {
            color: #e6e200;
        }
    </style>
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

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a
                                class="nav-link dropdown-toggle custom-btn custom-border-btn custom-btn-bg-white btn">{{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('transaction') }}">Pesanan</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                            <a class="nav-link custom-btn custom-border-btn custom-btn-bg-white btn"
                                href="{{ route('cart') }}"><i class="bi bi-bag-check iconBeli"></i> Cart</a>
                        @else
                            <a class="nav-link custom-btn custom-border-btn custom-btn-bg-white btn"
                                href="{{ route('login') }}">Login</a>
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
                        <h1 class="text-white mb-lg-0">Rating</h1>
                    </div>


                </div>
            </div>
        </section>


        <section class="services-detail-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col consulting-form shadow-lg">
                    <a href="{{ route('transaction') }}" class="btn btn-success button">Back</a>
                        <table class="table">
                            @foreach ($data as $key => $item)
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;">{{ $key + 1 }}</td>
                                    <td style="text-align: center; vertical-align: middle;">{{ $item->menu->makanan }}</td>
                                    <td>
                                        <div class="rating-wrapper">

                                            <!-- star 5 -->
                                            <input type="radio" class="rating" data-id="{{ $item->menu->id }}" id="5-star-rating-{{ $item->menu->id }}" name="star-rating-{{ $item->menu->id }}" value="5">
                                            <label for="5-star-rating-{{ $item->menu->id }}" class="star-rating">
                                                <i class="fas fa-star fa-xs"></i>
                                            </label>
                
                                            <!-- star 4 -->
                                            <input type="radio" class="rating" data-id="{{ $item->menu->id }}" id="4-star-rating-{{ $item->menu->id }}" name="star-rating-{{ $item->menu->id }}" value="4">
                                            <label for="4-star-rating-{{ $item->menu->id }}" class="star-rating star">
                                                <i class="fas fa-star fa-xs"></i>
                                            </label>
                
                                            <!-- star 3 -->
                                            <input type="radio" class="rating" data-id="{{ $item->menu->id }}" id="3-star-rating-{{ $item->menu->id }}" name="star-rating-{{ $item->menu->id }}" value="3">
                                            <label for="3-star-rating-{{ $item->menu->id }}" class="star-rating star">
                                                <i class="fas fa-star fa-xs"></i>
                                            </label>
                
                                            <!-- star 2 -->
                                            <input type="radio" class="rating" data-id="{{ $item->menu->id }}" id="2-star-rating-{{ $item->menu->id }}" name="star-rating-{{ $item->menu->id }}" value="2">
                                            <label for="2-star-rating-{{ $item->menu->id }}" class="star-rating star">
                                                <i class="fas fa-star fa-xs"></i>
                                            </label>
                
                                            <!-- star 1 -->
                                            <input type="radio" class="rating" data-id="{{ $item->menu->id }}" id="1-star-rating-{{ $item->menu->id }}" name="star-rating-{{ $item->menu->id }}" value="1">
                                            <label for="1-star-rating-{{ $item->menu->id }}" class="star-rating star">
                                                <i class="fas fa-star fa-xs"></i>
                                            </label>
                
                                        </div>
                                    </td>
                                    <div style="width: inherit;height: 200px;display: grid; place-content: center">
                                        <h4 style="text-align: center">Beri Penilaian Produk</h4>
                                        <textarea id="ulasan" name="ulasan" placeholder="Penilaian Produk" style="width: 500px; height: 100px"></textarea>
                                    </div>

                                </tr>
                            @endforeach
                        </table>
                        
                          
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
                        <img src="{{ asset('') }}images/partners/rolf-leasing.svg"
                            class="partners-image img-fluid">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="{{ asset('') }}images/partners/woocommerce.svg"
                            class="partners-image img-fluid">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="{{ asset('') }}images/partners/toprak-leasing.svg"
                            class="partners-image img-fluid">
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
                        <img src="{{ asset('') }}images/newlogo.png" class="logo img-fluid" alt="">
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
    <script src='https://use.fontawesome.com/releases/v5.0.2/js/all.js'></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            $('.qty_edit').change(function() {
                var id = $(this).data('id');
                var qty = this.value;

                $.ajax({
                    type: 'POST',
                    url: "{{ route('cart.update') }}",
                    data: {
                        id: id,
                        qty: qty
                    },
                    success: function(data) {
                        console.log(data);
                    }
                });
            })

            $('.rating').on('click', function(e) {
                var val = $(this).val();
                var id = $(this).data('id');
                // var ulasan = $('#ulasan').val();
                var formData = $('#ulasan').val();
                console.log(formData)
                $.ajax({
                    type:'POST',
                    url:"{{ route('rating.update') }}",
                    data:{id:id,val:val, ulasan:formData},
                    success:function(data){
                        console.log(data);
                    }
                });
            });
            
        })
    </script>
    <script>
    //     $(function() {
    //     $('#ulasan-form').submit(function(e) {
    //         e.preventDefault();

    //         var formData = $(this).serialize();
    //         var val = $('.rating').val();
    //             var id = $(this).data('id');
    //         console.log(id);
    //         $.ajax({
    //             url: "{{ route('ulasan.store') }}",
    //             type: "POST",
    //             data: {formData, val:val, id:id},
    //             success: function(response) {
    //                 console.log(response);
    //                 // alert(response.message);
    //             },
    //             error: function(xhr) {
    //                 console.log(xhr.responseText);
    //                 alert("Terjadi kesalahan saat menyimpan ulasan.");
    //             }
    //         });
    //     });
    // });
    </script>
    
</body>

</html>
