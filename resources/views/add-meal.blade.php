


@extends('layouts.master')

@section('title')
    food nation
@endsection

@section('content')

    <!--begin::Form-->
    <form class="form" action="{{url('Save-Meal')}}" method="post" id="kt_modal_new_address_form">
        <!--begin::Modal header-->
        @csrf
        <div class="modal-header" id="kt_modal_new_address_header">
            <!--begin::Modal title-->
            <h2> اضافة وجبة  </h2>
            <!--end::Modal title-->
            <!--begin::Close-->
            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->

                <!--end::Svg Icon-->
            </div>
            <!--end::Close-->
        </div>
        <!--end::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
            <!--begin::Scroll-->
            <div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                <!--begin::Notice-->

                <!--end::Notice-->
                <!--begin::Input group-->
                <div class="row mb-5">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="required fs-5 fw-semibold mb-2">الكود </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid"  name="Code" placeholder="الكود" value="{{old('Code')}}" />
                        <!--end::Input-->
                        @error('Code')
                        <div style="color: red"> هذا الحقل مطلوب</div>
                        @enderror
                    </div>

                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--end::Label-->
                        <label class="required fs-5 fw-semibold mb-2">اسم الوجبة </label>
                        <!--end::Label-->
                        <!--end::Input-->

                        <input type="text" class="form-control form-control-solid"  name="Name" placeholder="اسم الوجبة" value="{{old('Name')}}" />
                        <!--end::Input-->
                        @error('Name')
                        <div style="color: red"> هذا الحقل مطلوب</div>
                        @enderror
                    </div>

                    <div class="col-md-6 fv-row">
                        <!--end::Label-->
                        <label class="required fs-5 fw-semibold mb-2"> المديرية التعليمية </label>
                        <!--end::Label-->
                        <!--end::Input-->
                        <input type="text" class="form-control form-control-solid" name="StageId" placeholder="المديرية" value="{{old('StageId')}}" />
                        <!--end::Input-->
                        @error('StageId')
                        <div style="color: red"> هذا الحقل مطلوب</div>
                        @enderror
                    </div>
                    <div class="col-md-6 fv-row">
                        <!--end::Label-->
                        <label class="required fs-5 fw-semibold mb-2"> وجبة مغلقة  </label>
                        <!--end::Label-->
                        <!--end::Input-->
                        <input type="checkbox" name="Closed"    value="{{old('Closed')}}" />
                        <!--end::Input-->

                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->




                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-5">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5">
                            <!--begin::Label-->
                            <label class="fs-5 fw-semibold">الحالة</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div class="fs-7 fw-semibold text-muted">.</div>
                            <!--end::Input-->
                        </div>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <!--begin::Input-->
                            <input class="form-check-input" name="Status" type="checkbox" value="1" checked="checked" />
                            <!--end::Input-->
                            <!--begin::Label-->
                            <span class="form-check-label fw-semibold text-muted">مفعل</span>
                            <!--end::Label-->
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--begin::Wrapper-->
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Scroll-->
        </div>
        <!--end::Modal body-->
        <!--begin::Modal footer-->
        <div class="modal-footer flex-center">
            <!--begin::Button-->
            <a href="{{url('Meal-List')}}" class="btn btn-light me-3">الغاء</a>

            <!--end::Button-->
            <!--begin::Button-->
            <button type="Submit" id="kt_modal_new_address_submit" class="btn btn-primary">
                <span class="indicator-label">  حفظ</span>
                <span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Button-->
        </div>
        <!--end::Modal footer-->
    </form>
    <!--end::Form-->
@endsection
