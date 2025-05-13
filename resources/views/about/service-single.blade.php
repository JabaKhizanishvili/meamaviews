@extends('layouts.landing', ['headerClass' => 'header-absolute', 'buttons' => false])

@section('css')
@vite(['node_modules/swiper/swiper-bundle.min.css'])
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

    <!-- Sign up button -->
    <li class="nav-item ms-2 d-none d-sm-block">
        <a href="{{ route('third', [ 'pages' , 'auth','sign-up']) }}" class="btn btn-sm btn-primary-grad mb-0">Sign up</a>
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
                Content START -->
    <section class="position-relative pt-8 pt-xl-9 pb-0 overflow-hidden mb-n6">
        <!-- Bg and curve -->
        <div class="bg-secondary-grad h-500px w-100 position-absolute bottom-0 start-0">
            <!-- Curve decoration -->
            <span>
                <svg class="mt-n2" viewBox="0 0 1950 135" style="enable-background:new 0 0 1950 135;"
                    xml:space="preserve">
                    <path class="fill-body"
                        d="M1480.3,110.5c238.7,18.9,359.6-42.2,469.7-80.7V1.7L0,0v129.4c57.3-41.7,287.7-15.9,446.4,0 c170.6,17.1,342.3-15.8,440.8-35.8C1104,49.6,1274.8,94.2,1480.3,110.5z" />
                </svg>
            </span>
        </div>

        <!-- Main hero -->
        <div class="container position-relative" data-sticky-container>
            <div class="row">
                <!-- Title and contents -->
                <div class="col-md-6">
                    <!-- Breadcrumb -->
                    <nav class="mb-2" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="{{ route('any', 'index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">service detail</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h1 class="display-5 mb-5">Web design and development</h1>

                    <!-- Button -->
                    <a class="btn btn-dark icon-link icon-link-hover" href="#">Start a project<i
                            class="bi bi-arrow-right"></i> </a>

                    <!-- Overview START -->
                    <div class="mt-5 mt-md-9">
                        <h5>Overview</h5>
                        <p>A brief introduction to your web development services. This can be a few sentences
                            summarizing what you do and the unique value you bring to clients.</p>
                        <p>At Folio, we specialize in creating custom web solutions that drive business growth. Our
                            expert team delivers cutting-edge websites tailored to meet your unique needs. Highlight the
                            main benefits of your web development services. This helps visitors quickly understand why
                            they should choose you over competitors.</p>
                        <p>Highlight the main benefits of your web development services. This helps visitors quickly
                            understand why they should choose you over competitors.</p>
                    </div>
                    <!-- Overview END -->
                </div>

                <!-- Image -->
                <div class="col-md-5 ms-auto">
                    <div data-sticky data-margin-top="100" data-sticky-for="576">
                        <div class="rounded-4 h-400px h-lg-500px"
                            style="background:url(/images/services/4by3/03.jpg) no-repeat; background-size:cover; background-position:center;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                Content END -->

    <!-- =======================
                Detail START -->
    <section class="bg-secondary-grad overflow-hidden mt-6 pt-7">
        <div class="container pb-8">

            <!-- Title -->
            <h5 class="mb-4">Key benefits</h5>

            <!-- Benefits START -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 g-4">
                <!-- Item -->
                <div class="col">
                    <div class="card card-body h-100 rounded-3 p-4">
                        <h6 class="mb-3">Custom Design</h6>
                        <p class="mb-0">We create tailor-made websites that reflect your brand's identity and engage
                            your audience.</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col">
                    <div class="card card-body h-100 rounded-3 p-4">
                        <h6 class="mb-3">Scalability</h6>
                        <p class="mb-0">Our solutions are built to grow with your business, ensuring long-term
                            success.</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col">
                    <div class="card card-body h-100 rounded-3 p-4">
                        <h6 class="mb-3">Performance optimization</h6>
                        <p class="mb-0">We ensure fast loading times and smooth user experiences to boost.</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col">
                    <div class="card card-body h-100 rounded-3 p-4">
                        <h6 class="mb-3">SEO-friendly</h6>
                        <p class="mb-0">Our websites are optimized for search engines to help you rank higher and
                            attract more traffic.</p>
                    </div>
                </div>
            </div>
            <!-- Benefits END -->

            <!-- Whats included START -->
            <div class="row g-4 mt-5 mt-md-7">
                <!-- Image -->
                <div class="col-lg-6 pe-lg-6">
                    <img src="/images/services/01.jpg" class="rounded-4" alt="service image">
                </div>

                <!-- Content -->
                <div class="col-lg-6">
                    <h2>What's included in web development?</h2>

                    <!-- Accordion START -->
                    <div class="accordion accordion-icon accordion-icon-start mt-4" id="accordionExample2">
                        <!-- Accordion item -->
                        <div class="accordion-item mb-2">
                            <h6 class="accordion-header" id="heading-1">
                                <button class="accordion-button py-2" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                    <span class="lead fw-bold">Frontend development</span>
                                </button>
                            </h6>
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    We use the latest technologies like HTML5, CSS3, JavaScript, and frameworks such as
                                    React and Angular to create stunning interfaces that provide seamless user
                                    experiences across all devices.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion item -->
                        <div class="accordion-item mb-2">
                            <h6 class="accordion-header" id="heading-2">
                                <button class="accordion-button py-2 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false"
                                    aria-controls="collapse-2">
                                    <span class="lead fw-bold">Backend development</span>
                                </button>
                            </h6>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    We build robust and scalable backend systems that power your website. Our expertise
                                    includes server-side scripting, database management, and API integration using
                                    technologies like Node.js, Python, Ruby on Rails, and PHP. We ensure your website
                                    performs efficiently and securely.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion item -->
                        <div class="accordion-item mb-2">
                            <h6 class="accordion-header" id="heading-3">
                                <button class="accordion-button py-2 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false"
                                    aria-controls="collapse-3">
                                    <span class="lead fw-bold">E-commerce solutions</span>
                                </button>
                            </h6>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    Transform your business with our comprehensive e-commerce solutions. We develop
                                    custom online stores with features like product catalogs, shopping carts, payment
                                    gateways, and inventory management. Our solutions are designed to enhance user
                                    experience and boost sal
                                </div>
                            </div>
                        </div>

                        <!-- Accordion item -->
                        <div class="accordion-item mb-2">
                            <h6 class="accordion-header" id="heading-4">
                                <button class="accordion-button py-2 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false"
                                    aria-controls="collapse-4">
                                    <span class="lead fw-bold">Content management systems (CMS)</span>
                                </button>
                            </h6>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    We offer custom CMS development and integration services to give you full control
                                    over your website content. Our expertise includes popular platforms like WordPress,
                                    Joomla, and Drupal. We create intuitive interfaces that make it easy to update and
                                    manage your website.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion item -->
                        <div class="accordion-item mb-2">
                            <h6 class="accordion-header" id="heading-5">
                                <button class="accordion-button py-2 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false"
                                    aria-controls="collapse-5">
                                    <span class="lead fw-bold">Custom web applications</span>
                                </button>
                            </h6>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    Our team develops bespoke web applications tailored to your specific business needs.
                                    Whether you need a custom CRM, ERP, or any other type of web application, we
                                    leverage the latest technologies to deliver solutions that enhance your business
                                    processes.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion END -->
                </div>
            </div>
            <!-- Whats included END -->

            <!-- Technology used START -->
            <div class="inner-container text-center mt-7">
                <h4>Technologies used</h4>
                <!-- Logo list -->
                <ul class="list-inline d-flex justify-content-center flex-wrap gap-4 mt-4">
                    <!-- Logo item -->
                    <li class="list-inline-item me-0">
                        <a href="#"
                            class="icon-xl btn-transition bg-body d-flex justify-content-center align-items-center rounded-2">
                            <img src="/images/client/icons/08.svg" class="h-40px" alt="icon">
                        </a>
                    </li>

                    <!-- Logo item -->
                    <li class="list-inline-item me-0">
                        <a href="#"
                            class="icon-xl btn-transition bg-body d-flex justify-content-center align-items-center rounded-2">
                            <img src="/images/client/icons/04.svg" class="h-40px" alt="icon">
                        </a>
                    </li>

                    <!-- Logo item -->
                    <li class="list-inline-item me-0">
                        <a href="#"
                            class="icon-xl btn-transition bg-body d-flex justify-content-center align-items-center rounded-2">
                            <img src="/images/client/icons/12.svg" class="h-40px" alt="icon">
                        </a>
                    </li>

                    <!-- Logo item -->
                    <li class="list-inline-item me-0">
                        <a href="#"
                            class="icon-xl btn-transition bg-body d-flex justify-content-center align-items-center rounded-2">
                            <img src="/images/client/icons/09.svg" class="h-40px" alt="icon">
                        </a>
                    </li>

                    <!-- Logo item -->
                    <li class="list-inline-item me-0">
                        <a href="#"
                            class="icon-xl btn-transition bg-body d-flex justify-content-center align-items-center rounded-2">
                            <img src="/images/client/icons/05.svg" class="h-40px" alt="icon">
                        </a>
                    </li>

                    <!-- Logo item -->
                    <li class="list-inline-item me-0">
                        <a href="#"
                            class="icon-xl btn-transition bg-body d-flex justify-content-center align-items-center rounded-2">
                            <img src="/images/client/icons/03.svg" class="h-40px" alt="icon">
                        </a>
                    </li>

                    <!-- Logo item -->
                    <li class="list-inline-item me-0">
                        <a href="#"
                            class="icon-xl btn-transition bg-body d-flex justify-content-center align-items-center rounded-2">
                            <img src="/images/client/icons/02.svg" class="h-40px" alt="icon">
                        </a>
                    </li>

                    <!-- Logo item -->
                    <li class="list-inline-item me-0">
                        <a href="#"
                            class="icon-xl btn-transition bg-body d-flex justify-content-center align-items-center rounded-2">
                            <img src="/images/client/icons/10.svg" class="h-40px" alt="icon">
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Technology used END -->
        </div>
    </section>
    <!-- =======================
                Detail END -->

    <!-- =======================
                Process START -->
    <section class="pt-0 mt-n9">
        <div class="container-fluid position-relative">
            <div class="max-width-1550 bg-dark position-relative rounded-4 overflow-hidden py-5 py-sm-6 py-lg-8"
                data-bs-theme="dark">
                <div class="container position-relative">
                    <!-- Title -->
                    <h2 class="mb-4 mb-lg-6">Step-by-Step Process</h2>

                    <!-- Steps START -->
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                        <!-- Step item -->
                        <div class="col">
                            <h4 class="text-primary-grad">01</h4>
                            <h6>Discovery & Planning</h6>
                            <p class="mb-0">We begin by understanding your business goals, target audience, and
                                project requirements.</p>
                        </div>

                        <!-- Step item -->
                        <div class="col">
                            <h4 class="text-primary-grad">02</h4>
                            <h6>Design & Prototyping</h6>
                            <p class="mb-0">Our design team creates wireframes and prototypes based on the project
                                plan.</p>
                        </div>

                        <!-- Step item -->
                        <div class="col">
                            <h4 class="text-primary-grad">03</h4>
                            <h6>Development</h6>
                            <p class="mb-0">In this phase, our developers bring the design to life using the latest
                                technologies and best practices.</p>
                        </div>

                        <!-- Step item -->
                        <div class="col">
                            <h4 class="text-primary-grad">04</h4>
                            <h6>Testing & Launch</h6>
                            <p class="mb-0">Before going live, we conduct thorough testing to identify and fix any
                                issues.</p>
                        </div>
                    </div>
                    <!-- Steps END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                Process END -->

    <!-- =======================
                Showcase START -->
    <section class="pt-0">
        <div class="container">
            <div class="row g-4">
                <!-- Title and arrow button -->
                <div class="col-lg-4 text-center text-lg-start">
                    <h2 class="mb-lg-4">Showcase of previous projects</h2>
                    <p>Explore our diverse portfolio showcasing the range and quality of our web development projects.
                    </p>
                    <!-- Slider button -->
                    <div
                        class="d-flex justify-content-center justify-content-lg-start gap-3 position-relative mt-lg-4">
                        <a href="#"
                            class="btn btn-secondary btn-lg btn-icon rounded-circle mb-0 swiper-button-prev-team"><i
                                class="bi bi-arrow-left"></i></a>
                        <a href="#"
                            class="btn btn-secondary btn-lg btn-icon rounded-circle mb-0 swiper-button-next-team"><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Showcase START -->
                <div class="col-lg-8 ps-xl-6">
                    <!-- Slider START -->
                    <div class="swiper"
                        data-swiper-options='{
					"spaceBetween": 30,
					"autoplay":false,
					"navigation":{
						"nextEl":".swiper-button-next-team",
						"prevEl":".swiper-button-prev-team"
					}}'>
                        <div class="swiper-wrapper">
                            <!-- Case study item -->
                            <div class="swiper-slide">
                                <div class="card bg-secondary bg-opacity-50 rounded-4 overflow-hidden mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-5">
                                            <img src="/images/portfolio/4by4/01.jpg"
                                                class="img-fluid rounded-start h-100" alt="...">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body d-flex flex-column align-items-start h-100 p-4">
                                                <!-- Client logo -->
                                                <img src="/images/client/logo-light/01.svg"
                                                    class="dark-mode-item h-30px mb-3" alt="client logo">
                                                <img src="/images/client/logo-dark/01.svg"
                                                    class="light-mode-item h-30px mb-3" alt="client logo">

                                                <h6 class="card-title">Corporate website for consulting</h6>
                                                <p class="card-text">Consulting wanted a professional online presence
                                                    to attract high-profile clients.</p>

                                                <div
                                                    class="d-sm-flex justify-content-between align-items-center mt-auto w-100">
                                                    <!-- Progress -->
                                                    <div class="mb-3 mb-sm-0">
                                                        <h4 class="text-primary-grad mb-0">40%</h4>
                                                        <small>Increase in web traffic.</small>
                                                    </div>

                                                    <!-- Button -->
                                                    <a href="#"
                                                        class="btn btn-sm btn-dark stretched-link mb-0">View detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Case study item -->
                            <div class="swiper-slide">
                                <div class="card bg-secondary bg-opacity-50 rounded-4 overflow-hidden mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-5">
                                            <img src="/images/portfolio/4by4/03.jpg"
                                                class="img-fluid rounded-start h-100" alt="...">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body d-flex flex-column align-items-start h-100 p-4">
                                                <!-- Client logo -->
                                                <img src="/images/client/logo-light/05.svg"
                                                    class="dark-mode-item h-30px mb-3" alt="client logo">
                                                <img src="/images/client/logo-dark/05.svg"
                                                    class="light-mode-item h-30px mb-3" alt="client logo">

                                                <h6 class="card-title">AI-Driven customer insights platform</h6>
                                                <p class="card-text">Consulting wanted a professional online presence
                                                    to attract high-profile clients.</p>

                                                <div
                                                    class="d-sm-flex justify-content-between align-items-center mt-auto w-100">
                                                    <!-- Progress -->
                                                    <div class="mb-3 mb-sm-0">
                                                        <h4 class="text-primary-grad mb-0">60%</h4>
                                                        <small>Increase in web traffic.</small>
                                                    </div>

                                                    <!-- Button -->
                                                    <a href="#"
                                                        class="btn btn-sm btn-dark stretched-link mb-0">View detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider END -->
                </div>
                <!-- Showcase END -->
            </div>
        </div>
    </section>
    <!-- =======================
                Showcase END -->

    <!-- =======================
                Testimonials START -->
    <section class="bg-body position-relative py-0">
        <div class="container position-relative z-index-9">
            <!-- Title -->
            <div class="row align-items-center mb-4 mb-md-5">
                <div class="col-md-7 col-xl-5">
                    <h2 class="mb-0">Hear from our happy customers</h2>
                </div>

                <div class="col-md-5 ms-sm-auto text-sm-end mt-5 mt-sm-0">
                    <!-- Add pagination and navigation elements here -->
                    <div class="d-flex gap-2 justify-content-sm-end">
                        <a href="#"
                            class="btn btn-primary-grad btn-icon btn-lg rounded-circle mb-0 swiper-button-prev"><i
                                class="bi bi-arrow-left fa-sm"></i></a>
                        <a href="#"
                            class="btn btn-primary-grad btn-icon btn-lg rounded-circle mb-0 swiper-button-next"><i
                                class="bi bi-arrow-right fa-sm"></i></a>
                    </div>
                </div>
            </div>

            <!-- Testimonials START -->
            <div class="swiper"
                data-swiper-options='{
				"spaceBetween": 30,
				"breakpoints": {
					"576": {"slidesPerView": 1},
					"768": {"slidesPerView": 2},
					"992": {"slidesPerView": 3}
				},
				"navigation":{
					"nextEl":".swiper-button-next",
					"prevEl":".swiper-button-prev"
				}}'>

                <div class="swiper-wrapper">
                    <!-- Testimonials item -->
                    <div class="swiper-slide">
                        <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                            <!-- Card body -->
                            <div class="card-body p-0 mb-4">
                                <!-- Rating star -->
                                <ul class="list-inline mb-3">
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i>
                                    </li>
                                </ul>
                                <!-- Testimonials text -->
                                <blockquote>
                                    <p class="heading-color mb-0">Their team went above and beyond to understand our
                                        needs and deliver a solution that exceeded our expectations. They demonstrated
                                        throughout the process was truly impressive.</p>
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
                        <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                            <!-- Card body -->
                            <div class="card-body p-0 mb-4">
                                <!-- Rating star -->
                                <ul class="list-inline mb-3">
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
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
                        <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                            <!-- Card body -->
                            <div class="card-body p-0 mb-4">
                                <!-- Rating star -->
                                <ul class="list-inline mb-3">
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i>
                                    </li>
                                </ul>
                                <!-- Testimonials text -->
                                <blockquote>
                                    <p class="heading-color mb-0">Was out laughter raptures returned outweigh. Luckily
                                        cheered colonel I do we attack highest enabled. Tried law yet style child. The
                                        bore of true of no be deal.</p>
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
                        <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                            <!-- Card body -->
                            <div class="card-body p-0 mb-4">
                                <!-- Rating star -->
                                <ul class="list-inline mb-3">
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i>
                                    </li>
                                </ul>
                                <!-- Testimonials text -->
                                <blockquote>
                                    <p class="heading-color mb-0">Our passion for customer excellence is just one
                                        reason why we are the market leader. We've always worked very hard to give our
                                        customers the best experience.</p>
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
                        <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                            <!-- Card body -->
                            <div class="card-body p-0 mb-4">
                                <!-- Rating star -->
                                <ul class="list-inline mb-3">
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i>
                                    </li>
                                </ul>
                                <!-- Testimonials text -->
                                <blockquote>
                                    <p class="heading-color mb-0">Was out laughter raptures returned outweigh. Luckily
                                        cheered colonel I do we attack highest enabled. Tried law yet style child. The
                                        bore of true of no be deal.</p>
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
        </div>
    </section>
    <!-- =======================
                Testimonials END -->

    <!-- =======================
                Contact us START-->
    <section class="pb-0 overflow-hidden">
        <div class="bg-secondary-grad position-relative pb-8">
            <!-- Skew bg decoration -->
            <span>
                <svg class="position-abslolute top-0 start-0 mt-n3 mt-sm-n1" viewBox="0 0 1920 108"
                    style="enable-background:new 0 0 1920 108;" xml:space="preserve">
                    <path class="fill-body" d="M0,0l1920,1.5V108L0,0z" />
                </svg>
            </span>

            <div class="container position-relative pt-5 pt-lg-0">
                <div class="row align-items-center g-4">
                    <!-- Content -->
                    <div class="col-lg-5">
                        <span class="hand-wave-animate h2">🖐️</span>
                        <h2 class="mb-3 h1">Say Hello</h2>
                        <p>Our friendly team is ready to assist you with whatever you need.</p>

                        <!-- Contact info -->
                        <div class="row row-cols-1 row-cols-sm-2 g-4 mt-3 mt-md-5">
                            <!-- Call us -->
                            <div class="col">
                                <span class="fs-3 text-primary-grad"><i class="bi bi-headset"></i></span>
                                <h6 class="my-2 my-sm-3">Call us</h6>
                                <p class="mb-2">Let's work together towards a common goal - get in touch!</p>
                                <a href="#" class="heading-color hover-underline-animation">+91 222 555 666</a>
                            </div>

                            <!-- Email us -->
                            <div class="col">
                                <span class="fs-3 text-primary-grad"><i class="bi bi-envelope"></i></span>
                                <h6 class="my-2 my-sm-3">Email us</h6>
                                <p class="mb-2">We respond to all inquiries within 24 hours.</p>
                                <a href="#"
                                    class="heading-color hover-underline-animation">example@gmail.com</a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact form -->
                    <div class="col-lg-6 ms-auto mt-5 mt-lg-n7">
                        <div class="card card-body rounded-4 shadow-primary-lg p-4">
                            <form class="row form-border-transparent g-3">
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
                                    <input type="email" class="form-control bg-secondary" id="floatingInput"
                                        placeholder="name@example.com">
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
                                    <textarea class="form-control bg-secondary" id="floatingTextarea2" style="height: 150px"></textarea>
                                </div>

                                <div class="col-12 mt-4">
                                    <!-- Button -->
                                    <button class="btn btn-primary mb-2 mb-md-0">Send a message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                Contact us END-->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer')

<!-- Back to top -->
<div class="back-top"></div>
@endsection