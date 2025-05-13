@extends('layouts.base')

@section('body-attribute')
class="bg-secondary"
@endsection

@section('content')
<!-- Header START -->
<header class="header-sticky bg-transparent">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container justify-content-center">
            <!-- Logo START -->
            <a class="navbar-brand" href="{{ route('any', 'index') }}">
                <img class="light-mode-item navbar-brand-item" src="/images/logo.svg" alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="/images/logo-light.svg" alt="logo">
            </a>
            <!-- Logo END -->
        </div>
    </nav>
    <!-- Logo Nav END -->
</header>
<!-- Header END -->

<main class="d-flex flex-column justify-content-center" style="min-height: calc(100vh - 160px)">

    <!-- =======================
        Hero START -->
    <section class="py-5 p-lg-0">
        <!-- Blur decoration -->
        <div class="position-absolute top-0 start-0 mt-n9 ms-n5">
            <img src="/images/elements/grad-shape/blur-decoration.svg" class="blur-7 opacity-2" alt="Grad shape">
        </div>
        <!-- Blur decoration -->
        <div class="position-absolute top-0 end-0 mt-n9">
            <img src="/images/elements/grad-shape/blur-decoration-2.svg" class="blur-9 opacity-2" alt="Grad shape">
        </div>

        <div class="container position-relative">
            <div class="row g-4 d-flex justify-content-center align-items-center">
                <!-- Main image -->
                <div class="col-sm-8 col-md-6">
                    <img src="/images/elements/coming-soon.png" alt="coming soon image">
                </div>

                <div class="col-md-6 col-xl-5 ms-auto">
                    <!-- Title -->
                    <h1 class="fw-bold">Cooking Up Something <span class="text-primary-grad">Great</span></h1>
                    <p class="mb-0">We are going to launch our website very soon, Stay tune.</p>

                    <!-- Input -->
                    <form class="mt-5">
                        <b>Notify me when the website is launched</b>
                        <div class="bg-body shadow-primary rounded-2 p-1 mt-2">
                            <!-- Input subscribe -->
                            <div class="input-group">
                                <input class="form-control border-0 me-1" type="email" placeholder="Enter your email">
                                <button type="button" class="btn btn-dark rounded-2 mb-0">Notify Me!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
        Hero END -->

</main>

<!-- =======================
        Footer START -->
<footer>
    <div class="container">
        <!-- Bottom footer -->
        <div class="d-md-flex justify-content-between align-items-center text-center text-lg-start pb-3 pb-md-0">
            <!-- copyright text -->
            <div class="mb-3 mb-md-0"> Copyrights ©2024 Folio. Build by <a href="#"
                    class="text-body text-primary-hover">Stackbros</a>. </div>
            <!-- copyright links-->
            <!-- Language selector -->
            <ul class="list-inline align-items-center mb-0">
                <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-facebook" href="#"><i
                            class="bi bi-facebook lh-base"></i></a> </li>
                <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-instagram-gradient" href="#"><i
                            class="bi bi-instagram lh-base"></i></a> </li>
                <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-twitter-x" href="#"><i
                            class="bi bi-twitter-x lh-base"></i></a> </li>
                <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-linkedin" href="#"><i
                            class="bi bi-linkedin lh-base"></i></a> </li>
            </ul>
        </div>
    </div>
</footer>
<!-- =======================
        Footer END -->

<!-- Back to top -->
<div class="back-top"></div>
@endsection