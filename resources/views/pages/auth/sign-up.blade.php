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

                    <!-- Sign up START -->
                    <div
                        class="card card-body bg-body bg-opacity-25 bg-blur border border-white border-opacity-10 position-relative rounded-4 shadow-primary text-center p-4 p-sm-5">
                        <!-- Title -->
                        <h1 class="mb-2 h3 fw-bold">რეგისტრაცია</h1>
                        <p class="mb-0">არსებული ანგარიშით შესვლა<a
                                href="{{ route('login.index') }}" class="text-primary-grad">
                                ავტორიზაცია</a></p>
                        <!-- Form START -->
                        <form method="POST" class="mt-2 mt-sm-4" action="{{ route('register.store') }}">
                            @csrf
                            <!-- Name -->
                            <div class="mb-3">
                                <input type="text" class="form-control" name="username" placeholder="UserName">
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Enter email">
                            </div>
                            <!-- New password -->
                            <div class="mb-3 position-relative">
                                <!-- Password -->
                                <div class="mb-3 position-relative">
                                    <input type="password" name="password" class="form-control fakepassword pe-6" id="psw-input"
                                        placeholder="Enter your password">
                                    <span class="position-absolute top-50 end-0 translate-middle-y p-0 me-2">
                                        <i class="fakepasswordicon bi bi-eye-slash-fill cursor-pointer p-2"></i>
                                    </span>
                                </div>
                            </div>
                            <!-- Remember me -->
{{--                            <div class="mb-3 text-start form-check">--}}
{{--                                <input type="checkbox" name="remember" class="form-check-input border" id="exampleCheck1">--}}
{{--                                <label class="form-check-label small" for="exampleCheck1">I agree to all Terms &--}}
{{--                                    conditions and the privacy policy.</label>--}}
{{--                            </div>--}}

                            <!-- Button -->
                            <div class="d-grid"><button type="submit" class="btn btn-primary">შექმენი ანგარიში</button></div>

                            <!-- Divider -->
                            <div class="d-flex align-items-center my-3">
                                <hr class="w-100">
                                <p class="small px-4 mb-0">Or</p>
                                <hr class="w-100">
                            </div>

                            <!-- Facebook and google button -->
                            <div class="d-flex justify-content-center gap-3">
                                <a class="btn btn-icon bg-facebook" href="#"><i
                                        class="bi bi-facebook lh-base"></i></a>
                                <a class="btn btn-icon border bg-white" href="#"><i
                                        class="bi bi-google lh-base text-google-icon"></i></a>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif


                            <!-- Copyright -->
{{--                            <div class="text-body small mt-3"> Copyrights ©2024 Folio. Build by <a--}}
{{--                                    href="#" target="_blank"--}}
{{--                                    class="text-body text-primary-hover hover-underline-animation">Stackbros</a>. </div>--}}
                        </form>
                        <!-- Form END -->


                    </div>
                    <!-- Sign up END -->
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
</main>

<!-- Back to top -->
<div class="back-top"></div>
@endsection
