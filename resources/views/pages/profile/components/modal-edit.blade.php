<div class="modal fade" id="kt_modal_edit_user" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="modal-body mx-5 mx-lg-15 mb-7">
                <form action="" method="POST" id="form_edit_user"
                    class="form fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data">
                    @csrf
                    <div class="scroll-y me-n10 pe-10" id="modal_import_emp_scroll" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#modal_import_emp_header"
                        data-kt-scroll-wrappers="#modal_import_emp_scroll" data-kt-scroll-offset="300px">
                        <div class="row mb-9">
                            <div class="col-lg-12 text-center mb-9">
                                <span class="fs-1 fw-bolder text-dark d-block mb-1">Ubah Data Pengguna</span>
                            </div>
                            <input type="hidden" name="id" id="edit_id" value="{{$user->id}}">
                            <div class="col-12 mb-3">
                                <label class="d-flex align-items-center fs-6 form-label mb-2">
                                    <span class="required fw-bold">Nama</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" required name="name" id="edit_name" value="{{$user->name}}">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="d-flex align-items-center fs-6 form-label mb-2">
                                    <span class="required fw-bold">Email</span>
                                </label>
                                <input type="email" class="form-control form-control-solid" required name="email" id="edit_email" value="{{$user->email}}">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="d-flex align-items-center fs-6 form-label mb-2">
                                    <span class="required fw-bold">role</span>
                                </label>
                                <select class="form-select form-select-solid" data-control="select2" required
                                    name="role" id="edit_role" value="{{$user->role}}">
                                    <option value="admin" @if ($user->role == 'admin')
                                        selected
                                    @endif>Admin</option>
                                    <option value="writer" @if ($user->role == 'writer')
                                        selected
                                    @endif>Writer</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="d-flex align-items-center fs-6 form-label mb-2">
                                    <span class="fw-bold">Tanggal Lahir</span>
                                </label>
                                <input type="date" class="form-control form-control-solid" name="birth_date" id="edit_birth_date" value="{{$user->birth_date}}">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="d-flex align-items-center fs-6 form-label mb-2">
                                    <span class="fw-bold">Profile Picture</span>
                                </label>
                                <input type="file" class="form-control form-control-solid" name="profile_pic">
                                <img src="{{asset('sense/media/avatars/blank.png')}}" class="mt-5 rounded" width="200" height="200" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-9">
                        <button type="reset" class="btn btn-sm btn-light me-3 w-lg-200px"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-info w-lg-200px">
                            <span class="indicator-label">Simpan</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#form_edit_user').on('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        $.ajax({
            url: "{{ route('management.user.update') }}",
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                toastr.success(data.message, 'Selamat 🚀 !');

                $('#form_edit_user').trigger('reset');
                $('#kt_modal_edit_user').modal('hide');

                setTimeout(() => {
                    location.reload();
                }, 1000);
            },
            error: function(xhr, status, error) {
                const data = xhr.responseJSON;
                toastr.error(data.message, 'Opps!');
            }
        });
    });
</script>
