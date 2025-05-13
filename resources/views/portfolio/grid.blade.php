@extends('layouts.landing', ['headerClass' => 'header-absolute', 'buttons' => true])

@section('header-attribute')
data-bs-theme="dark"
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Hero START -->
    <section class="bg-dark position-relative pt-xl-8 overflow-hidden">
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

        <!-- Title and content -->
        <div class="inner-container text-center mx-auto position-relative pt-4 pt-sm-5">
            <!-- Breadcrumb -->
            <nav class="mb-2 d-flex justify-content-center" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-dark pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('any', 'index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                </ol>
            </nav>
            <!-- Title -->
            <h1 class="mb-5 text-white">Our Portfolio</h1>
        </div>

        <!-- Curve decoration -->
        <span>
            <svg class="position-absolute bottom-0 start-0 mb-n1 mb-lg-n5 mb-xxl-n7" viewBox="0 0 1950 237"
                style="enable-background:new 0 0 1950 237;" xml:space="preserve">
                <path class="fill-body" d="M1949.5,236.4H0v-164c717.2-131.2,1598.5-54.7,1949.5,0V236.4z" />
            </svg>
        </span>
    </section>
    <!-- =======================
    Hero END -->

    <!-- =======================
    Portfolio START -->
    <section class="position-relative pt-3">
        <div class="container">
            <!-- Tabs -->
            <ul class="nav nav-underline justify-content-center gap-sm-5 mb-4 mb-sm-6">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Selected</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Digital</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Branding</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Web design</a>
                </li>
            </ul>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 g-lg-5 mb-5">
                <!-- Portfolio item -->
                <div class="col">
                    <div class="card card-img-scale card-content-hover overflow-hidden rounded-4">
                        <div class="card-img-scale-wrapper">
                            <!-- Hover content -->
                            <div class="hover-content bg-blur bg-dark bg-opacity-10 p-4">
                                <!-- Hover content -->
                                <div class="z-index-2 mt-auto">
                                    <h6 class="mb-1 text-white">Design blast</h6>
                                    <small class="text-white">UI/UX design</small>
                                </div>
                            </div>
                            <!-- Image -->
                            <a href="{{ route('second', ['portfolio', 'case-study-v1']) }}"
                                class="stretched-link"><img src="/images/portfolio/3by4/01.jpg" class="img-scale"
                                    alt="portfolio-img"></a>
                        </div>
                    </div>
                </div>

                <!-- Portfolio item -->
                <div class="col">
                    <div class="card card-img-scale card-content-hover overflow-hidden rounded-4">
                        <div class="card-img-scale-wrapper">
                            <!-- Hover content -->
                            <div class="hover-content bg-blur bg-dark bg-opacity-10 p-4">
                                <!-- Hover content -->
                                <div class="z-index-2 mt-auto">
                                    <h6 class="mb-1 text-white">Media mastery</h6>
                                    <small class="text-white">SEO</small>
                                </div>
                            </div>
                            <!-- Image -->
                            <a href="{{ route('second', ['portfolio', 'case-study-v1']) }}"
                                class="stretched-link"><img src="/images/portfolio/3by4/09.jpg" class="img-scale"
                                    alt="portfolio-img"></a>
                        </div>
                    </div>
                </div>

                <!-- Portfolio item -->
                <div class="col">
                    <div class="card card-img-scale card-content-hover overflow-hidden rounded-4">
                        <div class="card-img-scale-wrapper">
                            <!-- Hover content -->
                            <div class="hover-content bg-blur bg-dark bg-opacity-10 p-4">
                                <!-- Hover content -->
                                <div class="z-index-2 mt-auto">
                                    <h6 class="mb-1 text-white">Brand revamp</h6>
                                    <small class="text-white">Logo design</small>
                                </div>
                            </div>
                            <!-- Image -->
                            <a href="{{ route('second', ['portfolio', 'case-study-v1']) }}"
                                class="stretched-link"><img src="/images/portfolio/3by4/03.jpg" class="img-scale"
                                    alt="portfolio-img"></a>
                        </div>
                    </div>
                </div>

                <!-- Portfolio item -->
                <div class="col">
                    <div class="card card-img-scale card-content-hover overflow-hidden rounded-4">
                        <div class="card-img-scale-wrapper">
                            <!-- Hover content -->
                            <div class="hover-content bg-blur bg-dark bg-opacity-10 p-4">
                                <!-- Hover content -->
                                <div class="z-index-2 mt-auto">
                                    <h6 class="mb-1 text-white">ShopSmart</h6>
                                    <small class="text-white">E-commerce</small>
                                </div>
                            </div>
                            <!-- Image -->
                            <a href="{{ route('second', ['portfolio', 'case-study-v2']) }}"
                                class="stretched-link"><img src="/images/portfolio/3by4/04.jpg" class="img-scale"
                                    alt="portfolio-img"></a>
                        </div>
                    </div>
                </div>

                <!-- Portfolio item -->
                <div class="col">
                    <div class="card card-img-scale card-content-hover overflow-hidden rounded-4">
                        <div class="card-img-scale-wrapper">
                            <!-- Hover content -->
                            <div class="hover-content bg-blur bg-dark bg-opacity-10 p-4">
                                <!-- Hover content -->
                                <div class="z-index-2 mt-auto">
                                    <h6 class="mb-1 text-white">Surge Tech</h6>
                                    <small class="text-white">UI/UX design</small>
                                </div>
                            </div>
                            <!-- Image -->
                            <a href="{{ route('second', ['portfolio', 'case-study-v2']) }}"
                                class="stretched-link"><img src="/images/portfolio/3by4/05.jpg" class="img-scale"
                                    alt="portfolio-img"></a>
                        </div>
                    </div>
                </div>

                <!-- Portfolio item -->
                <div class="col">
                    <div class="card card-img-scale card-content-hover overflow-hidden rounded-4">
                        <div class="card-img-scale-wrapper">
                            <!-- Hover content -->
                            <div class="hover-content bg-blur bg-dark bg-opacity-10 p-4">
                                <!-- Hover content -->
                                <div class="z-index-2 mt-auto">
                                    <h6 class="mb-1 text-white">App Innovation</h6>
                                    <small class="text-white">Development</small>
                                </div>
                            </div>
                            <!-- Image -->
                            <a href="{{ route('second', ['portfolio', 'case-study-v2']) }}"
                                class="stretched-link"><img src="/images/portfolio/3by4/07.jpg" class="img-scale"
                                    alt="portfolio-img"></a>
                        </div>
                    </div>
                </div>

                <!-- Portfolio item -->
                <div class="col">
                    <div class="card card-img-scale card-content-hover overflow-hidden rounded-4">
                        <div class="card-img-scale-wrapper">
                            <!-- Hover content -->
                            <div class="hover-content bg-blur bg-dark bg-opacity-10 p-4">
                                <!-- Hover content -->
                                <div class="z-index-2 mt-auto">
                                    <h6 class="mb-1 text-white">Momentum</h6>
                                    <small class="text-white">Design</small>
                                </div>
                            </div>
                            <!-- Image -->
                            <a href="{{ route('second', ['portfolio', 'case-study-v1']) }}"
                                class="stretched-link"><img src="/images/portfolio/3by4/02.jpg" class="img-scale"
                                    alt="portfolio-img"></a>
                        </div>
                    </div>
                </div>

                <!-- Portfolio item -->
                <div class="col">
                    <div class="card card-img-scale card-content-hover overflow-hidden rounded-4">
                        <div class="card-img-scale-wrapper">
                            <!-- Hover content -->
                            <div class="hover-content bg-blur bg-dark bg-opacity-10 p-4">
                                <!-- Hover content -->
                                <div class="z-index-2 mt-auto">
                                    <h6 class="mb-1 text-white">TechWave</h6>
                                    <small class="text-white">Animation</small>
                                </div>
                            </div>
                            <!-- Image -->
                            <a href="{{ route('second', ['portfolio', 'case-study-v2']) }}"
                                class="stretched-link"><img src="/images/portfolio/3by4/06.jpg" class="img-scale"
                                    alt="portfolio-img"></a>
                        </div>
                    </div>
                </div>

                <!-- Portfolio item -->
                <div class="col">
                    <div class="card card-img-scale card-content-hover overflow-hidden rounded-4">
                        <div class="card-img-scale-wrapper">
                            <!-- Hover content -->
                            <div class="hover-content bg-blur bg-dark bg-opacity-10 p-4">
                                <!-- Hover content -->
                                <div class="z-index-2 mt-auto">
                                    <h6 class="mb-1 text-white">Cropo stone</h6>
                                    <small class="text-white">Packaging</small>
                                </div>
                            </div>
                            <!-- Image -->
                            <a href="{{ route('second', ['portfolio', 'case-study-v1']) }}"
                                class="stretched-link"><img src="/images/portfolio/3by4/08.jpg" class="img-scale"
                                    alt="portfolio-img"></a>
                        </div>
                    </div>
                </div>
            </div> <!-- Row END -->

            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination pagination-primary-grad d-flex justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link"><i class="bi bi-chevron-left mx-n1 rtl-flip"></i></a>
                    </li>
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">
                            1
                            <span class="visually-hidden">(current)</span>
                        </span>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">3</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">4</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Next page">
                            <i class="bi bi-chevron-right mx-n1 rtl-flip"></i>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </section>
    <!-- =======================
    Portfolio END -->

    <!-- =======================
    CTA START-->
    <section class="pt-0">
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
                        <h2>Ready to transform your <span class="text-primary-grad">vision</span> into reality?</h2>
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
    CTA END-->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer')

<!-- Back to top -->
<div class="back-top"></div>
@endsection