@extends('layouts.landing', ['div' => true, 'headerClass' => 'bg-transparent', 'buttons' => false])

@section('css')
@vite(['node_modules/swiper/swiper-bundle.min.css', 'node_modules/glightbox/dist/css/glightbox.css'])
@endsection

@section('topAlert')
<div class="alert fade show bg-primary border-0 rounded-0 text-center overflow-hidden z-index-9 py-2 m-0 d-none d-lg-block"
    role="alert">
    <div class="container d-flex justify-content-between px-2 px-xl-4">
        <!-- Contact info -->
        <ul class="list-inline d-flex flex-wrap gap-3 text-white mb-0">
            <li class="list-inline-item small fw-light"><i class="bi bi-headset me-2"></i>Call us: <a href="#"
                    class="link-white">+123 555 66 </a></li>
            <li class="list-inline-item small fw-light"><i class="bi bi-envelope me-2"></i>Email: <a href="#"
                    class="link-white">example@gmail.com</a></li>
        </ul>

        <!-- Social links -->
        <ul class="list-inline mb-0">
            <li class="list-inline-item small text-white">Follow us on: </li>
            <li class="list-inline-item"> <a href="#" class="link-white"><i class="bi bi-facebook"></i></a> </li>
            <li class="list-inline-item"> <a href="#" class="link-white"><i class="bi bi-instagram"></i></a> </li>
            <li class="list-inline-item"> <a href="#" class="link-white"><i class="bi bi-twitter-x"></i></a> </li>
            <li class="list-inline-item"> <a href="#" class="link-white"><i class="bi bi-linkedin"></i></a> </li>
        </ul>
    </div>
</div>
@endsection

@section('buttons')
<!-- Buttons -->
<ul class="nav align-items-center dropdown-hover ms-sm-2">
    <!-- Dark mode option START -->
    <li class="nav-item dropdown dropdown-animation">
        <button class="btn btn-link mb-0 px-2 lh-1" id="bd-theme" type="button" aria-expanded="false"
            data-bs-toggle="dropdown" data-bs-display="static">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                class="bi bi-circle-half theme-icon-active fill-mode fa-fw" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                <use href="#"></use>
            </svg>
        </button>

        <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
            <li class="mb-1">
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
                    <svg width="16" height="16" fill="currentColor"
                        class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                        <path
                            d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                        <use href="#"></use>
                    </svg>Light
                </button>
            </li>
            <li class="mb-1">
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                        <path
                            d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                        <path
                            d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                        <use href="#"></use>
                    </svg>Dark
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active"
                    data-bs-theme-value="auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                        <use href="#"></use>
                    </svg>Auto
                </button>
            </li>
        </ul>
    </li>
    <!-- Dark mode option END -->

    <!-- Schedule button -->
    <li class="nav-item ms-2 d-none d-sm-block">
        <a href="#" class="btn btn-sm btn-dark mb-0" data-bs-toggle="offcanvas" data-bs-target="#scheduleCall"
            aria-controls="scheduleCall"><i class="bi bi-calendar-week me-2"></i>Schedule a call</a>
    </li>

    <!-- Responsive navbar toggler -->
    <li class="nav-item">
        <button class="navbar-toggler ms-sm-3 p-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
            aria-label="Toggle navigation">
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
    <section class="position-relative pt-sm-8 pt-lg-9 pb-4">
        <!-- Right side svg decoration -->
        <div class="position-absolute top-0 end-0 z-index-2 d-none d-md-block rtl-flip">
            <img src="/images/elements/grad-shape/07.png" alt="">
        </div>

        <div class="container pt-4">
            <div class="col-md-9 pe-3">
                <!-- Pre title -->
                <p class="heading-color bg-secondary d-inline-block rounded px-3 py-2 mb-3"><span
                        class="badge bg-dark me-2">New</span> Maximize productivity with next-generation software</p>

                <!-- Title -->
                <h1 class="display-6 fw-semibold mb-4 lh-base">Creating software solutions for your
                    <span class="text-primary ityped-cursor-opacity mb-0 d-block d-xxl-inline-block">
                        <span class="typed" data-type-text="business&&agency&&startup"></span>
                    </span>
                </h1>

                <!-- Button and info -->
                <div class="d-flex gap-3 gap-sm-4 flex-wrap">
                    <!-- Button -->
                    <a href="{{ route('second', [ 'portfolio' ,'modern']) }}" class="btn btn-primary-grad">Explore our work</a>

                    <!-- Info -->
                    <div class="d-flex gap-2 align-items-center">
                        <ul class="avatar-group mb-0 align-items-center">
                            <li class="avatar">
                                <img class="avatar-img rounded-circle" src="/images/avatar/02.jpg" alt="avatar">
                            </li>
                            <li class="avatar">
                                <img class="avatar-img rounded-circle" src="/images/avatar/05.jpg" alt="avatar">
                            </li>
                            <li class="avatar">
                                <img class="avatar-img rounded-circle" src="/images/avatar/10.jpg" alt="avatar">
                            </li>
                            <li class="avatar">
                                <img class="avatar-img rounded-circle" src="/images/avatar/09.jpg" alt="avatar">
                            </li>
                        </ul>
                        <p class="heading-color mb-0">15K+ happy clients</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- =======================
            Hero END -->

    <!-- =======================
            Image and client START -->
    <section class="bg-secondary position-relative overflow-hidden">
        <!-- skewed divider	 -->
        <span class="position-absolute top-0 start-0">
            <svg class="fill-body" width="1920" height="237" viewBox="0 0 1920 237" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M1940.5 0H-9V164C708.2 295.2 1589.5 218.667 1940.5 164V0Z" />
            </svg>
        </span>

        <div class="container position-relative z-index-9">
            <!-- Grad blur decoration -->
            <div class="position-absolute top-0 start-50 translate-middle-x mt-n3">
                <img src="/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-2 blur-8"
                    alt="Grad shape">
            </div>

            <!-- Image -->
            <div
                class="bg-body bg-opacity-10 bg-blur border border-white border-opacity-25 position-relative rounded-4 shadow-primary-lg p-4">
                <!-- Dots -->
                <span class="text-purple">
                    <svg class="mt-n4" width="40" height="10" viewBox="0 0 40 10" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 5C10 7.76142 7.76142 10 5 10C2.23858 10 0 7.76142 0 5C0 2.23858 2.23858 0 5 0C7.76142 0 10 2.23858 10 5Z"
                            fill="currentColor" />
                        <path
                            d="M25 5C25 7.76142 22.7614 10 20 10C17.2386 10 15 7.76142 15 5C15 2.23858 17.2386 0 20 0C22.7614 0 25 2.23858 25 5Z"
                            fill="currentColor" />
                        <path
                            d="M40 5C40 7.76142 37.7614 10 35 10C32.2386 10 30 7.76142 30 5C30 2.23858 32.2386 0 35 0C37.7614 0 40 2.23858 40 5Z"
                            fill="currentColor" />
                    </svg>
                </span>

                <!-- Images content -->
                <div class="row rounded-4 overflow-hidden g-0">
                    <!-- Call image -->
                    <div class="col-sm-5">
                        <div class="card card-body p-0 h-100">
                            <!-- Image -->
                            <img src="/images/bg/02.jpg" alt="">

                            <!-- Actions -->
                            <div class="card-img-overlay d-flex flex-column">
                                <ul class="list-inline d-flex gap-3 mb-1 mt-auto mx-auto">
                                    <li class="list-inline-item me-0">
                                        <button class="btn btn-lg btn-white btn-icon rounded-circle mb-0"
                                            type="button"><i class="bi bi-mic fa-sm"></i></button>
                                    </li>

                                    <li class="list-inline-item me-0">
                                        <button class="btn btn-lg btn-white btn-icon rounded-circle mb-0"
                                            type="button"><i class="bi bi-camera-reels fa-sm"></i></button>
                                    </li>

                                    <li class="list-inline-item me-0">
                                        <button class="btn btn-lg btn-danger btn-icon rounded-circle mb-0"
                                            type="button"><i class="bi bi-telephone-x fa-sm"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Code image -->
                    <div class="col-sm-7">
                        <div class="h-100"
                            style="background:url(/images/bg/code.jpg) no-repeat; background-size:cover; background-position:left top;">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Client slider START -->
            <div class="swiper mt-6"
                data-swiper-options='{
		"slidesPerView": 2,
			"spaceBetween": 50,
			"breakpoints": {
				"576": {"slidesPerView": 3},
				"768": {"slidesPerView": 4},
				"1200": {"slidesPerView": 6},
				"1400": {"slidesPerView": 8}
			}}'>

                <!-- Slider items -->
                <div class="swiper-wrapper align-items-center">
                    <!-- Image -->
                    <div class="swiper-slide">
                        <div class="swap-logo">
                            <img src="/images/client/logo-gray/01.svg" alt="client-img">
                            <div class="swap-item">
                                <img src="/images/client/logo-light/01.svg" class="dark-mode-item" alt="client logo">
                                <img src="/images/client/logo-dark/01.svg" class="light-mode-item" alt="client logo">
                            </div>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="swiper-slide">
                        <div class="swap-logo">
                            <img src="/images/client/logo-gray/02.svg" alt="client-img">
                            <div class="swap-item">
                                <img src="/images/client/logo-light/02.svg" class="dark-mode-item" alt="client logo">
                                <img src="/images/client/logo-dark/02.svg" class="light-mode-item" alt="client logo">
                            </div>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="swiper-slide">
                        <div class="swap-logo">
                            <img src="/images/client/logo-gray/03.svg" alt="client-img">
                            <div class="swap-item">
                                <img src="/images/client/logo-light/03.svg" class="dark-mode-item" alt="client logo">
                                <img src="/images/client/logo-dark/03.svg" class="light-mode-item" alt="client logo">
                            </div>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="swiper-slide">
                        <div class="swap-logo">
                            <img src="/images/client/logo-gray/04.svg" alt="client-img">
                            <div class="swap-item">
                                <img src="/images/client/logo-light/04.svg" class="dark-mode-item" alt="client logo">
                                <img src="/images/client/logo-dark/04.svg" class="light-mode-item" alt="client logo">
                            </div>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="swiper-slide">
                        <div class="swap-logo">
                            <img src="/images/client/logo-gray/05.svg" alt="client-img">
                            <div class="swap-item">
                                <img src="/images/client/logo-light/05.svg" class="dark-mode-item" alt="client logo">
                                <img src="/images/client/logo-dark/05.svg" class="light-mode-item" alt="client logo">
                            </div>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="swiper-slide">
                        <div class="swap-logo">
                            <img src="/images/client/logo-gray/06.svg" alt="client-img">
                            <div class="swap-item">
                                <img src="/images/client/logo-light/06.svg" class="dark-mode-item" alt="client logo">
                                <img src="/images/client/logo-dark/06.svg" class="light-mode-item" alt="client logo">
                            </div>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="swiper-slide">
                        <div class="swap-logo">
                            <img src="/images/client/logo-gray/07.svg" alt="client-img">
                            <div class="swap-item">
                                <img src="/images/client/logo-light/07.svg" class="dark-mode-item" alt="client logo">
                                <img src="/images/client/logo-dark/07.svg" class="light-mode-item" alt="client logo">
                            </div>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="swiper-slide">
                        <div class="swap-logo">
                            <img src="/images/client/logo-gray/08.svg" alt="client-img">
                            <div class="swap-item">
                                <img src="/images/client/logo-light/08.svg" class="dark-mode-item" alt="client logo">
                                <img src="/images/client/logo-dark/08.svg" class="light-mode-item" alt="client logo">
                            </div>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="swiper-slide">
                        <div class="swap-logo">
                            <img src="/images/client/logo-gray/09.svg" alt="client-img">
                            <div class="swap-item">
                                <img src="/images/client/logo-light/09.svg" class="dark-mode-item" alt="client logo">
                                <img src="/images/client/logo-dark/09.svg" class="light-mode-item" alt="client logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Client slider END -->
        </div>
    </section>
    <!-- =======================
            Image and client END -->

    <!-- =======================
            About START -->
    <section class="bg-secondary pt-0 overflow-hidden">
        <div class="container">
            <div class="row g-4">
                <!-- Title and contents -->
                <div class="col-lg-5">
                    <h2 class="mb-2 mb-lg-4">Leading the future of software innovation</h2>
                    <p class="mb-2 mb-lg-4">Our expert team is dedicated to understanding your unique needs and
                        delivering solutions that exceed expectations.</p>

                    <!-- List -->
                    <ul class="list-group list-group-borderless mb-3 mb-lg-4">
                        <li class="list-group-item d-flex heading-color fw-semibold pb-0"><i
                                class="bi bi-check-circle text-primary me-2"></i>Collaborative approach</li>
                        <li class="list-group-item d-flex heading-color fw-semibold pb-0"><i
                                class="bi bi-check-circle text-primary me-2"></i>Agile development methodology</li>
                        <li class="list-group-item d-flex heading-color fw-semibold pb-0"><i
                                class="bi bi-check-circle text-primary me-2"></i>Data security and compliance</li>
                    </ul>

                    <!-- Buttons -->
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="{{ route('second', ['about', 'v2']) }}" class="btn btn-primary mb-0">Learn more</a>
                        <a href="{{ route('second', [ 'pages' , 'contact-us-v1']) }}" class="link-primary-grad icon-link icon-link-hover">Schedule a
                            consultation <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Image -->
                <div class="col-lg-6 position-relative ms-auto ps-lg-4">
                    <!-- Shape decoration -->
                    <div class="position-absolute start-0 bottom-0 ms-n6 mb-5 d-none d-sm-block">
                        <img src="/images/elements/grad-shape/08.png" class="blur-1 z-index-9 position-relative"
                            alt="shape decoration">
                    </div>

                    <!-- Blur decoration -->
                    <div class="position-absolute top-50 start-0 translate-middle-y ms-n4 mt-n7">
                        <img src="/images/elements/grad-shape/blur-decoration.svg" class="blur-7 opacity-1"
                            alt="Grad shape">
                    </div>

                    <!-- Main image -->
                    <img src="/images/about/04.jpg" class="rounded-4 position-relative z-index-2" alt="about image">
                </div>

            </div>
        </div>
    </section>
    <!-- =======================
            About END -->

    <!-- =======================
            Services START -->
    <section class="bg-secondary position-relative overflow-hidden pt-0">
        <div class="container position-relative">
            <!-- Title -->
            <div class="inner-container-small text-center mb-6 mb-lg-7">
                <h2 class="mb-0">Our expert services</h2>
            </div>

            <!-- Services START -->
            <div class="row g-4 g-xl-5">
                <!-- Service item -->
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div
                        class="card card-hover-shadow card-icon-transition text-center bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-4">
                        <!-- Icon -->
                        <div
                            class="card-icon icon-xl bg-pink d-flex justify-content-center align-items-center text-white rounded-circle">
                            <svg width="40" height="40" viewBox="0 0 35 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.5587 22.5601C22.1315 22.9872 22.1315 23.6797 22.5587 24.1068C22.9858 24.534 23.6782 24.534 24.1054 24.1068L22.5587 22.5601ZM29.1654 17.5001L29.9387 18.2735C30.1439 18.0684 30.2591 17.7902 30.2591 17.5001C30.2591 17.2101 30.1439 16.9318 29.9387 16.7268L29.1654 17.5001ZM24.1054 10.8934C23.6782 10.4663 22.9858 10.4663 22.5587 10.8934C22.1315 11.3205 22.1315 12.0131 22.5587 12.4402L24.1054 10.8934ZM12.4388 12.4402C12.8659 12.0131 12.8659 11.3205 12.4388 10.8934C12.0116 10.4663 11.3191 10.4663 10.892 10.8934L12.4388 12.4402ZM5.83203 17.5001L5.05863 16.7268C4.85352 16.9318 4.73828 17.2101 4.73828 17.5001C4.73828 17.7902 4.85352 18.0684 5.05863 18.2735L5.83203 17.5001ZM10.892 24.1068C11.3191 24.534 12.0116 24.534 12.4388 24.1068C12.8659 23.6797 12.8659 22.9872 12.4388 22.5601L10.892 24.1068ZM13.5304 27.408C13.3644 27.9887 13.7007 28.5941 14.2816 28.7601C14.8623 28.926 15.4677 28.5897 15.6336 28.0089L13.5304 27.408ZM21.467 7.59226C21.6329 7.01144 21.2966 6.40607 20.7158 6.24012C20.1351 6.07416 19.5297 6.41049 19.3638 6.99131L21.467 7.59226ZM24.1054 24.1068L29.9387 18.2735L28.392 16.7268L22.5587 22.5601L24.1054 24.1068ZM29.9387 16.7268L24.1054 10.8934L22.5587 12.4402L28.392 18.2735L29.9387 16.7268ZM10.892 10.8934L5.05863 16.7268L6.60543 18.2735L12.4388 12.4402L10.892 10.8934ZM5.05863 18.2735L10.892 24.1068L12.4388 22.5601L6.60543 16.7268L5.05863 18.2735ZM15.6336 28.0089L21.467 7.59226L19.3638 6.99131L13.5304 27.408L15.6336 28.0089Z"
                                    fill="currentColor" />
                            </svg>
                        </div>

                        <!-- Card body -->
                        <div class="card-footer bg-transparent mt-6 p-0">
                            <h6 class="mb-3">Software development</h6>
                            <p>Transform your unique ideas into reality with our services.</p>
                            <a href="{{ route('second', ['about', 'service-single']) }}"
                                class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div
                        class="card card-hover-shadow card-icon-transition text-center bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-4">
                        <!-- Icon -->
                        <div
                            class="card-icon icon-xl bg-purple d-flex justify-content-center align-items-center text-white rounded-circle">
                            <svg width="35" height="35" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.99982 16.6666C7.03588 17.5593 6.0539 18.0056 5.66258 18.5624C5.05648 19.4249 5.05648 20.5749 5.66258 21.4374C6.0539 21.9943 7.03588 22.4406 8.99982 23.3333M8.99982 16.6666C7.03588 15.7739 6.0539 15.3276 5.66258 14.7707C5.05648 13.9083 5.05648 12.7583 5.66258 11.8958C6.0539 11.339 7.03588 10.8926 8.99982 9.99994L18.1376 5.84636C18.951 5.47673 19.3575 5.29189 19.7868 5.25519C19.9285 5.24306 20.0711 5.24306 20.2128 5.25519C20.6421 5.29189 21.0486 5.47673 21.862 5.84636L30.9998 9.99994C32.9638 10.8926 33.9457 11.339 34.337 11.8958C34.9432 12.7583 34.9432 13.9083 34.337 14.7707C33.9457 15.3276 32.9638 15.7739 30.9998 16.6666M8.99982 16.6666L18.1376 20.8203C18.951 21.1898 19.3575 21.3746 19.7868 21.4114C19.9285 21.4234 20.0711 21.4234 20.2128 21.4114C20.6421 21.3746 21.0486 21.1898 21.862 20.8203L30.9998 16.6666M8.99982 23.3333C7.03588 24.2259 6.0539 24.6723 5.66258 25.2291C5.05648 26.0916 5.05648 27.2416 5.66258 28.1041C6.0539 28.6609 7.03588 29.1073 8.99982 29.9999L18.1376 34.1536C18.951 34.5231 19.3575 34.7079 19.7868 34.7448C19.9285 34.7568 20.0711 34.7568 20.2128 34.7448C20.6421 34.7079 21.0486 34.5231 21.862 34.1536L30.9998 29.9999C32.9638 29.1073 33.9457 28.6609 34.337 28.1041C34.9432 27.2416 34.9432 26.0916 34.337 25.2291C33.9457 24.6723 32.9638 24.2259 30.9998 23.3333M8.99982 23.3333L18.1376 27.4869C18.951 27.8564 19.3575 28.0413 19.7868 28.0781C19.9285 28.0901 20.0711 28.0901 20.2128 28.0781C20.6421 28.0413 21.0486 27.8564 21.862 27.4869L30.9998 23.3333M30.9998 16.6666C32.9638 17.5593 33.9457 18.0056 34.337 18.5624C34.9432 19.4249 34.9432 20.5749 34.337 21.4374C33.9457 21.9943 32.9638 22.4406 30.9998 23.3333"
                                    stroke="currentColor" stroke-width="2.5" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <!-- Card body -->
                        <div class="card-footer bg-transparent mt-6 p-0">
                            <h6 class="mb-3">Consultancy & Strategy</h6>
                            <p> Our experienced consultants work closely with you to assess.</p>
                            <a href="{{ route('second', ['about', 'service-single']) }}"
                                class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div
                        class="card card-hover-shadow card-icon-transition text-center bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-4">
                        <!-- Icon -->
                        <div
                            class="card-icon icon-xl bg-warning d-flex justify-content-center align-items-center text-white rounded-circle">
                            <svg width="40" height="40" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.9076 8.95361L11.4613 10.3868C10.8209 10.5554 10.5007 10.6396 10.2575 10.8362C10.1776 10.9008 10.1047 10.9737 10.0401 11.0536C9.84355 11.2968 9.75929 11.617 9.59077 12.2574L6.51585 23.9421C5.73018 26.9276 5.33735 28.4204 5.95407 29.3682C6.14829 29.6667 6.40282 29.9212 6.7013 30.1154C7.64911 30.7322 9.14189 30.3393 12.1274 29.5536L23.8121 26.4787C24.4525 26.3102 24.7727 26.2259 25.0159 26.0294C25.0958 25.9648 25.1687 25.8919 25.2333 25.812C25.4299 25.5688 25.5141 25.2486 25.6827 24.6082L27.1159 19.1619M16.9076 8.95361L27.1159 19.1619M16.9076 8.95361L19.4264 6.43477C20.1997 5.66143 20.5864 5.27475 21.0544 5.20063C21.2056 5.17669 21.3595 5.17669 21.5107 5.20063C21.9787 5.27475 22.3654 5.66143 23.1387 6.43477L29.6347 12.9308C30.4081 13.7041 30.7947 14.0908 30.8689 14.5588C30.8928 14.71 30.8928 14.8639 30.8689 15.0151C30.7947 15.4831 30.4081 15.8698 29.6347 16.6431L27.1159 19.1619"
                                    stroke="currentColor" stroke-width="2.1875" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M14.9023 21.1742C13.8452 20.1171 13.8452 18.4032 14.9023 17.3461C15.9595 16.2889 17.6734 16.2889 18.7305 17.3461C19.7876 18.4032 19.7876 20.1171 18.7305 21.1742C17.6734 22.2313 15.9595 22.2313 14.9023 21.1742ZM14.9023 21.1742L11.0742 25.0023"
                                    stroke="currentColor" stroke-width="2.1875" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>

                        <!-- Card body -->
                        <div class="card-footer bg-transparent mt-6 p-0">
                            <h6 class="mb-3">UX/UI design</h6>
                            <p>Talented designers combine creativity with user-centric design.</p>
                            <a href="{{ route('second', ['about', 'service-single']) }}"
                                class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div
                        class="card card-hover-shadow card-icon-transition text-center bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-4">
                        <!-- Icon -->
                        <div
                            class="card-icon icon-xl bg-primary d-flex justify-content-center align-items-center text-white rounded-circle">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 5V8.33333M20 5C15.8579 5 12.1079 6.67893 9.3934 9.3934M20 5C24.1418 5 27.8917 6.67875 30.6062 9.39295M9.3934 9.3934C6.67893 12.1079 5 15.8579 5 20M9.3934 9.3934L11.7488 11.7488M30.6062 9.39295C33.3208 12.1074 35 15.8576 35 20M30.6062 9.39295L28.2492 11.75M5 20H8.33333M5 20C5 24.1418 6.67875 27.8917 9.39295 30.6062M9.39295 30.6062C12.1074 33.3208 15.8576 35 20 35M9.39295 30.6062L11.75 28.2492M35 20H31.6667M35 20C35 24.1422 33.321 27.8922 30.6067 30.6067M30.6067 30.6067C27.8922 33.321 24.1422 35 20 35M30.6067 30.6067L28.248 28.248M20 35V31.6667M19.9993 17.5C21.38 17.5 22.5 18.6193 22.5 20C22.5 21.3807 21.3807 22.5 20 22.5C18.6193 22.5 17.5 21.3803 17.5 19.9997C17.5 18.6193 18.619 17.5 19.9993 17.5ZM19.9993 17.5V12.9167"
                                    stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>

                        <!-- Card body -->
                        <div class="card-footer bg-transparent mt-6 p-0">
                            <h6 class="mb-3">Quality assurance</h6>
                            <p> From functional testing to performance testing, our meticulous.</p>
                            <a href="{{ route('second', ['about', 'service-single']) }}"
                                class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div
                        class="card card-hover-shadow card-icon-transition text-center bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-4">
                        <!-- Icon -->
                        <div
                            class="card-icon icon-xl bg-success d-flex justify-content-center align-items-center text-white rounded-circle">
                            <svg width="40" height="40" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.79167 24.1979V24.1979C6.64783 24.1979 5.5866 23.5194 5.2982 22.4125C5.02201 21.3525 4.875 20.2403 4.875 19.0938C4.875 11.845 10.7513 5.96875 18 5.96875C25.2487 5.96875 31.125 11.845 31.125 19.0938C31.125 20.2403 30.978 21.3525 30.7018 22.4125C30.4134 23.5194 29.3522 24.1979 28.2083 24.1979V24.1979M25.2917 30.0313V30.0313C26.9025 30.0313 28.2083 28.7254 28.2083 27.1146V21.2813C28.2083 19.6704 26.9025 18.3646 25.2917 18.3646V18.3646C23.6808 18.3646 22.375 19.6704 22.375 21.2813V27.1146C22.375 28.7254 23.6808 30.0313 25.2917 30.0313ZM10.7083 30.0313V30.0313C12.3192 30.0313 13.625 28.7254 13.625 27.1146V21.2813C13.625 19.6704 12.3192 18.3646 10.7083 18.3646V18.3646C9.0975 18.3646 7.79167 19.6704 7.79167 21.2813V27.1146C7.79167 28.7254 9.0975 30.0313 10.7083 30.0313Z"
                                    stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>

                        <!-- Card body -->
                        <div class="card-footer bg-transparent mt-6 p-0">
                            <h6 class="mb-3">Maintenance & Support</h6>
                            <p>Keep your software running smoothly with our maintenance.</p>
                            <a href="{{ route('second', ['about', 'service-single']) }}"
                                class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- button -->
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column justify-content-center align-items-center text-center h-100">
                        <img src="/images/elements/emoji.png" class="mb-3" alt="">
                        <p>Not satisfied yet?</p>
                        <a href="{{ route('second', ['about', 'services-grid']) }}"
                            class="btn btn-primary-grad mb-0">Explore all services</a>
                    </div>
                </div>

            </div>
            <!-- Services END -->
        </div>
    </section>
    <!-- =======================
            Services END -->

    <!-- =======================
            Video START -->
    <section class="bg-body position-relative overflow-hidden">
        <!-- Dark bg -->
        <div class="bg-dark h-500px w-100 position-absolute top-0 start-0">
            <!-- Blur shape -->
            <div class="position-absolute top-0 start-0 translate-middle">
                <img src="/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-1 blur-8"
                    alt="Grad shape">
            </div>

            <!-- skewed divider -->
            <span class="position-absolute start-0 bottom-0">
                <svg class="fill-body" width="1920" height="99" viewBox="0 0 1920 99" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 93L1946 0V99H0V93Z" />
                </svg>
            </span>
        </div>

        <div class="container position-relative">
            <!-- Title -->
            <div class="row mb-4 mb-md-6">
                <div class="col-md-6">
                    <h2 class="text-white mb-0">Mastering every step of our methodology</h2>
                </div>
            </div>

            <!-- Video section -->
            <div class="bg-parallax position-relative h-400px h-xl-500px rounded-4 overflow-hidden"
                style="background:url(/images/about/05.jpg) no-repeat; background-size:cover; background-position:center;">
                <!-- BG overlay -->
                <div class="bg-overlay bg-purple opacity-1"></div>
                <!-- Play button -->
                <div class="position-absolute top-50 start-50 translate-middle z-index-2">
                    <a href="https://www.youtube.com/embed/tXHviS-4ygo"
                        class="btn btn-icon btn-xl btn-white btn-round mb-0" data-glightbox=""
                        data-gallery="Video"><i class="bi bi-play-fill fa-lg"></i></a>
                </div>
            </div>

            <!-- CTA -->
            <div class="inner-container-small bg-body shadow-primary rounded-3 text-center py-3 mt-5">
                <p class="mb-0 px-2 px-sm-5 px-md-0">🚀 Need any help or questions, don't worry!
                    <a href="{{ route('second', [ 'pages' , 'contact-us-v2']) }}" class="fw-semibold heading-color hover-underline-animation">Hit the
                        button</a>
                </p>
            </div>
        </div>
    </section>
    <!-- =======================
            Video END -->

    <!-- =======================
            Testimonials START -->
    <section class="bg-body position-relative pt-0 pb-5 pb-sm-0">
        <!-- Right side svg decoration -->
        <div class="position-absolute top-100 start-0 translate-middle z-index-2 ms-5 ms-xl-9 mt-5 d-none d-sm-block">
            <img src="/images/elements/grad-shape/10.png" class="h-500px h-xl-700px rtl-flip" alt="">
        </div>

        <div class="container position-relative z-index-9">
            <!-- Title -->
            <div class="row align-items-center mb-4 mb-md-5">
                <div class="col-md-7 col-lg-5">
                    <h2 class="mb-0">What our clients say</h2>
                </div>

                <div class="col-md-5 ms-sm-auto text-sm-end mt-5 mt-sm-0">
                    <!-- Add pagination and navigation elements here -->
                    <div class="d-flex gap-2 justify-content-sm-end">
                        <a href="#"
                            class="btn btn-primary-grad btn-icon btn-lg rounded-circle mb-0 swiper-button-prev"><i
                                class="bi bi-arrow-left fa-sm"></i></a>
                        <a href="#"
                            class="btn btn-primary-grad btn-icon btn-lg rounded-circle mb-0 swiper-button-next"><i
                                class="bi bi-arrow-right fa-sm"></i></a>
                    </div>
                </div>
            </div>

            <!-- Testimonials START -->
            <div class="swiper"
                data-swiper-options='{
				"spaceBetween": 30,
				"breakpoints": {
					"576": {"slidesPerView": 1},
					"768": {"slidesPerView": 2},
					"992": {"slidesPerView": 3}
				},
				"navigation":{
					"nextEl":".swiper-button-next",
					"prevEl":".swiper-button-prev"
				}}'>

                <div class="swiper-wrapper">
                    <!-- Testimonials item -->
                    <div class="swiper-slide">
                        <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                            <!-- Card body -->
                            <div class="card-body p-0 mb-4">
                                <!-- Rating star -->
                                <ul class="list-inline mb-3">
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
                                <!-- Testimonials text -->
                                <blockquote>
                                    <p class="heading-color mb-0">Their team went above and beyond to understand our
                                        needs and deliver a solution that exceeded our expectations. They demonstrated
                                        throughout the process was truly impressive.</p>
                                </blockquote>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer bg-transparent p-0">
                                <!-- Testimonials info -->
                                <div class="d-flex align-items-center">
                                    <div class="avatar flex-shrink-0">
                                        <img class="avatar-img rounded-circle" src="/images/avatar/09.jpg"
                                            alt="avatar">
                                    </div>
                                    <div class="ms-3">
                                        <p class="lead heading-color fw-semibold mb-0">Jacqueline Miller</p>
                                        <small>Product designer</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonials item -->
                    <div class="swiper-slide">
                        <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                            <!-- Card body -->
                            <div class="card-body p-0 mb-4">
                                <!-- Rating star -->
                                <ul class="list-inline mb-3">
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i>
                                    </li>
                                </ul>
                                <!-- Testimonials text -->
                                <blockquote>
                                    <p class="heading-color mb-0">Frequently partiality possession resolution at or
                                        appearance unaffected me. Ye goodness felicity do disposal dwelling no.</p>
                                </blockquote>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer bg-transparent p-0">
                                <!-- Testimonials info -->
                                <div class="d-flex align-items-center">
                                    <div class="avatar flex-shrink-0">
                                        <img class="avatar-img rounded-circle" src="/images/avatar/10.jpg"
                                            alt="avatar">
                                    </div>
                                    <div class="ms-3">
                                        <p class="lead heading-color fw-semibold mb-0">Louis Ferguson</p>
                                        <small>Web Developer</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonials item -->
                    <div class="swiper-slide">
                        <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                            <!-- Card body -->
                            <div class="card-body p-0 mb-4">
                                <!-- Rating star -->
                                <ul class="list-inline mb-3">
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
                                <!-- Testimonials text -->
                                <blockquote>
                                    <p class="heading-color mb-0">Was out laughter raptures returned outweigh. Luckily
                                        cheered colonel I do we attack highest enabled. Tried law yet style child. The
                                        bore of true of no be deal.</p>
                                </blockquote>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer bg-transparent p-0">
                                <!-- Testimonials info -->
                                <div class="d-flex align-items-center">
                                    <div class="avatar flex-shrink-0">
                                        <img class="avatar-img rounded-circle" src="/images/avatar/04.jpg"
                                            alt="avatar">
                                    </div>
                                    <div class="ms-3">
                                        <p class="lead heading-color fw-semibold mb-0">Emma Watson</p>
                                        <small>UI/UX designer</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonials item -->
                    <div class="swiper-slide">
                        <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                            <!-- Card body -->
                            <div class="card-body p-0 mb-4">
                                <!-- Rating star -->
                                <ul class="list-inline mb-3">
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
                                <!-- Testimonials text -->
                                <blockquote>
                                    <p class="heading-color mb-0">Our passion for customer excellence is just one
                                        reason why we are the market leader. We've always worked very hard to give our
                                        customers the best experience.</p>
                                </blockquote>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer bg-transparent p-0">
                                <!-- Testimonials info -->
                                <div class="d-flex align-items-center">
                                    <div class="avatar flex-shrink-0">
                                        <img class="avatar-img rounded-circle" src="/images/avatar/07.jpg"
                                            alt="avatar">
                                    </div>
                                    <div class="ms-3">
                                        <p class="lead heading-color fw-semibold mb-0">Allen Smith</p>
                                        <small>Manager</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonials item -->
                    <div class="swiper-slide">
                        <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                            <!-- Card body -->
                            <div class="card-body p-0 mb-4">
                                <!-- Rating star -->
                                <ul class="list-inline mb-3">
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
                                <!-- Testimonials text -->
                                <blockquote>
                                    <p class="heading-color mb-0">Was out laughter raptures returned outweigh. Luckily
                                        cheered colonel I do we attack highest enabled. Tried law yet style child. The
                                        bore of true of no be deal.</p>
                                </blockquote>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer bg-transparent p-0">
                                <!-- Testimonials info -->
                                <div class="d-flex align-items-center">
                                    <div class="avatar flex-shrink-0">
                                        <img class="avatar-img rounded-circle" src="/images/avatar/01.jpg"
                                            alt="avatar">
                                    </div>
                                    <div class="ms-3">
                                        <p class="lead heading-color fw-semibold mb-0">Emma Watson</p>
                                        <small>UI/UX designer</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonials END -->
        </div>
    </section>
    <!-- =======================
            Testimonials END -->

    <!-- =======================
            Pricing START -->
    <section class="bg-secondary position-relative overflow-hidden">
        <!-- skewed divider	 -->
        <span>
            <svg class="position-absolute top-0 start-0 mt-lg-n6" viewBox="0 0 1950 237"
                style="enable-background:new 0 0 1950 237;" xml:space="preserve">
                <path class="fill-body" d="M1949.5,0H0v164c717.2,131.2,1598.5,54.7,1949.5,0V0z" />
            </svg>
        </span>

        <div class="container position-relative z-index-9 pt-5 pt-xxl-8">
            <div class="row g-4 align-items-center">
                <!-- Title and tab -->
                <div class="col-lg-4">
                    <h2 class="mb-3 mb-lg-4"> Find the perfect plan for your business</h2>
                    <p class="mb-4">Our flexible pricing plans are designed to scale with your business, offering the
                        features you need to thrive.</p>
                    <a href="{{ route('second', [ 'pages' , 'pricing-v1']) }}" class="btn btn-primary-grad icon-link icon-link-hover">Compare pricing
                        <i class="bi bi-arrow-right"></i></a>
                </div>

                <!-- Pricing content -->
                <div class="col-lg-8 ms-auto ps-xl-6">
                    <div class="row align-items-center g-0">

                        <!-- Pricing item START -->
                        <div class="col-md-6 mb-5 mb-md-0">
                            <div class="card bg-body text-center align-items-center p-4 pe-5 me-md-n3">

                                <!-- Card header -->
                                <div class="card-header bg-transparent d-flex flex-column align-items-center p-0">
                                    <!-- Icon -->
                                    <div
                                        class="icon-xl bg-secondary d-flex justify-content-center align-items-center text-white rounded-circle mb-3">
                                        <img src="/images/elements/rocket.png" class="h-40px" alt="rocket">
                                    </div>

                                    <!-- Title -->
                                    <h6 class="mb-3">Basic plan</h6>

                                    <!-- Price -->
                                    <span class="text-primary-grad"> <span class="h1 fw-bold">$25</span> /month</span>
                                </div>

                                <!-- Card body -->
                                <div class="card-body w-100 p-0 mt-3">
                                    <ul class="list-group list-group-borderless text-center mb-4">
                                        <li class="list-group-item mb-0"><i
                                                class="bi bi-check-lg text-success me-1"></i>Customizable features</li>
                                        <li class="list-group-item mb-0"><i
                                                class="bi bi-check-lg text-success me-1"></i>Basic support</li>
                                        <li class="list-group-item mb-0"><i
                                                class="bi bi-check-lg text-success me-1"></i>Monthly updates</li>
                                        <li class="list-group-item mb-0"><i
                                                class="bi bi-check-lg text-success me-1"></i>Up to 50 Users</li>
                                    </ul>

                                    <a href="{{ route('second', [ 'pages' , 'contact-us-v2']) }}" class="btn btn-dark w-100 mb-0">Get started</a>
                                </div>
                            </div>
                        </div>
                        <!-- Pricing item END -->

                        <!-- Pricing item START -->
                        <div class="col-md-6">
                            <div class="card bg-primary text-center align-items-center p-4 pt-5">
                                <!-- Badge -->
                                <div
                                    class="text-bg-dark rounded position-absolute top-0 start-50 translate-middle px-3 py-1">
                                    Most popular</div>

                                <!-- Card header -->
                                <div class="card-header bg-transparent d-flex flex-column align-items-center p-0">
                                    <!-- Icon -->
                                    <div
                                        class="icon-xl bg-body d-flex justify-content-center align-items-center text-white rounded-circle mb-3">
                                        <img src="/images/elements/thunder.png" class="h-40px" alt="thunder">
                                    </div>

                                    <!-- Title -->
                                    <h6 class="mb-3 text-white">Standard plan</h6>

                                    <!-- Price -->
                                    <span class="text-white"> <span class="h1 text-white fw-bold">$120</span>
                                        /month</span>
                                </div>

                                <!-- Card body -->
                                <div class="card-body w-100 p-0 mt-3">
                                    <ul class="list-group list-group-borderless text-center opacity-8 mb-4">
                                        <li class="list-group-item text-white mb-0"><i
                                                class="bi bi-check-lg me-1"></i>All basic plan features</li>
                                        <li class="list-group-item text-white mb-0"><i
                                                class="bi bi-check-lg me-1"></i>Priority support</li>
                                        <li class="list-group-item text-white mb-0"><i
                                                class="bi bi-check-lg me-1"></i>Access to advanced features</li>
                                        <li class="list-group-item text-white mb-0"><i
                                                class="bi bi-check-lg me-1"></i>Up to 100 Users</li>
                                        <li class="list-group-item text-white mb-0"><i
                                                class="bi bi-check-lg me-1"></i>Dedicated account manager</li>
                                    </ul>
                                    <!-- Button -->
                                    <a href="{{ route('second', [ 'pages' , 'contact-us-v2']) }}" class="btn btn-white w-100 mb-0">Get started</a>
                                </div>
                            </div>
                        </div>
                        <!-- Pricing item END -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
            Pricing END -->

    <!-- =======================
            Faq START -->
    <section class="bg-secondary pt-0 position-relative">
        <!-- Grad blur decoration -->
        <div class="position-absolute end-0 bottom-0 d-none d-sm-block">
            <img src="/images/elements/grad-shape/12.png" class="blur-2" alt="Decoration shape">
        </div>

        <div class="container position-relative">
            <!-- Title -->
            <div class="inner-container position-relative text-center mb-4 mb-md-5">
                <h2 class="mb-0">Got questions? (FAQs)</h2>
            </div>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- Accordion START -->
                    <div class="accordion accordion-bg-body-light" id="accordionFaq">
                        <!-- Item -->
                        <div class="accordion-item mb-4">
                            <div class="accordion-header font-base" id="heading-1">
                                <button class="accordion-button fw-semibold rounded" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true"
                                    aria-controls="collapse-1">
                                    How do I get started with your service?
                                </button>
                            </div>
                            <!-- Body -->
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body pt-0 pt-0">
                                    The first step is to sign up for our service. You can do this by visiting our
                                    website and locating the sign-up or registration button. Click on it and follow the
                                    prompts to create your account.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-4">
                            <div class="accordion-header font-base" id="heading-2">
                                <button class="accordion-button fw-semibold rounded collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false"
                                    aria-controls="collapse-2">
                                    What payment methods do you accept?
                                </button>
                            </div>
                            <!-- Body -->
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body pt-0">
                                    September how men saw tolerably two behavior arranging. She offices for highest and
                                    replied one venture pasture. Applauded no discovery in newspaper allowance am
                                    northward. Frequently partiality possession resolution at or appearance unaffected
                                    me. Engaged its was the evident pleased husband. Ye goodness felicity do disposal
                                    dwelling no. First am plate jokes to began to cause a scale.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-4">
                            <div class="accordion-header font-base" id="heading-3">
                                <button class="accordion-button fw-semibold collapsed rounded" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false"
                                    aria-controls="collapse-3">
                                    How can I contact your customer support team?
                                </button>
                            </div>
                            <!-- Body -->
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body pt-0">
                                    Agencies provide a wide range of services depending on their specialization. Some
                                    common services include advertising campaigns, digital marketing, branding, creative
                                    design, media planning and buying, public relations, talent management, event
                                    planning, and market research.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-4">
                            <div class="accordion-header font-base" id="heading-4">
                                <button class="accordion-button fw-semibold collapsed rounded" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false"
                                    aria-controls="collapse-4">
                                    Do you offer custom solutions for businesses?
                                </button>
                            </div>
                            <!-- Body -->
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body pt-0">
                                    When selecting an agency, consider your specific requirements, budget, and the
                                    agency's expertise and track record in your industry. Research their portfolio,
                                    client testimonials, and case studies to gauge their capabilities. It's also
                                    important to meet with the agency to assess their communication style and ensure
                                    they align with your goals.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion END -->

                    <!-- CTA text -->
                    <p class="heading-color text-center">Confused? Our team is ready to assist you! Start a chat for
                        quick support. <a href="#" class="hover-underline-animation fw-semibold">Talk to Us</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
            Faq START -->

    <!-- =======================
            CTA START -->
    <section class="bg-secondary overflow-hidden pt-0 pb-5 mb-n8">
        <div class="container z-index-9 position-relative">
            <div class="row g-5">
                <!-- CTA One -->
                <div class="col-xl-6">
                    <div class="card bg-primary h-100">

                        <!-- Rocket image -->
                        <div class="position-absolute bottom-0 end-0 me-n6 mb-n5 d-none d-sm-block">
                            <img src="/images/elements/rocket-02.png" alt="rocket image">
                        </div>

                        <!-- Content -->
                        <div class="row align-items-center h-100 p-3 p-sm-4">
                            <!-- Title and content -->
                            <div class="col-sm-8 d-flex h-100">
                                <div class="card-body d-flex flex-column text-white">
                                    <h4 class="mb-5 text-white">Stay connected with us</h4>

                                    <div class="mt-auto">
                                        <form class="input-group mb-2">
                                            <input class="form-control form-control-sm rounded border me-3"
                                                type="email" placeholder="Enter your email">
                                            <button type="button" class="btn btn-sm btn-dark px-3 rounded-2 mb-0"><i
                                                    class="bi bi-send-fill"></i></button>
                                        </form>
                                        <p class="small mb-0">✌️ No Spam — We Promise!</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Two -->
                <div class="col-xl-6">
                    <div class="card bg-primary-grad h-100 overflow-hidden">
                        <!-- Image -->
                        <div class="position-absolute end-0 top-0 me-n8 d-none d-sm-block">
                            <img src="/images/elements/person-laptop.png" alt="">
                        </div>

                        <div class="row align-items-center p-3 p-sm-4">
                            <!-- Title and content -->
                            <div class="col-sm-8">
                                <div class="card-body text-white">
                                    <p>Apply to work with us</p>
                                    <h4 class="mb-5 text-white">Explore Career Opportunities</h4>
                                    <a class="btn btn-sm btn-dark icon-link icon-link-hover"
                                        href="{{ route('second', ['about', 'career']) }}">View
                                        open positions<i class="bi bi-arrow-right"></i> </a>
                                    <p class="small mb-0">3 jobs are available</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
            CTA END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
            Footer START -->
<footer class="bg-dark pt-8 pt-md-9 position-relative" data-bs-theme="dark">

    <div class="container">
        <div class="row g-4 justify-content-between">
            <!-- Widget 1 START -->
            <div class="col-lg-4">
                <!-- logo -->
                <a href="{{ route('any', 'index') }}">
                    <img class="h-40px" src="/images/logo-light.svg" alt="logo">
                </a>

                <p class="my-3 my-lg-4">A Bootstrap theme that's both stylish and functional, perfect for any type of
                    technology or corporate website.</p>
                <!-- Social icon -->
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-secondary" href="#"><i
                                class="bi bi-facebook lh-base"></i></a> </li>
                    <li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-secondary" href="#"><i
                                class="bi bi-instagram lh-base"></i></a> </li>
                    <li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-secondary" href="#"><i
                                class="bi bi-twitter-x lh-base"></i></a> </li>
                    <li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-secondary" href="#"><i
                                class="bi bi-linkedin lh-base"></i></a> </li>
                </ul>
            </div>
            <!-- Widget 1 END -->

            <!-- Widget 2 START -->
            <div class="col-lg-6 col-xxl-4">
                <div class="row g-4">
                    <!-- Link block -->
                    <div class="col-6">
                        <h6 class="mb-3 mb-sm-4">Company</h6>
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

                    <!-- Link block -->
                    <div class="col-6">
                        <h6 class="mb-3 mb-sm-4">Resources</h6>
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
                </div>
            </div>
            <!-- Widget 2 END -->
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
                <li class="nav-item"><a class="nav-link small py-0 pe-0" href="#">Terms & conditions</a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- =======================
            Footer END -->

<!-- Schedule call offcanvas content START -->
<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="scheduleCall"
    aria-labelledby="scheduleCallLabel">
    <div class="offcanvas-header">
        <h6 class="offcanvas-title" id="scheduleCallLabel">Schedule a call</h6>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <!-- Form START -->
        <form class="row g-3">
            <div class="col-12">
                <label class="form-label">Your name *</label>
                <input type="text" class="form-control form-control-sm" placeholder="Full name">
            </div>

            <div class="col-12">
                <label class="form-label">Email address *</label>
                <input type="email" class="form-control form-control-sm" id="floatingInput"
                    placeholder="name@example.com">
            </div>

            <div class="col-6">
                <label class="form-label">Schedule date *</label>
                <input type="date" class="form-control form-control-sm">
            </div>

            <div class="col-6">
                <label class="form-label">Schedule date *</label>
                <input type="time" class="form-control form-control-sm">
            </div>

            <div class="col-12">
                <label class="form-label">Phone number *</label>
                <input type="text" class="form-control form-control-sm" placeholder="(xxx) xx xxxx">
            </div>

            <div class="col-12">
                <label class="form-label">Subject *</label>
                <input type="text" class="form-control form-control-sm" placeholder="Subject name">
            </div>

            <div class="col-12">
                <label class="form-label">Message *</label>
                <textarea class="form-control" placeholder="Write your message here...." id="floatingTextarea2"
                    style="height: 150px"></textarea>
            </div>
            <!-- Button -->
            <button class="btn btn-primary mb-0">Send a message</button>
        </form>
        <!-- Form END -->
    </div>
</div>
<!-- Schedule call offcanvas content END -->

<!-- Cookie message -->
<div class="alert alert-secondary alert-dismissible fade show position-fixed bottom-0 start-50 translate-middle-x z-index-99 rounded-3 d-none d-md-flex justify-content-between align-items-center shadow px-3 py-2"
    role="alert">
    <p class="heading-color fw-semibold mb-md-0">🍪 The website uses cookies to improve your web experience.</p>
    <a href="#" class="bg-success text-success bg-opacity-10 rounded-pill py-1 px-3 mb-0 ms-md-2"
        data-bs-dismiss="alert" aria-label="Close">Accept
    </a>
</div>

<!-- Back to top -->
<div class="back-top"></div>
@endsection