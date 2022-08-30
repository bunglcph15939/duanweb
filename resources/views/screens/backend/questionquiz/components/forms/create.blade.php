<form class="form" enctype="multipart/form-data" method="post" id="formcreate">
    @csrf
    @isset($type)
        <h3>
            <i class="flaticon-questions-circular-button display-4 text-success"></i>
            @switch($type)
                @case(0)
                    Câu hỏi trắc nghiệm đúng sai
                @break

                @case(1)
                    Câu hỏi trắc nghiệm 1 lựa chọn
                @break

                @case(2)
                    Câu hỏi trắc nghiệm nhiều lựa chọn
                @break

                @case(3)
                    Câu hỏi tự luận
                @break

                @default
                    Câu hỏi ghép đáp án
            @endswitch()
        </h3>
        <div class='form-group mt-5'>

            <div id="form-errors-create">

            </div>

            <label>Câu hỏi</label>
            <textarea rows='2' placeholder='Nhập câu hỏi...' class='form-control' name='title'></textarea>
            @error('title')
                <span>{{ $messenger }}</span>
            @enderror
            <input type='number' hidden name='type' value="{{ $type }}">

            <div class="card card-custom gutter-b">
                <div class="card-header card-header-tabs-line">
                    <div class="card-title">
                        <h3 class="card-label">Chọn kiểu câu hỏi</h3>
                    </div>
                    <div class="card-toolbar" id="card-toolbar">
                        <ul class="nav nav-tabs nav-bold nav-tabs-line">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_0_2" onclick="clicktab(0)">Ảnh</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_1_2" onclick="clicktab(1)">MP3</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">

                    <div class="tab-content" id="tab-content">
                        <div class="tab-pane fade show active" id="kt_tab_pane_0_2" role="tabpanel"
                            aria-labelledby="kt_tab_pane_2">
                            <strong>Image</strong>
                            <br>
                            {{-- <input type="file" name="attachment" accept=".png, .jpg, .jpeg" id="file_image" /> --}}
                            
                            <div class="image-input image-input-outline" id="kt_image_4">
                                <div class="image-input-wrapper"
                                    style="background-image: url()"></div>

                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="change" data-toggle="tooltip" title=""
                                    data-original-title="Change avatar">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                </label>

                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>

                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                            </div>
                            
                        </div>

                        <div class="tab-pane fade" id="kt_tab_pane_1_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                            <strong>Mp3</strong>
                            <br>
                            <input type="file" name="attachment" accept=".png, .jpg, .jpeg" />
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="form-group mt-3">
            <label class="col-form-label ">Tags</label>
            <input id="kt_tagify_1" class="form-control tagify" name='tag' placeholder="Nhập Tag..." autofocus="" />
            <div class="mt-3">
                <a href="javascript:;" id="kt_tagify_1_remove" class="btn btn-sm btn-light-primary font-weight-bold">Remove
                    tags</a>
            </div>
        </div>
        </div>

        <hr>
        <div class='form-group' id="ListAnswersCreate">
            @if ($type != 3)
                <div class='AnswerCreate'>
                    @if ($type != 0)
                        <label for="question-stt">Câu trả lời 1</label>
                        <textarea rows='2' placeholder='Nhập câu hỏi...' name='content[]' class='form-control'></textarea>
                    @endif
                    <div class='d-flex justify-content-between tools-answer'>
                        <div class='form-group'>
                            <label class='col-form-label'>Xác thực</label>

                            <select class="form-control" aria-label="Default select example" name="is_correct[]"
                                onchange="option_answer(this,{{ $type }})">
                                <option value="1" selected>Đúng</option>
                                <option value="0">Sai</option>
                            </select>

                        </div>
                        @if ($type != 0 && $type < 3)
                            <div class=''>
                                <a class="btn btn-light  btn-sm" onclick="DeleteAnswerUpdate(this)">
                                    <i class="flaticon2-trash text-danger"></i></a>
                            </div>
                        @endif
                    </div>
                </div>
            @endif
        </div>

        @if ($type != 0 && $type < 3)
            <div onclick='addAnswercreate({{ $type }})' class='btn btn-primary'><i
                    class='fas fa-plus-square'></i>Thêm câu trả
                lời
            </div>
        @endif
        <hr>
        <div class="d-flex justify-content-between mt-3">
            <button type="button" class="btn btn-success font-weight-bold" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="create_form(this)">Lưu</button>
        </div>
    @endisset
</form>
