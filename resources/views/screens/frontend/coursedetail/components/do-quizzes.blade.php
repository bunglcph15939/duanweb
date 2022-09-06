<!-- Course item START -->
<div class="card border">

    <div class="card-header border-bottom">
        <!-- Course list START -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="/frontend/images/courses/4by3/01.jpg" class="rounded-2" alt="Card image">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <!-- Title -->
                                <h3 class="card-title"><a href="#">The Complete Digital Marketing Course - 12
                                        Courses in 1</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Course list END -->
    </div>

    <div class="card-body">
        <!-- Step content START -->
        <div class="card bg-transparent border rounded-3 mb-1">
            <div id="stepper" class="bs-stepper stepper-outline">
                <!-- Card header -->
                <div class="card-header bg-light border-bottom px-lg-5">
                    <!-- Step Buttons START -->
                    <div class="bs-stepper-header row" role="tablist">
                        @forelse ($quiz->questions as $key => $question)
                            <div class="step col-3" data-target="#step-{{ $question->id }}">
                                <div class="d-grid text-center align-items-center">
                                    <button type="button" class="btn btn-link step-trigger mb-0" role="tab"
                                        id="steppertrigger{{ $question->id }}" aria-controls="step-{{ $question->id }}">
                                        <span class="bs-stepper-circle">{{ $key + 1 }}</span>
                                    </button>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                    <!-- Step Buttons END -->
                </div>

                <!-- Card body START -->
                <div class="card-body">

                    <div class="d-flex d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-center mt-3">
                            <button type="button" onclick="score()" class="btn btn-success mb-0">Gửi kết quả</button>
                        </div>
                        <h6 class="text-danger text-end mb-0"><i class="bi bi-clock-history me-2"></i>Time Left:
                            <span id="time-left"> {{ $quiz->duration }}</span>
                        </h6>
                    </div>

                    <!-- Step content START -->
                    <div class="bs-stepper-content">

                        <form id="form-score" method="POST">
                            @csrf
                            <input type="text" value="{{ $quiz->id }}" name="quiz_id" hidden>
                            @forelse ($quiz->questions as $question)
                                <div id="step-{{ $question->id }}" role="tabpanel" class="content fade"
                                    aria-labelledby="steppertrigger{{ $question->id }}">

                                    <input type="text" value="{{ $question->id }}" name="question_id[]" hidden>
                                    <input type="text" value="{{ $question->type }}" name="type[]" hidden>
                                    <!-- Title -->
                                    <h4>{{ $question->title }}</h4>
                                    <img src="/frontend/images/courses/4by3/01.jpg" class="rounded-2" alt="Card image"
                                        style="max-height: 300px">

                                    <hr> <!-- Divider -->
                                    <div class="vstack">
                                        <!-- Feed ques item -->
                                        <div class="form-group  d-flex flex-column">
                                            @switch($question->type)
                                                @case(0)
                                                    <select multiple class="form-select" id="exampleFormControlSelect2"
                                                        name="answer_id[]">
                                                        @forelse ($question->answers as $answer)
                                                            <option value="{{ $answer->id }}">{{ $answer->content }} / {{ $answer->is_correct }}
                                                            </option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                @break

                                                @case(1)
                                                    <select multiple class="form-select" id="exampleFormControlSelect2"
                                                        name="answer_id[]">
                                                        @forelse ($question->answers as $answer)
                                                            <option value="{{ $answer->id }}">{{ $answer->content }} / {{ $answer->is_correct }}
                                                            </option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                @break

                                                @case(2)
                                                    @forelse ($question->answers as $answer)
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                                name="answer_id[]" value="{{ $answer->id }}">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                {{ $answer->content }} / {{ $answer->is_correct }}</label>
                                                                
                                                        </div>
                                                    @empty
                                                    @endforelse
                                                @break

                                                {{-- @case(3)
                                                    @forelse ($question->answers as $answer)
                                                        <input type="text" value="{{ $answer->id }}" name="answer_id[]"
                                                            hidden>
                                                        <textarea id="editor{{ $answer->id }}" name="content_answer_essay[]"></textarea>
                                                        {{ $answer->is_correct }}
                                                    @empty
                                                    @endforelse
                                                @break --}}

                                                @case(4)
                                                    <select multiple class="form-select" id="exampleFormControlSelect2"
                                                        name="answer_id[]">
                                                        @forelse ($question->answers as $answer)
                                                            <option value="{{ $answer->id }}">{{ $answer->content }} / {{ $answer->is_correct }}
                                                            </option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                @break
                                            @endswitch
                                        </div>

                                        <div class="d-flex justify-content-center mt-3">
                                            <button type="button" class="btn btn-primary next-btn mb-0">Next
                                                question</button>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                @endforelse
                            </form>

                        </div>
                    </div>

                    <!-- Card body END -->
                </div>
            </div>
        </div>

    </div>
    <!-- Course item END -->
