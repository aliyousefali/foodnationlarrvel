@extends('Layouts.master')

@section('title')
    food nation
@endsection

@section('content')

    @if(Session::has('success'))
        <div role="alert" class="alert alert-success" style="color: black;font-weight: bolder">
            {{Session::get('success')}}
        </div>
    @endif
    <!--begin::Tables Widget 9-->
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">المدارس </span>

            </h3>
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                 title="Click to add a user">


                <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_new_address" class="btn btn-sm btn-light btn-active-primary">

                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    <span class="svg-icon svg-icon-3">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                                              rx="1" transform="rotate(-90 11.364 20.364)"
                                                              fill="currentColor"/>
														<rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                              fill="currentColor"/>
													</svg>
												</span>
                    <!--end::Svg Icon-->اضافه مدرسة</a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bold text-muted">
                        <th class="min-w-150px">الكود</th>
                        <th class="min-w-200px">اسم المدرسة</th>
                        <th class="min-w-150px">المديرية </th>
                        <th class="min-w-150px"> الادارة التعليمية</th>

                        <th class="min-w-150px"> الحالة</th>

                    </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                    @foreach($data as $Stu )
                        <tr>
                            <td>
                                {{$Stu->id}}
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    {{$Stu->Name}}
                                </div>
                            </td>
                            <td>
                                {{@$Stu->Government->Name}}
                            </td>
                            <td>
                                {{@$Stu->EducationalAdministration->Name}}
                            </td>

                            <td>
                                @if($Stu->Status==1)
                                    <span class="badge badge-light-success"> مفعل</span>
                                @endif
                                @if($Stu->Status==0)
                                    <span class="badge badge-light-danger"> غير مفعل</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex justify-content-end flex-shrink-0">

                                    <a href="#" onclick="call({{$Stu->id}})" data-bs-toggle="modal" data-bs-target="#kt_modal_new_address2"
                                       class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                        <span class="svg-icon svg-icon-3">
																			<svg width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
																				<path opacity="0.3"
                                                                                      d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                      fill="currentColor"/>
																				<path
                                                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                    fill="currentColor"/>
																			</svg>
																		</span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <a href="{{url('Delete-School/'.$Stu->id)}}"
                                       class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                        <span class="svg-icon svg-icon-3">
																			<svg width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
																				<path
                                                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                    fill="currentColor"/>
																				<path opacity="0.5"
                                                                                      d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                      fill="currentColor"/>
																				<path opacity="0.5"
                                                                                      d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                      fill="currentColor"/>
																			</svg>
																		</span>
                                        <!--end::Svg Icon-->
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 9-->

    <!--1111111111-->
    <!--begin::Modal - New Address-->
    <div class="modal fade" id="kt_modal_new_address" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <form class="form" method="post" action="{{url('Save-School')}}" id="kt_modal_new_address_form">
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_new_address_header">
                        <!--begin::Modal title-->
                        <h2>اضافة مدرسة</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                              transform="rotate(-45 6 17.3137)" fill="currentColor"/>
										<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                              transform="rotate(45 7.41422 6)" fill="currentColor"/>
									</svg>
								</span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <!--begin::Notice-->
                        @csrf
                        <!--end::Notice-->
                        <!--begin::Input group-->
                        <div class="row mb-5">

                            <div class="col-md-12 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">اسم المدرسة </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <input type="text" class="form-control form-control-solid"  name="Name" placeholder="اسم المدرسة" value="{{old('Name')}}" />
                                <!--end::Input-->
                                @error('Name')
                                <div style="color: red"> هذا الحقل مطلوب</div>
                                @enderror
                            </div>

                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">المديرية </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <select onchange="GetEducationalAdministrations(this)" class="form-control form-control-solid" id="AddGovernmentId"  name="GovernmentId"  value="{{old('GovernmentId')}}" >
                                    <option value="0">اختر</option>
                                    @foreach($Governs as $gov)
                                        <option value="{{$gov->id}}">{{$gov->Name }}</option>
                                    @endforeach
                                </select>
                                <!--end::Input-->
                                @error('GovernmentId')
                                <div style="color: red"> هذا الحقل مطلوب</div>
                                @enderror
                            </div>
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">الادارة التعليمية </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <select class="form-control form-control-solid" id="AddEducationalAdministrationId"  name="EducationalAdministrationId"  value="{{old('EducationalAdministrationId')}}" >

                                </select>
                                <!--end::Input-->
                                @error('EducationalAdministrationId')
                                <div style="color: red"> هذا الحقل مطلوب</div>
                                @enderror
                            </div>
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">الرقم التعريفى  </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <input type="text" class="form-control form-control-solid"  name="InductionNo" placeholder="الرقم التعريفى " value="{{old('InductionNo')}}" />
                                <!--end::Input-->
                                @error('InductionNo')
                                <div style="color: red"> هذا الحقل مطلوب</div>
                                @enderror
                            </div>
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">اسم الشخص المسئول  </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <input type="text" class="form-control form-control-solid"  name="PersonInCharge" placeholder="اسم الشخص المسئول " value="{{old('PersonInCharge')}}" />
                                <!--end::Input-->

                            </div>
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">التليفون  </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <input type="text" class="form-control form-control-solid"  name="Phone" placeholder="التليفون" value="{{old('Phone')}}" />
                                <!--end::Input-->

                            </div>
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">العنوان  </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <input type="text" class="form-control form-control-solid"  name="Address" placeholder="  العنوان " value="{{old('Address')}}" />
                                <!--end::Input-->

                            </div>
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">خط الطول  </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <input type="text" class="form-control form-control-solid"  name="Longitude" placeholder=" خط الطول " value="{{old('Longitude')}}" />
                                <!--end::Input-->

                            </div>
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">  خط العرض  </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <input type="text" class="form-control form-control-solid"  name="Latitude" placeholder="خط العرض " value="{{old('Latitude')}}" />
                                <!--end::Input-->

                            </div>
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">  رقم الشهادة الطبية  </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <input type="text" class="form-control form-control-solid"  name="MedicalCertificateNo" placeholder="رقم الشهادة الطبية " value="{{old('MedicalCertificateNo')}}" />
                                <!--end::Input-->

                            </div>
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">صورة الشهادة الطبية  </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <input type="file" class="form-control form-control-solid"  name="MedicalCertificateImgPath" placeholder="  صورة الشهادة الطبية " value="{{old('MedicalCertificateImgPath')}}" />
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
                                    <input class="form-check-input" name="Status" id="Status" type="checkbox" value="1" checked="checked" />
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
                        <!--end::Scroll-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                <tr class="fw-bold text-muted">
                                    <th class="min-w-150px">المرحلة التعليمية</th>
                                    <th class="min-w-200px">عدد طلاب المرحلة</th>
                                    <th class="min-w-150px">الاجراءت </th>


                                </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                @foreach($data as $Stu )
                                    <tr>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                {{$Stu->Name}}
                                            </div>
                                        </td>



                                        <td>
                                            <div class="d-flex justify-content-end flex-shrink-0">

                                                <a href="#" onclick="call({{$Stu->id}})" data-bs-toggle="modal" data-bs-target="#kt_modal_new_address2"
                                                   class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                    <span class="svg-icon svg-icon-3">
																			<svg width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
																				<path opacity="0.3"
                                                                                      d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                      fill="currentColor"/>
																				<path
                                                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                    fill="currentColor"/>
																			</svg>
																		</span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <a href="{{url('Delete-School/'.$Stu->id)}}"
                                                   class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                    <span class="svg-icon svg-icon-3">
																			<svg width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
																				<path
                                                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                    fill="currentColor"/>
																				<path opacity="0.5"
                                                                                      d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                      fill="currentColor"/>
																				<path opacity="0.5"
                                                                                      d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                      fill="currentColor"/>
																			</svg>
																		</span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>

                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->

                        <button type="reset" data-bs-dismiss="modal" data-mod id="kt_modal_new_address" class="btn btn-light me-3">الغاء
                        </button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
                            <span class="indicator-label">حفظ</span>
                            <span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Modal footer-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <!--end::Modal - New Address-->
    <div class="modal fade" id="kt_modal_new_address2" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <form class="form" method="post" action="{{url('Update-School')}}" id="kt_modal_new_address_form">
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_new_address_header">
                        <!--begin::Modal title-->
                        <h2>تعديل مدرسة</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                              transform="rotate(-45 6 17.3137)" fill="currentColor"/>
										<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                              transform="rotate(45 7.41422 6)" fill="currentColor"/>
									</svg>
								</span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <!--begin::Notice-->
                        @csrf
                        <!--end::Notice-->
                        <!--begin::Input group-->
                        <div class="row mb-5">

                            <div class="col-md-12 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">اسم المدرسة </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <input type="text" class="form-control form-control-solid"  name="Name" placeholder="اسم المدرسة" id="EditName" />

                                <!--end::Input-->
                                @error('Name')
                                <div style="color: red"> هذا الحقل مطلوب</div>
                                @enderror
                            </div>
                           <input type="hidden" name="id" id="EditId">

                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">المديرية </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <select onchange="GetEducationalAdministrations(this)" class="form-control form-control-solid"  name="GovernmentId"  id="EditGovernmentId" >
                                    <option value="0">اختر</option>
                                    @foreach($Governs as $gov)
                                        <option value="{{$gov->id}}">{{$gov->Name }}</option>
                                    @endforeach
                                </select>
                                <!--end::Input-->
                                @error('GovernmentId')
                                <div style="color: red"> هذا الحقل مطلوب</div>
                                @enderror
                            </div>
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">الادارة التعليمية </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <select class="form-control form-control-solid"  name="EducationalAdministrationId"  id="EditEducationalAdministrationId" >

                                </select>
                                <!--end::Input-->
                                @error('EducationalAdministrationId')
                                <div style="color: red"> هذا الحقل مطلوب</div>
                                @enderror
                            </div>
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">الرقم التعريفى  </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <input type="text" class="form-control form-control-solid"  name="InductionNo" placeholder="الرقم التعريفى " id="EditInductionNo" />
                                <!--end::Input-->
                                @error('InductionNo')
                                <div style="color: red"> هذا الحقل مطلوب</div>
                                @enderror
                            </div>
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">اسم الشخص المسئول  </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <input type="text" class="form-control form-control-solid"  name="PersonInCharge" placeholder="اسم الشخص المسئول " id="EditPersonInCharge" />
                                <!--end::Input-->

                            </div>
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">التليفون  </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <input type="text" class="form-control form-control-solid"  name="Phone" placeholder="التليفون" id="EditPhone" />
                                <!--end::Input-->

                            </div>
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">العنوان  </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <input type="text" class="form-control form-control-solid"  name="Address" placeholder="  العنوان " id="EditAddress" />
                                <!--end::Input-->

                            </div>
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">خط الطول  </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <input type="text" class="form-control form-control-solid"  name="Longitude" placeholder=" خط الطول " id="EditLongitude" />
                                <!--end::Input-->

                            </div>
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">  خط العرض  </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <input type="text" class="form-control form-control-solid"  name="Latitude" placeholder="خط العرض " id="EditLatitude" />
                                <!--end::Input-->

                            </div>
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">  رقم الشهادة الطبية  </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <input type="text" class="form-control form-control-solid"  name="MedicalCertificateNo" placeholder="رقم الشهادة الطبية " id="EditMedicalCertificateNo" />
                                <!--end::Input-->

                            </div>
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">صورة الشهادة الطبية  </label>
                                <!--end::Label-->
                                <!--end::Input-->

                                <input type="file" class="form-control form-control-solid"  name="MedicalCertificateImgPath" placeholder="  صورة الشهادة الطبية " id="EditMedicalCertificateImgPath" />
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

                                    <input class="form-check-input Status" name="Status" type="checkbox" id="Status" value="1"  />
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
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" data-bs-dismiss="modal" data-mod id="kt_modal_new_address2" class="btn btn-light me-3">الغاء
                        </button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
                            <span class="indicator-label">حفظ</span>
                            <span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Modal footer-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>

@endsection
<script>
    function call(id){
    $.ajax({
        type: "GET",
        url: "Edit-School/"+id,
        // The key needs to match your method's input parameter (case-sensitive).
       // data: JSON.stringify({ Markers: markers }),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function(data){
            $( "#EditName" ).val(data.Name);
            $( "#EditId" ).val(data.id);
            $( "#EditGovernmentId" ).val(data.GovernmentId);
            GetEducationalAdministrations({value:data.GovernmentId});
            setTimeout(function() {
                $( "#EditEducationalAdministrationId" ).val(data.EducationalAdministrationId);
            }, 500);
            $( "#EditInductionNo" ).val(data.InductionNo);
            $( "#EditPersonInCharge" ).val(data.PersonInCharge);
            $( "#EditPhone" ).val(data.Phone);
            $( "#EditAddress" ).val(data.Address);
            $( "#EditLongitude" ).val(data.Longitude);
            $( "#EditLatitude" ).val(data.Latitude);
            $( "#EditMedicalCertificateNo" ).val(data.MedicalCertificateNo);
            $( "#EditMedicalCertificateImgPath" ).val(data.MedicalCertificateImgPath);

            if(data.Status==1) {
                $('.Status').prop('checked', true);
            }
            else {
                $('.Status').prop('checked', false);
            }
            },
        error: function(errMsg) {
            alert(errMsg);
        }
    });
    }
    function GetEducationalAdministrations(selectObject){
        var id = selectObject.value;
        $.ajax({
            type: "GET",
            url: "GetByGovernmentId-EducationalAdministration/"+id,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function(data){
                $("#AddEducationalAdministrationId").html('');
                $("#EditEducationalAdministrationId").html('');
                $.each(data, function (data, value) {
                    $("#AddEducationalAdministrationId").append($("<option></option>").val(value.id).html(value.Name));
                    $("#EditEducationalAdministrationId").append($("<option></option>").val(value.id).html(value.Name));
                })
            },
            error: function(errMsg) {
                alert(errMsg);
            }
        });
    }

</script>
