<!DOCTYPE html>
<html lang="en" @yield('html-attribute')>

<head>

    @include('layouts.partials/title-meta')

    @include('layouts.partials/head-css')

</head>

<body @yield('body-attribute')>

    @yield('content')

    @include('layouts.partials/footer-scripts')

</body>

</html>