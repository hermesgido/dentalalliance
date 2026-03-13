@include('partials.header')

<style>
    #vl-header-sticky {
        background: rgba(0, 0, 0, 0.64);
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
    .program-detail-hero {
        background-image: linear-gradient(180deg, rgba(6, 8, 14, 0.72), rgba(6, 8, 14, 0.54)),
            url('{{ asset('assets/photos/hero2.webp') }}');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .program-detail-shell {
        background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
    }
    .program-card-main,
    .program-card-side,
    .program-map-box,
    .program-placeholder-card {
        border: 1px solid #e7edf7;
        border-radius: 18px;
        background: #fff;
        box-shadow: 0 12px 30px rgba(15, 23, 42, 0.08);
    }
    .program-card-main {
        overflow: hidden;
    }
    .program-banner {
        width: 100%;
        height: 360px;
        object-fit: cover;
    }
    .program-main-content {
        padding: 30px 28px 26px;
    }
    .program-main-content h3 {
        margin-bottom: 16px;
        color: #1f2937;
        font-size: clamp(34px, 2.5vw, 46px);
        line-height: 1.14;
        font-weight: 700;
    }
    .program-meta {
        display: flex;
        align-items: center;
        gap: 12px;
        color: #475467;
        margin-bottom: 24px;
        font-size: 16px;
    }
    .program-meta img {
        width: 38px;
        height: 38px;
        object-fit: contain;
        flex-shrink: 0;
    }
    .program-divider {
        border-top: 1px solid #e7edf7;
        margin: 24px 0;
    }
    .program-main-content h4 {
        margin-bottom: 12px;
        color: #101828;
        font-size: clamp(30px, 2vw, 38px);
        line-height: 1.25;
        font-weight: 700;
    }
    .program-main-content h5 {
        margin-bottom: 8px;
        color: #101828;
        font-size: clamp(24px, 1.5vw, 30px);
        line-height: 1.3;
        font-weight: 700;
    }
    .program-main-content p,
    .program-main-content li {
        color: #344054;
        font-size: 16px;
        line-height: 1.52;
    }
    .program-main-content p {
        margin-bottom: 10px;
    }
    .program-main-content ol,
    .program-main-content ul {
        padding-left: 26px;
        margin-bottom: 18px;
    }
    .program-highlights-lead {
        list-style: disc;
        margin-bottom: 10px;
    }
    .program-highlights-list {
        list-style: decimal;
        padding-left: 30px;
        margin-bottom: 8px;
    }
    .program-highlights-list li {
        margin-bottom: 4px;
    }
    .program-highlights-list > li {
        list-style: decimal !important;
    }
    .program-highlights-list ul {
        list-style-type: disc !important;
        padding-left: 24px;
        margin-top: 6px;
        margin-bottom: 8px;
    }
    .program-highlights-list ul li {
        list-style: disc !important;
        display: list-item;
        margin-bottom: 2px;
    }
    .program-highlights-list > li > ol {
        list-style-type: decimal !important;
        padding-left: 24px;
        margin-top: 6px;
        margin-bottom: 8px;
    }
    .program-highlights-list > li > ol > li {
        list-style: decimal !important;
        display: list-item;
    }
    .program-highlights-list > li > ol > li > ul,
    .program-highlights-list > li > ul {
        list-style-type: disc !important;
    }
    .program-highlights-list > li > ol > li > ul > li,
    .program-highlights-list > li > ul > li {
        list-style: disc !important;
    }
    .program-highlights-note {
        margin-left: 18px;
    }
    .program-highlights-intro {
        margin-bottom: 14px;
    }
    .program-card-side {
        padding: 24px;
        position: sticky;
        top: 120px;
    }
    .program-date-chip {
        display: inline-flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: #f2f4f7;
        border-radius: 12px;
        min-width: 64px;
        min-height: 64px;
        margin-right: 14px;
        font-weight: 700;
        color: #101828;
    }
    .program-side-row {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-bottom: 18px;
    }
    .program-side-row h5 {
        margin-bottom: 6px;
        color: #101828;
    }
    .program-side-row p {
        margin: 0;
        color: #475467;
    }
    .program-side-btn {
        width: 100%;
        display: inline-flex;
        justify-content: center;
        border-radius: 999px;
        background: #c2a968;
        color: #fff;
        padding: 11px 16px;
        font-weight: 600;
        transition: all 0.25s ease;
    }
    .program-side-btn:hover {
        background: #fe4e00;
        color: #fff;
    }
    .program-map-box {
        margin-top: 24px;
        padding: 20px;
    }
    .program-video-box {
        margin-top: 24px;
        padding: 20px;
    }
    .program-video-box iframe {
        width: 100%;
        min-height: 360px;
        border: 0;
        border-radius: 12px;
    }
    .program-map-box img {
        width: 100%;
        border-radius: 12px;
        margin-bottom: 14px;
    }
    .program-map-box iframe {
        width: 100%;
        min-height: 320px;
        border: 0;
        border-radius: 12px;
        margin-bottom: 14px;
    }
    .program-placeholder-card {
        padding: 34px;
        text-align: center;
    }
    @media (max-width: 991px) {
        .program-banner {
            height: 260px;
        }
        .program-card-side {
            position: static;
            margin-top: 20px;
        }
        .program-main-content {
            padding: 24px 20px 20px;
        }
        .program-main-content h3 {
            font-size: 34px;
        }
        .program-main-content h4 {
            font-size: 30px;
        }
        .program-main-content h5 {
            font-size: 24px;
        }
    }
</style>

<div class="space8 d-lg-block d-none"></div>

<div class="inner-header-section-area program-detail-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="hero-header" style="color: #fff;">
                    <h1 class="text-anime-style-1" style="color: #fff;">{{ $programTitle }}</h1>
                    <div class="space24"></div>
                    <a href="{{ route('home') }}" class="bradecrumb" style="color: #fff;">Home <i class="fa-solid fa-angle-right"></i></a>
                    <a href="{{ route('programs.index') }}" class="bradecrumb" style="color: #fff;">Programs <i class="fa-solid fa-angle-right"></i></a>
                    <span class="bradecrumb" style="color: #fff;">{{ $programTitle }}</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="program-detail-shell sp2">
    <div class="container">
        @if ($programSlug === 'digital-dentistry-workflow')
            <div class="row">
                <div class="col-lg-8">
                    <div class="program-card-main">
                        <img src="{{ asset('assets/photos/top.webp') }}" alt="Digital Dentistry Workflow" class="program-banner">
                        <div class="program-main-content">
                            <h3>Fixed Prosthesis - Digital Workflow Office/Lab Integration</h3>
                            <p class="program-meta">
                                <img src="{{ asset('assets/img/logo/logo1.png') }}" alt="Dental Alliance logo">
                                <span>Hosted by <strong>Dental Alliance</strong></span>
                            </p>

                            <div class="program-divider"></div>

                            <h4>Details</h4>
                            <h5>Participation Fee</h5>
                            <p><strong>Early-Bird Fee (limited spots and deadline-whichever first):</strong> TZS 730,000</p>
                            <p>(Regular fee -TZS 850,000 applies after the early-bird deadline or limit reached)</p>
                            <p>Dental Alliance is a Tanzanian CPD provider. You will earn CE credits via this course.</p>
                            <p>Dental Therapists and assistants can attend the <strong>hands-on day</strong> for TZS 150,000.</p>

                            <h5>How to Secure Your Seat</h5>
                            <ol>
                                <li>To complete your payment use the Selcom Till/link below.</li>
                                <li>When done, send your payment confirmation via WhatsApp or email. Using Selcom we need the phone number associated with the payment for tracking purposes.</li>
                                <li>If you are in TZ and wish to pay with Credit card, you can come by our office in Masaki.</li>
                                <li>International attendees have a fee for the program of 300USD, and we will give them transfer instructions. Payments will have to be made in USD.</li>
                            </ol>
                            <p>You will receive an official DA4EA confirmation message once the payment is confirmed.</p>
                            {{-- <p><strong>Important:</strong><br>
                                RSVP inside Circle <strong>does not guarantee a seat</strong>.<br>
                                Your place is confirmed <strong>only after payment is received</strong>.</p>

                            <h5>Selcom Payment Link</h5>
                            <p><strong>Scan from within your mobile money app or use the Till number.</strong> Please send us a message to <strong>+255741778722</strong> or a DM on Circle, telling us what phone nbr you used for the payment.</p> --}}

                            <div class="program-divider"></div>

                            <h5>Program Highlights</h5>
                            <ul class="program-highlights-lead">
                                <li>3-day intensive clinical &amp; laboratory workflow training</li>
                                <li>Limited attendance to preserve hands-on quality</li>
                            </ul>
                            <ol class="program-highlights-list">
                                <li>Basic principle for optical impression</li>
                                <li>Super powers of Digital dentistry</li>
                                <li>Fixed prosthodontics &amp; partial dentures</li>
                                <li>Hands- on Training: Intra-oral scanning</li>
                                <li>Full denture clinical &amp; lab protocols</li>
                                <li>Implantology treatment plan: Anticipation is the key of success : surgical guides</li>
                                <li>Scan strategies on single &amp; multiple implant cases</li>
                                <li>The scanner dilemma: which one to choose, fundamental differences</li>
                                <li>Smile design</li>
                                <li>Ceramic veneers and bonding</li>
                                <li>Injected Composite veneers FIT- in-office technique</li>
                            </ol>
                            <p class="program-highlights-note">Please even though this is in French watch this link and see a beautiful easy to master injected technique that is going to be taught on Day 3.</p>
                        </div>
                    </div>

                    <div class="program-video-box program-map-box">
                        <h4>Program Video</h4>
                        <div class="space16"></div>
                        <iframe
                            src="https://www.youtube.com/embed/2i6qoLM4sTY"
                            title="Digital Dentistry Workflow Video"
                            loading="lazy"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>

                    <div class="program-map-box">
                        <h4>Location</h4>
                        <div class="space16"></div>
                        <iframe
                            src="https://maps.google.com/maps?cid=13076055871380919946&output=embed"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Golden Tulip Dar Es Salaam map"></iframe>
                        <h5>Golden Tulip Dar Es Salaam</h5>
                        <p>67VP+9M7, 254 Toure Dr, Dar es Salaam 6300, Tanzania</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="program-card-side">
                        <div class="program-side-row">
                            <span class="program-date-chip"><span style="font-size: 28px; line-height: 1;">24</span><span style="font-size: 12px;">APR</span></span>
                            <div>
                                <h5>From Friday, Apr 24</h5>
                                <p>08:30 AM EAT</p>
                                <div class="space8"></div>
                                <h5>To Sunday, Apr 26</h5>
                                <p>01:30 PM EAT</p>
                            </div>
                        </div>
                        <div class="program-divider"></div>
                        <div class="program-side-row">
                            <div>
                                <h5>Golden Tulip Dar Es Salaam</h5>
                                <p>67VP+9M7, 254 Toure Dr, Dar es Salaam 6300, Tanzania</p>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="program-side-btn">Register Interest</a>
                    </div>
                </div>
            </div>
        @elseif ($programSlug === 'dental-economics')
            <div class="row">
                <div class="col-lg-8">
                    <div class="program-card-main">
                        <img src="{{ asset('assets/photos/Copy of dollars.webp') }}" alt="Dental Economics" class="program-banner">
                        <div class="program-main-content">
                            <h3>DE Leadership Journey Module 1</h3>
                            <p class="program-meta">
                                <img src="{{ asset('assets/img/logo/logo1.png') }}" alt="Dental Alliance logo">
                                <span>Hosted by <strong>Dental Alliance</strong></span>
                            </p>

                            <div class="program-divider"></div>

                            <h4>Details</h4>
                            <p>This event is the first of a 4 Module leadership cycle.</p>

                            <h5>By the End of the Dental Economics 4-Module Cycle, Each Participant Will:</h5>
                            <ul class="program-highlights-lead">
                                <li><strong>Understand their true clinic financial structure</strong>, including fixed and variable costs, break-even point, and real profitability per procedure.</li>
                                <li><strong>Develop a structured and defensible price list</strong> based on actual costs, strategic positioning, and ethical margin planning rather than competitor copying.</li>
                                <li><strong>Implement a productivity framework</strong> with clear daily, monthly, and chair-based revenue targets.</li>
                                <li><strong>Design comprehensive, phased treatment plans</strong> that integrate diagnostics, sequencing, and long-term patient value.</li>
                                <li><strong>Confidently price complex treatment plans</strong> while protecting margins and maintaining ethical standards.</li>
                                <li><strong>Master treatment plan presentation skills</strong>, including objection handling and structured financial conversations.</li>
                                <li><strong>Identify financial leaks within their clinic systems</strong> and implement corrective strategies.</li>
                                <li><strong>Improve case acceptance rates</strong> through enhanced communication and value framing.</li>
                                <li><strong>Build a sustainable growth roadmap</strong> aligned with their personal and professional goals.</li>
                                <li><strong>Transition from reactive operator to strategic clinic leader</strong>, making data-driven decisions.</li>
                            </ul>

                            <h5>Participation Fee - Module 1</h5>
                            <p><strong>Early-Bird Fee (limited spots and deadline-whichever first):</strong> TZS 549,000</p>
                            <p>(Regular fee -TZS 589,000 applies after the early-bird deadline- April 5th or limit reached)</p>
                            <p>Dental Alliance is a Tanzanian CPD provider. You will earn CE credits via this course.</p>
                            <p>Signing up for the 4 module cycle is at <strong>2,000,000 TZS</strong> before March 30th or when limit is reached.</p>

                            <h5>How to Secure Your Seat</h5>
                            <ol>
                                <li>To complete your payment reach out to us via our w'app community.</li>
                                <li>We will soon post Selcom instructions</li>
                                <li>When done, send your payment confirmation via WhatsApp or email</li>
                                <li>You will receive an official DA4EA confirmation message</li>
                            </ol>

                            {{-- <p><strong>Important:</strong><br>
                                RSVP inside Circle <strong>does not guarantee a seat</strong>.<br>
                                Your place is confirmed <strong>only after payment is received</strong>.</p> --}}

                            <h5>Selcom Payment Link</h5>

                            <div class="program-divider"></div>

                            <h5>Program Highlights</h5>
                            <p class="program-highlights-intro">This is a 2-day intensive Dental Economics cycle where Day 2 is focused on treatment planning and case discussion, with limited attendance to preserve treatment plan quality.</p>
                            <ol class="program-highlights-list">
                                <li>Why most clinics underperform financially
                                    <ul>
                                        <li>Common pricing mistakes</li>
                                        <li>The myth of "cheap dentistry"</li>
                                        <li>Clinical excellence vs financial survival</li>
                                    </ul>
                                </li>
                                <li>Understanding Your True Costs
                                    <ol>
                                        <li>We calculate together:<br>Fixed vs variable costs
                                            <ul>
                                                <li>Monthly break-even point</li>
                                                <li>Cost per working day</li>
                                                <li>Cost per chair</li>
                                            </ul>
                                        </li>
                                        <li>Procedure Costing &amp; Margin Analysis
                                            <ul>
                                                <li>Lab markup strategy</li>
                                                <li>Implant case profitability</li>
                                                <li>Where you are losing money</li>
                                            </ul>
                                        </li>
                                    </ol>
                                </li>
                                <li>Building a Strategic Price List
                                    <ul>
                                        <li>Psychology of pricing</li>
                                        <li>Tiered pricing models</li>
                                        <li>Avoiding the "copy your competitor" trap</li>
                                        <li>Designing a structured fee schedule</li>
                                    </ul>
                                </li>
                                <li>Productivity &amp; Clinic Financial Structure
                                    <ul>
                                        <li>Revenue per chair target</li>
                                        <li>Daily production goals</li>
                                        <li>Scheduling for profitability</li>
                                        <li>Assistant utilization</li>
                                        <li>When to hire vs when not to hire</li>
                                    </ul>
                                </li>
                                <li>Treatment planning
                                    <ul>
                                        <li>Diagnostic Philosophy</li>
                                        <li>Comprehensive exam protocol</li>
                                        <li>Panoramic X-ray interpretation</li>
                                        <li>Risk assessment</li>
                                        <li>From emergency dentistry to comprehensive care</li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                    </div>

                    <div class="program-map-box">
                        <h4>Location</h4>
                        <div class="space16"></div>
                        <iframe
                            src="https://maps.google.com/maps?cid=10563082615584068316&output=embed"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Kwik Spaces map"></iframe>
                        <h5>Kwik Spaces</h5>
                        <p>1040 Haile Selassie Rd, Dar es Salaam 0255, Tanzania</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="program-card-side">
                        <div class="program-side-row">
                            <span class="program-date-chip"><span style="font-size: 28px; line-height: 1;">17</span><span style="font-size: 12px;">APR</span></span>
                            <div>
                                <h5>From Friday, Apr 17</h5>
                                <p>08:30 AM EAT</p>
                                <div class="space8"></div>
                                <h5>To Saturday, Apr 18</h5>
                                <p>04:00 PM EAT</p>
                            </div>
                        </div>
                        <div class="program-divider"></div>
                        <div class="program-side-row">
                            <div>
                                <h5>Kwik Spaces</h5>
                                <p>1040 Haile Selassie Rd, Dar es Salaam 0255, Tanzania</p>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="program-side-btn">Register Interest</a>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="program-placeholder-card">
                        <h3>Program Detail Page</h3>
                        <div class="space12"></div>
                        <p>This page is ready for detailed content for <strong>{{ $programTitle }}</strong>.</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

@include('partials.footer')
