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
    .program-modules-hero {
        position: relative;
        background-image: url('{{ asset('assets/photos/header01.webp') }}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        overflow: hidden;
    }
    .program-modules-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(7, 6, 6, 0.55), rgba(4, 3, 3, 0.4));
        z-index: 0;
    }
    .program-modules-hero .container {
        position: relative;
        z-index: 1;
    }
    .program-modules-shell {
        background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
    }
    .featured-modules-block {
        margin-bottom: 44px;
    }
    .featured-modules-title {
        font-size: clamp(28px, 3vw, 36px);
        color: #1f2937;
        margin-bottom: 18px;
    }
    .featured-module-card {
        display: block;
        border: 1px solid #d8e1f0;
        border-radius: 22px;
        padding: 18px;
        background: #fff;
        box-shadow: 0 12px 28px rgba(15, 23, 42, 0.08);
        text-decoration: none;
        transition: transform 0.22s ease, box-shadow 0.22s ease, border-color 0.22s ease;
        max-width: 720px;
        margin: 0 auto;
    }
    .featured-module-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 24px 48px rgba(15, 23, 42, 0.14);
        border-color: #c2a968;
    }
    .featured-module-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 14px;
        margin-bottom: 18px;
    }
    .featured-module-head {
        display: flex;
        gap: 14px;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 10px;
    }
    .featured-module-head h3 {
        margin: 0;
        color: #101828;
        font-size: clamp(22px, 2.2vw, 30px);
        line-height: 1.24;
    }
    .featured-module-meta {
        color: #475467;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 10px;
    }
    .featured-module-summary {
        color: #344054;
        font-size: 15px;
        line-height: 1.65;
        margin-bottom: 16px;
    }
    .featured-module-place {
        display: grid;
        grid-template-columns: 150px minmax(0, 1fr);
        gap: 12px;
        align-items: start;
        margin-bottom: 18px;
    }
    .featured-module-place img,
    .featured-module-place iframe {
        width: 100%;
        height: 92px;
        object-fit: cover;
        border-radius: 12px;
        border: 1px solid #e7edf7;
    }
    .featured-module-place strong {
        display: block;
        color: #101828;
        margin-bottom: 6px;
    }
    .featured-module-place p {
        margin: 0 0 6px;
        color: #475467;
    }
    .module-month-block + .module-month-block {
        margin-top: 38px;
    }
    .module-month-title {
        font-size: clamp(28px, 3vw, 36px);
        color: #1f2937;
        margin-bottom: 18px;
    }
    .module-card {
        display: block;
        border: 1px solid #e7edf7;
        border-radius: 22px;
        padding: 26px;
        background: #fff;
        box-shadow: 0 14px 34px rgba(15, 23, 42, 0.08);
        text-decoration: none;
        transition: transform 0.22s ease, box-shadow 0.22s ease, border-color 0.22s ease;
    }
    .module-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 22px 42px rgba(15, 23, 42, 0.14);
        border-color: #c2a968;
    }
    .module-card-grid {
        display: grid;
        grid-template-columns: 230px minmax(0, 1fr);
        gap: 24px;
        align-items: start;
    }
    .module-card-image {
        width: 100%;
        height: 170px;
        object-fit: cover;
        border-radius: 16px;
    }
    .module-card-head {
        display: flex;
        gap: 18px;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 12px;
    }
    .module-card-head h3 {
        margin: 0;
        color: #101828;
        font-size: clamp(28px, 3vw, 38px);
        line-height: 1.2;
    }
    .module-status-chip {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 104px;
        padding: 10px 16px;
        border-radius: 999px;
        font-weight: 700;
        font-size: 15px;
        flex-shrink: 0;
    }
    .module-status-chip.rsvp {
        background: #c2a968;
        color: #fff;
    }
    .module-status-chip.going {
        background: #ecfdf3;
        color: #067647;
        border: 1px solid #abefc6;
    }
    .module-meta {
        color: #475467;
        font-size: 17px;
        line-height: 1.6;
        margin-bottom: 12px;
    }
    .module-summary {
        color: #344054;
        font-size: 18px;
        line-height: 1.7;
        margin-bottom: 18px;
    }
    .module-place {
        display: flex;
        gap: 14px;
        align-items: flex-start;
        margin-bottom: 18px;
        color: #344054;
    }
    .module-place-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        background: #f2f4f7;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #344054;
        flex-shrink: 0;
    }
    .module-place strong {
        display: block;
        color: #101828;
        margin-bottom: 4px;
    }
    .module-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    .module-tag {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 16px;
        border-radius: 999px;
        background: #f2f4f7;
        color: #475467;
        font-weight: 600;
        font-size: 14px;
    }
    @media (max-width: 991px) {
        .featured-module-card {
            max-width: none;
        }
        .featured-module-image {
            height: 220px;
        }
        .featured-module-head {
            flex-direction: column;
            align-items: flex-start;
        }
        .featured-module-place {
            grid-template-columns: 1fr;
        }
        .module-card-grid {
            grid-template-columns: 1fr;
        }
        .module-card-image {
            height: 220px;
        }
        .module-card-head {
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>

<div class="space8 d-lg-block d-none"></div>

<div class="inner-header-section-area program-modules-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="hero-header" style="color: #fff;">
                    <h1 class="text-anime-style-1" style="color: #fff;">{{ $program->title }} Modules</h1>
                    <div class="space20"></div>
                    <a href="{{ route('home') }}" class="bradecrumb" style="color: #fff;">Home <i class="fa-solid fa-angle-right"></i></a>
                    <a href="{{ route('programs.index') }}" class="bradecrumb" style="color: #fff;">Programs <i class="fa-solid fa-angle-right"></i></a>
                    <span class="bradecrumb" style="color: #fff;">{{ $program->title }} Modules</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="program-modules-shell sp2">
    <div class="container">
        @if ($featuredModules->isNotEmpty())
            <div class="featured-modules-block">
                <h3 class="featured-modules-title">Featured Event</h3>
                <div class="row g-4">
                    @foreach ($featuredModules as $module)
                        <div class="col-lg-12">
                            <a href="{{ route('programs.modules.show', ['program' => $program, 'module' => $module]) }}" class="featured-module-card">
                                <img src="{{ asset($module->cover_image ?: $program->cover_image ?: 'assets/photos/Copy of dollars.webp') }}" alt="{{ $module->title }}" class="featured-module-image">
                                <div class="featured-module-head">
                                    <h3>{{ $module->title }}</h3>
                                    <span class="module-status-chip {{ $module->status_style ?: 'rsvp' }}">{{ $module->status_label ?: 'Open' }}</span>
                                </div>
                                <div class="featured-module-meta">
                                    @if ($module->start_at && $module->end_at)
                                        {{ $module->start_at->format('l, M d, h:i A') }} - {{ $module->end_at->format('l, M d, h:i A') }} EAT
                                    @endif
                                </div>
                                <div class="featured-module-summary">{{ $module->summary ?: $module->lead ?: 'Module details coming soon.' }}</div>
                                <div class="featured-module-place">
                                    <div>
                                        @if ($module->map_url)
                                            <iframe
                                                src="{{ $module->map_url }}"
                                                loading="lazy"
                                                referrerpolicy="no-referrer-when-downgrade"
                                                title="{{ $module->location_name ?: $module->title }} map"></iframe>
                                        @else
                                            <img src="{{ asset($module->cover_image ?: $program->cover_image ?: 'assets/photos/Copy of dollars.webp') }}" alt="{{ $module->title }}">
                                        @endif
                                    </div>
                                    <div>
                                        <strong>{{ $module->location_name ?: 'Location details coming soon' }}</strong>
                                        <p>{{ $module->location_address }}</p>
                                    </div>
                                </div>
                                <div class="module-tags">
                                    <span class="module-tag"><i class="fa-regular fa-clock"></i> Featured event</span>
                                    <span class="module-tag"><i class="fa-solid fa-location-dot"></i> In person</span>
                                    <span class="module-tag"><i class="fa-solid fa-user-group"></i> Dental Alliance</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        @foreach ($modulesByMonth as $monthLabel => $monthModules)
            <div class="module-month-block">
                <h3 class="module-month-title">{{ $monthLabel }}</h3>
                <div class="row g-4">
                    @foreach ($monthModules as $module)
                        <div class="col-lg-12">
                            <a href="{{ route('programs.modules.show', ['program' => $program, 'module' => $module]) }}" class="module-card">
                                <div class="module-card-grid">
                                    <div>
                                        <img src="{{ asset($module->cover_image ?: $program->cover_image ?: 'assets/photos/Copy of dollars.webp') }}" alt="{{ $module->title }}" class="module-card-image">
                                    </div>
                                    <div>
                                        <div class="module-card-head">
                                            <h3>{{ $module->title }}</h3>
                                            <span class="module-status-chip {{ $module->status_style ?: 'rsvp' }}">{{ $module->status_label ?: 'Open' }}</span>
                                        </div>
                                        <div class="module-meta">
                                            @if ($module->start_at && $module->end_at)
                                                {{ $module->start_at->format('l, M d, h:i A') }} - {{ $module->end_at->format('l, M d, h:i A') }} EAT
                                            @endif
                                        </div>
                                        <div class="module-summary">{{ $module->summary ?: $module->lead ?: 'Module details coming soon.' }}</div>
                                        <div class="module-place">
                                            <span class="module-place-icon"><i class="fa-solid fa-location-dot"></i></span>
                                            <div>
                                                <strong>{{ $module->location_name ?: 'In person' }}</strong>
                                                <span>{{ $module->location_address }}</span>
                                            </div>
                                        </div>
                                        <div class="module-tags">
                                            <span class="module-tag"><i class="fa-regular fa-clock"></i> Scheduled</span>
                                            <span class="module-tag"><i class="fa-solid fa-user-group"></i> Dental Alliance</span>
                                            <span class="module-tag"><i class="fa-solid fa-arrow-right"></i> Open Module Details</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('partials.footer')
