@extends('layouts.landing', ['headerClass' => 'header-absolute', 'buttons' => true])

@section('css')
    @vite(['resources/js/app.js'])
{{--    @vite(['node_modules/swiper/swiper-bundle.min.css', 'node_modules/glightbox/dist/css/glightbox.css'])--}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .card {
            border-radius: 10px;
            overflow: hidden;
        }

        .card-header {
            border-bottom: none;
        }

        .nav-tabs .nav-link {
            color: rgba(255, 255, 255, 0.8);
            border: none;
            padding: 0.75rem 1rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .nav-tabs .nav-link.active {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 5px 5px 0 0;
        }

        .nav-tabs .nav-link:hover:not(.active) {
            color: white;
            background-color: rgba(255, 255, 255, 0.05);
        }

        .card-body {
            padding: 1.5rem;
        }

        .shadow-sm {
            box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
        }

        /* Animation for tab transitions */
        .tab-pane.fade {
            transition: opacity 0.15s linear;
        }

        /* Custom styles for better visual hierarchy */
        .card-header h5 {
            font-weight: 600;
            margin-bottom: 0;
        }
    </style>
@endsection

@section('content')

    <section class="bg-secondary position-relative pt-xl-8">
        <div class="position-absolute top-0 start-0 mt-n9 ms-n5">
            <img src="/images/elements/grad-shape/blur-decoration.svg" class="blur-7 opacity-2" alt="Grad shape">
        </div>

        <!-- Grad blur -->
        <div class="position-absolute top-0 start-50 mt-n9 ms-n9">
            <img src="/images/elements/grad-shape/blur-decoration.svg" class="blur-8 opacity-1" alt="Grad shape">
        </div>
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-12">--}}

{{--                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())--}}
{{--                        <div class="card mb-4">--}}
{{--                            <div class="card-body">--}}
{{--                                @livewire('profile.update-profile-information-form')--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))--}}
{{--                        <div class="card mb-4">--}}
{{--                            <div class="card-body">--}}
{{--                                @livewire('profile.update-password-form')--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())--}}
{{--                        <div class="card mb-4">--}}
{{--                            <div class="card-body">--}}
{{--                                @livewire('profile.two-factor-authentication-form')--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endif--}}


{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        @livewire('profile-tabs')


    </section>
    @include('layouts.partials/footer')

@endsection

