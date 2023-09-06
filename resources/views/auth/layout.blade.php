<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assesst/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        div.card{
            max-width: 400px;
            width: 100%;
        }
    </style>
    @yield('css')
</head>

<body>
    <div class="hero">
        <header class="p-3">
            <a href="/">
                <button class="btn btn-primary">
                    <i class="fa fa-arrow-left"></i>
                    Back Home
                </button>
            </a>
        </header>

        <div class="container d-flex justify-content-center">
            <div class="card">
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
        </div>

        <!-- <footer>
            @include('include.footer')
        </footer> -->
    </div>
</body>
<script src="{{ asset('assesst/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assesst/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assesst/bootstrap/js/bootstrap.bundle.js') }}"></script>
@yield('js')

</html>