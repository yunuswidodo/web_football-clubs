<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta');
    <title>@yield('title') | Landing Page</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="">
    <link rel="shorcut icon" type="images/x-icon" href="">

    @stack('before-style')

    @include('includes.style')

    @stack('after-style')
</head>
<body>
    @include('includes.header')
        @yield('content')
    @include('includes.footer')

    @stack('before-script')
    <!-- script -->
    @include('includes.script')

    @stack('after-script')
    
</body>
</html>