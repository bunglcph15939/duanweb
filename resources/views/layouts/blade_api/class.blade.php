@foreach ($classroom as $item)
    <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->name }}</td>
        <td> {{ substr($item->desc, 0, 30) }}...</td>
        <td>{{ $item->author->name }}</td>
        <td>
            @if ($item->status == 1)
                <span class="label label-inline label-light-primary font-weight-bold">Hiện</span>
            @else
                <span class="label label-inline label-light-danger font-weight-bold">Ẩn</span>
            @endif
        </td>
        <td class="d-flex">
            <a class="btn btn-light  btn-sm mr-2" id="change_status"onclick="change({{ $item }})"><i
                    class="ki ki-reload text-warning"></i></a>

            <a class="btn btn-light  btn-sm" data-toggle="modal" data-target="#editModal"
                onclick="javascript:edit_classroom({{ $item }})">
                <i class="flaticon2-gear text-primary"></i></a>
        </td>
    </tr>
@endforeach
