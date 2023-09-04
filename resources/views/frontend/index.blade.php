
<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth" dir="ltr">
    
<!-- Mirrored from shreethemes.in/dennis/layouts/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 05:50:05 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio-Hasibul Islam</title>
        <meta name="description" content="Responsive Tailwind CSS Template">
        <meta name="keywords" content="Onepage, creative, modern, Tailwind CSS, multipurpose, clean">
        <meta name="author" content="Shreethemes">
        <meta name="website" content="https://shreethemes.in/">
        <meta name="email" content="support@shreethemes.in">
        <meta name="version" content="1.0.0">
        <!-- favicon -->
        <link href="{{asset('frontend/images/favicon.ico')}}" rel="shortcut icon">

        <!-- Css -->
        <!-- Main Css -->
        <link href="{{asset('frontend/libs/tobii/css/tobii.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/libs/tiny-slider/tiny-slider.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/libs/%40iconscout/unicons/css/line.css')}}" type="text/css" rel="stylesheet">
        <link href="{{asset('frontend/libs/%40mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('frontend/css/tailwind.min.css')}}">

    </head>
    
    <body class="font-poppins text-base text-black dark:text-white dark:bg-slate-900">

        <!-- Loader Start -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="logo">
                    <img src="{{asset('frontend/images/logo-icon-6')}}4.png" class="d-block mx-auto animate-[spin_10s_linear_infinite]" alt="">
                </div>
                <div class="justify-content-center">
                    <div class="text-center">
                        <h4 class="mb-0 mt-2 text-lg font-semibold">Dennis</h4>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Loader End -->
        
        <!-- Navbar Start -->
        <nav class="navbar" id="navbar">
            <div class="container flex flex-wrap items-center justify-between">
               

                <div class="nav-icons flex items-center lg_992:order-2 ms-auto md:ms-8">
                    <!-- Navbar Button -->
                    <ul class="list-none menu-social mb-0">
                        <li class="inline">
                            <a href="#">
                                <span class="login-btn-primary"><span class="btn btn-icon btn-sm rounded-full bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 text-white"><i class="uil uil-dribbble align-middle"></i></span></span>
                                <span class="login-btn-light"><span class="btn btn-icon btn-sm rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i class="uil uil-dribbble align-middle"></i></span></span>
                            </a>
                            <a href="#">
                                <span class="login-btn-primary"><span class="btn btn-icon btn-sm rounded-full bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 text-white"><i class="uil uil-behance align-middle"></i></span></span>
                                <span class="login-btn-light"><span class="btn btn-icon btn-sm rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i class="uil uil-behance align-middle"></i></span></span>
                            </a>
                            <a href="#">
                                <span class="login-btn-primary"><span class="btn btn-icon btn-sm rounded-full bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 text-white"><i class="uil uil-instagram align-middle"></i></span></span>
                                <span class="login-btn-light"><span class="btn btn-icon btn-sm rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i class="uil uil-instagram align-middle"></i></span></span>
                            </a>
                        </li>
                    </ul>
                    <!-- Navbar Collapse Manu Button -->
                    <button data-collapse="menu-collapse" type="button" class="collapse-btn inline-flex items-center ms-2 text-dark dark:text-white lg_992:hidden" aria-controls="menu-collapse" aria-expanded="false">
                        <span class="sr-only">Navigation Menu</span>
                        <i class="mdi mdi-menu text-[24px]"></i>
                    </button>
                </div>

                <!-- Navbar Manu -->
                <div class="navigation lg_992:order-1 lg_992:flex hidden me-auto" id="menu-collapse">
                    <ul class="navbar-nav" id="navbar-navlist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#experience">Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#project">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Me</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
@include('frontend.banner')
@include('frontend.about')     
@include('frontend.service')
@include('frontend.work-experience')
@include('frontend.projects')
@include('frontend.clients')
@include('frontend.blogs')      
@include('frontend.contact-us')
        <!-- Footer Start -->
        <footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">
            <div class="py-[30px] px-0 border-t border-slate-800">
                <div class="container text-center">
                    <div class="grid lg:grid-cols-12 md:grid-cols-3 grid-cols-1 items-center">
                        <div class="lg:col-span-3 md:text-start text-center">
                            <a href="#" class="text-[22px] focus:outline-none">
                                <img src="{{asset('frontend/images/logo-light.')}}png" class="mx-auto md:me-auto md:ms-0" alt="">
                            </a>
                        </div>

                        <div class="lg:col-span-5 text-center mt-6 md:mt-0">
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Dennis. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                        </div>

                        <ul class="lg:col-span-4 list-none md:text-end text-center mt-6 md:mt-0">
                            <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-amber-500 dark:hover:border-amber-500 hover:bg-amber-500 dark:hover:bg-amber-500"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                            <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-amber-500 dark:hover:border-amber-500 hover:bg-amber-500 dark:hover:bg-amber-500"><i class="uil uil-behance" title="Behance"></i></a></li>
                            <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-amber-500 dark:hover:border-amber-500 hover:bg-amber-500 dark:hover:bg-amber-500"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>
                            <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-amber-500 dark:hover:border-amber-500 hover:bg-amber-500 dark:hover:bg-amber-500"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                            <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-amber-500 dark:hover:border-amber-500 hover:bg-amber-500 dark:hover:bg-amber-500"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                            <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-amber-500 dark:hover:border-amber-500 hover:bg-amber-500 dark:hover:bg-amber-500"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                            <li class="inline"><a href="mailto:support@shreethemes.in" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-amber-500 dark:hover:border-amber-500 hover:bg-amber-500 dark:hover:bg-amber-500"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                        </ul><!--end icon-->
                    </div><!--end grid-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 right-5 h-9 w-9 text-center bg-amber-500 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- Switcher -->
        <div class="fixed top-1/4 -right-1 z-3">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->

        <!-- LTR & RTL Mode Code -->
        <div class="fixed top-[40%] -right-3 z-50">
            <a href="#" id="switchRtl">
                <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-medium rtl:block ltr:hidden" >LTR</span>
                <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-medium ltr:block rtl:hidden">RTL</span>
            </a>
        </div>
        <!-- LTR & RTL Mode Code -->

        <!-- JAVASCRIPTS -->
        <script src="{{asset('frontend/libs/feather-icons/feather.min.js')}}"></script>
        <script src="{{asset('frontend/libs/gumshoejs/gumshoe.polyfills.min.js')}}"></script>
        <script src="{{asset('frontend/libs/tobii/js/tobii.min.js')}}"></script>
        <script src="{{asset('frontend/libs/tiny-slider/min/tiny-slider.js')}}"></script>
        <script src="{{asset('frontend/js/plugins.init.js')}}"></script>
        <script src="{{asset('frontend/js/app.js')}}"></script>
        <!-- JAVASCRIPTS -->
    </body>

<!-- Mirrored from shreethemes.in/dennis/layouts/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 05:50:18 GMT -->
</html>