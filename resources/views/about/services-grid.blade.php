@extends('layouts.landing', ['headerClass' => 'header-absolute', 'buttons' => true])

@section('header-attribute')
data-bs-theme="dark"
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
                Hero START -->
    <section class="bg-dark position-relative pt-xl-8 pb-0 overflow-hidden">
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

        <div class="container position-relative pt-4 pt-sm-5" data-bs-theme="dark">
            <div class="row">
                <!-- Title and content -->
                <div class="col-md-7 col-lg-5 text-center text-md-start">
                    <!-- Breadcrumb -->
                    <nav class="mb-2 d-flex justify-content-center justify-content-md-start" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="{{ route('any', 'index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                    <!-- Title -->
                    <h1 class="mb-4">Our Professional Services</h1>
                    <!-- Button -->
                    <a href="{{ route('second', [ 'pages' , 'contact-us-v1']) }}" class="btn btn-white mb-0"><i class="bi bi-telephone me-2"></i>Contact
                        our experts</a>
                </div>

                <!-- Image -->
                <div class="col-sm-10 col-md-5 ms-auto mt-5 mt-md-0">
                    <img src="/images/elements/service-hero.png" alt="hero image">
                </div>
            </div>
        </div>

        <!-- Curve decoration -->
        <span>
            <svg class="position-absolute bottom-0 start-0 mb-n1 mb-md-n6" viewBox="0 0 1950 237"
                style="enable-background:new 0 0 1950 237;" xml:space="preserve">
                <path class="fill-body" d="M1949.5,236.4H0v-164c717.2-131.2,1598.5-54.7,1949.5,0V236.4z" />
            </svg>
        </span>
    </section>
    <!-- =======================
                Hero END -->

    <!-- =======================
                Services START -->
    <section class="position-relative pt-6 pt-xxl-0">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <!-- Service item -->
                <div class="col-md-6 col-xl-4">
                    <div class="card card-bg-grad-hover card-content-hover bg-secondary bg-opacity-75 h-100 p-4 p-sm-5">
                        <!-- Card header -->
                        <div class="card-header bg-transparent p-0 pb-5">
                            <!-- Icon -->
                            <img src="/images/services/3d-icon/development.png" class="h-70px" alt="icon">
                        </div>

                        <!-- Card body -->
                        <div class="card-footer bg-transparent mt-auto p-0">
                            <h6 class="mb-3">Web design & Development</h6>
                            <!-- List -->
                            <ul class="ps-3 mb-0">
                                <li class="mb-2">Custom website design</li>
                                <li class="mb-2">E-commerce solutions</li>
                                <li class="mb-2">Website maintenance and support</li>
                            </ul>
                        </div>
                        <!-- Hover button -->
                        <div
                            class="hover-content d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
                            <a class="btn btn-white icon-link icon-link-hover mb-0 stretched-link"
                                href="{{ route('second', ['about', 'service-single']) }}">Explore service<i
                                    class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col-md-6 col-xl-4">
                    <div
                        class="card card-bg-grad-hover card-content-hover bg-secondary bg-opacity-75 h-100 p-4 p-sm-5">
                        <!-- Card header -->
                        <div class="card-header bg-transparent p-0 pb-5">
                            <!-- Icon -->
                            <img src="/images/services/3d-icon/marketing.png" class="h-70px" alt="icon">
                        </div>

                        <!-- Card body -->
                        <div class="card-footer bg-transparent mt-auto p-0">
                            <h6 class="mb-3">Digital marketing solutions</h6>
                            <!-- List -->
                            <ul class="ps-3 mb-0">
                                <li class="mb-2">Fundamentals of SEO</li>
                                <li class="mb-2">Social media marketing</li>
                                <li class="mb-2">Pay-Per-Click</li>
                            </ul>
                        </div>
                        <!-- Hover button -->
                        <div
                            class="hover-content d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
                            <a class="btn btn-white icon-link icon-link-hover mb-0 stretched-link"
                                href="{{ route('second', ['about', 'service-single']) }}">Explore service<i
                                    class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col-md-6 col-xl-4">
                    <div
                        class="card card-bg-grad-hover card-content-hover bg-secondary bg-opacity-75 h-100 p-4 p-sm-5">
                        <!-- badge -->
                        <div class="badge bg-dark position-absolute top-0 end-0 m-4">New</div>

                        <!-- Card header -->
                        <div class="card-header bg-transparent p-0 pb-5">
                            <!-- Icon -->
                            <img src="/images/services/3d-icon/brand.png" class="h-70px" alt="icon">
                        </div>

                        <!-- Card body -->
                        <div class="card-footer bg-transparent mt-auto p-0">
                            <h6 class="mb-3">Brand strategy & Identity</h6>
                            <!-- List -->
                            <ul class="ps-3 mb-0">
                                <li class="mb-2">Logo design</li>
                                <li class="mb-2">Brand strategy</li>
                                <li class="mb-2">Visual identity</li>
                            </ul>
                        </div>
                        <!-- Hover button -->
                        <div
                            class="hover-content d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
                            <a class="btn btn-white icon-link icon-link-hover mb-0 stretched-link"
                                href="{{ route('second', ['about', 'service-single']) }}">Explore service<i
                                    class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col-md-6 col-xl-4">
                    <div
                        class="card card-bg-grad-hover card-content-hover bg-secondary bg-opacity-75 h-100 p-4 p-sm-5">
                        <!-- Card header -->
                        <div class="card-header bg-transparent p-0 pb-5">
                            <!-- Icon -->
                            <img src="/images/services/3d-icon/database.png" class="h-70px" alt="icon">
                        </div>

                        <!-- Card body -->
                        <div class="card-footer bg-transparent mt-auto p-0">
                            <h6 class="mb-3">Database analysis</h6>
                            <!-- List -->
                            <ul class="ps-3 mb-0">
                                <li class="mb-2">Data collection and management</li>
                                <li class="mb-2">Data analysis</li>
                                <li class="mb-2">Reporting and visualization</li>
                            </ul>
                        </div>
                        <!-- Hover button -->
                        <div
                            class="hover-content d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
                            <a class="btn btn-white icon-link icon-link-hover mb-0 stretched-link"
                                href="{{ route('second', ['about', 'service-single']) }}">Explore service<i
                                    class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col-md-6 col-xl-4">
                    <div
                        class="card card-bg-grad-hover card-content-hover bg-secondary bg-opacity-75 h-100 p-4 p-sm-5">
                        <!-- Card header -->
                        <div class="card-header bg-transparent p-0 pb-5">
                            <!-- Icon -->
                            <img src="/images/services/3d-icon/consulting.png" class="h-70px" alt="icon">
                        </div>

                        <!-- Card body -->
                        <div class="card-footer bg-transparent mt-auto p-0">
                            <h6 class="mb-3">Consulting services</h6>
                            <!-- List -->
                            <ul class="ps-3 mb-0">
                                <li class="mb-2">Business strategy</li>
                                <li class="mb-2">Technology consulting</li>
                                <li class="mb-2">Operational improvement</li>
                            </ul>
                        </div>
                        <!-- Hover button -->
                        <div
                            class="hover-content d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
                            <a class="btn btn-white icon-link icon-link-hover mb-0 stretched-link"
                                href="{{ route('second', ['about', 'service-single']) }}">Explore service<i
                                    class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col-md-6 col-xl-4">
                    <div
                        class="card card-bg-grad-hover card-content-hover bg-secondary bg-opacity-75 h-100 p-4 p-sm-5">
                        <!-- Card header -->
                        <div class="card-header bg-transparent p-0 pb-5">
                            <!-- Icon -->
                            <img src="/images/services/3d-icon/app-dev.png" class="h-70px" alt="icon">
                        </div>

                        <!-- Card body -->
                        <div class="card-footer bg-transparent mt-auto p-0">
                            <h6 class="mb-3">Mobile app development</h6>
                            <!-- List -->
                            <ul class="ps-3 mb-0">
                                <li class="mb-2">Custom app design & development</li>
                                <li class="mb-2">Cross-Platform solutions</li>
                                <li class="mb-2">Usability testing</li>
                            </ul>
                        </div>
                        <!-- Hover button -->
                        <div
                            class="hover-content d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
                            <a class="btn btn-white icon-link icon-link-hover mb-0 stretched-link"
                                href="{{ route('second', ['about', 'service-single']) }}">Explore service<i
                                    class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div> <!-- Row END -->

            <!-- CTA -->
            <p class="mb-0 mt-5 text-center heading-color">🔥 Let’s create something great work together.
                <a href="{{ route('second', [ 'pages' , 'contact-us-v1']) }}" class="fw-bold hover-underline-animation heading-color">Got a project in
                    mind?</a>
            </p>
        </div>
    </section>
    <!-- =======================
                Services END -->

    <!-- =======================
                Why choose us START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <!-- Image and rating -->
                <div class="col-md-6 position-relative">
                    <!-- Rocket image -->
                    <div class="position-absolute top-0 start-0 ms-xl-5">
                        <img src="/images/elements/rocket-02.png" class="h-150px rotate-335" alt="rocket image">
                    </div>

                    <div class="row ps-xl-7">
                        <!-- Image -->
                        <div class="col-sm-8">
                            <img src="/images/about/13.jpg" class="rounded-pill" alt="image">
                        </div>
                        <!-- Trsutpilot rating -->
                        <div class="col-sm-4 col-md-8 col-lg-5 mt-auto ms-lg-n5 mb-5">
                            <div class="card shadow rounded text-center p-0">
                                <!-- Card body -->
                                <div class="card-body p-3">
                                    <h6 class="h1">4.8</h6>
                                    <ul class="list-inline d-flex justify-content-center gap-2 mb-1">
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
                                    <span>2855 Reviews</span>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer bg-dark p-3">
                                    <img src="/images/elements/trustpilot-light.svg" class="h-30px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contents -->
                <div class="col-md-6 col-lg-5 ms-auto mt-5 mt-md-0">
                    <!-- Title -->
                    <h2>Why choose us?</h2>
                    <!-- Accordion START -->
                    <div class="accordion accordion-icon accordion-border-bottom mt-5" id="accordionFaq">
                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <div class="accordion-header font-base" id="heading-1">
                                <button class="accordion-button fw-semibold rounded collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true"
                                    aria-controls="collapse-1">
                                    <span class="lead">Rapid prototype development</span>
                                </button>
                            </div>
                            <!-- Body -->
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body pb-0">
                                    Our expert team delivers a functional prototype within 24 hours, ensuring rapid
                                    progress and immediate feedback.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <div class="accordion-header font-base" id="heading-2">
                                <button class="accordion-button fw-semibold rounded collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false"
                                    aria-controls="collapse-2">
                                    <span class="lead">Client-Centric approach</span>
                                </button>
                            </div>
                            <!-- Body -->
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body pb-0">
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
                                    <span class="lead">24/7 tech & business support</span>
                                </button>
                            </div>
                            <!-- Body -->
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body pb-0">
                                    We provide a range of tools, guides, and best practices to help you create designs,
                                    websites.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion END -->
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
                Why choose us END -->

    <!-- =======================
                Contact us START-->
    <section class="bg-secondary-grad position-relative overflow-hidden">

        <!-- Shape decoration -->
        <div class="position-absolute bottom-0 start-0 mb-n9 d-none d-sm-block">
            <img src="/images/elements/grad-shape/10.png" class="rotate-270 h-500px h-lg-700px"
                alt="decoration shape">
        </div>

        <div class="container position-relative">
            <div class="row g-4">
                <!-- Content -->
                <div class="col-lg-5">
                    <h2 class="mb-3">Let's level up your brand, together</h2>
                    <p>Reach us anytime at <a href="#">example@gmail.com</a></p>
                </div>

                <!-- Contact form -->
                <div class="col-lg-6 ms-auto">
                    <form class="row form-border-transparent g-3">
                        <div class="col-md-6">
                            <label class="form-label">Your name</label>
                            <input type="text" class="form-control" placeholder="Full name">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" placeholder="Subject name">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" placeholder="Write your message here...." id="floatingTextarea2"
                                style="height: 150px"></textarea>
                        </div>

                        <div class="col-12 d-xl-flex align-items-center gap-3 mt-4">
                            <!-- Button -->
                            <button class="btn btn-primary text-nowrap mb-2 mb-xl-0">Send a message</button>
                            <!-- Check box -->
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input border" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">I agree that my data is <a
                                        href="#" class=" hover-underline-animation text-primary-hover">collected
                                        and stored</a>.</label>
                            </div>
                        </div>
                    </form>
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