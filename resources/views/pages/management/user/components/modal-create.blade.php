<div class="modal fade" id="kt_modal_create_user" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="modal-body mx-5 mx-lg-15 mb-7">
                <form action="" method="POST" id="form_create_user"
                    class="form fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data">
                    @csrf
                    <div class="scroll-y me-n10 pe-10" id="modal_import_emp_scroll" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#modal_import_emp_header"
                        data-kt-scroll-wrappers="#modal_import_emp_scroll" data-kt-scroll-offset="300px">
                        <div class="row mb-9">
                            <div class="col-lg-12 text-center mb-9">
                                <span class="fs-1 fw-bolder text-dark d-block mb-1">Tambah Pengguna Baru</span>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="d-flex align-items-center fs-6 form-label mb-2">
                                    <span class="required fw-bold">Nama</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" required name="name">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="d-flex align-items-center fs-6 form-label mb-2">
                                    <span class="required fw-bold">Email</span>
                                </label>
                                <input type="email" class="form-control form-control-solid" required name="email">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="d-flex align-items-center fs-6 form-label mb-2">
                                    <span class="required fw-bold">role</span>
                                </label>
                                <select class="form-select form-select-solid" data-control="select2" required
                                    name="role">
                                    <option value="admin">Admin</option>
                                    <option value="writer">Writer</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="d-flex align-items-center fs-6 form-label mb-2">
                                    <span class="fw-bold">Tanggal Lahir</span>
                                </label>
                                <input type="date" class="form-control form-control-solid" name="birth_date">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="d-flex align-items-center fs-6 form-label mb-2">
                                    <span class="fw-bold">Profile Picture</span>
                                </label>
                                <input type="file" class="form-control form-control-solid" name="profile_pic">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="d-flex align-items-center fs-6 form-label mb-2">
                                    <span class="fw-bold">Password</span>
                                </label>
                                <input type="password" class="form-control form-control-solid" name="password">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="d-flex align-items-center fs-6 form-label mb-2">
                                    <span class="fw-bold">Confirm Password</span>
                                </label>
                                <input type="password" class="form-control form-control-solid" name="comfirm_password">
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-9">
                        <button type="reset" id="modal_import_emp_cancel" class="btn btn-sm btn-light me-3 w-lg-200px"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" id="modal_import_emp_submit" class="btn btn-sm btn-info w-lg-200px">
                            <span class="indicator-label">Simpan</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#form_create_user').on('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        $.ajax({
            url: "{{ route('management.user.store') }}",
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                toastr.success(data.message, 'Selamat 🚀 !');
                table.draw();

                $('#form_create_user').trigger('reset');
            },
            error: function(xhr, status, error) {
                const data = xhr.responseJSON;
                toastr.error(data.message, 'Opps!');
            }
        });
    });
</script>
