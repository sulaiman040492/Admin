<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Island Care</title>
		<meta name="description" content=""/>
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />

		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="{{asset('/media/logos/favicon.ico')}}" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="{{asset('/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

		<link href="{{asset('/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{asset('/css/style.css')}}">
	</head>

	<body id="kt_body" class="bg-body">
		<div class="d-flex flex-column flex-root">
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #F2C98A">
					<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
						<div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
							<a href="index.php" class="py-9 mb-5">
								<img alt="Logo" src="{{asset('/media/logos/logo-2.png')}}" class="h-60px" />
							</a>

							<h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #986923;">Welcome to Island Care</h1>

							<p class="fw-bold fs-2" style="color: #986923;">Lorem Ipsum is simply dummy text of
							<br /> the printing and typesetting industry.</p>
						</div>

						<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url({{asset('/media/illustrations/sketchy-1/13.png')}}"></div>
					</div>
				</div>

				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<div class="w-lg-600px p-10 p-lg-15 mx-auto">
							<!-- <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form"> -->
							<form method="POST" action="{{ route('provider.register') }}" class="form w-100" novalidate="novalidate" id="kt_sign_up_form">
								@csrf
								<div class="mb-10 text-center">
									<h1 class="text-dark mb-3">Create an Account</h1>

									<div class="text-gray-400 fw-bold fs-4">Already have an account?
									<a href="{{route('provider.login')}}" class="link-primary fw-bolder">Sign in here</a></div>
								</div>

								<button type="button" class="btn btn-light-primary fw-bolder w-100 mb-10">
									<img alt="Logo" src="{{asset('/media/svg/brand-logos/google-icon.svg')}}" class="h-20px me-3" />Sign in with Google
								</button>

								<button type="button" class="btn btn-light-primary fw-bolder w-100 mb-10">
									<img alt="Logo" src="{{asset('/media/svg/brand-logos/facebook-4.svg')}}" class="h-20px me-3" />Sign in with Facebook
								</button>

								<div class="d-flex align-items-center mb-10">
									<div class="border-bottom border-gray-300 mw-50 w-100"></div>
									<span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
									<div class="border-bottom border-gray-300 mw-50 w-100"></div>
								</div>

								<div class="row fv-row mb-7">
									<div class="col-xl-6">
										<label class="form-label fw-bolder text-dark fs-6">First Name</label>
										<input class="form-control form-control-lg form-control-solid @error('first_name') border-danger is-invalid @enderror" type="text" value="{{ old('first_name') }}" placeholder="" name="first_name" autocomplete="off" />
										@error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
									</div>

									<div class="col-xl-6">
										<label class="form-label fw-bolder text-dark fs-6">Last Name</label>
										<input class="form-control form-control-lg form-control-solid @error('last_name') border-danger is-invalid @enderror" type="text" value="{{ old('last_name') }}" placeholder="" name="last_name" autocomplete="off" />
										@error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                   		 @enderror
									</div>
								</div>

								<div class="row fv-row mb-7">
									<div class="col-xl-6">
										<label class="form-label fw-bolder text-dark fs-6">Email</label>
										<input class="form-control form-control-lg form-control-solid @error('email') border-danger is-invalid @enderror" value="{{ old('email') }}" type="email" placeholder="" name="email" autocomplete="off" />
										@error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                   		 @enderror
									</div>

									<div class="col-xl-6">
										<label class="form-label fw-bolder text-dark fs-6">Phone</label>
										<input class="form-control form-control-lg form-control-solid  @error('phone_no') border-danger is-invalid @enderror" value="{{ old('phone_no') }}" type="phone" placeholder="" name="phone_no" autocomplete="off" />
										@error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                   		 @enderror
									</div>
								</div>

								<div class="row fv-row mb-7">
									<div class="col-xl-6">
										<label class="form-label fw-bolder text-dark fs-6">Date Of Birth</label>
										<input class="form-control form-control-lg form-control-solid @error('date_of_birth') border-danger is-invalid @enderror" value="{{ old('date_of_birth') }}" type="date" data-placeholder="Date"  name="date_of_birth" autocomplete="off" />
										@error('date_of_birth')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                   		 @enderror
									</div>

									<div class="col-xl-6">
										<label class="form-label fw-bolder text-dark fs-6">Services</label>

										<select class="form-select form-select-solid @error('service_id') border-danger is-invalid @enderror" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="service_id">
											<option value="">Select user...</option>
											@if(isset($categories) && count($categories) > 0)
												@foreach($categories as $key => $category)
													<option value="{{$category->id}}" {{(old('service_id') == 1) ? "selected" : ''}}>{{$category->name}}</option>		
												@endforeach
											@endif
										</select>
										@error('service_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                   		 @enderror
									</div>
								</div>

								<div class="fv-row mb-7">
									<label class="form-label fw-bolder text-dark fs-6">Address</label>
									<input class="form-control form-control-lg form-control-solid @error('address') border-danger is-invalid @enderror" value="{{ old('address' )}}" type="text" placeholder="" name="address" autocomplete="off" />
										@error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                   		 @enderror
								</div>

								<div class="mb-10 fv-row" data-kt-password-meter="true">
									<div class="mb-1">
										<label class="form-label fw-bolder text-dark fs-6">Password</label>

										<div class="position-relative mb-3">
											<input class="form-control form-control-lg form-control-solid  @error('password') border-danger is-invalid @enderror" type="password" placeholder="" value="{{ old('password') }}" id="password" name="password" autocomplete="off" />
										@error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                   		 @enderror
											<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<i class="bi bi-eye-slash fs-2"></i>
												<i class="bi bi-eye fs-2 d-none"></i>
											</span>
										</div>

										<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
										</div>
									</div>

									<div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
								</div>

								<div class="fv-row mb-5">
									<label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
									<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" id="password" name="password_confirmation" value="{{ old('password') }}" autocomplete="off" />
								</div>

								<div class="fv-row mb-10">
									<label class="form-check form-check-custom form-check-solid form-check-inline">
										<input class="form-check-input  @error('agreement') border-danger is-invalid @enderror" type="checkbox" name="agreement" value="1" @if(old('agreement') == 1)  checked @endif/>
										<span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
										<a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
										
										@error('agreement')
										
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
										
                                   		 @enderror
									</label>
								</div>

								<div class="text-center">
									<button type="button" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
										<span class="indicator-label">Submit</span>
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>


		<script>var hostUrl = "admin/";</script>
		<script src="{{asset('/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('/js/scripts.bundle.js')}}"></script>
		<script src="{{asset('/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<script src="{{asset('/js/custom/payment-center/subscription.js')}}"></script>
		<script src="{{asset('/js/custom/widgets.js')}}"></script>
		<script src="{{asset('/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset('/js/custom/modals/create-app.js')}}"></script>
		<script src="{{asset('/js/custom/modals/upgrade-plan.js')}}"></script>

		<!-- <script src="{{asset('/js/custom/authentication/sign-up/general.js')}}"></script> -->


		<script src="{{asset('/js/custom/widgets.js')}}"></script>

		<script>
			"use strict";
var KTSignupGeneral = (function () {
    var e,
        t,
        a,
        s,
        r = function () {
            return 100 === s.getScore();
        };
    return {
        init: function () {
            (e = document.querySelector("#kt_sign_up_form")),
                (t = document.querySelector("#kt_sign_up_submit")),
                (s = KTPasswordMeter.getInstance(e.querySelector('[data-kt-password-meter="true"]'))),
                (a = FormValidation.formValidation(e, {
                    fields: {
                        "first_name": { validators: { notEmpty: { message: "First Name is required" } } },
                        "last_name": { validators: { notEmpty: { message: "Last Name is required" } } },
                        "address": { validators: { notEmpty: { message: "Address is required" } } },
                        "phone_no": { validators: { notEmpty: { message: "Phone Number is required" } } },
                        'agreement': { validators: { notEmpty: { message: "Agreement must be accept" } } },
                        "date_of_birth": { validators: { notEmpty: { message: "Birthday is required" } } },
                        "service_id": { validators: { notEmpty: { message: "Service is required" } } },
                        email: { validators: { notEmpty: { message: "Email address is required" }, 
                        emailAddress: { message: "The value is not a valid email address" } } },
                        password: {
                            validators: {
                                notEmpty: { message: "The password is required" },
                                callback: {
                                    message: "Please enter valid password",
                                    callback: function (e) {
                                        if (e.value.length > 0) return r();
                                    },
                                },
                            },
                        },
                        "password_confirmation": {
                            validators: {
                                notEmpty: { message: "The password confirmation is required" },
                                identical: {
                                    compare: function () {
                                        return e.querySelector('[name="password"]').value;
                                    },
                                    message: "The password and its confirm are not the same",
                                },
                            },
                        },
                        toc: { validators: { notEmpty: { message: "You must accept the terms and conditions" } } },
                    },
                    plugins: { trigger: new FormValidation.plugins.Trigger({ event: { password: !1 } }), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
                })),
                t.addEventListener("click", function (r) {
                    r.preventDefault(),
                        a.revalidateField("password"),
                        a.validate().then(function (a) {
                            "Valid" == a
                                ? (t.setAttribute("data-kt-indicator", "on"),
                                  (t.disabled = !0),
                                  setTimeout(function () {
                                      t.removeAttribute("data-kt-indicator"),
                                          (t.disabled = !1),
                                          Swal.fire({ text: "You have successfully register", icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } }).then(
                                              function (t) {
                                                //   t.isConfirmed && (e.reset(), s.reset());
												  $('#kt_sign_up_form').submit();
                                              }
                                          );
                                  }, 1500))
                                : Swal.fire({
                                      text: "Sorry, looks like there are some errors detected, please try again.",
                                      icon: "error",
                                      buttonsStyling: !1,
                                      confirmButtonText: "Ok, got it!",
                                      customClass: { confirmButton: "btn btn-primary" },
                                  });
                        });
                }),
                e.querySelector('input[name="password"]').addEventListener("input", function () {
                    this.value.length > 0 && a.updateFieldStatus("password", "NotValidated");
                });
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTSignupGeneral.init();
});
		</script>
	</body>
</html>