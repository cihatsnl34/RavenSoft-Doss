<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosya Fabrikası</title>
    <link rel="icon" href="{{asset('assets')}}/logo.svg" type="image/icon type">
    <!----IMPORT SWIPER--->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <!----IMPORT GLOBAL.CSS--->
    <link rel="stylesheet" href="{{asset('assets')}}/css/global.css">
    <!----IMPORT TAILWIND--->
    <script src="https://cdn.tailwindcss.com"></script>
    <!----IMPORT FONTAWESOME--->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">


</head>

<body>
    @include('_header')
    @yield('content')
    @include('_footer')

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{asset('assets')}}/js/script.js"></script>

</body> 

</html>