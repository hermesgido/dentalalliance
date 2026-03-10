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
                    <h2 class="vl-section-title text-anime-style-3">About DA4EA</h2>
                    <p class="mt-3">Purpose: Legitimacy + vision + leadership clarity.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="benefites-box">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="benefites-widget-boxarea">
                                <div class="icons">
                                    <img src="{{ asset('assets/img/icons/hero-icon3.svg') }}" alt>
                                </div>
                                <div class="content-area">
                                    <a href="" class="title">Our Story</a>
                                    <div class="space16"></div>
                                    <ul>
                                        <li><img src="{{ asset('assets/img/icons/check2.svg') }}" alt>Why DA4EA was created</li>
                                        <li><img src="{{ asset('assets/img/icons/check2.svg') }}" alt>Relationship to OwosTanzania &amp; One World One Smile</li>
                                        <li><img src="{{ asset('assets/img/icons/check2.svg') }}" alt>From missions -&gt; systems -&gt; sustainability</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="benefites-widget-boxarea">
                                <div class="icons">
                                    <img src="{{ asset('assets/img/icons/hero-icon4.svg') }}" alt>
                                </div>
                                <div class="content-area">
                                    <a href="" class="title">Vision</a>
                                    <div class="space16"></div>
                                    <p>A future where East African dentistry:</p>
                                    <ul>
                                        <li><img src="{{ asset('assets/img/icons/check2.svg') }}" alt>Is clinically excellent</li>
                                        <li><img src="{{ asset('assets/img/icons/check2.svg') }}" alt>Regionally connected</li>
                                        <li><img src="{{ asset('assets/img/icons/check2.svg') }}" alt>Financially self-sustaining</li>
                                        <li><img src="{{ asset('assets/img/icons/check2.svg') }}" alt>Globally respected</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="benefites-widget-boxarea">
                                <div class="icons">
                                    <img src="{{ asset('assets/img/icons/hero-icon2.svg') }}" alt>
                                </div>
                                <div class="content-area">
                                    <a href="" class="title">Mission</a>
                                    <div class="space16"></div>
                                    <p>To serve as a central platform for:</p>
                                    <ul>
                                        <li><img src="{{ asset('assets/img/icons/check2.svg') }}" alt>Advanced dental education</li>
                                        <li><img src="{{ asset('assets/img/icons/check2.svg') }}" alt>Cross-border collaboration</li>
                                        <li><img src="{{ asset('assets/img/icons/check2.svg') }}" alt>Ethical market access</li>
                                        <li><img src="{{ asset('assets/img/icons/check2.svg') }}" alt>Sustainable humanitarian impact</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="benefites-widget-boxarea">
                                <div class="icons">
                                    <img src="{{ asset('assets/img/icons/hero-icon1.svg') }}" alt>
                                </div>
                                <div class="content-area">
                                    <a href="" class="title">Our Model: Social Enterprise</a>
                                    <div class="space16"></div>
                                    <ul>
                                        <li><img src="{{ asset('assets/img/icons/check2.svg') }}" alt>Education &amp; consulting generate revenue</li>
                                        <li><img src="{{ asset('assets/img/icons/check2.svg') }}" alt>Revenue -&gt; reinvested into humanitarian programs</li>
                                        <li><img src="{{ asset('assets/img/icons/check2.svg') }}" alt>Not charity. Not extraction. Circular impact.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="space60"></div>

        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="heading2 text-center space-margin60">
                    <div class="space20"></div>
                    <h2 class="text-anime-style-3">How The Model Works</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="work-single-boxarea">
                    <img src="{{ asset('assets/img/elements/elements4.png') }}" alt class="elements4">
                    <div class="img1">
                        <img src="{{ asset('assets/img/all-images/works/work-img1.png') }}" alt>
                    </div>
                    <div class="space32"></div>
                    <div class="textarea">
                        <span>1</span>
                        <div class="space18"></div>
                        <a href>Education &amp; Consulting</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="work-single-boxarea">
                    <img src="{{ asset('assets/img/elements/elements4.png') }}" alt class="elements4 d-lg-block d-none">
                    <div class="img1">
                        <img src="{{ asset('assets/img/all-images/works/work-img2.png') }}" alt>
                    </div>
                    <div class="space32"></div>
                    <div class="textarea">
                        <span>2</span>
                        <div class="space18"></div>
                        <a href>Revenue Reinvestment</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="work-single-boxarea">
                    <div class="img1">
                        <img src="{{ asset('assets/img/all-images/works/work-img3.png') }}" alt>
                    </div>
                    <div class="space32"></div>
                    <div class="textarea">
                        <span>3</span>
                        <div class="space18"></div>
                        <a href>Circular Impact</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@include('partials.footer')
