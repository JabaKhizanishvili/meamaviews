@extends('layouts.landing', ['headerClass' => 'header-absolute', 'buttons' => true])

@section('css')
@vite(['node_modules/swiper/swiper-bundle.min.css'])
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
        Hero START -->
    <section class="bg-secondary bg-opacity-50 position-relative pt-xl-8 overflow-hidden">
        <!-- Curve decoration -->
        <span>
            <svg class="position-absolute bottom-0 start-0 mb-n3 z-index-2" viewBox="0 0 1950 178"
                style="enable-background:new 0 0 1950 178;">
                <path class="fill-body"
                    d="M1480.3,21.8c238.7-17.4,359.6,39,469.7,74.4V178H0v-54.2V4.4c57.3,38.5,287.7,14.6,446.4,0 c170.6-15.7,342.3,14.5,440.8,33C1104,78,1274.8,36.9,1480.3,21.8z" />
            </svg>
        </span>

        <div class="container position-relative pt-4 pt-sm-5 pb-4 pb-lg-8">
            <!-- Main title and images START -->
            <div class="row">
                <!-- Title and content -->
                <div class="col-lg-5 mb-6 mb-lg-0">
                    <h1 class="h2 mb-lg-4">Powerful analytics to drive your business</h1>
                    <p class="mb-lg-4">Gain insights, make informed decisions, and drive growth with our powerful
                        analytics feature</p>
                    <a href="#" class="btn btn-primary-grad mb-0">Start your free trial</a>
                </div>

                <!-- Image -->
                <div class="col-lg-6 position-relative ms-auto">
                    <!-- Decoration images -->
                    <div class="position-absolute top-0 start-50 translate-middle ms-6">
                        <img src="/images/elements/saas-decoration/03.png" class="shadow-primary-lg rounded-4"
                            alt="feature image">
                    </div>

                    <!-- Decoration images -->
                    <div class="position-absolute bottom-0 start-0 mb-n4">
                        <img src="/images/elements/saas-decoration/06.png"
                            class="h-100px h-sm-200px shadow-primary-lg rounded-4" alt="feature image">
                    </div>

                    <!-- Main image -->
                    <div class="ps-md-7">
                        <img src="/images/about/11.jpg" class="rounded-4" alt="feature image">
                    </div>
                </div>
            </div>
            <!-- Main title and images END -->

            <!-- Benefits and skill sets START -->
            <div class="row align-items-center g-4 mt-6 mt-lg-9">
                <!-- Image -->
                <div class="col-md-4 col-lg-3 order-2">
                    <img src="/images/elements/saas-decoration/07.png" class="w-md-300px shadow-primary-lg rounded-4"
                        alt="feature image">
                </div>

                <!-- Content -->
                <div class="col-md-8 ms-auto order-1 order-md-2">
                    <div class="row g-4 align-items-center">
                        <!-- Benefits -->
                        <div class="col-md-6">
                            <!-- Title -->
                            <h6 class="mb-3">Unlock the power of data with advanced analytics</h6>
                            <!-- List -->
                            <ul class="list-group list-group-borderless">
                                <li class="list-group-item d-flex pb-0"><i
                                        class="bi bi-check-circle text-success me-2"></i>In-Depth data analysis</li>
                                <li class="list-group-item d-flex pb-0"><i
                                        class="bi bi-check-circle text-success me-2"></i>Real-Time reporting</li>
                                <li class="list-group-item d-flex pb-0"><i
                                        class="bi bi-check-circle text-success me-2"></i>Customizable dashboards</li>
                            </ul>
                        </div>

                        <!-- Skill sets -->
                        <div class="col-md-6 border-start border-2 border-pink ps-sm-5">
                            <div class="row row-cols-2 g-4">
                                <!-- Item -->
                                <div class="col">
                                    <h3 class="mb-0">105<span class="text-primary">+</span></h3>
                                    <p class="mb-0">New features added</p>
                                </div>

                                <!-- Item -->
                                <div class="col">
                                    <h3 class="mb-0">>10<span class="text-primary">K</span></h3>
                                    <p class="mb-0">Download apk</p>
                                </div>

                                <!-- Item -->
                                <div class="col">
                                    <h3 class="mb-0">15<span class="text-primary">D</span></h3>
                                    <p class="mb-0">Free trial</p>
                                </div>

                                <!-- Item -->
                                <div class="col">
                                    <h3 class="mb-0">98<span class="text-primary">%</span></h3>
                                    <p class="mb-0">Client satisfaction</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                </div>
            </div>
            <!-- Benefits and skill sets END -->

        </div>
    </section>
    <!-- =======================
        Hero END -->

    <!-- =======================
        Core features START -->
    <section class="pt-md-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <!-- Feature item -->
                    <div class="row g-4 align-items-center mb-6">
                        <div class="col-md-6 pe-md-5">
                            <div class="bg-secondary-grad p-4 rounded-4">
                                <img src="/images/elements/saas-decoration/tab-3.png" alt="tab image">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h4 class="mb-md-4">Comprehensive data analysis</h4>
                            <p class="mb-0">Dive deep into your business data with our advanced analytics tools.
                                Identify trends, uncover hidden opportunities, and make informed decisions based on
                                comprehensive data analysis.</p>
                        </div>
                    </div>

                    <!-- Feature item -->
                    <div class="row g-4 align-items-center mb-6">
                        <div class="col-md-6 order-2">
                            <h4 class="mb-md-4">Real-time data access</h4>
                            <p class="mb-0">Stay ahead of the curve with real-time reporting. Our analytics feature
                                provides you with immediate access to the latest data, enabling you to monitor
                                performance and make quick adjustments.</p>
                        </div>

                        <div class="col-md-6 ps-md-5 order-md-2">
                            <div class="bg-secondary p-4 rounded-4">
                                <img src="/images/elements/saas-decoration/tab-2.png" alt="tab image">
                            </div>
                        </div>
                    </div>

                    <!-- Feature item -->
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6 pe-md-5">
                            <div class="bg-secondary-grad p-4 rounded-4">
                                <img src="/images/elements/saas-decoration/step-3.png" class="rounded-4"
                                    alt="tab image">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h4 class="mb-md-4">Customizable and interactive dashboards</h4>
                            <p class="mb-0">Tailor your analytics experience with fully customizable dashboards.
                                Choose from a variety of widgets, charts, and graphs to create a personalized view of
                                your key metrics.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Core features END -->

    <!-- =======================
        Testimonials START -->
    <section class="pt-0">
        <div class="container">
            <div class="bg-dark position-relative rounded-4 overflow-hidden p-4 p-sm-6" data-bs-theme="dark">
                <!-- Title and slider arrow -->
                <div class="d-flex justify-content-between mb-4 mb-md-5">
                    <h2>Client testimonials</h2>
                    <div class="d-flex justify-content-center justify-content-sm-end gap-3 position-relative mt-3">
                        <a href="#"
                            class="fs-5 text-body-secondary text-primary-hover mb-0 swiper-button-prev-testimonials"><i
                                class="bi bi-arrow-left"></i></a>
                        <a href="#"
                            class="fs-5 text-body-secondary text-primary-hover mb-0 swiper-button-next-testimonials"><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Slider START -->
                <div class="swiper mt-2 mt-md-4"
                    data-swiper-options='{
				"spaceBetween": 30,
				"autoplay":{
					"delay": 4000,
					"disableOnInteraction": false,
					"pauseOnMouseEnter": true
				},
				"navigation":{
					"nextEl":".swiper-button-next-testimonials",
					"prevEl":".swiper-button-prev-testimonials"
				}}'>

                    <div class="swiper-wrapper">
                        <!-- Testimonial item -->
                        <div class="swiper-slide">
                            <div class="row align-items-center">
                                <!-- Author info -->
                                <div class="col-lg-3 text-lg-center mb-3 mb-lg-0">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-xxl mx-auto flex-shrink-0 mb-3">
                                        <img class="avatar-img rounded-circle" src="/images/avatar/01.jpg"
                                            alt="avatar">
                                    </div>
                                    <h6 class="mb-1 lead">Jacqueline Miller</h6>
                                    <p class="mb-0 small">Product designer</p>
                                </div>

                                <!-- Testimonial content -->
                                <blockquote class="col-lg-9">
                                    <!-- Rating star -->
                                    <ul class="list-inline mb-2">
                                        <li class="list-inline-item lead me-0"><i
                                                class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item lead me-0"><i
                                                class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item lead me-0"><i
                                                class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item lead me-0"><i
                                                class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item lead me-0"><i
                                                class="bi bi-star-half text-warning"></i></li>
                                    </ul>
                                    <p class="fs-5 heading-color mb-0">Our passion for customer excellence is just one
                                        reason why we are the market leader. We've always worked very hard to give our
                                        customers the best experience. Was out laughter raptures returned outweigh.</p>
                                </blockquote>
                            </div>
                        </div>

                        <!-- Testimonial item -->
                        <div class="swiper-slide">
                            <div class="row align-items-center">
                                <!-- Author info -->
                                <div class="col-lg-3 text-lg-center mb-3 mb-lg-0">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-xxl mx-auto flex-shrink-0 mb-3">
                                        <img class="avatar-img rounded-circle" src="/images/avatar/02.jpg"
                                            alt="avatar">
                                    </div>
                                    <h6 class="mb-1 lead">Louis Ferguson</h6>
                                    <p class="mb-0">Web Developer</p>
                                </div>

                                <!-- Testimonial content -->
                                <blockquote class="col-lg-9">
                                    <!-- Rating star -->
                                    <ul class="list-inline mb-2">
                                        <li class="list-inline-item lead me-0"><i
                                                class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item lead me-0"><i
                                                class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item lead me-0"><i
                                                class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item lead me-0"><i
                                                class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item lead me-0"><i
                                                class="bi bi-star-half text-warning"></i></li>
                                    </ul>
                                    <p class="fs-5 heading-color mb-0">Their team went above and beyond to understand
                                        our needs and deliver a solution that exceeded our expectations. They
                                        demonstrated throughout the process was truly impressive.</p>
                                </blockquote>
                            </div>
                        </div>

                        <!-- Testimonial item -->
                        <div class="swiper-slide">
                            <div class="row align-items-center">
                                <!-- Author info -->
                                <div class="col-lg-3 text-lg-center mb-3 mb-lg-0">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-xxl mx-auto flex-shrink-0 mb-3">
                                        <img class="avatar-img rounded-circle" src="/images/avatar/06.jpg"
                                            alt="avatar">
                                    </div>
                                    <h6 class="mb-1 lead">Samuel Bishop</h6>
                                    <p class="mb-0">UI/UX designer</p>
                                </div>

                                <!-- Testimonial content -->
                                <blockquote class="col-lg-9">
                                    <!-- Rating star -->
                                    <ul class="list-inline mb-2">
                                        <li class="list-inline-item lead me-0"><i
                                                class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item lead me-0"><i
                                                class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item lead me-0"><i
                                                class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item lead me-0"><i
                                                class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item lead me-0"><i
                                                class="bi bi-star-half text-warning"></i></li>
                                    </ul>
                                    <p class="fs-5 heading-color mb-0">Was out laughter raptures returned outweigh.
                                        Luckily cheered colonel I do we attack highest enabled. Tried law yet style
                                        child. The bore of true of no be deal.</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider END -->

            </div>
        </div>
    </section>
    <!-- =======================
        Testimonials END -->

    <!-- =======================
        Faq START -->
    <section class="pt-0">
        <div class="container position-relative">
            <div class="row g-4">

                <!-- Title -->
                <div class="col-md-4">
                    <h2 class="mb-3">Frequently Asked Questions</h2>
                    <p class="mb-0">Our team is ready to assist you! Start a chat for quick support. <a
                            href="#" class="hover-underline-animation fw-semibold">Talk to Us</a></p>
                </div>

                <!-- Faqs -->
                <div class="col-md-7 ms-auto">
                    <!-- Accordion START -->
                    <div class="accordion accordion-icon accordion-border-bottom" id="accordionFaq">
                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <div class="accordion-header font-base" id="heading-1">
                                <button class="accordion-button fw-semibold rounded collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true"
                                    aria-controls="collapse-1">
                                    <span class="lead heading-color">What payment methods do you accept?</span>
                                </button>
                            </div>
                            <!-- Body -->
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body pb-0">
                                    We accept all major credit cards, PayPal, and bank transfers for custom plans. Our
                                    expert team will turn your concept into a working prototype within 24 hours,
                                    ensuring rapid progress and immediate feedback.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <div class="accordion-header font-base" id="heading-2">
                                <button class="accordion-button fw-semibold rounded collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false"
                                    aria-controls="collapse-2">
                                    <span class="lead heading-color">Can I change my plan later?</span>
                                </button>
                            </div>
                            <!-- Body -->
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body pb-0">
                                    Yes, you can upgrade or downgrade your plan at any time from your account settings.
                                    We provide a range of tools, guides, and best practices to help you create designs,
                                    websites.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <div class="accordion-header font-base" id="heading-3">
                                <button class="accordion-button fw-semibold rounded collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false"
                                    aria-controls="collapse-3">
                                    <span class="lead heading-color">Is there a free trial available?</span>
                                </button>
                            </div>
                            <!-- Body -->
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body pb-0">
                                    Yes, we offer a 14-day free trial for our Basic and Standard plans. No credit card
                                    required.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <div class="accordion-header font-base" id="heading-4">
                                <button class="accordion-button fw-semibold rounded collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false"
                                    aria-controls="collapse-4">
                                    <span class="lead heading-color">How does customer support work?</span>
                                </button>
                            </div>
                            <!-- Body -->
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body pb-0">
                                    Our Basic plan includes email support, while the Standard and Custom plans offer
                                    priority email and dedicated account manager support, respectively.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <div class="accordion-header font-base" id="heading-5">
                                <button class="accordion-button fw-semibold rounded collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false"
                                    aria-controls="collapse-5">
                                    <span class="lead heading-color">Are there any setup fees?</span>
                                </button>
                            </div>
                            <!-- Body -->
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body pb-0">
                                    No, there are no setup fees for any of our plans. You only pay the monthly
                                    subscription fee. We provide a range of tools, guides, and best practices to help
                                    you create designs, websites.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion END -->
                </div>

            </div>
        </div>
    </section>
    <!-- =======================
        Faq END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
        Footer START -->
<footer class="bg-dark position-relative pt-6 pt-xl-8" data-bs-theme="dark">
    <div class="container">
        <!-- Widgets START -->
        <div class="row g-4">
            <!-- Widget 1 -->
            <div class="col-lg-4">
                <!-- logo -->
                <a class="navbar-brand me-0" href="{{ route('any', 'index') }}">
                    <img class="light-mode-item navbar-brand-item h-40px" src="/images/logo.svg" alt="logo">
                    <img class="dark-mode-item navbar-brand-item h-40px" src="/images/logo-light.svg" alt="logo">
                </a>

                <p class="my-3 my-lg-4">A Bootstrap theme that's both stylish and functional, perfect for any type of
                    technology or corporate website.</p>
                <!-- List -->
                <ul class="list-group list-group-borderless">
                    <li class="d-flex mb-2"><a href="#" class="text-primary-hover"><i
                                class="me-2 text-primary bi bi-headset"></i> (251) 854-6308 </a></li>
                    <li class="d-flex mb-2"><a href="#" class="text-primary-hover"><i
                                class="me-2 text-primary bi bi-envelope"></i> example@gmail.com</a></li>
                </ul>
            </div>

            <!-- Widget 2 -->
            <div class="col-6 col-md-3 col-lg-2">
                <h6 class="mb-3 mb-sm-4">Company</h6>
                <!-- Links -->
                <ul class="nav flex-column gap-1">
                    <li class="nav-item"><a class="nav-link pt-0" href="{{ route('second', ['about', 'v1']) }}">About
                            us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('second', [ 'pages' , 'contact-us-v1']) }}">Contact us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('second', ['about', 'career']) }}">Career
                            <span class="badge bg-primary ms-2">2 jobs</span></a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('second', ['about', 'career-single']) }}">Career detail</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('second', ['pages', 'contact-us-v2']) }}">Become a partner</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('second', [ 'about' , 'service-single']) }}">Services</a></li>
                </ul>
            </div>

            <!-- Widget 3 -->
            <div class="col-6 col-md-3 col-lg-2">
                <h6 class="mb-3 mb-sm-4">Resources</h6>
                <!-- Links -->
                <ul class="nav flex-column gap-1">
                    <li class="nav-item"><a class="nav-link pt-0" href="{{ route('second', [ 'portfolio' ,'case-study-v1']) }}">Case
                            studies</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('second', ['pages', 'pricing-v1']) }}">Pricing <span
                                class="badge bg-success ms-2">New</span></a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('third', ['pages', 'blog', 'minimal']) }}">Blogs</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('third', ['pages', 'blog', 'single']) }}">Blog detail</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Success stories<i
                                class="bi bi-box-arrow-up-right small ms-2"></i></a></li>
                </ul>
            </div>

            <!-- Widget 4 -->
            <div class="col-md-6 col-lg-4">
                <h6 class="mb-3 mb-sm-4">Stay connected with us</h6>
                <!-- Input group -->
                <form class="input-group bg-body p-2 rounded-3 mb-2">
                    <input class="form-control form-control-sm rounded border-0 me-3" type="email"
                        placeholder="Enter your email">
                    <button type="button" class="btn btn-sm btn-primary-grad px-3 rounded-2 mb-0"><i
                            class="bi bi-send-fill"></i></button>
                </form>
                <p class="small mb-0">✌️ No Spam — We Promise!</p>

                <!-- Social links -->
                <ul class="list-inline align-items-center mb-0 mt-3 mt-sm-4">
                    <li class="list-inline-item heading-color fw-semibold">Follow on:</li>
                    <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-facebook" href="#"><i
                                class="bi bi-facebook lh-base"></i></a> </li>
                    <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-instagram" href="#"><i
                                class="bi bi-instagram lh-base"></i></a> </li>
                    <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-twitter-x" href="#"><i
                                class="bi bi-twitter-x lh-base"></i></a> </li>
                    <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-linkedin" href="#"><i
                                class="bi bi-linkedin lh-base"></i></a> </li>
                </ul>

            </div>
        </div>
        <!-- Widgets END -->

        <!-- Divider -->
        <hr class="my-4 mt-xl-5 mb-0">

        <!-- Bottom footer -->
        <div class="d-md-flex justify-content-between align-items-center text-center text-lg-start py-4">
            <!-- copyright text -->
            <div class="text-body small mb-3 mb-md-0"> Copyrights ©2024 Folio. Build by <a
                    href="#" target="_blank"
                    class="text-body text-primary-hover hover-underline-animation">Stackbros</a>. </div>

            <!-- Policy link -->
            <ul class="nav d-flex justify-content-center gap-1 mb-0">
                <li class="nav-item"><a class="nav-link small py-0" href="#">Privacy policy</a></li>
                <li class="nav-item"><a class="nav-link small py-0 pe-0" href="#">Terms &amp; conditions</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<!-- =======================
        Footer END -->

<!-- Back to top -->
<div class="back-top"></div>
@endsection