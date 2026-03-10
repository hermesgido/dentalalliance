@include('partials.header')

<style>
    /* About page: keep header readable over hero */
    #vl-header-sticky {
        background: rgba(0, 0, 0, 0.65);
    }
    #vl-header-sticky .vl-main-menu a,
    #vl-header-sticky .vl-hero-btn .vl-btn2 .text,
    #vl-header-sticky .vl-hero-btn .vl-btn2 i,
    #vl-header-sticky .vl-header-action-item button,
    #vl-header-sticky .vl-header-action-item i {
        color: #fff;
    }
    #vl-header-sticky .vl-logo img {
        filter: brightness(0) invert(1);
    }
</style>

<div class="space8 d-lg-block d-none"></div>

<div class="homepage4-body">
    <div class="vl-offcanvas">
        <div class="vl-offcanvas-wrapper">
            <div class="vl-offcanvas-header d-flex justify-content-between align-items-center mb-90">
                <div class="vl-offcanvas-logo">
                    <a href="{{ route('home') }}"><img src="assets/img/logo/logo1.png" alt></a>
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
                <h3 class="vl-offcanvas-sm-title">About DA4EA</h3>
                <div class="space20"></div>
                <span><a href="#"><i class="fa-regular fa-envelope"></i> +255 741 778 722</a></span>
                <span><a href="#"><i class="fa-solid fa-phone"></i> cbenalal@da4ea.com</a></span>
                <span><a href="#"><i class="fa-solid fa-location-dot"></i> 1040 Haile Selassie. Dar Es Salaam</a></span>
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

<div class="inner-header-section-area"
    style="background-image: url({{ asset('assets/photos/header01.jpg') }}); background-position: center; background-repeat: no-repeat; background-size: cover; position: relative; overflow: hidden;">
    <div style="position: absolute; inset: 0; background: linear-gradient(180deg, rgba(7, 6, 6, 0.55), rgba(4, 3, 3, 0.4)); z-index: 0;"></div>
    <div class="container" style="position: relative; z-index: 1;">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="hero-header" style="color: #fff;">
                    <h1 class="text-anime-style-1" style="color: #fff;">About Us</h1>
                    <div class="space28"></div>
                    <a href="{{ route('home') }}" class="bradecrumb" style="color: #fff;">Home <i class="fa-solid fa-angle-right"></i>
                        About</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-inner-section-area sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="heading4 text-center space-margin60">
                    <h5 class="vl-section-subtitle">DA4EA<span> | </span> Advancing Dentistry in East Africa <svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 8" fill="none">
                            <path d="M0.667969 4.00033H11.049M8.00137 7.33366L11.3346 4.00033L8.0013 0.666992" stroke="#02015A" stroke-width="1.5" />
                        </svg>
                    </h5>
                    <h2 class="vl-section-title text-anime-style-3">Who We Are</h2>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="contact-boxarea">
                    <h4>Our Mission</h4>
                    <div class="space12"></div>
                    <p>We elevate oral-health standards in East Africa by connecting education, innovation, and humanitarian impact—partnering with clinicians, labs, and industry to build lasting capacity.</p>
                    <div class="space24"></div>
                    <h4>Our Approach</h4>
                    <div class="space12"></div>
                    <ul class="list-unstyled">
                        <li><i class="fa-solid fa-circle-check"></i> Advanced clinical and leadership programs</li>
                        <li><i class="fa-solid fa-circle-check"></i> Regional and global expert network</li>
                        <li><i class="fa-solid fa-circle-check"></i> Reinvestment into humanitarian oral-health projects</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="images image-anime reveal">
                    <img src="{{ asset('assets/photos/contact.jpg') }}" alt style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                </div>
            </div>
        </div>

        <div class="space60"></div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-box">
                    <div class="icons">
                        <img src="{{ asset('assets/img/icons/hero-icon3.svg') }}" alt>
                    </div>
                    <div class="text">
                        <h4>Education</h4>
                        <div class="space14"></div>
                        <p>Structured programs combining clinical mastery with leadership and practice growth.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-box">
                    <div class="icons">
                        <img src="{{ asset('assets/img/icons/hero-icon4.svg') }}" alt>
                    </div>
                    <div class="text">
                        <h4>Innovation</h4>
                        <div class="space14"></div>
                        <p>Digital workflows, implantology, and aesthetics adapted for East Africa.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-box">
                    <div class="icons">
                        <img src="{{ asset('assets/img/icons/hero-icon1.svg') }}" alt>
                    </div>
                    <div class="text">
                        <h4>Impact</h4>
                        <div class="space14"></div>
                        <p>Profits are reinvested into humanitarian oral-health initiatives across the region.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
