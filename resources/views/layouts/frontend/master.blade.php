<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/default/explore.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Aug 2022 13:49:18 GMT -->
<head> 

    <!-- Basic Page Needs
    ================================================== -->
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus is - Professional A unique and beautiful collection of UI elements">

    <!-- Favicon -->
    <link href="/frontend/images/favicon.png" rel="icon" type="image/png">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="/frontend/css/icons.css">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/frontend/css/uikit.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link href="/frontend/unpkg.com/tailwindcss%402.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper" class="is-verticle">

        @include('layouts.frontend.header')

        <!-- Main Contents -->
        <div class="main_content">

            @yield('content')
            
            @include('layouts.frontend.footer')

        </div>
        
        @include('layouts.frontend.sidebar')
        
    </div>

 
    <!-- Javascript
    ================================================== -->
    <script src="/frontend/code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/frontend/cdn.jsdelivr.net/npm/uikit%403.7.6/dist/js/uikit.min.js"></script>
    <script src="/frontend/js/uikit.js"></script>
    <script src="/frontend/js/tippy.all.min.js"></script>
    <script src="/frontend/js/simplebar.js"></script>
    <script src="/frontend/js/custom.js"></script>
    <script src="/frontend/js/bootstrap-select.min.js"></script>
    <script src="/frontend/unpkg.com/ionicons%405.2.3/dist/ionicons.js"></script>

</body>


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/default/explore.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Aug 2022 13:50:23 GMT -->
</html>
