@extends('layouts.frontend.master')

@section('title', 'Trang Chủ')

@section('content')
<!-- =======================
Main Banner START -->
<section class="bg-light">
	<div class="container pt-5 mt-0 mt-lg-5">

		<!-- Title and SVG START -->
		<div class="row position-relative mb-0 mb-sm-5 pb-0 pb-lg-5">
			<div class="col-lg-8 text-center mx-auto position-relative">

				<!-- SVG decoration -->
				<figure class="position-absolute top-100 start-50 translate-middle mt-4 ms-n9 pe-5 d-none d-lg-block">
					<svg>
						<path class="fill-success" d="m181.6 6.7c-0.1 0-0.2-0.1-0.3 0-2.5-0.3-4.9-1-7.3-1.4-2.7-0.4-5.5-0.7-8.2-0.8-1.4-0.1-2.8-0.1-4.1-0.1-0.5 0-0.9-0.1-1.4-0.2-0.9-0.3-1.9-0.1-2.8-0.1-5.4 0.2-10.8 0.6-16.1 1.4-2.7 0.3-5.3 0.8-7.9 1.3-0.6 0.1-1.1 0.3-1.8 0.3-0.4 0-0.7-0.1-1.1-0.1-1.5 0-3 0.7-4.3 1.2-3 1-6 2.4-8.8 3.9-2.1 1.1-4 2.4-5.9 3.9-1 0.7-1.8 1.5-2.7 2.2-0.5 0.4-1.1 0.5-1.5 0.9s-0.7 0.8-1.1 1.2c-1 1-1.9 2-2.9 2.9-0.4 0.3-0.8 0.5-1.2 0.5-1.3-0.1-2.7-0.4-3.9-0.6-0.7-0.1-1.2 0-1.8 0-3.1 0-6.4-0.1-9.5 0.4-1.7 0.3-3.4 0.5-5.1 0.7-5.3 0.7-10.7 1.4-15.8 3.1-4.6 1.6-8.9 3.8-13.1 6.3-2.1 1.2-4.2 2.5-6.2 3.9-0.9 0.6-1.7 0.9-2.6 1.2s-1.7 1-2.5 1.6c-1.5 1.1-3 2.1-4.6 3.2-1.2 0.9-2.7 1.7-3.9 2.7-1 0.8-2.2 1.5-3.2 2.2-1.1 0.7-2.2 1.5-3.3 2.3-0.8 0.5-1.7 0.9-2.5 1.5-0.9 0.8-1.9 1.5-2.9 2.2 0.1-0.6 0.3-1.2 0.4-1.9 0.3-1.7 0.2-3.6 0-5.3-0.1-0.9-0.3-1.7-0.8-2.4s-1.5-1.1-2.3-0.8c-0.2 0-0.3 0.1-0.4 0.3s-0.1 0.4-0.1 0.6c0.3 3.6 0.2 7.2-0.7 10.7-0.5 2.2-1.5 4.5-2.7 6.4-0.6 0.9-1.4 1.7-2 2.6s-1.5 1.6-2.3 2.3c-0.2 0.2-0.5 0.4-0.6 0.7s0 0.7 0.1 1.1c0.2 0.8 0.6 1.6 1.3 1.8 0.5 0.1 0.9-0.1 1.3-0.3 0.9-0.4 1.8-0.8 2.7-1.2 0.4-0.2 0.7-0.3 1.1-0.6 1.8-1 3.8-1.7 5.8-2.3 4.3-1.1 9-1.1 13.3 0.1 0.2 0.1 0.4 0.1 0.6 0.1 0.7-0.1 0.9-1 0.6-1.6-0.4-0.6-1-0.9-1.7-1.2-2.5-1.1-4.9-2.1-7.5-2.7-0.6-0.2-1.3-0.3-2-0.4-0.3-0.1-0.5 0-0.8-0.1s-0.9 0-1.1-0.1-0.3 0-0.3-0.2c0-0.4 0.7-0.7 1-0.8 0.5-0.3 1-0.7 1.5-1l5.4-3.6c0.4-0.2 0.6-0.6 1-0.9 1.2-0.9 2.8-1.3 4-2.2 0.4-0.3 0.9-0.6 1.3-0.9l2.7-1.8c1-0.6 2.2-1.2 3.2-1.8 0.9-0.5 1.9-0.8 2.7-1.6 0.9-0.8 2.2-1.4 3.2-2 1.2-0.7 2.3-1.4 3.5-2.1 4.1-2.5 8.2-4.9 12.7-6.6 5.2-1.9 10.6-3.4 16.2-4 5.4-0.6 10.8-0.3 16.2-0.5h0.5c1.4-0.1 2.3-0.1 1.7 1.7-1.4 4.5 1.3 7.5 4.3 10 3.4 2.9 7 5.7 11.3 7.1 4.8 1.6 9.6 3.8 14.9 2.7 3-0.6 6.5-4 6.8-6.4 0.2-1.7 0.1-3.3-0.3-4.9-0.4-1.4-1-3-2.2-3.9-0.9-0.6-1.6-1.6-2.4-2.4-0.9-0.8-1.9-1.7-2.9-2.3-2.1-1.4-4.2-2.6-6.5-3.5-3.2-1.3-6.6-2.2-10-3-0.8-0.2-1.6-0.4-2.5-0.5-0.2 0-1.3-0.1-1.3-0.3-0.1-0.2 0.3-0.4 0.5-0.6 0.9-0.8 1.8-1.5 2.7-2.2 1.9-1.4 3.8-2.8 5.8-3.9 2.1-1.2 4.3-2.3 6.6-3.2 1.2-0.4 2.3-0.8 3.6-1 0.6-0.2 1.2-0.2 1.8-0.4 0.4-0.1 0.7-0.3 1.1-0.5 1.2-0.5 2.7-0.5 3.9-0.8 1.3-0.2 2.7-0.4 4.1-0.7 2.7-0.4 5.5-0.8 8.2-1.1 3.3-0.4 6.7-0.7 10-1 7.7-0.6 15.3-0.3 23 1.3 4.2 0.9 8.3 1.9 12.3 3.6 1.2 0.5 2.3 1.1 3.5 1.5 0.7 0.2 1.3 0.7 1.8 1.1 0.7 0.6 1.5 1.1 2.3 1.7 0.2 0.2 0.6 0.3 0.8 0.2 0.1-0.1 0.1-0.2 0.2-0.4 0.1-0.9-0.2-1.7-0.7-2.4-0.4-0.6-1-1.4-1.6-1.9-0.8-0.7-2-1.1-2.9-1.6-1-0.5-2-0.9-3.1-1.3-2.5-1.1-5.2-2-7.8-2.8-1-0.8-2.4-1.2-3.7-1.4zm-64.4 25.8c4.7 1.3 10.3 3.3 14.6 7.9 0.9 1 2.4 1.8 1.8 3.5-0.6 1.6-2.2 1.5-3.6 1.7-4.9 0.8-9.4-1.2-13.6-2.9-4.5-1.7-8.8-4.3-11.9-8.3-0.5-0.6-1-1.4-1.1-2.2 0-0.3 0-0.6-0.1-0.9s-0.2-0.6 0.1-0.9c0.2-0.2 0.5-0.2 0.8-0.2 2.3-0.1 4.7 0 7.1 0.4 0.9 0.1 1.6 0.6 2.5 0.8 1.1 0.4 2.3 0.8 3.4 1.1z"></path>
					</svg>
				</figure>
				<!-- SVG decoration -->
				<figure class="position-absolute top-0 start-0 ms-n9">	
					<svg width="22px" height="22px" viewBox="0 0 22 22">
						<polygon class="fill-orange" points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 "></polygon>
					</svg>
				</figure>
				<!-- SVG decoration -->
				<figure class="position-absolute top-100 start-100 translate-middle ms-5 d-none d-lg-block">
					<svg width="21.5px" height="21.5px" viewBox="0 0 21.5 21.5">
						<polygon class="fill-danger" points="21.5,14.3 14.4,9.9 18.9,2.8 14.3,0 9.9,7.1 2.8,2.6 0,7.2 7.1,11.6 2.6,18.7 7.2,21.5 11.6,14.4 18.7,18.9 "></polygon>
					</svg>
				</figure>
				<!-- SVG decoration -->
				<figure class="position-absolute top-0 start-100 translate-middle d-none d-md-block">
					<svg width="27px" height="27px">
						<path class="fill-purple" d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z"></path>
					</svg>
				</figure>
				
				<!-- Title -->
				<h1>Education, talents, and career opportunities. All in one place.</h1>
				<p>Get inspired and discover something new today. Grow your skill with the most reliable online courses and certifications in marketing, information technology, programming, and data science. </p>
				
				<!-- Search course -->
				<div class="col-md-8 text-center mx-auto pb-5">
					<form class="bg-body shadow rounded p-2">
						<div class="input-group">
							<input class="form-control border-0 me-1" type="search" placeholder="Find your course">
							<button type="button" class="btn btn-primary mb-0 rounded z-index-1"><i class="fas fa-search"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Title and SVG END -->
	</div>
</section>
<!-- =======================
Main Banner END -->

<!-- =======================
Counter START -->
<section class="py-0 py-xl-5">
	<div class="container">
		<div class="row g-4">
			<!-- Counter item -->
			<div class="col-sm-6 col-xl-3">
				<div class="d-flex justify-content-center align-items-center p-4 bg-warning bg-opacity-15 rounded-3">
					<span class="display-6 lh-1 text-warning mb-0"><i class="fas fa-tv"></i></span>
					<div class="ms-4 h6 fw-normal mb-0">
						<div class="d-flex">
							<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="10"	data-purecounter-delay="200">0</h5>
							<span class="mb-0 h5">K</span>
						</div>
						<p class="mb-0">Online Courses</p>
					</div>
				</div>
			</div>
			<!-- Counter item -->
			<div class="col-sm-6 col-xl-3">
				<div class="d-flex justify-content-center align-items-center p-4 bg-blue bg-opacity-10 rounded-3">
					<span class="display-6 lh-1 text-blue mb-0"><i class="fas fa-user-tie"></i></span>
					<div class="ms-4 h6 fw-normal mb-0">
						<div class="d-flex">
							<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="200" data-purecounter-delay="200">0</h5>
							<span class="mb-0 h5">+</span>
						</div>
						<p class="mb-0">Expert Tutors</p>
					</div>
				</div>
			</div>
			<!-- Counter item -->
			<div class="col-sm-6 col-xl-3">
				<div class="d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-10 rounded-3">
					<span class="display-6 lh-1 text-purple mb-0"><i class="fas fa-user-graduate"></i></span>
					<div class="ms-4 h6 fw-normal mb-0">
						<div class="d-flex">
							<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="60"	data-purecounter-delay="200">0</h5>
							<span class="mb-0 h5">K+</span>
						</div>
						<p class="mb-0">Online Students</p>
					</div>
				</div>
			</div>
			<!-- Counter item -->
			<div class="col-sm-6 col-xl-3">
				<div class="d-flex justify-content-center align-items-center p-4 bg-info bg-opacity-10 rounded-3">
					<span class="display-6 lh-1 text-info mb-0"><i class="bi bi-patch-check-fill"></i></span>
					<div class="ms-4 h6 fw-normal mb-0">
						<div class="d-flex">
							<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="6" data-purecounter-delay="300">0</h5>
							<span class="mb-0 h5">K+</span>
						</div>
						<p class="mb-0">Certified Courses</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Counter END -->

<!-- =======================
Featured course START -->
<section class="pt-0 pt-md-5">
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-lg-8 text-center mx-auto">
				<h2 class="fs-1 mb-0">Featured Courses</h2>
				<p class="mb-0">Explore top picks of the week </p>
			</div>
		</div>

		<div class="row g-4">
			<!-- Slider START -->
			<div class="tiny-slider arrow-round arrow-creative arrow-blur arrow-hover">
				<div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-dots="false" data-items-xl="3" data-items-md="2" data-items-xs="1">
					
					<!-- Card Item START -->
					<div class="col-md-6 col-lg-4 col-xxl-3">
						<div class="card p-2 shadow h-100">
							<div class="rounded-top overflow-hidden">
								<div class="card-overlay-hover">
									<!-- Image -->
									<img src="/frontend/images/courses/4by3/17.jpg" class="card-img-top" alt="course image">
								</div>
								<!-- Hover element -->
								<div class="card-img-overlay">
									<div class="card-element-hover d-flex justify-content-end">
										<a href="#" class="icon-md bg-white rounded-circle">
											<i class="fas fa-plus text-success"></i>
										</a>
									</div>
								</div>
							</div>
							<!-- Card body -->
							<div class="card-body px-2">
								<!-- Badge and icon -->
								<div class="d-flex justify-content-between">
									<!-- Rating and info -->
									<ul class="list-inline hstack gap-2 mb-0">
										<!-- Info -->
										<li class="list-inline-item d-flex justify-content-center align-items-center">
											<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
											<span class="h6 fw-light mb-0 ms-2">9.1k</span>
										</li>
										<!-- Rating -->
										<li class="list-inline-item d-flex justify-content-center align-items-center">
											<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
											<span class="h6 fw-light mb-0 ms-2">4.5</span>
										</li>
									</ul>
									<!-- Avatar -->
									<div class="avatar avatar-sm">
										<img class="avatar-img rounded-circle" src="/frontend/images/avatar/09.jpg" alt="avatar">
									</div>
								</div>
								<!-- Divider -->
								<hr>
								<!-- Title -->
								<h6 class="card-title"><a href="#">The Complete Digital Marketing Course - 12 Courses in 1</a></h6>
								<!-- Badge and Price -->
							</div>
						</div>
					</div>	
					<!-- Card Item END -->
					<!-- Card Item START -->
					<div class="col-md-6 col-lg-4 col-xxl-3">
						<div class="card p-2 shadow h-100">
							<div class="rounded-top overflow-hidden">
								<div class="card-overlay-hover">
									<!-- Image -->
									<img src="/frontend/images/courses/4by3/17.jpg" class="card-img-top" alt="course image">
								</div>
								<!-- Hover element -->
								<div class="card-img-overlay">
									<div class="card-element-hover d-flex justify-content-end">
										<a href="#" class="icon-md bg-white rounded-circle">
											<i class="fas fa-plus text-success"></i>
										</a>
									</div>
								</div>
							</div>
							<!-- Card body -->
							<div class="card-body px-2">
								<!-- Badge and icon -->
								<div class="d-flex justify-content-between">
									<!-- Rating and info -->
									<ul class="list-inline hstack gap-2 mb-0">
										<!-- Info -->
										<li class="list-inline-item d-flex justify-content-center align-items-center">
											<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
											<span class="h6 fw-light mb-0 ms-2">9.1k</span>
										</li>
										<!-- Rating -->
										<li class="list-inline-item d-flex justify-content-center align-items-center">
											<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
											<span class="h6 fw-light mb-0 ms-2">4.5</span>
										</li>
									</ul>
									<!-- Avatar -->
									<div class="avatar avatar-sm">
										<img class="avatar-img rounded-circle" src="/frontend/images/avatar/09.jpg" alt="avatar">
									</div>
								</div>
								<!-- Divider -->
								<hr>
								<!-- Title -->
								<h6 class="card-title"><a href="#">The Complete Digital Marketing Course - 12 Courses in 1</a></h6>
								<!-- Badge and Price -->
							</div>
						</div>
					</div>	
					<!-- Card Item END -->
					<!-- Card Item START -->
					<div class="col-md-6 col-lg-4 col-xxl-3">
						<div class="card p-2 shadow h-100">
							<div class="rounded-top overflow-hidden">
								<div class="card-overlay-hover">
									<!-- Image -->
									<img src="/frontend/images/courses/4by3/17.jpg" class="card-img-top" alt="course image">
								</div>
								<!-- Hover element -->
								<div class="card-img-overlay">
									<div class="card-element-hover d-flex justify-content-end">
										<a href="#" class="icon-md bg-white rounded-circle">
											<i class="fas fa-plus text-success"></i>
										</a>
									</div>
								</div>
							</div>
							<!-- Card body -->
							<div class="card-body px-2">
								<!-- Badge and icon -->
								<div class="d-flex justify-content-between">
									<!-- Rating and info -->
									<ul class="list-inline hstack gap-2 mb-0">
										<!-- Info -->
										<li class="list-inline-item d-flex justify-content-center align-items-center">
											<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
											<span class="h6 fw-light mb-0 ms-2">9.1k</span>
										</li>
										<!-- Rating -->
										<li class="list-inline-item d-flex justify-content-center align-items-center">
											<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
											<span class="h6 fw-light mb-0 ms-2">4.5</span>
										</li>
									</ul>
									<!-- Avatar -->
									<div class="avatar avatar-sm">
										<img class="avatar-img rounded-circle" src="/frontend/images/avatar/09.jpg" alt="avatar">
									</div>
								</div>
								<!-- Divider -->
								<hr>
								<!-- Title -->
								<h6 class="card-title"><a href="#">The Complete Digital Marketing Course - 12 Courses in 1</a></h6>
								<!-- Badge and Price -->
							</div>
						</div>
					</div>	
					<!-- Card Item END -->
					<!-- Card Item START -->
					<div class="col-md-6 col-lg-4 col-xxl-3">
						<div class="card p-2 shadow h-100">
							<div class="rounded-top overflow-hidden">
								<div class="card-overlay-hover">
									<!-- Image -->
									<img src="/frontend/images/courses/4by3/17.jpg" class="card-img-top" alt="course image">
								</div>
								<!-- Hover element -->
								<div class="card-img-overlay">
									<div class="card-element-hover d-flex justify-content-end">
										<a href="#" class="icon-md bg-white rounded-circle">
											<i class="fas fa-plus text-success"></i>
										</a>
									</div>
								</div>
							</div>
							<!-- Card body -->
							<div class="card-body px-2">
								<!-- Badge and icon -->
								<div class="d-flex justify-content-between">
									<!-- Rating and info -->
									<ul class="list-inline hstack gap-2 mb-0">
										<!-- Info -->
										<li class="list-inline-item d-flex justify-content-center align-items-center">
											<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
											<span class="h6 fw-light mb-0 ms-2">9.1k</span>
										</li>
										<!-- Rating -->
										<li class="list-inline-item d-flex justify-content-center align-items-center">
											<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
											<span class="h6 fw-light mb-0 ms-2">4.5</span>
										</li>
									</ul>
									<!-- Avatar -->
									<div class="avatar avatar-sm">
										<img class="avatar-img rounded-circle" src="/frontend/images/avatar/09.jpg" alt="avatar">
									</div>
								</div>
								<!-- Divider -->
								<hr>
								<!-- Title -->
								<h6 class="card-title"><a href="#">The Complete Digital Marketing Course - 12 Courses in 1</a></h6>
								<!-- Badge and Price -->
							</div>
						</div>
					</div>	
					<!-- Card Item END -->

				</div>
			</div>
			<!-- Slider END -->
		</div>
		<!-- Button -->
		<div class="text-center mt-5">
			<a href="#" class="btn btn-primary-soft">View more<i class="fas fa-sync ms-2"></i></a>
		</div>
	</div>
</section>
<!-- =======================
Featured course END -->

<!-- =======================
IT courses START -->
<section>
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-lg-8 text-center mx-auto">
				<h2 class="fs-1">Top Courses for IT</h2>
				<p class="mb-0">Information Technology Courses to expand your skills and boost your career & salary</p>
			</div>
		</div>

		<div class="row g-4">
			<div class="tiny-slider arrow-round arrow-creative arrow-blur arrow-hover">
				<div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-dots="false" data-items-xl="4" data-items-md="3" data-items-xs="2">

					<!-- Course item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<!-- Image -->
				<div class="card card-metro overflow-hidden rounded-3">
					<img src="/frontend/images/courses/4by3/01.jpg" alt="">
					<!-- Image overlay -->
					<div class="card-img-overlay d-flex"> 
						<!-- Info -->
						<div class="mt-auto card-text">
							<a href="#" class="text-white mt-auto h5 stretched-link">Digital Marketing</a>
							<div class="text-white">23 Courses</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Course item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<!-- Image -->
				<div class="card card-metro overflow-hidden rounded-3">
					<img src="/frontend/images/courses/4by3/03.jpg" alt="">
					<!-- Image overlay -->
					<div class="card-img-overlay d-flex"> 
						<!-- Info -->
						<div class="mt-auto card-text">
							<a href="#" class="text-white mt-auto h5 stretched-link">Figma</a>
							<div class="text-white">16 Courses</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Course item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<!-- Image -->
				<div class="card card-metro overflow-hidden rounded-3">
					<img src="/frontend/images/courses/4by3/05.jpg" alt="">
					<!-- Image overlay -->
					<div class="card-img-overlay d-flex"> 
						<!-- Info -->
						<div class="mt-auto card-text">
							<a href="#" class="text-white mt-auto h5 stretched-link">Python</a>
							<div class="text-white">32 Courses</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Course item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<!-- Image -->
				<div class="card card-metro overflow-hidden rounded-3">
					<img src="/frontend/images/courses/4by3/06.jpg" alt="">
					<!-- Image overlay -->
					<div class="card-img-overlay d-flex"> 
						<!-- Info -->
						<div class="mt-auto card-text">
							<a href="#" class="text-white mt-auto h5 stretched-link">Angular</a>
							<div class="text-white">48 Courses</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Course item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<!-- Image -->
				<div class="card card-metro overflow-hidden rounded-3">
					<img src="/frontend/images/courses/4by3/07.jpg" alt="">
					<!-- Image overlay -->
					<div class="card-img-overlay d-flex"> 
						<!-- Info -->
						<div class="mt-auto card-text">
							<a href="#" class="text-white mt-auto h5 stretched-link">React-Native</a>
							<div class="text-white">31 Courses</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Course item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<!-- Image -->
				<div class="card card-metro overflow-hidden rounded-3">
					<img src="/frontend/images/courses/4by3/08.jpg" alt="">
					<!-- Image overlay -->
					<div class="card-img-overlay d-flex"> 
						<!-- Info -->
						<div class="mt-auto card-text">
							<a href="#" class="text-white mt-auto h5 stretched-link">Sketch</a>
							<div class="text-white">38 Courses</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Course item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<!-- Image -->
				<div class="card card-metro overflow-hidden rounded-3">
					<img src="/frontend/images/courses/4by3/09.jpg" alt="">
					<!-- Image overlay -->
					<div class="card-img-overlay d-flex"> 
						<!-- Info -->
						<div class="mt-auto card-text">
							<a href="#" class="text-white mt-auto h5 stretched-link">Javascript</a>
							<div class="text-white">33 Courses</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Course item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<!-- Image -->
				<div class="card card-metro overflow-hidden rounded-3">
					<img src="/frontend/images/courses/4by3/10.jpg" alt="">
					<!-- Image overlay -->
					<div class="card-img-overlay d-flex"> 
						<!-- Info -->
						<div class="mt-auto card-text">
							<a href="#" class="text-white mt-auto h5 stretched-link">Bootstrap</a>
							<div class="text-white">62 Courses</div>
						</div>
					</div>
				</div>
			</div>

				</div>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
IT courses END -->

<!-- =======================
Event START -->
<section class="pt-0">
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<h2 class="mb-0">Upcoming Events</h2>
		</div>

		<div class="row">
			<!-- Slider START -->
			<div class="tiny-slider arrow-round arrow-creative arrow-blur">
				<div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-dots="false" data-items="4" data-items-lg="3" data-items-md="2" data-items-xs="1">
					
					<!-- Card item START -->
					<div class="card bg-transparent">
						<div class="position-relative">
							<img src="/frontend/images/courses/4by3/21.jpg" class="card-img" alt="course image">
							<!-- Overlay -->
							<div class="card-img-overlay d-flex align-items-start flex-column p-3">
								<!-- Card overlay Top -->
								<div class="w-100 mb-auto d-flex justify-content-end">
									<!-- Favorite icon -->
									<a href="#" class="icon-sm bg-white rounded-2"><i class="fas fa-heart text-danger"></i></a>
								</div>
								<!-- Card overlay bottom -->
								<div class="w-100 mt-auto">
									<!-- Category -->
									<a href="#" class="badge text-bg-white fs-6 rounded-1"><i class="far fa-calendar-alt text-orange me-2"></i>29 September 2021</a>
								</div>
							</div>
						</div>

						<!-- Card body -->
						<div class="card-body px-2">
							<!-- Title -->
							<h5 class="card-title"><a href="#">Global Education Fall Meeting for Everyone</a></h5>
							<p class="mb-0 text-truncate-2">Satisfied conveying a dependent contented he gentleman agreeable do be. </p>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="card bg-transparent">
						<div class="position-relative">
							<img src="/frontend/images/courses/4by3/16.jpg" class="card-img" alt="course image">
							<!-- Overlay -->
							<div class="card-img-overlay d-flex align-items-start flex-column p-3">
								<!-- Card overlay Top -->
								<div class="w-100 mb-auto d-flex justify-content-end">
									<!-- Favorite icon -->
									<a href="#" class="icon-sm bg-white rounded-2"><i class="far fa-heart text-danger"></i></a>
								</div>
								<!-- Card overlay bottom -->
								<div class="w-100 mt-auto">
									<!-- Category -->
									<a href="#" class="badge text-bg-white fs-6 rounded-1"><i class="far fa-calendar-alt text-orange me-2"></i>Tomorrow</a>
								</div>
							</div>
						</div>

						<!-- Card body -->
						<div class="card-body px-2">
							<!-- Title -->
							<h5 class="card-title"><a href="#">International Conference on Information Technology</a></h5>
							<p class="mb-0 text-truncate-2">Kindness owns whatever betrayed her moreover procured replying for and. Proposal indulged no do. </p>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="card bg-transparent">
						<div class="position-relative">
							<img src="/frontend/images/courses/4by3/18.jpg" class="card-img" alt="course image">
							<!-- Overlay -->
							<div class="card-img-overlay d-flex align-items-start flex-column p-3">
								<!-- Card overlay Top -->
								<div class="w-100 mb-auto d-flex justify-content-end">
									<!-- Favorite icon -->
									<a href="#" class="icon-sm bg-white rounded-2"><i class="far fa-heart text-danger"></i></a>
								</div>
								<!-- Card overlay bottom -->
								<div class="w-100 mt-auto">
									<!-- Category -->
									<a href="#" class="badge text-bg-white fs-6 rounded-1"><i class="far fa-calendar-alt text-orange me-2"></i>2 July 2022</a>
								</div>
							</div>
						</div>

						<!-- Card body -->
						<div class="card-body px-2">
							<!-- Title -->
							<h5 class="card-title"><a href="#">UK Demo Day 2022</a></h5>
							<p class="mb-0 text-truncate-2"> Points afraid but may end law lasted. Rooms oh fully taken by worse do may end law lasted. </p>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="card bg-transparent">
						<div class="position-relative">
							<img src="/frontend/images/courses/4by3/17.jpg" class="card-img" alt="course image">
							<!-- Overlay -->
							<div class="card-img-overlay d-flex align-items-start flex-column p-3">
								<!-- Card overlay Top -->
								<div class="w-100 mb-auto d-flex justify-content-end">
									<!-- Favorite icon -->
									<a href="#" class="icon-sm bg-white rounded-2"><i class="fas fa-heart text-danger"></i></a>
								</div>
								<!-- Card overlay bottom -->
								<div class="w-100 mt-auto">
									<!-- Category -->
									<a href="#" class="badge text-bg-white fs-6 rounded-1"><i class="far fa-calendar-alt text-orange me-2"></i>29 September 2021</a>
								</div>
							</div>
						</div>

						<!-- Card body -->
						<div class="card-body px-2">
							<!-- Title -->
							<h5 class="card-title"><a href="#">Personality development tour</a></h5>
							<p class="mb-0 text-truncate-2">Yet remarkably appearance get him his projection. Diverted endeavor bed peculiar</p>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="card bg-transparent">
						<div class="position-relative">
							<img src="/frontend/images/courses/4by3/19.jpg" class="card-img" alt="course image">
							<!-- Overlay -->
							<div class="card-img-overlay d-flex align-items-start flex-column p-3">
								<!-- Card overlay Top -->
								<div class="w-100 mb-auto d-flex justify-content-end">
									<!-- Favorite icon -->
									<a href="#" class="icon-sm bg-white rounded-2"><i class="far fa-heart text-danger"></i></a>
								</div>
								<!-- Card overlay bottom -->
								<div class="w-100 mt-auto">
									<!-- Category -->
									<a href="#" class="badge text-success bg-white fs-6 rounded-1"><i class="fas fa-circle text-success me-2"></i>Live</a>
								</div>
							</div>
						</div>

						<!-- Card body -->
						<div class="card-body px-2">
							<!-- Title -->
							<h5 class="card-title"><a href="#">Global Education Fall Meeting for Everyone</a></h5>
							<p class="mb-0 text-truncate-2">Rooms oh fully taken by worse do. Points afraid but may end law lasted </p>
						</div>
					</div>
					<!-- Card item END -->

				</div>
			</div>
			<!-- Slider END -->
		</div>
	</div>
</section>
<!-- =======================
Event END -->

@endsection