<div>
    <div class="card-body">
        <div class="row align-items-center mb-5">
            <div class="col-lg-9 col-xl-8">
                <div class="row align-items-center">
                    <div class="col-md-4 my-2 my-md-0">
                        <form action="">
                            <div class="input-icon">
                                <input wire:model="searchQuiz" type="text" class="form-control" placeholder="Search..."
                                       id="kt_datatable_search_query">
                                <span>
                                <i class="flaticon2-search-1 text-muted"></i>
                            </span>
                            </div>
                        </form>
                    </div>
{{--                    <div class="col-md-4 my-2 my-md-0">--}}
{{--                        <div class="d-flex align-items-center">--}}
{{--                            <label class="mr-3 mb-0 d-none d-md-block">Status:</label>--}}
{{--                            <div class="dropdown bootstrap-select form-control"><select class="form-control"--}}
{{--                                                                                        id="kt_datatable_search_status"--}}
{{--                                                                                        tabindex="null">--}}
{{--                                    <option value="">All</option>--}}
{{--                                    <option value="1">Pending</option>--}}
{{--                                    <option value="2">Delivered</option>--}}
{{--                                    <option value="3">Canceled</option>--}}
{{--                                    <option value="4">Success</option>--}}
{{--                                    <option value="5">Info</option>--}}
{{--                                    <option value="6">Danger</option>--}}
{{--                                </select>--}}
{{--                                <button type="button" tabindex="-1"--}}
{{--                                        class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown"--}}
{{--                                        role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox"--}}
{{--                                        aria-expanded="false" data-id="kt_datatable_search_status" title="All">--}}
{{--                                    <div class="filter-option">--}}
{{--                                        <div class="filter-option-inner">--}}
{{--                                            <div class="filter-option-inner-inner">All</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </button>--}}
{{--                                <div class="dropdown-menu ">--}}
{{--                                    <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">--}}
{{--                                        <ul class="dropdown-menu inner show" role="presentation"></ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4 my-2 my-md-0">--}}
{{--                        <div class="d-flex align-items-center">--}}
{{--                            <label class="mr-3 mb-0 d-none d-md-block">Type:</label>--}}
{{--                            <div class="dropdown bootstrap-select form-control"><select class="form-control"--}}
{{--                                                                                        id="kt_datatable_search_type">--}}
{{--                                    <option value="">All</option>--}}
{{--                                    <option value="1">Online</option>--}}
{{--                                    <option value="2">Retail</option>--}}
{{--                                    <option value="3">Direct</option>--}}
{{--                                </select>--}}
{{--                                <button type="button" tabindex="-1"--}}
{{--                                        class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown"--}}
{{--                                        role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox"--}}
{{--                                        aria-expanded="false" data-id="kt_datatable_search_type" title="All">--}}
{{--                                    <div class="filter-option">--}}
{{--                                        <div class="filter-option-inner">--}}
{{--                                            <div class="filter-option-inner-inner">All</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </button>--}}
{{--                                <div class="dropdown-menu ">--}}
{{--                                    <div class="inner show" role="listbox" id="bs-select-2" tabindex="-1">--}}
{{--                                        <ul class="dropdown-menu inner show" role="presentation"></ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
        <!--begin: Datatable-->
        <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Duration</th>
                            <th>Limit</th>
                            <th colspan="4">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($quizs as $key => $quiz)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$quiz->title}}</td>
                                <td>{{$quiz->duration}}</td>
                                <td>{{$quiz->limit}}</td>
                                <td width="50px">
                                    <button type="button" class="btn btn-primary font-weight-bolder"
                                            data-toggle="modal" data-target="#formClass" onclick="getId({{$quiz->id}})">
                                        <i class="fa fa-school"></i>
                                    </button>
                                </td>
                                <td width="50px">
                                    <button type="button" class="btn btn-success font-weight-bolder"
                                            data-toggle="modal" data-target="#formInsert" onclick="getId({{$quiz->id}})">
                                        <i class="fa fa-user-plus"></i>
                                    </button>
                                </td>
                                <td width="50px">
                                    <button type="button" class="btn btn-warning font-weight-bolder"
                                            data-toggle="modal"
                                            data-target="#formUpdate" onclick="showQuiz({{$quiz->id}})">
                                        <i class="fa fa-pen-square"></i>
                                    </button>
                                </td>
                                <td width="50px">
                                    <a href="{{route('quiz.destroy', $quiz->id)}}" class="btn btn-danger button-delete" data-id="{{$quiz->id}}">
                                        <i class="fa fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                No data
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                {{$quizs->links('pagination::bootstrap-5')}}
            </div>
        </div>
        <!--end: Datatable-->
    </div>
</div>
