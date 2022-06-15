<html lang="en">
<head>
    @include('templates.header')
    
    <title>@yield('title')</title>
</head>
<body>
    <div id="app">
        @include('templates.sidebar')
        @yield('main')
    </div>
    @include('templates.footer')
</body>
</html>