{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Profile') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div>--}}
{{--        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">--}}
{{--            @if (Laravel\Fortify\Features::canUpdateProfileInformation())--}}
{{--                @livewire('profile.update-profile-information-form')--}}

{{--                <x-section-border />--}}
{{--            @endif--}}

{{--            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))--}}
{{--                <div class="mt-10 sm:mt-0">--}}
{{--                    @livewire('profile.update-password-form')--}}
{{--                </div>--}}

{{--                <x-section-border />--}}
{{--            @endif--}}

{{--            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())--}}
{{--                <div class="mt-10 sm:mt-0">--}}
{{--                    @livewire('profile.two-factor-authentication-form')--}}
{{--                </div>--}}

{{--                <x-section-border />--}}
{{--            @endif--}}

{{--            <div class="mt-10 sm:mt-0">--}}
{{--                @livewire('profile.logout-other-browser-sessions-form')--}}
{{--            </div>--}}

{{--            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())--}}
{{--                <x-section-border />--}}

{{--                <div class="mt-10 sm:mt-0">--}}
{{--                    @livewire('profile.delete-user-form')--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}



@extends('layouts.landing', ['headerClass' => 'header-absolute', 'buttons' => true])

@section('css')
    @vite(['node_modules/swiper/swiper-bundle.min.css', 'node_modules/glightbox/dist/css/glightbox.css'])
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">

                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                        <div class="card mb-4">
                            <div class="card-body">
                                @livewire('profile.update-profile-information-form')
                            </div>
                        </div>
                    @endif

                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                        <div class="card mb-4">
                            <div class="card-body">
                                @livewire('profile.update-password-form')
                            </div>
                        </div>
                    @endif

{{--                    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())--}}
{{--                        <div class="card mb-4">--}}
{{--                            <div class="card-body">--}}
{{--                                @livewire('profile.two-factor-authentication-form')--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endif--}}


                </div>
            </div>
        </div>
    </section>
    @include('layouts.partials/footer')

@endsection

