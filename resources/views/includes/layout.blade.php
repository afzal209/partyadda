<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ul2 | @yield('title')</title>
    @include('includes.header')

</head>

<body>
    @include('includes.navbar')
    <div class="container-fluid border-top">
        @yield('content')
    </div>
    
    
    @include('includes.footer')
</body>

</html>