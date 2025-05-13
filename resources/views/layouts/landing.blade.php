<!DOCTYPE html>
<html lang="en" @yield('html-attribute')>

<head>

    @include('layouts.partials/title-meta')

    @include('layouts.partials/head-css')

</head>

<body @yield('body-attribute')>

    @include('layouts.partials/navbar')

    @yield('content')

    <!-- Back to top -->
    <div class="back-top"></div>

    @include('layouts.partials/footer-scripts')

</body>

</html>