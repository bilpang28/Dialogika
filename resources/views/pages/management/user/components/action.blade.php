<a id="trigger_modal_tambah_pelanggan" href="#modal_edit_profile" class="btn btn-sm btn-success" data-bs-toggle="modal"
    onclick="editClicked({{$query->id}}, {{$query->name}}, {{$query->email}}, {{$query->role}}, {{$query->birth_date}}, {{$query->profile_pic}})"><span
        class="fa-solid fa-pencil"></span></a>
<button class="btn btn-sm btn-danger" onclick="deleteClicked({{$query->id}})"><span class="fa-regular fa-trash-can"></span></button>
