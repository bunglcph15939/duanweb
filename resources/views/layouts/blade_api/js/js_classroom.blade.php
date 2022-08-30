<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script>
    function edit_classroom(item) {
        console.log(item)
        var name = document.getElementById('name_classroom');
        var desc = document.getElementById('desc_classroom');
        var id = document.getElementById('id');
        id.value = item.id;
        name.value = item.name;
        desc.value = item.desc;
    }

    $('#search').on('keyup', function() {
        $value = $(this).val();
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/classroom/search_name') }}',
            data: {
                'search': $value
            },
            success: function(data) {
                $('tbody').html(data);
                if($value==''){
                    window.location.reload()
                }
            }
        });
    })
    $.ajaxSetup({
        headers: {
            'csrftoken': '{{ csrf_token() }}'
        }
    });

    $('#author').on('change', function() {
        $value = $(this).val();
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/classroom/fillter') }}',
            data: {
                'fillter': $value
            },
            success: function(data) {
                $('tbody').html(data);
                if($value==0 || $value==''){
                    window.location.reload()
                }

            }
        });
    })

    function change(item) {
        $value = item.id;
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/classroom/change_status') }}',
            data: {
                'change_status': $value
            },
            success: function(data) {
                $('tbody').html(data);
                Swal.fire(
                    'Good job!',
                    'Thanh cong',
                    'success'
                )


            }
        });

    }

    function form_edit() {
        formData = new FormData(document.getElementById("form_edit"));
        console.log(formData)
        $.ajax({
            type: 'post',
            url: '{{ URL::to('/classroom/update') }}',
            data: formData,

            processData: false,
            contentType: false,
            success: function(data) {
                $('tbody').html(data);
                Swal.fire(
                    'Good job!',
                    'Thanh cong',
                    'success'
                )
                modal = document.querySelector('.modal-backdrop')
                modal.classList.remove('show');
                modal.style.display = 'none'
                modal1 = document.querySelector('#editModal')
                modal1.classList.remove('show');
                modal1.style.display = 'none'
            },
            error: function(response) {
                console.log(response.responseJSON.errors.name)
                for (const i in response.responseJSON.errors) {

                    alert(response.responseJSON.errors[i][0])
                }
            }
        });
        $.ajaxSetup({
            headers: {
                'csrftoken': '{{ csrf_token() }}'
            }
        });
    }

    function add_classroom() {
        formData = new FormData(document.getElementById("add_classroom"));
        console.log(formData)
        $.ajax({
            type: 'post',
            url: '{{ URL::to('/classroom/store') }}',
            data: formData,

            processData: false,
            contentType: false,
            success: function(data) {
                $('tbody').html(data);
                Swal.fire(
                    'Good job!',
                    'Thanh cong',
                    'success'
                )
                modal = document.querySelector('.modal-backdrop')
                modal.classList.remove('show');
                modal.style.display = 'none'
                modal1 = document.querySelector('#exampleModal')
                modal1.classList.remove('show');
                modal1.style.display = 'none'
            },
            error: function(response) {
                console.log(response.responseJSON.errors.name)
                for (const i in response.responseJSON.errors) {

                    alert(response.responseJSON.errors[i][0])
                }
            }
        });
        $.ajaxSetup({
            headers: {
                'csrftoken': '{{ csrf_token() }}'
            }
        });
    }
</script>
