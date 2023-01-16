<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('admin.includes.links')
</head>
<body>
    @include('admin.includes.navbar')

    @yield('page-content')

    @include('admin.includes.footer')

    @include('admin.includes.scripts')
</body>
</html>
