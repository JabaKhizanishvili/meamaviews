@extends('layouts.landing', ['headerClass' => 'header-absolute', 'buttons' => true])

@section('css')
@vite(['node_modules/swiper/swiper-bundle.min.css'])
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Hero START -->
    <section class="pt-8 pb-0 overflow-hidden">
        <div class="container" data-sticky-container>
            <div class="row align-items-stretch">
                <!-- Image -->
                <div class="col-lg-5 offset-lg-1 order-2 mb-5 mb-lg-0">
                    <div data-sticky data-margin-top="100" data-sticky-for="992">
                        <div class="position-relative h-500px h-md-750px w-lg-50vw">
                            <div class="w-100 h-500px h-md-750px rounded-4"
                                style="background-image: url(/images/bg/05.jpg); background-size:cover; background-position:top center;">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contents -->
                <div class="col-lg-6 order-1 mb-5 mb-lg-0">
                    <div class="pb-lg-7 pt-lg-5">
                        <!-- Pre title -->
                        <h5 class="mb-lg-4"><span class="hand-wave-animate">🖐️</span> Hello, I’m</h5>

                        <!-- Title -->
                        <h1 class="display-1 position-relative mb-6 mb-sm-5">
                            Emily Johnson
                            <span
                                class="h5 bg-primary text-white rounded-3 rotate-350 position-absolute bottom-0 end-0 mb-n5 mb-sm-n3 mb-lg-n1 px-4 py-3">Web
                                developer</span>
                        </h1>

                        <p class="lead mb-4">I am a self-taught web Developer from the USA. Currently, I am a freelancer
                            and collaborating with small companies and agencies. I deal with UI design / Front-end
                            development and Bootstrap Development.</p>

                        <!-- Buttons -->
                        <a href="#" class="btn btn-secondary icon-link icon-link-hover">Work with me! <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Skills -->
                <div class="col-xl-6 order-3">
                    <!-- Title -->
                    <h2 class="mb-4 mb-lg-5">My expertise</h2>

                    <div class="row g-4">
                        <!-- Skill item -->
                        <div class="col-md-6">
                            <div class="card bg-warning bg-opacity-15 rounded-4 p-4 h-100">
                                <!-- Icon -->
                                <div class="card-header bg-transparent p-0 pb-4">
                                    <div class="icon-lg bg-warning text-white rounded-circle">
                                        <i class="bi bi-pc-display fa-lg"></i>
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="card-body p-0">
                                    <h6>Web application development</h6>
                                    <p class="mb-3">Building robust and scalable web applications tailored to your
                                        business processes.</p>
                                </div>

                                <!-- Link -->
                                <div class="card-footer bg-transparent p-0">
                                    <a href="#" class="link-primary-grad icon-link icon-link-hover">View projects
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Skill item -->
                        <div class="col-md-6">
                            <div class="card bg-pink bg-opacity-15 rounded-4 p-4 h-100">
                                <!-- Icon -->
                                <div class="card-header bg-transparent p-0 pb-4">
                                    <div class="icon-lg bg-pink text-white rounded-circle">
                                        <i class="bi bi-vector-pen fa-lg"></i>
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="card-body p-0">
                                    <h6>UI/UX design</h6>
                                    <p class="mb-3">I focus on creating interfaces that are both visually appealing
                                        and easy to use.</p>
                                </div>

                                <!-- Link -->
                                <div class="card-footer bg-transparent p-0">
                                    <a href="#" class="link-primary-grad icon-link icon-link-hover">View
                                        projects <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Skill item -->
                        <div class="col-md-6">
                            <div class="card bg-info bg-opacity-15 rounded-4 p-4 h-100">
                                <!-- Icon -->
                                <div class="card-header bg-transparent p-0 pb-4">
                                    <div class="icon-lg bg-info text-white rounded-circle">
                                        <i class="bi bi-globe2 fa-lg"></i>
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="card-body p-0">
                                    <h6>Web maintenance & support</h6>
                                    <p class="mb-3"> From regular updates to troubleshooting and security checks</p>
                                </div>

                                <!-- Link -->
                                <div class="card-footer bg-transparent p-0">
                                    <a href="#" class="link-primary-grad icon-link icon-link-hover">View
                                        projects <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Skill item -->
                        <div class="col-md-6">
                            <div class="card bg-success bg-opacity-15 rounded-4 p-4 h-100">
                                <!-- Icon -->
                                <div class="card-header bg-transparent p-0 pb-4">
                                    <div class="icon-lg bg-success text-white rounded-circle">
                                        <i class="bi bi-cart-check fa-lg"></i>
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="card-body p-0">
                                    <h6>E-commerce solutions</h6>
                                    <p class="mb-3">Powerful e-commerce platforms that drive sales and enhance the
                                        shopping experience.</p>
                                </div>

                                <!-- Link -->
                                <div class="card-footer bg-transparent p-0">
                                    <a href="#" class="link-primary-grad icon-link icon-link-hover">View
                                        projects <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Hero END -->

    <!-- =======================
    Projects START -->
    <section>
        <div class="container">

            <!-- Title and button -->
            <div class="row align-items-center">
                <div class="col-md-5 text-center text-md-start">
                    <h2 class="mb-3 mb-md-0">A glimpse of my projects</h2>
                </div>
                <div class="col-md-5 ms-auto text-center text-md-end">
                    <a href="#" class="btn btn-primary mb-0">View all projects</a>
                </div>
            </div>

            <div class="row justify-content-center mb-6">
                <!-- Project item -->
                <div class="col-md-6 d-flex align-items-center mt-4">
                    <div class="card card-img-scale card-content-hover rounded-0 bg-transparent overflow-hidden">
                        <div class="card-img-scale-wrapper rounded-4">
                            <!-- Card Image -->
                            <img src="/images/portfolio/list/02.jpg" class="img-scale rounded-4" alt="portfolio-img">
                            <!-- Arrow button -->
                            <div
                                class="card-img-overlay hover-content d-flex flex-column align-items-center justify-content-center p-5">
                                <div class="icon-xl bg-dark text-white rounded-circle"><i
                                        class="bi bi-arrow-up-right"></i></div>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body d-flex justify-content-between px-0 pb-0">
                            <div>
                                <h6 class="mb-0"><a href="{{ route('second', [ 'portfolio' ,'case-study-v2']) }}"
                                        class="heading-color stretched-link">Brand Identity Development</a></h6>
                                <span>Logo design</span>
                            </div>
                            <small>@2022</small>
                        </div>
                    </div>
                </div>

                <!-- Project item -->
                <div class="col-md-6 d-flex align-items-center">
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-11 col-lg-9">
                            <div
                                class="card card-img-scale card-content-hover rounded-0 bg-transparent overflow-hidden">
                                <div class="card-img-scale-wrapper rounded-4">
                                    <!-- Card Image -->
                                    <img src="/images/portfolio/3by4/08.jpg" class="img-scale rounded-4"
                                        alt="portfolio-img">
                                    <!-- Arrow button -->
                                    <div
                                        class="card-img-overlay hover-content d-flex flex-column align-items-center justify-content-center p-5">
                                        <div class="icon-xl bg-dark text-white rounded-circle"><i
                                                class="bi bi-arrow-up-right"></i></div>
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body d-flex justify-content-between px-0 pb-0">
                                    <div>
                                        <h6 class="mb-0"><a href="{{ route('second', [ 'portfolio' ,'case-study-v2']) }}"
                                                class="heading-color stretched-link">ShopSmart</a></h6>
                                        <span>E-commerce</span>
                                    </div>
                                    <small>@2023</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project item -->
                <div class="col-md-6 d-flex align-items-center">
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-11 col-lg-9">
                            <div
                                class="card card-img-scale card-content-hover rounded-0 bg-transparent overflow-hidden">
                                <div class="card-img-scale-wrapper rounded-4">
                                    <!-- Card Image -->
                                    <img src="/images/portfolio/4by4/03.jpg" class="img-scale rounded-4"
                                        alt="portfolio-img">
                                    <!-- Arrow button -->
                                    <div
                                        class="card-img-overlay hover-content d-flex flex-column align-items-center justify-content-center p-5">
                                        <div class="icon-xl bg-dark text-white rounded-circle"><i
                                                class="bi bi-arrow-up-right"></i></div>
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body d-flex justify-content-between px-0 pb-0">
                                    <div>
                                        <h6 class="mb-0"><a href="{{ route('second', [ 'portfolio' ,'case-study-v2']) }}"
                                                class="heading-color stretched-link">TechWave</a></h6>
                                        <span>Animation</span>
                                    </div>
                                    <small>@2022</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project item -->
                <div class="col-md-6 d-flex align-items-center mt-4">
                    <div class="card card-img-scale card-content-hover rounded-0 bg-transparent overflow-hidden">
                        <div class="card-img-scale-wrapper rounded-4">
                            <!-- Card Image -->
                            <img src="/images/portfolio/04.jpg" class="img-scale rounded-4" alt="portfolio-img">
                            <!-- Arrow button -->
                            <div
                                class="card-img-overlay hover-content d-flex flex-column align-items-center justify-content-center p-5">
                                <div class="icon-xl bg-dark text-white rounded-circle"><i
                                        class="bi bi-arrow-up-right"></i></div>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body d-flex justify-content-between px-0 pb-0">
                            <div>
                                <h6 class="mb-0"><a href="{{ route('second', [ 'portfolio' ,'case-study-v2']) }}"
                                        class="heading-color stretched-link">Digital marketing overhaul</a></h6>
                                <span>Marketing</span>
                            </div>
                            <small>@2021</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Small CTA -->
            <div class="d-inline-flex justify-content-center mx-auto w-100">
                <p class="bg-dark rounded-3 text-white text-center px-5 py-3 mb-0">✌️ Let's create a modern, engaging
                    website for your business.
                    <a href="#" class="fw-semibold hover-underline-animation text-white">Hire me</a>
                </p>
            </div>

        </div>
    </section>
    <!-- =======================
    Projects END -->

    <!-- =======================
    About me START -->
    <section class="position-relative z-index-2 py-0">
        <div class="container-fluid position-relative">
            <div
                class="max-width-1550 bg-secondary bg-opacity-50 position-relative rounded-4 overflow-hidden px-3 py-4 py-sm-6 py-lg-8">
                <!-- Grad blur -->
                <div class="position-absolute top-0 end-0 mt-n6">
                    <img src="/images/elements/grad-shape/blur-decoration.svg" class="rotate-270 blur-8 opacity-2"
                        alt="Grad shape">
                </div>

                <div class="container">
                    <!-- Title and content -->
                    <div class="row g-4">
                        <div class="col-lg-7">
                            <span class="text-primary-grad fw-semibold">About me</span>
                            <h2 class="my-3">I’ve been developing websites since 2009</h2>
                            <p class="mb-4">I’m passionate about web development and UI design, specializing in
                                creating visually stunning and highly functional digital experiences. My journey since
                                2009 has equipped me with a diverse skill set to deliver tailored solutions for my
                                clients.</p>

                            <!-- Social links -->
                            <ul class="list-inline d-flex flex-wrap gap-2 align-items-center mb-0">
                                <li class="list-inline-item heading-color fw-semibold me-sm-3">Follow me on:</li>
                                <li class="list-inline-item"> <a class="btn btn-sm bg-facebook mb-0"
                                        href="#"><i class="bi bi-facebook lh-base"></i> Facebook</a> </li>
                                <li class="list-inline-item"> <a class="btn btn-sm bg-instagram-gradient mb-0"
                                        href="#"><i class="bi bi-instagram lh-base"></i> Instagram</a> </li>
                                <li class="list-inline-item"> <a class="btn btn-sm bg-twitter-x mb-0"
                                        href="#"><i class="bi bi-twitter-x lh-base"></i> Twitter</a> </li>
                                <li class="list-inline-item"> <a class="btn btn-sm bg-linkedin mb-0"
                                        href="#"><i class="bi bi-linkedin lh-base"></i> Linkedin</a> </li>
                            </ul>
                        </div>

                        <!-- Counter -->
                        <div class="col-lg-4 ms-auto">
                            <div class="row">
                                <!-- Item -->
                                <div class="col-12 border-bottom border-primary border-opacity-25 mb-3">
                                    <div class="d-flex mb-2">
                                        <h4 class="purecounter display-4 mb-0" data-purecounter-start="0"
                                            data-purecounter-end="14" data-purecounter-delay="300">0</h4>
                                        <span class="display-4 text-primary mb-0">+</span>
                                    </div>
                                    <p class="lead heading-color pb-3">Years of experience</p>
                                </div>

                                <!-- Item -->
                                <div class="col-sm-6">
                                    <div class="d-flex mb-2">
                                        <h4 class="purecounter h2 mb-0" data-purecounter-start="0"
                                            data-purecounter-end="68" data-purecounter-delay="300">0</h4>
                                        <span class="h2 mb-0">+</span>
                                    </div>
                                    <p class="heading-color">Successful projects</p>
                                </div>

                                <!-- Item -->
                                <div class="col-sm-6">
                                    <div class="d-flex mb-2">
                                        <h4 class="purecounter h2 mb-0" data-purecounter-start="0"
                                            data-purecounter-end="105" data-purecounter-delay="300">0</h4>
                                        <span class="h2 mb-0">+</span>
                                    </div>
                                    <p class="heading-color">Satisfied clients</p>
                                </div>
                            </div> <!-- Row END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    About me END -->

    <!-- =======================
    Blog START -->
    <section>
        <div class="container" data-sticky-container>
            <div class="row">
                <!-- Title and buttons -->
                <div class="col-lg-4">
                    <div data-sticky data-margin-top="100" data-sticky-for="768">
                        <h2 class="mb-3">Development tips & trends</h2>
                        <p class="mb-sm-5"><i class="bi bi-instagram text-primary-grad me-2"></i>Follow us on
                            <b>Instagram</b> to see life at <a href="#"
                                class="hover-underline-animation">@folio</a>
                        </p>
                    </div>
                </div>

                <!-- Blog list -->
                <div class="col-lg-7 ms-auto">
                    <!-- Blog item -->
                    <article class="card card-hover-transition bg-transparent border-bottom rounded-0 p-4 ps-0">
                        <div class="row align-items-sm-center">
                            <!-- Image -->
                            <div class="col-5 col-sm-3 col-xl-2">
                                <img src="/images/blog/4by4/03.jpg" class="card-img" alt="blog-img">
                            </div>
                            <!-- Content -->
                            <div class="col-7 col-sm-9 col-xl-10">
                                <div class="card-body ps-0 pe-3 py-0">
                                    <!-- Title -->
                                    <h6 class="card-title mb-3 mb-md-0">10 essential tips for crafting a stunning
                                        website</h6>
                                    <!-- list and button -->
                                    <div class="d-sm-flex justify-content-between align-items-center mt-3">
                                        <ul class="nav nav-divider align-items-center">
                                            <li class="nav-item d-none d-sm-block">Aug 28, 2024</li>
                                            <li class="nav-item d-none d-xl-block">5 min read</li>
                                        </ul>

                                        <a class="icon-link icon-link-hover stretched-link"
                                            href="{{ route('third', [ 'pages' , 'blog','single']) }}">Read more<i class="bi bi-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Blog item -->
                    <article class="card card-hover-transition bg-transparent border-bottom rounded-0 p-4 ps-0">
                        <div class="row align-items-sm-center">
                            <!-- Image -->
                            <div class="col-5 col-sm-3 col-xl-2">
                                <img src="/images/blog/4by4/01.jpg" class="card-img" alt="blog-img">
                            </div>
                            <!-- Content -->
                            <div class="col-7 col-sm-9 col-xl-10">
                                <div class="card-body ps-0 pe-3 py-0">
                                    <!-- Title -->
                                    <h6 class="card-title mb-3 mb-md-0">The future of UI/UX design: trends to watch in
                                        2024</h6>
                                    <!-- list and button -->
                                    <div class="d-sm-flex justify-content-between align-items-center mt-3">
                                        <ul class="nav nav-divider align-items-center">
                                            <li class="nav-item d-none d-sm-block">Aug 18, 2024</li>
                                            <li class="nav-item d-none d-xl-block">5 min read</li>
                                        </ul>

                                        <a class="icon-link icon-link-hover stretched-link"
                                            href="{{ route('third', [ 'pages' , 'blog','single']) }}">Read more<i class="bi bi-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Blog item -->
                    <article class="card card-hover-transition bg-transparent border-bottom rounded-0 p-4 ps-0">
                        <div class="row align-items-sm-center">
                            <!-- Image -->
                            <div class="col-5 col-sm-3 col-xl-2">
                                <img src="/images/blog/4by4/06.jpg" class="card-img" alt="blog-img">
                            </div>
                            <!-- Content -->
                            <div class="col-7 col-sm-9 col-xl-10">
                                <div class="card-body ps-0 pe-3 py-0">
                                    <!-- Title -->
                                    <h6 class="card-title mb-3 mb-md-0">Behind the scenes of my latest web project</h6>
                                    <!-- list and button -->
                                    <div class="d-sm-flex justify-content-between align-items-center mt-3">
                                        <ul class="nav nav-divider align-items-center">
                                            <li class="nav-item d-none d-sm-block">Aug 12, 2024</li>
                                            <li class="nav-item d-none d-xl-block">5 min read</li>
                                        </ul>

                                        <a class="icon-link icon-link-hover stretched-link"
                                            href="{{ route('third', [ 'pages' , 'blog','single']) }}">Read more<i class="bi bi-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Blog item -->
                    <article class="card card-hover-transition bg-transparent border-bottom rounded-0 p-4 ps-0">
                        <div class="row align-items-sm-center">
                            <!-- Image -->
                            <div class="col-5 col-sm-3 col-xl-2">
                                <img src="/images/blog/4by4/05.jpg" class="card-img" alt="blog-img">
                            </div>
                            <!-- Content -->
                            <div class="col-7 col-sm-9 col-xl-10">
                                <div class="card-body ps-0 pe-3 py-0">
                                    <!-- Title -->
                                    <h6 class="card-title mb-3 mb-md-0">How to optimize your website for SEO in 2024
                                    </h6>
                                    <!-- list and button -->
                                    <div class="d-sm-flex justify-content-between align-items-center mt-3">
                                        <ul class="nav nav-divider align-items-center">
                                            <li class="nav-item d-none d-sm-block">Aug 12, 2024</li>
                                            <li class="nav-item d-none d-xl-block">5 min read</li>
                                        </ul>

                                        <a class="icon-link icon-link-hover stretched-link"
                                            href="{{ route('third', [ 'pages' , 'blog','single']) }}">Read more<i class="bi bi-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Blog END -->

    <!-- Contact info START -->
    <section class="pt-0">
        <div class="container">
            <div class="row g-4">
                <!-- Image -->
                <div class="col-lg-6 pe-lg-5">
                    <img src="/images/about/16.jpg" class="rounded-4" alt="portfolio-img">
                </div>

                <!-- Content and form -->
                <div class="col-lg-6">
                    <!-- Title -->
                    <h2 class="mb-4">Say hi by filling out the form below</h2>

                    <!-- Form START -->
                    <form class="row form-border-bottom g-3">
                        <!-- Name -->
                        <div class="col-12">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="What's Your good name?">
                                <span class="focus-border"></span>
                                <span class="position-absolute top-50 end-0 translate-middle-y"><i
                                        class="bi bi-emoji-smile"></i></span>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-12">
                            <div class="position-relative">
                                <input type="email" class="form-control" placeholder="Enter your email address"
                                    required="">
                                <span class="focus-border"></span>
                                <span class="position-absolute top-50 end-0 translate-middle-y"><i
                                        class="bi bi-envelope"></i></span>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="col-12">
                            <div class="position-relative">
                                <textarea class="form-control" id="floatingTextarea2" style="height: 100px"
                                    placeholder="Describe about your project"></textarea>
                                <span class="focus-border"></span>
                                <span class="position-absolute top-0 end-0"><i
                                        class="bi bi-chat-square-dots"></i></span>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="col-12 mt-4">
                            <button class="btn btn-primary-grad mb-0">Send a message</button>
                        </div>
                    </form>
                    <!-- Form END -->

                    <!-- Contact info -->
                    <div class="d-sm-flex gap-5 mt-5">
                        <!-- Phone -->
                        <div class="d-flex gap-2 mb-4">
                            <!-- Icon -->
                            <div class="heading-color lead"><i class="bi bi-telephone"></i></div>
                            <!-- Content -->
                            <div>
                                <p class="heading-color fw-semibold mb-0">Call me:</p>
                                <ul class="list-group list-group-borderless mb-0">
                                    <li class="list-group-item pb-0"> <a href="#"
                                            class="text-primary-hover">+(251) 854-6308</a></li>
                                    <li class="list-group-item pb-0"> <a href="#"
                                            class="text-primary-hover">+(469) 537-2410</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="d-flex gap-2 mb-4">
                            <!-- Icon -->
                            <div class="heading-color lead"><i class="bi bi-envelope"></i></div>
                            <!-- Content -->
                            <div>
                                <p class="heading-color fw-semibold mb-0">E-mail:</p>
                                <ul class="list-group list-group-borderless mb-0">
                                    <li class="list-group-item pb-0"> <a href="#"
                                            class="text-primary-hover">example@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact info END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer')

<!-- Back to top -->
<div class="back-top"></div>
@endsection