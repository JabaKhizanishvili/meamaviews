@if ($div ?? false)
<div class="header-absolute">
    @endif

    <!-- Header START -->
    <header class="header-sticky {{ isset($headerClass) ? $headerClass : '' }}" @yield('header-attribute')>
        @yield('topAlert')
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand me-0" href="{{ route('root') }}">
                    <img class="light-mode-item navbar-brand-item" src="/images/meama.svg" alt="logo">
                    <img class="dark-mode-item navbar-brand-item" src="/images/logo-light.svg" alt="logo">
                </a>
                <!-- Logo END -->

                <!-- Main navbar START -->
                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-scroll dropdown-hover mx-auto" id="navbar">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('root') }}">მთავარი</a> </li>

                        <!-- Nav item -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="#" data-bs-auto-close="outside"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Demos</a>
                            <div class="dropdown-menu dropdown-menu-size-lg overflow-hidden p-0">
                                <div class="row px-3 py-4">
                                    <!-- Image and button -->
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled">
                                            <li> <a class="dropdown-item " href="{{ route('any', 'index') }}">Classic Default</a>
                                            </li>
                                            <li> <a class="dropdown-item" href="{{ route('second', [ 'demos' , 'software-company']) }}">Software
                                                    Company</a> </li>
                                            <li> <a class="dropdown-item" href="{{ route('second', [ 'demos' , 'finance-consulting']) }}">Finance
                                                    Consulting</a> </li>
                                            <li> <a class="dropdown-item" href="{{ route('second', [ 'demos' , 'ai-agency']) }}">AI Agency</a>
                                            </li>
                                            <li> <a class="dropdown-item" href="{{ route('second', [ 'demos' , 'product-landing']) }}">Product
                                                    Landing</a> </li>
                                        </ul>
                                    </div>

                                    <!-- Image and button -->
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled">
                                            <li> <a class="dropdown-item" href="{{ route('second', [ 'demos' , 'saas']) }}">SaaS</a> </li>
                                            <li> <a class="dropdown-item" href="{{ route('second', [ 'demos' , 'ai-chatbot']) }}">SaaS AI
                                                    Chatbot</a> </li>
                                            <li> <a class="dropdown-item"
                                                    href="{{ route('second', [ 'demos' , 'application-showcase']) }}">Application Showcase</a>
                                            </li>
                                            <li> <a class="dropdown-item" href="{{ route('second', [ 'demos' , 'personal-portfolio']) }}">Personal
                                                    Portfolio</a> </li>
                                            <li> <a class="dropdown-item" href="{{ route('second', [ 'demos' , 'blog']) }}">Blog home</a> </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Cta -->
                                <div class="h-200px position-relative"
                                    style="background:url(/images/elements/nav-cta.jpg) no-repeat; background-size:cover; background-position:center;">
                                    <!-- Bg overlay -->
                                    <div class="bg-overlay bg-dark bg-opacity-10"></div>
                                </div>
                            </div>
                        </li>

                        <!-- Nav item -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <!-- Dropdown submenu -->
                                <li class="dropdown dropend">
                                    <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                        href="#">About</a>
                                    <ul class="dropdown-menu" data-bs-popper="none">
                                        <li> <a class="dropdown-item" href="{{ route('second', [ 'about' , 'v1']) }}">About v.1</a> </li>
                                        <li> <a class="dropdown-item" href="{{ route('second', [ 'about' , 'v2']) }}">About v.2</a> </li>
                                        <li> <a class="dropdown-item" href="{{ route('second', [ 'about' , 'services-grid']) }}">Services Grid</a></li>
                                        <li> <a class="dropdown-item" href="{{ route('second', [ 'about' , 'services-list']) }}">Services List</a></li>
                                        <li> <a class="dropdown-item" href="{{ route('second', [ 'about' , 'service-single']) }}">Service Single</a></li>
                                        <li> <a class="dropdown-item" href="{{ route('second', [ 'about' , 'team']) }}">Team</a></li>
                                        <li> <a class="dropdown-item" href="{{ route('second', [ 'about' , 'career']) }}">Career <span
                                                    class="badge text-bg-success ms-2">2 Job</span></a></li>
                                        <li> <a class="dropdown-item" href="{{ route('second', [ 'about' , 'career-single']) }}">Career Single</a></li>
                                    </ul>
                                </li>

                                <li> <a class="dropdown-item" href="{{ route('second', [ 'pages' , 'contact-us-v1']) }}">Contact Us v1</a> </li>
                                <li> <a class="dropdown-item" href="{{ route('second', [ 'pages' , 'contact-us-v2']) }}">Contact Us v2</a> </li>
                                <li> <a class="dropdown-item" href="{{ route('second', [ 'pages' , 'pricing-v1']) }}">Pricing v1</a> </li>
                                <li> <a class="dropdown-item" href="{{ route('second', [ 'pages' , 'pricing-v2']) }}">Pricing v2</a> </li>

                                <!-- Dropdown submenu -->
                                <li class="dropdown dropend">
                                    <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                        href="#">Saas pages</a>
                                    <ul class="dropdown-menu" data-bs-popper="none">
                                        <li> <a class="dropdown-item" href="{{ route('third', [ 'pages' , 'saas','feature-single']) }}">Feature Single</a>
                                        </li>
                                        <li> <a class="dropdown-item" href="{{ route('third', [ 'pages' , 'saas','integrations']) }}">Integrations</a> </li>
                                        <li> <a class="dropdown-item" href="{{ route('third', [ 'pages' , 'saas','integration-single']) }}">Integrations
                                                Single</a> </li>
                                    </ul>
                                </li>

                                <!-- Dropdown submenu -->
                                <li class="dropdown dropend">
                                    <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                        href="#">Portfolio</a>
                                    <ul class="dropdown-menu" data-bs-popper="none">
                                        <li> <a class="dropdown-item" href="{{ route('second', [ 'portfolio' ,'grid']) }}">Portfolio Grid</a>
                                        </li>
                                        <li> <a class="dropdown-item" href="{{ route('second', [ 'portfolio' ,'list']) }}">Portfolio List</a>
                                        </li>
                                        <li> <a class="dropdown-item" href="{{ route('second', [ 'portfolio' ,'modern']) }}">Portfolio
                                                Modern</a> </li>
                                        <li> <a class="dropdown-item" href="{{ route('second', [ 'portfolio' ,'case-study-v1']) }}">Portfolio
                                                case study v1</a> </li>
                                        <li> <a class="dropdown-item" href="{{ route('second', [ 'portfolio' ,'case-study-v2']) }}">Portfolio
                                                case study v2</a> </li>
                                    </ul>
                                </li>

                                <!-- Dropdown submenu -->
                                <li class="dropdown dropend">
                                    <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                        href="#">Blog</a>
                                    <ul class="dropdown-menu" data-bs-popper="none">
                                        <li> <a class="dropdown-item" href="{{ route('third', [ 'pages' , 'blog','minimal']) }}">Blog Minimal</a> </li>
                                        <li> <a class="dropdown-item" href="{{ route('third', [ 'pages' , 'blog','single']) }}">Blog Single</a> </li>
                                    </ul>
                                </li>

                                <li> <a class="dropdown-item" href="{{ route('second', [ 'pages' , 'error-404']) }}">Error 404</a> </li>
                                <li> <a class="dropdown-item" href="{{ route('second', [ 'pages' , 'coming-soon']) }}">Coming soon</a> </li>

                                <!-- Dropdown submenu -->
                                <li class="dropdown dropend">
                                    <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                        href="#">Authentication</a>
                                    <ul class="dropdown-menu" data-bs-popper="none">
                                        <li> <a class="dropdown-item" href="{{ route('third', [ 'pages' , 'auth','sign-in']) }}">Sign in</a> </li>
{{--                                        <li> <a class="dropdown-item" href="{{ route('third', [ 'pages' , 'auth','sign-up']) }}">Sign up</a> </li>--}}
                                        <li> <a class="dropdown-item" href="{{ route('register.index') }}">Sign up</a> </li>
                                        <li> <a class="dropdown-item" href="{{ route('third', [ 'pages' , 'auth','forgot-password']) }}">Forgot Password</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                        <!-- Nav item -->
                        <li class="nav-item"> <a class="nav-link" href="{{ route('about') }}">ჩვენს შესახებ</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('contact') }}">კონტაქტი</a> </li>
                    </ul>
                </div>
                <!-- Main navbar END -->

                @if($buttons == true)
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

                    <!-- Sign up button -->
                    @auth()
                        <div class="dropdown">
                            <a class="btn btn-sm btn-primary-grad dropdown-toggle mb-0" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-fill"></i>  {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="{{ route('dashboard') }}">დეშბორდი</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="dropdown-item" type="submit">გასვლა</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <li class="nav-item ms-2 d-none d-sm-block">
                            <a href="{{ route('register.index') }}" class="btn btn-sm btn-primary-grad mb-0">რეგისტრაცია</a>
                        </li>
                    @endauth

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
                @else
                @yield('buttons')
                @endif

            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- Header END -->

    @if ($div ?? false)
</div>
@endif
