<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{ asset('/vendor/bootstrap5/css/bootstrap.min.css') }}">
</head>

<body>
    <main>

        @include('templates.komponen-admin.navbar')
        
        @yield('content')
    </main>

    {{-- jequery --}}
    <script src="{{ asset('/vendor/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap5/js/bootstrap.bundle.min.js') }}"></script>

    {{-- script --}}
    @yield('script')
</body>

</html>
