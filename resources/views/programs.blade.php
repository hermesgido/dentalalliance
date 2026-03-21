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
    .programs-hero {
        position: relative;
        background-image: url('{{ asset('assets/photos/header01.webp') }}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        overflow: hidden;
    }
    .programs-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(7, 6, 6, 0.55), rgba(4, 3, 3, 0.4));
        z-index: 0;
    }
    .programs-hero .container {
        position: relative;
        z-index: 1;
    }
    .programs-main {
        background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
    }
    .programs-filter-wrap {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        justify-content: center;
        margin-bottom: 24px;
    }
    .program-filter-btn {
        border: 1px solid #d0d9e8;
        background: #fff;
        color: #0f172a;
        border-radius: 999px;
        padding: 10px 18px;
        font-weight: 600;
        font-size: 15px;
        transition: all 0.2s ease;
    }
    .program-filter-btn:hover {
        border-color: #c2a968;
        color: #6a5524;
    }
    .program-filter-btn.active {
        background: #c2a968;
        border-color: #c2a968;
        color: #fff;
        box-shadow: 0 10px 26px rgba(194, 169, 104, 0.28);
    }
    .programs-subhead {
        text-align: center;
        margin-bottom: 34px;
    }
    .programs-subhead h3 {
        font-size: clamp(28px, 4vw, 40px);
        margin-bottom: 8px;
        color: #101828;
    }
    .programs-subhead p {
        margin: 0;
        color: #475467;
        font-size: 18px;
    }
    .program-card {
        display: block;
        background: #fff;
        border: 1px solid #e7edf7;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 12px 28px rgba(15, 23, 42, 0.08);
        transition: transform 0.22s ease, box-shadow 0.22s ease, border-color 0.22s ease;
        height: 100%;
        text-decoration: none;
    }
    .program-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 18px 36px rgba(15, 23, 42, 0.16);
        border-color: #c2a968;
    }
    .program-card-image {
        width: 100%;
        height: 220px;
        object-fit: cover;
        display: block;
    }
    .program-card-body {
        padding: 20px;
    }
    .program-card-title {
        font-size: 24px;
        line-height: 1.28;
        font-weight: 700;
        color: #111827;
        margin-bottom: 12px;
    }
    .program-card-summary {
        margin-bottom: 16px;
        color: #475467;
        font-size: 16px;
        line-height: 1.6;
    }
    .program-card-cta {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border: 1px solid #c2a968;
        border-radius: 999px;
        padding: 8px 14px;
        font-weight: 600;
        color: #9b7b35;
        background: #fff;
    }
    .program-card-cta:hover {
        color: #fff;
        background: #fe4e00;
        border-color: #fe4e00;
    }
    .program-card-cta.is-disabled {
        border-color: #d0d9e8;
        color: #98a2b3;
        background: #f8fafc;
        cursor: not-allowed;
        pointer-events: none;
    }
    .program-grid[data-visible="false"] {
        display: none;
    }
    @media (max-width: 767px) {
        .program-card-image {
            height: 200px;
        }
        .program-card-title {
            font-size: 21px;
        }
    }
</style>

<div class="space8 d-lg-block d-none"></div>

<div class="inner-header-section-area programs-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="hero-header" style="color: #fff;">
                    <h1 class="text-anime-style-1" style="color: #fff;">Programs</h1>
                    <div class="space24"></div>
                    <a href="{{ route('home') }}" class="bradecrumb" style="color: #fff;">Home <i class="fa-solid fa-angle-right"></i> Programs</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="programs-main sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="heading4 text-center space-margin60">
                    <h2 class="vl-section-title text-anime-style-3">Programs Overview</h2>
                    <div class="space12"></div>
                    <p>Choose one of the 3 program types to view its list.</p>
                </div>
            </div>
        </div>

        <div class="programs-filter-wrap" role="tablist" aria-label="Program categories">
            @foreach ($programCategories as $index => $category)
                <button
                    class="program-filter-btn {{ $index === 0 ? 'active' : '' }}"
                    type="button"
                    data-filter="{{ $category['key'] }}"
                    aria-pressed="{{ $index === 0 ? 'true' : 'false' }}">
                    {{ $category['title'] }}
                </button>
            @endforeach
        </div>

        @foreach ($programCategories as $index => $category)
            <section
                class="program-grid"
                data-category="{{ $category['key'] }}"
                data-visible="{{ $index === 0 ? 'true' : 'false' }}">
                <div class="programs-subhead">
                    <h3>{{ $category['title'] }}</h3>
                    <p>{{ $category['description'] }}</p>
                </div>
                <div class="row g-4">
                    @foreach ($category['items'] as $program)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="900">
                            <div class="program-card">
                                <img class="program-card-image" src="{{ asset($program->cover_image ?: 'assets/photos/header01.webp') }}" alt="{{ $program->title }}">
                                <div class="program-card-body">
                                    <h4 class="program-card-title">{{ $program->title }}</h4>
                                    <p class="program-card-summary">{{ $program->summary ?: $program->description ?: 'Program details coming soon.' }}</p>
                                    @if (($program->active_modules_count ?? 0) > 0)
                                        <a href="{{ route('programs.modules.index', $program) }}" class="program-card-cta">
                                            View Modules <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    @else
                                        <span class="program-card-cta is-disabled" aria-disabled="true">
                                            View Modules <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @endforeach
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterButtons = document.querySelectorAll('.program-filter-btn');
        const programGrids = document.querySelectorAll('.program-grid');

        const activateCategory = function (targetCategory) {
            if (!targetCategory) {
                return;
            }

            filterButtons.forEach(function (item) {
                const isTarget = item.dataset.filter === targetCategory;
                item.classList.toggle('active', isTarget);
                item.setAttribute('aria-pressed', isTarget ? 'true' : 'false');
            });

            programGrids.forEach(function (grid) {
                grid.dataset.visible = grid.dataset.category === targetCategory ? 'true' : 'false';
            });
        };

        filterButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                activateCategory(button.dataset.filter);
                history.replaceState(null, '', `#${button.dataset.filter}`);
            });
        });

        const hashCategory = window.location.hash.replace('#', '').trim();

        if (hashCategory) {
            activateCategory(hashCategory);
        }
    });
</script>

@include('partials.footer')
