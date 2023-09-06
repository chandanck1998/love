<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assesst/bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="hero">
        <header>
            @include('include.header')
        </header>

        <section>
            @yield('content')
        </section>

        <footer>
            @include('include.footer')
        </footer>
    </div>
</body>
<script src="{{ asset('assesst/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assesst/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assesst/bootstrap/js/bootstrap.bundle.js') }}"></script>

</html>