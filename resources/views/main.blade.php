<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bakoel Ide | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets2/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/templatemo-edu-meeting.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/lightbox.css') }}">
    <link rel="icon" href="./img/bkl2.webp" type="image/x-icon" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Paytone One' rel='stylesheet'>
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{asset('lib/animate/animate.min.css')}}" />
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cobbler:wght@600&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Host Grotesk' rel='stylesheet'>
    <link href="https://db.onlinewebfonts.com/c/d37f8830937af43036562817215a117b?family=Plovdiv+Display"
        rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        body,
        #bkl,
        #bkl2,
        #bkl3,
        #bkl4,
        #bkl5,
        #bkl6 {
            font-family: 'Host Grotesk' !important;
        }

        @font-face {
            font-family: 'Garet';
            src: url('assets2/fonts/Garet-Font/Garet Regular.ttf') format('truetype');
        }

        @font-face {
            font-family: 'Clear-Sans';
            src: url('assets2/fonts/ClearSans-Medium.ttf') format('truetype');
        }

        @font-face {
            font-family: 'Garet-Bold';
            src: url('assets2/fonts/Garet-Font/Garet Bold.ttf') format('truetype');
        }

        #lg,
        #lg2 {
            font-family: "Plovdiv Display";
            font-weight: 900;
            text-transform: lowercase;
            font-size: 45px;
        }

        #lg3,
        #lg4 {
            font-family: "Plovdiv Display";
            font-weight: 900;
            text-transform: lowercase;

        }

        #bg-video {
            min-width: 100%;
            min-height: 100vh;
            max-width: 100%;
            max-height: 100vh;
            object-fit: cover;
            z-index: -1;
        }

        #bg-video::-webkit-media-controls {
            display: none !important;
        }

        #bg-video2 {
            min-width: 100%;
            min-height: 100vh;
            max-width: 100%;
            max-height: 100vh;
            object-fit: cover;
            z-index: -1;
        }

        #bg-video2::-webkit-media-controls {
            display: none !important;
        }

        .avatar {
            width: 50vw;
            height: auto;
            max-width: 150px;
            max-height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>

</head>

<body style="background-color:#DDD8D3;">

    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">


    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        @include('navbar.navbar')

        <!-- Carousel Start -->
        @yield('carousel')
        <!-- Carousel End -->
    </div>
    <!-- Navbar & Hero End -->

    @yield('content')


    <!-- <div class="header-carousel owl-carousel">
            <div class="header-carousel-item2">
                <img src="./img/07.jpg" id="bg-video" width="640" height="360">
            </img >
                <div class="carousel-caption">
                    <div class="container ">
                        <div class="row gy-0 gx-5">
                            <div class="col-lg-0 col-xl-5"></div>
                            <div class="col-xl-12 animated fadeInLeft">
                                <div class="text-sm-end text-md-start">
                                    <div>
                                        <h1 class="display-3 display-sm-3 display-md-2 text-light">
                                            Crafted by budget,
                                            <span class="d-inline d-md-block">customized your needs.</span>
                                        </h1>
                                    </div>
                                    <h4 style="font-family: 'Garet-Bold';" class="display-6 text-white mb-4" id="bkl">
                                        This highlights our ability to deliver tailored solutions that match
                                        <span class="d-inline d-md-block text-light">your goals and budget, without compromising quality.</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         -->




    <!-- Offer Start -->

    <!-- Offer End -->

    <!-- Blog Start -->
    <!-- <div class="container-fluid blog pb-5" style="margin-top: 100px !important">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">

                    <h1 class="display-8 mb-2 mt-5">Our Partners</h1>

                </div>
                <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class=" p-4">
                        <div class=" mb-4">
                            <img src="https://kamelecom.fr/wp-content/uploads/2023/03/lesaffre_vignette1.jpeg" class="img-fluid w-100 rounded" alt="">

                        </div>

                    </div>



                    <div class=" p-4">
                        <div class=" mb-4">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnqdlT2E8ZtdUSKaZz40jYkRGSOh7hehR0KQ&s" class="img-fluid w-100 rounded" alt="">
                        </div>
                    </div>

                    <div class="mt-5 p-4">
                        <div class="mt-5 mb-4">
                            <img src="img/procare.jpg" class="mt-5" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div> -->
    <!-- Blog End -->

    @include('footer.footer')

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('assets2/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets2/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets2/js/lightbox.js') }}"></script>
    <script src="{{ asset('assets2/js/tabs.js') }}"></script>
    <script src="{{ asset('assets2/js/isotope.js') }}"></script>
    <script src="{{ asset('assets2/js/video.js') }}"></script>
    <script src="{{ asset('assets2/js/slick-slider.js') }}"></script>
    <script src="{{ asset('assets2/js/custom.js') }}"></script>


    <script>
        import SimpleParallax from "simple-parallax-js/vanilla";

        var image = document.getElementsByClassName('tz');
        new simpleParallax(image);
    </script>
    @stack('script')
</body>

</html>
