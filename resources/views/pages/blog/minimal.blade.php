@extends('layouts.landing', ['headerClass' => 'header-absolute', 'buttons' => true])

@section('content')

<main>

    <!-- =======================
            Hero START -->
    <section class="bg-secondary position-relative overflow-hidden pt-xl-8">
        <!-- Blur decoration START -->
        <div class="position-absolute start-0 top-0">
            <img src="/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-3 blur-9 h-300px rotate-335"
                alt="Grad shape">
        </div>

        <div class="position-absolute end-0 top-0">
            <img src="/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-2 blur-8 h-300px rotate-335"
                alt="Grad shape">
        </div>
        <!-- Blur decoration END -->

        <div class="container inner-container position-relative pt-4 pt-sm-5">
            <!-- Breadcrumb -->
            <nav class="mb-2 d-flex justify-content-center" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('any', 'index') }}">მთავარი</a></li>
                    <li class="breadcrumb-item active" aria-current="page">თემატიკები</li>
                </ol>
            </nav>

            <!-- Title -->
            <h1 class="fw-bold text-center mb-2">Hey,<span class="hand-wave-animate">🖐️</span> we’re <span
                    class="text-primary-grad">Folio</span></h1>
            <h2 class="fs-1 text-center">Explore our stories, thoughts, and ideas.</h2>

            <!-- Search box -->
            <div class="col-md-8 mx-auto bg-body shadow-primary rounded-pill position-relative z-index-2 p-1 mt-5">
                <form class="input-group align-items-center">
                    <input class="form-control bg-transparent border-0 me-1" type="email" placeholder="Search.....">
                    <button type="button" class="btn btn-dark btn-round rounded-circle lh-1 mb-0 me-2"><i
                            class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </section>
    <!-- =======================
            Hero END -->

    <!-- =======================
            Blog START -->
    <section class="bg-secondary overflow-hidden pt-0">
        <div class="container inner-container">
            <div class="row g-4 g-lg-6">

                <!-- Blog item -->
                <div class="col-md-6">
                    <article class="card card-img-scale bg-transparent overflow-hidden h-100 p-0">
                        <!-- Badge -->
                        <div class="d-flex gap-2 position-absolute top-0 start-0 z-index-2 m-4">
                            <span class="badge bg-dark">Technology</span>
                            <span class="badge bg-white text-dark">June 28, 2024</span>
                        </div>

                        <!-- Card image -->
                        <div class="card-img-scale-wrapper rounded-4">
                            <img src="/images/blog/4by3/01.jpg" class="rounded-4 img-scale" alt="Blog-img">
                        </div>

                        <!-- Card Body -->
                        <div class="card-body px-2">
                            <!-- Title -->
                            <h6 class="card-title mb-2"><a href="#">Building a strong identity for your
                                    business</a></h6>
                            <a class="icon-link icon-link-hover stretched-link"
                                href="{{ route('third', ['pages', 'blog', 'single']) }}">Read more<i
                                    class="bi bi-arrow-right"></i> </a>
                        </div>
                    </article>
                </div>

                <!-- Blog item -->
                <div class="col-md-6">
                    <article class="card card-img-scale bg-transparent overflow-hidden h-100 p-0">
                        <!-- Badge -->
                        <div class="d-flex gap-2 position-absolute top-0 start-0 z-index-2 m-4">
                            <span class="badge bg-dark">Research</span>
                            <span class="badge bg-white text-dark">July 15, 2024</span>
                        </div>

                        <!-- Card image -->
                        <div class="card-img-scale-wrapper rounded-4">
                            <img src="/images/blog/4by3/04.jpg" class="rounded-4 img-scale" alt="Blog-img">
                        </div>

                        <!-- Card Body -->
                        <div class="card-body px-2">
                            <!-- Title -->
                            <h6 class="card-title mb-2"><a href="#">Tips for improving your website's
                                    visibility</a></h6>
                            <a class="icon-link icon-link-hover stretched-link"
                                href="{{ route('third', ['pages', 'blog', 'single']) }}">Read more<i
                                    class="bi bi-arrow-right"></i> </a>
                        </div>
                    </article>
                </div>

                <!-- Blog item -->
{{--                <div class="col-12">--}}
{{--                    <article class="card card-img-scale bg-transparent overflow-hidden h-100 p-0">--}}
{{--                        <!-- Card image -->--}}
{{--                        <div class="card-img-scale-wrapper rounded-4">--}}
{{--                            <div class="ratio ratio-16x9">--}}
{{--                                <iframe src="https://www.youtube.com/embed/9No-FiEInLA"--}}
{{--                                    allow="autoplay; encrypted-media" allowfullscreen=""></iframe>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Card Body -->--}}
{{--                        <div class="card-body px-2">--}}
{{--                            <!-- Badge -->--}}
{{--                            <div class="d-flex gap-2 z-index-2 mb-2">--}}
{{--                                <span class="badge bg-dark">Technology</span>--}}
{{--                                <span class="badge bg-white text-dark">June 28, 2024</span>--}}
{{--                            </div>--}}
{{--                            <!-- Title -->--}}
{{--                            <h6 class="card-title mb-2"><a href="#">10 things you need to know about Folio</a>--}}
{{--                            </h6>--}}
{{--                            <a class="icon-link icon-link-hover"--}}
{{--                                href="{{ route('third', ['pages', 'blog', 'single']) }}">Read more<i--}}
{{--                                    class="bi bi-arrow-right"></i> </a>--}}
{{--                        </div>--}}
{{--                    </article>--}}
{{--                </div>--}}

                <!-- Blog item -->
                <div class="col-md-6">
                    <article class="card card-img-scale bg-transparent overflow-hidden h-100 p-0">
                        <!-- Badge -->
                        <div class="d-flex gap-2 position-absolute top-0 start-0 z-index-2 m-4">
                            <span class="badge bg-dark">Design</span>
                            <span class="badge bg-white text-dark">June 28, 2024</span>
                        </div>

                        <!-- Card image -->
                        <div class="card-img-scale-wrapper rounded-4">
                            <img src="/images/blog/4by3/02.jpg" class="rounded-4 img-scale" alt="Blog-img">
                        </div>

                        <!-- Card Body -->
                        <div class="card-body px-2">
                            <!-- Title -->
                            <h6 class="card-title mb-2"><a href="#">Techniques to captivate your audience</a>
                            </h6>
                            <a class="icon-link icon-link-hover stretched-link"
                                href="{{ route('third', ['pages', 'blog', 'single']) }}">Read more<i
                                    class="bi bi-arrow-right"></i> </a>
                        </div>
                    </article>
                </div>

                <!-- Blog item -->
                <div class="col-md-6">
                    <article class="card card-img-scale bg-transparent overflow-hidden h-100 p-0">
                        <!-- Badge -->
                        <div class="d-flex gap-2 position-absolute top-0 start-0 z-index-2 m-4">
                            <span class="badge bg-dark">Research</span>
                            <span class="badge bg-white text-dark">July 15, 2024</span>
                        </div>

                        <!-- Card image -->
                        <div class="card-img-scale-wrapper rounded-4">
                            <img src="/images/blog/4by3/03.jpg" class="rounded-4 img-scale" alt="Blog-img">
                        </div>

                        <!-- Card Body -->
                        <div class="card-body px-2">
                            <!-- Title -->
                            <h6 class="card-title mb-2"><a href="#">Never underestimate the influence</a></h6>
                            <a class="icon-link icon-link-hover stretched-link"
                                href="{{ route('third', ['pages', 'blog', 'single']) }}">Read more<i
                                    class="bi bi-arrow-right"></i> </a>
                        </div>
                    </article>
                </div>

                <!-- Pagination -->
                <div class="col-12">
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

                <!-- Newsletter -->
                <div class="col-12">
                    <div class="bg-body position-relative rounded-3 overflow-hidden p-4 p-sm-6">
                        <!-- BG pattern -->
                        <div class="position-absolute end-0 top-0 rotate-343 mt-n5 me-n8">
                            <img src="/images/elements/grad-shape/05.png" class="h-200px h-sm-300px"
                                alt="bg pattern">
                        </div>

                        <!-- BG pattern -->
                        <div class="position-absolute start-0 top-0 rotate-343 mt-n5 ms-n6">
                            <img src="/images/elements/grad-shape/11.png" class="h-200px blur-2" alt="bg pattern">
                        </div>

                        <div class="position-relative text-center">
                            <h3 class="fw-bold mb-4">Subscribe to new<span class="text-primary-grad"> updates</span>
                            </h3>

                            <!-- Subscribe input -->
                            <form class="row g-2 align-items-center justify-content-center">
                                <div class="col-auto col-md-8 col-lg-6">
                                    <input type="email" class="form-control form-control-lg bg-secondary"
                                        placeholder="Enter your email address">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-lg btn-dark m-0">Subscribe!</button>
                                </div>

                                <p class="small mt-2">✌️ No Spam — We Promise!</p>
                            </form>
                        </div>
                    </div>
                </div>

            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
            Blog END -->

</main>

@include('layouts.partials/footer')

<!-- Back to top -->
<div class="back-top"></div>
@endsection
