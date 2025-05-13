@extends('layouts.landing', ['div' => true, 'headerClass' => 'bg-transparent', 'buttons' => false])

@section('css')
@vite(['node_modules/swiper/swiper-bundle.min.css', 'node_modules/glightbox/dist/css/glightbox.css'])
@endsection

@section('buttons')
<!-- Buttons -->
<ul class="nav align-items-center dropdown-hover ms-sm-2">
    <!-- Dark mode option START -->
    <li class="nav-item dropdown dropdown-animation">
        <button class="btn btn-link mb-0 px-2 lh-1" id="bd-theme" type="button" aria-expanded="false"
            data-bs-toggle="dropdown" data-bs-display="static">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                class="bi bi-circle-half theme-icon-active fill-mode fa-fw" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                <use href="#"></use>
            </svg>
        </button>

        <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
            <li class="mb-1">
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
                    <svg width="16" height="16" fill="currentColor"
                        class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                        <path
                            d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                        <use href="#"></use>
                    </svg>Light
                </button>
            </li>
            <li class="mb-1">
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                        <path
                            d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                        <path
                            d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                        <use href="#"></use>
                    </svg>Dark
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active"
                    data-bs-theme-value="auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                        <use href="#"></use>
                    </svg>Auto
                </button>
            </li>
        </ul>
    </li>
    <!-- Dark mode option END -->

    <!-- Authentication button -->
    <li class="nav-item bg-secondary rounded d-none d-sm-block gap-1 ms-2 p-1">
        <a href="{{ route('third', [ 'pages' , 'auth','sign-up']) }}" class="btn btn-sm btn-secondary mb-0">Login</a>
        <a href="{{ route('third', [ 'pages' , 'auth','sign-up']) }}" class="btn btn-sm btn-primary mb-0">Sign up</a>
    </li>

    <!-- Responsive navbar toggler -->
    <li class="nav-item">
        <button class="navbar-toggler ms-sm-3 p-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-animation">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>
    </li>
</ul>
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
                Hero START -->
    <section class="position-relative overflow-hidden pt-lg-7 pb-0">
        <div class="bg-secondary-grad position-relative py-6 py-lg-8 mt-sm-2">
            <!-- Bg pattern -->
            <div class="position-absolute top-0 start-0">
                <img src="/images/elements/bg-pattern.svg" style="opacity: 0.05;" alt="bg pattern">
            </div>

            <!-- Main content -->
            <div class="container position-relative">
                <!-- Avatar decoration START -->
                <!-- Avatar item -->
                <div
                    class="avatar avatar-xl flex-shrink-0 position-absolute top-0 start-0 mt-6 ms-n3 d-none d-lg-block">
                    <img class="avatar-img rounded-circle position-relative" src="/images/avatar/10.jpg" alt="avatar">
                </div>
                <!-- Avatar item -->
                <div
                    class="avatar flex-shrink-0 position-absolute top-0 start-50 translate-middle-x ms-n9 mt-n6 d-none d-lg-block">
                    <img class="avatar-img rounded-circle position-relative" src="/images/avatar/02.jpg" alt="avatar">
                </div>
                <!-- Avatar item -->
                <div class="avatar avatar-lg flex-shrink-0 position-absolute top-0 end-0 me-7 mt-n4 d-none d-lg-block">
                    <img class="avatar-img rounded-circle position-relative" src="/images/avatar/06.jpg" alt="avatar">
                </div>
                <!-- Avatar item -->
                <div
                    class="avatar avatar-xxl flex-shrink-0 position-absolute bottom-50 end-0 mb-n9 me-n3 d-none d-lg-block">
                    <img class="avatar-img rounded-circle position-relative" src="/images/avatar/09.jpg" alt="avatar">
                </div>
                <!-- Avatar item -->
                <div class="avatar flex-shrink-0 position-absolute bottom-0 start-0 ms-8 mb-n3 d-none d-lg-block">
                    <img class="avatar-img rounded-circle position-relative" src="/images/avatar/01.jpg" alt="avatar">
                </div>
                <!-- Avatar decoration END -->

                <!-- Main title and search START -->
                <div class="inner-container text-center position-relative z-index-2 mx-auto">
                    <!-- Title -->
                    <h1 class="fw-semibold mb-4 lh-base">Discover Inspiring Career Opportunities at <span
                            class="text-primary">Folio</span></h1>

                    <!-- Desc -->
                    <p class="mb-5">Unlock your potential with our exciting career opportunities. At Folio, you'll
                        find a supportive and dynamic environment where you can develop your skills and achieve your
                        career goals.</p>

                    <!-- Search form START -->
                    <div
                        class="bg-body d-inline-block border border-primary border-opacity-10 rounded-3 position-relative p-2">
                        <!-- Form START -->
                        <form class="d-sm-flex align-items-center gap-3">
                            <!-- Input -->
                            <div class="position-relative mb-1 mb-sm-0">
                                <input class="form-control border-0 me-1 ps-5 w-sm-200px w-md-300px" type="text"
                                    placeholder="Job title">
                                <!-- Icon -->
                                <span class="position-absolute top-50 start-0 translate-middle ps-5"><i
                                        class="bi bi-briefcase"></i></span>
                            </div>

                            <div class="vr opacity-1 my-2 d-none d-sm-block"></div>

                            <!-- Select -->
                            <div class="position-relative mb-1 mb-sm-0">
                                <select class="form-select border-0 w-sm-200px w-md-300px ps-5"
                                    data-search-enabled="true">
                                    <option>Location</option>
                                    <option>Canada</option>
                                    <option>USA</option>
                                    <option>Paris</option>
                                    <option>India</option>
                                    <option>London</option>
                                </select>
                                <!-- Icons -->
                                <span class="position-absolute top-50 start-0 translate-middle ps-5"><i
                                        class="bi bi-geo-alt"></i></span>
                            </div>

                            <!-- Search -->
                            <a class="btn btn-lg btn-dark btn-icon mb-0" href="#"><i
                                    class="bi bi-search fs-6"></i></a>
                        </form>
                        <!-- Form END -->
                    </div>
                    <!-- Search form END -->
                </div>
                <!-- Main title and search END -->
            </div>

            <!-- Unique selling points START -->
            <div class="container mt-6 mt-lg-9">
                <!-- Title and slider button -->
                <div class="row align-items-center mb-3">
                    <div class="col-sm-5">
                        <h5 class="text-center text-sm-start mb-0">Our unique selling points</h5>
                    </div>

                    <!-- Slider button -->
                    <div class="col-sm-4 col-lg-5 ms-auto">
                        <div class="d-flex justify-content-center justify-content-sm-end gap-3 position-relative mt-3">
                            <a href="#"
                                class="fs-5 text-body-secondary text-primary-hover mb-0 swiper-button-prev-points rtl-flip"><i
                                    class="bi bi-arrow-left"></i></a>
                            <a href="#"
                                class="fs-5 text-body-secondary text-primary-hover mb-0 swiper-button-next-points rtl-flip"><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Slider START -->
                <div class="swiper px-2"
                    data-swiper-options='{
				"slidesPerView": 1,
				"spaceBetween": 40,
				"autoplay": false,
				"navigation":{
					"nextEl":".swiper-button-next-points",
					"prevEl":".swiper-button-prev-points"
				},
				"breakpoints": {
					"576": {"slidesPerView": 2},
					"768": {"slidesPerView": 3},
					"992": {"slidesPerView": 4},
					"1400": {"slidesPerView": 5}
				}}'>

                    <!-- Slider items -->
                    <div class="swiper-wrapper">
                        <!-- Item -->
                        <div class="swiper-slide py-3">
                            <div class="card card-body card-hover-transition shadow-primary p-4">
                                <h3 class="text-pink mb-4"><i class="bi bi-people"></i></h3>
                                <p class="lead heading-color fw-bold mb-2">Collaborative culture</p>
                                <a href="#"
                                    class="link-primary-grad stretched-link icon-link icon-link-hover">Read more <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="swiper-slide py-3">
                            <div class="card card-body card-hover-transition shadow-primary p-4">
                                <h3 class="text-purple mb-4"><i class="bi bi-bullseye"></i></h3>
                                <p class="lead heading-color fw-bold mb-2">Competitive benefits</p>
                                <a href="#"
                                    class="link-primary-grad stretched-link icon-link icon-link-hover">Read more <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="swiper-slide py-3">
                            <div class="card card-body card-hover-transition shadow-primary p-4">
                                <h3 class="text-success mb-4"><i class="bi bi-boxes"></i></h3>
                                <p class="lead heading-color fw-bold mb-2">Impactful projects</p>
                                <a href="#"
                                    class="link-primary-grad stretched-link icon-link icon-link-hover">Read more <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="swiper-slide py-3">
                            <div class="card card-body card-hover-transition shadow-primary p-4">
                                <h3 class="text-primary mb-4"><i class="bi bi-fire"></i></h3>
                                <p class="lead heading-color fw-bold mb-2">Community focused</p>
                                <a href="#"
                                    class="link-primary-grad stretched-link icon-link icon-link-hover">Read more <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="swiper-slide py-3">
                            <div class="card card-body card-hover-transition shadow-primary p-4">
                                <h3 class="text-info mb-4"><i class="bi bi-gem"></i></h3>
                                <p class="lead heading-color fw-bold mb-2">Cutting-Edge technology</p>
                                <a href="#"
                                    class="link-primary-grad stretched-link icon-link icon-link-hover">Read more <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="swiper-slide py-3">
                            <div class="card card-body card-hover-transition shadow-primary p-4">
                                <h3 class="text-warning mb-4"><i class="bi bi-layers"></i></h3>
                                <p class="lead heading-color fw-bold mb-2">Inspiring leadership</p>
                                <a href="#"
                                    class="link-primary-grad stretched-link icon-link icon-link-hover">Read more <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider END -->
            </div>
            <!-- Unique selling points END -->
        </div>

        <!-- Blur bg -->
        <div class="bg-body h-400px blur-7 position-absolute bottom-0 start-50 translate-middle-x mb-n8"
            style="width: 3000px"></div>
    </section>
    <!-- =======================
                Hero END -->

    <!-- =======================
                Recruitment Process START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <div class="row g-4">
                        <!-- Tab content -->
                        <div class="col-md-6 order-2">
                            <!-- Tab content START -->
                            <div class="tab-content" id="v-pills-tabContent">
                                <!-- Content item -->
                                <div class="tab-pane fade show active" id="proceee-one"
                                    aria-labelledby="proceee-one-tab" tabindex="0">
                                    <div class="card rounded-4 border overflow-hidden">
                                        <!-- Image -->
                                        <img src="/images/career/steps/01.jpg" class="card-img-top" alt="Blog-img">
                                        <!-- Content -->
                                        <div class="card-body p-4">
                                            <h6>What to Do</h6>
                                            <p class="mb-0">Submit your application through our online portal. Make
                                                sure your resume is up-to-date and tailored to the specific position
                                                you’re applying for. Include a cover letter if required, highlighting
                                                your relevant experience and why you’re interested in joining</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Content item -->
                                <div class="tab-pane fade" id="process-two" aria-labelledby="process-two-tab"
                                    tabindex="0">
                                    <div class="card rounded-4 border overflow-hidden">
                                        <!-- Image -->
                                        <img src="/images/career/steps/02.jpg" class="card-img-top" alt="Blog-img">
                                        <!-- Content -->
                                        <div class="card-body p-4">
                                            <h6>What to Do</h6>
                                            <p class="mb-0">This interview typically lasts 20-30 minutes and will be
                                                conducted via phone or video call. We’ll ask about your previous
                                                experience, your understanding of the role, and why you’re interested in
                                                working with us.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Content item -->
                                <div class="tab-pane fade" id="process-three" aria-labelledby="process-three-tab"
                                    tabindex="0">
                                    <div class="card rounded-4 border overflow-hidden">
                                        <!-- Image -->
                                        <img src="/images/career/steps/03.jpg" class="card-img-top" alt="Blog-img">
                                        <!-- Content -->
                                        <div class="card-body p-4">
                                            <h6>What to Do</h6>
                                            <p class="mb-0">Participate in an initial interview with a member of our
                                                HR team. This is your chance to learn more about company and to ask any
                                                questions you might have about the position or company culture.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Content item -->
                                <div class="tab-pane fade" id="process-four" aria-labelledby="process-four-tab"
                                    tabindex="0"></div>
                                <!-- Content item -->
                                <div class="tab-pane fade" id="process-five" aria-labelledby="process-five-tab"
                                    tabindex="0"></div>
                            </div>
                            <!-- Tab content END -->
                        </div>

                        <!-- Title and tabs -->
                        <div class="col-md-5 order-1 order-md-2 ms-auto">
                            <h2 class="mb-4">Our Recruitment Process</h2>
                            <!-- Tabs START -->
                            <div class="nav nav-pills-dark flex-column gap-3 nav-pills" id="v-pills-tab"
                                role="tablist" aria-orientation="vertical">
                                <button class="nav-link text-start rounded-pill ps-4 py-3 active" id="proceee-one-tab"
                                    role="tab" data-bs-toggle="pill" data-bs-target="#proceee-one"
                                    aria-selected="true">1. Application Submission</button>
                                <button class="nav-link text-start rounded-pill ps-4 py-3" id="process-two-tab"
                                    role="tab" data-bs-toggle="pill" data-bs-target="#process-two"
                                    aria-selected="false">2. Initial Screening</button>
                                <button class="nav-link text-start rounded-pill ps-4 py-3" id="process-three-tab"
                                    role="tab" data-bs-toggle="pill" data-bs-target="#process-three"
                                    aria-selected="false">3. First Interview</button>
                                <button class="nav-link text-start rounded-pill ps-4 py-3" id="process-four-tab"
                                    role="tab" data-bs-toggle="pill" data-bs-target="#process-four"
                                    aria-selected="false" disabled>4. Technical/Skill Assessment</button>
                                <button class="nav-link text-start rounded-pill ps-4 py-3" id="process-five-tab"
                                    role="tab" data-bs-toggle="pill" data-bs-target="#process-five"
                                    aria-selected="false" disabled>5. Final Interview</button>
                            </div>
                            <!-- Tabs END -->
                        </div>
                    </div> <!-- Row END -->

                    <!-- CTA -->
                    <div class="inner-container-small bg-primary rounded-3 text-white text-center py-3 mt-5">
                        <p class="mb-0 px-2 px-sm-5 px-md-0"><i
                                class="bi bi-info-square-fill heading-color me-2"></i>Contact our team for more
                            information
                            <a href="#"
                                class="fw-semibold icon-link icon-link-hover hover-underline-animation text-white">Let’s
                                chat <i class="bi bi-arrow-right"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                Recruitment Process END -->

    <!-- =======================
                Office gallery START -->
    <section class="pt-0">
        <div class="container">
            <div class="row row-cols-2 row-cols-md-4 g-lg-5 align-items-center">
                <!-- Image item -->
                <div class="col">
                    <div class="card card-content-hover overflow-hidden">
                        <!-- Image -->
                        <img src="/images/career/01.jpg" class="rounded-4" alt="course image">
                        <!-- Full screen button -->
                        <a class="hover-content position-absolute w-100 h-100" data-glightbox data-gallery="gallery"
                            href="/images/career/01.jpg">
                            <i
                                class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Image item -->
                <div class="col">
                    <!-- Item -->
                    <div class="card card-content-hover overflow-hidden mb-5">
                        <!-- Image -->
                        <img src="/images/career/02.jpg" class="rounded-4" alt="course image">
                        <!-- Full screen button -->
                        <a class="hover-content position-absolute w-100 h-100" data-glightbox data-gallery="gallery"
                            href="/images/career/02.jpg">
                            <i
                                class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
                        </a>
                    </div>
                    <!-- Item -->
                    <div class="card card-content-hover overflow-hidden">
                        <!-- Image -->
                        <img src="/images/career/03.jpg" class="rounded-4" alt="course image">
                        <!-- Full screen button -->
                        <a class="hover-content position-absolute w-100 h-100" data-glightbox data-gallery="gallery"
                            href="/images/career/03.jpg">
                            <i
                                class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Image item -->
                <div class="col">
                    <!-- Item -->
                    <div class="card card-content-hover overflow-hidden mb-5">
                        <!-- Image -->
                        <img src="/images/career/05.jpg" class="rounded-4" alt="course image">
                        <!-- Full screen button -->
                        <a class="hover-content position-absolute w-100 h-100" data-glightbox data-gallery="gallery"
                            href="/images/career/05.jpg">
                            <i
                                class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
                        </a>
                    </div>
                    <!-- Item -->
                    <div class="card card-content-hover overflow-hidden">
                        <!-- Image -->
                        <img src="/images/career/04.jpg" class="rounded-4" alt="course image">
                        <!-- Full screen button -->
                        <a class="hover-content position-absolute w-100 h-100" data-glightbox data-gallery="gallery"
                            href="/images/career/04.jpg">
                            <i
                                class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Image item -->
                <div class="col">
                    <div class="card card-content-hover overflow-hidden">
                        <!-- Image -->
                        <img src="/images/career/06.jpg" class="rounded-4" alt="course image">
                        <!-- Full screen button -->
                        <a class="hover-content position-absolute w-100 h-100" data-glightbox data-gallery="gallery"
                            href="/images/career/06.jpg">
                            <i
                                class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
                        </a>
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
                Office gallery END -->

    <!-- =======================
                Job listing START -->
    <section class="py-0 mb-n8">
        <div class="container-fluid">

            <div class="max-width-1550 bg-dark position-relative rounded-4 overflow-hidden py-5 py-sm-6 py-lg-8">
                <!-- Decoration START -->
                <!-- Grad blur -->
                <div class="position-absolute top-0 start-0 mt-n6 ms-n5">
                    <img src="/images/elements/grad-shape/blur-decoration.svg" class="blur-7 opacity-1"
                        alt="Grad shape">
                </div>
                <!-- Grad blur -->
                <div class="position-absolute top-100 start-50 translate-middle">
                    <img src="/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-2 blur-9"
                        alt="Grad shape">
                </div>
                <!-- Decoration END -->

                <div class="container position-relative" data-bs-theme="dark">
                    <!-- Title and button -->
                    <h2 class="text-center mb-4">New job openings</h2>
                    <p class="text-center lead mx-auto mb-5">Explore our exciting career opportunities and find the
                        perfect fit for your skills and aspirations.</p>

                    <!-- job list -->
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <!-- Job item -->
                            <div
                                class="card bg-transparent bg-opacity-50 border border-opacity-10 card-hover-transition card-hover-shadow mb-4">
                                <div class="card-body p-4">
                                    <div class="row g-3 g-sm-4 align-items-center">
                                        <div class="col-md-5">
                                            <h6 class="mb-0">Sales account executive</h6>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-2">
                                            <span>London</span>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-3">
                                            <span>Sales</span>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-2 text-sm-end">
                                            <a href="{{ route('second', ['about', 'career-single']) }}"
                                                class="fw-semibold link-success icon-link icon-link-hover stretched-link">Apply
                                                <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                        <!-- End Col -->
                                    </div> <!-- End Row -->
                                </div>
                            </div>

                            <!-- Job item -->
                            <div
                                class="card bg-transparent bg-opacity-50 border border-opacity-10 card-hover-transition card-hover-shadow mb-4">
                                <div class="card-body p-4">
                                    <div class="row g-3 g-sm-4 align-items-center">
                                        <div class="col-md-5">
                                            <h6 class="mb-0">General office manager</h6>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-2">
                                            <span>Remote work</span>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-3">
                                            <span>Software development</span>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-2 text-sm-end">
                                            <a href="{{ route('second', ['about', 'career-single']) }}"
                                                class="fw-semibold link-success icon-link icon-link-hover stretched-link">Apply
                                                <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                        <!-- End Col -->
                                    </div> <!-- End Row -->
                                </div>
                            </div>

                            <!-- Job item -->
                            <div
                                class="card bg-transparent bg-opacity-50 border border-opacity-10 card-hover-transition card-hover-shadow mb-4">
                                <div class="card-body p-4">
                                    <div class="row g-3 g-sm-4 align-items-center">
                                        <div class="col-md-5">
                                            <h6 class="mb-0">Machine learning specialist</h6>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-2">
                                            <span>New york</span>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-3">
                                            <span>Design</span>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-2 text-sm-end">
                                            <a href="{{ route('second', ['about', 'career-single']) }}"
                                                class="fw-semibold link-success icon-link icon-link-hover stretched-link">Apply
                                                <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                        <!-- End Col -->
                                    </div> <!-- End Row -->
                                </div>
                            </div>

                            <!-- Job item -->
                            <div
                                class="card bg-transparent bg-opacity-50 border border-opacity-10 card-hover-transition card-hover-shadow mb-4">
                                <div class="card-body p-4">
                                    <div class="row g-3 g-sm-4 align-items-center">
                                        <div class="col-md-5">
                                            <h6 class="mb-0">Senior product manager</h6>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-2">
                                            <span>London</span>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-3">
                                            <span>Sales</span>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-2 text-sm-end">
                                            <a href="{{ route('second', ['about', 'career-single']) }}"
                                                class="fw-semibold link-success icon-link icon-link-hover stretched-link">Apply
                                                <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                        <!-- End Col -->
                                    </div> <!-- End Row -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                Job listing END -->

    <!-- =======================
                Review START -->
    <section class="bg-secondary-grad">
        <!-- Title -->
        <h2 class="text-center mb-4 mb-sm-6 pt-8">What people say about us</h2>

        <!-- Testimonials START -->
        <div class="swiper px-4 px-sm-5"
            data-swiper-options='{
			"spaceBetween": 30,
			"speed":"14000",
			"autoplay":{
				"delay": 0,
				"disableOnInteraction": false,
				"pauseOnMouseEnter": true
			},
			"breakpoints": {
				"576": {"slidesPerView": 1},
				"768": {"slidesPerView": 2},
				"992": {"slidesPerView": 3},
				"1400": {"slidesPerView": 4}
			}}'>

            <div class="swiper-wrapper">
                <!-- Testimonials item -->
                <div class="swiper-slide">
                    <div class="card rounded-4 p-4 h-100">
                        <!-- Card body -->
                        <div class="card-body p-0 mb-4">
                            <!-- Rating star -->
                            <ul class="list-inline mb-3">
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i></li>
                            </ul>
                            <!-- Testimonials text -->
                            <blockquote>
                                <p class="heading-color mb-0">Their team went above and beyond to understand our needs
                                    and deliver a solution that exceeded our expectations. They demonstrated throughout
                                    the process was truly impressive.</p>
                            </blockquote>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer bg-transparent p-0">
                            <!-- Testimonials info -->
                            <div class="d-flex align-items-center">
                                <div class="avatar flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/09.jpg"
                                        alt="avatar">
                                </div>
                                <div class="ms-3">
                                    <p class="lead heading-color fw-semibold mb-0">Jacqueline Miller</p>
                                    <small>Product designer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonials item -->
                <div class="swiper-slide">
                    <div class="card rounded-4 p-4 h-100">
                        <!-- Card body -->
                        <div class="card-body p-0 mb-4">
                            <!-- Rating star -->
                            <ul class="list-inline mb-3">
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                            </ul>
                            <!-- Testimonials text -->
                            <blockquote>
                                <p class="heading-color mb-0">Frequently partiality possession resolution at or
                                    appearance unaffected me. Ye goodness felicity do disposal dwelling no.</p>
                            </blockquote>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer bg-transparent p-0">
                            <!-- Testimonials info -->
                            <div class="d-flex align-items-center">
                                <div class="avatar flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/10.jpg"
                                        alt="avatar">
                                </div>
                                <div class="ms-3">
                                    <p class="lead heading-color fw-semibold mb-0">Louis Ferguson</p>
                                    <small>Web Developer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonials item -->
                <div class="swiper-slide">
                    <div class="card rounded-4 p-4 h-100">
                        <!-- Card body -->
                        <div class="card-body p-0 mb-4">
                            <!-- Rating star -->
                            <ul class="list-inline mb-3">
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i></li>
                            </ul>
                            <!-- Testimonials text -->
                            <blockquote>
                                <p class="heading-color mb-0">Was out laughter raptures returned outweigh. Luckily
                                    cheered colonel I do we attack highest enabled. Tried law yet style child. The bore
                                    of true of no be deal.</p>
                            </blockquote>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer bg-transparent p-0">
                            <!-- Testimonials info -->
                            <div class="d-flex align-items-center">
                                <div class="avatar flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/04.jpg"
                                        alt="avatar">
                                </div>
                                <div class="ms-3">
                                    <p class="lead heading-color fw-semibold mb-0">Emma Watson</p>
                                    <small>UI/UX designer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonials item -->
                <div class="swiper-slide">
                    <div class="card rounded-4 p-4 h-100">
                        <!-- Card body -->
                        <div class="card-body p-0 mb-4">
                            <!-- Rating star -->
                            <ul class="list-inline mb-3">
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i></li>
                            </ul>
                            <!-- Testimonials text -->
                            <blockquote>
                                <p class="heading-color mb-0">Our passion for customer excellence is just one reason
                                    why we are the market leader. We've always worked very hard to give our customers
                                    the best experience.</p>
                            </blockquote>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer bg-transparent p-0">
                            <!-- Testimonials info -->
                            <div class="d-flex align-items-center">
                                <div class="avatar flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/07.jpg"
                                        alt="avatar">
                                </div>
                                <div class="ms-3">
                                    <p class="lead heading-color fw-semibold mb-0">Allen Smith</p>
                                    <small>Manager</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonials item -->
                <div class="swiper-slide">
                    <div class="card rounded-4 p-4 h-100">
                        <!-- Card body -->
                        <div class="card-body p-0 mb-4">
                            <!-- Rating star -->
                            <ul class="list-inline mb-3">
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i></li>
                            </ul>
                            <!-- Testimonials text -->
                            <blockquote>
                                <p class="heading-color mb-0">Was out laughter raptures returned outweigh. Luckily
                                    cheered colonel I do we attack highest enabled. Tried law yet style child. The bore
                                    of true of no be deal.</p>
                            </blockquote>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer bg-transparent p-0">
                            <!-- Testimonials info -->
                            <div class="d-flex align-items-center">
                                <div class="avatar flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/01.jpg"
                                        alt="avatar">
                                </div>
                                <div class="ms-3">
                                    <p class="lead heading-color fw-semibold mb-0">Emma Watson</p>
                                    <small>UI/UX designer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials END -->
    </section>
    <!-- =======================
                Review END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer')

<!-- Back to top -->
<div class="back-top"></div>
@endsection