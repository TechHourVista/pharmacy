<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/slidebar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/dash.css')}}">
    <title>Pharmacy - @yield('title')</title>
    
 
</head>
<body>
    <header  class='header'>
    <div class="container-logo">
        <img src="{{ asset('images/logo.png')}}" alt="">
        <h2 class='title-logo'>Pharma One</h2>
    </div>
        <div class="container-search">
            <input type="text" class='input-search' placeholder='Search for anything here..'>
            <span class="material-symbols-outlined">
            search
            </span>
        </div>

        <div class="container-lang">
            <span class="material-symbols-outlined">
            translate
            </span>
            <select name="" id="" class='select-lang'>
                <option value="">English(US)</option>
                <option value="">arab</option>
            </select>
        </div>

        <div class="container-time">
            <div class="div-welcome">
                <div class="color-time" id='color-time'></div>
                <h3 class='welcome'>Good Morning</h3>
            </div>
            <p class='time'>14 january 2024 . 22:45:04 </p>
        </div>
    </header>



    <script src="{{asset('js/main-navbar.js')}}"></script>