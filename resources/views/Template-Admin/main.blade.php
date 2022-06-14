<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template-Admin.header')

    <title>@yield('title')</title>
</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        @include('Template-Admin.sidebar')
        @yield('content')
    </div>

    @include('Template-Admin.footer')
</body>

</html>
