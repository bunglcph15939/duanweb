@extends('layouts.frontend.master')

@section('title', 'Lớp Học')

@section('plugin-css')
@endsection

@section('content')

    <main>

        <!-- =======================
                    Page Banner START -->
        <section class="pt-0">
            <div class="container-fluid px-0">
                <div class="card bg-blue h-100px h-md-200px rounded-0"
                    style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
                </div>
            </div>
            <div class="container mt-n4">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-transparent card-body pb-0 px-0 mt-2 mt-sm-0">
                            <div class="row d-sm-flex justify-sm-content-between mt-2 mt-md-0">
                                <!-- Avatar -->
                                <div class="col-auto">
                                    <div class="avatar avatar-xxl position-relative mt-n3">
                                        <img class="avatar-img rounded-circle border border-white border-3 shadow"
                                            src="{{ $user->avatar }}" alt="">
                                        <span
                                            class="badge text-bg-success rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-5 ms-n3 px-md-3">{{ $user->name }}</span>
                                    </div>
                                </div>
                                <!-- Profile info -->
                                <div class="col d-sm-flex justify-content-between align-items-center">
                                    @foreach ($quizResults as $quizResult)
                                        <div>
                                            <h1 class="my-1 fs-4">{{ $user->name }}</h1>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item me-3 mb-1 mb-sm-0 border border-success btn">
                                                    <span class="text-body fw-light">Quiz: </span>
                                                    <span class="h6"> {{ $quiz->title }}</span>
                                                </li>
                                                <li class="list-inline-item me-3 mb-1 mb-sm-0 border border-success btn">
                                                    <span class="text-body fw-light">Score: </span>
                                                    <span class="h6"> {{ $quizResult->score }}</span>
                                                </li>
                                                <li class="list-inline-item me-3 mb-1 mb-sm-0 border border-success btn">
                                                    <span class="text-body fw-light">Start time</span>
                                                    <span class="h6"> {{ $quizResult->start_time }}</span>
                                                </li>
                                                <li class="list-inline-item me-3 mb-1 mb-sm-0 border border-success btn">
                                                    <span class="text-body fw-light">End time </span>
                                                    <span class="h6">{{ $quizResult->end_time }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    @endforeach

                                    @if ($check_essay == true)
                                        <!-- Button -->
                                        <div class="mt-2 mt-sm-0">
                                            <span class="btn btn-outline-primary mb-0">Giáo viên đang chấm phần tự luận</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
                    Page Banner END -->

    </main>


@endsection

@section('custom-js-tag')
@endsection
@push('add-script')
@endpush
