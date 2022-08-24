<html lang="en">


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/default/form-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Aug 2022 13:51:39 GMT -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link href="/frontend/images/favicon.png" rel="icon" type="image/png">

  <!-- Basic Page Needs
        ================================================== -->
  <title>@yield('title')</title>  
  <meta name="description" content="Courseplus is - Professional A unique and beautiful collection of UI elements">

  <!-- icons
    ================================================== -->
  <link rel="stylesheet" href="/frontend/css/icons.css">

  <!-- CSS
    ================================================== -->
  <link rel="stylesheet" href="/frontend/css/uikit.css">
  <link rel="stylesheet" href="/frontend/css/style.css">
  <link href="/frontend/unpkg.com/tailwindcss%402.2.19/dist/tailwind.min.css" rel="stylesheet">

  <style>
    input , .bootstrap-select.btn-group button{
        background-color: #f3f4f6  !important;
        height: 44px  !important;
        box-shadow: none  !important; 
    }
  </style>

</head>
<body>

  <div id="wrapper" class="flex flex-col justify-between h-screen">

      <!-- header-->
      <div class="bg-white py-4 shadow dark:bg-gray-800">
          <div class="max-w-6xl mx-auto">


              <div class="flex items-center lg:justify-between justify-around">

                  <a href="index.html">
                      <img src="/frontend/images/logo.png" alt="" class="w-32">
                  </a>

                  <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
                      <a href="form-login.html" class="py-3 px-4">Login</a>
                      <a href="form-register.html" class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white">Register</a>
                  </div>

              </div>


          </div>
      </div>

      @yield('content')
      
      <!-- Footer -->
      <div class="lg:mb-5 py-3 uk-link-reset">
          <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
              <div class="flex space-x-2 text-gray-700 uppercase">
                  <a href="#"> About</a>
                  <a href="#"> Help</a>
                  <a href="#"> Terms</a>
                  <a href="#"> Privacy</a>
              </div>
              <p class="capitalize"> © copyright 2021 by Courseplus</p>
          </div>
      </div>

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


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/default/form-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Aug 2022 13:51:40 GMT -->
</html>