@extends('layouts.landing', ['headerClass' => 'header-absolute', 'buttons' => true])

@section('css')
{{--@vite(['node_modules/glightbox/dist/css/glightbox.css', 'node_modules/swiper/swiper-bundle.min.css'])--}}
@vite(['node_modules/swiper/swiper-bundle.min.css'])
@endsection

@section('content')

<main>

    <!-- =======================
        Blog detail START -->
    <section class="position-relative overflow-hidden pt-xl-8">
        <!-- Blur decoration START -->
        <div class="position-absolute start-0 top-0">
            <img src="/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-1 blur-9 h-300px rotate-335"
                alt="Grad shape">
        </div>

        <div class="position-absolute end-0 top-0">
            <img src="/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-1 blur-8 h-300px rotate-335"
                alt="Grad shape">
        </div>
        <!-- Blur decoration END -->

        <div class="container position-relative pt-4 pt-sm-5">
            <div class="row">
                <!-- Title -->
                <div class="col-lg-8 mx-auto text-center mb-4 mb-sm-6">
{{--                    <a href="#" class="badge text-bg-dark mb-4">Lifestyle</a>--}}
                    <h1 class="h2 mb-0">{{$theme->title}}</h1>
                </div>

                <!-- Image -->
                <div class="col-12 mx-auto text-center mb-4 mb-sm-6">
                    <img
                        src="{{Storage::url($theme->image)}}"
                        class="img-fluid rounded" alt="blog-img"
                    >
                </div>




                <!-- List content -->
                <div class="col-lg-10 mx-auto mb-4 mb-sm-6">
{{--                    <h6>Step 1: Shifting Perspective: From Lack to Abundance</h6>--}}
                    <p class="mb-5">{!! $theme->text !!}</p>




                <!-- Form END -->
            </div>
        </div>
    </section>
    <!-- =======================
        Blog detail END -->

    <!-- =======================
        Related blogs START -->
    <section class="bg-secondary overflow-hidden">
        <div class="container">
            <!-- Title -->
            <h3 class="mb-5 text-center">სხვა თემატიკები</h3>

            <!-- Projects START -->
            <div class="swiper"
                data-swiper-options='{
			"spaceBetween": 50,
			"loop": true,
			"autoplay":false,
			"pagination":{
				"el":".swiper-pagination"
			},
			"breakpoints": {
				"576": {"slidesPerView": 1},
				"768": {"slidesPerView": 2},
				"992": {"slidesPerView": 3}
			}}'>

                <div class="swiper-wrapper">
                    <!-- Project item -->
                    @foreach($similar as $value)
                    <div class="swiper-slide">
                        <article class="card card-img-scale bg-transparent overflow-hidden h-100 p-0">
                            <!-- Badge -->
                            <div class="d-flex gap-2 position-absolute top-0 start-0 z-index-2 m-4">
{{--                                <span class="badge bg-dark">Design</span>--}}
                                <span class="badge bg-white text-dark">  {{date('y m d', strtotime($value->created_at))}}</span>
                            </div>

                            <!-- Card image -->
                            <div class="card-img-scale-wrapper rounded-4">
                                <img src="{{Storage::url($value->image)}}" class="rounded-4 img-scale" alt="Blog-img">
                            </div>

                            <!-- Card Body -->
                            <div class="card-body px-2">
                                <!-- Title -->
                                <h6 class="card-title mb-2"><a href="#"> {{$value->title}} </a></h6>
                                <a class="icon-link icon-link-hover stretched-link"
                                    href="{{ route('single.theme', $value->slug) }}">დეტალურად<i class="bi bi-arrow-right"></i> </a>
                            </div>
                        </article>
                    </div>
                    @endforeach


                <!-- Slider Pagination -->
                <div class="swiper-pagination swiper-pagination-primary position-relative mt-0"></div>
            </div>
            <!-- Projects END -->
        </div>
    </section>
    <!-- =======================
        Related blogs END -->

</main>

@include('layouts.partials/footer')

<!-- Back to top -->
<div class="back-top"></div>
@endsection
