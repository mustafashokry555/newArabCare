<!DOCTYPE html>
<html lang="en">

<head>
    @include('web.layout.partials.head')

</head>

<body>
    @yield('content')
    @include('web.layout.partials.footer_index5')
    @include('web.layout.partials.footer-scripts')
    @stack('scripts')
</body>

</html>
