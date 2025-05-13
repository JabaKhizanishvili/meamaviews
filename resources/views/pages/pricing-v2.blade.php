@extends('layouts.landing', ['headerClass' => 'header-absolute', 'buttons' => true])

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
        Hero START -->
    <section class="bg-secondary position-relative pt-xl-8 pb-0 mb-n4 overflow-hidden">
        <!-- Clay decoration -->
        <div class="position-absolute end-0 top-0 mt-6 me-n6 z-index-2 d-none d-md-block">
            <img src="/images/elements/clay-decoration.png" class="h-400px" alt="Clay-decoration">
        </div>

        <!-- Grad blur -->
        <div class="position-absolute top-0 start-50 mt-n9 ms-n9">
            <img src="/images/elements/grad-shape/blur-decoration.svg" class="blur-8 opacity-1" alt="Grad shape">
        </div>

        <!-- Grad blur -->
        <div class="position-absolute start-0 top-0">
            <img src="/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-1 blur-8 h-300px rotate-335"
                alt="Grad shape">
        </div>

        <div class="container position-relative z-index-2 pt-4 pt-sm-5">
            <!-- Title and content -->
            <div class="inner-container-small text-center mb-5 mb-sm-7">
                <!-- Breadcrumb -->
                <nav class="mb-2 d-flex justify-content-center" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item"><a href="{{ route('any', 'index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pricing - v2</li>
                    </ol>
                </nav>

                <!-- Title -->
                <h1 class="mb-0">Affordable & flexible pricing plans</h1>
            </div>

            <!-- Pricing box START -->
            <div class="row g-4 g-lg-5">
                <!-- Pricing item START -->
                <div class="col-xl-10 mx-auto">
                    <div
                        class="card card-hover-shadow card-hover-transition bg-body bg-opacity-75 rounded-4 p-4 p-sm-5">
                        <div class="row g-4 g-md-0">
                            <div class="col-md-6">
                                <!-- Icon image -->
                                <div class="icon-xl bg-secondary-grad shadow-primary rounded-circle mb-4">
                                    <img src="/images/elements/rocket.png" class="h-40px" alt="rocket image">
                                </div>
                                <p class="lead heading-color fw-semibold mb-2">Basic plan</p>
                                <!-- Pricing text -->
                                <p class="mb-2"> <span class="h1 mb-0">$59</span> /month</p>
                                <p class="mb-0">Ideal for small teams, the Basic plan manages up to 10 projects.</p>
                            </div>

                            <div class="col-md-5 ms-auto">
                                <!-- Content -->
                                <div class="card-body d-flex flex-column h-100 p-0">
                                    <span class="fw-semibold opacity-6 mb-1 mb-md-3">Quick look at all the
                                        features</span>
                                    <!-- Feature list -->
                                    <ul class="list-group list-group-borderless mb-3">
                                        <li class="list-group-item d-flex heading-color mb-0"><i
                                                class="bi bi-check-lg text-success me-1"></i>Customizable features</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i
                                                class="bi bi-check-lg text-success me-1"></i>5 user accounts</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i
                                                class="bi bi-check-lg text-success me-1"></i>Customizable features</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i
                                                class="bi bi-check-lg text-success me-1"></i>10 GB storage</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i
                                                class="bi bi-check-lg text-success me-1"></i>Email support</li>
                                    </ul>
                                    <!-- Button -->
                                    <a class="btn btn-dark icon-link icon-link-hover justify-content-center mb-0"
                                        href="#">Purchase<i class="bi bi-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pricing item END -->

                <!-- Pricing item START -->
                <div class="col-xl-10 mx-auto">
                    <div
                        class="card card-hover-shadow card-hover-transition bg-body bg-opacity-75 rounded-4 p-4 p-sm-5">
                        <div class="row g-4 g-md-0">
                            <div class="col-md-6">
                                <!-- Icon image -->
                                <div class="icon-xl bg-secondary-grad shadow-primary rounded-circle mb-4">
                                    <img src="/images/elements/fire.png" class="h-40px" alt="rocket image">
                                </div>
                                <p class="lead heading-color fw-semibold mb-2">Professional plan</p>
                                <!-- Pricing text -->
                                <p class="mb-2"> <span class="h1 mb-0">$99</span> /month</p>
                                <p class="mb-0">Get priority email support and access to premium templates for a more
                                    comprehensive solution.</p>
                            </div>

                            <div class="col-md-5 ms-auto">
                                <!-- Content -->
                                <div class="card-body d-flex flex-column h-100 p-0">
                                    <span class="fw-semibold opacity-6 mb-1 mb-md-3">Quick look at all the
                                        features</span>
                                    <!-- Feature list -->
                                    <ul class="list-group list-group-borderless mb-3">
                                        <li class="list-group-item d-flex heading-color mb-0"><i
                                                class="bi bi-check-lg text-success me-1"></i>Access to basic features
                                        </li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i
                                                class="bi bi-check-lg text-success me-1"></i>15 user accounts</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i
                                                class="bi bi-check-lg text-success me-1"></i>Customizable features</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i
                                                class="bi bi-check-lg text-success me-1"></i>50 GB storage</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i
                                                class="bi bi-check-lg text-success me-1"></i>Dedicated account manager
                                        </li>
                                    </ul>
                                    <!-- Button -->
                                    <a class="btn btn-dark icon-link icon-link-hover justify-content-center mb-0"
                                        href="#">Purchase<i class="bi bi-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pricing item END -->

                <!-- Pricing item START -->
                <div class="col-xl-10 mx-auto">
                    <div class="card card-hover-shadow card-hover-transition bg-primary-grad rounded-4 p-4 p-sm-5"
                        data-bs-theme="dark">
                        <div class="row g-4 g-md-0">
                            <div class="col-md-6">
                                <!-- Icon image -->
                                <div class="icon-xl bg-dark rounded-circle mb-4">
                                    <img src="/images/elements/thunder.png" class="h-40px" alt="rocket image">
                                </div>
                                <p class="lead heading-color fw-semibold mb-2">Enterprise plan</p>
                                <!-- Pricing text -->
                                <p class="h1 heading-color mb-2">Custom</p>
                                <p class="mb-0">For businesses with unique requirements, our Custom Plan delivers a
                                    fully personalized experience.</p>
                            </div>

                            <div class="col-md-5 ms-auto">
                                <!-- Content -->
                                <div class="card-body d-flex flex-column h-100 p-0">
                                    <span class="fw-semibold mb-1 mb-md-3">Quick look at all the features</span>
                                    <!-- Feature list -->
                                    <ul class="list-group list-group-borderless mb-3">
                                        <li class="list-group-item d-flex heading-color mb-0"><i
                                                class="bi bi-check-lg text-success me-1"></i>Unlimited projects</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i
                                                class="bi bi-check-lg text-success me-1"></i>Custom reporting and
                                            analytics</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i
                                                class="bi bi-check-lg text-success me-1"></i>Dedicated account manager
                                        </li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i
                                                class="bi bi-check-lg text-success me-1"></i>Tailored support and
                                            consulting</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i
                                                class="bi bi-check-lg text-success me-1"></i>Personalized onboarding
                                            and training</li>
                                    </ul>
                                    <!-- Button -->
                                    <a class="btn btn-white icon-link icon-link-hover justify-content-center mb-0"
                                        href="#">Contact us<i class="bi bi-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pricing item END -->
            </div>
            <!-- Pricing box END -->
        </div>

        <!-- Skew decoration -->
        <span class="position-absolute bottom-0 start-0">
            <svg class="text-dark" width="1920" height="73" viewBox="0 0 1920 73" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0L1920 61.5V73H0V0Z" fill="currentColor"></path>
            </svg>
        </span>
    </section>
    <!-- =======================
        Hero END -->

    <!-- =======================
         Benefits START -->
    <section class="bg-dark overflow-hidden position-relative" data-bs-theme="dark">
        <!-- Blur decoration -->
        <div class="position-absolute bottom-0 end-0 mb-n8">
            <img src="/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-2 blur-9" alt="Grad shape">
        </div>

        <div class="container position-relative">
            <div class="row g-4">
                <!-- Key Benefits -->
                <div class="col-lg-4">
                    <p class="heading-color">Key benefits</p>
                    <!-- List -->
                    <ul class="list-group list-group-borderless mb-4">
                        <li class="list-group-item heading-color lead d-flex"><i
                                class="bi bi-wallet2 text-primary me-2"></i>No hidden fees</li>
                        <li class="list-group-item heading-color lead d-flex"><i
                                class="bi bi-headset text-pink me-2"></i>24/7 Customer support</li>
                        <li class="list-group-item heading-color lead d-flex"><i
                                class="bi bi-rocket-takeoff text-warning me-2"></i>Easy upgrade & downgrade</li>
                        <li class="list-group-item heading-color lead d-flex"><i
                                class="bi bi-clock-history text-success me-2"></i>You can cancel anytime</li>
                    </ul>
                </div>

                <!-- Skill sets and blockquote -->
                <div class="col-lg-6 ms-auto">
                    <!-- Skill sets -->
                    <div class="row g-4 g-lg-6 mb-5">
                        <div class="col-sm-6">
                            <h3 class="border-start border-primary border-2 ps-4 mb-3">2,000+</h3>
                            <p class="mb-0">Customers have used our awesome templates since 2019</p>
                        </div>

                        <div class="col-sm-6">
                            <h3 class="border-start border-primary border-2 ps-4 mb-3">85+</h3>
                            <p class="mb-0">Client's projects complete all over the world</p>
                        </div>
                    </div>

                    <!-- Blockquote -->
                    <blockquote class="d-flex">
                        <!-- Avatar -->
                        <div class="avatar avatar-xl flex-shrink-0">
                            <img class="avatar-img rounded-circle" src="/images/avatar/06.jpg" alt="avatar">
                        </div>
                        <div class="ms-4">
                            <!-- Content -->
                            <p class="fs-6 fw-normal heading-color mb-4">"We believe that it takes great people to
                                deliver a great product"</p>
                            <div class="blockquote-footer mb-0">
                                By Albert Schweitzer
                            </div>
                        </div>
                    </blockquote>
                </div>

            </div>
        </div>
    </section>
    <!-- =======================
         Benefits END -->

    <!-- =======================
         Faq START -->
    <section class="position-relative overflow-hidden">
        <!-- Grad shape decoration -->
        <div class="position-absolute start-0 bottom-0 mb-n7 ms-n7 d-none d-md-block">
            <img src="/images/elements/grad-shape/05.png" class="h-md-300px h-xl-400px h-xxl-500px" alt="grad shape">
        </div>

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

@include('layouts.partials/footer')

<!-- Back to top -->
<div class="back-top"></div>
@endsection