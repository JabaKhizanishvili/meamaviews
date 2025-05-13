@extends('layouts.landing', ['headerClass' => 'header-absolute', 'buttons' => false])

@section('css')
@vite(['node_modules/swiper/swiper-bundle.min.css'])
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

    <!-- Authentication button -->
    <li class="nav-item bg-secondary rounded d-none d-sm-block gap-1 ms-2 p-1">
        <a href="{{ route('third', ['pages', 'auth', 'sign-up']) }}" class="btn btn-sm btn-secondary mb-0">Login</a>
        <a href="{{ route('third', ['pages', 'auth', 'sign-up']) }}" class="btn btn-sm btn-primary mb-0">Sign up</a>
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
    <section class="position-relative overflow-hidden pt-lg-8 pb-md-7">
        <!-- Grad blur -->
        <div class="position-absolute end-0 top-0">
            <img src="/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-1 blur-8 h-300px rotate-335"
                alt="Grad shape">
        </div>

        <!-- Title and content -->
        <div class="container position-relative pt-4 pt-md-5">
            <!-- Main title -->
            <div class="inner-container text-center">
                <h1 class="mb-4">Elevate Your Performance with Integrations</h1>
                <p>Effortlessly connect to top platforms for CRM, marketing, payments, and more. Enhance workflows,
                    automate tasks, and drive growth with ease.</p>
            </div>

            <!-- Image -->
            <div class="position-relative h-200px h-sm-300px h-lg-400px"
                style="background-image:url(/images/elements/integration.png); background-position: center; background-size: cover;">
                <!-- Main logo -->
                <div class="position-absolute top-50 start-50 translate-middle">
                    <div class="text-center shadow-primary-lg bg-body rounded-circle flex-shrink-0 ripple-anim"
                        style="height: 6rem; width: 6rem; line-height: 6rem;">
                        <img src="/images/logo-icon.svg" class="h-50px" alt="integration icon">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Hero END -->

    <!-- =======================
    Integrations boxes START -->
    <section class="pt-0">
        <div class="container">
            <!-- Filter tab -->
            <div class="d-md-flex justify-content-center align-items-center mb-4 mb-lg-6">
                <p class="mb-4 mb-md-0 me-4">Filter by:</p>
                <ul class="nav nav-underline gap-md-4 mb-0">
                    <li class="nav-item">
                        <a class="nav-link py-0 active" aria-current="page" href="#">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-0" href="#">Productivity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-0" href="#">CRM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-0" href="#">Payment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-0" href="#">e-commerce</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-0" href="#">Streaming</a>
                    </li>
                </ul>
            </div>

            <!-- Integration items -->
            <div class="row g-4 g-xl-5">
                <!-- Item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover-transition bg-secondary bg-opacity-50 h-100 p-4">
                        <div class="card-body p-0">
                            <!-- Logo -->
                            <div class="d-flex gap-3 align-items-center mb-3">
                                <!-- Icon -->
                                <div class="icon-lg text-center shadow-primary bg-body rounded-3 flex-shrink-0"
                                    style="line-height: 3.2rem;">
                                    <img src="/images/client/icons/05.svg" class="h-30px" alt="">
                                </div>
                                <!-- Info -->
                                <div>
                                    <h6 class="mb-0">Graphlo</h6>
                                    <span>Productivity</span>
                                </div>
                            </div>
                            <p>Integrate with Graphlo to streamline your customer relationship management. Sync
                                contacts, automate workflows, and gain insights with powerful analytics.</p>
                        </div>
                        <!-- Button -->
                        <div class="card-footer bg-transparent p-0 mt-4">
                            <a href="{{ route('third', ['pages', 'saas', 'integration-single']) }}"
                                class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Explore
                                integration<i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover-transition bg-secondary bg-opacity-50 h-100 p-4">
                        <div class="card-body p-0">
                            <!-- Logo -->
                            <div class="d-flex gap-3 align-items-center mb-3">
                                <!-- Icon -->
                                <div class="icon-lg text-center shadow-primary bg-body rounded-3 flex-shrink-0"
                                    style="line-height: 3.2rem;">
                                    <img src="/images/client/icons/11.svg" class="h-30px" alt="">
                                </div>
                                <!-- Info -->
                                <div>
                                    <h6 class="mb-0">Vectra</h6>
                                    <span>CRM</span>
                                </div>
                            </div>
                            <p>Seamless email marketing campaigns. Automate email sequences, manage subscriber lists,
                                and track campaign performance.</p>
                        </div>
                        <!-- Button -->
                        <div class="card-footer bg-transparent p-0 mt-4">
                            <a href="{{ route('third', ['pages', 'saas', 'integration-single']) }}"
                                class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Explore
                                integration<i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover-transition bg-secondary bg-opacity-50 h-100 p-4">
                        <div class="card-body p-0">
                            <!-- Logo -->
                            <div class="d-flex gap-3 align-items-center mb-3">
                                <!-- Icon -->
                                <div class="icon-lg text-center shadow-primary bg-body rounded-3 flex-shrink-0"
                                    style="line-height: 3.2rem;">
                                    <img src="/images/client/icons/10.svg" class="h-30px" alt="">
                                </div>
                                <!-- Info -->
                                <div>
                                    <h6 class="mb-0">Signum</h6>
                                    <span>Payment</span>
                                </div>
                            </div>
                            <p>Integrate Signum for secure and efficient payment processing. Accept payments, manage
                                subscriptions, and track transactions effortlessly.</p>
                        </div>
                        <!-- Button -->
                        <div class="card-footer bg-transparent p-0 mt-4">
                            <a href="{{ route('third', ['pages', 'saas', 'integration-single']) }}"
                                class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Explore
                                integration<i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover-transition bg-secondary bg-opacity-50 h-100 p-4">
                        <div class="card-body p-0">
                            <!-- Logo -->
                            <div class="d-flex gap-3 align-items-center mb-3">
                                <!-- Icon -->
                                <div class="icon-lg text-center shadow-primary bg-body rounded-3 flex-shrink-0"
                                    style="line-height: 3.2rem;">
                                    <img src="/images/client/icons/04.svg" class="h-30px" alt="">
                                </div>
                                <!-- Info -->
                                <div>
                                    <h6 class="mb-0">Grapherz</h6>
                                    <span>Streaming</span>
                                </div>
                            </div>
                            <p>Streamlined accounting and financial management. Track expenses, generate invoices, and
                                manage payroll with ease.</p>
                        </div>
                        <!-- Button -->
                        <div class="card-footer bg-transparent p-0 mt-4">
                            <a href="{{ route('third', ['pages', 'saas', 'integration-single']) }}"
                                class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Explore
                                integration<i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover-transition bg-secondary bg-opacity-50 h-100 p-4">
                        <div class="card-body p-0">
                            <!-- Logo -->
                            <div class="d-flex gap-3 align-items-center mb-3">
                                <!-- Icon -->
                                <div class="icon-lg text-center shadow-primary bg-body rounded-3 flex-shrink-0"
                                    style="line-height: 3.2rem;">
                                    <img src="/images/client/icons/07.svg" class="h-30px" alt="">
                                </div>
                                <!-- Info -->
                                <div>
                                    <h6 class="mb-0">Imprintify</h6>
                                    <span>Productivity</span>
                                </div>
                            </div>
                            <p>Imprintify to enhance team communication and collaboration. Receive notifications, share
                                updates, and manage tasks directly within imprintify.</p>
                        </div>
                        <!-- Button -->
                        <div class="card-footer bg-transparent p-0 mt-4">
                            <a href="{{ route('third', ['pages', 'saas', 'integration-single']) }}"
                                class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Explore
                                integration<i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover-transition bg-secondary bg-opacity-50 h-100 p-4">
                        <div class="card-body p-0">
                            <!-- Logo -->
                            <div class="d-flex gap-3 align-items-center mb-3">
                                <!-- Icon -->
                                <div class="icon-lg text-center shadow-primary bg-body rounded-3 flex-shrink-0"
                                    style="line-height: 3.2rem;">
                                    <img src="/images/client/icons/08.svg" class="h-30px" alt="">
                                </div>
                                <!-- Info -->
                                <div>
                                    <h6 class="mb-0">Logique</h6>
                                    <span>e-commerce</span>
                                </div>
                            </div>
                            <p>Connect with Logique to enhance your e-commerce operations. Sync inventory, manage
                                orders, and track sales from one platform.</p>
                        </div>
                        <!-- Button -->
                        <div class="card-footer bg-transparent p-0 mt-4">
                            <a href="{{ route('third', ['pages', 'saas', 'integration-single']) }}"
                                class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Explore
                                integration<i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover-transition bg-secondary bg-opacity-50 h-100 p-4">
                        <div class="card-body p-0">
                            <!-- Logo -->
                            <div class="d-flex gap-3 align-items-center mb-3">
                                <!-- Icon -->
                                <div class="icon-lg text-center shadow-primary bg-body rounded-3 flex-shrink-0"
                                    style="line-height: 3.2rem;">
                                    <img src="/images/client/icons/09.svg" class="h-30px" alt="">
                                </div>
                                <!-- Info -->
                                <div>
                                    <h6 class="mb-0">Optimal</h6>
                                    <span>CRM</span>
                                </div>
                            </div>
                            <p>Integrate with Optimal to streamline your customer relationship management. Sync
                                contacts, automate workflows, and gain insights with powerful analytics.</p>
                        </div>
                        <!-- Button -->
                        <div class="card-footer bg-transparent p-0 mt-4">
                            <a href="{{ route('third', ['pages', 'saas', 'integration-single']) }}"
                                class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Explore
                                integration<i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover-transition bg-secondary bg-opacity-50 h-100 p-4">
                        <div class="card-body p-0">
                            <!-- Logo -->
                            <div class="d-flex gap-3 align-items-center mb-3">
                                <!-- Icon -->
                                <div class="icon-lg text-center shadow-primary bg-body rounded-3 flex-shrink-0"
                                    style="line-height: 3.2rem;">
                                    <img src="/images/client/icons/01.svg" class="h-30px" alt="">
                                </div>
                                <!-- Info -->
                                <div>
                                    <h6 class="mb-0">Artistry</h6>
                                    <span>Payment</span>
                                </div>
                            </div>
                            <p>Manage support tickets, track customer interactions, and improve response times.</p>
                        </div>
                        <!-- Button -->
                        <div class="card-footer bg-transparent p-0 mt-4">
                            <a href="{{ route('third', ['pages', 'saas', 'integration-single']) }}"
                                class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Explore
                                integration<i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover-transition bg-secondary bg-opacity-50 h-100 p-4">
                        <div class="card-body p-0">
                            <!-- Logo -->
                            <div class="d-flex gap-3 align-items-center mb-3">
                                <!-- Icon -->
                                <div class="icon-lg text-center shadow-primary bg-body rounded-3 flex-shrink-0"
                                    style="line-height: 3.2rem;">
                                    <img src="/images/client/icons/03.svg" class="h-30px" alt="">
                                </div>
                                <!-- Info -->
                                <div>
                                    <h6 class="mb-0">Wayline</h6>
                                    <span>Streaming</span>
                                </div>
                            </div>
                            <p>Sync with Wayline for enhanced project management. Organize tasks, collaborate with your
                                team, and track project progress effortlessly.</p>
                        </div>
                        <!-- Button -->
                        <div class="card-footer bg-transparent p-0 mt-4">
                            <a href="{{ route('third', ['pages', 'saas', 'integration-single']) }}"
                                class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Explore
                                integration<i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Integrations boxes END -->

    <!-- =======================
    CTA START -->
    <section class="pt-0">
        <div class="container">
            <div class="bg-secondary-grad position-relative rounded-3 overflow-hidden p-4 p-sm-6">
                <!-- BG pattern -->
                <div class="position-absolute end-0 top-0 rotate-343 mt-n5 d-none d-md-block">
                    <img src="/images/elements/grad-shape/05.png" class="h-400px opacity-8 blur-2" alt="bg pattern">
                </div>

                <div class="row g-4 align-items-center position-relative">
                    <!-- Title and list -->
                    <div class="col-xl-6">
                        <h2>Elevate your business to the next level</h2>
                        <p class="mb-0">Explore the possibilities and discover how integrating with [Your SaaS
                            Product] can take your business to the next level.</p>
                    </div>

                    <!-- Button -->
                    <div class="col-xl-6 text-xl-end">
                        <a href="{{ route('second', [ 'pages' , 'contact-us-v1']) }}" class="btn btn-dark mb-0">Optimize Your Workflow</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    CTA END -->

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
                    <li class="nav-item"><a class="nav-link pt-0"
                            href="{{ route('second', ['about', 'v1']) }}">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('second', [ 'pages' , 'contact-us-v1']) }}">Contact us</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('second', ['about', 'career']) }}">Career <span
                                class="badge bg-primary ms-2">2 jobs</span></a></li>
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
                <li class="nav-item"><a class="nav-link small py-0 pe-0" href="#">Terms & conditions</a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- =======================
    Footer END -->

<!-- Back to top -->
<div class="back-top"></div>
@endsection