@extends('layouts.landing', ['headerClass' => 'header-absolute', 'buttons' => true])

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Hero START -->
    <section class="pt-xl-8 pb-5 pb-md-7">
        <!-- Title and content -->
        <div class="container text-center position-relative pt-4 pt-sm-5">
            <!-- Breadcrumb -->
            <nav class="d-flex justify-content-center mb-2" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0 mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('any', 'index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Portfolio case study</li>
                </ol>
            </nav>
            <!-- Title -->
            <h1>Case studies</h1>
        </div>
    </section>
    <!-- =======================
    Hero END -->

    <!-- =======================
    Portfolio START -->
    <section class="pt-0">
        <div class="container">
            <!-- Portfolio item START -->
            <div class="card card-img-scale bg-transparent p-0 mb-4 mb-lg-0">
                <!-- Border -->
                <div
                    class="position-absolute top-50 start-50 translate-middle border opacity-4 h-100 d-none d-lg-block">
                </div>
                <!-- Dot circle -->
                <span
                    class="position-absolute top-50 start-50 translate-middle rounded-circle bg-primary p-1 d-none d-lg-block">
                    <span class="d-block rounded-circle bg-body p-1"> </span>
                </span>

                <div class="row align-items-center g-0">
                    <!-- Image -->
                    <div class="col-lg-6 p-lg-5">
                        <div class="card-img-scale-wrapper rounded-4">
                            <a href="{{ route('second', ['portfolio', 'case-study-v1']) }}"><img
                                    src="/images/portfolio/list/04.jpg" class="rounded-4 img-scale"
                                    alt="portfolio image"></a>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="col-lg-6">
                        <div class="card-body px-2 p-lg-5">
                            <!-- Client logo -->
                            <div class="mb-3 mb-lg-4">
                                <img src="/images/client/logo-dark/01.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-light/01.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                            </div>
                            <!-- Title -->
                            <h5 class="mb-3">Mobile app development</h5>
                            <p>The app received positive feedback for its functionality and user experience, helping the
                                client reach a wider audience.</p>
                            <!-- List -->
                            <ul class="nav nav-divider align-items-center mb-3 mb-lg-4">
                                <li class="nav-item heading-color">2024</li>
                                <li class="nav-item heading-color">Branding</li>
                                <li class="nav-item heading-color">Packaging</li>
                                <li class="nav-item heading-color">UI/UX design</li>
                            </ul>
                            <!-- Button -->
                            <a href="{{ route('second', ['portfolio', 'case-study-v1']) }}"
                                class="link-primary-grad icon-link icon-link-hover">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio item END -->

            <!-- Portfolio item START -->
            <div class="card card-img-scale bg-transparent p-0 mb-4 mb-lg-0">
                <!-- Border -->
                <div
                    class="position-absolute top-50 start-50 translate-middle border opacity-4 h-100 d-none d-lg-block">
                </div>
                <!-- Dot circle -->
                <span
                    class="position-absolute top-50 start-50 translate-middle rounded-circle bg-primary p-1 d-none d-lg-block">
                    <span class="d-block rounded-circle bg-body p-1"> </span>
                </span>

                <div class="row align-items-center g-0">
                    <!-- Content -->
                    <div class="col-lg-6 order-2">
                        <div class="card-body px-2 p-lg-5">
                            <!-- Client logo -->
                            <div class="mb-3 mb-lg-4">
                                <img src="/images/client/logo-dark/03.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-light/03.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                            </div>
                            <!-- Title -->
                            <h5 class="mb-3">Brand identity development</h5>
                            <p>The most powerful software & app landing page for any kind of app and software marketing
                                business.</p>
                            <!-- List -->
                            <ul class="nav nav-divider align-items-center mb-3 mb-lg-4">
                                <li class="nav-item heading-color">2023</li>
                                <li class="nav-item heading-color">Graphics</li>
                                <li class="nav-item heading-color">UI/UX design</li>
                            </ul>
                            <!-- Button -->
                            <a href="{{ route('second', ['portfolio', 'case-study-v2']) }}"
                                class="link-primary-grad icon-link icon-link-hover">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="col-lg-6 order-1 order-lg-2 p-lg-5">
                        <div class="card-img-scale-wrapper rounded-4">
                            <a href="{{ route('second', ['portfolio', 'case-study-v2']) }}"><img
                                    src="/images/portfolio/list/02.jpg" class="rounded-4 img-scale"
                                    alt="portfolio image"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio item END -->

            <!-- Portfolio item START -->
            <div class="card card-img-scale bg-transparent p-0 mb-4 mb-lg-0">
                <!-- Border -->
                <div
                    class="position-absolute top-50 start-50 translate-middle border opacity-4 h-100 d-none d-lg-block">
                </div>
                <!-- Dot circle -->
                <span
                    class="position-absolute top-50 start-50 translate-middle rounded-circle bg-primary p-1 d-none d-lg-block">
                    <span class="d-block rounded-circle bg-body p-1"> </span>
                </span>

                <div class="row align-items-center g-0">
                    <!-- Image -->
                    <div class="col-lg-6 p-lg-5">
                        <div class="card-img-scale-wrapper rounded-4">
                            <a href="{{ route('second', ['portfolio', 'case-study-v1']) }}"><img
                                    src="/images/portfolio/list/03.jpg" class="rounded-4 img-scale"
                                    alt="portfolio image"></a>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="col-lg-6">
                        <div class="card-body px-2 p-lg-5">
                            <!-- Client logo -->
                            <div class="mb-3 mb-lg-4">
                                <img src="/images/client/logo-dark/08.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-light/08.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                            </div>
                            <!-- Title -->
                            <h5 class="mb-3">Transforming ideas into reality</h5>
                            <p>The website significantly improved the client's online sales and customer engagement.</p>
                            <!-- List -->
                            <ul class="nav nav-divider align-items-center mb-3 mb-lg-4">
                                <li class="nav-item heading-color">2021</li>
                                <li class="nav-item heading-color"> Web Design</li>
                                <li class="nav-item heading-color">Branding</li>
                                <li class="nav-item heading-color">UI/UX design</li>
                            </ul>
                            <!-- Button -->
                            <a href="{{ route('second', ['portfolio', 'case-study-v1']) }}"
                                class="link-primary-grad icon-link icon-link-hover">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio item END -->

            <!-- Portfolio item START -->
            <div class="card card-img-scale bg-transparent p-0 mb-4 mb-lg-0">
                <!-- Border -->
                <div
                    class="position-absolute top-50 start-50 translate-middle border opacity-4 h-100 d-none d-lg-block">
                </div>
                <!-- Dot circle -->
                <span
                    class="position-absolute top-50 start-50 translate-middle rounded-circle bg-primary p-1 d-none d-lg-block">
                    <span class="d-block rounded-circle bg-body p-1"> </span>
                </span>

                <div class="row align-items-center g-0">
                    <!-- Content -->
                    <div class="col-lg-6 order-2">
                        <div class="card-body px-2 p-lg-5">
                            <!-- Client logo -->
                            <div class="mb-3 mb-lg-4">
                                <img src="/images/client/logo-dark/05.svg" class="light-mode-item h-30px"
                                    alt="client logo">
                                <img src="/images/client/logo-light/05.svg" class="dark-mode-item h-30px"
                                    alt="client logo">
                            </div>
                            <!-- Title -->
                            <h5 class="mb-3">Digital marketing overhaul</h5>
                            <p> Designed and developed a responsive e-commerce platform for folio agency retail.</p>
                            <!-- List -->
                            <ul class="nav nav-divider align-items-center mb-3 mb-lg-4">
                                <li class="nav-item heading-color">2020</li>
                                <li class="nav-item heading-color">Marketing</li>
                                <li class="nav-item heading-color">SEO</li>
                                <li class="nav-item heading-color">Social media</li>
                            </ul>
                            <!-- Button -->
                            <a href="{{ route('second', ['portfolio', 'case-study-v2']) }}"
                                class="link-primary-grad icon-link icon-link-hover">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="col-lg-6 order-1 order-lg-2 p-lg-5">
                        <div class="card-img-scale-wrapper rounded-4">
                            <a href="{{ route('second', ['portfolio', 'case-study-v2']) }}"><img
                                    src="/images/portfolio/list/01.jpg" class="rounded-4 img-scale"
                                    alt="portfolio image"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio item END -->

            <!-- Load more button -->
            <div class="d-grid justify-content-center mt-6">
                <a href="#!" role="button" class="btn btn-secondary mb-0"> Load more work </a>
            </div>
        </div>
    </section>
    <!-- =======================
    Portfolio END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer')

<!-- Back to top -->
<div class="back-top"></div>
@endsection