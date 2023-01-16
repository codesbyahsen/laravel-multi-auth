<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('teacher.includes.links')
</head>

<body>
    @include('teacher.includes.navbar')

    @yield('page-content')

    @include('teacher.includes.footer')

    @include('teacher.includes.scripts')
</body>

</html>
