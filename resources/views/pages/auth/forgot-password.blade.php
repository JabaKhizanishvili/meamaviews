@extends('layouts.base')

@section('content')
<main>
    <section class="bg-secondary position-relative vh-100">
        <div class="container h-100 d-flex flex-column justify-content-center">
            <div class="row justify-content-center align-items-center">
                <!-- Main content START -->
                <div class="col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-5 position-relative">
                    <!-- UFO decoration -->
                    <div class="vert-move position-absolute top-0 start-0 ms-n5 mt-n5 z-index-9 d-none d-sm-block">
                        <img src="/images/elements/ufo.png" class="h-100px rotate-343" alt="ufo image">
                    </div>
                    <!-- Blur ring decoration -->
                    <div class="position-absolute bottom-0 end-0 mb-n8 me-n5 d-none d-sm-block">
                        <img src="/images/elements/grad-shape/blur-decoration.svg" class="blur-8 opacity-2"
                            alt="Grad shape">
                    </div>

                    <!-- Forgot password START -->
                    <div
                        class="card card-body bg-body bg-opacity-25 bg-blur border border-white border-opacity-10 position-relative rounded-4 shadow-primary text-center p-4 p-sm-5">
                        <!-- Title -->
                        <h1 class="mb-2 h3 fw-bold">Forgot password</h1>
                        <p class="mb-0">Enter the email address associated with an account.</p>
                        <!-- Form START -->
                        <form class="mt-2 mt-sm-4">
                            <!-- Email -->
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Enter email">
                            </div>

                            <!-- Button -->
                            <div class="d-grid mb-2"><button type="submit" class="btn btn-primary">Reset
                                    password</button></div>

                            <div class="mb-4 text-center">
                                <a href="{{ route('third', ['pages', 'auth', 'sign-in']) }}"
                                    class="text-primary-hover"><i class="bi bi-arrow-left"></i> Back
                                    to login</a>
                            </div>

                            <!-- Copyright -->
                            <div class="text-body small mt-3"> Copyrights ©2024 Folio. Build by <a
                                    href="#" target="_blank"
                                    class="text-body text-primary-hover hover-underline-animation">Stackbros</a>. </div>
                        </form>
                        <!-- Form END -->
                    </div>
                    <!-- Forgot password END -->
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
</main>

<!-- Back to top -->
<div class="back-top"></div>
@endsection