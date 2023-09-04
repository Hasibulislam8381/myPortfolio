 <!-- ##### Header Area Start ##### -->

 <div class="top-navbar">
    <div class="container">
        <div  class="row justify-content-center ">
            <div class="col-md-4">
                <ul class="text-left">
                    <li class="nav-item">
                        <a style="color: white" class="nav-link topbar_content nav-pad-align" href="tel:{{ $generalInfo->phone }}">
                            <i class="fa-solid fa-phone"></i>
                            {{ $generalInfo->phone }}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="">
                    <li class="nav-item">
                        <a style="color: white;margin-left: -235px;" class="nav-link topbar_content" href="mailto:{{ $generalInfo->email }}">
                            <i class="fa-solid fa-envelope"></i>
                            {{ $generalInfo->email }}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4" style="text-align: end">
                <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                    <a href="{{ $generalInfo->facebook }}" target="_blank"><img src="{{ asset('frontend/img/icons/facebook_top.png') }}"
                            alt=""></a>
                    <a href="{{ $generalInfo->linkedin }}" target="_blank"><img src="{{ asset('frontend/img/icons/linkedin_top.png') }}"
                            alt=""></a>
                    <a href="{{ $generalInfo->twitter }}" target="_blank"> <img src="{{ asset('frontend/img/icons/twitter_top.png') }}"
                            alt=""></a>
                    <a href="{{ $generalInfo->youtube }}" target="_blank"><img src="{{ asset('frontend/img/icons/youtube_top.png') }}"
                            alt=""></a>

                </div>
            </div>
        </div>
    </div>
</div>
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="banner">
  <div class="container">
      <!-- Brand -->
      <a class="navbar-brand" href="{{ route('index') }}"><span><img  src="{{ asset('frontend/img/logo/logo.png') }}" alt="logo"></span></a>

      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class='nav-link' href="{{ route('index') }}">Home</a>
            </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="{{ route('about_us') }}" data-toggle="dropdown">About Us</a>
                  <div class="dropdown-menu">
                      <a class='dropdown-item' href="{{ route('about_us') }}/#background">Background</a>
                      <a class='dropdown-item' href="{{ route('about_us') }}/#mission">Mission & Vision</a>
                      <a class='dropdown-item' href="{{ route('about_us') }}/#founder">Founder</a>
                      <a class='dropdown-item' href="{{ route('about_us') }}/#boardofDireector">Board of Members</a>
                      <a class='dropdown-item' href="{{ route('about_us') }}/#coreValue">Core Value</a>
                  </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Funds</a>
                <div class="dropdown-menu">
                    <a class='dropdown-item' href='index-demo-2.html'>Capitec Padma P.F Shariah Unit Fund</a>
                    <a class='dropdown-item' href='index-demo-3.html'>Capitec Popular Life Unit Fund</a>
                    <a class='dropdown-item' href='index-demo-4.html'>Capitec-IBBL Shariah Unit Fund</a>
                </div>
            </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Services</a>
                  <div class="dropdown-menu">
                      <a class='dropdown-item' href="{{ route('mutual_funds') }}">Mutual Funds</a>
                      <a class='dropdown-item' href='index-demo-3.html'>Portfolio Management</a>
                      <a class='dropdown-item' href='index-demo-4.html'>Corporate Advisory</a>
                  </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Research</a>
                  <div class="dropdown-menu">
                      <a class='dropdown-item' href="{{ route('research') }}/#macroEconomy">Macro Economy</a>
                      <a class='dropdown-item' href="{{ route('research') }}/#capitalMarket">Capital Market</a>
                      <a class='dropdown-item' href="{{ route('research') }}/#factSheet">Fact Sheet</a>
                      <a class='dropdown-item' href="{{ route('research') }}/#mutualFund">Mutual Funds</a>
                  </div>
              </li>
              
              <li class="nav-item">
                  <a class='nav-link' href='faq.html'>Nav</a>
              </li>
              <li class="nav-item">
                  <a class='nav-link' href="{{ route('all_blogs') }}">Blogs</a>
              </li>
              {{-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Blog</a>
                  <div class="dropdown-menu">
                      <a class='dropdown-item' href='index-blog.html'>Blog Posts</a>
                      <a class='dropdown-item' href='index-blog-with-sidebar.html'>Sidebar Blog </a>
                      <a class='dropdown-item' href='index-single-blog.html'>Blog Details</a>
                  </div> --}}
              </li>
              
              <li class="lh-55px"><a href="{{ route('register') }}" class="btn login-btn ml-50">SignUp</a></li>
              <li class="lh-55px"><a href="{{route('faq')}}" class="btn login-btn ml-2">FAQ</a></li>
              <li class="lh-55px"><a href="#" data-target="#searchModal" class="search-nav ml-2"><i class="fa-solid fa-magnifying-glass"></i></a></li>

              
          </ul>
      </div>
  </div>
</nav>
{{-- modal for search Icon  --}}
<div id="searchModal" class="modal">
    <div class="modal-content">
        <form action="" method="POST">
            @csrf
            <div class="modal_header">
                <span style="color: white;font-size:24px;font-family:Century Gothic;">Search</span>
                <span class="close"> &times;</span>
            </div>
            <input class="form-control" id="searchInput" name="product_name" type="text" placeholder="Search...">
            <ul id="searchResults"></ul>
        </form>
    </div>

</div>
<!-- ##### Header Area End ##### -->

