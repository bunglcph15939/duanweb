<div class="modal fade" id="exampleModalcreate" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tạo câu hỏi câu trả lời</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">

                <div class="" style="min-height: 500px;">

                    @include('screens.backend.questionquiz.components.layout.option')

                    <form class="form" enctype="multipart/form-data" id="formcreate" method="post" preventDefault>
                        @csrf
                        <!--begin::Example-->
                        <div class="tab-content mt-5" id="my-options">
                            {{-- ----------- this component call api render html -------------- --}}
                        </div>
                        <!--end::Example-->
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
