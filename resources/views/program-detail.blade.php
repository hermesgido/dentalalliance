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
        position: relative;
        background-image: url('{{ asset('assets/photos/header01.webp') }}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        overflow: hidden;
    }
    .program-detail-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(7, 6, 6, 0.55), rgba(4, 3, 3, 0.4));
        z-index: 0;
    }
    .program-detail-hero .container {
        position: relative;
        z-index: 1;
    }
    .program-detail-shell {
        background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
    }
    .program-card-main,
    .program-card-side,
    .program-map-box {
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
        line-height: 1.62;
    }
    .program-main-content p {
        margin-bottom: 10px;
    }
    .program-main-content ol,
    .program-main-content ul {
        padding-left: 26px;
        margin-bottom: 18px;
    }
    .program-rich-content > *:last-child {
        margin-bottom: 0;
    }
    .program-rich-content h2,
    .program-rich-content h3,
    .program-rich-content h4,
    .program-rich-content h5 {
        color: #101828;
        line-height: 1.22;
        font-weight: 700;
        margin-bottom: 14px;
    }
    .program-rich-content h2 {
        font-size: clamp(34px, 2.3vw, 42px);
    }
    .program-rich-content h3 {
        font-size: clamp(28px, 2vw, 34px);
    }
    .program-rich-content ul,
    .program-rich-content ol {
        margin: 0 0 18px;
        padding-left: 28px;
    }
    .program-rich-content ul {
        list-style: disc;
    }
    .program-rich-content ol {
        list-style: decimal;
    }
    .program-rich-content li {
        display: list-item;
        margin-bottom: 8px;
        color: #344054;
        font-size: 16px;
        line-height: 1.62;
    }
    .program-rich-video {
        margin: 20px 0;
        border-radius: 18px;
        overflow: hidden;
        background: #0f172a;
    }
    .program-rich-video iframe {
        width: 100%;
        aspect-ratio: 16 / 9;
        border: 0;
        display: block;
    }
    .program-rich-content img {
        width: 100%;
        height: auto;
        border-radius: 18px;
        margin: 18px 0;
    }
    .program-rich-content a {
        color: #0b5fff;
        text-decoration: underline;
    }
    .program-rich-content .program-rich-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin: 12px 10px 12px 0;
        padding: 13px 20px;
        border-radius: 999px;
        background: #c2a968;
        color: #fff;
        text-decoration: none;
        font-weight: 700;
    }
    .program-rich-content .program-rich-button:hover {
        background: #fe4e00;
        color: #fff;
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
    .program-map-box iframe {
        width: 100%;
        min-height: 320px;
        border: 0;
        border-radius: 12px;
        margin-bottom: 14px;
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
    }
</style>

<div class="space8 d-lg-block d-none"></div>

<div class="inner-header-section-area program-detail-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="hero-header" style="color: #fff;">
                    <h1 class="text-anime-style-1" style="color: #fff;">{{ $program->hero_title ?: $program->title }}</h1>
                    <div class="space24"></div>
                    <a href="{{ route('home') }}" class="bradecrumb" style="color: #fff;">Home <i class="fa-solid fa-angle-right"></i></a>
                    <a href="{{ route('programs.index') }}" class="bradecrumb" style="color: #fff;">Programs <i class="fa-solid fa-angle-right"></i></a>
                    <span class="bradecrumb" style="color: #fff;">{{ $program->title }}</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="program-detail-shell sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="program-card-main">
                    <img src="{{ asset($program->cover_image ?: 'assets/photos/header01.webp') }}" alt="{{ $program->title }}" class="program-banner">
                    <div class="program-main-content">
                        <h3>{{ $program->hero_title ?: $program->title }}</h3>
                        <p class="program-meta">
                            <img src="{{ asset('assets/img/logo/logo1.png') }}" alt="Dental Alliance logo">
                            <span>Hosted by <strong>Dental Alliance</strong></span>
                        </p>

                        <div class="program-divider"></div>
                        @if ($program->content_html)
                            <div class="program-rich-content">{!! $program->rendered_content_html !!}</div>
                        @else
                            <h4>Details</h4>
                            @if ($program->lead)
                                <p>{{ $program->lead }}</p>
                            @endif
                            @if ($program->intro)
                                <p>{{ $program->intro }}</p>
                            @elseif ($program->description)
                                <p>{{ $program->description }}</p>
                            @endif

                            @if (! empty($program->participation_items))
                                <h5>Participation</h5>
                                @foreach ($program->participation_items as $participationItem)
                                    <p>{{ $participationItem }}</p>
                                @endforeach
                            @endif

                            @if (! empty($program->registration_steps))
                                <h5>How to Secure Your Seat</h5>
                                <ol>
                                    @foreach ($program->registration_steps as $registrationStep)
                                        <li>{{ $registrationStep }}</li>
                                    @endforeach
                                </ol>
                            @endif

                            @if ($program->highlights_intro || ! empty($program->highlights_items))
                                <div class="program-divider"></div>
                                <h5>Program Highlights</h5>
                                @if ($program->highlights_intro)
                                    <p>{{ $program->highlights_intro }}</p>
                                @endif
                                @if (! empty($program->highlights_items))
                                    <ul>
                                        @foreach ($program->highlights_items as $highlight)
                                            <li>{{ $highlight }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            @endif
                        @endif
                    </div>
                </div>

                @if ($program->map_url)
                    <div class="program-map-box">
                        <h4>Location</h4>
                        <div class="space16"></div>
                        <iframe
                            src="{{ $program->map_url }}"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="{{ $program->location_name }} map"></iframe>
                        <h5>{{ $program->location_name }}</h5>
                        <p>{{ $program->location_address }}</p>
                    </div>
                @endif
            </div>

            <div class="col-lg-4">
                <div class="program-card-side">
                    @if ($program->start_at)
                        <div class="program-side-row">
                            <span class="program-date-chip">
                                <span style="font-size: 28px; line-height: 1;">{{ $program->start_at->format('d') }}</span>
                                <span style="font-size: 12px;">{{ strtoupper($program->start_at->format('M')) }}</span>
                            </span>
                            <div>
                                <h5>From {{ $program->start_at->format('l, M d') }}</h5>
                                <p>{{ $program->start_at->format('h:i A') }} EAT</p>
                                @if ($program->end_at)
                                    <div class="space8"></div>
                                    <h5>To {{ $program->end_at->format('l, M d') }}</h5>
                                    <p>{{ $program->end_at->format('h:i A') }} EAT</p>
                                @endif
                            </div>
                        </div>
                        <div class="program-divider"></div>
                    @endif

                    @if ($program->location_name || $program->location_address)
                        <div class="program-side-row">
                            <div>
                                <h5>{{ $program->location_name ?: 'Location' }}</h5>
                                <p>{{ $program->location_address }}</p>
                            </div>
                        </div>
                    @endif

                    <a href="{{ route('contact', ['source_page' => 'program-detail', 'source_section' => 'program-sidebar', 'source_button' => 'Register Interest', 'source_program_slug' => $program->slug, 'source_program_title' => $program->title, 'source_url' => request()->fullUrl()]).'#contact-form-section' }}" class="program-side-btn">Register Interest</a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
