<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from monyara.netlify.app/index-demo-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 04:47:07 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title -->
    <title>Capitec</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/simple-lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/simple-lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/svvg-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/faq.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/styleim.css') }}">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsiveim.css') }}">
    
    <link rel="stylesheet" href="{{ asset('frontend/css/toastr.min.css') }}">

</head>

<body class="light-version">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="loader-load"></div>
        </div>
    </div>

    @include('layouts.frontend.header')

    @yield('content')

    @include('layouts.frontend.footer')

    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/canvasjs.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/fontawesome.js') }}"></script>

    <!-- Popper js -->
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/simple-lightbox.jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/simple-lightbox.legacy.min.js') }}"></script>
    <script src="{{ asset('frontend/js/simple-lightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/js/speedvault.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <!-- script js -->
    <script src="{{ asset('frontend/js/script.js') }}"></script>


    <script>
        $('.banner').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 1
                }
            }
        })
        $('.partner').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 2000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 6
                }
            }
        })
    </script>
    <script>
        var gallery = $('.gallery a').simpleLightbox({
            sourceAttr: 'href',

            nav: true,
            overlay: true,
            close: true,
            closeText: 'X',
            swipeClose: true,
            showCounter: true,
            fileExt: 'png|jpg|jpeg|gif',


        })
    </script>
    {{-- js for faq --}}
    <script>
        // Accordian
        var action = "click";
        var speed = "500";

        $(document).ready(function() {
            // Question handler
            $('li.q').on(action, function() {
                // Get next element
                $(this).next()
                    .slideToggle(speed)
                    // Select all other answers
                    .siblings('li.a')
                    .slideUp();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('a[href^="#"]').on('click', function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: $($.attr(this, 'href')).offset().top
                }, 1000);
            });
        });
    </script> {{-- script for search button --}}
    <script>
        // JavaScript to handle modal functionality
        document.addEventListener("DOMContentLoaded", function() {
            const searchIcon = document.querySelector(".search-nav");
            const modal = document.getElementById("searchModal");
            const closeBtn = document.querySelector(".close");

            // Show modal when search icon is clicked
            searchIcon.addEventListener("click", function() {
                modal.classList.add("show"); // Add "show" class to the modal
            });

            // Hide modal when close button is clicked
            closeBtn.addEventListener("click", function() {
                modal.classList.remove("show"); // Remove "show" class from the modal
            });

            // Hide modal when clicking outside the modal content
            window.addEventListener("click", function(event) {
                if (event.target === modal) {
                    modal.classList.remove("show"); // Remove "show" class from the modal
                }
            });
        });
    </script>
    {{-- script for search button --}}




    <script src="{{ asset('frontend/js/toastr.min.js') }}"></script>
{!! Toastr::message() !!}
</body>


<!-- Mirrored from monyara.netlify.app/index-demo-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 04:47:27 GMT -->

</html>
