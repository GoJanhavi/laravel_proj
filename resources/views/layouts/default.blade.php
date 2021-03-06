<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.header')

    <main role="main">
        <div class="container-fluid col-12">
        @yield('content')
        </div>
    </main>

    <footer class="container-fluid bg-dark text-white text-justify" style="bottom: 0; position: fixed;left: 0; right: 0;">
        <div class="container">
            @include('includes.footer')
        </div>
    </footer>
@include('includes.jsfooter')

</body>
</html>
