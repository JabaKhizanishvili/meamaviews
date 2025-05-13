@extends('layouts.landing', ['buttons' => true])

@section('content')

<main>

    <!-- =======================
            Hero START -->
    <section class="position-relative py-xl-9"
        style="background:url(/images/bg/contact.jpg) no-repeat; background-size:cover; background-position:center;">
        <!-- Bg overlay -->
        <div class="bg-overlay bg-dark opacity-2"></div>

        <div class="container position-relative z-index-2">
            <!-- Title -->
            <h1 class="display-6 text-white">Contact us</h1>
        </div>
    </section>
    <!-- =======================
            Hero END -->

    <!-- =======================
            Map and office detail START -->
    <section class="position-relative overflow-hidden pb-0">
        <div class="container">
            <div class="row g-lg-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h5>How can we help you?</h5>
                    <p class="lead mb-4">Get in touch with us to see how we can help you with your project</p>

                    <!-- Form START -->
                    <form class="row form-border-bottom g-4">
                        <!-- Name -->
                        <div class="col-md-6">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="What's Your good name?">
                                <span class="focus-border"></span>
                                <span class="position-absolute top-50 end-0 translate-middle-y"><i
                                        class="bi bi-emoji-smile"></i></span>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <div class="position-relative">
                                <input type="email" class="form-control" placeholder="Enter your email address"
                                    required="">
                                <span class="focus-border"></span>
                                <span class="position-absolute top-50 end-0 translate-middle-y"><i
                                        class="bi bi-envelope"></i></span>
                            </div>
                        </div>

                        <!-- Subject -->
                        <div class="col-12">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="How can we help you?">
                                <span class="focus-border"></span>
                                <span class="position-absolute top-50 end-0 translate-middle-y"><i
                                        class="bi bi-journals"></i></span>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="col-12">
                            <div class="position-relative">
                                <textarea class="form-control" id="floatingTextarea2" style="height: 100px" placeholder="Describe about your project"></textarea>
                                <span class="focus-border"></span>
                                <span class="position-absolute top-0 end-0"><i
                                        class="bi bi-chat-square-dots"></i></span>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="col-12 mt-4">
                            <button class="btn btn-primary-grad mb-0">Send a message</button>
                        </div>
                    </form>
                    <!-- Form END -->
                </div>

                <!-- Get in touch -->
                <div class="col-lg-6 col-xxl-5 ms-auto">
                    <div class="card card-body bg-secondary bg-opacity-50 rounded-4 p-4 p-sm-5 mb-4">
                        <!-- Title -->
                        <h5 class="mb-4">Get in touch</h5>

                        <!-- Call -->
                        <div class="d-sm-flex gap-3 mb-4">
                            <!-- Icon -->
                            <div class="icon-lg bg-body shadow-primary heading-color rounded-circle flex-shrink-0"><i
                                    class="bi bi-telephone"></i></div>
                            <!-- Content -->
                            <div class="mt-3 mt-sm-0">
                                <p class="mb-1">Feel free to call us.</p>
                                <ul class="list-inline d-flex flex-wrap gap-sm-3 mb-0">
                                    <li class="list-inline-item"> <a href="#"
                                            class="fw-semibold heading-color text-primary-hover">+(251) 854-6308</a>
                                    </li>
                                    <li class="list-inline-item"> <a href="#"
                                            class="fw-semibold heading-color text-primary-hover">+(469) 537-2410</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="d-sm-flex gap-3 mb-4">
                            <!-- Icon -->
                            <div class="icon-lg bg-body shadow-primary heading-color rounded-circle flex-shrink-0"><i
                                    class="bi bi-envelope"></i></div>
                            <!-- Content -->
                            <div class="mt-3 mt-sm-0">
                                <p class="mb-1">Join our growing team.</p>
                                <a href="#"
                                    class="fw-semibold heading-color text-primary-hover mb-0">example@gmail.com</a>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="d-sm-flex gap-3">
                            <!-- Icon -->
                            <div class="icon-lg bg-body shadow-primary heading-color rounded-circle flex-shrink-0"><i
                                    class="bi bi-pin-map-fill"></i></div>
                            <!-- Content -->
                            <div class="mt-3 mt-sm-0">
                                <p class="mb-1">Are you ready for coffee?</p>
                                <p class="fw-semibold heading-color mb-0">55/123 Norman street, Banking road, Sydney
                                    NSW 5000</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social links -->
                    <ul class="list-inline d-sm-flex align-items-center justify-content-center mb-0">
                        <li class="list-inline-item heading-color fw-semibold me-sm-3">Connect with:</li>
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
            </div> <!-- Row END -->

        </div>
    </section>
    <!-- =======================
            Map and office detail END -->

    <section class="pb-0">
        <iframe class="w-100 h-200px h-lg-400px grayscale d-block"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9663095343008!2d-74.00425878428698!3d40.74076684379132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bf5c1654f3%3A0xc80f9cfce5383d5d!2sGoogle!5e0!3m2!1sen!2sin!4v1586000412513!5m2!1sen!2sin"
            style="margin-bottom: -5px;" aria-hidden="false" tabindex="0"></iframe>
    </section>

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer')

<!-- Back to top -->
<div class="back-top"></div>
@endsection