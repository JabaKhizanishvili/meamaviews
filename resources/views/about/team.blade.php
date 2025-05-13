@extends('layouts.landing', ['headerClass' => 'header-absolute', 'buttons' => true])

@section('css')
@vite(['node_modules/glightbox/dist/css/glightbox.css'])
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
                Hero START -->
    <section class="position-relative pt-8 pt-xl-9 overflow-hidden">
        <!-- Blur decoration -->
        <div class="position-absolute end-0 top-0">
            <img src="/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-1 blur-8 h-300px rotate-335"
                alt="Grad shape">
        </div>
        <!-- Blur decoration -->
        <div class="position-absolute start-0 top-0">
            <img src="/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-2 blur-9 h-300px rotate-335"
                alt="Grad shape">
        </div>
        <!-- Box pattern -->
        <div class="position-absolute top-0 start-0">
            <img src="/images/elements/bg-pattern.svg" style="opacity: 0.05;" alt="bg pattern">
        </div>

        <div class="container position-relative">
            <!-- Title and content -->
            <div class="row">
                <div class="col-md-7 mx-auto text-center">
                    <h1 class="mb-4">Meet our experts</h1>
                    <p class="mb-0">Our dedicated team is passionate about delivering exceptional results that exceed
                        your expectations.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                Hero END -->

    <!-- =======================
                Team START -->
    <section class="pt-0">
        <div class="container">
            <div class="row g-4 g-sm-5">

                <!-- Team item -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">
                        <div class="card-img-scale-wrapper">
                            <!-- Social links -->
                            <div class="hover-content h-100">
                                <ul class="list-group list-group-borderless position-absolute bottom-0 end-0 me-3 mb-3">
                                    <li class="list-group-item pb-0"> <a
                                            class="btn btn-sm btn-round bg-instagram-gradient" href="#"><i
                                                class="bi bi-instagram"></i></a> </li>
                                    <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-linkedin"
                                            href="#"><i class="bi bi-linkedin"></i></a> </li>
                                </ul>
                            </div>
                            <!-- Card Image -->
                            <img src="/images/team/3by4/03.jpg" class="card-img-top img-scale" alt="card image">
                        </div>

                        <!-- Card body -->
                        <div class="card-body text-center px-0">
                            <h6 class="mb-0">Emma Watson</h6>
                            <small>Founder</small>
                        </div>
                    </div>
                </div>

                <!-- Team item -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">
                        <div class="card-img-scale-wrapper">
                            <!-- Social links -->
                            <div class="hover-content h-100">
                                <ul
                                    class="list-group list-group-borderless position-absolute bottom-0 end-0 me-3 mb-3">
                                    <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-facebook"
                                            href="#"><i class="bi bi-facebook"></i></a> </li>
                                    <li class="list-group-item pb-0"> <a
                                            class="btn btn-sm btn-round bg-instagram-gradient" href="#"><i
                                                class="bi bi-instagram"></i></a> </li>
                                    <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-linkedin"
                                            href="#"><i class="bi bi-linkedin"></i></a> </li>
                                </ul>
                            </div>
                            <!-- Card Image -->
                            <img src="/images/team/3by4/02.jpg" class="card-img-top img-scale" alt="card image">
                        </div>

                        <!-- Card body -->
                        <div class="card-body text-center px-0">
                            <h6 class="mb-0">Allen Smith</h6>
                            <small>Co-Founder</small>
                        </div>
                    </div>
                </div>

                <!-- Team item -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">
                        <div class="card-img-scale-wrapper">
                            <!-- Social links -->
                            <div class="hover-content h-100">
                                <ul
                                    class="list-group list-group-borderless position-absolute bottom-0 end-0 me-3 mb-3">
                                    <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-facebook"
                                            href="#"><i class="bi bi-facebook"></i></a> </li>
                                    <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-linkedin"
                                            href="#"><i class="bi bi-linkedin"></i></a> </li>
                                </ul>
                            </div>
                            <!-- Card Image -->
                            <img src="/images/team/3by4/04.jpg" class="card-img-top img-scale" alt="card image">
                        </div>

                        <!-- Card body -->
                        <div class="card-body text-center px-0">
                            <h6 class="mb-0">Louis Ferguson</h6>
                            <small>Creative Director</small>
                        </div>
                    </div>
                </div>

                <!-- Team item -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">
                        <div class="card-img-scale-wrapper">
                            <!-- Social links -->
                            <div class="hover-content h-100">
                                <ul
                                    class="list-group list-group-borderless position-absolute bottom-0 end-0 me-3 mb-3">
                                    <li class="list-group-item pb-0"> <a
                                            class="btn btn-sm btn-round bg-instagram-gradient" href="#"><i
                                                class="bi bi-instagram"></i></a> </li>
                                    <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-linkedin"
                                            href="#"><i class="bi bi-linkedin"></i></a> </li>
                                    <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-twitter-x"
                                            href="#"><i class="bi bi-twitter-x"></i></a> </li>
                                </ul>
                            </div>
                            <!-- Card Image -->
                            <img src="/images/team/3by4/06.jpg" class="card-img-top img-scale" alt="card image">
                        </div>

                        <!-- Card body -->
                        <div class="card-body text-center px-0">
                            <h6 class="mb-0">Emily Johnson</h6>
                            <small>Marketing Strategist</small>
                        </div>
                    </div>
                </div>

                <!-- Team item -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">
                        <div class="card-img-scale-wrapper">
                            <!-- Social links -->
                            <div class="hover-content h-100">
                                <ul
                                    class="list-group list-group-borderless position-absolute bottom-0 end-0 me-3 mb-3">
                                    <li class="list-group-item pb-0"> <a
                                            class="btn btn-sm btn-round bg-instagram-gradient" href="#"><i
                                                class="bi bi-instagram"></i></a> </li>
                                    <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-twitter-x"
                                            href="#"><i class="bi bi-twitter-x"></i></a> </li>
                                </ul>
                            </div>
                            <!-- Card Image -->
                            <img src="/images/team/3by4/01.jpg" class="card-img-top img-scale" alt="card image">
                        </div>

                        <!-- Card body -->
                        <div class="card-body text-center px-0">
                            <h6 class="mb-0">Michael Brown</h6>
                            <small>Lead Developer</small>
                        </div>
                    </div>
                </div>

                <!-- Team item -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">
                        <div class="card-img-scale-wrapper">
                            <!-- Social links -->
                            <div class="hover-content h-100">
                                <ul
                                    class="list-group list-group-borderless position-absolute bottom-0 end-0 me-3 mb-3">
                                    <li class="list-group-item pb-0"> <a
                                            class="btn btn-sm btn-round bg-instagram-gradient" href="#"><i
                                                class="bi bi-instagram"></i></a> </li>
                                    <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-twitter-x"
                                            href="#"><i class="bi bi-twitter-x"></i></a> </li>
                                    <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-facebook"
                                            href="#"><i class="bi bi-facebook"></i></a> </li>
                                </ul>
                            </div>
                            <!-- Card Image -->
                            <img src="/images/team/3by4/08.jpg" class="card-img-top img-scale" alt="card image">
                        </div>

                        <!-- Card body -->
                        <div class="card-body text-center px-0">
                            <h6 class="mb-0">Sarah Davis</h6>
                            <small>Content Specialist</small>
                        </div>
                    </div>
                </div>

                <!-- Team item -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">
                        <div class="card-img-scale-wrapper">
                            <!-- Social links -->
                            <div class="hover-content h-100">
                                <ul
                                    class="list-group list-group-borderless position-absolute bottom-0 end-0 me-3 mb-3">
                                    <li class="list-group-item pb-0"> <a
                                            class="btn btn-sm btn-round bg-instagram-gradient" href="#"><i
                                                class="bi bi-instagram"></i></a> </li>
                                    <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-facebook"
                                            href="#"><i class="bi bi-facebook"></i></a> </li>
                                </ul>
                            </div>
                            <!-- Card Image -->
                            <img src="/images/team/3by4/05.jpg" class="card-img-top img-scale" alt="card image">
                        </div>

                        <!-- Card body -->
                        <div class="card-body text-center px-0">
                            <h6 class="mb-0">Samuel Bishop</h6>
                            <small>Product designer</small>
                        </div>
                    </div>
                </div>

                <!-- Team item -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">
                        <div class="card-img-scale-wrapper">
                            <!-- Social links -->
                            <div class="hover-content h-100">
                                <ul
                                    class="list-group list-group-borderless position-absolute bottom-0 end-0 me-3 mb-3">
                                    <li class="list-group-item pb-0"> <a
                                            class="btn btn-sm btn-round bg-instagram-gradient" href="#"><i
                                                class="bi bi-instagram"></i></a> </li>
                                    <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-twitter-x"
                                            href="#"><i class="bi bi-twitter-x"></i></a> </li>
                                    <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-facebook"
                                            href="#"><i class="bi bi-facebook"></i></a> </li>
                                </ul>
                            </div>
                            <!-- Card Image -->
                            <img src="/images/team/3by4/07.jpg" class="card-img-top img-scale" alt="card image">
                        </div>

                        <!-- Card body -->
                        <div class="card-body text-center px-0">
                            <h6 class="mb-0">Alex Green</h6>
                            <small>Account Manager</small>
                        </div>
                    </div>
                </div>

            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
                Team END -->

    <!-- =======================
                Video and counter START -->
    <section class="pt-0">
        <div class="container">
            <div class="row g-4 g-sm-5">
                <!-- Title and counter -->
                <div class="col-lg-5">
                    <!-- Title -->
                    <h2 class="mb-3">Our lifetime achievements</h2>
                    <p class="mb-0">Join our team Creative Agency Specializing in: Video Production, Web Design,
                        Branding, Brand Strategy.</p>

                    <!-- Counter -->
                    <div class="row mt-4 mt-lg-6">
                        <!-- Item -->
                        <div class="col-sm-5 mb-3 mb-sm-0">
                            <div class="border-2 border-start border-purple border-opacity-50 ps-3">
                                <div class="d-flex mb-1">
                                    <h3 class="purecounter mb-0" data-purecounter-start="0" data-purecounter-end="80"
                                        data-purecounter-delay="300">0</h3>
                                    <span class="h3 text-primary mb-0">+</span>
                                </div>
                                <p class="mb-0">Total employees</p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col-sm-5">
                            <div class="border-2 border-start border-purple border-opacity-50 ps-3">
                                <div class="d-flex mb-1">
                                    <h3 class="purecounter mb-0" data-purecounter-start="0" data-purecounter-end="12"
                                        data-purecounter-delay="300">0</h3>
                                    <span class="h3 text-primary mb-0">+</span>
                                </div>
                                <p class="mb-0">Total awards</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Award list -->
                <div class="col-lg-7 col-xl-6 ms-auto">
                    <!-- Image -->
                    <div class="card card-body overflow-hidden p-0">
                        <img src="/images/team/video-bg.jpg" class="card-img" alt="about-img">
                        <div class="bg-overlay bg-dark opacity-2"></div>
                        <!-- Card img overlay -->
                        <div class="position-absolute end-0 bottom-0 m-3 z-index-2">
                            <a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-sm btn-white"
                                data-glightbox data-gallery="course-video"><i
                                    class="bi bi-youtube text-danger fa-fw fa-xl me-1"></i> Watch our story</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                Video and counter START -->

    <!-- =======================
                Cta START -->
    <section class="bg-secondary-grad position-relative rounded-3 overflow-hidden py-6 py-sm-7">
        <!-- BG pattern -->
        <div class="position-absolute end-0 top-0 rotate-13 mt-n5 me-n6 d-none d-sm-block">
            <img src="/images/elements/geo-grad-pattern.svg" class="h-600px opacity-3" alt="bg pattern">
        </div>

        <!-- BG pattern -->
        <div class="position-absolute start-0 top-0 rotate-343 mt-n3 ms-n5 d-none d-xl-block">
            <img src="/images/elements/grad-shape/10.png" class="h-500px" alt="bg pattern">
        </div>

        <div class="container">
            <div class="row g-4 align-items-center position-relative">
                <!-- Title and list -->
                <div class="col-xl-6">
                    <h2>Partner with our <span class="text-primary-grad">creative</span> team</h2>
                    <p class="mb-0">Discover the difference a dedicated, creative, and strategic team can make for
                        your business. </p>
                </div>

                <!-- Button -->
                <div class="col-xl-6 text-xl-end">
                    <a href="#" class="btn btn-dark mb-0">Schedule a consultation</a>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                Cta END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer')

<!-- Back to top -->
<div class="back-top"></div>
@endsection