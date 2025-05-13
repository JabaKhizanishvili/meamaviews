@extends('layouts.landing', ['headerClass' => 'header-absolute', 'buttons' => true])

@section('css')
@vite(['node_modules/glightbox/dist/css/glightbox.css', 'node_modules/swiper/swiper-bundle.min.css'])
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
        Hero START -->
    <section class="bg-secondary position-relative pt-xl-8 pb-3">
        <!-- Curve decoration -->
        <span>
            <svg class="position-absolute bottom-0 start-0" viewBox="0 0 1920 193.5"
                style="enable-background:new 0 0 1920 193.5;" xml:space="preserve">
                <path class="fill-body"
                    d="M556,116.1c-184.7-78.7-447.6-32.8-556,0v77.4h1920V0c-56.4,35.6-132.2,69.4-285.5,38 C1481.2,6.6,1333-21.5,1125.7,55.4C1012.7,108.5,740.7,194.8,556,116.1z" />
            </svg>
        </span>

        <div class="container position-relative pt-4 pt-sm-5">
            <!-- Title and content -->
            <div class="row mb-5 mb-md-7">
                <!-- Title -->
                <div class="col-lg-6 col-xl-5">
                    <h1 class="fw-bold display-6 mb-3 mb-sm-4 mb-lg-0">The Creative Insight <span
                            class="text-primary-grad">Blogs</span></h1>
                </div>
                <!-- Content -->
                <div class="col-lg-5 ms-auto">
                    <p class="mb-0">Dive into expert insights, innovative ideas, and inspiring stories to elevate your
                        brand. Explore the forefront of design and marketing with The Creative Insight Blog.</p>
                    <!-- Search -->
                    <div class="bg-body rounded-pill position-relative z-index-2 p-1 mt-4">
                        <form class="input-group align-items-center">
                            <input class="form-control bg-transparent border-0 me-1" type="email"
                                placeholder="Search.....">
                            <button type="button" class="btn btn-dark btn-round rounded-circle lh-1 mb-0 me-2"><i
                                    class="bi bi-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Blog box START -->
            <div class="row g-4 mb-n8">
                <!-- Blog item -->
                <div class="col-lg-6">
                    <article class="card card-img-scale overflow-hidden rounded-4">
                        <!-- Card Image -->
                        <img src="/images/blog/4by3/03.jpg" class="img-scale" alt="blog-img">
                        <!-- BG overlay -->
                        <div class="bg-overlay bg-dark opacity-3"></div>

                        <!-- Card elements -->
                        <div class="card-img-overlay d-flex flex-column align-items-start p-sm-5">
                            <!-- badge -->
                            <div class="badge text-bg-dark mb-3">Lifestyle</div>

                            <!-- Title -->
                            <div class="card-text mt-auto">
                                <h5 class="mb-3"><a href="{{ route('third', [ 'pages' , 'blog','single']) }}" class="text-white">Building a strong
                                        identity for your business</a></h5>
                                <!-- List -->
                                <ul class="nav nav-divider align-items-center">
                                    <li class="nav-item">
                                        <div class="nav-link">
                                            <div class="d-flex align-items-center text-white position-relative">
                                                <div class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" src="/images/avatar/05.jpg"
                                                        alt="avatar">
                                                </div>
                                                <span class="ms-3">by <a href="#">Louis</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item text-white d-none d-sm-block">June 28, 2024</li>
                                    <li class="nav-item text-white d-none d-xl-block">5 min read</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Blog item -->
                <div class="col-lg-6">
                    <article class="card card-img-scale overflow-hidden rounded-4">
                        <!-- Card Image -->
                        <img src="/images/blog/4by3/04.jpg" class="img-scale" alt="blog-img">
                        <!-- BG overlay -->
                        <div class="bg-overlay bg-dark opacity-3"></div>

                        <!-- Card elements -->
                        <div class="card-img-overlay d-flex flex-column align-items-start p-sm-5">
                            <!-- badge -->
                            <div class="badge text-bg-dark mb-3">Research</div>

                            <!-- Title -->
                            <div class="card-text mt-auto">
                                <h5 class="mb-3"><a href="{{ route('third', [ 'pages' , 'blog','single']) }}" class="text-white">Tips for improving
                                        your website's visibility</a></h5>
                                <!-- List -->
                                <ul class="nav nav-divider align-items-center">
                                    <li class="nav-item">
                                        <div class="nav-link">
                                            <div class="d-flex align-items-center text-white position-relative">
                                                <div class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" src="/images/avatar/09.jpg"
                                                        alt="avatar">
                                                </div>
                                                <span class="ms-3">by <a href="#">Amanda</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item text-white d-none d-sm-block">July 15, 2024</li>
                                    <li class="nav-item text-white d-none d-xl-block">5 min read</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <!-- Blog box END -->
        </div>
    </section>
    <!-- =======================
        Hero END -->

    <!-- =======================
        Blog list and sidebar START -->
    <section>
        <div class="container pt-7">
            <div class="row">
                <!-- Blog list START -->
                <div class="col-xl-8 mb-5 mb-xl-0">
                    <!-- Title -->
                    <h4 class="mb-4">Today's top highlights</h4>

                    <!-- Blog item -->
                    <article class="card bg-secondary bg-opacity-50 card-hover-transition p-3 mb-4">
                        <div class="row">
                            <div class="col-md-4">
                                <!-- Image -->
                                <img src="/images/blog/4by4/01.jpg" class="img-fluid card-img" alt="blog-img">
                            </div>
                            <div class="col-md-8">
                                <!-- Content -->
                                <div class="card-body d-flex flex-column h-100 ps-0 pe-3">
                                    <!-- Badge -->
                                    <div class="d-flex gap-2 mb-3">
                                        <span class="badge bg-primary">Technology</span>
                                        <span class="badge bg-white text-dark">5 min read</span>
                                    </div>
                                    <!-- Title -->
                                    <h6 class="card-title mb-3 mb-md-0">The Power of Gratitude: Cultivating Joy and
                                        Abundance</h6>
                                    <!-- Author name and button -->
                                    <div class="d-sm-flex justify-content-between align-items-center mt-auto">
                                        <p class="mb-4 mb-sm-2 heading-color fw-semibold">By Carolyn Ortiz</p>
                                        <a class="icon-link icon-link-hover stretched-link"
                                            href="{{ route('third', [ 'pages' , 'blog','single']) }}">Read more<i class="bi bi-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Blog item -->
                    <article class="card bg-secondary bg-opacity-50 card-hover-transition p-3 mb-4">
                        <div class="row">
                            <div class="col-md-4">
                                <!-- Image -->
                                <img src="/images/blog/4by4/02.jpg" class="img-fluid card-img" alt="blog-img">
                            </div>
                            <div class="col-md-8">
                                <!-- Content -->
                                <div class="card-body d-flex flex-column h-100 ps-0 pe-3">
                                    <!-- Badge -->
                                    <div class="d-flex gap-2 mb-3">
                                        <span class="badge bg-info">Lifestyle</span>
                                        <span class="badge bg-white text-dark">10 min read</span>
                                    </div>
                                    <!-- Title -->
                                    <h6 class="card-title mb-3 mb-md-0">5 investment doubts you should clarify</h6>
                                    <!-- Author name and button -->
                                    <div class="d-sm-flex justify-content-between align-items-center mt-auto">
                                        <p class="mb-4 mb-sm-2 heading-color fw-semibold">By Amanda Reed</p>
                                        <a class="icon-link icon-link-hover stretched-link"
                                            href="{{ route('third', [ 'pages' , 'blog','single']) }}">Read more<i class="bi bi-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Blog item -->
                    <article class="card bg-secondary bg-opacity-50 card-hover-transition p-3 mb-4">
                        <div class="row">
                            <div class="col-md-4">
                                <!-- Image -->
                                <img src="/images/blog/4by4/03.jpg" class="img-fluid card-img" alt="blog-img">
                            </div>
                            <div class="col-md-8">
                                <!-- Content -->
                                <div class="card-body d-flex flex-column h-100 ps-0 pe-3">
                                    <!-- Badge -->
                                    <div class="d-flex gap-2 mb-3">
                                        <span class="badge bg-purple">Design</span>
                                        <span class="badge bg-white text-dark">7 min read</span>
                                    </div>
                                    <!-- Title -->
                                    <h6 class="card-title mb-3 mb-md-0">Mastering Responsive Web Design with Bootstrap
                                    </h6>
                                    <!-- Author name and button -->
                                    <div class="d-sm-flex justify-content-between align-items-center mt-auto">
                                        <p class="mb-4 mb-sm-2 heading-color fw-semibold">By Joan Wallace</p>
                                        <a class="icon-link icon-link-hover stretched-link"
                                            href="{{ route('third', [ 'pages' , 'blog','single']) }}">Read more<i class="bi bi-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Blog item -->
                    <article class="card bg-secondary bg-opacity-50 card-hover-transition p-3 mb-4">
                        <div class="row">
                            <div class="col-md-4">
                                <!-- Image -->
                                <img src="/images/blog/4by4/04.jpg" class="img-fluid card-img" alt="blog-img">
                            </div>
                            <div class="col-md-8">
                                <!-- Content -->
                                <div class="card-body d-flex flex-column h-100 ps-0 pe-3">
                                    <!-- Badge -->
                                    <div class="d-flex gap-2 mb-3">
                                        <span class="badge bg-pink">Marketing</span>
                                        <span class="badge bg-white text-dark">12 min read</span>
                                    </div>
                                    <!-- Title -->
                                    <h6 class="card-title mb-3 mb-md-0">Effortless Web Development with Folio</h6>
                                    <!-- Author name and button -->
                                    <div class="d-sm-flex justify-content-between align-items-center mt-auto">
                                        <p class="mb-4 mb-sm-2 heading-color fw-semibold">By Lori Stevens</p>
                                        <a class="icon-link icon-link-hover stretched-link"
                                            href="{{ route('third', [ 'pages' , 'blog','single']) }}">Read more<i class="bi bi-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <div class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary">Load more post <i
                                class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>
                    </div>
                </div>
                <!-- Blog list END -->

                <!-- Sidebar START -->
                <div class="col-xl-3 ms-auto">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3 col-xl-12">
                            <!-- Category START -->
                            <div class="card bg-transparent">
                                <!-- Card header -->
                                <div class="card-header border-bottom bg-transparent px-0">
                                    <p class="lead fw-bold heading-color mb-0">Categories</p>
                                </div>

                                <!-- Card body -->
                                <div class="card-body px-0">
                                    <ul class="nav flex-column fs-sm">
                                        <li class="nav-item mb-1">
                                            <a href="#" class="nav-link py-1 px-0">All topics <span
                                                    class="fw-normal opacity-6 ms-1">(48)</span></a>
                                        </li>
                                        <li class="nav-item mb-1">
                                            <a href="#" class="nav-link py-1 px-0">Digital <span
                                                    class="fw-normal opacity-6 ms-1">(12)</span></a>
                                        </li>
                                        <li class="nav-item mb-1">
                                            <a href="#" class="nav-link py-1 px-0">Marketing <span
                                                    class="fw-normal opacity-6 ms-1">(5)</span></a>
                                        </li>
                                        <li class="nav-item mb-1">
                                            <a href="#" class="nav-link py-1 px-0">Development <span
                                                    class="fw-normal opacity-6 ms-1">(10)</span></a>
                                        </li>
                                        <li class="nav-item mb-1">
                                            <a href="#" class="nav-link py-1 px-0">Technology <span
                                                    class="fw-normal opacity-6 ms-1">(9)</span></a>
                                        </li>
                                        <li class="nav-item mb-1">
                                            <a href="#" class="nav-link py-1 px-0">UI/UX design <span
                                                    class="fw-normal opacity-6 ms-1">(4)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link py-1 px-0">Lifestyle <span
                                                    class="fw-normal opacity-6 ms-1">(3)</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Category END -->
                        </div>

                        <div class="col-sm-6 col-lg-3 col-xl-12">
                            <!-- Social links START -->
                            <div class="card bg-transparent">
                                <!-- Card header -->
                                <div class="card-header border-bottom bg-transparent px-0">
                                    <p class="lead fw-bold heading-color mb-0">Follow us on</p>
                                </div>

                                <!-- Card body -->
                                <div class="card-body px-0">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item"> <a class="btn btn-icon bg-facebook"
                                                href="#"><i class="bi bi-facebook lh-base"></i></a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-icon bg-instagram"
                                                href="#"><i class="bi bi-instagram lh-base"></i></a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-icon bg-twitter"
                                                href="#"><i class="bi bi-twitter-x lh-base"></i></a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-icon bg-linkedin"
                                                href="#"><i class="bi bi-linkedin lh-base"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Social links END -->
                        </div>

                        <div class="col-sm-6 col-lg-3 col-xl-12">
                            <!-- Popular Tags START -->
                            <div class="card bg-transparent">
                                <!-- Card header -->
                                <div class="card-header border-bottom bg-transparent px-0">
                                    <p class="lead fw-bold heading-color mb-0">Popular Tags</p>
                                </div>

                                <!-- Card body -->
                                <div class="card-body px-0">
                                    <ul class="list-inline mb-0 social-media-btn">
                                        <li class="list-inline-item"> <a class="btn btn-secondary btn-xs"
                                                href="#">blog</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-secondary btn-xs"
                                                href="#">business</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-secondary btn-xs"
                                                href="#">bootstrap</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-secondary btn-xs"
                                                href="#">data science</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-secondary btn-xs"
                                                href="#">deep learning</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-secondary btn-xs"
                                                href="#">Adventure</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-secondary btn-xs"
                                                href="#">Community</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-secondary btn-xs"
                                                href="#">Tutorials</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-secondary btn-xs"
                                                href="#">Interview</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-secondary btn-xs"
                                                href="#">Photography</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-secondary btn-xs"
                                                href="#">Classic</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Popular Tags END -->
                        </div>

                        <div class="col-sm-6 col-lg-3 col-xl-12">
                            <!-- Adv START -->
                            <div class="card rounded-4 overflow-hidden mt-3">
                                <!-- Image -->
                                <img src="/images/blog/adv.jpg" class="img-fluid" alt="Adv image">

                                <!-- Title and button -->
                                <div
                                    class="card-img-overlay d-flex flex-column align-items-center text-center pt-5 mx-auto">
                                    <h6 class="text-white mb-3">New Smart earbuds</h6>
                                    <a href="#" class="btn btn-sm btn-dark mb-0">Shop now</a>
                                </div>
                            </div>
                            <!-- Adv END -->
                        </div>
                    </div> <!-- Row END -->
                </div>
                <!-- Sidebar END -->
            </div>
        </div>
    </section>
    <!-- =======================
        Blog list and sidebar END -->

    <!-- =======================
        Quote and top author START -->
    <section class="position-relative z-index-2 py-0 mb-n8">
        <div class="container-fluid position-relative">
            <div class="max-width-1550 bg-dark position-relative rounded-4 overflow-hidden py-6 py-xl-8">
                <!-- Grad blur -->
                <div class="position-absolute top-100 start-50 translate-middle">
                    <img src="/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-2 blur-9"
                        alt="Grad shape">
                </div>

                <div class="container position-relative" data-bs-theme="dark">
                    <div class="row align-items-center">
                        <!-- Quote -->
                        <div class="col-lg-5 mb-5 mb-lg-0">
                            <blockquote class="fs-6 fw-semibold text-white mb-sm-4">
                                “Our dedicated team works tirelessly to turn your vision into a digital reality, using
                                innovative strategies and cutting-edge solutions.”
                            </blockquote>
                            <span class="text-white">Jacqueline Miller, CEO at Folio</span>
                        </div>

                        <!-- Top author -->
                        <div class="col-lg-6 ms-auto">
                            <!-- Title -->
                            <h5 class="mb-4 text-center text-md-start">Top Author</h5>

                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                                <!-- Team item -->
                                <div class="col">
                                    <div class="card card-body bg-transparent text-center p-0">
                                        <!-- Image -->
                                        <div class="avatar avatar-xl mx-auto flex-shrink-0 mb-3">
                                            <img class="avatar-img rounded-circle" src="/images/team/01.jpg"
                                                alt="avatar">
                                        </div>

                                        <!-- Content -->
                                        <h6 class="mb-1"><a href="#">Emma Watson</a></h6>
                                        <small>36 Blogs</small>

                                        <!-- Social button -->
                                        <ul class="list-inline mb-0 mt-2">
                                            <li class="list-inline-item"> <a
                                                    class="btn btn-icon w-auto lead text-facebook" href="#"><i
                                                        class="bi bi-facebook lh-base"></i></a> </li>
                                            <li class="list-inline-item"> <a
                                                    class="btn btn-icon w-auto lead text-white" href="#"><i
                                                        class="bi bi-twitter-x lh-base"></i></a> </li>
                                            <li class="list-inline-item"> <a
                                                    class="btn btn-icon w-auto lead text-instagram-gradient"
                                                    href="#"><i class="bi bi-instagram lh-base"></i></a> </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Team item -->
                                <div class="col">
                                    <div class="card card-body bg-transparent text-center p-0">
                                        <!-- Image -->
                                        <div class="avatar avatar-xl mx-auto flex-shrink-0 mb-3">
                                            <img class="avatar-img rounded-circle" src="/images/team/02.jpg"
                                                alt="avatar">
                                        </div>

                                        <!-- Content -->
                                        <h6 class="mb-1"><a href="#">Allen Smith</a></h6>
                                        <small>25 Blogs</small>

                                        <!-- Social button -->
                                        <ul class="list-inline mb-0 mt-2">
                                            <li class="list-inline-item"> <a
                                                    class="btn btn-icon w-auto lead text-facebook" href="#"><i
                                                        class="bi bi-facebook lh-base"></i></a> </li>
                                            <li class="list-inline-item"> <a
                                                    class="btn btn-icon w-auto lead text-white" href="#"><i
                                                        class="bi bi-twitter-x lh-base"></i></a> </li>
                                            <li class="list-inline-item"> <a
                                                    class="btn btn-icon w-auto lead text-instagram-gradient"
                                                    href="#"><i class="bi bi-instagram lh-base"></i></a> </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Team item -->
                                <div class="col">
                                    <div class="card card-body bg-transparent text-center p-0">
                                        <!-- Image -->
                                        <div class="avatar avatar-xl mx-auto flex-shrink-0 mb-3">
                                            <img class="avatar-img rounded-circle" src="/images/team/04.jpg"
                                                alt="avatar">
                                        </div>

                                        <!-- Content -->
                                        <h6 class="mb-1"><a href="#">Louis Ferguson</a></h6>
                                        <small>15 Blogs</small>

                                        <!-- Social button -->
                                        <ul class="list-inline mb-0 mt-2">
                                            <li class="list-inline-item"> <a
                                                    class="btn btn-icon w-auto lead text-facebook" href="#"><i
                                                        class="bi bi-facebook lh-base"></i></a> </li>
                                            <li class="list-inline-item"> <a
                                                    class="btn btn-icon w-auto lead text-white" href="#"><i
                                                        class="bi bi-twitter-x lh-base"></i></a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Quote and top author END -->

    <!-- =======================
        Blog slider START -->
    <section class="bg-secondary overflow-hidden pt-9">
        <!-- Title and slider button -->
        <div class="container pt-5 pt-xl-8">
            <!-- Title and slider button -->
            <div class="row">
                <!-- Title -->
                <div class="col-sm-8 col-lg-5">
                    <h3 class="mb-0 text-center text-sm-start">Last week top highlights</h3>
                </div>

                <!-- Slider button -->
                <div class="col-sm-4 col-lg-5 ms-auto">
                    <div class="d-flex justify-content-center justify-content-sm-end gap-3 position-relative mt-3">
                        <a href="#"
                            class="btn btn-outline-primary btn-lg btn-icon rounded-circle mb-0 swiper-button-prev-blog rtl-flip"><i
                                class="bi bi-arrow-left"></i></a>
                        <a href="#"
                            class="btn btn-outline-primary btn-lg btn-icon rounded-circle mb-0 swiper-button-next-blog rtl-flip"><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Blogs START -->
                <div class="swiper"
                    data-swiper-options='{
				"spaceBetween": 50,
				"loop": true,
				"autoplay":false,
				"navigation":{
					"nextEl":".swiper-button-next-blog",
					"prevEl":".swiper-button-prev-blog"
				},
				"breakpoints": {
					"576": {"slidesPerView": 1},
					"768": {"slidesPerView": 2},
					"992": {"slidesPerView": 3}
				}}'>

                    <div class="swiper-wrapper">

                        <!-- Blog item -->
                        <div class="swiper-slide py-4">
                            <article class="card card-hover-shadow rounded-4 overflow-hidden h-100">
                                <!-- Badge -->
                                <div class="badge text-bg-white position-absolute top-0 start-0 m-4">Lifestyle</div>

                                <!-- Card image -->
                                <img src="/images/blog/01.jpg" class="card-img-top" alt="Blog-img">

                                <!-- Card Body -->
                                <div class="card-body pb-2">
                                    <!-- Title -->
                                    <h6 class="card-title"><a href="#">Techniques to captivate your audience</a>
                                    </h6>
                                </div>

                                <!-- Card footer -->
                                <div class="card-footer pt-0">
                                    <a class="icon-link icon-link-hover stretched-link" href="{{ route('third', [ 'pages' , 'blog','single']) }}">Read
                                        more<i class="bi bi-arrow-right"></i> </a>
                                </div>
                            </article>
                        </div>

                        <!-- Blog item -->
                        <div class="swiper-slide py-4">
                            <article class="card card-hover-shadow rounded-4 overflow-hidden h-100">
                                <!-- Card image -->
                                <div class="card-img-top overflow-hidden position-relative">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube.com/embed/9No-FiEInLA"
                                            allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body px-3">
                                    <!-- Title -->
                                    <h6 class="card-title"><a href="#">Never underestimate the influence</a>
                                    </h6>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer pt-0">
                                    <a class="icon-link icon-link-hover" href="{{ route('third', [ 'pages' , 'blog','single']) }}">Read more<i
                                            class="bi bi-arrow-right"></i> </a>
                                </div>
                            </article>
                        </div>

                        <!-- Blog item -->
                        <div class="swiper-slide py-4">
                            <article class="card card-hover-shadow rounded-4 overflow-hidden h-100">
                                <!-- Card image -->
                                <div class="card-img-top overflow-hidden position-relative">
                                    <div class="ratio ratio-16x9">
                                        <iframe
                                            src="https://player.vimeo.com/video/167434033?title=0&amp;byline=0&amp;portrait=0"
                                            width="620" height="347" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body px-3">
                                    <!-- Title -->
                                    <h6 class="card-title"><a href="#">10 things you need to know about
                                            Folio</a></h6>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer pt-0">
                                    <a class="icon-link icon-link-hover" href="{{ route('third', [ 'pages' , 'blog','single']) }}">Read more<i
                                            class="bi bi-arrow-right"></i> </a>
                                </div>
                            </article>
                        </div>

                        <!-- Blog item -->
                        <div class="swiper-slide py-4">
                            <article class="card card-hover-shadow rounded-4 overflow-hidden h-100">
                                <!-- Badge -->
                                <div class="badge text-bg-white position-absolute top-0 start-0 m-4">Lifestyle</div>

                                <!-- Card image -->
                                <img src="/images/blog/02.jpg" class="card-img-top" alt="Blog-img">

                                <!-- Card Body -->
                                <div class="card-body pb-2">
                                    <!-- Title -->
                                    <h6 class="card-title"><a href="#">Tips for improving your website's
                                            visibility</a></h6>
                                </div>

                                <!-- Card footer -->
                                <div class="card-footer pt-0">
                                    <a class="icon-link icon-link-hover stretched-link" href="{{ route('third', [ 'pages' , 'blog','single']) }}">Read
                                        more<i class="bi bi-arrow-right"></i> </a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <!-- Blogs END -->
            </div>
        </div>
    </section>
    <!-- =======================
        Blog slider END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
        Footer START -->
<footer class="bg-dark pt-6 pt-lg-8" data-bs-theme="dark">
    <div class="container">

        <div class="row g-4">
            <div class="col-md-6">
                <!-- Title -->
                <h2>Never miss a story!</h2>
                <p class="mb-0">Get the freshest headlines and updates sent uninterrupted to your inbox.</p>
            </div>

            <div class="col-md-6 col-xl-5 ms-auto">
                <!-- Form -->
                <form class="row row-cols-sm-auto g-2 align-items-center justify-content-md-end">
                    <div class="col-12">
                        <input type="email" class="form-control" placeholder="Enter your email address">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary m-0">Subscribe!</button>
                    </div>
                </form>
                <p class="small text-md-end mt-2 mb-0">By subscribing you agree to our
                    <a href="#" class="hover-underline-animation">Privacy Policy</a>
                </p>
            </div>
        </div>

        <!-- Divider -->
        <hr class="my-4 my-xl-6 opacity-1">

        <!-- Link widgets -->
        <div class="row g-4">

            <!-- Widget item -->
            <div class="col-md-6 col-xl-4">
                <!-- logo -->
                <a href="{{ route('any', 'index') }}">
                    <img class="h-40px" src="/images/logo-light.svg" alt="logo">
                </a>
                <p class="my-3 my-xl-4">A Bootstrap theme that's both stylish and functional, perfect for any type of
                    technology or corporate website.</p>
            </div>

            <div class="col-xl-7 ms-auto">
                <div class="row g-4">
                    <!-- Widget item -->
                    <div class="col-6 col-md-3">
                        <h6 class="mb-3 mb-xl-4">Company</h6>
                        <!-- Links -->
                        <ul class="nav flex-column gap-1">
                            <li class="nav-item"><a class="nav-link pt-0"
                                    href="{{ route('second', ['about', 'v1']) }}">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('second', [ 'pages' , 'contact-us-v1']) }}">Contact us</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('second', ['about', 'career']) }}">Career <span
                                        class="badge bg-primary ms-2">2 jobs</span></a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('second', ['about', 'career-single']) }}">Career detail</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('second', [ 'pages' , 'contact-us-v2']) }}">Become a partner</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('second', [ 'about' , 'service-single']) }}">Services</a></li>
                        </ul>
                    </div>

                    <!-- Widget item -->
                    <div class="col-6 col-md-3">
                        <h6 class="mb-3 mb-xl-4">Resources</h6>
                        <!-- Links -->
                        <ul class="nav flex-column gap-1">
                            <li class="nav-item"><a class="nav-link pt-0" href="{{ route('second', [ 'portfolio' ,'case-study-v1']) }}">Case
                                    studies</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('second', [ 'pages' , 'pricing-v1']) }}">Pricing <span
                                        class="badge bg-success ms-2">New</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('third', [ 'pages' , 'blog','minimal']) }}">Blogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('third', [ 'pages' , 'blog','single']) }}">Blog detail</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Success stories<i
                                        class="bi bi-box-arrow-up-right small ms-2"></i></a></li>
                        </ul>
                    </div>

                    <!-- Widget item -->
                    <div class="col-sm-6 col-md-6">
                        <h6 class="mb-3 mb-xl-4">Download our app</h6>
                        <p class="mb-3">Get instant access to exclusive features for FREE!</p>
                        <div class="row g-2 mb-4 mb-sm-5">
                            <!-- Google play store button -->
                            <div class="col-5 col-sm-6 col-md-5 col-lg-4 col-xl-5">
                                <a href="#"> <img src="/images/elements/google-play.svg" alt=""> </a>
                            </div>
                            <!-- App store button -->
                            <div class="col-5 col-sm-6 col-md-5 col-lg-4 col-xl-5">
                                <a href="#"> <img src="/images/elements/app-store.svg" alt="app-store"> </a>
                            </div>
                        </div>

                        <!-- Social buttons -->
                        <span class="heading-color fw-semibold">Follow on:</span>
                        <ul class="list-inline align-items-center mb-0 mt-3">
                            <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-facebook"
                                    href="#"><i class="bi bi-facebook lh-base"></i></a> </li>
                            <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-instagram"
                                    href="#"><i class="bi bi-instagram lh-base"></i></a> </li>
                            <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-twitter-x"
                                    href="#"><i class="bi bi-twitter-x lh-base"></i></a> </li>
                            <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-linkedin"
                                    href="#"><i class="bi bi-linkedin lh-base"></i></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <hr class="mt-xl-5 mb-0 opacity-1">

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