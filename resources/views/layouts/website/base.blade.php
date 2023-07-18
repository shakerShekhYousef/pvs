<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('pageTitle') | Prestige Vehicle Sourcing</title>
    @include('layouts.website.styles')
    @yield('custom-style')
</head>
<body>
@include('layouts.website.header')
<!-- start main content --->
@yield('content')
<!-- end main content --->
@include('layouts.website.footer')
@include('layouts.website.scripts')
@yield('custom-script')
</body>
</html>
