@extends('layouts.landing', ['headerClass' => 'header-absolute', 'buttons' => true])

@section('css')
{{--@vite(['node_modules/swiper/swiper-bundle.min.css', 'node_modules/glightbox/dist/css/glightbox.css'])--}}
@vite(['resources/js/app.js'])
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
                Hero START -->
    <section class="bg-secondary position-relative pt-xl-8">
        <!-- Decoration START -->
        <!-- Grad blur -->
        <div class="position-absolute top-0 start-0 mt-n9 ms-n5">
            <img src="/images/elements/grad-shape/blur-decoration.svg" class="blur-7 opacity-2" alt="Grad shape">
        </div>

        <!-- Grad blur -->
        <div class="position-absolute top-0 start-50 mt-n9 ms-n9">
            <img src="/images/elements/grad-shape/blur-decoration.svg" class="blur-8 opacity-1" alt="Grad shape">
        </div>
        <!-- Decoration START -->

        <div class="container position-relative pt-4 pt-sm-5">

            <!-- Clay decoration -->
            <div class="position-absolute top-50 start-0 translate-middle mt-5">
                <img src="/images/elements/clay-decoration.png" alt="Clay-decoration">
            </div>

            <!-- Title and buttons START -->
            <div class="inner-container text-center align-items-center mb-5 mb-md-7">
                <!-- Breadcrumb -->
                <nav class="mb-2 justify-content-center d-flex" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item"><a href="{{ route('any', 'index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About us</li>
                    </ol>
                </nav>

                <!-- Title -->
                <h1 class="display-5 mb-4">Elevating <span class="text-primary-grad">Brands</span> with Distinctive
                    Visuals</h1>

                <!-- Buttons -->
                <div class="d-md-flex justify-content-center align-items-center py-2">
                    <a href="{{ route('second', ['about', 'services-grid']) }}"
                        class="btn btn-white-shadow mb-4 mb-md-0">Explore our services</a>
                    <!-- Video button -->
                    <div class="d-flex align-items-center justify-content-center text-start ms-0 ms-md-4">
                        <a data-glightbox data-gallery="office-tour" href="https://www.youtube.com/embed/tXHviS-4ygo"
                            class="btn btn-lg btn-round btn-dark mb-0 flex-shrink-0 stretched-link">
                            <i class="bi bi-play-fill fs-5"></i>
                        </a>
                        <p class="mb-0 ms-3 heading-color" style="max-width: 13rem;">Learn about our journey and growth
                        </p>
                    </div>
                </div>
            </div>
            <!-- Title and buttons END -->

            <!-- Skill sets START -->
            <div class="row position-relative g-4 g-lg-5">
                <!-- Item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-3">
                        <!-- Card header -->
                        <div class="card-header bg-transparent mb-4 mb-sm-6">
                            <p class="heading-color">Engaging users across our 2024 platforms</p>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer bg-transparent d-flex mt-auto">
                            <h4 class="purecounter h2 mb-0" data-purecounter-start="0" data-purecounter-end="3500"
                                data-purecounter-delay="300">0</h4>
                            <span class="h2 text-primary mb-0">+</span>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-3">
                        <!-- Card header -->
                        <div class="card-header bg-transparent mb-4 mb-sm-6">
                            <p class="heading-color">Showcasing creative excellence in every project</p>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer bg-transparent d-flex mt-auto">
                            <span class="text-success mb-0"><i class="bi bi-arrow-up"></i></span>
                            <h4 class="purecounter h2 mb-0" data-purecounter-start="0" data-purecounter-end="105"
                                data-purecounter-delay="300">0</h4>
                            <span class="h2 text-primary mb-0">+</span>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-3">
                        <!-- Card header -->
                        <div class="card-header bg-transparent mb-4 mb-sm-6">
                            <p class="heading-color">Track and analyze business reports</p>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer bg-transparent d-flex mt-auto">
                            <h4 class="purecounter h2 mb-0" data-purecounter-start="0" data-purecounter-end="97"
                                data-purecounter-delay="300">0</h4>
                            <span class="h2 text-primary mb-0">%</span>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-3">
                        <!-- Card header -->
                        <div class="card-header bg-transparent mb-4 mb-sm-6">
                            <p class="heading-color">Enhanced growth in onboarding conversions</p>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer bg-transparent d-flex mt-auto">
                            <h4 class="purecounter h2 mb-0" data-purecounter-start="0" data-purecounter-end="68"
                                data-purecounter-delay="300">0</h4>
                            <span class="h2 text-primary mb-0">%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Skill sets END -->
        </div>
    </section>
    <!-- =======================
                Hero END -->

    <!-- =======================
                About START -->
    <section class="bg-secondary pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <!-- About content START -->
                    <div class="row g-4 g-lg-6 mb-6 mb-md-8">
                        <!-- Images -->
                        <div class="col-md-7 position-relative">
                            <!-- vector blur decoration -->
                            <div class="position-absolute bottom-0 start-50 translate-middle-x ms-n5">
                                <img src="/images/elements/grad-shape/11.png" class="blur-2" alt="Decoration shape">
                            </div>
                            <!-- Blur decoration -->
                            <div class="position-absolute top-0 start-50 translate-middle-x ms-7">
                                <img src="/images/elements/grad-shape/blur-decoration.svg" class="opacity-3 blur-8"
                                    alt="Grad shape">
                            </div>
                            <!-- Images -->
                            <div class="row position-relative">
                                <div class="col-sm-6">
                                    <img src="/images/about/08.jpg" class="rounded-4" alt="">
                                </div>
                                <div class="col-sm-6 mt-5 mt-sm-8">
                                    <img src="/images/about/09.jpg" class="rounded-4" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="col-md-5">
                            <h2 class="mb-3">Crafting stunning visuals</h2>
                            <p>We specialize in elevating brands through distinctive solutions that captivate and
                                inspire.</p>
                            <p>Our creative team combines innovative design with <b>strategic insights to deliver
                                    visuals</b> that make a lasting impact. From concept to execution, we ensure your
                                brand stands out in a crowded marketplace.</p>
                            <p>We focus on creating high-impact visuals that leave a lasting impression.</p>
                            <a class="btn btn-primary icon-link icon-link-hover mt-3"
                                href="{{ route('second', [ 'portfolio' ,'grid']) }}">Explore our work<i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                    <!-- About content END -->

                    <!-- Features START -->
                    <div class="row g-4 g-lg-5">
                        <!-- Feature item -->
                        <div class="col-md-4">
                            <h6 class="mb-2"><i class="bi bi-lightning-charge-fill text-success me-2"></i>Our
                                mission</h6>
                            <p>We empower brands with visually compelling solutions that drive engagement and leave a
                                lasting impact.</p>
                        </div>

                        <!-- Feature item -->
                        <div class="col-md-4">
                            <h6 class="mb-2"><i class="bi bi-rocket-takeoff-fill text-pink me-2"></i>Our vision</h6>
                            <p>Folio is to be recognized as a leading force in the world of visual communication.</p>
                        </div>

                        <!-- Feature item -->
                        <div class="col-md-4">
                            <h6 class="mb-2"><i class="bi bi-bullseye text-warning me-2"></i>Our goal</h6>
                            <p>Our aim is to not only meet our clients' objectives but to surpass them, earning their
                                trust and loyalty along the way.</p>
                        </div>
                    </div>
                    <!-- Features END -->
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
                About END -->

    <!-- =======================
                Team START -->
    <section class="bg-secondary position-relative overflow-hidden py-0">
        <!-- Curve bg -->
        <span class="position-absolute start-0 bottom-0 mb-n1">
            <svg class="fill-body" width="1950" height="237" viewBox="0 0 1950 237" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M0 236.442H1949.5V72.4424C1232.3 -58.7576 351 17.7757 0 72.4424V236.442Z" />
            </svg>
        </span>

        <div class="container-fluid position-relative">
            <!-- Rocket vector -->
            <div class="position-absolute end-0 bottom-0 me-6 z-index-9 d-none d-lg-block">
                <img src="/images/elements/rocket-03.png" class="h-200px" alt="rocket image">
            </div>

            <div class="max-width-1550 bg-dark position-relative rounded-4 overflow-hidden py-5 py-sm-6 py-lg-8"
                data-bs-theme="dark">
                <!-- Blur decoration -->
                <div class="position-absolute top-0 start-50 translate-middle">
                    <img src="/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-2 blur-9"
                        alt="Grad shape">
                </div>

                <!-- Blur decoration -->
                <div class="position-absolute bottom-0 start-0 mb-n8 ms-n5">
                    <img src="/images/elements/grad-shape/blur-decoration.svg" class="blur-7 opacity-2"
                        alt="Grad shape">
                </div>

                <div class="container position-relative">
                    <!-- Title -->
                    <h2 class="text-center mb-4 mb-md-6">Meet our creative team</h2>

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4 justify-content-center">
                        <!-- Team item -->
                        <div class="col">
                            <div class="card card-body bg-transparent text-center p-0">
                                <!-- Image -->
                                <div class="avatar avatar-xxl mx-auto flex-shrink-0 mb-3">
                                    <img class="avatar-img rounded-circle" src="/images/team/01.jpg" alt="avatar">
                                </div>

                                <!-- Content -->
                                <h6 class="mb-1"><a href="#">Emma Watson</a></h6>
                                <small>Co-Founder / CEO</small>

                                <!-- Social button -->
                                <ul class="list-inline mb-0 mt-2">
                                    <li class="list-inline-item"> <a class="btn btn-icon w-auto lead text-facebook"
                                            href="#"><i class="bi bi-facebook lh-base"></i></a> </li>
                                    <li class="list-inline-item"> <a class="btn btn-icon w-auto lead text-white"
                                            href="#"><i class="bi bi-twitter-x lh-base"></i></a> </li>
                                    <li class="list-inline-item"> <a
                                            class="btn btn-icon w-auto lead text-instagram-gradient" href="#"><i
                                                class="bi bi-instagram lh-base"></i></a> </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Team item -->
                        <div class="col">
                            <div class="card card-body bg-transparent text-center p-0">
                                <!-- Image -->
                                <div class="avatar avatar-xxl mx-auto flex-shrink-0 mb-3">
                                    <img class="avatar-img rounded-circle" src="/images/team/02.jpg" alt="avatar">
                                </div>

                                <!-- Content -->
                                <h6 class="mb-1"><a href="#">Allen Smith</a></h6>
                                <small>Finance</small>

                                <!-- Social button -->
                                <ul class="list-inline mb-0 mt-2">
                                    <li class="list-inline-item"> <a class="btn btn-icon w-auto lead text-facebook"
                                            href="#"><i class="bi bi-facebook lh-base"></i></a> </li>
                                    <li class="list-inline-item"> <a class="btn btn-icon w-auto lead text-white"
                                            href="#"><i class="bi bi-twitter-x lh-base"></i></a> </li>
                                    <li class="list-inline-item"> <a
                                            class="btn btn-icon w-auto lead text-instagram-gradient" href="#"><i
                                                class="bi bi-instagram lh-base"></i></a> </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Team item -->
                        <div class="col">
                            <div class="card card-body bg-transparent text-center p-0">
                                <!-- Image -->
                                <div class="avatar avatar-xxl mx-auto flex-shrink-0 mb-3">
                                    <img class="avatar-img rounded-circle" src="/images/team/04.jpg" alt="avatar">
                                </div>

                                <!-- Content -->
                                <h6 class="mb-1"><a href="#">Louis Ferguson</a></h6>
                                <small>Recruiting</small>

                                <!-- Social button -->
                                <ul class="list-inline mb-0 mt-2">
                                    <li class="list-inline-item"> <a class="btn btn-icon w-auto lead text-facebook"
                                            href="#"><i class="bi bi-facebook lh-base"></i></a> </li>
                                    <li class="list-inline-item"> <a class="btn btn-icon w-auto lead text-white"
                                            href="#"><i class="bi bi-twitter-x lh-base"></i></a> </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Team item -->
                        <div class="col">
                            <div class="card card-body bg-transparent text-center p-0">
                                <!-- Image -->
                                <div class="avatar avatar-xxl mx-auto flex-shrink-0 mb-3">
                                    <img class="avatar-img rounded-circle" src="/images/team/03.jpg" alt="avatar">
                                </div>

                                <!-- Content -->
                                <h6 class="mb-1"><a href="#">Frances Guerrero</a></h6>
                                <small>Product Manager</small>

                                <!-- Social button -->
                                <ul class="list-inline mb-0 mt-2">
                                    <li class="list-inline-item"> <a class="btn btn-icon w-auto lead text-facebook"
                                            href="#"><i class="bi bi-facebook lh-base"></i></a> </li>
                                    <li class="list-inline-item"> <a
                                            class="btn btn-icon w-auto lead text-instagram-gradient" href="#"><i
                                                class="bi bi-instagram lh-base"></i></a> </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Team item -->
                        <div class="col">
                            <div class="card card-body bg-transparent text-center p-0">
                                <!-- Image -->
                                <div class="avatar avatar-xxl mx-auto flex-shrink-0 mb-3">
                                    <img class="avatar-img rounded-circle" src="/images/team/05.jpg" alt="avatar">
                                </div>

                                <!-- Content -->
                                <h6 class="mb-1"><a href="#">Amanda Reed</a></h6>
                                <small>Solution Engineer</small>

                                <!-- Social button -->
                                <ul class="list-inline mb-0 mt-2">
                                    <li class="list-inline-item"> <a class="btn btn-icon w-auto lead text-white"
                                            href="#"><i class="bi bi-twitter-x lh-base"></i></a> </li>
                                    <li class="list-inline-item"> <a
                                            class="btn btn-icon w-auto lead text-instagram-gradient" href="#"><i
                                                class="bi bi-instagram lh-base"></i></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- Row END -->

                    <!-- Buttons -->
                    <div class="text-center d-inline-flex flex-column align-items-center gap-2 w-100 mt-5">
                        <a href="{{ route('second', [ 'pages' , 'contact-us-v1']) }}" class="btn btn-primary-grad">Connect with our team</a>
                        <a class="link-white icon-link icon-link-hover mb-0"
                            href="{{ route('second', ['about', 'career']) }}">Explore career options<i
                                class="bi bi-arrow-right"></i> </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                Team END -->

    <!-- =======================
                Clients START -->
    <section>
        <div class="container">
            <div class="row g-4 align-items-center">
                <!-- Title -->
                <div class="col-md-3">
                    <h6 class="text-center text-md-start mb-0">Join the 1,000+ companies using Folio</h6>
                </div>

                <!-- Clients -->
                <div class="col-md-9 col-xxl-7 ms-auto">
                    <ul
                        class="list-inline d-flex justify-content-center justify-content-md-end flex-wrap gap-3 gap-lg-5">
                        <!-- Logo item -->
                        <li class="list-inline-item me-0">
                            <a href="#" class="btn-transition d-flex">
                                <img src="/images/client/icons/08.svg" class="h-40px" alt="icon">
                            </a>
                        </li>

                        <!-- Logo item -->
                        <li class="list-inline-item me-0">
                            <a href="#" class="btn-transition d-flex">
                                <img src="/images/client/icons/04.svg" class="h-40px" alt="icon">
                            </a>
                        </li>

                        <!-- Logo item -->
                        <li class="list-inline-item me-0">
                            <a href="#" class="btn-transition d-flex">
                                <img src="/images/client/icons/12.svg" class="h-40px" alt="icon">
                            </a>
                        </li>

                        <!-- Logo item -->
                        <li class="list-inline-item me-0">
                            <a href="#" class="btn-transition d-flex">
                                <img src="/images/client/icons/09.svg" class="h-40px" alt="icon">
                            </a>
                        </li>

                        <!-- Logo item -->
                        <li class="list-inline-item me-0">
                            <a href="#" class="btn-transition d-flex">
                                <img src="/images/client/icons/05.svg" class="h-40px" alt="icon">
                            </a>
                        </li>

                        <!-- Logo item -->
                        <li class="list-inline-item me-0">
                            <a href="#" class="btn-transition d-flex">
                                <img src="/images/client/icons/03.svg" class="h-40px" alt="icon">
                            </a>
                        </li>

                        <!-- Logo item -->
                        <li class="list-inline-item me-0">
                            <a href="#" class="btn-transition d-flex">
                                <img src="/images/client/icons/02.svg" class="h-40px" alt="icon">
                            </a>
                        </li>

                        <!-- Logo item -->
                        <li class="list-inline-item me-0">
                            <a href="#" class="btn-transition d-flex">
                                <img src="/images/client/icons/10.svg" class="h-40px" alt="icon">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                Clients END -->

    <!-- =======================
                Gallery START -->
    <section class="pt-0">
        <div class="container">
            <div class="row g-lg-5">
                <!-- Image item -->
                <div class="col-md-7 mb-5 mb-md-0">
                    <img src="/images/about/10.jpg" class="rounded-4 mb-5" alt="office image">
                    <img src="/images/about/11.jpg" class="rounded-4 w-75 d-flex ms-auto me-md-5" alt="office image">
                </div>

                <div class="col-md-4 ms-auto">
                    <!-- Year text -->
                    <div class="text-end mb-5 mb-md-6">
                        <h6 class="mb-0">Since</h6>
                        <span class="display-2 text-primary-grad">2002</span>
                    </div>
                    <!-- Image -->
                    <img src="/images/about/12.jpg" class="rounded-4" alt="office image">
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
                Gallery END -->

    <!-- =======================
                CTA START -->
    <section class="bg-secondary position-relative overflow-hidden">
        <!-- Curve decoration -->
        <span class="position-absolute top-0 start-0 mt-n5">
            <svg class="fill-body" width="1930" height="137" viewBox="0 0 1930 137" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M464.909 117.12C228.685 132.607 108.971 82.5335 0 51.0476V1.5L1930 0V26.649V132.607C1873.32 98.4636 1645.24 119.618 1488.21 132.607C1319.34 146.576 1149.46 119.696 1051.95 103.318C837.339 67.2694 668.231 103.79 464.909 117.12Z">
                </path>
            </svg>
        </span>

        <div class="container pt-5">
            <div class="row g-4 align-items-center">
                <!-- Title and content -->
                <div class="col-md-5">
                    <h2 class="mb-3">Stay updated with our newsletter</h2>
                    <p class="mb-0">Our newsletter provides valuable content designed to help you stay ahead in your
                        field.</p>
                </div>

                <!-- Input -->
                <div class="col-md-6 col-xl-5 ms-auto">
                    <div class="bg-body rounded-2 position-relative z-index-2 p-2 mb-2">
                        <form class="input-group">
                            <input class="form-control bg-transparent border-0 me-1" type="email"
                                placeholder="Enter your email address">
                            <button type="button" class="btn btn-primary rounded-2 mb-0">Subscribe!</button>
                        </form>
                    </div>
                    <div class="form-text">✌️ No Spam — We Promise!</div>
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
