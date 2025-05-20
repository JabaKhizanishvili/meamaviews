<x-layouts.base>
@include('layouts.navbars.auth.sidebar')
@include('layouts.navbars.auth.nav')
{{ $slot }}
<main>
    <div class="container-fluid">
        <div class="row">
{{--            @include('layouts.footers.auth.footer')--}}
        </div>
    </div>
</main>

</x-layouts.base>
