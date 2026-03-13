@include('partials.header')

@php
    $availableProgramSlugs = [
        'digital-dentistry-workflow',
        'dental-economics',
    ];

    $programCategories = [
        [
            'key' => 'advanced-clinical-training',
            'title' => 'Advanced Clinical Training',
            'description' => 'Specialized CPD-focused learning tracks for modern clinical excellence.',
            'items' => [
                [
                    'title' => 'Digital Dentistry Workflow',
                    'slug' => 'digital-dentistry-workflow',
                    'image' => 'assets/photos/top.jpg',
                ],
                [
                    'title' => 'Implant Surgery & Prosthetics',
                    'slug' => 'implant-surgery-prosthetics',
                    'image' => 'assets/photos/people2.jpg',
                ],
                [
                    'title' => 'Aesthetic Dentistry & Smile Design',
                    'slug' => 'aesthetic-dentistry-smile-design',
                    'image' => 'assets/photos/header01.jpg',
                ],
                [
                    'title' => 'Lab-Clinic Integration Programs',
                    'slug' => 'lab-clinic-integration-programs',
                    'image' => 'assets/photos/team approach2.jpg',
                ],
                [
                    'title' => 'Dental Economics',
                    'slug' => 'dental-economics',
                    'image' => 'assets/photos/Copy of dollars.jpeg',
                ],
            ],
        ],
        [
            'key' => 'conferences-flagship-events',
            'title' => 'Conferences & Flagship Events',
            'description' => 'High-level platforms connecting industry, academia, and clinical leadership.',
            'items' => [
                [
                    'title' => 'Annual or Biannual DA4EA Summits',
                    'slug' => 'da4ea-summits',
                    'image' => 'assets/photos/people01.jpg',
                ],
                [
                    'title' => 'Industry-Academic-Clinical Convergence',
                    'slug' => 'industry-academic-clinical-convergence',
                    'image' => 'assets/photos/people04.jpg',
                ],
            ],
        ],
        [
            'key' => 'custom-institutional-training',
            'title' => 'Custom & Institutional Training',
            'description' => 'Tailored capacity-building pathways for institutions and partners.',
            'items' => [
                [
                    'title' => 'Universities Training',
                    'slug' => 'universities-training',
                    'image' => 'assets/photos/teaching.png',
                ],
                [
                    'title' => 'Hospitals Training',
                    'slug' => 'hospitals-training',
                    'image' => 'assets/photos/people05.jpg',
                ],
                [
                    'title' => 'NGOs Training',
                    'slug' => 'ngos-training',
                    'image' => 'assets/photos/Mobilize resources.png',
                ],
                [
                    'title' => 'Corporate Partners Training',
                    'slug' => 'corporate-partners-training',
                    'image' => 'assets/photos/Excellence.png',
                ],
            ],
        ],
    ];

    $programCategories = array_map(function (array $category) use ($availableProgramSlugs): array {
        usort($category['items'], function (array $first, array $second) use ($availableProgramSlugs): int {
            $firstAvailable = in_array($first['slug'], $availableProgramSlugs, true);
            $secondAvailable = in_array($second['slug'], $availableProgramSlugs, true);

            return $secondAvailable <=> $firstAvailable;
        });

        return $category;
    }, $programCategories);
@endphp

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
        background-image: linear-gradient(180deg, rgba(10, 10, 10, 0.68), rgba(10, 10, 10, 0.52)), url('{{ asset('assets/photos/header01.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
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
        background: #c2a968;
    }
    .program-card-cta.program-card-cta-disabled {
        border-color: #d0d5dd;
        color: #98a2b3;
        background: #f9fafb;
        cursor: not-allowed;
    }
    .program-card-link {
        font-weight: 600;
        color: #9b7b35;
    }
    .program-card.program-card-disabled {
        opacity: 1;
        cursor: default;
    }
    .program-card.program-card-disabled:hover {
        transform: none;
        border-color: #e7edf7;
        box-shadow: 0 12px 28px rgba(15, 23, 42, 0.08);
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
                    <div class="space20"></div>
                    {{-- <p style="color: #e5e7eb; max-width: 760px;">Explore DA4EA programs through filterable tracks and open each item for a dedicated detail page.</p> --}}
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
                        @php
                            $isAvailable = in_array($program['slug'], $availableProgramSlugs, true);
                        @endphp
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="900">
                            <div class="program-card {{ $isAvailable ? '' : 'program-card-disabled' }}" aria-disabled="{{ $isAvailable ? 'false' : 'true' }}">
                                <img class="program-card-image" src="{{ asset($program['image']) }}" alt="{{ $program['title'] }}">
                                <div class="program-card-body">
                                    <h4 class="program-card-title">{{ $program['title'] }}</h4>
                                    @if ($isAvailable)
                                        <a href="{{ route('programs.show', ['slug' => $program['slug']]) }}" class="program-card-cta">
                                            View Program Details <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    @else
                                        <button type="button" class="program-card-cta program-card-cta-disabled" disabled>
                                            View Program Details
                                        </button>
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

        filterButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                const targetCategory = button.dataset.filter;

                filterButtons.forEach(function (item) {
                    item.classList.remove('active');
                    item.setAttribute('aria-pressed', 'false');
                });

                button.classList.add('active');
                button.setAttribute('aria-pressed', 'true');

                programGrids.forEach(function (grid) {
                    const isTarget = grid.dataset.category === targetCategory;
                    grid.dataset.visible = isTarget ? 'true' : 'false';
                });
            });
        });
    });
</script>

@include('partials.footer')
