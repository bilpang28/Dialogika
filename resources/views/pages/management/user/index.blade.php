@extends('layouts.app')
@section('title-apps', 'Paycheck')
@section('sub-title-apps', 'Finance')
@section('desc-apps', '27 Angka favoritku!')
@section('icon-apps', 'fa-solid fa-money-check-dollar')

@section('navbar')
    @include('layouts.navbar.navbar')
@endsection

@section('content')
    @include('pages.management.user.components.modal-create')
    @include('pages.management.user.components.modal-edit')
    <div class="row justify-content-center m-20">
        <div class="col-lg-12">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-6 align-items-center">
                                <div class="col-lg-6 gap-3 d-flex align-items-center">
                                    <span class="fs-7 text-uppercase fw-bolder text-dark d-none d-md-block">My Article
                                        Collection</span>
                                </div>
                                <div class="col-lg-6 d-flex justify-content-end">
                                    <div class="tab_all_menu_lead">
                                        <a href="#kt_modal_create_user" data-bs-toggle="modal"
                                            class="btn btn-info btn-sm btn_create_user"><i
                                                class="fa-solid fa-plus"></i>Artikel Baru</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row rounded">
                                <div class="d-grid">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <table class="table align-top border table-rounded gy-5" id="table">
                                                <thead class="">
                                                    <tr class="fw-bold fs-7 text-gray-500 text-uppercase overflow-y-auto">
                                                        <th class="text-center w-50px">#</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Role</th>
                                                        <th>Birth Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs-7">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let table;

        const editClicked = (data) => {
            $('#edit_id').val(data.id);
            $('#edit_name').val(data.name);
            $('#edit_email').val(data.email);
            $('#edit_role').val(data.role);
            $('#edit_role').trigger('change');
            $('#edit_birth_date').val(data.birth_date);
        }

        const deleteClicked = (id) => {
            $.ajax({
                url: `{{ route('management.user.destroy') }}`,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {
                    id: id
                },
                success: function(response) {
                    toastr.success(response.message, 'Selamat 🚀 !');
                    table.draw();
                },
                error: function(xhr, status, error) {
                    const data = xhr.responseJSON;
                    toastr.error(data.message, 'Opps!');
                }
            });
        }

        $(document).ready(function() {
            table = $('#table')
                .DataTable({
                    processing: true,
                    serverSide: true,
                    retrieve: true,
                    deferRender: true,
                    responsive: false,
                    aaSorting: [],
                    ajax: {
                        url: "{{ route('management.user.getTableUser') }}",
                    },
                    language: {
                        "lengthMenu": "Show _MENU_",
                        "emptyTable": "No recent data 📁",
                        "zeroRecords": "Data not found 😞",
                    },
                    buttons: [],
                    dom: "<'row mb-2'" +
                        "<'col-12 col-lg-6 d-flex align-items-center justify-content-start'>" +
                        "<'col-12 col-lg-6 d-flex align-items-center justify-content-lg-end justify-content-start '>" +
                        ">" +

                        "<'table-responsive'tr>" +

                        "<'row'" +
                        "<'col-12 col-lg-5 d-flex align-items-center justify-content-center justify-content-lg-start'l 'i>" +
                        "<'col-12 col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-end'p>" +
                        ">",

                    columns: [{
                            data: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'name',
                        },
                        {
                            data: 'email',
                        },
                        {
                            data: 'role',
                        },
                        {
                            data: 'birth_date',
                        },
                        {
                            data: 'action',
                        },
                    ],
                    columnDefs: [{
                        targets: [0, 4],
                        className: 'text-center',
                    }, ],
                });
        });
    </script>
@endsection
