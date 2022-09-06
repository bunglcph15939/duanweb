@extends('layouts.backend.master')

@section('title', 'Trang Quản Trị')

@section('content')

<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">Báo cáo theo học viên</h3>
           {{-- <a class="btn btn-success" href="{{route('report.report_course')}}">Report Course</a> --}}
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

                        <tr>
                            <th scope="row">1</th>
                            <td>Nick</td>
                            <td>Stone</td>
                            <td>
                                <span class="label label-inline label-light-primary font-weight-bold">Pending</span>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
        <!--end::Example-->
    </div>
</div>
@endsection
