<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('cdns')
    {{-- css --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- JS --}}
    <script defer href="{{asset('js/app.js')}}"></script>
    <title>Trains | @yield('title')</title>

</head>
<body>
    @include('includes.header')
    <main class="mt-4">
        <div class="container">
            @yield('content')
        </div>
    </main>
</body>
</html>