@extends('layouts.backend.master')

@section('title', 'Trang Quản Trị')

@section('content')

<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">Báo cáo theo khóa học</h3>
            {{-- <a class="btn btn-success" href="{{route('report.report_user')}}">Report User</a> --}}
        </div>
    </div>
    <div class="card-body">
        <!--begin::Example-->
        <div class="example mb-10">

            <div class="example-preview">

                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Progress</th>
                            <th scope="col">courses</th>
                            <th scope="col">Enrolled date</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($course->users as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->name}}</td>
                            <td>
                                <div class="progress"data-toggle="tooltip" data-theme="dark" title="60%">
                                    <div class="progress-bar"  role="progressbar" style="width: 10%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>
                                <span class="label label-inline label-light-primary font-weight-bold">Pending</span>
                            </td>
                            <td>
                                {{
                                    $item->created_at
                                }}
                            </td>
                            <td>
                               <a class="btn btn-success" data-toggle="tooltip" data-theme="dark" title="messages" href=""><i class="far fa-envelope"></i></a>
                               <a class="btn btn-danger btn-round mb-0" data-toggle="tooltip" data-theme="dark" title="block" href=""><i class="fas fa-ban"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <!--end::Example-->
    </div>
</div>
@endsection
