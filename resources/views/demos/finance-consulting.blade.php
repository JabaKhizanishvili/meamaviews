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

    <!-- Book button -->
    <li class="nav-item ms-2 d-none d-sm-block">
        <a href="#" class="btn btn-sm btn-dark mb-0"><i class="bi bi-telephone me-2"></i>Book a call</a>
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
    <section class="overflow-hidden pt-6 pt-sm-7 pb-0">
        <div class="position-relative pb-8 pt-3 pt-sm-6 py-xl-9"
            style="background:url(/images/bg/04.jpg) no-repeat; background-size:cover; background-position:top;">
            <!-- Bg overlay -->
            <div class="bg-overlay bg-dark opacity-6"></div>

            <!-- Content -->
            <div class="container position-relative z-index-2 py-3">
                <div class="row align-items-center">
                    <div class="col-sm-11 col-lg-6">
                        <!-- Title -->
                        <h1 class="text-white display-6 my-4">Empowering Your <span class="fw-light">Financial</span>
                            Future</h1>
                        <p class="text-white lead mb-4 mb-sm-5">Our team is dedicated to helping you achieve your
                            financial goals with confidence and clarity.</p>
                        <a class="btn btn-primary-grad icon-link icon-link-hover mb-0" href="#">Get started
                            today<i class="bi bi-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
            Hero END -->

    <!-- =======================
            Goal content and form START -->
    <section class="position-relative z-index-2 pt-0">
        <div class="container">
            <div class="row">
                <!-- Goal content -->
                <div class="col-lg-6 col-xl-5 pt-5 pt-xl-7 order-2">
                    <!-- Title -->
                    <h5 class="mb-4 mb-xl-5">Achieving financial excellence together</h5>

                    <div class="row g-4">
                        <!-- Item -->
                        <div class="col-md-6">
                            <h6 class="mb-2"><i class="bi bi-lightning-charge-fill text-success me-2"></i>Our mission
                            </h6>
                            <p class="mb-0">We deliver exceptional financial consulting services tailored to your
                                unique needs.</p>
                        </div>
                        <!-- Item -->
                        <div class="col-md-6">
                            <h6 class="mb-2"><i class="bi bi-bullseye text-warning me-2"></i>Our goal</h6>
                            <p class="mb-0">We aim to help you grow and protect your wealth, ensuring a secure.</p>
                        </div>
                    </div>
                </div>

                <!-- Form START -->
                <div class="col-lg-6 col-xl-5 ms-auto mt-n6 mt-lg-n9 order-1 order-lg-2">
                    <div class="card bg-dark rounded-4 mt-lg-n9" data-bs-theme="dark">
                        <!-- Card header -->
                        <div class="card-header bg-transparent pt-4">
                            <h5 class="text-center">Book a consultant</h5>
                        </div>

                        <!-- Card body -->
                        <div class="card-body p-4 pt-0">
                            <form class="row form-border-transparent g-4">
                                <div class="col-md-6">
                                    <label class="form-label">First name</label>
                                    <input type="text" class="form-control bg-secondary">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Last name</label>
                                    <input type="text" class="form-control bg-secondary">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control bg-secondary">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Mobile number</label>
                                    <input type="text" class="form-control bg-secondary">
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Subject</label>
                                    <input type="text" class="form-control bg-secondary">
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control bg-secondary" id="floatingTextarea2" style="height: 100px"></textarea>
                                </div>

                                <div class="col-12 mt-4">
                                    <!-- Button -->
                                    <button class="btn btn-white mb-2 mb-md-0">Send a message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Form END -->
            </div>
        </div>
    </section>
    <!-- =======================
            Goal content and form END -->

    <!-- =======================
            Services START -->
    <section class="overflow-hidden pt-0">
        <div class="container">
            <div class="row align-items-xl-center">
                <!-- Image -->
                <div class="col-lg-5 position-relative mb-4 mb-lg-0">
                    <!-- Blur decoration -->
                    <div class="position-absolute top-0 end-0 me-n6 mt-6">
                        <img src="/images/elements/grad-shape/blur-decoration.svg" class="blur-9 opacity-2"
                            alt="Grad shape">
                    </div>
                    <img src="/images/about/15.jpg" class="rounded-4 z-index-2 position-relative" alt="about image">
                </div>

                <!-- Title and services -->
                <div class="col-lg-7 col-xl-6 ms-auto">
                    <!-- Title -->
                    <h2 class="mb-3 mb-sm-4">Comprehensive financial solutions for you</h2>

                    <!-- Service list START -->
                    <div class="row g-0">
                        <div class="col-sm-6">
                            <ul class="nav nav-link-hover-underline flex-column mb-0">
                                <li class="nav-item pb-1">
                                    <a href="{{ route('second', ['about', 'service-single']) }}"
                                        class="nav-link fs-6">
                                        <span class="nav-link-text">Financial advisory</span>
                                        <span class="nav-link-icon ms-1"><i
                                                class="bi bi-arrow-right rtl-flip"></i></span>
                                    </a>
                                </li>
                                <li class="nav-item pb-1">
                                    <a href="{{ route('second', ['about', 'service-single']) }}"
                                        class="nav-link fs-6">
                                        <span class="nav-link-text">Consulting</span>
                                        <span class="nav-link-icon ms-1"><i
                                                class="bi bi-arrow-right rtl-flip"></i></span>
                                    </a>
                                </li>
                                <li class="nav-item pb-1">
                                    <a href="{{ route('second', ['about', 'service-single']) }}"
                                        class="nav-link fs-6">
                                        <span class="nav-link-text">Management</span>
                                        <span class="nav-link-icon ms-1"><i
                                                class="bi bi-arrow-right rtl-flip"></i></span>
                                    </a>
                                </li>
                                <li class="nav-item pb-1">
                                    <a href="{{ route('second', ['about', 'service-single']) }}"
                                        class="nav-link fs-6">
                                        <span class="nav-link-text">Data analysis</span>
                                        <span class="nav-link-icon ms-1"><i
                                                class="bi bi-arrow-right rtl-flip"></i></span>
                                    </a>
                                </li>
                                <li class="nav-item pb-1">
                                    <a href="{{ route('second', ['about', 'service-single']) }}"
                                        class="nav-link fs-6">
                                        <span class="nav-link-text">Debt management</span>
                                        <span class="nav-link-icon ms-1"><i
                                                class="bi bi-arrow-right rtl-flip"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <ul class="nav nav-link-hover-underline flex-column mb-0">
                                <li class="nav-item pb-1">
                                    <a href="{{ route('second', ['about', 'service-single']) }}"
                                        class="nav-link fs-6">
                                        <span class="nav-link-text">Legal & Tax</span>
                                        <span class="nav-link-icon ms-1"><i
                                                class="bi bi-arrow-right rtl-flip"></i></span>
                                    </a>
                                </li>
                                <li class="nav-item pb-1">
                                    <a href="{{ route('second', ['about', 'service-single']) }}"
                                        class="nav-link fs-6">
                                        <span class="nav-link-text">Business consulting</span>
                                        <span class="nav-link-icon ms-1"><i
                                                class="bi bi-arrow-right rtl-flip"></i></span>
                                    </a>
                                </li>
                                <li class="nav-item pb-1">
                                    <a href="{{ route('second', ['about', 'service-single']) }}"
                                        class="nav-link fs-6">
                                        <span class="nav-link-text">Risk advisory</span>
                                        <span class="nav-link-icon ms-1"><i
                                                class="bi bi-arrow-right rtl-flip"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Service list END -->

                    <!-- Button -->
                    <p
                        class="bg-secondary bg-opacity-25 border border-primary border-opacity-10 rounded-3 d-inline-block mt-3 mt=lg-4 mb-0 px-4 py-3">
                        🤝 Looking for business opportunity?
                        <a href="{{ route('second', [ 'pages' , 'contact-us-v1']) }}" class="fw-semibold hover-underline-animation">Send message</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
            Services END -->

    <!-- =======================
            Core value START -->
    <section class="pt-0">
        <div class="container">
            <!-- Title -->
            <h2 class="text-center mb-4 mb-lg-5">Principles for your finance</h2>

            <!-- Features START -->
            <div class="row g-4 g-lg-5">
                <!-- Item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary-grad rounded-4 p-4">
                        <!-- Icon -->
                        <div class="icon-lg bg-body text-success shadow-primary rounded-circle mb-4">
                            <i class="bi bi-rocket-takeoff-fill fa-lg"></i>
                        </div>
                        <!-- Content -->
                        <h6 class="mb-2">Integrity</h6>
                        <p class="mb-0">We uphold the highest standards of integrity in all our actions.</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary-grad rounded-4 p-4">
                        <!-- Icon -->
                        <div class="icon-lg bg-body text-pink shadow-primary rounded-circle mb-4">
                            <i class="bi bi-person-lines-fill fa-lg"></i>
                        </div>
                        <!-- Content -->
                        <h6 class="mb-2">Client approach</h6>
                        <p class="mb-0">Your needs and goals are at the heart of everything we do.</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary-grad rounded-4 p-4">
                        <!-- Icon -->
                        <div class="icon-lg bg-body text-info shadow-primary rounded-circle mb-4">
                            <i class="bi bi-award fa-lg"></i>
                        </div>
                        <!-- Content -->
                        <h6 class="mb-2">Excellence</h6>
                        <p class="mb-0">Our experts are dedicated to delivering the highest quality services.</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary-grad rounded-4 p-4">
                        <!-- Icon -->
                        <div class="icon-lg bg-body text-purple shadow-primary rounded-circle mb-4">
                            <i class="bi bi-fire fa-lg"></i>
                        </div>
                        <!-- Content -->
                        <h6 class="mb-2">Innovation</h6>
                        <p class="mb-0">Embracing innovation to lead in the dynamic financial landscape.</p>
                    </div>
                </div>
            </div>
            <!-- Features END -->
        </div>
    </section>
    <!-- =======================
            Core value END -->

    <!-- =======================
            Industries cover START -->
    <section class="bg-secondary bg-opacity-50 overflow-hidden">
        <div class="container">
            <div class="row g-4">
                <!-- Title and content -->
                <div class="col-lg-4">
                    <div class="h-100 d-flex flex-column">
                        <h2 class="mb-3">Industries we serve</h2>
                        <p class="lead mb-3">Providing expert financial services across diverse industries</p>
                        <div><a href="{{ route('second', [ 'pages' , 'contact-us-v2']) }}" class="btn btn-primary mb-4 mb-lg-0">Contact us now</a>
                        </div>

                        <!-- Slider arrow -->
                        <div class="d-flex gap-3 position-relative mt-auto">
                            <a href="#"
                                class="btn btn-lg btn-white-shadow btn-icon rounded-circle mb-0 swiper-button-prev-industry"><i
                                    class="bi bi-arrow-left rtl-flip"></i></a>
                            <a href="#"
                                class="btn btn-lg btn-white-shadow btn-icon rounded-circle mb-0 swiper-button-next-industry"><i
                                    class="bi bi-arrow-right rtl-flip"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Industry items -->
                <div class="col-lg-8">
                    <!-- Slider START -->
                    <div class="swiper swiper-outside-end-n20"
                        data-swiper-options='{
					"spaceBetween": 30,
					"loop": true,
					"autoplay":{
						"pauseOnMouseEnter": true
					},
					"navigation":{
						"nextEl":".swiper-button-next-industry",
						"prevEl":".swiper-button-prev-industry"
					},
					"breakpoints": {
						"576": {"slidesPerView": 2},
						"1200": {"slidesPerView": 3}
					}}'>

                        <div class="swiper-wrapper">
                            <!-- Item -->
                            <div class="swiper-slide">
                                <div class="card p-3 pb-0">
                                    <!-- Image -->
                                    <img src="/images/services/finance/01.jpg" class="card-img" alt="service image">
                                    <!-- Content -->
                                    <div class="card-body px-2">
                                        <h6 class="mb-2">Healthcare industry</h6>
                                        <p class="mb-3">Our team provides specialized financial consulting for
                                            healthcare providers, ensuring sustainable.</p>
                                        <a href="#"
                                            class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read
                                            more <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide">
                                <div class="card p-3 pb-0">
                                    <!-- Image -->
                                    <img src="/images/services/finance/03.jpg" class="card-img" alt="service image">
                                    <!-- Content -->
                                    <div class="card-body px-2">
                                        <h6 class="mb-2">Real estate sector</h6>
                                        <p class="mb-3">From property management to development projects, we deliver
                                            expert financial advice to maximize.</p>
                                        <a href="#"
                                            class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read
                                            more <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide">
                                <div class="card p-3 pb-0">
                                    <!-- Image -->
                                    <img src="/images/services/finance/02.jpg" class="card-img" alt="service image">
                                    <!-- Content -->
                                    <div class="card-body px-2">
                                        <h6 class="mb-2">Manufacturing industry</h6>
                                        <p class="mb-3">Our financial experts understand the unique challenges of the
                                            manufacturing sector industry.</p>
                                        <a href="#"
                                            class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read
                                            more <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide">
                                <div class="card p-3 pb-0">
                                    <!-- Image -->
                                    <img src="/images/services/finance/04.jpg" class="card-img" alt="service image">
                                    <!-- Content -->
                                    <div class="card-body px-2">
                                        <h6 class="mb-2">Retail sector</h6>
                                        <p class="mb-3">We support retail businesses with comprehensive financial
                                            services, including inventory management.</p>
                                        <a href="#"
                                            class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read
                                            more <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
            Industries cover END -->

    <!-- =======================
            Video and pricing cta START -->
    <section class="pt-0">
        <!-- Video START -->
        <div class="bg-parallax position-relative h-400px h-xl-600px overflow-hidden"
            style="background:url(/images/about/10.jpg) no-repeat; background-size:cover; background-position:center;">
            <!-- BG overlay -->
            <div class="bg-overlay bg-dark opacity-1"></div>
            <!-- Play button -->
            <div class="position-absolute top-50 start-50 translate-middle z-index-2">
                <a href="https://www.youtube.com/embed/tXHviS-4ygo"
                    class="btn btn-icon btn-xl btn-white btn-round mb-0" data-glightbox="" data-gallery="Video"><i
                        class="bi bi-play-fill fa-lg"></i></a>
            </div>
        </div>
        <!-- Video END -->

        <!-- Pricing cta START -->
        <div class="container mt-n5 mt-xl-n7">
            <div class="bg-dark position-relative rounded-4 overflow-hidden p-4 p-md-5 p-lg-6" data-bs-theme="dark">
                <!-- Grad decoration -->
                <div class="position-absolute top-0 start-0 mt-n7 ms-n5">
                    <img src="/images/elements/grad-shape/02.png" class="blur-7 opacity-3" alt="Grad shape">
                </div>

                <div class="row g-4 align-items-center position-relative">
                    <!-- Title and list -->
                    <div class="col-lg-6 text-center text-lg-start">
                        <h2 class="h3 mb-3">Need finance guidance?</h2>
                        <p class="mb-0">We've always worked very hard to give our customers the best experience.</p>
                    </div>

                    <!-- Button -->
                    <div class="col-lg-4 ms-auto text-end">
                        <div class="heading-color text-center mb-3"> <span class="fs-2 fw-bold">$9.99</span> /per hour
                        </div>
                        <a href="#" class="btn btn-primary-grad mb-0 w-100"><i
                                class="bi bi-telephone me-2"></i>Book call!</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing cta END -->
    </section>
    <!-- =======================
            Video and pricing cta END -->

    <!-- =======================
            Team START -->
    <section class="py-0">
        <div class="container">
            <!-- Title -->
            <h2 class="text-center mb-4 mb-lg-5">Our financial experts</h2>

            <div class="row g-4 g-lg-5">
                <!-- Item -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-content-hover bg-transparent">
                        <!-- Image -->
                        <img src="/images/team/01.jpg" class="card-img" alt="team image">

                        <!-- Content -->
                        <div class="card-body text-center px-0 pb-0">
                            <h6 class="mb-1">Jane Doe</h6>
                            <p class="mb-0">Chief Financial Officer</p>

                            <!-- Social links -->
                            <ul class="list-inline hover-content position-relative p-0 mb-0">
                                <li class="list-inline-item"> <a class="btn btn-icon w-auto lead text-facebook"
                                        href="#"><i class="bi bi-facebook lh-base"></i></a> </li>
                                <li class="list-inline-item"> <a class="btn btn-icon w-auto lead text-twitter-x"
                                        href="#"><i class="bi bi-twitter-x lh-base"></i></a> </li>
                                <li class="list-inline-item"> <a
                                        class="btn btn-icon w-auto lead text-instagram-gradient" href="#"><i
                                            class="bi bi-instagram lh-base"></i></a> </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-content-hover bg-transparent">
                        <!-- Image -->
                        <img src="/images/team/02.jpg" class="card-img" alt="team image">

                        <!-- Content -->
                        <div class="card-body text-center px-0 pb-0">
                            <h6 class="mb-1">Michael Brown</h6>
                            <p class="mb-0">Investment Strategist</p>

                            <!-- Social links -->
                            <ul class="list-inline hover-content position-relative p-0 mb-0">
                                <li class="list-inline-item"> <a class="btn btn-icon w-auto lead text-facebook"
                                        href="#"><i class="bi bi-facebook lh-base"></i></a> </li>
                                <li class="list-inline-item"> <a
                                        class="btn btn-icon w-auto lead text-instagram-gradient" href="#"><i
                                            class="bi bi-instagram lh-base"></i></a> </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-content-hover bg-transparent">
                        <!-- Image -->
                        <img src="/images/team/04.jpg" class="card-img" alt="team image">

                        <!-- Content -->
                        <div class="card-body text-center px-0 pb-0">
                            <h6 class="mb-1">Louis Ferguson</h6>
                            <p class="mb-0">Tax Specialist</p>

                            <!-- Social links -->
                            <ul class="list-inline hover-content position-relative p-0 mb-0">
                                <li class="list-inline-item"> <a class="btn btn-icon w-auto lead text-facebook"
                                        href="#"><i class="bi bi-facebook lh-base"></i></a> </li>
                                <li class="list-inline-item"> <a class="btn btn-icon w-auto lead text-twitter-x"
                                        href="#"><i class="bi bi-twitter-x lh-base"></i></a> </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-content-hover bg-transparent">
                        <!-- Image -->
                        <img src="/images/team/03.jpg" class="card-img" alt="team image">

                        <!-- Content -->
                        <div class="card-body text-center px-0 pb-0">
                            <h6 class="mb-1">Amanda Reed</h6>
                            <p class="mb-0">Senior Financial Advisor</p>

                            <!-- Social links -->
                            <ul class="list-inline hover-content position-relative p-0 mb-0">
                                <li class="list-inline-item"> <a class="btn btn-icon w-auto lead text-facebook"
                                        href="#"><i class="bi bi-facebook lh-base"></i></a> </li>
                                <li class="list-inline-item"> <a class="btn btn-icon w-auto lead text-twitter-x"
                                        href="#"><i class="bi bi-twitter-x lh-base"></i></a> </li>
                                <li class="list-inline-item"> <a
                                        class="btn btn-icon w-auto lead text-instagram-gradient" href="#"><i
                                            class="bi bi-instagram lh-base"></i></a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
            Team END -->

    <!-- =======================
            Clients START -->
    <section class="pt-5 pt-xl-7">
        <div class="container">
            <div class="row g-4">
                <!-- Title -->
                <div class="col-lg-5">
                    <h2 class="mb-4">Trusted by industry leaders</h2>
                    <!-- Rating -->
                    <p class="mb-2">3000+ Users rated us <span class="text-warning fw-bold">4.85</span> out of 5.
                    </p>
                    <ul class="avatar-group mb-sm-0">
                        <li class="avatar avatar-sm">
                            <img class="avatar-img rounded-circle" src="/images/avatar/01.jpg" alt="avatar">
                        </li>
                        <li class="avatar avatar-sm">
                            <img class="avatar-img rounded-circle" src="/images/avatar/02.jpg" alt="avatar">
                        </li>
                        <li class="avatar avatar-sm">
                            <img class="avatar-img rounded-circle" src="/images/avatar/03.jpg" alt="avatar">
                        </li>
                        <li class="avatar avatar-sm">
                            <img class="avatar-img rounded-circle" src="/images/avatar/08.jpg" alt="avatar">
                        </li>
                        <li class="avatar avatar-sm">
                            <img class="avatar-img rounded-circle" src="/images/avatar/07.jpg" alt="avatar">
                        </li>
                    </ul>
                </div>

                <div class="col-lg-7">
                    <!-- Clients -->
                    <div class="row row-cols-2 row-cols-sm-auto g-3">
                        <!-- Item -->
                        <div class="col">
                            <div class="bg-secondary bg-opacity-50 rounded-3 p-3">
                                <img src="/images/client/logo-dark/01.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-light/01.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="bg-secondary bg-opacity-50 rounded-3 p-3">
                                <img src="/images/client/logo-dark/07.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-light/07.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="bg-secondary bg-opacity-50 rounded-3 p-3">
                                <img src="/images/client/logo-dark/08.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-light/08.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="bg-secondary bg-opacity-50 rounded-3 p-3">
                                <img src="/images/client/logo-dark/02.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-light/02.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="bg-secondary bg-opacity-50 rounded-3 p-3">
                                <img src="/images/client/logo-dark/03.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-light/03.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="bg-secondary bg-opacity-50 rounded-3 p-3">
                                <img src="/images/client/logo-dark/04.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-light/04.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="bg-secondary bg-opacity-50 rounded-3 p-3">
                                <img src="/images/client/logo-dark/05.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-light/05.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="bg-secondary bg-opacity-50 rounded-3 p-3">
                                <img src="/images/client/logo-dark/11.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-light/11.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="bg-secondary bg-opacity-50 rounded-3 p-3">
                                <img src="/images/client/logo-dark/10.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-light/10.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="bg-secondary bg-opacity-50 rounded-3 p-3">
                                <img src="/images/client/logo-dark/06.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-light/06.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="bg-secondary bg-opacity-50 rounded-3 p-3">
                                <img src="/images/client/logo-dark/09.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-light/09.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
            Clients END -->


</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer')

<!-- Back to top -->
<div class="back-top"></div>
@endsection