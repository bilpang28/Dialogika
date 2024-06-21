@extends('layouts.app')
@section('title-apps', 'Profile')
@section('desc-apps', 'Profile Pengguna')
@section('icon-apps', 'fa-solid fa-money-check-dollar')

@section('navbar')
    @include('layouts.navbar.navbar')
@endsection

@section('content')
    @include('pages.profile.components.modal-edit')
    <div class="row justify-content-center mt-20">
        <div class="col-lg-12">
            <div class="row justify-content-center">
                <div class="col-lg-3 mb-6 mb-md-0">
                    <div class="card bgi-no-repeat mb-6"
                        style="background-position: bottom 0 right 0; background-size: 125px; background-image:url('https://erp.comtelindo.com/sense/media/svg/general/rhone.svg')">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-12 text-center mt-10">
                                    <div class="image-input image-input-outline"
                                        style="background-image: url('https://erp.comtelindo.com/sense/media/avatars/blank.png')">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-125px h-125px"
                                            style="background-image: url('https://erp.comtelindo.com/storage/personal/avatar/1702720266_Super Admin.xxxjpg')">
                                        </div>
                                        <!--end::Preview existing avatar-->

                                        <!--begin::Label-->
                                        <!--end::Label-->

                                        <!--begin::Cancel-->
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                            aria-label="Cancel avatar" data-bs-original-title="Cancel avatar"
                                            data-kt-initialized="1">
                                            <i class="fa-solid fa-xmark fa-sm "></i>
                                            <!--end::Cancel-->
                                        </span>
                                    </div>
                                    <div class="mt-4">
                                        <span class="fw-bolder align-items-center fs-2 d-block">Super Admin</span>
                                        <p class="text-gray-500 fs-8">1234567</p>
                                        <span class="badge badge-light-warning px-3 py-2"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-6">
                                    <div class="separator my-5"></div>
                                    <table class="table g-1">
                                        <tbody>
                                            <tr>
                                                <td class="w-25px"><i class="fa-solid fa-phone text-gray-500"></i></td>
                                                <td class=""><span>+62 -</span></td>
                                            </tr>
                                            <tr>
                                                <td class="w-25px"><i class="fa-solid fa-envelope text-gray-500"></i></td>
                                                <td class=""><span>superadmin@gmail.com</span></td>
                                            </tr>
                                            <tr>
                                                <td class="w-25px"><i class="fa-solid fa-map-pin text-gray-500"></i></td>
                                                <td class=""><span>Tim Jakarta</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_edit_user">
                                        Ubah Profil
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">My Article Collection</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    @include('pages.components.list-blog')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
