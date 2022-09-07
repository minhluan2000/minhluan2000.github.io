<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('layout.header')
</head>
<body>
    <header>
        @include('layout.header')
    </header>

    <main>
        @include('layout.sidebar')
        @yield('main')
    </main>

    <footer>
        @include('layout.footer')
    </footer>
    
</body>
</html>