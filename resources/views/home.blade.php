@include('partials.header')

<div class="space8 d-lg-block d-none"></div>
<!--=====HEADER END =======-->

<!--===== MOBILE HEADER STARTS =======-->
<div class="homepage2-body">
    <div class="vl-offcanvas">
        <div class="vl-offcanvas-wrapper">
            <div class="vl-offcanvas-header d-flex justify-content-between align-items-center mb-90">
                <div class="vl-offcanvas-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo/logo1.png') }}" alt></a>
                </div>
                <div class="vl-offcanvas-close">
                    <button class="vl-offcanvas-close-toggle"><i class="fa-solid fa-xmark"></i></button>
                </div>
            </div>

            <div class="vl-offcanvas-menu d-lg-none mb-40">
                <nav></nav>
            </div>

            <div class="space20"></div>
            <div class="vl-offcanvas-info">
                <h3 class="vl-offcanvas-sm-title">Contact Us</h3>
                <div class="space20"></div>
                <span><a href="#"> <i class="fa-regular fa-envelope"></i> +255 741 778 722</a></span>
                <span><a href="#"><i class="fa-solid fa-phone"></i>
                        cbenalal@da4ea.com</a></span>
                <span><a href="#"><i class="fa-solid fa-location-dot"></i>
                        1040 Haile Selassie. Dar Es Salaam</a></span>
            </div>
            <div class="space20"></div>
            <div class="vl-offcanvas-social">
                <h3 class="vl-offcanvas-sm-title">Follow Us</h3>
                <div class="space20"></div>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>

        </div>
    </div>
    <div class="vl-offcanvas-overlay"></div>
</div>
<!--===== MOBILE HEADER STARTS =======-->

<!--===== HERO AREA STARTS =======-->
<div class="hero2-section-area sp1" style="position: relative; overflow: hidden;">
    <style>
        .hero2-section-area .bg-img {
            position: absolute;
            inset: 0;
            overflow: hidden;
        }
        .hero2-section-area .mobile-edge-images,
        .hero2-section-area .mobile-side-overlay {
            display: none;
        }
        @media (min-width: 768px) {
            .hero2-section-area .bg-img {
                display: block !important;
            }
            .hero2-section-area .bg-img::after {
                background: linear-gradient(180deg, rgba(0, 0, 0, 0.72), rgba(0, 0, 0, 0.48)) !important;
                opacity: 1 !important;
            }
            .hero2-section-area .bg-img img {
                width: 100% !important;
                height: 100% !important;
                object-fit: cover !important;
                object-position: center center !important;
                transform: none !important;
            }
            .hero2-section-area .mobile-edge-images,
            .hero2-section-area .mobile-side-overlay {
                display: none !important;
            }
        }
        .hero2-section-area .bg-img::after {
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.44));
            opacity: 1;
        }
        @media (max-width: 767px) {
            .hero2-section-area .bg-img {
                display: none;
            }
            .hero2-section-area .mobile-edge-images {
                display: flex;
                position: absolute;
                inset: 0;
                z-index: 0;
                background: #0b0b0b;
                overflow: hidden;
            }
            .hero2-section-area .mobile-edge-images::before {
                content: "";
                position: absolute;
                top: 0;
                bottom: 0;
                left: 50%;
                width: 28%;
                transform: translateX(-50%);
                background: linear-gradient(90deg, rgba(11, 11, 11, 0), rgba(11, 11, 11, 0.55), rgba(11, 11, 11, 0));
                z-index: 2;
                pointer-events: none;
            }
            .hero2-section-area .mobile-edge-images .edge-panel {
                position: relative;
                width: 50%;
                height: 100%;
                overflow: hidden;
            }
            .hero2-section-area .mobile-edge-images img {
                position: absolute;
                top: 0;
                height: 100%;
                width: auto;
                max-width: none;
                filter: brightness(0.58);
            }
            .hero2-section-area .mobile-edge-images .left-panel img {
                left: 0;
                transform: translateX(-16%);
            }
            .hero2-section-area .mobile-edge-images .right-panel img {
                right: 0;
                transform: translateX(16%);
            }
            .hero2-section-area .mobile-side-overlay {
                display: block;
                position: absolute;
                inset: 0;
                background: linear-gradient(180deg, rgba(3, 3, 3, 0.997), rgba(0, 0, 0, 0.3));
                z-index: 0;
            }
        }
    </style>
    <div class="bg-img">
        <img src="{{ asset('assets/photos/header01.jpg') }}" alt style="filter: brightness(0.9) saturate(0.85);">
    </div>
    <div class="mobile-edge-images">
        <div class="edge-panel left-panel">
            <img src="{{ asset('assets/photos/header01.jpg') }}" alt>
        </div>
        <div class="edge-panel right-panel">
            <img src="{{ asset('assets/photos/header01.jpg') }}" alt>
        </div>
    </div>
    <div class="mobile-side-overlay"></div>
    <div class="container" style="position: relative; z-index: 1; color: #fff;">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-header" style="color: #fff;">
                    <h5 data-aos="fade-left" data-aos-duration="800">
                        {{-- <img
                            src="{{ asset('assets/img/icons/sub-logo1.svg') }}" alt>  --}}
                            Dental Leadership Platform for Africa.</h5>
                    <div class="space18"></div>
                    <h1 class="text-anime-style-1" style="color: #fff;">Based in Tanzania. Built for Africa - Building Capacity</h1>
                    <div class="space20"></div>
                    <p data-aos="fade-left" data-aos-duration="1000" style="color: #f1f1f1;">A leadership-driven platform advancing clinical excellence, structured education,
performance optimization, and humanitarian impact across Africa.</p>
                    <div class="space28"></div>
                    <div class="btn-area1">
                        <a href="{{ route('contact') }}" class="vl-btn2"><span class="text">Join
                                the Dental Alliance <i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="hero2-images">
                    {{-- <img src="{{ asset('assets/img/elements/elements6.png') }}" alt class="elements6"> --}}
                    <div class="img1">
                                                {{-- <img src="{{ asset(path: 'assets/photos/top.jpg') }}" alt> --}}

                        {{-- <img src="{{ asset('assets/img/all-images/hero/hero-img3.png') }}" alt> --}}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== ABOUT AREA STARTS =======-->
<div class="about2-section-area sp1">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
        <div class="about-images-area">
          <div class="img1 image-anime reveal" style="opacity: 1; visibility: inherit; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
            <img src="assets/photos/people01.jpg" alt="" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
          </div>
          {{-- <div class="img2">
            <img src="assets/img/elements/elements18.png" alt="" class="elements18 keyframe5">
          </div> --}}
        </div>
      </div>

            {{-- <div class="col-lg-6 d-none d-md-block">
                <div class="about2-images-area">
                    
                    <img src="{{ asset('assets/img/elements/elements7.png') }}" alt class="elements7 keyframe5">
                    <div class="check-text aniamtion-key-1">
                                                <img src="{{ asset(path: 'assets/photos/search01.jpg') }}" alt>

                        {{-- <img src="{{ asset(path: 'assets/img/icons/check3.svg') }}" alt> --}}
                        {{-- <p>With 15+ years of experience
                            Medicines Shop community</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="img1 image-anime reveal">img1
                             <img src="{{ asset(path: 'assets/photos/img1.png') }}" alt>
                                {{-- <img src="{{ asset(path: 'assets/img/all-images/about/about-img5.png') }}" alt> --}}
                            {{-- </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="space50 d-md-block d-none"></div>
                            <div class="space30 d-md-none d-block"></div>
                            <div class="img1 image-anime reveal">
                                <img src="{{ asset('assets/img/all-images/about/about-img6.png') }}" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="col-lg-6">
                <div class="about-heading heading2">
                    <!-- <h5 data-aos="fade-left" data-aos-duration="800"><img src="{{ asset('assets/img/icons/sub-logo1.svg') }}" alt=""> What Is Dental Alliance for East Africa?</h5> -->
                    <div class="space20"></div>
                    <h2 class="text-anime-style-3">What Is Dental Alliance for East
                        Africa?</h2>
                    <div class="space16"></div>
                    <p data-aos="fade-left" data-aos-duration="900">Dental Alliance for East Africa (DA4EA) is a social enterprise powered by OwosTanzania, and professional platform designed to:</p>
                    <div class="space8"></div>
                    <div class="row" data-aos="fade-left" data-aos-duration="1000">
                        <div class="col-lg-6">
                            <ul>
                                <li><img src="{{ asset('assets/img/icons/check2.svg') }}" alt>Elevate Clinical Standards</li>
                                <li><img src="{{ asset('assets/img/icons/check2.svg') }}" alt> Connect Regional &amp; Global Experts</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><img src="{{ asset('assets/img/icons/check2.svg') }}" alt> Mobilize Funding for Oral Health</li>
                            </ul>
                        </div>
                    </div>
                    <div class="space36"></div>
                    <div class="btn-area1" data-aos="fade-left" data-aos-duration="1200">
                        <a href="{{ route('contact') }}" class="vl-btn2"><span class="text">Schedule An
                                Appointment <i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== ABOUT AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<div class="service-benefites-section-area sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="heading4 text-center space-margin60">
                    <h5 class="vl-section-subtitle">DA4EA<span> | </span> WHO IS IT
                        FOR
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 8"
                            fill="none">
                            <path d="M0.667969 4.00033H11.049M8.00137 7.33366L11.3346 4.00033L8.0013 0.666992"
                                stroke="#02015A" stroke-width="1.5" />
                        </svg>
                    </h5>
                    <div class="space24"></div>
                    <h2 class="vl-section-title text-anime-style-3">Who We Serve</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="benefites-box">
                    <div class="star d-none d-md-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="keyframe5" width="75" height="80"
                            viewBox="0 0 75 80" fill="none">
                            <path
                                d="M74.0861 24.6187L68.8392 15.3742C68.5025 14.7708 68.0485 14.2406 67.5038 13.8147C66.9591 13.3888 66.3346 13.0757 65.6671 12.8939C64.9995 12.7121 64.3023 12.6651 63.6164 12.7559C62.9304 12.8466 62.2696 13.0731 61.6725 13.4222L48.0834 21.5111V5.33333C48.0957 3.9317 47.55 2.58254 46.5661 1.58243C45.5822 0.582328 44.2407 0.0131427 42.8366 0H31.9582C30.554 0.0131427 29.2125 0.582328 28.2286 1.58243C27.2448 2.58254 26.699 3.9317 26.7113 5.33333V21.5111L13.1116 13.4293C12.5145 13.0803 11.8536 12.8537 11.1677 12.763C10.4817 12.6723 9.78452 12.7192 9.11698 12.901C8.44944 13.0828 7.82499 13.3959 7.28027 13.8218C6.73555 14.2477 6.28152 14.7779 5.94482 15.3813L0.708663 24.6187C0.010396 25.8424 -0.17966 27.2905 0.179256 28.6524C0.538172 30.0143 1.41748 31.1817 2.62859 31.904L16.4136 40L2.62146 48.096C1.41156 48.8195 0.533753 49.9873 0.176194 51.3492C-0.181366 52.711 0.0097817 54.1585 0.708663 55.3813L5.95194 64.6258C6.28864 65.2292 6.74267 65.7594 7.28739 66.1853C7.83212 66.6112 8.45656 66.9243 9.1241 67.1061C9.79165 67.2879 10.4888 67.3348 11.1748 67.2441C11.8607 67.1534 12.5216 66.9268 13.1187 66.5778L26.7113 58.4889V74.6667C26.7207 76.0783 27.2866 77.4294 28.2866 78.4276C29.2866 79.4258 30.6402 79.9907 32.0544 80H42.7404C44.1546 79.9907 45.5082 79.4258 46.5082 78.4276C47.5081 77.4294 48.0741 76.0783 48.0834 74.6667V58.4889L61.6832 66.5849C62.2802 66.934 62.9411 67.1605 63.6271 67.2512C64.313 67.342 65.0102 67.295 65.6778 67.1132C66.3453 66.9314 66.9698 66.6184 67.5145 66.1924C68.0592 65.7665 68.5132 65.2363 68.8499 64.6329L74.0968 55.3884C74.795 54.1647 74.9851 52.7166 74.6262 51.3547C74.2673 49.9928 73.388 48.8254 72.1768 48.1031L58.3847 40L72.1768 31.904C73.3861 31.1799 74.2632 30.0118 74.6201 28.65C74.977 27.2882 74.7853 25.8411 74.0861 24.6187Z"
                                fill="#ECE8FF" />
                        </svg>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="900">
                            <div class="benefites-widget-boxarea">
                                <div class="icons">
                                    <img src="{{ asset('assets/img/icons/hero-icon3.svg') }}" alt>
                                </div>
                                <div class="content-area">
                                    <a href="" class="title">Dentists &
                                        Specialists </a>
                                    <div class="space16"></div>
                                    <p>Seeking advanced clinical training</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                            <div class="benefites-widget-boxarea">
                                <div class="icons">
                                    <img src="{{ asset('assets/img/icons/hero-icon4.svg') }}" alt>
                                </div>
                                <div class="content-area">
                                    <a href="" class="title">Dental Labs &
                                        Industry Partners</a>
                                    <div class="space16"></div>
                                    <p>Expanding into East Africa</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1100">
                            <div class="benefites-widget-boxarea">
                                <div class="icons">
                                    <img src="{{ asset('assets/img/icons/hero-icon2.svg') }}" alt>
                                </div>
                                <div class="content-area">
                                    <a href="" class="title">Emerging
                                        Professionals</a>
                                    <div class="space16"></div>
                                    <p>Committed to excellence</p>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                            <div class="benefites-widget-boxarea">
                                <div class="icons">
                                    <img src="{{ asset('assets/img/icons/hero-icon1.svg') }}" alt>
                                </div>
                                <div class="content-area">
                                    <a href="" class="title">Organizations
                                        & Sponsors</a>
                                    <div class="space16"></div>
                                    <p> Aligned with long-term impact</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== SERVICE AREA ENDS =======-->

<!--===== WORKS AREA STARTS =======-->
<!-- <div class="work2-section-area sp2"
      style="background-image: url({{ asset('assets/img/all-images/bg/bg1.png') }}); background-position: center; background-repeat: no-repeat; background-size: cover;"> -->
<div class="work2-section-area sp2"
    style="background-image: url({{ asset('assets/img/logo/image.png') }}); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="heading2 text-center space-margin60">
                    <!-- <h5><img src="{{ asset('assets/img/icons/sub-logo1.svg') }}" alt=""> What We Do</h5> -->
                    <div class="space20"></div>
                    <h2 class="text-anime-style-3">What We Do</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="900">
                <div class="work-single-boxarea">
                    <img src="{{ asset('assets/img/elements/elements4.png') }}" alt class="elements4">
                    <div class="img1">
                        <img src="{{ asset('assets/img/all-images/works/work-img1.png') }}" alt>
                    </div>
                    <div class="space32"></div>
                    <div class="textarea">
                        <span>1</span>
                        <div class="space18"></div>
                        <a href>Education</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="work-single-boxarea">
                    <img src="{{ asset('assets/img/elements/elements4.png') }}" alt
                        class="elements4 d-lg-block d-none">
                    <div class="img1">
                        <img src="{{ asset('assets/img/all-images/works/work-img2.png') }}" alt>
                    </div>
                    <div class="space32"></div>
                    <div class="textarea">
                        <span>2</span>
                        <div class="space18"></div>
                        <a href>Connection</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1100">
                <div class="work-single-boxarea">
                    <div class="img1">
                        <img src="{{ asset('assets/img/all-images/works/work-img3.png') }}" alt>
                    </div>
                    <div class="space32"></div>
                    <div class="textarea">
                        <span>3</span>
                        <div class="space18"></div>
                        <a href>Impact</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--===== WORKS AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<div class="service2-section-area sp2" id="programs"
    style="background-image: url({{ asset('assets/img/all-images/bg/bg2.png') }}); background-position: center; background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="heading2 text-center space-margin60">
                    <h5><img src="{{ asset('assets/img/icons/sub-logo1.svg') }}" alt>2026 Flagship
                        Programs</h5>
                    <div class="space20"></div>
                    <h2 class="text-anime-style-3">DA4EA will host a series of
                        high-level, in-person training programs across East Africa:</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-duration="800">
                <div class="service2-single-boxarea">
                    <div class="img1">
                        
                      {{-- <img src="{{ asset(path: 'assets/photos/people01.jpg') }}" alt> --}}
                            <img src="{{ asset(path: 'assets/photos/top.jpg') }}" alt>

                        {{-- <img src="{{ asset(path: 'assets/img/all-images/service/service-img6.png') }}" alt> --}}
                        <div class="arrow">
                            <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="content-area">
                        <div class="icons">
                            <span>
                                <img src="{{ asset('assets/img/icons/service5.svg') }}" alt></span>
                        </div>
                        <a href="">Digital Dentistry Workflow</a>
                        <div class="space10"></div>
                        <p>Dar es Salaam</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-duration="900">
                <div class="service2-single-boxarea">
                    <div class="img1">
                                              {{-- <img src="{{ asset(path: 'assets/photos/people2.jpg') }}" alt> --}}
                            <img src="{{ asset(path: 'assets/photos/top2.jpg') }}" alt>

                        {{-- <img src="{{ asset(path: 'assets/img/all-images/service/service-img7.png') }}" alt> --}}
                        <div class="arrow">
                            <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="content-area">
                        <div class="icons">
                            <span><img src="{{ asset('assets/img/icons/service6.svg') }}" alt></span>
                        </div>
                        <a href="">Implant-Based Master Program</a>
                        <div class="space10"></div>
                        <p>Arusha</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-duration="1000">
                <div class="service2-single-boxarea"> 
                    <div class="img1">
                       <img src="{{ asset(path: 'assets/photos/people01.jpg') }}" alt>
                        {{-- <img src="{{ asset('assets/img/all-images/service/service-img8.png') }}" alt> --}}
                        <div class="arrow">
                            <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="content-area">
                        <div class="icons">
                            <span><img src="{{ asset('assets/img/icons/service7.svg') }}" alt></span>
                        </div>
                        <a href="">Aesthetics & Smile Design</a>
                        <div class="space10"></div>
                        <p>Zanzibar</p>

                        <!-- <a href="" class="readmore" >
                Get Early Access
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <g clip-path="url(#clip0_5927_10805)">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99992 0.833008C4.04188 0.833008 0.833252 4.04163 0.833252 7.99967C0.833252 11.9577 4.04188 15.1663 7.99992 15.1663C11.958 15.1663 15.1666 11.9577 15.1666 7.99967C15.1666 4.04163 11.958 0.833008 7.99992 0.833008ZM7.33325 5.33301C7.06359 5.33301 6.82052 5.49543 6.71732 5.74455C6.61415 5.99367 6.67119 6.28042 6.86185 6.47108L7.72379 7.33301L5.52851 9.52827C5.26817 9.78861 5.26817 10.2107 5.52851 10.4711C5.78887 10.7314 6.21097 10.7314 6.47133 10.4711L8.66659 8.27581L9.52852 9.13774C9.71919 9.32841 10.0059 9.38547 10.2551 9.28227C10.5042 9.17907 10.6666 8.93601 10.6666 8.66634V5.99967C10.6666 5.63149 10.3681 5.33301 9.99992 5.33301H7.33325Z" fill="#4416FF"/>
                </g>
                <defs>
                  <clipPath id="clip0_5927_108051">
                    <rect width="16" height="16" fill="white"/>
                  </clipPath>
                </defs>
              </svg>
            </a> -->

                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="btn-area1" data-aos="fade-left" data-aos-duration="1200">
                    <a href="{{ route('contact') }}" class="vl-btn2"><span class="text">Get
                            Early Access <i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== SERVICE AREA ENDS =======-->

<!--===== WORKS AREA STARTS =======-->
<div class="benefites-section-area sp1" id="partners">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="heading2">
                    <!-- <h5 data-aos="fade-left" data-aos-duration="800"><img
                  src="{{ asset('assets/img/icons/sub-logo1.svg') }}" alt>PARTNERS & COLLABORATORS</h5> -->
                    <div class="space20"></div>
                    <h2 class="text-anime-style-3 "> Partners & Collabotators</h2>
                    <div class="space18"></div>
                    <p data-aos="fade-left" data-aos-duration="1000">DA4EA collaborates with leading:</p>
                    <div class="space28"></div>
                    <div class="bg-progress" data-aos="fade-left" data-aos-duration="900">
                        <div class="progress-bar">
                            <label>Dental laboratories</label>
                            <div class="progress">
                                <div class="progress-inner" style="width:100%;"></div>
                            </div>
                        </div>

                        <div class="progress-bar" style="margin: 0;">
                            <label>Education institutes </label>
                            <div class="progress">
                                <div class="progress-inner" style="width: 100%;"></div>
                            </div>
                        </div>
                        <div class="progress-bar" style="margin: 0;">
                            <label>Industry innovators</label>
                            <div class="progress">
                                <div class="progress-inner" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="space32"></div>
                    <div class="btn-area1" data-aos="fade-left" data-aos-duration="1200">
                        <a href="{{ route('contact') }}" class="vl-btn2"><span class="text">Partner With Us <i
                                    class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <div class="benefites-images">
                    <div class="img1 image-anime reveal">
                        <img src="{{ asset('assets/img/all-images/works/work-img5.png') }}" alt>
                    </div>
                    <div class="img2 image-anime reveal">
                        <img src="{{ asset('assets/img/all-images/works/work-img6.png') }}" alt>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== WORKS AREA ENDS =======-->

<!--===== CONTACT AREA STARTS =======-->
<div class="contact2-section-area sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="heading2 text-center space-margin60">
                    <!-- <h5><img src="{{ asset('assets/img/icons/sub-logo1.svg') }}" alt> JOIN THE ALLIANCE</h5> -->
                    <div class="space20"></div>
                    <h2>JOIN THE ALLIANCE</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-6" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="contact-boxarea">
                    <h4>book An Appointment</h4>
                    <div class="space20"></div>
                    <p>Join a growing network shaping the future of dentistry in East Africa.
                        <br class="d-lg-block d-none">in East Africa.
                    </p>
                    <div class="space6"></div>
                    <form id="allianceForm">
                        <div id="formMessage" class="mb-3" style="display:none;"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-area">
                                    <input name="full_name" type="text" placeholder="Full Name*">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-area">
                                    <input name="phone" type="number" placeholder="Phone Number*">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-area">
                                    <input name="email" type="email" placeholder="Email Address*">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="input-area">
                                    <input name="country" type="text" placeholder="Country*">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="input-area">
                                    <select name="role" id="role" required>
                                        <option value="">Select Role*</option>
                                        <option value="Dentist">Dentist</option>
                                        <option value="Lab">Lab</option>
                                        <option value="Industry">Industry</option>
                                        <option value="Other">Other</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-area">
                                    <textarea name="message" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="space10"></div>
                                <div class="input-area">
                                    <button type="submit" class="vl-btn2"><span class="text">Join DA4EA <i
                                                class="fa-solid fa-arrow-right"></i></span></button>
                                </div>
                            </div>
                            <p class="text-muted mt-3 col-lg-7 mx-auto">
                                Purpose-driven communication only.
                            </p>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 d-flex">
                <div class="images image-anime reveal w-100 h-100">
                    {{-- <img src="{{ asset(path: 'assets/img/all-images/contact/contact-img2.png') }}" alt> --}}
                    <img src="{{ asset(path: 'assets/photos/Neurons1.jpg') }}" alt style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                </div>
            </div>
            <div class="space60"></div>
            <div class="col-lg-12">
                <div class="contact-single-boxarea2">
                    <div class="row">

                        <!-- <div class="col-lg-4 col-md-6" data-aos="zoom-in-up"
                  data-aos-duration="800">
                  <div class="single-box">
                    <div class="icons">
                      <svg xmlns="http://www.w3.org/2000/svg" width="33"
                        height="32" viewBox="0 0 33 32" fill="none">
                        <path
                          d="M16.305 29.3327C23.6688 29.3327 29.6383 23.3631 29.6383 15.9993C29.6383 8.63555 23.6688 2.66602 16.305 2.66602C8.94122 2.66602 2.97168 8.63555 2.97168 15.9993C2.97168 23.3631 8.94122 29.3327 16.305 29.3327Z"
                          stroke="#1C293F" stroke-width="2.5" />
                        <path
                          d="M16.9351 9.15785C16.9351 8.51839 16.4167 8 15.7772 8C15.1378 8 14.6194 8.51839 14.6194 9.15785H16.9351ZM18.9116 18.3738C18.4594 17.9217 17.7264 17.9217 17.2743 18.3738C16.8221 18.826 16.8221 19.559 17.2743 20.0112L18.9116 18.3738ZM19.59 22.3269C20.0421 22.7791 20.7751 22.7791 21.2273 22.3269C21.6795 21.8747 21.6795 21.1417 21.2273 20.6895L19.59 22.3269ZM14.6194 9.15785V14.5611H16.9351V9.15785H14.6194ZM17.2743 20.0112L19.59 22.3269L21.2273 20.6895L18.9116 18.3738L17.2743 20.0112ZM16.9351 16.8768C16.9351 17.5163 16.4167 18.0347 15.7772 18.0347V20.3504C17.6956 20.3504 19.2508 18.7951 19.2508 16.8768H16.9351ZM15.7772 18.0347C15.1378 18.0347 14.6194 17.5163 14.6194 16.8768H12.3037C12.3037 18.7951 13.8589 20.3504 15.7772 20.3504V18.0347ZM14.6194 16.8768C14.6194 16.2374 15.1378 15.719 15.7772 15.719V13.4033C13.8589 13.4033 12.3037 14.9585 12.3037 16.8768H14.6194ZM15.7772 15.719C16.4167 15.719 16.9351 16.2374 16.9351 16.8768H19.2508C19.2508 14.9585 17.6956 13.4033 15.7772 13.4033V15.719Z"
                          fill="#1C293F" />
                      </svg>
                    </div>
                    <div class="text">
                      <h4>Schedule</h4>
                      <div class="space14"></div>
                      <a href="#">Sun-Fri: 9 AM - 6 PM</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up"
                  data-aos-duration="900">
                  <div class="single-box">
                    <div class="icons">
                      <svg xmlns="http://www.w3.org/2000/svg" width="33"
                        height="32" viewBox="0 0 33 32" fill="none">
                        <path
                          d="M16.3031 28C20.9697 23.2 25.6364 18.9019 25.6364 13.6C25.6364 8.29807 21.4577 4 16.3031 4C11.1484 4 6.96973 8.29807 6.96973 13.6C6.96973 18.9019 11.6364 23.2 16.3031 28Z"
                          stroke="#1C293F" stroke-width="2.2"
                          stroke-linecap="round" stroke-linejoin="round" />
                        <path
                          d="M16.3037 17.332C18.5129 17.332 20.3037 15.5412 20.3037 13.332C20.3037 11.1229 18.5129 9.33203 16.3037 9.33203C14.0945 9.33203 12.3037 11.1229 12.3037 13.332C12.3037 15.5412 14.0945 17.332 16.3037 17.332Z"
                          stroke="#1C293F" stroke-width="2.2"
                          stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                    <div class="text">
                      <h4>locations</h4>
                      <div class="space14"></div>
                      <a href="#">1040 Haile Selassie. Dar Es Salaam</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up"
                  data-aos-duration="1000">
                  <div class="single-box">
                    <div class="icons">
                      <svg xmlns="http://www.w3.org/2000/svg" width="33"
                        height="32" viewBox="0 0 33 32" fill="none">
                        <path
                          d="M6.13704 24.0013L12.8037 16.0013M27.4704 24.0013L20.8037 16.0013M4.80371 10.668L14.437 17.0901C15.2924 17.6604 15.72 17.9456 16.1822 18.0562C16.5908 18.1542 17.0166 18.1542 17.4252 18.0562C17.8874 17.9456 18.315 17.6604 19.1704 17.0901L28.8037 10.668M9.07038 25.3346H24.537C26.0305 25.3346 26.7773 25.3346 27.3477 25.044C27.8494 24.7884 28.2574 24.3804 28.513 23.8786C28.8037 23.3082 28.8037 22.5614 28.8037 21.068V10.9346C28.8037 9.44117 28.8037 8.69442 28.513 8.124C28.2574 7.62222 27.8494 7.21428 27.3477 6.95862C26.7773 6.66797 26.0305 6.66797 24.537 6.66797H9.07038C7.57691 6.66797 6.83016 6.66797 6.25974 6.95862C5.75796 7.21428 5.35002 7.62222 5.09436 8.124C4.80371 8.69442 4.80371 9.44116 4.80371 10.9346V21.068C4.80371 22.5614 4.80371 23.3082 5.09436 23.8786C5.35002 24.3804 5.75796 24.7884 6.25974 25.044C6.83016 25.3346 7.5769 25.3346 9.07038 25.3346Z"
                          stroke="#1C293F" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                    <div class="text">
                      <h4>Our Email</h4>
                      <div class="space14"></div>
                      <a href="mailto:Medicax@gmail.com">cbenalal@da4ea.com></a>
                    </div>
                  </div>
                </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== CONTACT AREA ENDS =======-->

<!--===== CTA AREA STARTS =======-->
<div class="cta4-section-area" style="background-color: #FE4E00">

    <!-- <div class="cta4-section-area" style="background-image: url({{ asset('assets/img/all-images/bg/bg5.png') }}); background-position: center; background-size: cover; background-repeat: no-repeat;">
     -->

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="cta-content-area heading1">
                    <h2 class="text-anime-style-3">Join the Dental Alliance</h2>
                    <div class="space16"></div>
                    <p data-aos="fade-left" data-aos-duration="900">If you care about quality dentistry and long-term
                        impact — you belong here</p>
                    <div class="space24"></div>
                    <div class="btn-area1">
                        <a href="{{ route('contact') }}" class="vl-btn4">👉 I'm Interested <span><svg
                                    xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 22 22" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11 0.25C5.06294 0.25 0.25 5.06294 0.25 11C0.25 16.9371 5.06294 21.75 11 21.75C16.9371 21.75 21.75 16.9371 21.75 11C21.75 5.06294 16.9371 0.25 11 0.25ZM10 7C9.5955 7 9.2309 7.24364 9.0761 7.61732C8.92134 7.99099 9.0069 8.42111 9.2929 8.70711L10.5858 10L7.29289 13.2929C6.90237 13.6834 6.90237 14.3166 7.29289 14.7071C7.68342 15.0976 8.31658 15.0976 8.70711 14.7071L12 11.4142L13.2929 12.7071C13.5789 12.9931 14.009 13.0787 14.3827 12.9239C14.7564 12.7691 15 12.4045 15 12V8C15 7.44772 14.5523 7 14 7H10Z"
                                        fill="white" />
                                </svg></span></a>

                    </div>
                </div>
            </div>

            <div class="col-lg-3"></div>
            <div class="col-lg-4">
                <div class="cta-circle-area">
                    <div class="bg1">
                        <img src="{{ asset('assets/img/all-images/bg/cta-bg1.png') }}" alt=""
                            class="cta-bg1">
                    </div>
                    <div class="img1">
                        <img src="{{ asset('assets/img/all-images/cta/cta-img4.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== CTA AREA ENDS =======-->

@include('partials.footer')
