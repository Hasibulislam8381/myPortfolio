<!-- ##### Footer Area Start ##### -->
<footer class="footer-area bg-img">

    <div class="footer-content-area">
        <div class="container">
            <div class="row ">
                <div class="col-6 col-lg-2 col-md-2 col-sm-6">
                    <div class="footer-copywrite-info">
                        <!-- Copywrite -->
                        <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                            <div class="footer_tag_headline">ABOUT US</div>

                            <div class="footer_tag">
                                <a href="#"> Background </a>
                            </div>
                            <div class="footer_tag">
                                <a href="#"> Mission & Vision </a>
                            </div>
                            <div class="footer_tag">
                                <a href="#"> Founder </a>
                            </div>
                            <div class="footer_tag">
                                <a href="#"> Board of Directors </a>
                            </div>
                            <div class="footer_tag">
                                <a href="#"> Core Value </a>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-6 col-lg-2 col-md-2 col-sm-6">
                    <div class="contact_info_area d-sm-flex justify-content-between">
                        <!-- Content Info -->
                        <div class="contact_info mt-x text-center fadeInUp" data-wow-delay="0.3s">
                            <div class="footer_tag_headline">FUNDS</div>
                            <div class="footer_tag">
                                <a href="#">
                                    Mutual Fund Management
                                </a>
                            </div>
                            <div class="footer_tag">
                                <a href="#">
                                    Institutional Portfolio Management
                                </a>
                            </div>
                            <div class="footer_tag">
                                <a href="#">
                                    Corporate Advisory
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-2 col-md-2 col-sm-6">
                    <!-- Content Info -->
                    <div class="contact_info_area d-sm-flex justify-content-between">
                        <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                            <div class="footer_tag_headline">FORMS & DOWNLOADS</div>
                            <div class="footer_tag">
                                <a href="#">
                                    Formation Document Forms
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-6 col-lg-2 col-md-2 col-sm-6">
                    <div class="contact_info_area d-sm-flex justify-content-between">
                        <!-- Content Info -->
                        <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                            <div class="footer_tag_headline">GALLERY</div>
                            <div class="footer_tag">
                                <a href="{{ route('photo_gallery') }}">Photo Gallery</a>
                            </div>
                            <div class="footer_tag">
                                <a href="{{ route('video_gallery') }}">Video Gallery</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2 col-md-2 col-sm-6">
                    <div class="contact_info_area d-sm-flex justify-content-between">
                        <!-- Content Info -->
                        <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                            <div class="footer_tag_headline">CAREER</div>
                            <div class="footer_tag">
                                <a href="">Employee At CAM</a>
                            </div>
                            <div class="footer_tag">
                                <a href="">Internship Opportunities</a>
                            </div>
                            <div class="footer_tag">
                                <a href="">Upload CV</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2 col-md-2 col-sm-6">
                    <div class="contact_info_area d-sm-flex justify-content-between">
                        
                        <!-- Content Info -->
                        <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                            <div class="footer_tag_headline">CONTACT WITH US</div>
                            <!-- Social Icon -->
                           
                            <div class="footer_tag">
                                <a href="mailto:{{ $generalInfo->email }}"><i class="fa-regular fa-envelope footer-icon"></i>
                                {{ $generalInfo->email }}
                                </a>
                            </div>
                            <div class="footer_tag">
                                <a href="tel:{{ $generalInfo->phone }}"><i class="fa-solid fa-phone-volume footer-icon"></i>
                                {{ $generalInfo->phone }}
                                </a>
                            </div>
                            <div class="footer_tag">
                                <a href=""><i class="fa-solid fa-location-pin footer-icon"></i>
                                {{ $generalInfo->address }}
                                </a>
                            </div>
                            <div style="padding-top: 5px;" class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                                
                                <a href="{{ $generalInfo->facebook }}" target="_blank"><img src="{{ asset('frontend/img/icons/facebook.png') }}"
                                        alt=""></a>
                                <a href="{{ $generalInfo->linkedin }}" target="_blank"><img src="{{ asset('frontend/img/icons/linkedin.png') }}"
                                        alt=""></a>
                                <a href="{{ $generalInfo->twitter }}" target="_blank"> <img src="{{ asset('frontend/img/icons/twitter.png') }}"
                                        alt=""></a>
                                <a href="{{ $generalInfo->youtube }}" target="_blank"><img src="{{ asset('frontend/img/icons/youtube.png') }}"
                                        alt=""></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="footer_hr">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="footer_tag_headline">PRIVACY POLICY</div>
                <div class="content">
                    At Capitec Asset Management we perceive the significance of securing your data. We respect your privacy and therefore, are stringent on ensuring that your privacy is not being penetrated.
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="copyright_text">
                        {{ $generalInfo->copyright_text }}
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>
<!-- ##### Footer Area End ##### -->
