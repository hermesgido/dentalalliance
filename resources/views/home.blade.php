@include('partials.header')

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
        .hero2-section-area .hero-cta-wrap {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }
        .hero2-section-area .hero-header h5 {
            color: #8f8a92 !important;
            letter-spacing: 0.08em;
        }
        .hero2-section-area .hero-header h1 {
            color: #f1ede4 !important;
        }
        .hero2-section-area .hero-header p {
            color: #b9b4bc !important;
            opacity: 1;
        }
        .hero2-section-area .hero-cta-primary .text {
            background: #c2ae77 !important;
            border: 1px solid #c2ae77 !important;
            color: #ffffff !important;
        }
        .hero2-section-area .hero-cta-primary .text i {
            color: #ffffff !important;
        }
        .hero2-section-area .hero-cta-primary .text::after {
            background: #fe4e00 !important;
        }
        .hero2-section-area .hero-cta-secondary {
            background: transparent !important;
        }
        .hero2-section-area .hero-cta-secondary .text {
            background: rgba(114, 110, 117, 0.14) !important;
            border: 1px solid #fe4e00 !important;
            color: #fe4e00 !important;
        }
        .hero2-section-area .hero-cta-secondary .text::after {
            background: #fe4e00 !important;
        }
        .hero2-section-area .hero-cta-secondary i {
            color: #fe4e00 !important;
        }
        .hero2-section-area .hero-cta-secondary:hover {
            background: transparent !important;
        }
        .hero2-section-area .hero-cta-secondary:hover .text {
            background: rgba(254, 78, 0, 0.2) !important;
            border-color: #fe4e00 !important;
            color: #ffffff !important;
        }
        .hero2-section-area .hero-cta-wrap .vl-btn2:hover .text {
            color: #ffffff !important;
            border-color: #fe4e00 !important;
        }
        .hero2-section-area .hero-cta-wrap .vl-btn2:hover .text i {
            color: #ffffff !important;
        }
        .hero2-section-area .hero-cta-secondary:hover i {
            color: #ffffff !important;
        }
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
        @media (min-width: 992px) {
            .hero2-section-area .hero-row-center {
                justify-content: center;
            }
            .hero2-section-area .hero-center-desktop {
                max-width: 860px;
                margin: 0 auto;
                text-align: center;
            }
            .hero2-section-area .hero-center-desktop p {
                max-width: 760px;
                margin-left: auto;
                margin-right: auto;
            }
            .hero2-section-area .hero-center-desktop .btn-area1 {
                display: flex;
                justify-content: center;
            }
            .hero2-section-area .hero-right-empty {
                display: none;
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
        <img src="{{ asset('assets/photos/header01.webp') }}" alt style="filter: brightness(0.9) saturate(0.85);">
    </div>
    <div class="mobile-edge-images">
        <div class="edge-panel left-panel">
            <img src="{{ asset('assets/photos/header01.webp') }}" alt>
        </div>
        <div class="edge-panel right-panel">
            <img src="{{ asset('assets/photos/header01.webp') }}" alt>
        </div>
    </div>
    <div class="mobile-side-overlay"></div>
    <div class="container" style="position: relative; z-index: 1; color: #fff;">
        <div class="row align-items-center hero-row-center">
            <div class="col-lg-8">
                <div class="hero-header hero-center-desktop" style="color: #fff;">
                    <h5 data-aos="fade-left" data-aos-duration="800">
                        {{-- <img
                            src="{{ asset('assets/img/icons/sub-logo1.svg') }}" alt>  --}}
                            Dental Leadership Platform for Africa.</h5>
                    <div class="space18"></div>
                    <h1 class="text-anime-style-1">Based in Tanzania. Built for Africa - Building Capacity</h1>
                    <div class="space20"></div>
                    <p data-aos="fade-left" data-aos-duration="1000">A leadership-driven platform advancing clinical excellence, structured education,
performance optimization, and humanitarian impact across Africa.</p>
                    <div class="space28"></div>
                    <div class="btn-area1 hero-cta-wrap">
                        <a href="{{ route('programs.index') }}" class="vl-btn2 hero-cta-primary"><span class="text">Explore
                                Programs <i class="fa-solid fa-arrow-right"></i></span></a>
                        <a href="{{ route('contact') }}" class="vl-btn2 hero-cta-secondary"><span class="text">Partner
                                With Us <i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-right-empty" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="hero2-images">
                    {{-- <img src="{{ asset('assets/img/elements/elements6.png') }}" alt class="elements6"> --}}
                    <div class="img1">
                                                {{-- <img src="{{ asset(path: 'assets/photos/top.webp') }}" alt> --}}

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
            <img src="assets/photos/people01.webp" alt="" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
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
                                                <img src="{{ asset(path: 'assets/photos/search01.webp') }}" alt>

                        {{-- <img src="{{ asset(path: 'assets/img/icons/check3.svg') }}" alt> --}}
                        {{-- <p>With 15+ years of experience
                            Medicines Shop community</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="img1 image-anime reveal">img1
                             <img src="{{ asset(path: 'assets/photos/img1.webp') }}" alt>
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

<!--===== WORKS AREA STARTS =======-->
<!-- <div class="work2-section-area sp2"
      style="background-image: url({{ asset('assets/img/all-images/bg/bg1.png') }}); background-position: center; background-repeat: no-repeat; background-size: cover;"> -->
{{-- <div class="work2-section-area sp2"
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
</div> --}}
<!--===== WORKS AREA ENDS =======-->

<!--===== PILLARS AREA STARTS =======-->
<div class="about2-section-area sp1" style="background: linear-gradient(180deg, #f7f6f3 0%, #ffffff 100%);">
    <style>
        .pillar-heading {
            font-size: clamp(34px, 5vw, 52px);
            line-height: 1.08;
            font-weight: 700;
            color: #101828;
        }
        .pillar-sub {
            font-size: clamp(18px, 2.1vw, 24px);
            font-weight: 600;
            color: #726e75;
            letter-spacing: 0.2px;
        }
        .pillar-card {
            background: #fff;
            border: 1px solid rgba(114, 110, 117, 0.24);
            border-radius: 20px;
            padding: 28px;
            min-height: 100%;
            box-shadow: 0 12px 30px rgba(15, 23, 42, 0.08);
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
        }
        .pillar-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 45px rgba(15, 23, 42, 0.14);
            border-color: #c2ae77;
        }
        .pillar-icon {
            width: 56px;
            height: 56px;
            border-radius: 14px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #fe4e00;
            color: #fff;
            font-size: 24px;
            margin-bottom: 18px;
        }
        .pillar-title {
            display: block;
            font-size: 28px;
            line-height: 1.2;
            font-weight: 700;
            color: #101828;
            margin-bottom: 14px;
        }
        .pillar-copy {
            margin: 0;
            font-size: clamp(17px, 1.9vw, 20px);
            line-height: 1.5;
            color: #344054;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="heading2 text-center space-margin60">
                    <h2 class="pillar-heading">What We Do </h2>
                    <div class="space16"></div>
                    <h4 class="pillar-sub">Education · Innovation · Sustainability</h4>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800">
                <div class="pillar-card">
                    <span class="pillar-icon"><i class="fa-solid fa-graduation-cap"></i></span>
                    <a href="" class="pillar-title">Advanced Dental Training</a>
                    <p class="pillar-copy">CPD-accredited programs in digital dentistry, implants, prosthetics, aesthetics and dental economics.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="950">
                <div class="pillar-card">
                    <span class="pillar-icon"><i class="fa-solid fa-people-arrows-left-right"></i></span>
                    <a href="" class="pillar-title">Industry &amp; Lab Integration</a>
                    <p class="pillar-copy">Connecting clinics, labs, suppliers, and manufacturers across Africa and globally.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1100">
                <div class="pillar-card">
                    <span class="pillar-icon"><i class="fa-solid fa-hand-holding-heart"></i></span>
                    <a href="" class="pillar-title">Social Enterprise Model</a>
                    <p class="pillar-copy">Profits from education directly sustain humanitarian dental care through OwosTanzania.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== PILLARS AREA ENDS =======-->

<!--===== DIGITAL IMPLANT SPOTLIGHT STARTS =======-->
<div class="about2-section-area sp1" style="background: linear-gradient(180deg, #ffffff 0%, #f7f6f3 100%);">
    <style>
        .implant-spotlight-shell {
            background: #0f172a;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 28px 60px rgba(15, 23, 42, 0.18);
        }
        .implant-spotlight-copy {
            padding: 56px 52px;
            color: #e2e8f0;
        }
        .implant-spotlight-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: #7dd3fc;
        }
        .implant-spotlight-eyebrow .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #fe4e00;
            box-shadow: 0 0 0 6px rgba(254, 78, 0, 0.14);
        }
        .implant-spotlight-title {
            margin: 18px 0 18px;
            font-size: clamp(28px, 3.8vw, 42px);
            line-height: 1.08;
            color: #f8fafc;
        }
        .implant-spotlight-copy p {
            margin: 0;
            font-size: 19px;
            line-height: 1.7;
            color: #cbd5e1;
        }
        .implant-spotlight-points {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px 20px;
            margin: 28px 0 34px;
            padding: 0;
            list-style: none;
        }
        .implant-spotlight-points li {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 17px;
            line-height: 1.5;
            color: #e2e8f0;
        }
        .implant-spotlight-points i {
            color: #fe4e00;
        }
        .implant-spotlight-cta {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }
        .implant-spotlight-cta .vl-btn2 .text {
            border-color: transparent;
        }
        .implant-spotlight-secondary .text {
            background: transparent !important;
            border: 1px solid rgba(255, 255, 255, 0.22) !important;
            color: #f8fafc !important;
        }
        .implant-spotlight-secondary .text::after {
            background: #fe4e00 !important;
        }
        .implant-spotlight-secondary i {
            color: #f8fafc !important;
        }
        .implant-spotlight-image-wrap {
            position: relative;
            height: 100%;
            min-height: 100%;
            background: radial-gradient(circle at top left, rgba(125, 211, 252, 0.18), transparent 34%), #020617;
        }
        .implant-spotlight-image-wrap::before {
            content: "";
            position: absolute;
            inset: 28px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 24px;
            pointer-events: none;
            z-index: 1;
        }
        .implant-spotlight-image-wrap img {
            width: 100%;
            height: 100%;
            min-height: 100%;
            object-fit: cover;
            display: block;
        }
        @media (max-width: 991px) {
            .implant-spotlight-copy {
                padding: 40px 28px;
            }
            .implant-spotlight-points {
                grid-template-columns: 1fr;
            }
            .implant-spotlight-image-wrap {
                min-height: 420px;
            }
            .implant-spotlight-image-wrap::before {
                inset: 18px;
            }
        }
    </style>
    <div class="container">
        <div class="implant-spotlight-shell">
            <div class="row g-0 align-items-stretch">
                <div class="col-lg-6">
                    <div class="implant-spotlight-copy">
                        <span class="implant-spotlight-eyebrow">
                            <span class="dot"></span>
                            Digital Implant Workflow
                        </span>
                        <h2 class="implant-spotlight-title">Technical competence and systems integration for modern implant workflows</h2>
                        <p>Now your implant and digital visuals live here.</p>
                        <ul class="implant-spotlight-points">
                            <li><i class="fa-solid fa-check"></i> Technical Competence</li>
                            <li><i class="fa-solid fa-check"></i> Clinical execution</li>
                            <li><i class="fa-solid fa-check"></i> Workflow mastery</li>
                            <li><i class="fa-solid fa-check"></i> Digital integration</li>
                            <li><i class="fa-solid fa-check"></i> Communication precision</li>
                            <li><i class="fa-solid fa-check"></i> Systems Integration</li>
                            <li><i class="fa-solid fa-check"></i> Treatment planning logic</li>
                            <li><i class="fa-solid fa-check"></i> Clinic workflow architecture</li>
                            <li><i class="fa-solid fa-check"></i> Interdisciplinary collaboration</li>
                            <li><i class="fa-solid fa-check"></i> Field deployment readiness</li>
                        </ul>
                        <div class="implant-spotlight-cta">
                            <a href="{{ route('programs.index') }}" class="vl-btn2">
                                <span class="text">Explore Programs <i class="fa-solid fa-arrow-right"></i></span>
                            </a>
                            <a href="{{ route('contact') }}" class="vl-btn2 implant-spotlight-secondary">
                                <span class="text">Discuss Partnership <i class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="implant-spotlight-image-wrap">
                        <img src="{{ asset('assets/photos/digimage.jpeg') }}" alt="Digital implant workflow visualization">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== DIGITAL IMPLANT SPOTLIGHT ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<div class="service-benefites-section-area sp2"
    style="background-image: linear-gradient(rgba(8, 14, 28, 0.82), rgba(8, 14, 28, 0.82)), url('{{ asset('assets/photos/header01.webp') }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <style>
        .who-serve-slider .owl-stage {
            display: flex;
            align-items: stretch;
        }
        .who-serve-item {
            min-height: 180px;
            padding: 10px 30px 10px 18px;
            border-right: 1px solid rgba(148, 163, 184, 0.35);
            transition: transform 0.25s ease;
        }
        .who-serve-item:hover {
            transform: translateY(-4px);
        }
        .who-serve-item .item-top {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
            color: #7dd3fc;
            font-size: 14px;
            letter-spacing: 0.4px;
            text-transform: uppercase;
            font-weight: 600;
        }
        .who-serve-item .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #38bdf8;
            box-shadow: 0 0 0 4px rgba(56, 189, 248, 0.2);
        }
        .who-serve-item .title {
            display: block;
            font-size: 34px;
            line-height: 1.3;
            font-weight: 700;
            color: #f8fafc;
            margin-bottom: 12px;
            text-decoration: none;
        }
        .who-serve-item p {
            margin: 0;
            font-size: 20px;
            line-height: 1.55;
            color: #cbd5e1;
        }
        .who-serve-slider .owl-nav button {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.45) !important;
            color: #fff !important;
            background: rgba(255, 255, 255, 0.08) !important;
        }
        .who-serve-slider .owl-nav button:hover {
            background: #fff !important;
            color: #0f172a !important;
        }
        .who-serve-slider .owl-nav .owl-prev,
        .who-serve-slider .owl-nav .owl-next {
            display: none !important;
        }
        @media (max-width: 767px) {
            .who-serve-item {
                min-height: 150px;
                padding: 6px 14px 6px 8px;
                border-right: none;
                text-align: center;
            }
            .who-serve-item .item-top {
                width: 100%;
                justify-content: center;
            }
            .who-serve-item .title {
                font-size: 27px;
            }
            .who-serve-item p {
                font-size: 17px;
            }
        }
    </style>
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
                    <h2 class="vl-section-title text-anime-style-3" style="color: #fff;">Who We Serve</h2>
                </div>
            </div>
        </div>

        <div class="case-slider-area owl-carousel who-serve-slider">
            <div class="who-serve-item">
                <span class="item-top"><span class="dot"></span>01</span>
                <a href="" class="title">Dentists &amp; Specialists</a>
                <p>Seeking advanced clinical training</p>
            </div>

            <div class="who-serve-item">
                <span class="item-top"><span class="dot"></span>02</span>
                <a href="" class="title">Dental Labs &amp; Industry Partners</a>
                <p>Expanding into East Africa</p>
            </div>

            <div class="who-serve-item">
                <span class="item-top"><span class="dot"></span>03</span>
                <a href="" class="title">Emerging Professionals</a>
                <p>Committed to excellence</p>
            </div>

            <div class="who-serve-item">
                <span class="item-top"><span class="dot"></span>04</span>
                <a href="" class="title">Organizations &amp; Sponsors</a>
                <p>Aligned with long-term impact</p>
            </div>
        </div>
    </div>
</div>
<!--===== SERVICE AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
{{-- <div class="service2-section-area sp2" id="programs"
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
                        
                            <img src="{{ asset(path: 'assets/photos/top.webp') }}" alt>

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
                            <img src="{{ asset(path: 'assets/photos/top2.webp') }}" alt>

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
                       <img src="{{ asset(path: 'assets/photos/people01.webp') }}" alt>
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
</div> --}}
<!--===== SERVICE AREA ENDS =======-->

<!--===== WORKS AREA STARTS =======-->
<div class="benefites-section-area sp1" id="partners">
    <style>
        #partners .partners-modern-shell {
            background: transparent;
            border: none;
            border-radius: 0;
            padding: 0;
            box-shadow: none;
        }
        #partners .partners-modern-row {
            align-items: center;
        }
        #partners .partners-single-image {
            position: relative;
            max-width: 560px;
            margin-left: auto;
        }
        #partners .partners-single-image::before {
            content: "";
            position: absolute;
            left: -28px;
            top: 50%;
            transform: translateY(-50%);
            width: 130px;
            height: 130px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(194, 169, 104, 0.3) 0%, rgba(194, 169, 104, 0) 72%);
            pointer-events: none;
        }
        #partners .partners-single-image .img1 {
            text-align: right;
        }
        #partners .partners-single-image .img1 img {
            width: 100%;
            max-width: 540px;
            height: 430px;
            aspect-ratio: 4 / 3;
            object-fit: cover;
            border-radius: 16px;
            border: 1px solid rgba(114, 110, 117, 0.55);
            box-shadow: 0 16px 35px rgba(15, 23, 42, 0.14);
        }
        @media (max-width: 991px) {
            #partners .partners-modern-shell {
                padding: 0;
            }
            #partners .partners-single-image {
                margin: 26px auto 0;
            }
            #partners .partners-single-image::before {
                display: none;
            }
            #partners .partners-single-image .img1 img {
                max-width: 100%;
                height: 320px;
                border-radius: 12px;
            }
        }
    </style>
    <div class="container">
        <div class="partners-modern-shell">
            <div class="row partners-modern-row">
                <div class="col-lg-6">
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
                <div class="col-lg-6">
                    <div class="benefites-images partners-single-image">
                        <div class="img1 image-anime reveal">
                                                <img src="{{ asset('assets/photos/team1001.webp') }}" alt>

                            {{-- <img src="{{ asset('assets/img/all-images/works/work-img5.png') }}" alt> --}}
                        </div>
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
                    <h4>Get More Info</h4>
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
                    <img src="{{ asset(path: 'assets/photos/Neurons1.webp') }}" alt style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
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
<div class="cta4-section-area"
    style="background-image: linear-gradient(135deg, rgba(254, 78, 0, 0.72), rgba(8, 14, 28, 0.68)), url('{{ asset('assets/photos/hero2.webp') }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">

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
                    {{-- <div class="bg1">
                        <img src="{{ asset('assets/img/all-images/bg/cta-bg1.png') }}" alt=""
                            class="cta-bg1">
                    </div>
                    <div class="img1">
                        <img src="{{ asset('assets/img/all-images/cta/cta-img4.png') }}" alt="">
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== CTA AREA ENDS =======-->

@include('partials.footer')
