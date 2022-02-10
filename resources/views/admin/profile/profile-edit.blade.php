@extends('layouts.admin')

@section('content')

					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<div class="toolbar" id="kt_toolbar">
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
										Dashboard
										<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
										<small class="text-muted fs-7 fw-bold my-1 ms-1">Profile Edit</small>
									</h1>
								</div>					
							</div>
						</div>

						<div class="post d-flex flex-column-fluid" id="kt_post">
							<div id="kt_content_container" class="container-fluid">
								

							
							@include('admin.profile.profile-header',['file'=>'profile-edit'])

								<div class="card">
									<div class="card-header">
										<div class="card-title fs-3 fw-bolder">ID <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
										<small class="text-muted fs-7 fw-bold my-1 ms-1">XD-1</small></div>
									</div>





									<form id="kt_project_settings_form_custom" class="form" action="{{route('admin.profileUpdate')}}" method="POST" enctype="multipart/form-data">
										@csrf
										<div class="card-body p-9">
											

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Name</div>
												</div>

												<div class="col-xl-9 fv-row">
												<input type="hidden" name="id" value="@if(Auth::guard('admin')->user()->id != null) {{Auth::guard('admin')->user()->id}} @endif" />
													<input type="text" class="form-control form-control-solid" name="fname" value="@if(Auth::guard('admin')->user()->name != null) {{Auth::guard('admin')->user()->name}} @endif" />
												</div>
											</div>

					

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Email</div>
												</div>

												<div class="col-xl-9 fv-row">
													<input type="email" class="form-control form-control-solid" name="email" value="@if(Auth::guard('admin')->user()->email != null) {{Auth::guard('admin')->user()->email}} @endif" />
												</div>
											</div>




										</div>

										<div class="card-footer d-flex justify-content-end py-6 px-9">
											<a href="{{url('profile')}}"><button type="button" class="btn btn-light btn-active-light-primary me-2">Discard</button></a>
											<button type="submit" class="btn btn-primary">Save Changes</button>
										</div>
									</form>


								</div>
							</div>
						</div>
					</div>




					<script>
						"use strict";
var a;
var KTProjectSettings = {
    init: function () {
        !(function () {
            var t;
            $("#kt_datepicker_1").flatpickr();
            var e = document.getElementById("kt_project_settings_form_custom");
            var data = $('#kt_project_settings_form').serialize();
            // var i = e.querySelector("#kt_project_settings_submit");


            new Tagify(
            	e.querySelector('[name="courses"]'), { whitelist: [], maxTags: 5, dropdown: { maxItems: 10, enabled: 0, closeOnSelect: !1 } }).on("change", function () {
                // i.revalidateField("courses");
            });

          
               
            (t = FormValidation.formValidation(e, {
                fields: {
                    fname: { validators: { notEmpty: { message: "First name is required" } } },
                    lname: { validators: { notEmpty: { message: "Last name is required" } } },
                    email: { validators: { notEmpty: { message: "Email is required" } } },
					phone: { validators: { notEmpty: { message: "Phone number is required" } } },
					address: { validators: { notEmpty: { message: "Address is required" } } },
                    // type: { validators: { notEmpty: { message: "Project type is required" } } },
                    // description: { validators: { notEmpty: { message: "Project Description is required" } } },
                    date_of_birth: { validators: { notEmpty: { message: "Date of Birth is required" } } },
                },
                plugins: { trigger: new FormValidation.plugins.Trigger(), submitButton: new FormValidation.plugins.SubmitButton(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row" }) },
            }))

            i.addEventListener("click",function(e){
                $.ajax({
                    url:profileupdate,
                    type:"POST",
                    data:{"_token": token,'dt':data},
                    success:function(res){

                    }
            })
            });

            
                i.addEventListener("click", function (e) {
                    e.preventDefault(),
                        t.validate().then(function (t) {
                            "Valid" == t
                                ? 
                                $.ajax({
                                    url:profileupdate,
                                    type:"POST",
                                    data:{"_token": token,'dt':data},
                                    success:function(res){
                                        if(res == 1){
                                            Swal.fire({ text: "This data has been deleted.", icon: "success", confirmButtonText: "Ok", buttonsStyling: !1, customClass: { confirmButton: "btn btn-light-primary" } })
                                            .then(function(){
                                                window.location.reload();
                                            });
                                         }
                                        else{
                                            Swal.fire({ text: "Data not delete?", icon: "info", confirmButtonText: "Ok", buttonsStyling: !1, customClass: { confirmButton: "btn btn-light-primary" } });
                                        }
                                    }
                                })
                                // swal.fire({ text: "Thank you! You've updated your project settings", icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn fw-bold btn-light-primary" } })
                                : swal.fire({
                                      text: "Sorry, looks like there are some errors detected, please try again.",
                                      icon: "error",
                                      buttonsStyling: !1,
                                      confirmButtonText: "Ok, got it!",
                                      customClass: { confirmButton: "btn fw-bold btn-light-primary" },
                                  });
                        });
                });
        })();
    },
};

					</script>


					@endsection