<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{ asset('/vendor/bootstrap5/css/bootstrap.min.css') }}">
    {{-- ck editor --}}
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>

    <style>
        .main-container {
            width: 795px;
            margin-left: auto;
            margin-right: auto;
        }
        </style>
</head>

<body>
    <main>

        @include('templates.komponen-admin.navbar')
        
        @yield('content')
    </main>

    {{-- jequery --}}
    <script src="{{ asset('/vendor/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap5/js/bootstrap.bundle.min.js') }}"></script>

    {{-- ckeditor --}}
    {{-- <script src="{{ asset('/vendor/ckeditor5/ckeditor5.js') }}"></script> --}}
    {{-- <script src="{{ asset('/vendor/ckeditor4/ckeditor.js') }}"></script> --}}

    {{-- script --}}
    @yield('script')
</body>

</html>
