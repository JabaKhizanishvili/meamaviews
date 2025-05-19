<footer class="bg-dark position-relative pt-6 pt-lg-8" data-bs-theme="dark">
    <div class="container position-relative">
        <!-- Link widgets -->
        <div class="row g-4">

            <!-- Widget item -->
            <div class="col-md-6 col-xl-4">
                <!-- logo -->
                <a href="index.html">
                    <img class="h-40px" src="/images/logo-light.svg" alt="logo">
                </a>
                <p class="my-3 my-xl-4">A Bootstrap theme that's both stylish and functional, perfect for any type of technology or corporate website.</p>
            </div>

            <div class="col-xl-7 ms-auto">
                <div class="row g-4 justify-content-end">
                    <!-- Widget item -->
                    <div class="col-6 col-md-3">
                        <h6 class="mb-3 mb-xl-4">Company</h6>
                        <!-- Links -->
                        <ul class="nav flex-column gap-1">
                            <li class="nav-item"><a class="nav-link pt-0" href="about-v1.html">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact us</a></li>
                            <li class="nav-item"><a class="nav-link" href="career.html">Career <span class="badge bg-primary ms-2">2 jobs</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="career-single.html">Career detail</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact-us-v2.html">Become a partner</a></li>
                            <li class="nav-item"><a class="nav-link" href="service-v1.html">Services</a></li>
                        </ul>
                    </div>

                    <!-- Widget item -->
                    <div class="col-6 col-md-3">
                        <h6 class="mb-3 mb-xl-4">Resources</h6>
                        <!-- Links -->
                        <ul class="nav flex-column gap-1">
                            <li class="nav-item"><a class="nav-link pt-0" href="portfolio-case-study-v1.html">Case studies</a></li>
                            <li class="nav-item"><a class="nav-link" href="pricing-v1.html">Pricing <span class="badge bg-success ms-2">New</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="blog-minimal.html">Blogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog detail</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Success stories<i class="bi bi-box-arrow-up-right small ms-2"></i></a></li>
                        </ul>
                    </div>

                    <!-- Widget item -->
                    <div class="col-sm-6 col-md-6 text-end">
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
                            @foreach($socials as $val)
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon bg-{{$val->name}}" href="{{$val->url}}" target="_blank"><i class="{{$val->icon_text}}"></i></a>
                            </li>

                            @endforeach

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
            <div class="text-body small mb-3 mb-md-0"> Copyrights ©2024 Folio. Build by <a href="#" target="_blank" class="text-body text-primary-hover hover-underline-animation">J.K</a> </div>

            <!-- Policy link -->
            <ul class="nav d-flex justify-content-center gap-1 mb-0">
                <li class="nav-item"><a class="nav-link small py-0" href="#">კონფიდენციალურობის პოლიტიკა</a></li>
                <li class="nav-item"><a class="nav-link small py-0 pe-0" href="#">წესები &amp; პირობები</a></li>
            </ul>
        </div>
    </div>
</footer>
