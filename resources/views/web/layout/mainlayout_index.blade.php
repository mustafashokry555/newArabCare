<!DOCTYPE html>
<html lang="en">

<head>
    @include('web.layout.partials.head')

</head>

<body id="top">
    @yield('content')
    @include('web.layout.partials.footer_index')
    @include('web.layout.partials.footer-scripts')
    @stack('scripts')
</body>

</html>
