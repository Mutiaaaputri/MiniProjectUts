<!DOCTYPEhtml>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"content="width=device-width, initial-scale=1.0">


<title> {{ $pageTitle }}</title>
@vite('resources/sass/app.scss')

</head>
    <body>
        @include('layouts.nav')
        @yield('content')
    <script>
        var el = document.getElementByid("wrapper");
        toggleButton.onclick = function(){
            el.classList.toggle("toggled");
        };
        @vite('resources/js/app.js')
</body>
</html