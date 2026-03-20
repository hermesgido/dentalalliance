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
    .about-modern-section {
        background: linear-gradient(180deg, #f7f9fc 0%, #ffffff 100%);
    }
    .about-purpose-pill {
        display: inline-block;
        padding: 8px 14px;
        border-radius: 999px;
        background: #e7f0ff;
        color: #1c4ca1;
        font-weight: 600;
        font-size: 14px;
    }
    .about-modern-card {
        height: 100%;
        border: 1px solid #e9edf5;
        border-radius: 16px;
        padding: 28px;
        background: #fff;
        box-shadow: 0 10px 30px rgba(14, 30, 64, 0.06);
        transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
    }
    .about-modern-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 40px rgba(14, 30, 64, 0.12);
        border-color: #d6e4ff;
    }
    .about-modern-card h4 {
        margin-bottom: 14px;
    }
    .about-modern-list {
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .about-modern-list li {
        position: relative;
        padding-left: 30px;
        margin-bottom: 10px;
        color: #3a4355;
    }
    .about-modern-list li:last-child {
        margin-bottom: 0;
    }
    .about-modern-list li::before {
        content: "";
        position: absolute;
        left: 0;
        top: 8px;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: #1d4ed8;
        box-shadow: inset 0 0 0 4px #dbeafe;
    }
    .about-flow-wrap {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 18px;
    }
    .about-flow-step {
        position: relative;
        border-radius: 16px;
        padding: 24px;
        border: 1px solid #e9edf5;
        background: #fff;
        box-shadow: 0 10px 30px rgba(14, 30, 64, 0.06);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }
    .about-flow-step:hover {
        transform: translateY(-5px);
        box-shadow: 0 18px 40px rgba(14, 30, 64, 0.12);
    }
    .about-flow-step .step-number {
        display: inline-flex;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        color: #fff;
        background: #1d4ed8;
        margin-bottom: 12px;
    }
    .about-flow-step::after {
        content: "\f061";
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        position: absolute;
        right: -12px;
        top: 50%;
        transform: translateY(-50%);
        color: #94a3b8;
        font-size: 16px;
    }
    .about-flow-step:last-child::after {
        display: none;
    }
    @media (max-width: 991px) {
        .about-flow-wrap {
            grid-template-columns: 1fr;
        }
        .about-flow-step::after {
            display: none;
        }
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
                <span><a href="#"><i class="fa-solid fa-phone"></i> programs@da4ea.com</a></span>
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
    style="background-image: url({{ asset('assets/photos/header01.webp') }}); background-position: center; background-repeat: no-repeat; background-size: cover; position: relative; overflow: hidden;">
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

<div class="about-modern-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="heading4 text-center space-margin60">
                    <h2 class="vl-section-title text-anime-style-3">About DA4EA</h2>
                    <div class="space16"></div>
                    <span class="about-purpose-pill">Purpose: Legitimacy + vision + leadership clarity.</span>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-lg-6">
                <div class="about-modern-card" data-aos="fade-up" data-aos-duration="800">
                    <h4>Our Story</h4>
                    <ul class="about-modern-list">
                        <li>Why DA4EA was created</li>
                        <li>Relationship to OwosTanzania &amp; One World One Smile</li>
                        <li>From missions -&gt; systems -&gt; sustainability</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-modern-card" data-aos="fade-up" data-aos-duration="900">
                    <h4>Vision</h4>
                    <p>A future where East African dentistry:</p>
                    <ul class="about-modern-list">
                        <li>Is clinically excellent</li>
                        <li>Regionally connected</li>
                        <li>Financially self-sustaining</li>
                        <li>Globally respected</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-lg-6">
                <div class="about-modern-card" data-aos="fade-up" data-aos-duration="1000">
                    <h4>Mission</h4>
                    <p>To serve as a central platform for:</p>
                    <ul class="about-modern-list">
                        <li>Advanced dental education</li>
                        <li>Cross-border collaboration</li>
                        <li>Ethical market access</li>
                        <li>Sustainable humanitarian impact</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-modern-card" data-aos="fade-up" data-aos-duration="1100">
                    <h4>Our Model: Social Enterprise</h4>
                    <p>Clear visual explanation:</p>
                    <ul class="about-modern-list">
                        <li>Education &amp; consulting generate revenue</li>
                        <li>Revenue -&gt; reinvested into humanitarian programs</li>
                        <li>Not charity. Not extraction. Circular impact.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="heading2 text-center space-margin60">
                    <h2 class="text-anime-style-3">How The Model Works</h2>
                </div>
            </div>
        </div>

        <div class="about-flow-wrap">
            <div class="about-flow-step" data-aos="zoom-in-up" data-aos-duration="900">
                <span class="step-number">1</span>
                <h5>Education &amp; Consulting</h5>
                <p>Programs and advisory services generate sustainable revenue.</p>
            </div>
            <div class="about-flow-step" data-aos="zoom-in-up" data-aos-duration="1000">
                <span class="step-number">2</span>
                <h5>Revenue Reinvestment</h5>
                <p>Income is channeled back into high-impact oral-health initiatives.</p>
            </div>
            <div class="about-flow-step" data-aos="zoom-in-up" data-aos-duration="1100">
                <span class="step-number">3</span>
                <h5>Circular Impact</h5>
                <p>Not charity. Not extraction. A repeatable social-enterprise model.</p>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
