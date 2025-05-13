@extends('layouts.landing', ['headerClass' => 'header-absolute', 'buttons' => true])

@section('content')
<main>

    <!-- =======================
        Hero START -->
    <section class="bg-secondary position-relative pt-xl-8 overflow-hidden">
        <!-- Decoration START -->
        <!-- Grad blur -->
        <div class="position-absolute top-0 start-0 mt-n9 ms-n5">
            <img src="/images/elements/grad-shape/blur-decoration.svg" class="blur-7 opacity-2" alt="Grad shape">
        </div>

        <!-- Grad blur -->
        <div class="position-absolute top-0 start-50 mt-n9 ms-n9">
            <img src="/images/elements/grad-shape/blur-decoration.svg" class="blur-8 opacity-1" alt="Grad shape">
        </div>
        <!-- Decoration START -->

        <!-- Title and content -->
        <div class="container text-center mx-auto position-relative pt-4 pt-sm-5">
            <!-- Image -->
            <img src="/images/elements/404.svg" class="h-md-400px mb-4 mb-lg-6" alt="404 image">

            <!-- Title and contents -->
            <h1 class="h3 mb-3">Ooops! Page not found 😭</h1>
            <p class="mb-3">The page you were looking for doesn't exis</p>
            <a href="{{ route('any', 'index') }}" class="btn btn-white-shadow mb-0">Back to Homepage</a>
        </div>
    </section>
    <!-- =======================
        Hero END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer')

<div class="back-top"></div>
@endsection