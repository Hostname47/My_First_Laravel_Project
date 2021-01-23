<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="menu-container-style-1">
        <a href="" class="menu-button-style-1">MENU-BUTTON 1</a>
        <a href="" class="menu-button-style-1">MENU-BUTTON 2</a>
        <a href="" class="menu-button-style-1">MENU-BUTTON 3</a>
        <a href="" class="menu-button-style-1">MENU-BUTTON 4</a>
    </div>

    @yield('content')
</body>
</html>