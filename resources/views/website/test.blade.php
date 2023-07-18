<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>PVS | Prestige Vehicle Sourcing</title>
    <link rel="shortcut icon" href="{{asset('assets/front/img/logo.svg')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/preloader.css')}}">
</head>
<body>
<div class="card card-1">
    <img
        src="{{asset('assets/front/img/Logo new-04.png')}}"
        alt="White logo - no background.png"
        fetchpriority="high">
    <div>
        <h1>
            Welcome To Prestige Vehicle Sourcing
        </h1>
    </div>
    <div>
        <h3>
            The UAE's Premium Vehicle Marketing Service For Sellers &amp; Buyers
        </h3>
    </div><br><br>
    <a href="{{route('front.home')}}" class="text-uppercase button-undercon">FIND OUT MORE</a>
</div>
</body>
</html>
