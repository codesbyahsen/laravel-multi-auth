<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('student.includes.links')
</head>
<body>
    @include('student.includes.navbar')

    @yield('page-content')

    @include('student.includes.footer')

    @include('student.includes.scripts')
</body>
</html>
