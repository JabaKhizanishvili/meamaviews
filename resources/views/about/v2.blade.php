@extends('layouts.landing', ['div' => true, 'headerClass' => 'bg-transparent', 'buttons' => false])

@section('css')
@vite(['node_modules/swiper/swiper-bundle.min.css'])
@endsection

@section('topAlert')
<div class="alert fade show bg-primary border-0 rounded-0 text-center overflow-hidden z-index-9 py-2 m-0 d-none d-lg-block" role="alert">
    <div class="container d-flex justify-content-between px-2 px-xl-4">
        <!-- Contact info -->
        <ul class="list-inline d-flex flex-wrap gap-3 text-white mb-0">
            <li class="list-inline-item fw-light"><i class="bi bi-headset me-2"></i>Call us: <a href="#" class="link-white">+123 555 66 </a></li>
            <li class="list-inline-item fw-light"><i class="bi bi-envelope me-2"></i>Email: <a href="#" class="link-white">example@gmail.com</a></li>
        </ul>

        <!-- Social links -->
        <ul class="list-inline mb-0">
            <li class="list-inline-item small text-white">Follow us on: </li>
            <li class="list-inline-item"> <a href="#" class="link-white"><i class="bi bi-facebook"></i></a> </li>
            <li class="list-inline-item"> <a href="#" class="link-white"><i class="bi bi-instagram"></i></a> </li>
            <li class="list-inline-item"> <a href="#" class="link-white"><i class="bi bi-twitter-x"></i></a> </li>
            <li class="list-inline-item"> <a href="#" class="link-white"><i class="bi bi-linkedin"></i></a> </li>
        </ul>
    </div>
</div>
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

    <!-- Schedule button -->
    <li class="nav-item ms-2 d-none d-sm-block">
        <a href="#" class="btn btn-sm btn-dark mb-0" data-bs-toggle="offcanvas" data-bs-target="#scheduleCall"
            aria-controls="scheduleCall"><i class="bi bi-calendar-week me-2"></i>Schedule a call</a>
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
    <section class="position-relative pt-sm-8 pt-lg-9 pb-0 overflow-hidden">
        <!-- Right side svg decoration -->
        <div class="position-absolute top-0 end-0 z-index-2 mt-7 me-n9 d-none d-md-block">
            <img src="/images/elements/grad-shape/05.png" class="rotate-180" alt="">
        </div>

        <!-- Blur decoration -->
        <div class="position-absolute top-0 start-0 ms-n4 mt-7">
            <img src="/images/elements/grad-shape/blur-decoration.svg" class="blur-7 opacity-1" alt="Grad shape">
        </div>

        <div class="container position-relative z-index-2 pt-4 pb-5 pb-lg-8">
            <!-- Breadcrumb -->
            <nav class="mb-2" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('any', 'index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About us</li>
                </ol>
            </nav>

            <!-- Title -->
            <h1>Building a Better</h1>
            <h6 class="display-1"><span class="text-primary">Future</span> Together</h6>

            <!-- Content -->
            <div class="d-lg-flex justify-content-end align-items-start gap-3 mt-4 mt-sm-5">
                <p class="inner-container-small border-purple border-2 border-start mx-0 ps-2">With a rich history of
                    innovation and creativity, our team is dedicated to transforming ideas into visual masterpieces.
                    Join us on our journey as we continue to push the boundaries of design and deliver excellence in
                    every project we undertake.</p>
                <a class="btn btn-light icon-link icon-link-hover mt-2"
                    href="{{ route('second', ['about', 'team']) }}">Meet our team<i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Image -->
        <div class="bg-secondary-grad position-relative pb-5 pb-lg-8 px-2 px-md-5">
            <!-- Blur divider -->
            <div class="bg-body blur-5 h-300px w-100 position-absolute top-0 start-0 mt-n5"></div>
            <!-- Main image -->
            <div class="h-300px h-md-500px h-xl-700px z-index-2 position-relative rounded-4"
                style="background:url(/images/bg/03.jpg) no-repeat; background-size:cover; background-position:top;">
            </div>
        </div>
    </section>
    <!-- =======================
                Hero END -->

    <!-- =======================
                Client and rating START -->
    <section class="bg-secondary-grad pt-1">
        <div class="container">
            <div class="row g-4">
                <!-- Title and clients -->
                <div class="col-md-7 mb-3 mb-md-0">
                    <h3 class="mb-4 mb-sm-5 pe-7">Join over <span class="text-purple">1,000+</span> companies using
                        Folio</h3>
                    <!-- Client logos -->
                    <div class="d-flex flex-wrap gap-4 gap-sm-5">
                        <!-- Item -->
                        <div class="swap-logo">
                            <img src="/images/client/logo-gray/01.svg" class="h-30px" alt="client-img">
                            <div class="swap-item">
                                <img src="/images/client/logo-light/01.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-dark/01.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swap-logo">
                            <img src="/images/client/logo-gray/02.svg" class="h-30px" alt="client-img">
                            <div class="swap-item">
                                <img src="/images/client/logo-light/02.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-dark/02.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swap-logo">
                            <img src="/images/client/logo-gray/03.svg" class="h-30px" alt="client-img">
                            <div class="swap-item">
                                <img src="/images/client/logo-light/03.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-dark/03.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swap-logo">
                            <img src="/images/client/logo-gray/04.svg" class="h-30px" alt="client-img">
                            <div class="swap-item">
                                <img src="/images/client/logo-light/04.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-dark/04.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swap-logo">
                            <img src="/images/client/logo-gray/05.svg" class="h-30px" alt="client-img">
                            <div class="swap-item">
                                <img src="/images/client/logo-light/05.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-dark/05.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swap-logo">
                            <img src="/images/client/logo-gray/06.svg" class="h-30px" alt="client-img">
                            <div class="swap-item">
                                <img src="/images/client/logo-light/06.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-dark/06.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swap-logo">
                            <img src="/images/client/logo-gray/07.svg" class="h-30px" alt="client-img">
                            <div class="swap-item">
                                <img src="/images/client/logo-light/07.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-dark/07.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swap-logo">
                            <img src="/images/client/logo-gray/08.svg" class="h-30px" alt="client-img">
                            <div class="swap-item">
                                <img src="/images/client/logo-light/08.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-dark/08.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ratings and button -->
                <div class="col-md-5 col-lg-4 ms-auto">
                    <div class="d-flex gap-4 gap-lg-2 flex-wrap mb-4">
                        <!-- Apple rating -->
                        <div>
                            <!-- Icon -->
                            <img src="/images/elements/apple.svg" class="icon-lg mb-3" alt="">
                            <!-- Rating -->
                            <ul class="list-inline mb-1">
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i></li>
                            </ul>
                            <span>4.8 stars on App Store</span>
                        </div>

                        <!-- Apple rating -->
                        <div class="ms-xl-auto">
                            <!-- Icon -->
                            <img src="/images/elements/gicon.svg" class="icon-lg mb-3" alt="">
                            <!-- Rating -->
                            <ul class="list-inline mb-1">
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i></li>
                            </ul>
                            <span>4.6 stars on Google</span>
                        </div>
                    </div>
                    <!-- Button -->
                    <a class="btn btn-outline-primary icon-link icon-link-hover mt-2" href="{{ route('second', [ 'pages' , 'contact-us-v1']) }}">Join our
                        community<i class="bi bi-arrow-right"></i> </a>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                Client and rating END -->

    <!-- =======================
                About company START -->
    <section class="bg-secondary-grad pt-0 pb-1">
        <div class="container position-relative z-index-2">
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <!-- About content START -->
                    <div class="row align-items-center g-4 g-lg-6 mb-6 mb-md-8">
                        <!-- Images -->
                        <div class="col-sm-8 col-lg-5 position-relative mx-auto">
                            <div class="text-bg-img text-center text-lg-start fw-bold lh-1"
                                style="background:url(/images/about/text-bg.jpg) no-repeat; background-size:cover; background-position:center; background-clip: text;">
                                2002</div>
                            <!-- badge -->
                            <h5 class="bg-body px-4 py-2 position-absolute top-0 start-0 rotate-335">Since</h5>
                        </div>

                        <!-- Content -->
                        <div class="col-lg-7">
                            <h2 class="mb-4">Bringing ideas to life</h2>
                            <p>Our creative experts blend innovation with strategy to turn your vision into reality.</p>
                            <p class="mb-4">We believe great design is strategic. Our approach combines industry
                                knowledge with creative insights to ensure your visual identity is impactful and
                                results-driven.</p>
                            <!-- List -->
                            <ul class="list-inline d-flex flex-wrap gap-2 gap-sm-4 mb-3">
                                <li class="list-inline-item heading-color"> <i
                                        class="bi bi-check-circle text-primary-grad me-1"></i>Creative design
                                </li>
                                <li class="list-inline-item heading-color"> <i
                                        class="bi bi-check-circle text-primary-grad me-1"></i>Strategic insight</li>
                            </ul>
                            <a class="btn btn-white-shadow mb-0 mt-3"
                                href="{{ route('second', ['about', 'services-list']) }}">Explore our services </a>
                        </div>
                    </div>
                    <!-- About content END -->
                </div>
            </div>
        </div>

        <!-- Awards START -->
        <div class="container-fluid">
            <div class="max-width-1550 bg-dark position-relative rounded-4 py-5 py-sm-6 py-lg-8 mb-n9"
                data-bs-theme="dark">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- Title -->
                            <h2 class="mb-4 mb-sm-6">Our awards and achievements</h2>

                            <!-- Award items -->
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                                <!-- Item -->
                                <div class="col">
                                    <img src="/images/elements/fwa-light.svg" class="h-30px mb-3" alt="award logo">
                                    <p class="mb-0">Digital vanguard award</p>
                                </div>

                                <!-- Item -->
                                <div class="col">
                                    <img src="/images/elements/clutch-light.svg" class="h-30px mb-3"
                                        alt="award logo">
                                    <p class="mb-0">Best website of the week</p>
                                </div>

                                <!-- Item -->
                                <div class="col">
                                    <img src="/images/elements/webby.svg" class="h-30px mb-3" alt="award logo">
                                    <p class="mb-0">5X developer awards</p>
                                </div>
                            </div>
                        </div>

                        <!-- Image -->
                        <div class="col-lg-6 ms-auto position-absolute bottom-0 end-0 d-none d-lg-block">
                            <img src="/images/elements/awards-saly.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Awards END -->
    </section>
    <!-- =======================
                About company END -->

    <!-- =======================
                Company history START -->
    <section class="pt-9 overflow-hidden">
        <div class="container pt-6 pt-sm-8">
            <!-- Title and Slider button -->
            <div class="row mb-md-5">
                <!-- Title -->
                <div class="col-sm-8 col-md-7 col-lg-5">
                    <h2>A legacy of creativity and growth</h2>
                </div>

                <!-- Slider arrow -->
                <div class="col-sm-3 col-md-4 ms-auto">
                    <div class="d-flex justify-content-end gap-2 position-relative">
                        <a href="#"
                            class="btn btn-lg btn-secondary btn-icon rounded-circle mb-0 swiper-button-prev"><i
                                class="bi bi-arrow-left"></i></a>
                        <a href="#"
                            class="btn btn-lg btn-secondary btn-icon rounded-circle mb-0 swiper-button-next"><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- History start -->
            <div class="swiper swiper-step swiper-outside-end-n20"
                data-swiper-options='{
			"spaceBetween": 0,
			"loop": true,
			"autoplay": false,
			"navigation":{
				"nextEl":".swiper-button-next",
				"prevEl":".swiper-button-prev"
			},
			"breakpoints": {
				"576": {"slidesPerView": 1},
				"768": {"slidesPerView": 3},
				"992": {"slidesPerView": 3},
				"1200": {"slidesPerView": 4}
			}}'>

                <div class="swiper-wrapper">
                    <!-- History item -->
                    <div class="swiper-slide">
                        <!-- Swiper divider -->
                        <div class="swiper-step-divider"></div>
                        <!-- History card -->
                        <div class="card card-body bg-secondary bg-opacity-50 p-4 me-2 me-sm-5">
                            <h6 class="text-primary">Present - 2024</h6>
                            <p class="mb-0">With a vision for the future, we are excited to explore new
                                opportunities, expand our services, and continue delivering exceptional visual solutions
                                that inspire and engage.</p>
                        </div>
                    </div>

                    <!-- History item -->
                    <div class="swiper-slide">
                        <!-- Swiper divider -->
                        <div class="swiper-step-divider"></div>
                        <!-- History card -->
                        <div class="card card-body bg-secondary bg-opacity-50 p-4 me-2 me-sm-5">
                            <h6 class="text-primary">2022 - Reaching new heights</h6>
                            <p class="mb-0">Our commitment to quality and innovation continued to drive our growth
                                and solidify our position as industry leaders.</p>
                        </div>
                    </div>

                    <!-- History item -->
                    <div class="swiper-slide">
                        <!-- Swiper divider -->
                        <div class="swiper-step-divider"></div>
                        <!-- History card -->
                        <div class="card card-body bg-secondary bg-opacity-50 p-4 me-2 me-sm-5">
                            <h6 class="text-primary">2020 - Adapting and innovating</h6>
                            <p class="mb-0">This year marked a significant pivot towards digital solutions, ensuring
                                we stayed at the forefront of industry trends embracing new collaboration tools.</p>
                        </div>
                    </div>

                    <!-- History item -->
                    <div class="swiper-slide">
                        <!-- Swiper divider -->
                        <div class="swiper-step-divider"></div>
                        <!-- History card -->
                        <div class="card card-body bg-secondary bg-opacity-50 p-4 me-2 me-sm-5">
                            <h6 class="text-primary">2014 - Industry recognition</h6>
                            <p class="mb-0">These accolades not only highlighted our capabilities but also motivated
                                us to continue pushing the boundaries of design.</p>
                        </div>
                    </div>

                    <!-- History item -->
                    <div class="swiper-slide">
                        <!-- Swiper divider -->
                        <div class="swiper-step-divider"></div>
                        <!-- History card -->
                        <div class="card card-body bg-secondary bg-opacity-50 p-4 me-2 me-sm-5">
                            <h6 class="text-primary">2008 - The Beginning</h6>
                            <p class="mb-0">It was founded with a vision to revolutionize the visual design industry.
                                Starting as a small team of passionate designers, we set out to deliver creative
                                solutions that make a difference.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- History END -->
        </div>
    </section>
    <!-- =======================
                Company history END -->

    <!-- =======================
                Review START -->
    <section class="position-relative overflow-hidden py-0">
        <!-- Bg blur -->
        <div class="bg-body blur-6 h-300px w-100 position-absolute bottom-0 start-0 z-index-2 mb-n6"></div>

        <div class="container position-relative mb-n5">
            <!-- Title and content -->
            <div class="text-center mb-4 mb-md-5">
                <h2 class="mb-4">Trusted by industry leaders</h2>
                <!-- Avatar list -->
                <ul class="avatar-group align-items-center justify-content-center mb-2">
                    <li class="avatar avatar-sm">
                        <img class="avatar-img rounded-circle" src="/images/avatar/02.jpg" alt="avatar">
                    </li>
                    <li class="avatar avatar-sm">
                        <img class="avatar-img rounded-circle" src="/images/avatar/05.jpg" alt="avatar">
                    </li>
                    <li class="avatar avatar-sm">
                        <img class="avatar-img rounded-circle" src="/images/avatar/10.jpg" alt="avatar">
                    </li>
                    <li class="avatar avatar-sm">
                        <img class="avatar-img rounded-circle" src="/images/avatar/09.jpg" alt="avatar">
                    </li>
                    <li class="avatar avatar-sm">
                        <img class="avatar-img rounded-circle" src="/images/avatar/06.jpg" alt="avatar">
                    </li>
                </ul>
                <!-- Info -->
                <p>Rated <span class="badge bg-primary">4.9/5.0</span> by over 100.000+ users</p>
            </div>

            <div class="row g-4 filter-container" data-isotope='{"layoutMode": "masonry"}'>
                <!-- Review item -->
                <div class="col-md-6 col-lg-4 grid-item">
                    <div class="card border rounded-4 p-3 m-0">
                        <!-- Card header -->
                        <div class="card-header d-flex justify-content-between pb-0">
                            <!-- Testimonials info -->
                            <div class="d-flex align-items-center">
                                <div class="avatar flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/09.jpg"
                                        alt="avatar">
                                </div>
                                <div class="ms-3">
                                    <p class="heading-color fw-semibold mb-0">Jacqueline Miller</p>
                                    <small>@jaqmilr56</small>
                                </div>
                            </div>
                            <!-- Twitter logo -->
                            <a href="#" class="heading-color fs-5"><i class="bi bi-twitter-x"></i></a>
                        </div>

                        <!-- Card body -->
                        <div class="card-body">
                            <blockquote>
                                <p>Their team went above and beyond to understand our needs and deliver a solution that
                                    exceeded our expectations. They demonstrated throughout the process was truly
                                    impressive.</p>
                            </blockquote>
                            <span class="small text-body-secondary">Feb 22, 2024</span>
                        </div>
                    </div>
                </div>

                <!-- Review item -->
                <div class="col-md-6 col-lg-4 grid-item">
                    <div class="card border rounded-4 p-3 m-0">
                        <!-- Card header -->
                        <div class="card-header d-flex justify-content-between pb-0">
                            <!-- Testimonials info -->
                            <div class="d-flex align-items-center">
                                <div class="avatar flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/02.jpg"
                                        alt="avatar">
                                </div>
                                <div class="ms-3">
                                    <p class="heading-color fw-semibold mb-0">Louis Ferguson</p>
                                    <small>@fregulois2589</small>
                                </div>
                            </div>
                            <!-- Twitter logo -->
                            <a href="#" class="heading-color fs-5"><i class="bi bi-twitter-x"></i></a>
                        </div>

                        <!-- Card body -->
                        <div class="card-body">
                            <blockquote>
                                <p>Frequently partiality possession resolution at or appearance unaffected me. Ye
                                    goodness felicity do disposal dwelling no.</p>
                            </blockquote>
                            <span class="small text-body-secondary">Jan 28, 2024</span>
                        </div>
                    </div>
                </div>

                <!-- Review item -->
                <div class="col-md-6 col-lg-4 grid-item">
                    <div class="card border rounded-4 p-3 m-0">
                        <!-- Card header -->
                        <div class="card-header d-flex justify-content-between pb-0">
                            <!-- Testimonials info -->
                            <div class="d-flex align-items-center">
                                <div class="avatar flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/06.jpg"
                                        alt="avatar">
                                </div>
                                <div class="ms-3">
                                    <p class="heading-color fw-semibold mb-0">Samuel Bishop</p>
                                    <small>@samshop</small>
                                </div>
                            </div>
                            <!-- Twitter logo -->
                            <a href="#" class="heading-color fs-5"><i class="bi bi-twitter-x"></i></a>
                        </div>

                        <!-- Card body -->
                        <div class="card-body">
                            <blockquote>
                                <p>Two before narrow not relied on how except moment myself Dejection assurance Mrs led
                                    certainly So gate at no only none open Betrayed.</p>
                            </blockquote>
                            <span class="small text-body-secondary">Jan 28, 2024</span>
                        </div>
                    </div>
                </div>

                <!-- Review item -->
                <div class="col-md-6 col-lg-4 grid-item">
                    <div class="card border rounded-4 p-3 m-0">
                        <!-- Card header -->
                        <div class="card-header d-flex justify-content-between pb-0">
                            <!-- Testimonials info -->
                            <div class="d-flex align-items-center">
                                <div class="avatar flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/04.jpg"
                                        alt="avatar">
                                </div>
                                <div class="ms-3">
                                    <p class="heading-color fw-semibold mb-0">Emma Watson</p>
                                    <small>@Emson589</small>
                                </div>
                            </div>
                            <!-- Twitter logo -->
                            <a href="#" class="heading-color fs-5"><i class="bi bi-twitter-x"></i></a>
                        </div>

                        <!-- Card body -->
                        <div class="card-body">
                            <blockquote>
                                <p>Was out laughter raptures returned outweigh. Luckily cheered colonel I do we attack
                                    highest enabled. Tried law yet style child. The bore of true of no be deal.</p>
                            </blockquote>
                            <span class="small text-body-secondary">Jan 21, 2024</span>
                        </div>
                    </div>
                </div>

                <!-- Review item -->
                <div class="col-md-6 col-lg-4 grid-item">
                    <div class="card border rounded-4 p-3 m-0">
                        <!-- Card header -->
                        <div class="card-header d-flex justify-content-between pb-0">
                            <!-- Testimonials info -->
                            <div class="d-flex align-items-center">
                                <div class="avatar flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/05.jpg"
                                        alt="avatar">
                                </div>
                                <div class="ms-3">
                                    <p class="heading-color fw-semibold mb-0">Allen Smith</p>
                                    <small>@smith4u</small>
                                </div>
                            </div>
                            <!-- Twitter logo -->
                            <a href="#" class="heading-color fs-5"><i class="bi bi-twitter-x"></i></a>
                        </div>

                        <!-- Card body -->
                        <div class="card-body">
                            <blockquote>
                                <p>Working with this team has been an absolute pleasure. They took the time to
                                    understand our vision and delivered beyond our expectations. The creativity and
                                    professionalism they bring to the table are unmatched.</p>
                            </blockquote>
                            <span class="small text-body-secondary">Jan 21, 2024</span>
                        </div>
                    </div>
                </div>

                <!-- Review item -->
                <div class="col-md-6 col-lg-4 grid-item">
                    <div class="card border rounded-4 p-3 m-0">
                        <!-- Card header -->
                        <div class="card-header d-flex justify-content-between pb-0">
                            <!-- Testimonials info -->
                            <div class="d-flex align-items-center">
                                <div class="avatar flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/08.jpg"
                                        alt="avatar">
                                </div>
                                <div class="ms-3">
                                    <p class="heading-color fw-semibold mb-0">Michael Davis</p>
                                    <small>@Davischhotu</small>
                                </div>
                            </div>
                            <!-- Twitter logo -->
                            <a href="#" class="heading-color fs-5"><i class="bi bi-twitter-x"></i></a>
                        </div>

                        <!-- Card body -->
                        <div class="card-body">
                            <blockquote>
                                <p>Our passion for customer excellence is just one reason why we are the market leader.
                                    We've always worked very hard to give our customers the best experience.</p>
                            </blockquote>
                            <span class="small text-body-secondary">Jan 21, 2024</span>
                        </div>
                    </div>
                </div>

                <!-- Review item -->
                <div class="col-md-6 col-lg-4 grid-item">
                    <div class="card border rounded-4 p-3 m-0">
                        <!-- Card header -->
                        <div class="card-header d-flex justify-content-between pb-0">
                            <!-- Testimonials info -->
                            <div class="d-flex align-items-center">
                                <div class="avatar flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/01.jpg"
                                        alt="avatar">
                                </div>
                                <div class="ms-3">
                                    <p class="heading-color fw-semibold mb-0">Sarah Brown</p>
                                    <small>@Brownmunde</small>
                                </div>
                            </div>
                            <!-- Twitter logo -->
                            <a href="#" class="heading-color fs-5"><i class="bi bi-twitter-x"></i></a>
                        </div>

                        <!-- Card body -->
                        <div class="card-body">
                            <blockquote>
                                <p>Was out laughter raptures returned outweigh. Luckily cheered colonel I do we attack
                                    highest enabled. Tried law yet style child. The bore of true of no be deal.</p>
                            </blockquote>
                            <span class="small text-body-secondary">Jan 21, 2024</span>
                        </div>
                    </div>
                </div>

                <!-- Review item -->
                <div class="col-md-6 col-lg-4 grid-item">
                    <div class="card border rounded-4 p-3 m-0">
                        <!-- Card header -->
                        <div class="card-header d-flex justify-content-between pb-0">
                            <!-- Testimonials info -->
                            <div class="d-flex align-items-center">
                                <div class="avatar flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/08.jpg"
                                        alt="avatar">
                                </div>
                                <div class="ms-3">
                                    <p class="heading-color fw-semibold mb-0">Allen Smith</p>
                                    <small>@smith4u</small>
                                </div>
                            </div>
                            <!-- Twitter logo -->
                            <a href="#" class="heading-color fs-5"><i class="bi bi-twitter-x"></i></a>
                        </div>

                        <!-- Card body -->
                        <div class="card-body">
                            <blockquote>
                                <p>Working with this team has been an absolute pleasure. They took the time to
                                    understand our vision and delivered beyond our expectations. The creativity and
                                    professionalism they bring to the table are unmatched.</p>
                            </blockquote>
                            <span class="small text-body-secondary">Jan 21, 2024</span>
                        </div>
                    </div>
                </div>

                <!-- Review item -->
                <div class="col-md-6 col-lg-4 grid-item">
                    <div class="card border rounded-4 p-3 m-0">
                        <!-- Card header -->
                        <div class="card-header d-flex justify-content-between pb-0">
                            <!-- Testimonials info -->
                            <div class="d-flex align-items-center">
                                <div class="avatar flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/02.jpg"
                                        alt="avatar">
                                </div>
                                <div class="ms-3">
                                    <p class="heading-color fw-semibold mb-0">Michael Davis</p>
                                    <small>@Davischhotu</small>
                                </div>
                            </div>
                            <!-- Twitter logo -->
                            <a href="#" class="heading-color fs-5"><i class="bi bi-twitter-x"></i></a>
                        </div>

                        <!-- Card body -->
                        <div class="card-body">
                            <blockquote>
                                <p>Our passion for customer excellence is just one reason why we are the market leader.
                                    We've always worked very hard to give our customers the best experience.</p>
                            </blockquote>
                            <span class="small text-body-secondary">Jan 21, 2024</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Button -->
        <div class="position-absolute bottom-0 start-50 translate-middle-x z-index-9 mb-4 mb-sm-7">
            <a class="btn btn-primary-grad icon-link icon-link-hover text-nowrap" href="#">View all reviews<i
                    class="bi bi-arrow-right"></i> </a>
        </div>
    </section>
    <!-- =======================
                Review END -->

    <!-- =======================
                CTA START -->
    <section class="pt-6 pt-sm-5">
        <div class="container">
            <div class="bg-secondary-grad position-relative rounded-3 overflow-hidden p-4 p-sm-6">

                <!-- BG pattern -->
                <div class="position-absolute end-0 top-0 rotate-343 mt-n5 me-7 d-none d-sm-block">
                    <img src="/images/elements/geo-grad-pattern.svg" class="h-500px opacity-3" alt="bg pattern">
                </div>

                <!-- BG pattern -->
                <div class="position-absolute start-0 top-0 rotate-343 mt-n5 ms-n8">
                    <img src="/images/elements/geo-grad-pattern.svg" class="h-300px opacity-1" alt="bg pattern">
                </div>

                <div class="row g-4 align-items-center position-relative">
                    <!-- Title and list -->
                    <div class="col-xl-6">
                        <h2>Ready to bring your <span class="text-primary-grad">vision</span> into life?</h2>
                        <ul class="list-inline d-flex flex-wrap gap-2 mb-0 mt-3">
                            <li class="list-inline-item heading-color"> <i
                                    class="bi bi-check-circle text-success me-1"></i>No Credit Card Required
                            </li>
                            <li class="list-inline-item heading-color"> <i
                                    class="bi bi-check-circle text-success me-1"></i>14 days free trial</li>
                        </ul>
                    </div>

                    <!-- Button -->
                    <div class="col-xl-6 text-xl-end">
                        <a href="{{ route('second', [ 'pages' , 'contact-us-v1']) }}" class="btn btn-dark mb-0">Let's work together</a>
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

<!-- Schedule call offcanvas content START -->
<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="scheduleCall"
    aria-labelledby="scheduleCallLabel">
    <div class="offcanvas-header">
        <h6 class="offcanvas-title" id="scheduleCallLabel">Schedule a call</h6>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <!-- Form START -->
        <form class="row g-3">
            <div class="col-12">
                <label class="form-label">Your name *</label>
                <input type="text" class="form-control form-control-sm" placeholder="Full name">
            </div>

            <div class="col-12">
                <label class="form-label">Email address *</label>
                <input type="email" class="form-control form-control-sm" id="floatingInput"
                    placeholder="name@example.com">
            </div>

            <div class="col-6">
                <label class="form-label">Schedule date *</label>
                <input type="date" class="form-control form-control-sm">
            </div>

            <div class="col-6">
                <label class="form-label">Schedule date *</label>
                <input type="time" class="form-control form-control-sm">
            </div>

            <div class="col-12">
                <label class="form-label">Phone number *</label>
                <input type="text" class="form-control form-control-sm" placeholder="(xxx) xx xxxx">
            </div>

            <div class="col-12">
                <label class="form-label">Subject *</label>
                <input type="text" class="form-control form-control-sm" placeholder="Subject name">
            </div>

            <div class="col-12">
                <label class="form-label">Message *</label>
                <textarea class="form-control" placeholder="Write your message here...." id="floatingTextarea2"
                    style="height: 150px"></textarea>
            </div>
            <!-- Button -->
            <button class="btn btn-primary mb-0">Send a message</button>
        </form>
        <!-- Form END -->
    </div>
</div>
<!-- Schedule call offcanvas content END -->

<!-- Back to top -->
<div class="back-top"></div>
@endsection