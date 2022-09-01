<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Aug 2022 16:30:50 GMT -->
<head>
	<title>@yield('title')</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Eduport- LMS, Education and Course Theme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="/frontend/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="/frontend/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="/frontend/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="/frontend/vendor/tiny-slider/tiny-slider.css">
	<link rel="stylesheet" type="text/css" href="/frontend/vendor/glightbox/css/glightbox.css">

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="/frontend/css/style.css">
	<link id="style-switch" rel="stylesheet" type="text/css" href="/frontend/css/custom.css">

</head>

<body><!-- Pre loader -->
    <div class="preloader">
        <div class="preloader-item">
            <div class="spinner-grow text-primary"></div>
        </div>
    </div>
@include('layouts.frontend.header')

<!-- **************** MAIN CONTENT START **************** -->
<main>
	
@yield('content')

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.frontend.footer')

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="/frontend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="/frontend/vendor/tiny-slider/tiny-slider.js"></script>
<script src="/frontend/vendor/glightbox/js/glightbox.js"></script>
<script src="/frontend/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>

<!-- Template Functions -->
<script src="/frontend/js/functions.js"></script>
@yield('custom-js-tag')
@stack('add-script')
</body>

<!-- Mirrored from eduport.webestica.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Aug 2022 16:31:40 GMT -->
</html>