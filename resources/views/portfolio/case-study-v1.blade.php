@extends('layouts.landing', ['headerClass' => 'header-absolute', 'buttons' => true])

@section('css')
@vite(['node_modules/glightbox/dist/css/glightbox.css', 'node_modules/swiper/swiper-bundle.min.css'])
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Hero START -->
    <section class="bg-secondary pt-xl-8 pb-0">
        <!-- Title and content -->
        <div class="container position-relative pt-4 pt-sm-5">
            <div class="row g-4">
                <!-- Title and breadcrumb -->
                <div class="col-lg-5">
                    <!-- Breadcrumb -->
                    <nav class="mb-2" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="{{ route('any', 'index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Portfolio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Portfolio case studies</li>
                        </ol>
                    </nav>
                    <!-- Title -->
                    <h1 class="mb-0">Brand Identity Development</h1>
                </div>

                <!-- Project detail -->
                <div class="col-lg-4 ms-auto">
                    <div class="row g-3 g-sm-4">
                        <!-- Item -->
                        <div class="col-sm-6 col-md-3 col-lg-6">
                            <small>Category</small>
                            <p class="heading-color fw-semibold mt-1 mb-0">Branding</p>
                        </div>

                        <!-- Item -->
                        <div class="col-sm-6 col-md-3 col-lg-6">
                            <small>Client</small>
                            <p class="heading-color fw-semibold mt-1 mb-0">Stackbros Agency</p>
                        </div>

                        <!-- Item -->
                        <div class="col-sm-6 col-md-3 col-lg-6">
                            <small>Location</small>
                            <p class="heading-color fw-semibold mt-1 mb-0">489 Depot Road Midland</p>
                        </div>

                        <!-- Item -->
                        <div class="col-sm-6 col-md-3 col-lg-6">
                            <small>Date</small>
                            <p class="heading-color fw-semibold mt-1 mb-0">July 6, 2024</p>
                        </div>
                    </div>
                    <!-- Button -->
                    <a href="#" class="btn btn-sm btn-white-shadow mb-0 mt-4">View project website<i
                            class="bi bi-box-arrow-up-right ms-2"></i></a>
                </div>
            </div> <!-- Row END -->
        </div>

        <!-- BG image -->
        <div class="h-400px h-md-600px mt-6"
            style="background:url(/images/portfolio/03.jpg) no-repeat; background-size:cover; background-position:center;">
        </div>
    </section>
    <!-- =======================
    Hero END -->

    <!-- =======================
    Detail START -->
    <section>
        <div class="container">
            <!-- Overview -->
            <div class="row mb-5">
                <div class="col-md-4">
                    <span class="text-primary-grad fw-bold lead">01.</span>
                    <h5>Overview</h5>
                </div>
                <!-- Content -->
                <div class="col-md-8 ms-auto">
                    <p class="lead">Ideas are the seeds of innovation. They can originate from personal experiences,
                        observations, or the desire to solve a problem.</p>
                    <p>Once an idea takes root, it requires nurturing and refinement. This stage involves research,
                        brainstorming, and gathering feedback. Conducting market analysis, exploring existing solutions,
                        and collaborating with others can help refine the idea further. The goal is to gain a deeper
                        understanding of the idea's feasibility, potential impact, and market viability.</p>
                    <!-- Tag list -->
                    <ul class="list-inline">
                        <li class="list-inline-item"> <a class="btn btn-light btn-sm mb-lg-0"
                                href="#">Branding</a> </li>
                        <li class="list-inline-item"> <a class="btn btn-light btn-sm mb-lg-0"
                                href="#">Packaging</a> </li>
                        <li class="list-inline-item"> <a class="btn btn-light btn-sm mb-lg-0" href="#">UI/UX
                                design</a> </li>
                    </ul>
                </div>
            </div>

            <!-- Challenge -->
            <div class="row">
                <div class="col-md-4">
                    <span class="text-primary-grad fw-bold lead">02.</span>
                    <h5>The Challenge</h5>
                </div>
                <!-- Content -->
                <div class="col-md-8 ms-auto">
                    <p>Turning ideas into reality is a transformative process that drives innovation and progress. It
                        begins with recognizing the power and potential of an idea. Through cultivation, planning, and
                        strategizing, ideas are refined and shaped into actionable plans. Challenges are embraced as
                        opportunities for growth, and perseverance becomes key in overcoming obstacles.</p>

                    <!-- List -->
                    <div class="row">
                        <div class="col-sm-6 col-lg-5">
                            <ul class="list-group list-group-borderless">
                                <li class="list-group-item d-flex heading-color"><i
                                        class="bi bi-check-circle text-primary me-2"></i>Brand Development</li>
                                <li class="list-group-item d-flex heading-color"><i
                                        class="bi bi-check-circle text-primary me-2"></i>Art Direction</li>
                                <li class="list-group-item d-flex heading-color"><i
                                        class="bi bi-check-circle text-primary me-2"></i>Marketing Strategy</li>
                                <li class="list-group-item d-flex heading-color"><i
                                        class="bi bi-check-circle text-primary me-2"></i>Mobile App Design</li>
                            </ul>
                        </div>

                        <div class="col-sm-6 col-lg-5">
                            <ul class="list-group list-group-borderless">
                                <li class="list-group-item d-flex heading-color"><i
                                        class="bi bi-check-circle text-primary me-2"></i>Content Management</li>
                                <li class="list-group-item d-flex heading-color"><i
                                        class="bi bi-check-circle text-primary me-2"></i>System & Guides</li>
                                <li class="list-group-item d-flex heading-color"><i
                                        class="bi bi-check-circle text-primary me-2"></i>Graphic Design</li>
                                <li class="list-group-item d-flex heading-color"><i
                                        class="bi bi-check-circle text-primary me-2"></i>Brand Development</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Detail END -->

    <!-- =======================
    Images START -->
    <section class="py-0 mb-n9">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <!-- Image -->
                <div class="col-6 col-md-4">
                    <a href="/images/portfolio/3by4/09.jpg" data-glightbox data-gallery="image-popup">
                        <img src="/images/portfolio/3by4/09.jpg" class="rounded" alt="portfolio-img">
                    </a>
                </div>

                <!-- Image -->
                <div class="col-6 col-md-4">
                    <a href="/images/portfolio/3by4/06.jpg" data-glightbox data-gallery="image-popup">
                        <img src="/images/portfolio/3by4/06.jpg" class="rounded" alt="portfolio-img">
                    </a>
                </div>

                <!-- Image -->
                <div class="col-6 col-md-4">
                    <a href="/images/portfolio/3by4/01.jpg" data-glightbox data-gallery="image-popup">
                        <img src="/images/portfolio/3by4/01.jpg" class="rounded" alt="portfolio-img">
                    </a>
                </div>

                <!-- Parallax image -->
                <div class="col-12">
                    <div class="bg-parallax rounded h-400px h-xl-500px overflow-hidden" data-jarallax data-speed="0.6"
                        style="background:url(/images/portfolio/04.jpg) no-repeat; background-size:cover; background-position:center;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Images END -->

    <!-- =======================
    Result START -->
    <section class="bg-secondary bg-opacity-50">
        <div class="container pt-8">
            <div class="row">
                <div class="col-md-4">
                    <span class="text-primary-grad fw-bold lead">03.</span>
                    <h5>Result</h5>
                </div>
                <!-- Content -->
                <div class="col-md-8 ms-auto">
                    <p class="lead">Two assure Edward whence the was. Who worthy yet ten boys denote wonder. Weeks
                        views her sight old tears sorry. Additions can suspected its concealed put furnished.</p>
                    <p class="mb-0">Transforming ideas into reality often requires collaboration with a diverse range
                        of individuals. Partnering with experts, seeking mentorship, and building a network of
                        like-minded individuals can provide valuable insights and support.</p>

                    <!-- Skill sets -->
                    <div class="row row-cols-2 row-cols-md-3 mt-0 g-4 g-lg-5">
                        <!-- Item -->
                        <div class="col">
                            <h2 class="mb-0">22<span class="text-primary mb-0">%</span></h2>
                            <p class="mb-0">Increase in time spent on website</p>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <h2 class="mb-0">4.5<span class="text-purple mb-0">M</span></h2>
                            <p class="mb-0">View this project got across our social media network</p>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <h2 class="mb-0">$12.8<span class="text-pink mb-0">M</span></h2>
                            <p class="mb-0">Total raised in funding so far</p>
                        </div>
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Result END -->

    <!-- =======================
    Related works START -->
    <section>
        <div class="container">
            <!-- Title -->
            <h3 class="mb-4">Related works</h3>

            <!-- Slider START -->
            <div class="swiper"
                data-swiper-options='{
				"loop": false,
				"spaceBetween": 40,
				"pagination":{
					"el":".swiper-pagination"
				},
				"breakpoints": {
					"576": {"slidesPerView": 1},
					"768": {"slidesPerView": 2},
					"1200": {"slidesPerView": 3}
				}}'>

                <div class="swiper-wrapper">
                    <!-- Slider item -->
                    <div class="swiper-slide">
                        <div class="card card-img-scale bg-transparent overflow-hidden">
                            <div class="card-img-scale-wrapper rounded-3">
                                <!-- Card Image -->
                                <img src="/images/portfolio/4by4/01.jpg" class="img-scale" alt="portfolio-img">
                            </div>
                            <!-- Card body -->
                            <div class="card-body px-0 pb-0">
                                <h6 class="mb-0"><a href="#"
                                        class="heading-color stretched-link">Mobile app development</a></h6>
                                <small>UI/UX design</small>
                            </div>
                        </div>
                    </div>

                    <!-- Slider item -->
                    <div class="swiper-slide">
                        <div class="card card-img-scale bg-transparent overflow-hidden">
                            <div class="card-img-scale-wrapper rounded-3">
                                <!-- Card Image -->
                                <img src="/images/portfolio/4by4/02.jpg" class="img-scale" alt="portfolio-img">
                            </div>
                            <!-- Card body -->
                            <div class="card-body px-0 pb-0">
                                <h6 class="mb-0"><a href="#"
                                        class="heading-color stretched-link">Digital marketing overhaul</a></h6>
                                <small>Marketing</small>
                            </div>
                        </div>
                    </div>

                    <!-- Slider item -->
                    <div class="swiper-slide">
                        <div class="card card-img-scale bg-transparent overflow-hidden">
                            <div class="card-img-scale-wrapper rounded-3">
                                <!-- Card Image -->
                                <img src="/images/portfolio/4by4/05.jpg" class="img-scale" alt="portfolio-img">
                            </div>
                            <!-- Card body -->
                            <div class="card-body px-0 pb-0">
                                <h6 class="mb-0"><a href="#"
                                        class="heading-color stretched-link">TechWave</a></h6>
                                <small>Animation</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Pagination -->
                <div class="swiper-pagination swiper-pagination-primary position-relative mt-4"></div>
            </div>
            <!-- Slider END -->
        </div>
    </section>
    <!-- =======================
    Related works END -->

    <!-- =======================
    CTA START -->
    <section class="pt-0">
        <div class="container">
            <div class="bg-secondary position-relative rounded-3 overflow-hidden p-4 p-sm-6">
                <!-- BG pattern -->
                <div class="position-absolute end-0 top-0 rotate-343 mt-n5 me-n8">
                    <img src="/images/elements/grad-shape/05.png" class="h-200px h-sm-300px h-lg-500px"
                        alt="bg pattern">
                </div>

                <!-- BG pattern -->
                <div class="position-absolute start-0 top-0 rotate-343 mt-n5 ms-n6">
                    <img src="/images/elements/grad-shape/11.png" class="h-200px blur-2" alt="bg pattern">
                </div>

                <div class="row g-4 align-items-center position-relative">
                    <!-- Title and list -->
                    <div class="col-xl-8">
                        <h5 class="fw-light">Have a project in mind?</h5>
                        <h2 class="h1 fw-bold">Let’s get to <span class="text-primary-grad"> work.</span></h2>
                    </div>

                    <!-- Button -->
                    <div class="col-xl-4 text-xl-end">
                        <a href="#" class="btn btn-dark mb-0">Get in touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    CTA END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer')

<!-- Back to top -->
<div class="back-top"></div>
@endsection