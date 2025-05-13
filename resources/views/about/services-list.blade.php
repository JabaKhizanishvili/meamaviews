@extends('layouts.landing', ['headerClass' => 'header-absolute', 'buttons' => true])

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
                    Hero START -->
    <section class="bg-secondary-grad position-relative pt-xl-8 overflow-hidden">
        <!-- Curve decoration -->
        <span>
            <svg class="position-absolute bottom-0 start-0 mb-n3 z-index-2" viewBox="0 0 1950 178"
                style="enable-background:new 0 0 1950 178;">
                <path class="fill-body"
                    d="M1480.3,21.8c238.7-17.4,359.6,39,469.7,74.4V178H0v-54.2V4.4c57.3,38.5,287.7,14.6,446.4,0 c170.6-15.7,342.3,14.5,440.8,33C1104,78,1274.8,36.9,1480.3,21.8z" />
            </svg>
        </span>
        <!-- Patten decoration -->
        <div class="position-absolute end-0 top-0 rotate-180 mt-n5 me-n9">
            <img src="/images/elements/geo-grad-pattern.svg" class="h-700px opacity-1" alt="bg pattern">
        </div>
        <!-- Patten decoration -->
        <div class="position-absolute start-0 bottom-0 mb-8 ms-n7">
            <img src="/images/elements/geo-grad-pattern.svg" class="h-400px opacity-1" alt="bg pattern">
        </div>

        <!-- Grad blur -->
        <div class="position-absolute top-0 start-50 mt-n9 ms-n9">
            <img src="/images/elements/grad-shape/blur-decoration.svg" class="blur-8 opacity-1" alt="Grad shape">
        </div>

        <div class="container position-relative pt-4 pt-sm-5 pb-5 pb-lg-8">
            <!-- Breadcrumb -->
            <nav class="mb-2 d-flex justify-content-center" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('any', 'index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>

            <!-- Title -->
            <h1 class="mb-4 text-center">Our Services</h1>

            <!-- Services START -->
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <div class="row g-4 g-lg-5">

                        <!-- Service item START -->
                        <div class="col-xl-11">
                            <div
                                class="card card-hover-shadow card-hover-transition shadow-primary-sm bg-body bg-opacity-75 bg-blur rounded-4 p-3 p-lg-4">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <!-- Image -->
                                        <img src="/images/services/4by3/01.jpg" class="card-img mb-3 mb-md-0"
                                            alt="...">
                                    </div>
                                    <div class="col-md-7">
                                        <!-- Content -->
                                        <div class="card-body d-flex flex-column h-100 px-2 px-md-4 py-0 py-md-2">
                                            <!-- Title -->
                                            <h5 class="card-title">Digital marketing solutions</h5>
                                            <p class="card-text">Digital marketing is the art and science of reaching,
                                                and influencing through online channels.</p>

                                            <!-- List -->
                                            <ul class="list-inline d-flex flex-wrap gap-2 mb-3">
                                                <li class="list-inline-item heading-color"> <i
                                                        class="bi bi-check-circle text-success me-1"></i>SEO marketing
                                                </li>
                                                <li class="list-inline-item heading-color"> <i
                                                        class="bi bi-check-circle text-success me-1"></i>Data scraping
                                                </li>
                                                <li class="list-inline-item heading-color"> <i
                                                        class="bi bi-check-circle text-success me-1"></i>Facebook
                                                    marketing</li>
                                                <li class="list-inline-item heading-color"> <i
                                                        class="bi bi-check-circle text-success me-1"></i>Email
                                                    marketing</li>
                                                <li class="list-inline-item heading-color"> <i
                                                        class="bi bi-check-circle text-success me-1"></i>Social
                                                    marketing</li>
                                            </ul>

                                            <!-- Button link -->
                                            <a class="icon-link icon-link-hover stretched-link mt-auto"
                                                href="{{ route('second', ['about', 'service-single']) }}">View
                                                detail<i class="bi bi-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service item END -->

                        <!-- Service item START -->
                        <div class="col-xl-11 ms-auto">
                            <div
                                class="card card-hover-shadow card-hover-transition shadow-primary-sm bg-body bg-opacity-75 bg-blur rounded-4 p-3 p-lg-4">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <!-- Image -->
                                        <img src="/images/services/4by3/02.jpg" class="card-img mb-3 mb-md-0"
                                            alt="...">
                                    </div>
                                    <div class="col-md-7">
                                        <!-- Content -->
                                        <div class="card-body d-flex flex-column h-100 px-2 px-md-4 py-0 py-md-2">
                                            <!-- Title -->
                                            <h5 class="card-title">Brand strategy & identity</h5>
                                            <p class="card-text">Develop comprehensive brand strategies including
                                                market research, positioning.</p>

                                            <!-- List -->
                                            <ul class="list-inline d-flex flex-wrap gap-2 mb-3">
                                                <li class="list-inline-item heading-color"> <i
                                                        class="bi bi-check-circle text-success me-1"></i>Logo design
                                                </li>
                                                <li class="list-inline-item heading-color"> <i
                                                        class="bi bi-check-circle text-success me-1"></i>Brand strategy
                                                </li>
                                                <li class="list-inline-item heading-color"> <i
                                                        class="bi bi-check-circle text-success me-1"></i>Visual
                                                    identity</li>
                                                <li class="list-inline-item heading-color"> <i
                                                        class="bi bi-check-circle text-success me-1"></i>Video
                                                    animation</li>
                                            </ul>

                                            <!-- Button link -->
                                            <a class="icon-link icon-link-hover stretched-link mt-auto"
                                                href="{{ route('second', ['about', 'service-single']) }}">View
                                                detail<i class="bi bi-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service item END -->

                        <!-- Service item START -->
                        <div class="col-xl-11">
                            <div
                                class="card card-hover-shadow card-hover-transition card-img-scale shadow-primary-sm bg-body bg-opacity-50 bg-blur rounded-4 p-3 p-lg-4">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <!-- Image -->
                                        <img src="/images/services/4by3/03.jpg" class="card-img mb-3 mb-md-0"
                                            alt="...">
                                    </div>
                                    <div class="col-md-7">
                                        <!-- Content -->
                                        <div class="card-body d-flex flex-column h-100 px-2 px-md-4 py-0 py-md-2">
                                            <!-- Title -->
                                            <h5 class="card-title">Web design & development</h5>
                                            <p class="card-text">Provide ongoing maintenance, updates, and technical
                                                support to ensure websites.</p>

                                            <!-- List -->
                                            <ul class="list-inline d-flex flex-wrap gap-2 mb-3">
                                                <li class="list-inline-item heading-color"> <i
                                                        class="bi bi-check-circle text-success me-1"></i>Custom website
                                                    design</li>
                                                <li class="list-inline-item heading-color"> <i
                                                        class="bi bi-check-circle text-success me-1"></i>E-commerce
                                                    solutions</li>
                                                <li class="list-inline-item heading-color"> <i
                                                        class="bi bi-check-circle text-success me-1"></i>Maintenance
                                                    and support</li>
                                            </ul>

                                            <!-- Button link -->
                                            <a class="icon-link icon-link-hover stretched-link mt-auto"
                                                href="{{ route('second', ['about', 'service-single']) }}">View
                                                detail<i class="bi bi-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service item END -->

                        <!-- Service item START -->
                        <div class="col-xl-11 ms-auto">
                            <div
                                class="card card-hover-shadow card-hover-transition shadow-primary-sm bg-body bg-opacity-75 bg-blur rounded-4 p-3 p-lg-4">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <!-- Image -->
                                        <img src="/images/services/4by3/04.jpg" class="card-img mb-3 mb-md-0"
                                            alt="...">
                                    </div>
                                    <div class="col-md-7">
                                        <!-- Content -->
                                        <div class="card-body d-flex flex-column h-100 px-2 px-md-4 py-0 py-md-2">
                                            <!-- Title -->
                                            <h5 class="card-title">Database analysis</h5>
                                            <p class="card-text">DImplement systems for collecting data from various
                                                sources to ensure accuracy and reliability.</p>

                                            <!-- List -->
                                            <ul class="list-inline d-flex flex-wrap gap-2 mb-3">
                                                <li class="list-inline-item heading-color"> <i
                                                        class="bi bi-check-circle text-success me-1"></i>Data
                                                    collection</li>
                                                <li class="list-inline-item heading-color"> <i
                                                        class="bi bi-check-circle text-success me-1"></i>Data
                                                    management</li>
                                                <li class="list-inline-item heading-color"> <i
                                                        class="bi bi-check-circle text-success me-1"></i>Reporting</li>
                                                <li class="list-inline-item heading-color"> <i
                                                        class="bi bi-check-circle text-success me-1"></i>Visualization
                                                </li>
                                            </ul>

                                            <!-- Button link -->
                                            <a class="icon-link icon-link-hover stretched-link mt-auto"
                                                href="{{ route('second', ['about', 'service-single']) }}">View
                                                detail<i class="bi bi-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service item END -->

                    </div>
                </div>
            </div>
            <!-- Services END -->
        </div>
    </section>
    <!-- =======================
                    Hero END -->

    <!-- =======================
                    Step START -->
    <section class="pt-md-0 overflow-hidden">
        <div class="container">
            <!-- Title -->
            <h2 class="text-center mb-6">Our workflow</h2>

            <div class="row position-relative g-6 g-lg-7">
                <!-- Step item -->
                <div class="col-md-4 mt-md-8">
                    <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                        <!-- number -->
                        <div
                            class="icon-lg bg-primary rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">
                            01</div>
                        <!-- Info -->
                        <h6 class="mt-4">Initial consultation</h6>
                        <p class="mb-0">An initial meeting to understand your vision and objectives.</p>
                    </div>
                </div>

                <!-- Step item -->
                <div class="col-md-4">
                    <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                        <!-- number -->
                        <div
                            class="icon-lg bg-pink rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">
                            02</div>
                        <!-- Info -->
                        <h6 class="mt-4">Development and Execution</h6>
                        <p class="mb-0">We begin development and execution based on the agreed plan.</p>
                    </div>
                </div>

                <!-- Step item -->
                <div class="col-md-4 mt-md-8">
                    <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                        <!-- number -->
                        <div
                            class="icon-lg bg-purple rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">
                            03</div>
                        <!-- Info -->
                        <h6 class="mt-4"> Review and Delivery</h6>
                        <p class="mb-0">Post-delivery support to ensure a smooth transition and continued success</p>
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
                    Step END -->

    <!-- =======================
                    Left right content START -->
    <section class="py-0">
        <div class="container">
            <div class="row align-items-center align-items-xl-end">
                <!-- Content START -->
                <div class="col-md-5 mb-9 mb-md-0">
                    <h2 class="mb-4">Integrate with a wide range of <span class="text-primary">projects</span></h2>
                    <p class="mb-3">Our integration solutions facilitate smooth collaboration and help you achieve
                        project goals efficiently.</p>
                    <!-- List -->
                    <ul class="list-group list-group-borderless mb-4">
                        <li class="list-group-item heading-color d-flex pb-0"><i
                                class="bi bi-patch-check text-success me-2"></i>Expand your reach</li>
                        <li class="list-group-item heading-color d-flex pb-0"><i
                                class="bi bi-patch-check text-success me-2"></i>Exceptional integration</li>
                        <li class="list-group-item heading-color d-flex pb-0"><i
                                class="bi bi-patch-check text-success me-2"></i>Extensive project connectivity</li>
                        <li class="list-group-item heading-color d-flex pb-0"><i
                                class="bi bi-patch-check text-success me-2"></i>Connect and Collaborate</li>
                    </ul>
                    <!-- Button -->
                    <a class="btn btn-dark icon-link icon-link-hover" href="{{ route('second', [ 'portfolio' ,'modern']) }}">Explore our work<i
                            class="bi bi-arrow-right"></i> </a>
                </div>
                <!-- Content END -->

                <!-- Image -->
                <div class="col-md-6 ms-auto">
                    <div class="bg-secondary bg-opacity-50 rounded-4">
                        <img src="/images/elements/service-2.png" class="mt-n8" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                    Left right content END -->

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
                                    <input type="email" class="form-control bg-secondary" id="floatingInput">
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