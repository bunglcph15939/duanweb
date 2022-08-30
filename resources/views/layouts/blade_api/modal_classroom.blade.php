<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="add_classroom">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control " name="name" id='name'
                            value='{{ old('name') }}' placeholder="">
                        @error('name')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="">Desc</label>
                        <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
                        @error('desc')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Hiện </option>
                            <option value="0">Ẩn</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold"
                    data-dismiss="modal">Close</button>
                <div onclick="add_classroom()" class="btn btn-success">Save</div>

            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade show" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div id="showerrors"></div>
                <form id="form_edit">

                    @csrf
                    <input type="hidden" name="id" id="id" value="0">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control " name="name" id='name_classroom'
                            value='{{ old('name') }}' placeholder="">


                    </div>

                    <div class="form-group">
                        <label for="">Desc</label>
                        <textarea class="form-control" name="desc" id="desc_classroom" rows="3"></textarea>
                        @error('desc')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror

                    </div>




            </div>
            <div class="modal-footer">


                <button type="button" class="btn btn-light-primary font-weight-bold"
                    data-dismiss="modal">Close</button>
                <div onclick="form_edit()" class="btn btn-success">Save change</div>

            </div>
            </form>
        </div>
    </div>
</div>
