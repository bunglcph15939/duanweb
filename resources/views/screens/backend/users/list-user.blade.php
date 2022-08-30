@extends('layouts.backend.master')

@section('title', 'Liên hệ')

@section('title-heading', 'User')

@section('content')

@livewire('admin.user-component', ['users' => $users])
  
  <!-- Modal -->
  {{-- <div class="modal fade modal-edit-user" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
  </div> --}}
@endsection

@section('custom-js-tag')
<script>
    //  $('body').on('click', '#show-form-edit', function () {
      // $('.show-form-edit').on('click', function(){
      //   console.log("quân");
      //   var id = $(this).data("id");
      //   var link = $(this).data("url");
      //   $.ajax({
      //       type: "GET",
      //       url: link,
      //       data: {
      //           "id": id,
      //       },
      //       // dataType: "dataType",
      //       success: function (response) {
      //           console.log("quân");
      //           $('.modal-edit-user').html(response)
      //       }
      //   });
      // })
</script>
@endsection