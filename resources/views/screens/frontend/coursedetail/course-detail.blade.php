@extends('layouts.frontend.master')

@section('title', 'Lớp Học')

@section('plugin-css')
    <link rel="stylesheet" type="text/css" href="/frontend/vendor/choices/css/choices.min.css">
    <link rel="stylesheet" type="text/css" href="/frontend/vendor/aos/aos.css">
    <link rel="stylesheet" type="text/css" href="/frontend/vendor/plyr/plyr.css" />
    <link rel="stylesheet" type="text/css" href="/frontend/vendor/stepper/css/bs-stepper.min.css">'
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>'
@endsection

@section('custom-css')
    <style>
        .form-select {
            overflow: hidden;
        }
    </style>
@endsection

@section('content')

    <main>
<<<<<<< HEAD
        <section class="py-0 pb-lg-5">
            <div class="container">
                <div class="row g-3">
                    <!-- Course video START -->
                    <div class="col-12">
                        <div class="video-player rounded-3">
                            <div tabindex="0"
                                class="plyr plyr--full-ui plyr--video plyr--html5 plyr--fullscreen-enabled plyr--paused plyr--stopped plyr--pip-supported plyr--captions-enabled plyr__poster-enabled">
                                <div class="plyr__controls"><button class="plyr__controls__item plyr__control"
                                        type="button" data-plyr="play" aria-label="Play"><svg class="icon--pressed"
                                            aria-hidden="true" focusable="false">
                                            <use xlink:href="#plyr-pause"></use>
                                        </svg><svg class="icon--not-pressed" aria-hidden="true" focusable="false">
                                            <use xlink:href="#plyr-play"></use>
                                        </svg><span class="label--pressed plyr__sr-only">Pause</span><span
                                            class="label--not-pressed plyr__sr-only">Play</span></button>
                                    <div class="plyr__controls__item plyr__progress__container">
                                        <div class="plyr__progress"><input data-plyr="seek" type="range" min="0"
                                                max="100" step="0.01" value="0" autocomplete="off"
                                                role="slider" aria-label="Seek" aria-valuemin="0" aria-valuemax="0"
                                                aria-valuenow="0" id="plyr-seek-6032" aria-valuetext="00:00 of 00:00"
                                                style="--value:0%;" seek-value="87.93455795408192"><progress
                                                class="plyr__progress__buffer" min="0" max="100" value="0"
                                                role="progressbar" aria-hidden="true">% buffered</progress><span
                                                class="plyr__tooltip">00:00</span></div>
                                    </div>
                                    <div class="plyr__controls__item plyr__time--current plyr__time"
                                        aria-label="Current time">00:00</div>
                                    <div class="plyr__controls__item plyr__volume"><button type="button"
                                            class="plyr__control" data-plyr="mute"><svg class="icon--pressed"
                                                aria-hidden="true" focusable="false">
                                                <use xlink:href="#plyr-muted"></use>
                                            </svg><svg class="icon--not-pressed" aria-hidden="true" focusable="false">
                                                <use xlink:href="#plyr-volume"></use>
                                            </svg><span class="label--pressed plyr__sr-only">Unmute</span><span
                                                class="label--not-pressed plyr__sr-only">Mute</span></button><input
                                            data-plyr="volume" type="range" min="0" max="1" step="0.05"
                                            value="1" autocomplete="off" role="slider" aria-label="Volume"
                                            aria-valuemin="0" aria-valuemax="100" aria-valuenow="100" id="plyr-volume-6032"
                                            aria-valuetext="100.0%" style="--value:100%;"></div><button
                                        class="plyr__controls__item plyr__control" type="button" data-plyr="captions"><svg
                                            class="icon--pressed" aria-hidden="true" focusable="false">
                                            <use xlink:href="#plyr-captions-on"></use>
                                        </svg><svg class="icon--not-pressed" aria-hidden="true" focusable="false">
                                            <use xlink:href="#plyr-captions-off"></use>
                                        </svg><span class="label--pressed plyr__sr-only">Disable captions</span><span
                                            class="label--not-pressed plyr__sr-only">Enable captions</span></button>
                                    <div class="plyr__controls__item plyr__menu"><button aria-haspopup="true"
                                            aria-controls="plyr-settings-6032" aria-expanded="false" type="button"
                                            class="plyr__control" data-plyr="settings"><svg aria-hidden="true"
                                                focusable="false">
                                                <use xlink:href="#plyr-settings"></use>
                                            </svg><span class="plyr__sr-only">Settings</span></button>
                                        <div class="plyr__menu__container" id="plyr-settings-6032" hidden="">
                                            <div>
                                                <div id="plyr-settings-6032-home">
                                                    <div role="menu"><button data-plyr="settings" type="button"
                                                            class="plyr__control plyr__control--forward" role="menuitem"
                                                            aria-haspopup="true"><span>Captions<span
                                                                    class="plyr__menu__value">Disabled</span></span></button><button
                                                            data-plyr="settings" type="button"
                                                            class="plyr__control plyr__control--forward" role="menuitem"
                                                            aria-haspopup="true"><span>Quality<span
                                                                    class="plyr__menu__value">720p</span></span></button><button
                                                            data-plyr="settings" type="button"
                                                            class="plyr__control plyr__control--forward" role="menuitem"
                                                            aria-haspopup="true"><span>Speed<span
                                                                    class="plyr__menu__value">Normal</span></span></button>
                                                    </div>
                                                </div>
                                                <div id="plyr-settings-6032-captions" hidden=""><button
                                                        type="button" class="plyr__control plyr__control--back"><span
                                                            aria-hidden="true">Captions</span><span
                                                            class="plyr__sr-only">Go back to previous menu</span></button>
                                                    <div role="menu"><button data-plyr="language" type="button"
                                                            role="menuitemradio" class="plyr__control"
                                                            aria-checked="true"
                                                            value="-1"><span>Disabled</span></button><button
                                                            data-plyr="language" type="button" role="menuitemradio"
                                                            class="plyr__control" aria-checked="false"
                                                            value="0"><span>English<span
                                                                    class="plyr__menu__value"><span
                                                                        class="plyr__badge">EN</span></span></span></button><button
                                                            data-plyr="language" type="button" role="menuitemradio"
                                                            class="plyr__control" aria-checked="false"
                                                            value="1"><span>French<span
                                                                    class="plyr__menu__value"><span
                                                                        class="plyr__badge">FR</span></span></span></button>
                                                    </div>
                                                </div>
                                                <div id="plyr-settings-6032-quality" hidden=""><button
                                                        type="button" class="plyr__control plyr__control--back"><span
                                                            aria-hidden="true">Quality</span><span
                                                            class="plyr__sr-only">Go back to previous menu</span></button>
                                                    <div role="menu"><button data-plyr="quality" type="button"
                                                            role="menuitemradio" class="plyr__control"
                                                            aria-checked="false" value="1080"><span>1080p<span
                                                                    class="plyr__menu__value"><span
                                                                        class="plyr__badge">HD</span></span></span></button><button
                                                            data-plyr="quality" type="button" role="menuitemradio"
                                                            class="plyr__control" aria-checked="true"
                                                            value="720"><span>720p<span class="plyr__menu__value"><span
                                                                        class="plyr__badge">HD</span></span></span></button><button
                                                            data-plyr="quality" type="button" role="menuitemradio"
                                                            class="plyr__control" aria-checked="false"
                                                            value="360"><span>360p</span></button></div>
                                                </div>
                                                <div id="plyr-settings-6032-speed" hidden=""><button type="button"
                                                        class="plyr__control plyr__control--back"><span
                                                            aria-hidden="true">Speed</span><span class="plyr__sr-only">Go
                                                            back to previous menu</span></button>
                                                    <div role="menu"><button data-plyr="speed" type="button"
                                                            role="menuitemradio" class="plyr__control"
                                                            aria-checked="false"
                                                            value="0.5"><span>0.5×</span></button><button
                                                            data-plyr="speed" type="button" role="menuitemradio"
                                                            class="plyr__control" aria-checked="false"
                                                            value="0.75"><span>0.75×</span></button><button
                                                            data-plyr="speed" type="button" role="menuitemradio"
                                                            class="plyr__control" aria-checked="true"
                                                            value="1"><span>Normal</span></button><button
                                                            data-plyr="speed" type="button" role="menuitemradio"
                                                            class="plyr__control" aria-checked="false"
                                                            value="1.25"><span>1.25×</span></button><button
                                                            data-plyr="speed" type="button" role="menuitemradio"
                                                            class="plyr__control" aria-checked="false"
                                                            value="1.5"><span>1.5×</span></button><button
                                                            data-plyr="speed" type="button" role="menuitemradio"
                                                            class="plyr__control" aria-checked="false"
                                                            value="1.75"><span>1.75×</span></button><button
                                                            data-plyr="speed" type="button" role="menuitemradio"
                                                            class="plyr__control" aria-checked="false"
                                                            value="2"><span>2×</span></button><button
                                                            data-plyr="speed" type="button" role="menuitemradio"
                                                            class="plyr__control" aria-checked="false"
                                                            value="4"><span>4×</span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><button class="plyr__controls__item plyr__control" type="button"
                                        data-plyr="pip"><svg aria-hidden="true" focusable="false">
                                            <use xlink:href="#plyr-pip"></use>
                                        </svg><span class="plyr__sr-only">PIP</span></button><button
                                        class="plyr__controls__item plyr__control" type="button"
                                        data-plyr="fullscreen"><svg class="icon--pressed" aria-hidden="true"
                                            focusable="false">
                                            <use xlink:href="#plyr-exit-fullscreen"></use>
                                        </svg><svg class="icon--not-pressed" aria-hidden="true" focusable="false">
                                            <use xlink:href="#plyr-enter-fullscreen"></use>
                                        </svg><span class="label--pressed plyr__sr-only">Exit fullscreen</span><span
                                            class="label--not-pressed plyr__sr-only">Enter fullscreen</span></button>
                                </div>
                                <div class="plyr__video-wrapper"><video crossorigin="anonymous" playsinline=""
                                        poster="/fontend/images/videos/poster.jpg" src="/fontend/images/videos/720p.mp4"
                                        data-poster="/fontend/images/videos/poster.jpg">
                                        <source src="/fontend/images/videos/360p.mp4" type="video/mp4" size="360">
                                        <source src="/fontend/images/videos/720p.mp4" type="video/mp4" size="720">
                                        <source src="/fontend/images/videos/1080p.mp4" type="video/mp4" size="1080">
                                        <!-- Caption files -->
                                        <track kind="captions" label="English" srclang="en"
                                            src="/fontend/images/videos/en.vtt" default="">
                                        <track kind="captions" label="French" srclang="fr"
                                            src="/fontend/images/videos/fr.vtt">
                                    </video>
                                    <div class="plyr__poster"
                                        style="background-image: url(&quot;/fontend/images/videos/poster.jpg&quot;);">
                                    </div>
                                </div>
                                <div class="plyr__captions"></div><button type="button"
                                    class="plyr__control plyr__control--overlaid" data-plyr="play" aria-label="Play"><svg
                                        aria-hidden="true" focusable="false">
                                        <use xlink:href="#plyr-play"></use>
                                    </svg><span class="plyr__sr-only">Play</span></button>
                            </div>
                        </div>
                    </div>
                    <!-- Course video END -->

                    <!-- Playlist responsive toggler START -->
                    <div class="col-12 d-lg-none">
                        <button class="btn btn-primary mb-3" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                            <i class="bi bi-camera-video me-1"></i> Playlist
                        </button>
                    </div>
                    <!-- Playlist responsive toggler END -->
                </div>
            </div>
        </section>
        <!-- =======================
                                                                                                Page banner video END -->

        <!-- =======================
                                                                                                Page content START -->
        <section class="pt-0">
            <div class="container">
                <div class="row g-lg-5">

                    <!-- Main content START -->
                    <div class="col-lg-8">
                        <div class="row g-4">
                            @include('screens.frontend.coursedetail.components.do-quizzes')
                        </div>
                    </div>
                    <!-- Main content END -->

                    <!-- Right sidebar START -->
                    <div class="col-lg-4">
                        <!-- Responsive offcanvas body START -->
                        <div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasSidebar"
                            aria-labelledby="offcanvasSidebarLabel">
                            <div class="offcanvas-header bg-dark">
                                <h5 class="offcanvas-title text-white" id="offcanvasSidebarLabel">Course playlist</h5>
                                <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="offcanvas"
                                    data-bs-target="#offcanvasSidebar" aria-label="Close"><i
                                        class="bi bi-x-lg"></i></button>
                            </div>
                            <div class="offcanvas-body p-3 p-lg-0">
                                <div class="col-12">
                                    <!-- Accordion START -->
                                    <div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
                                        <!-- Item -->
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header font-base" id="heading-1">
                                                <a class="accordion-button fw-bold rounded d-block collapsed"
                                                    href="#collapse-1" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-1" aria-expanded="false"
                                                    aria-controls="collapse-1">
                                                    <span class="mb-0">Introduction of Digital Marketing</span>
                                                    <span class="small d-block mt-1">(3 Lectures)</span>
                                                </a>
                                            </h6>
                                            <div id="collapse-1" class="accordion-collapse collapse"
                                                aria-labelledby="heading-1" data-bs-parent="#accordionExample2"
                                                style="">
                                                <div class="accordion-body mt-3">
                                                    <div class="vstack gap-3">

                                                        <!-- Progress bar -->
                                                        <div class="overflow-hidden">
                                                            <div class="d-flex justify-content-between">
                                                                <p class="mb-1 h6">1/3 Completed</p>
                                                                <h6 class="mb-1 text-end">30%</h6>
                                                            </div>
                                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                                <div class="progress-bar bg-primary aos aos-init aos-animate"
                                                                    role="progressbar" data-aos="slide-right"
                                                                    data-aos-delay="200" data-aos-duration="1000"
                                                                    data-aos-easing="ease-in-out" style="width: 30%"
                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                    aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Introduction</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">2m 10s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="p-2 bg-success bg-opacity-10 rounded-3">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div class="position-relative d-flex align-items-center">
                                                                    <a href="#"
                                                                        class="btn btn-success btn-round btn-sm mb-0 stretched-link position-static">
                                                                        <i class="fas fa-play me-0"></i>
                                                                    </a>
                                                                    <span
                                                                        class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">
                                                                        What is Digital Marketing What is Digital
                                                                        Marketing</span>
                                                                </div>
                                                                <p class="mb-0 text-truncate">Playing</p>
                                                            </div>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Type
                                                                    of Digital Marketing</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">18m 10s</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header font-base" id="heading-2">
                                                <a class="accordion-button fw-bold rounded d-block collapsed"
                                                    href="#collapse-2" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-2" aria-expanded="false"
                                                    aria-controls="collapse-2">
                                                    <span class="mb-0">Customer Life cycle</span>
                                                    <span class="small d-block mt-1">(3 Lectures)</span>
                                                </a>
                                            </h6>
                                            <div id="collapse-2" class="accordion-collapse collapse"
                                                aria-labelledby="heading-2" data-bs-parent="#accordionExample2"
                                                style="">
                                                <!-- Accordion body START -->
                                                <div class="accordion-body mt-3">
                                                    <div class="vstack gap-3">
                                                        <!-- Progress bar -->
                                                        <div class="overflow-hidden">
                                                            <div class="d-flex justify-content-between">
                                                                <p class="mb-1 h6">0/3 Completed</p>
                                                                <h6 class="mb-1 text-end">0%</h6>
                                                            </div>
                                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                                <div class="progress-bar bg-primary aos aos-init aos-animate"
                                                                    role="progressbar" data-aos="slide-right"
                                                                    data-aos-delay="200" data-aos-duration="1000"
                                                                    data-aos-easing="ease-in-out" style="width: 0%"
                                                                    aria-valuenow="0" aria-valuemin="0"
                                                                    aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Introduction</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">2m 10s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">
                                                                    What is Digital Marketing What is Digital
                                                                    Marketing</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">15m 10s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-light btn-round btn-sm mb-0 stretched-link position-static"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#coursePremium">
                                                                    <i class="bi bi-lock-fill"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Type
                                                                    of Digital Marketing</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">18m 10s</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Accordion body END -->
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header font-base" id="heading-5">
                                                <a class="accordion-button fw-bold rounded d-block collapsed"
                                                    href="#collapse-5" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-5" aria-expanded="false"
                                                    aria-controls="collapse-5">
                                                    <span class="mb-0">What is Search Engine Optimization(SEO)</span>
                                                    <span class="small d-block mt-1">(6 Lectures)</span>
                                                </a>
                                            </h6>
                                            <div id="collapse-5" class="accordion-collapse collapse"
                                                aria-labelledby="heading-5" data-bs-parent="#accordionExample2"
                                                style="">
                                                <!-- Accordion body START -->
                                                <div class="accordion-body mt-3">
                                                    <div class="vstack gap-3">

                                                        <!-- Progress bar -->
                                                        <div class="overflow-hidden">
                                                            <div class="d-flex justify-content-between">
                                                                <p class="mb-1 h6">0/6 Completed</p>
                                                                <h6 class="mb-1 text-end">0%</h6>
                                                            </div>
                                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                                <div class="progress-bar bg-primary aos aos-init aos-animate"
                                                                    role="progressbar" data-aos="slide-right"
                                                                    data-aos-delay="200" data-aos-duration="1000"
                                                                    data-aos-easing="ease-in-out" style="width: 0%"
                                                                    aria-valuenow="0" aria-valuemin="0"
                                                                    aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Introduction</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">2m 10s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">How
                                                                    to SEO Optimise Your Homepage</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">15m 00s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">How
                                                                    to Write Title Tags Search Engines Love</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">28m 10s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-light btn-round btn-sm mb-0 stretched-link position-static"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#coursePremium">
                                                                    <i class="bi bi-lock-fill"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">SEO
                                                                    Keyword Planning</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">38m 22s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-light btn-round btn-sm mb-0 stretched-link position-static"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#coursePremium">
                                                                    <i class="bi bi-lock-fill"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Internal
                                                                    and External Links</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">12m 10s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-light btn-round btn-sm mb-0 stretched-link position-static"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#coursePremium">
                                                                    <i class="bi bi-lock-fill"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Measuring
                                                                    SEO Effectiveness</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">35m 10s</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Accordion body END -->
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header font-base" id="heading-6">
                                                <a class="accordion-button fw-bold rounded d-block collapsed"
                                                    href="#collapse-6" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-6" aria-expanded="false"
                                                    aria-controls="collapse-6">
                                                    <span class="mb-0">YouTube Marketing</span>
                                                    <span class="small d-block mt-1">(5 Lectures)</span>
                                                </a>
                                            </h6>
                                            <div id="collapse-6" class="accordion-collapse collapse"
                                                aria-labelledby="heading-6" data-bs-parent="#accordionExample2"
                                                style="">
                                                <!-- Accordion body START -->
                                                <div class="accordion-body mt-3">
                                                    <div class="vstack gap-3">
                                                        <!-- Progress bar -->
                                                        <div class="overflow-hidden">
                                                            <div class="d-flex justify-content-between">
                                                                <p class="mb-1 h6">0/5 Completed</p>
                                                                <h6 class="mb-1 text-end">0%</h6>
                                                            </div>
                                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                                <div class="progress-bar bg-primary aos aos-init aos-animate"
                                                                    role="progressbar" data-aos="slide-right"
                                                                    data-aos-delay="200" data-aos-duration="1000"
                                                                    data-aos-easing="ease-in-out" style="width: 0%"
                                                                    aria-valuenow="0" aria-valuemin="0"
                                                                    aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Video
                                                                    Flow</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">25m 5s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Webmaster
                                                                    Tool</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">15m 20s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Featured
                                                                    Contents on Channel</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">32m 20s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-light btn-round btn-sm mb-0 stretched-link position-static"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#coursePremium">
                                                                    <i class="bi bi-lock-fill"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Managing
                                                                    Comments</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">20m 20s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-light btn-round btn-sm mb-0 stretched-link position-static"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#coursePremium">
                                                                    <i class="bi bi-lock-fill"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Channel
                                                                    Analytics</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">18m 20s</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Accordion body END -->
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header font-base" id="heading-8">
                                                <a class="accordion-button fw-bold rounded d-block" href="#collapse-8"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-8"
                                                    aria-expanded="true" aria-controls="collapse-8">
                                                    <span class="mb-0">Why SEO</span>
                                                    <span class="small d-block mt-1">(8 Lectures)</span>
                                                </a>
                                            </h6>
                                            <div id="collapse-8" class="accordion-collapse collapse show"
                                                aria-labelledby="heading-8" data-bs-parent="#accordionExample2"
                                                style="">
                                                <!-- Accordion body START -->
                                                <div class="accordion-body mt-3">
                                                    <div class="vstack gap-3">

                                                        <!-- Progress bar -->
                                                        <div class="overflow-hidden">
                                                            <div class="d-flex justify-content-between">
                                                                <p class="mb-1 h6">0/8 Completed</p>
                                                                <h6 class="mb-1 text-end">0%</h6>
                                                            </div>
                                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                                <div class="progress-bar bg-primary aos aos-init aos-animate"
                                                                    role="progressbar" data-aos="slide-right"
                                                                    data-aos-delay="200" data-aos-duration="1000"
                                                                    data-aos-easing="ease-in-out" style="width: 0%"
                                                                    aria-valuenow="0" aria-valuemin="0"
                                                                    aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Understanding
                                                                    SEO</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">20m 20s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">On-Page
                                                                    SEO</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">5m 20s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Local
                                                                    SEO</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">16m 20s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-light btn-round btn-sm mb-0 stretched-link position-static"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#coursePremium">
                                                                    <i class="bi bi-lock-fill"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Measuring
                                                                    SEO Effectiveness</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">12m 20s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-light btn-round btn-sm mb-0 stretched-link position-static"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#coursePremium">
                                                                    <i class="bi bi-lock-fill"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">SEO
                                                                    Keyword Planning</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">36m 12s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-light btn-round btn-sm mb-0 stretched-link position-static"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#coursePremium">
                                                                    <i class="bi bi-lock-fill"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Keywords
                                                                    in Blog and Articles</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">15m 20s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-light btn-round btn-sm mb-0 stretched-link position-static"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#coursePremium">
                                                                    <i class="bi bi-lock-fill"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Mobile
                                                                    SEO</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">15m 00s</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Accordion body END -->
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header font-base" id="heading-9">
                                                <a class="accordion-button fw-bold collapsed rounded d-block"
                                                    href="#collapse-9" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-9" aria-expanded="false"
                                                    aria-controls="collapse-9">
                                                    <span class="mb-0">Google tag manager</span>
                                                    <span class="small d-block mt-1">(4 Lectures)</span>
                                                </a>
                                            </h6>
                                            <div id="collapse-9" class="accordion-collapse collapse"
                                                aria-labelledby="heading-9" data-bs-parent="#accordionExample2">
                                                <!-- Accordion body START -->
                                                <div class="accordion-body mt-3">
                                                    <div class="vstack gap-3">

                                                        <!-- Progress bar -->
                                                        <div class="overflow-hidden">
                                                            <div class="d-flex justify-content-between">
                                                                <p class="mb-1 h6">0/4 Completed</p>
                                                                <h6 class="mb-1 text-end">0%</h6>
                                                            </div>
                                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                                <div class="progress-bar bg-primary aos aos-init aos-animate"
                                                                    role="progressbar" data-aos="slide-right"
                                                                    data-aos-delay="200" data-aos-duration="1000"
                                                                    data-aos-easing="ease-in-out" style="width: 0%"
                                                                    aria-valuenow="0" aria-valuemin="0"
                                                                    aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">G+
                                                                    Pages Ranks Higher</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">20m 20s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Adding
                                                                    Contact Links</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">5m 20s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Google
                                                                    Hangouts</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">16m 20s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-light btn-round btn-sm mb-0 stretched-link position-static"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#coursePremium">
                                                                    <i class="bi bi-lock-fill"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Google
                                                                    Local Business</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">36m 12s</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Accordion body END -->
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="accordion-item mb-0">
                                            <h6 class="accordion-header font-base" id="heading-10">
                                                <a class="accordion-button fw-bold collapsed rounded d-block"
                                                    href="#collapse-10" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-10" aria-expanded="false"
                                                    aria-controls="collapse-10">
                                                    <span class="mb-0">Integration with Website</span>
                                                    <span class="small d-block mt-1">(3 Lectures)</span>
                                                </a>
                                            </h6>
                                            <div id="collapse-10" class="accordion-collapse collapse"
                                                aria-labelledby="heading-10" data-bs-parent="#accordionExample2">
                                                <!-- Accordion body START -->
                                                <div class="accordion-body mt-3">
                                                    <div class="vstack gap-3">

                                                        <!-- Progress bar -->
                                                        <div class="overflow-hidden">
                                                            <div class="d-flex justify-content-between">
                                                                <p class="mb-1 h6">0/3 Completed</p>
                                                                <h6 class="mb-1 text-end">0%</h6>
                                                            </div>
                                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                                <div class="progress-bar bg-primary aos aos-init aos-animate"
                                                                    role="progressbar" data-aos="slide-right"
                                                                    data-aos-delay="200" data-aos-duration="1000"
                                                                    data-aos-easing="ease-in-out" style="width: 0%"
                                                                    aria-valuenow="0" aria-valuemin="0"
                                                                    aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Creating
                                                                    LinkedIn Account</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">13m 20s</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">Advance
                                                                    Searching</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">31m 20ss</p>
                                                        </div>

                                                        <!-- Course lecture -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative d-flex align-items-center">
                                                                <a href="#"
                                                                    class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                    <i class="fas fa-play me-0"></i>
                                                                </a>
                                                                <span
                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">LinkedIn
                                                                    Mobile App</span>
                                                            </div>
                                                            <p class="mb-0 text-truncate">25m 20s</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Accordion body END -->
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Accordion END -->
                                </div>
                            </div>
                        </div>
                        <!-- Responsive offcanvas body END -->

                        <!-- Tags START -->
                        <div class="mt-4">
                            <h4 class="mb-3">Tags</h4>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                        href="#">blog</a> </li>
                                <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                        href="#">business</a> </li>
                                <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                        href="#">theme</a> </li>
                                <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                        href="#">bootstrap</a> </li>
                                <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">data
                                        science</a> </li>
                                <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">web
                                        development</a> </li>
                                <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                        href="#">tips</a> </li>
                                <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                        href="#">machine learning</a> </li>
                            </ul>
                        </div>
                        <!-- Tags END -->
                    </div>
                    <!-- Right sidebar END -->

                </div><!-- Row END -->
=======

        <section class="pt-0">
            <div class="container">
                <a class="btn btn-primary" href="{{url()->previous()}}">
                    quay lại << 
                </a>
                @include('screens.frontend.coursedetail.components.do-quizzes')

>>>>>>> f54e6ae5b62d50b0de839897b29534a9c39f5c9b
            </div>
        </section>
    </main>



@endsection

@section('custom-js-tag')
    {{-- cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Vendors -->
    <script src="/frontend/vendor/aos/aos.js"></script>
    <script src="/frontend/vendor/plyr/plyr.js"></script>
    <!-- Vendors -->
    <script src="/frontend/vendor/stepper/js/bs-stepper.min.js"></script>
@endsection

@push('add-script')
    <script>
        function score() {
            Swal.fire({
                title: 'Bạn muốn gửi kết quả ngay bây giờ?',
                text: "Bạn gửi xong sẽ không được làm lại!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đúng tôi muốn gửi'
            }).then((result) => {
                post_score()
            })
        }


        const startMinutes = '{{ $quiz->duration }}'
        let time = startMinutes * 60
        const t = setInterval(() => {
            const minutes = Math.floor(time / 60)
            const seconds = time % 60
            const result = `${parseInt(minutes)}:${parseInt(seconds)}`
            document.getElementById('time-left').innerHTML = result
            time--
            if (minutes === 0 && seconds === 0) {
                clearInterval(t)
                post_score()
            }
        }, 1000)


        function post_score() {
<<<<<<< HEAD
            
=======

>>>>>>> f54e6ae5b62d50b0de839897b29534a9c39f5c9b
            const formData = new FormData(document.querySelector('#form-score'));
            axios.post('{{ route('frontend.doquiz') }}', formData)
                .then(res =>
                    Swal.fire(
                        'Bạn đã gửi đáp án!',
                        'Chọn đễ chuyển sang trang kết quả nhận được!',
                        'success'
                    )
                    .then(val => {
                        let _url = "{{ route('frontend.result', ['quiz_id' => ':quiz_id']) }}"
                        console.log(res);
                        _url = _url.replace(":quiz_id", res.data)
                        window.location.assign(_url)
                    })
                )
                .catch(res => console.log(res))
        }
    </script>
@endpush
