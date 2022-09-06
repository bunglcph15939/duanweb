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
				<h4>Lớp Học Của Bạn</h4>
			</div>
		</div>

		<div class="row g-4">
			<!-- Slider START -->
			<div class="tiny-slider arrow-round arrow-creative arrow-blur arrow-hover">
				<div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-dots="false" data-items-xl="3" data-items-md="2" data-items-xs="1">
					@foreach ($user->classrooms as $classroom)
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card overflow-hidden">
							<div class="position-relative">
								<!-- Image -->
								<img class="card-img-top" src="/frontend/images/courses/4by3/08.jpg" alt="Card image">
								<!-- Overlay -->
								<div class="bg-overlay bg-dark opacity-4"></div>
								<div class="card-img-overlay d-flex align-items-start flex-column">
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto d-inline-flex">
										<div class="d-flex align-items-center bg-white p-2 rounded-2">
											<!-- Avatar -->
											<div class="avatar avatar-sm me-2">
												<img class="avatar-img rounded-1" src="{{ getPathImage($classroom->author->avatar) }}" alt="avatar">
											</div>
											<!-- Avatar info -->
											<div>
												<h6 class="mb-0"><a class="text-dark">{{ $classroom->author->name }}</a></h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Card body -->
							<div class="card-body bg-light">
								<!-- Badge and icon -->
								<div class="d-flex justify-content-between mb-3">
									<div class="hstack gap-2">
										<li class="list-inline-item d-flex justify-content-center align-items-center">
											<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i>
											</div>
											<span class="text-dark ms-2">{{ $classroom->users->count() }}</span>
										</li>
									</div>
								</div>
								<!-- Title -->
								<h5 class="card-title"><a href="{{ route('classroom', $classroom->id) }}" class="Stretched-link">{{ $classroom->name }}</a></h5>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<!-- Slider END -->
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
				<h4>Khóa Học Của Bạn</h4>
			</div>
		</div>

		<div class="row g-4">
			<div class="tiny-slider arrow-round arrow-creative arrow-blur arrow-hover">
				<div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-dots="false" data-items-xl="4" data-items-md="3" data-items-xs="2">
					@foreach ($user->courses as $course)
					<!-- Course item -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<!-- Image -->
						<div class="card card-metro overflow-hidden rounded-3">
							<img src="{{ getPathImage($course->thumbnail) }}" alt="">
							<!-- Image overlay -->
							<div class="card-img-overlay d-flex"> 
								<!-- Info -->
								<div class="mt-auto card-text">
									<a href="{{ route('course-learn', ['id' => $course->id, 'slug' => $course->slug]) }}" class="text-white mt-auto h5 stretched-link">{{ $course->title }}</a>
									<div class="text-white">{{ $course->lessons->count() }} bài học</div>
								</div>
							</div>
						</div>
						<div class="progress progress-sm bg-primary bg-opacity-10">
							<div class="progress-bar bg-primary" role="progressbar" style="width: {{ $course->getProgress() }}%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
								<span class="progress-percent-simple ms-auto">{{ $course->getProgress() }}%</span>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
IT courses END -->

<!-- =======================
Blog START-->
<section class="pt-0 pt-md-5">
	<div class="container">
		<!-- Title -->
		<div class="row mb-3 mb-sm-4">
			<div class="col-12 mx-auto text-center">
				<h4>
					<span class="position-relative z-index-9">Bài Viết</span>
					<span class="position-relative z-index-1">Mới
						<!-- SVG START -->
						<span class="position-absolute top-50 start-50 translate-middle z-index-n1 d-none d-sm-block">
							<svg class="fill-orange" width="250" height="86" viewBox="0 0 303 86">
								<path d="M288.197 19.3999C281.599 15.6998 273.654 13.03 265.424 10.926C256.533 8.64794 247.263 6.92124 237.946 5.4267C218.461 2.249 198.384 0.406219 178.237 0.0579769C158.609 -0.275755 138.888 0.8125 119.733 3.49686C108.17 5.10748 96.8189 7.2985 85.8466 10.0264C81.4955 11.0131 77.168 12.0723 72.9115 13.2331C56.382 17.7022 40.5146 23.4192 26.3972 30.355C12.9182 36.9861 0.716203 46.0404 0.999971 57.2131C1.14185 62.2772 4.16871 67.051 9.98595 70.693C15.4721 74.1319 22.6846 76.3809 29.9679 78.0206C38.7647 80.0085 48.0345 81.3289 57.257 82.4026C67.1179 83.5489 77.0734 84.2889 87.0762 84.6807C107.413 85.4642 127.892 84.7968 148.063 83.0266C168.399 81.2418 188.429 78.3543 208.127 74.8139C227.399 71.3459 246.436 67.2976 265.141 62.8285C278.927 59.5348 294.227 55.0802 300.446 46.2435C307.091 36.812 299.949 25.973 288.197 19.3999ZM298.862 46.7804C295.48 50.9593 289.592 54.0935 283.207 56.4876C276.633 58.9543 269.468 60.7391 262.279 62.4077C252.915 64.5843 243.503 66.6737 234.044 68.6616C215.174 72.6083 196.019 76.0762 176.534 78.7171C157.191 81.3289 137.54 83.0991 117.747 83.6505C97.9304 84.2019 77.9957 83.5634 58.4866 81.3289C49.5243 80.2987 40.5146 79.0363 31.907 77.1645C24.5764 75.5829 17.3403 73.4499 11.6649 70.1126C5.49296 66.4561 2.15869 61.5226 2.22963 56.2555C2.32422 50.7417 5.72943 45.489 10.9555 41.0489C16.1106 36.6959 22.7319 33.0974 29.6842 29.8472C36.2108 26.8145 43.0213 24.0141 50.0918 21.4748C48.4601 22.1278 46.8521 22.7953 45.2678 23.4772C37.7716 26.684 30.4409 30.1664 23.9615 34.1131C17.695 37.9438 12.1615 42.3839 9.30018 47.5785C6.55709 52.5554 6.10779 58.1853 9.77313 63.0462C13.0838 67.4427 19.303 70.7655 26.279 72.8985C34.6974 75.4813 44.2036 76.2358 53.497 76.381C63.8309 76.5406 74.2357 76.1488 84.5696 75.757C95.0454 75.3652 105.497 74.7993 115.926 74.0884C136.783 72.6664 157.545 70.6204 178.071 67.9361C187.956 66.6447 197.817 65.2227 207.583 63.6411C208.269 63.525 208.718 62.3642 208.009 62.4658C188.358 65.629 168.447 68.2118 148.394 70.2142C128.435 72.202 108.312 73.624 88.1404 74.4366C78.0666 74.8429 67.9219 75.1911 57.8008 75.2056C48.3419 75.2201 38.6465 74.7558 29.8261 72.5068C22.5427 70.6785 15.8032 67.6169 11.8777 63.3509C7.33745 58.4175 7.52663 52.4393 10.6481 47.2302C13.7695 41.9776 19.7523 37.581 26.3263 33.8084C32.7583 30.1083 39.8289 26.7855 47.1359 23.7529C59.2197 18.7034 72.2257 14.4955 85.7756 11.1292C90.7889 9.99737 95.8494 8.98167 100.981 8.08205C117.96 5.07846 135.553 3.32274 153.218 2.88744C161.754 2.66979 170.315 2.78587 178.851 3.19215C179.537 3.22117 180.128 2.06037 179.277 2.01684C167.69 1.45094 156.032 1.47996 144.468 2.06037C145.745 1.97331 146.999 1.88625 148.275 1.8137C167.879 0.6674 187.696 1.04466 207.157 2.78587C226.075 4.46904 245.111 7.25497 262.894 11.608C278.714 15.4677 294.085 21.6635 299.808 32.0092C302.456 36.812 302.574 42.1662 298.862 46.7804Z"/>
							</svg>
						</span>
						<!-- SVG END -->
					</span>
				</h4>
			</div>
		</div>

		<div class="row g-4 justify-content-between">

			<div class="col-md-5">
				<!-- Card START -->
				<div class="card bg-transparent">
					<!-- Image -->
					<img src="/frontend/images/event/18.jpg" class="card-img" alt="">

					<!-- Card body -->
					<div class="card-body px-3">
						<h4><a href="#" class="stretched-link">Around the web: 20 fabulous infographics about business</a></h4>
						<p>Projection favorable Mrs can be projecting own. Thirty it matter enable become admire in giving.</p>
						<div class="d-flex justify-content-between">
							<h6>Lori Stevens</h6>
							<span>29 Jan 2022</span>
						</div>
					</div>
				</div>
				<!-- Card END -->
			</div>

			<div class="col-md-7">
				<!-- Card START -->
				<div class="card bg-transparent">
					<div class="row align-items-center">
						<div class="col-sm-4 col-lg-3">
							<div class="bg-dark text-center p-3 rounded-2 mb-2 mb-sm-0">
								<h2 class="text-white">15</h2>
								<span class="text-white">Jan 2022</span>
							</div>
						</div>
						<div class="col-sm-8 col-lg-9">
							<div class="card-body p-0">
								<h5 class="card-title"><a href="#" class="stretched-link">12 worst types of business accounts you follow on Twitter</a></h5>
								<p class="mb-0">Jacqueline Miller</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Card END -->

				<hr class="my-4">

				<!-- Card START -->
				<div class="card bg-transparent">
					<div class="row align-items-center">
						<div class="col-sm-4 col-lg-3">
							<div class="bg-dark text-center p-3 rounded-2 mb-2 mb-sm-0">
								<h2 class="text-white">12</h2>
								<span class="text-white">Jan 2022</span>
							</div>
						</div>
						<div class="col-sm-8 col-lg-9">
							<div class="card-body p-0">
								<h5 class="card-title"><a href="#" class="stretched-link">How 10 worst business fails of all time could have been prevented</a></h5>
								<p class="mb-0">Frances Guerrero</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Card END -->

				<hr class="my-4">

				<!-- Card START -->
				<div class="card bg-transparent">
					<div class="row align-items-center">
						<div class="col-sm-4 col-lg-3">
							<div class="bg-dark text-center p-3 rounded-2 mb-2 mb-sm-0">
								<h2 class="text-white">09</h2>
								<span class="text-white">Jan 2022</span>
							</div>
						</div>
						<div class="col-sm-8 col-lg-9">
							<div class="card-body p-0">
								<h5 class="card-title"><a href="#" class="stretched-link">Never underestimate the influence of social media</a></h5>
								<p class="mb-0">Louis Ferguson</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Card END -->
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Blog START-->

@endsection