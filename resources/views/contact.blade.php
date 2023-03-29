<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Contact</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/tooplate-clean-work.css" rel="stylesheet">
<!--

Tooplate 2132 Clean Work

https://www.tooplate.com/view/2132-clean-work

Free Bootstrap 5 HTML Template

-->
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
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control form-control-sm" type="text" placeholder="masukkan alamat mu">
                      </form>
                    <p class="site-header-icon-wrap text-white d-flex mb-0 ms-auto">
                        <i class="site-header-icon bi-whatsapp me-2"></i>

                        <a href="tel: 0831-7649-7537" class="text-white">
                            0831-7649-7537
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="home">
                <img src="images/newlogo.png" class="logo img-fluid" alt="">

                <span class="ms-2">TOP FOOD</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <main>

        <section class="banner-section d-flex justify-content-center align-items-end">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-7 col-12">
                        <h1 class="text-white mb-lg-0">Contact</h1>
                    </div>

                    <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="home">Home</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </section>

        <section class="contact-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-12 me-auto mb-lg-0 mb-5">
                        <h2 class="my-3">Kami Senang Membantu Anda</h2>

                        <p>Makanan yang nikmat siap bergerak kerumah anda. Topfood adalah website pemesanan makanan yang mengedepankan kenyamanan user.</p>

                        <div class="contact-info bg-white shadow-lg">
                            <h3 class="mb-4">Contact Information</h3>

                            <h5 class="d-flex mt-3 mb-3">
                                <i class="bi-geo-alt-fill custom-icon me-3"></i>
                                Malang, Jawa Timur, Indonesia
                            </h5>

                            <h5 class="d-flex mb-3">
                                <i class="bi-telephone-fill custom-icon me-3"></i>

                                <a href="tel: 110-220-9800">
                                    0831-7649-7537
                                </a>
                            </h5>

                            <h5 class="d-flex">
                                <i class="bi-envelope-fill custom-icon me-3"></i>

                                <a href="mailto:info@company.com">
                                    TopFood@gmail.com
                                </a>
                            </h5>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        @if (session ('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                        @endif
                        <form action="{{route('contact.store')}}" method="POST" class="custom-form consulting-form bg-white shadow-lg mb-5 mb-lg-0" role="form">
                            @csrf
                            <div class="consulting-form-header d-flex align-items-center">
                                <h3 class="mb-4">Get a Free Quotation</h3>
                            </div>

                            <div class="consulting-form-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Input nama anda" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="yours@gmail.com" required>
                                    </div>
                                </div>

                                <select class="form-select form-control" name="service" id="service" aria-label="Default select example">
                                    <option selected>Service Type</option>
                                    <option value="1">Login</option>
                                    <option value="2">Pemesanan Makanan</option>
                                    <option value="2">Pencarian Makanan</option>
                                </select>

                                <textarea name="description" rows="3" class="form-control" id="description" placeholder="Comment (Optional)"></textarea>

                                <div class="col-lg-6 col-md-10 col-8 mx-auto">
                                    <button type="submit" class="form-control">Submit Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!--footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 d-flex align-items-center mb-4 pb-2">
                    <div>
                        <img src="image/newlogo.png " class="logo img-fluid" alt="">
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
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/init.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/animated-headline.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>Z

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/init.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/animated-headline.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>
