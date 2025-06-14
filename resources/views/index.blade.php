@extends('layouts.landing',  ['buttons' => true, 'headerClass' => 'header-absolute'])

@section('css')
@vite(['node_modules/swiper/swiper-bundle.min.css'])
@endsection

@section('buttons')
<ul class="nav align-items-center dropdown-hover ms-sm-2">
    <!-- Dark mode option START -->
    <li class="nav-item dropdown dropdown-animation">
        <button class="btn btn-link mb-0 px-2 lh-1" id="bd-theme"
            type="button"
            aria-expanded="false"
            data-bs-toggle="dropdown"
            data-bs-display="static">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="bi bi-circle-half theme-icon-active fill-mode fa-fw" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                <use href="#"></use>
            </svg>
        </button>

        <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
            <li class="mb-1">
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
                    <svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                        <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                        <use href="#"></use>
                    </svg>Light
                </button>
            </li>
            <li class="mb-1">
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                        <use href="#"></use>
                    </svg>Dark
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                        <use href="#"></use>
                    </svg>Auto
                </button>
            </li>
        </ul>
    </li>
    <!-- Dark mode option END -->
    <!-- Sign up button -->
    <li class="nav-item ms-2 d-none d-sm-block">
        <a href="{{route('register.index')}}" class="btn btn-sm btn-primary-grad mb-0">რეგისტრაცია</a>
    </li>
    <!-- Responsive navbar toggler -->
    <li class="nav-item">
        <button class="navbar-toggler ms-sm-3 p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-animation">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>
    </li>
</ul>
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Hero START -->
    <section class="bg-secondary position-relative overflow-hidden pt-xl-8">
        <!-- Grad blur -->
        <div class="position-absolute top-0 start-0 mt-n9 ms-n5">
            <img src="/images/elements/grad-shape/blur-decoration.svg" class="blur-7 opacity-2" alt="Grad shape">
        </div>

        <div class="container position-relative pt-4 pt-sm-5">
            <div class="row align-items-center">
                <!-- Hero left content START -->
                <div class="col-lg-6 mb-5 mb-lg-0 pe-md-5">
                    <!-- Title -->
                    <h1 class="fw-normal mb-4">
                        We help your
                        <span class="display-6">Business <span class="text-primary">Grow</span></span>
                    </h1>

                    <p class="lead mb-0">Let your brand shine with our innovative and visually stunning websites.
                    </p>

                    <!-- List -->
                    <ul class="list-inline d-flex flex-wrap gap-2 gap-xl-3 mt-3 mt-lg-4">
                        <li class="list-inline-item heading-color"> <i
                                class="bi bi-check-circle text-success me-1"></i>Flexible solutions
                        </li>
                        <li class="list-inline-item heading-color"> <i
                                class="bi bi-check-circle text-success me-1"></i>System integration</li>
                        <li class="list-inline-item heading-color"> <i
                                class="bi bi-check-circle text-success me-1"></i>Complimentary updates</li>
                    </ul>

                    <!-- Buttons -->
                    <div class="d-flex flex-wrap gap-3 mt-3 mt-lg-4">
                        <a href="#" class="btn btn-white-shadow mb-0">Get started</a>
                        <a href="{{ route('second', [ 'portfolio' ,'modern']) }}" class="link-primary-grad icon-link icon-link-hover">Explore our
                            projects <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Hero left content END -->

                <!-- Hero right content START -->
                <div class="col-lg-6 position-relative ps-md-5">
                    <!-- Main image -->
                    <div class="position-relative">
                        <img src="/images/bg/01.jpg" class="rounded-4" alt="hero-img">

                        <!-- Rating decoration -->
                        <div class="bg-body d-none d-sm-block rounded-5 shadow-primary position-absolute end-0 bottom-0 p-4 z-index-2"
                            style="margin-bottom: -2rem; margin-right: -2.2rem;">

                            <!-- Avatar list -->
                            <ul class="avatar-group mb-2">
                                <li class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/01.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/02.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/03.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/08.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-sm">
                                    <div class="avatar-img rounded-circle bg-dark">
                                        <span
                                            class="text-white position-absolute top-50 start-50 translate-middle fw-bold"
                                            style="font-size: 12px;">500+</span>
                                    </div>
                                </li>
                            </ul>

                            <p>Total visitors per month</p>

                            <!-- Rating -->
                            <p class="heading-color fw-bold mb-0"><i
                                    class="bi bi-star-fill text-warning fs-6 me-2"></i><span
                                    class="fs-5">4.8</span>/5.0</p>
                        </div>

                        <!-- Rating bg -->
                        <span class="position-absolute bottom-0 end-0 text-secondary d-none d-sm-block"
                            style="margin-bottom: -1px; margin-right: -1px;">
                            <svg width="250" height="202" viewBox="0 0 250 202" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.5108 49.8918C25.5108 36.1146 37.1379 24.9459 51.4807 24.9459H249.89V201.563H25.5108V49.8918Z"
                                    fill="currentColor" />
                                <path d="M249.89 0L250 24.9457L224.03 25.0511C238.373 24.9929 249.951 13.7771 249.89 0Z"
                                    fill="currentColor" />
                                <path
                                    d="M25.5068 176.617L25.9658 201.559L0 202C14.3405 201.756 25.7603 190.392 25.5068 176.617Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                    </div>

                    <!-- Testimonial decoration -->
                    <div class="position-absolute top-0 start-0 mt-3 ms-md-n4">
                        <div
                            class="bg-body shadow-primary rounded-pill d-inline-flex align-items-center ps-2 pe-4 py-2">
                            <!-- Avatar -->
                            <div class="avatar avatar flex-shrink-0">
                                <img class="avatar-img rounded-circle" src="/images/avatar/08.jpg"
                                    alt="avatar">
                            </div>
                            <div class="ps-3">
                                <span class="small heading-color fw-bold">Dennis Barrett</span>
                                <p class="small mb-0">🔥 Folio team nailed it!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero right content END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Hero END -->

    <!-- =======================
    client START -->
    <section class="bg-secondary pt-0">
        <div class="container">
            <div class="row g-4 align-items-center">

                <!-- Title -->
                <div class="col-lg-3">
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start">
                        <h6 class="mb-0">პარტნიორი კომპანიები</h6>
                        <div class="vr bg-primary-grad opacity-2 d-none d-lg-block"></div>
                    </div>
                </div>

                <!-- Logos -->
                <div class="col-lg-9">
                    <!-- Slider START -->
                    <div class="swiper"
                        data-swiper-options='{
					"slidesPerView": 2,
					"spaceBetween": 50,
					"breakpoints": {
						"576": {"slidesPerView": 3},
						"768": {"slidesPerView": 4},
						"1200": {"slidesPerView": 5}
					}}'>

                        <!-- Slider items -->
                        <div class="swiper-wrapper align-items-center">
                            <!-- Image -->
                            @foreach($partners as $val)
                            <div class="swiper-slide">
                                <div class="swap-logo">
                                    <img src="{{ Storage::url($val->image)}}" class="p-2 p-lg-3"
                                        alt="client-img">
{{--                                    <div class="swap-item">--}}
{{--                                        <img src="/images/client/logo-light/01.svg"--}}
{{--                                            class="dark-mode-item p-2 p-lg-3" alt="client logo">--}}
{{--                                        <img src="/images/client/logo-dark/01.svg"--}}
{{--                                            class="light-mode-item p-2 p-lg-3" alt="client logo">--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Slider END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    client END -->

    <!-- =======================
    Services START -->
    <section class="bg-secondary position-relative pt-0">
        <!-- Bottom shape decoration -->
        <div class="position-absolute bottom-0 end-0 ms-n5 mb-n8 d-none d-lg-block z-index-2">
            <img src="/images/elements/grad-shape/02.png" class="h-200px" alt="Shape">
        </div>

        <div class="container">
            <!-- Title -->
            <div class="inner-container-small text-center mb-5">
                <h2 class="mb-0">What we offer</h2>
            </div>

            <!-- Services START -->
            <div class="row justify-content-center g-4 g-lg-5">
                <!-- Service item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover-shadow card-hover-transition rounded-4 h-100 p-4">
                        <!-- Card header -->
                        <div class="card-header bg-transparent p-0 mb-8">
                            <!-- Icon -->
                            <div
                                class="icon-lg bg-pink d-flex justify-content-center align-items-center text-white rounded-circle">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.0625 7.24609L9.39428 8.47457C8.84539 8.61902 8.57095 8.69124 8.36249 8.85973C8.29398 8.91511 8.23152 8.97758 8.17614 9.04609C8.00764 9.25454 7.93542 9.52899 7.79098 10.0779L5.15533 20.0933C4.4819 22.6524 4.14518 23.9319 4.6738 24.7443C4.84027 25.0002 5.05844 25.2183 5.31429 25.3848C6.12669 25.9134 7.40621 25.5767 9.96526 24.9033L19.9807 22.2676C20.5296 22.1232 20.8041 22.0509 21.0125 21.8825C21.081 21.8271 21.1435 21.7646 21.1989 21.6961C21.3674 21.4876 21.4396 21.2132 21.584 20.6643L22.8125 15.9961M14.0625 7.24609L22.8125 15.9961M14.0625 7.24609L16.2215 5.08708C16.8844 4.42422 17.2158 4.09279 17.617 4.02925C17.7465 4.00873 17.8785 4.00873 18.008 4.02925C18.4092 4.09279 18.7406 4.42422 19.4035 5.08708L24.9715 10.6551C25.6344 11.318 25.9658 11.6494 26.0293 12.0506C26.0499 12.1801 26.0499 12.3121 26.0293 12.4416C25.9658 12.8428 25.6344 13.1742 24.9715 13.8371L22.8125 15.9961"
                                        stroke="currentColor" stroke-width="1.875" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M12.3438 17.7206C11.4377 16.8145 11.4377 15.3454 12.3438 14.4393C13.2498 13.5332 14.7189 13.5332 15.625 14.4393C16.5311 15.3454 16.5311 16.8145 15.625 17.7206C14.7189 18.6267 13.2498 18.6267 12.3438 17.7206ZM12.3438 17.7206L9.0625 21.0018"
                                        stroke="currentColor" stroke-width="1.875" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-footer bg-transparent mt-auto p-0">
                            <h6><a href="#">Web design & Development</a></h6>
                            <a href="{{ route('second', [ 'about' , 'service-single']) }}"
                                class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read more
                                <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover-shadow card-hover-transition rounded-4 h-100 p-4">
                        <!-- Card header -->
                        <div class="card-header bg-transparent p-0 mb-8">
                            <!-- Icon -->
                            <div
                                class="icon-lg bg-warning d-flex justify-content-center align-items-center text-white rounded-circle">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.0236 9.15987C12.8183 10.2735 12.6237 12.4046 12.6237 13.5372C12.6237 14.6698 12.6751 16.8374 13.0236 17.9146M13.0236 9.15987L15.299 7.16619C18.129 4.68654 19.5441 3.44671 20.7529 3.6875C21.1289 3.7624 21.4826 3.92277 21.7868 4.15622C22.7645 4.90675 22.7645 6.7881 22.7645 10.5508V16.4976C22.7645 20.205 22.7645 22.0587 21.7959 22.8094C21.4946 23.0429 21.1431 23.2047 20.7698 23.2817C19.5697 23.5294 18.1624 22.3248 15.348 19.9155C14.0552 18.8089 13.0945 17.9836 13.0236 17.9146M13.0236 9.15987C12.5257 9.12504 10.2889 9.12435 8.13707 9.1327C6.35394 9.13961 5.46238 9.14307 4.82351 9.58696C4.57708 9.75818 4.36167 9.97443 4.1914 10.2215C3.75 10.8621 3.75 11.7571 3.75 13.5472V13.5472C3.75 15.3457 3.75 16.2449 4.19408 16.8868C4.36538 17.1344 4.58193 17.3507 4.8297 17.5218C5.47203 17.9652 6.368 17.9643 8.15993 17.9625C10.3048 17.9603 12.5274 17.9493 13.0236 17.9146M6.28564 17.9574L6.25808 24.37C6.25362 25.4068 7.09318 26.2496 8.13001 26.249V26.249C9.16293 26.2485 10 25.411 10 24.3781V17.958M25.2997 8.44266C26.5673 12.2636 26.5673 14.8109 25.2997 18.6318"
                                        stroke="currentColor" stroke-width="1.875" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-footer bg-transparent mt-auto p-0">
                            <h6><a href="#">Digital marketing solutions</a></h6>
                            <a href="{{ route('second', [ 'about' , 'service-single']) }}"
                                class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read more
                                <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover-shadow card-hover-transition rounded-4 h-100 p-4">
                        <!-- Card header -->
                        <div class="card-header bg-transparent p-0 mb-8">
                            <!-- Icon -->
                            <div
                                class="icon-lg bg-primary d-flex justify-content-center align-items-center text-white rounded-circle">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24.0041 5.00246C22.0992 5.05566 17.8007 5.50793 14.5526 8.32076C14.4071 8.44676 14.3344 8.50976 14.2594 8.54588C14.2332 8.55852 14.2104 8.56769 14.1827 8.57675C14.1037 8.60266 14.0151 8.60727 13.838 8.61649L8.85257 8.87597C7.10702 8.96682 5.73828 10.4086 5.73828 12.1566C5.73828 13.9163 7.12504 15.3636 8.88323 15.4386L10.0921 15.4902C10.1694 15.4935 10.2081 15.4951 10.2451 15.5012C10.3491 15.5183 10.447 15.5613 10.5298 15.6263C10.5593 15.6495 10.5867 15.6769 10.6415 15.7316L10.6415 15.7316L14.2629 19.353L14.2629 19.3531C14.3176 19.4078 14.345 19.4352 14.3682 19.4647C14.4332 19.5475 14.4762 19.6455 14.4933 19.7494C14.4994 19.7864 14.501 19.8251 14.5043 19.9025L14.5559 21.1113C14.631 22.8695 16.0782 24.2562 17.838 24.2562C19.5859 24.2562 21.0277 22.8875 21.1185 21.1419L21.378 16.1565C21.3873 15.9794 21.3919 15.8908 21.4178 15.8118C21.4268 15.7841 21.436 15.7613 21.4486 15.7351C21.4848 15.6601 21.5478 15.5874 21.6738 15.4419C24.4866 12.1938 24.9389 7.89535 24.9921 5.99042C25.0026 5.6128 25.0079 5.42399 24.8849 5.25275C24.8499 5.20402 24.7905 5.14459 24.7418 5.1096C24.5705 4.98664 24.3817 4.99191 24.0041 5.00246Z"
                                        stroke="currentColor" stroke-width="1.875" stroke-linejoin="round" />
                                    <path
                                        d="M5.00001 24.1078C5.00041 24.4188 5.00061 24.5743 5.11981 24.7383C5.15137 24.7817 5.21443 24.8448 5.25785 24.8764C5.42182 24.9956 5.57733 24.9958 5.88834 24.9962C6.94742 24.9975 8.77939 24.7975 10.0235 23.5534C10.0865 23.4904 10.1482 23.4246 10.2084 23.3563C11.0252 22.4301 10.674 21.0685 9.80083 20.1953V20.1953C8.92763 19.3221 7.56609 18.971 6.63989 19.7878C6.5716 19.848 6.50574 19.9097 6.44279 19.9726C5.19864 21.2168 4.99864 23.0487 5.00001 24.1078Z"
                                        stroke="currentColor" stroke-width="1.875" stroke-linejoin="round" />
                                    <path
                                        d="M15.0985 14.8971C15.7081 15.5066 16.6964 15.5066 17.3059 14.8971V14.8971C17.9155 14.2875 17.9155 13.2992 17.3059 12.6896V12.6896C16.6964 12.0801 15.7081 12.0801 15.0985 12.6896V12.6896C14.4889 13.2992 14.4889 14.2875 15.0985 14.8971V14.8971Z"
                                        stroke="currentColor" stroke-width="1.875" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-footer bg-transparent mt-auto p-0">
                            <h6><a href="#">Brand strategy & Identity</a></h6>
                            <a href="{{ route('second', [ 'about' , 'service-single']) }}"
                                class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read more
                                <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services END -->

            <!-- CTA START -->
            <div class="inner-container-small bg-primary-grad rounded-3 text-center py-3 mt-5">
                <p class="text-white mb-0 px-2 px-sm-5 px-md-0">✌️ Ready to elevate your digital presence?
                    <a href="{{ route('second', [ 'pages' , 'contact-us-v1']) }}" class="fw-semibold hover-underline-animation text-white">Hire us
                        now</a>
                </p>
            </div>
            <!-- CTA END -->
        </div>
    </section>
    <!-- =======================
    Services END -->

    <!-- =======================
    How it work and counter START -->
    <section class="bg-dark position-relative overflow-hidden pt-0 pt-sm-5">
        <!-- Grad blur -->
        <div class="position-absolute bottom-0 end-0 mb-n8">
            <img src="/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-2 blur-9"
                alt="Grad shape">
        </div>

        <!-- skewed divider -->
        <span class="position-absolute top-0 start-0">
            <svg class="text-secondary rtl-flip" width="1920" height="197" viewBox="0 0 1920 197"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0H1920V5.5L0 197V0Z" fill="currentColor" />
            </svg>
        </span>
        <!-- Decoration END -->

        <div class="container position-relative pt-lg-8 pt-xl-0" data-bs-theme="dark">

            <!-- Step content START -->
            <div class="row align-items-end align-items-xxl-center">
                <!-- Image -->
                <div class="col-md-9 col-lg-6 mx-auto pe-xl-7">
                    <img src="/images/about/01.jpg" class="rounded-4" alt="process image">
                </div>

                <!-- Content -->
                <div class="col-lg-6 mt-5 mt-xl-7">
                    <span class="text-primary lead">Our process</span>
                    <h2 class="mt-3 mb-4">Streamline your path to success</h2>

                    <!-- Accordion START -->
                    <div class="accordion accordion-step-border" id="accordionFaq">
                        <!-- Item -->
                        <div class="accordion-item">
                            <div class="accordion-header font-base" id="heading-1">
                                <button class="accordion-button fs-6" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                    <span class="accordion-step-number">01</span> Consultation & Strategy
                                </button>
                            </div>
                            <!-- Body -->
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body pt-0">
                                    We begin by understanding your goals, challenges, and vision. Through in-depth
                                    consultation, we craft a tailored strategy that aligns with your objectives.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item">
                            <div class="accordion-header font-base" id="heading-2">
                                <button class="accordion-button fs-6 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false"
                                    aria-controls="collapse-2">
                                    <span class="accordion-step-number">02</span> Implementation & Development
                                </button>
                            </div>
                            <!-- Body -->
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body pt-0">
                                    We provide a range of tools, guides, and best practices to help you create
                                    designs, websites, and content that are inclusive and accessible to all
                                    individuals, regardless of their visual abilities.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item">
                            <div class="accordion-header font-base" id="heading-3">
                                <button class="accordion-button fs-6 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false"
                                    aria-controls="collapse-3">
                                    <span class="accordion-step-number">03</span> Refinement & Delivery
                                </button>
                            </div>
                            <!-- Body -->
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body pt-0">
                                    This crucial process ensures that content is easily readable and perceivable by
                                    individuals with varying degrees of visual impairment. By adhering to
                                    accessibility standards, you create a more inclusive and user-friendly
                                    experience for all users, regardless of their visual abilities, and contribute
                                    to a more accessible digital environment.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion END -->
                </div>
            </div>
            <!-- Step content END -->

            <!-- Counter START -->
            <div class="row g-4 mt-5 mt-sm-6 mt-md-8">
                <!-- Counter item -->
                <div class="col-sm-6 col-md-3">
                    <div class="d-flex h-100 pe-xl-4">
                        <!-- Counter content -->
                        <div>
                            <div class="d-flex mb-2 mb-sm-6">
                                <h4 class="purecounter h1 mb-0" data-purecounter-start="0" data-purecounter-end="22"
                                    data-purecounter-delay="300">0</h4>
                                <span class="h1 text-primary mb-0">+</span>
                            </div>
                            <p class="lead">Years of experience</p>
                        </div>

                        <!-- Divider -->
                        <div class="vr bg-white bg-opacity-25 ms-auto d-none d-sm-block"></div>
                    </div>
                </div>

                <!-- Counter item -->
                <div class="col-sm-6 col-md-3">
                    <div class="d-flex h-100 pe-xl-4">
                        <!-- Counter content -->
                        <div>
                            <div class="d-flex mb-2 mb-sm-6">
                                <h4 class="purecounter h1 mb-0" data-purecounter-start="0" data-purecounter-end="200"
                                    data-purecounter-delay="300">0</h4>
                                <span class="h1 text-pink mb-0">+</span>
                            </div>
                            <p class="lead">In-house projects completed</p>
                        </div>

                        <!-- Divider -->
                        <div class="vr bg-white bg-opacity-25 ms-auto d-none d-sm-block"></div>
                    </div>
                </div>

                <!-- Counter item -->
                <div class="col-sm-6 col-md-3">
                    <div class="d-flex h-100 pe-xl-4">
                        <!-- Counter content -->
                        <div>
                            <div class="d-flex mb-2 mb-sm-6">
                                <h4 class="purecounter h1 mb-0" data-purecounter-start="0" data-purecounter-end="32"
                                    data-purecounter-delay="300">0</h4>
                                <span class="h1 text-info mb-0">+</span>
                            </div>
                            <p class="lead">Awards and counting</p>
                        </div>

                        <!-- Divider -->
                        <div class="vr bg-white bg-opacity-25 ms-auto d-none d-sm-block"></div>
                    </div>
                </div>

                <!-- Counter item -->
                <div class="col-sm-6 col-md-3">
                    <div class="d-flex">
                        <!-- Counter content -->
                        <div>
                            <div class="d-flex mb-2 mb-sm-6">
                                <span class="h1 mb-0">></span>
                                <h4 class="purecounter h1 mb-0" data-purecounter-start="0" data-purecounter-end="10"
                                    data-purecounter-delay="300">0</h4>
                                <span class="h1 text-warning mb-0">K</span>
                            </div>
                            <p class="lead">Satisfied users</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter END -->
        </div>
    </section>
    <!-- =======================
    How it work and counter END -->

    <!-- =======================
    Project START -->
    <section class="position-relative overflow-hidden">
        <div class="container card-grid">
            <!-- Title and button -->
            <div class="d-md-flex justify-content-between align-items-center text-center text-sm-start mb-4 mb-md-5">
                <h2 class="mb-3 mb-md-0">Our latest projects</h2>
                <a href="{{ route('second', [ 'portfolio' ,'list']) }}" class="btn btn-primary-grad mb-0">Explore portfolio</a>
            </div>

            <div class="row g-4">
                <!-- Project item -->
                <div class="col-md-7">
                    <div class="card card-img-scale card-content-hover overflow-hidden rounded-4">
                        <div class="card-img-scale-wrapper">
                            <!-- Hover content -->
                            <div class="hover-content bg-blur bg-white bg-opacity-10">
                                <!-- Hover content -->
                                <div class="z-index-2 mt-auto">
                                    <span class="text-white">Technology</span>
                                    <h6 class="mb-0 mt-2"><a href="{{ route('second', [ 'portfolio' ,'case-study-v1']) }}"
                                            class="text-white stretched-link">Brand Identity Development</a></h6>
                                </div>
                            </div>
                            <!-- Image -->
                            <a href="{{ route('second', [ 'portfolio' ,'case-study-v1']) }}" class="stretched-link"><img
                                    src="/images/portfolio/01.jpg" class="img-scale img-blur"
                                    alt="portfolio-img"></a>
                        </div>
                    </div>
                </div>

                <!-- Project item -->
                <div class="col-md-5">
                    <div class="card card-img-scale card-content-hover overflow-hidden rounded-4">
                        <div class="card-img-scale-wrapper">
                            <!-- Hover content -->
                            <div class="hover-content bg-blur bg-white bg-opacity-10">
                                <!-- Hover content -->
                                <div class="z-index-2 mt-auto">
                                    <span class="text-white">Technology</span>
                                    <h6 class="mb-0 mt-2"><a href="{{ route('second', [ 'portfolio' ,'case-study-v2']) }}"
                                            class="text-white stretched-link">E-commerce platform launch</a></h6>
                                </div>
                            </div>
                            <!-- Image -->
                            <a href="{{ route('second', [ 'portfolio' ,'case-study-v2']) }}" class="stretched-link"><img
                                    src="/images/portfolio/02.jpg" class="img-scale img-blur img-fluid"
                                    alt="portfolio-img"></a>
                        </div>
                    </div>
                </div>

                <!-- Project item -->
                <div class="col-md-5">
                    <div class="card card-img-scale card-content-hover overflow-hidden rounded-4">
                        <div class="card-img-scale-wrapper">
                            <!-- Hover content -->
                            <div class="hover-content bg-blur bg-white bg-opacity-10">
                                <!-- Hover content -->
                                <div class="z-index-2 mt-auto">
                                    <span class="text-white">Technology</span>
                                    <h6 class="mb-0 mt-2"><a href="{{ route('second', [ 'portfolio' ,'case-study-v1']) }}"
                                            class="text-white stretched-link">Mobile app development</a></h6>
                                </div>
                            </div>
                            <!-- Image -->
                            <a href="{{ route('second', [ 'portfolio' ,'case-study-v1']) }}" class="stretched-link"><img
                                    src="/images/portfolio/03.jpg" class="img-scale img-blur img-fluid"
                                    alt="portfolio-img"></a>
                        </div>
                    </div>
                </div>

                <!-- Project item -->
                <div class="col-md-7">
                    <div class="card card-img-scale card-content-hover overflow-hidden rounded-4">
                        <div class="card-img-scale-wrapper">
                            <!-- Hover content -->
                            <div class="hover-content bg-blur bg-white bg-opacity-10">
                                <!-- Hover content -->
                                <div class="z-index-2 mt-auto">
                                    <span class="text-white">Technology</span>
                                    <h6 class="mb-0 mt-2"><a href="{{ route('second', [ 'portfolio' ,'case-study-v2']) }}"
                                            class="text-white stretched-link">Digital marketing overhaul</a></h6>
                                </div>
                            </div>
                            <!-- Image -->
                            <a href="{{ route('second', [ 'portfolio' ,'case-study-v2']) }}" class="stretched-link"><img
                                    src="/images/portfolio/04.jpg" class="img-scale img-blur img-fluid"
                                    alt="portfolio-img"></a>
                        </div>
                    </div>
                </div>
            </div> <!-- Row END -->

            <!-- CTA START -->
            <div class="row mt-6">
                <div class="col-lg-10 col-xl-8 col-xxl-7 mx-auto">
                    <div class="bg-body text-lg-end rounded-3 shadow-primary position-relative px-3 px-sm-6 py-3">
                        <!-- Shape decoration -->
                        <div class="position-absolute top-0 start-0 mt-n5 ms-n4 d-none d-sm-block">
                            <img src="/images/elements/grad-shape/03.png" class="zoom-animate" alt="Shape">
                        </div>

                        <p class="heading-color mb-0 ms-sm-6 ms-xl-0">Embark on your project journey! partner with
                            us today
                            <a href="{{ route('second', [ 'pages' , 'contact-us-v2']) }}" class="fw-semibold hover-underline-animation mb-0">Join
                                today</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- CTA END -->
        </div>
    </section>
    <!-- =======================
    Project END -->

    <!-- =======================
    Testimonials START -->
    <section class="position-relative pt-0">
        <!-- Hand decoration -->
        <div class="position-absolute top-0 end-0 me-7 d-none d-sm-block" data-0="right:0%;top:50%;"
            data-top="right:0%;top:90%;">
            <img src="/images/elements/hand-dec.png" alt="hand decoration">
        </div>

        <!-- Grad shape decoration -->
        <div class="position-absolute start-0 bottom-0 mb-n7 ms-n7">
            <img src="/images/elements/grad-shape/05.png" alt="grad shape">
        </div>

        <div class="container-fluid">
            <div
                class="max-width-1550 bg-secondary bg-opacity-50 bg-blur position-relative rounded-4 overflow-hidden py-6 py-lg-8">
                <!-- Grad blur decoration -->
                <div class="position-absolute top-0 end-0 mt-n6 ms-n5">
                    <img src="/images/elements/grad-shape/blur-decoration.svg" class="blur-7 opacity-1"
                        alt="Grad shape">
                </div>

                <div class="container">
                    <!-- Title -->
                    <div class="inner-container text-center mb-lg-6">
                        <h2>Client Testimonials 😍</h2>
                    </div>

                    <!-- Slider contents START -->
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <!-- Slider START -->
                            <div class="swiper mt-2 mt-md-4"
                                data-swiper-options='{
							"spaceBetween": 30,
							"autoplay":{
								"delay": 4000,
								"disableOnInteraction": false,
								"pauseOnMouseEnter": true
							},
							"pagination":{
								"el":".swiper-pagination",
								"clickable":"true"
							}}'>

                                <div class="swiper-wrapper mb-5">
                                    <!-- Testimonials item -->
                                    <div class="swiper-slide">
                                        <div class="text-center">
                                            <!-- Image -->
                                            <div class="avatar avatar-lg mx-auto flex-shrink-0 mb-4">
                                                <img class="avatar-img rounded-circle"
                                                    src="/images/avatar/09.jpg" alt="avatar">
                                            </div>
                                            <!-- Testimonials text -->
                                            <blockquote class="mb-4">
                                                <p class="lead heading-color mb-0">Our passion for customer
                                                    excellence is just one reason why we are the market leader.
                                                    We've always worked very hard to give our customers the best
                                                    experience. Was out laughter raptures returned outweigh. Luckily
                                                    cheered colonel I do we attack highest enabled. </p>
                                            </blockquote>
                                            <!-- Rating star -->
                                            <ul class="list-inline mb-4">
                                                <li class="list-inline-item fs-6 me-0"><i
                                                        class="bi bi-star-fill text-warning"></i></li>
                                                <li class="list-inline-item fs-6 me-0"><i
                                                        class="bi bi-star-fill text-warning"></i></li>
                                                <li class="list-inline-item fs-6 me-0"><i
                                                        class="bi bi-star-fill text-warning"></i></li>
                                                <li class="list-inline-item fs-6 me-0"><i
                                                        class="bi bi-star-fill text-warning"></i></li>
                                                <li class="list-inline-item fs-6 me-0"><i
                                                        class="bi bi-star-half text-warning"></i></li>
                                            </ul>
                                            <!-- Testimonials info -->
                                            <div>
                                                <h6 class="mb-0">Jacqueline Miller</h6>
                                                <span>Product designer</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Testimonials item -->
                                    <div class="swiper-slide">
                                        <div class="text-center">
                                            <!-- Image -->
                                            <div class="avatar avatar-lg mx-auto flex-shrink-0 mb-4">
                                                <img class="avatar-img rounded-circle"
                                                    src="/images/avatar/10.jpg" alt="avatar">
                                            </div>
                                            <!-- Testimonials text -->
                                            <blockquote class="mb-4">
                                                <p class="lead heading-color mb-0">Their team went above and beyond
                                                    to understand our needs and deliver a solution that exceeded our
                                                    expectations. They demonstrated throughout the process was truly
                                                    impressive.</p>
                                            </blockquote>
                                            <!-- Rating star -->
                                            <ul class="list-inline mb-4">
                                                <li class="list-inline-item fs-6 me-0"><i
                                                        class="bi bi-star-fill text-warning"></i></li>
                                                <li class="list-inline-item fs-6 me-0"><i
                                                        class="bi bi-star-fill text-warning"></i></li>
                                                <li class="list-inline-item fs-6 me-0"><i
                                                        class="bi bi-star-fill text-warning"></i></li>
                                                <li class="list-inline-item fs-6 me-0"><i
                                                        class="bi bi-star-fill text-warning"></i></li>
                                                <li class="list-inline-item fs-6 me-0"><i
                                                        class="bi bi-star-fill text-warning"></i></li>
                                            </ul>
                                            <!-- Testimonials info -->
                                            <div>
                                                <h6 class="mb-0">Louis Ferguson</h6>
                                                <span>Web Developer</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Testimonials item -->
                                    <div class="swiper-slide">
                                        <div class="text-center">
                                            <!-- Image -->
                                            <div class="avatar avatar-lg mx-auto flex-shrink-0 mb-4">
                                                <img class="avatar-img rounded-circle"
                                                    src="/images/avatar/01.jpg" alt="avatar">
                                            </div>
                                            <!-- Testimonials text -->
                                            <blockquote class="mb-4">
                                                <p class="lead heading-color mb-0">Was out laughter raptures
                                                    returned outweigh. Luckily cheered colonel I do we attack
                                                    highest enabled. Tried law yet style child. The bore of true of
                                                    no be deal.</p>
                                            </blockquote>
                                            <!-- Rating star -->
                                            <ul class="list-inline mb-4">
                                                <li class="list-inline-item fs-6 me-0"><i
                                                        class="bi bi-star-fill text-warning"></i></li>
                                                <li class="list-inline-item fs-6 me-0"><i
                                                        class="bi bi-star-fill text-warning"></i></li>
                                                <li class="list-inline-item fs-6 me-0"><i
                                                        class="bi bi-star-fill text-warning"></i></li>
                                                <li class="list-inline-item fs-6 me-0"><i
                                                        class="bi bi-star-fill text-warning"></i></li>
                                                <li class="list-inline-item fs-6 me-0"><i
                                                        class="bi bi-star-half text-warning"></i></li>
                                            </ul>
                                            <!-- Testimonials info -->
                                            <div>
                                                <h6 class="mb-0">Emma Watson</h6>
                                                <span>UI/UX designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider Pagination -->
                                <div
                                    class="swiper-pagination swiper-pagination-primary position-absolute bottom-0 mb-3">
                                </div>
                            </div>
                            <!-- Slider END -->
                        </div>
                    </div>
                    <!-- Slider contents END -->

                    <hr class="border-primary border-2 border-opacity-25 my-5"> <!-- Divider -->

                    <!-- Platform rating START -->
                    <div class="row align-items-center px-md-5">
                        <div class="col-lg-4">
                            <h5 class="mb-4 mb-lg-0">More than 500+ clients using <span
                                    class="text-primary">Folio</span> platform</h5>
                        </div>

                        <!-- App store rating -->
                        <div
                            class="col-sm-6 col-lg-4 col-xl-3 border-end border-primary border-opacity-25 ms-auto mb-4 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <!-- Icon -->
                                <img src="/images/elements/apple.svg" class="icon-lg" alt="">

                                <!-- Content -->
                                <div class="ms-3">
                                    <!-- Rating -->
                                    <ul class="list-inline mb-1">
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
                                    <span>4.8 stars on App Store</span>
                                </div>
                            </div>
                        </div>

                        <!-- Google rating -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="d-flex align-items-center ps-2">
                                <!-- Icon -->
                                <img src="/images/elements/gicon.svg" class="icon-lg" alt="">

                                <!-- Content -->
                                <div class="ms-3">
                                    <!-- Rating -->
                                    <ul class="list-inline mb-1">
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
                                    <span>4.6 stars on Google</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Platform rating END -->

                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Testimonials END -->

    <!-- =======================
    newsletter START -->
    <section class="bg-dark position-relative overflow-hidden">
        <!-- Decoration START -->
        <!-- skewed divider -->
        <span class="position-absolute bottom-0 start-0 mb-n1">
            <svg class="fill-body" width="1920" height="73" viewBox="0 0 1920 73" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0L1920 61.5V73H0V0Z" />
            </svg>
        </span>

        <!-- Grad blur -->
        <div class="position-absolute top-0 start-0 mt-n6">
            <img src="/images/elements/grad-shape/blur-decoration.svg" class="rotate-270 blur-8 opacity-2"
                alt="Grad shape">
        </div>
        <!-- Decoration END -->

        <div class="container position-relative py-md-4 py-lg-6" data-bs-theme="dark">
            <div class="row align-items-center">
                <!-- Title and content -->
                <div class="col-md-6 col-xl-5 mb-5 mb-md-0">
                    <!-- Title -->
                    <h2 class="mb-4">Stay updated with our <span class="text-purple">Newsletter</span></h2>
                    <p class="mb-4">Join our community of like-minded individuals committed to digital
                        excellence.</p>

                    <!-- Input box -->
                    <form class="row g-2 align-items-center">
                        <div class="col-auto col-lg-8">
                            <input type="email" class="form-control form-control-lg bg-secondary"
                                placeholder="Your email">
                        </div>
                        <div class="col-auto col-lg-3">
                            <button type="submit" class="btn btn-lg btn-primary m-0">Subscribe!</button>
                        </div>

                        <p class="small mt-2">✌️ No Spam — We Promise!</p>
                    </form>
                </div>

                <!-- Images -->
                <div class="col-md-6 col-xl-6 ms-auto mb-5 mb-md-0">
                    <div class="row">
                        <div class="col-6">
                            <!-- Image -->
                            <img src="/images/about//02.jpg" class="rounded-4 rotate-343 ms-sm-5"
                                alt="newsletter image">
                        </div>

                        <div class="col-6 position-relative">
                            <!-- SVG decoration -->
                            <span class="position-absolute end-0 top-0 me-n6">
                                <svg class="text-warning" width="56" height="60" viewBox="0 0 56 60"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M51.8044 36.7111C52.0285 37.7464 51.9151 38.7515 51.5231 39.7029C51.3617 40.0957 50.89 40.3962 50.4945 40.1507C49.202 39.3489 48.0799 40.0351 46.9806 40.5161C39.9877 43.5764 33.6427 47.7141 27.5984 52.3323C25.3924 54.0174 23.2513 55.7877 21.0712 57.5062C20.7751 57.7393 20.5386 58.0976 20.0025 57.8218C19.4676 57.5467 19.7772 57.1192 19.6461 56.82C18.6494 54.5489 20.2676 53.3719 21.5408 52.0403C27.9794 45.3053 35.6339 40.3763 44.1971 36.8019C45.7641 36.1479 47.3855 35.6522 49.0878 35.5317C50.1723 35.4553 51.2032 35.6229 51.8044 36.7111Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M29.9195 22.8032C30.7242 22.8298 31.1485 23.1252 31.1604 23.8833C31.1722 24.6281 30.9621 25.0844 30.1883 25.4047C28.5332 26.0902 27.4664 27.5219 26.3619 28.8474C22.4715 33.5136 18.9392 38.4548 15.3371 43.342C15.0534 43.7266 14.7854 44.1391 14.1698 44.0784C13.4206 44.0056 13.8434 43.3522 13.5934 43.039C12.7705 42.0075 13.36 41.0997 13.8861 40.2167C16.6189 35.6321 19.2497 30.9775 22.8566 26.9853C24.04 25.6758 25.255 24.4023 26.6012 23.2522C27.1969 22.7436 28.1402 22.9248 28.589 22.0522C28.7715 21.6968 29.4892 21.5639 30.046 21.7502C30.3354 21.8469 30.6922 21.9218 30.7122 22.2653C30.7357 22.6684 30.2851 22.5879 29.9195 22.8032Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.9753 11.0035C13.4194 12.3771 13.1928 13.3668 12.5297 14.4675C11.2522 16.5878 10.8656 19.0437 10.444 21.4528C9.88589 24.6373 9.54112 27.8452 9.45818 31.0823C9.43761 31.9024 9.2677 32.723 9.11388 33.5333C9.05545 33.8419 8.94704 34.2153 8.45591 34.1324C8.05569 34.0655 7.9917 33.8009 7.84456 33.4612C6.69661 30.8124 7.27727 28.0503 7.36033 25.3544C7.47363 21.6793 7.9559 18.0252 9.10926 14.4984C9.5327 13.204 10.1045 11.9831 10.8585 10.8503C11.1819 10.3648 11.5587 9.9683 12.2306 10.0441C12.9673 10.1277 12.963 10.6735 12.9753 11.0035Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!-- Image -->
                            <img src="/images/about/03.jpg" class="rounded-4 rotate-13" alt="newsletter image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    newsletter END -->

    <!-- =======================
    Blog START -->
    <section>
        <div class="container">
            <!-- Title -->
            <div class="inner-container-small text-center mb-5">
                <h2 class="mb-0">Insights on our blog</h2>
            </div>

            <div class="row g-4 g-lg-5">
                <!-- Blog item -->
                <div class="col-md-4">
                    <article
                        class="card card-hover-shadow card-hover-transition border border-opacity-25 rounded-4 overflow-hidden h-100 p-0">
                        <!-- Badge -->
                        <div class="badge text-bg-white position-absolute top-0 start-0 m-4">Lifestyle</div>

                        <!-- Card image -->
                        <img src="/images/blog/01.jpg" class="card-img-top" alt="Blog-img">

                        <!-- Card Body -->
                        <div class="card-body pb-2">
                            <!-- Title -->
                            <h6 class="card-title mb-2"><a href="#">Techniques to captivate your
                                    audience</a></h6>
                        </div>

                        <!-- Card footer -->
                        <div class="card-footer pt-0">
                            <a class="icon-link icon-link-hover stretched-link" href="{{ route('third', [ 'pages' , 'blog','single']) }}">Read
                                more<i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </article>
                </div>

                <!-- Blog item -->
                <div class="col-md-4">
                    <article
                        class="card card-hover-shadow card-hover-transition bg-primary-grad rounded-4 overflow-hidden h-100 p-4">
                        <!-- Card Body -->
                        <div class="card-body p-0 pb-2">
                            <!-- Badge -->
                            <div class="badge text-bg-dark mb-3">Research</div>
                            <!-- Title -->
                            <h6 class="card-title text-white mb-5">Building a strong identity for your business
                            </h6>
                        </div>

                        <!-- Card footer -->
                        <div class="card-footer bg-transparent p-0">
                            <a class="link-white icon-link icon-link-hover stretched-link"
                                href="{{ route('third', [ 'pages' , 'blog','single']) }}">Read more<i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </article>
                </div>

                <!-- Blog item -->
                <div class="col-md-4">
                    <article
                        class="card card-hover-shadow card-hover-transition border border-opacity-25 rounded-4 overflow-hidden h-100 p-0">
                        <!-- Badge -->
                        <div class="badge text-bg-white position-absolute top-0 start-0 m-4">Lifestyle</div>

                        <!-- Card image -->
                        <img src="/images/blog/02.jpg" class="card-img-top" alt="Blog-img">

                        <!-- Card Body -->
                        <div class="card-body pb-2">
                            <!-- Title -->
                            <h6 class="card-title mb-2"><a href="#">Tips for improving your website's
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

            <!-- Explore button -->
            <div class="text-center mt-5">
                <p>Want more insights?</p>
                <a href="{{ route('third', [ 'pages' , 'blog','minimal']) }}" class="btn btn-white-shadow">Explore all resources</a>
            </div>
        </div>
    </section>
    <!-- =======================
    Blog END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
    Footer START -->
@include('layouts.partials/footer')
<!-- =======================
    Footer END -->

<!-- Back to top -->
<div class="back-top"></div>
@endsection
