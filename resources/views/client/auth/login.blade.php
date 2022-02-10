
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
	</head>

	<body id="kt_body" class="bg-body">
		<div class="d-flex flex-column flex-root">
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #F2C98A">
					<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
						<div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
							<a href="index.php" class="py-9 mb-5">
								<img alt="Logo" src="{{asset('/media/logos/logo-2.svg')}}" class="h-60px" />
							</a>

							<h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #986923;">Welcome to Island Care</h1>

							<p class="fw-bold fs-2" style="color: #986923;">Lorem Ipsum is simply dummy text of
							<br /> the printing and typesetting industry.</p>
						</div>

						<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url({{asset('/media/illustrations/sketchy-1/13.svg')}}"></div>
					</div>
				</div>

                

				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<div class="w-lg-500px p-10 p-lg-15 mx-auto">

                            <!-- <form method="POST" action="{{ route('client.login') }}"> -->

                            <form method="POST" action="{{ route('client.login') }}" class="form w-100" novalidate="novalidate" id="kt_sign_in_form">

                                {{-- <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="{{ route('admin.login') }}"> --}}
                                    @csrf
								<div class="text-center mb-10">
									<h1 class="text-dark mb-3">Sign In to Island Care</h1>
									<div class="text-gray-400 fw-bold fs-4">New Here?
									<a href="{{route('client.register')}}" class="link-primary fw-bolder">Create an Account</a></div>
								</div>

                                

								<div class="fv-row mb-10">
									<label class="form-label fs-6 fw-bolder text-dark">Email</label>

									<input class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}" autocomplete="off" />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                                </div>

								<div class="fv-row mb-10">
									<div class="d-flex flex-stack mb-2">
										<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>

										<a href="" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
									</div>

									<input class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" type="password" value="{{ old('password') }}" name="password" autocomplete="off" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                @if(Session::has('error'))
                                    <div class="alert alert-danger text-center mb-10">
                                        <p>{{ Session::get('error') }}</p>
                                    </div>
                                @endif
								<div class="text-center">
									<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
										<span class="indicator-label">Continue</span>
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

		<script src="{{asset('/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('/js/scripts.bundle.js')}}"></script>
		<!-- <script src="{{asset('/js/custom/authentication/sign-in/general.js')}}"></script> -->
		<script src="{{asset('/js/custom/custom.js')}}"></script>


		<script>
			"use strict";
var KTSigninGeneral = (function () {
    var t, e, i;
    return {
        init: function () {
            (t = document.querySelector("#kt_sign_in_form")),
                (e = document.querySelector("#kt_sign_in_submit")),
                (i = FormValidation.formValidation(t, {
                    fields: {
                        email: {
                            validators: {
                                notEmpty: {
                                    message: "Email address is required",
                                },
                                emailAddress: {
                                    message:
                                        "The value is not a valid email address",
                                },
                            },
                        },
                        password: {
                            validators: {
                                notEmpty: {
                                    message: "The password is required",
                                },
                            },
                        },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                        }),
                    },
                })),
                e.addEventListener("click", function (n) {
                    n.preventDefault(),
                        i.validate().then(function (i) {
                            "Valid" == i
                                ? (e.setAttribute("data-kt-indicator", "on"),
                                  (e.disabled = !0),
                                  setTimeout(function () {
                                      e.removeAttribute("data-kt-indicator"),
                                          (e.disabled = !1),
										  
										  $('#kt_sign_in_form').submit();

                                        //   Swal.fire({
                                        //       text: "You have successfully logged in!",
                                        //       icon: "success",
                                        //       buttonsStyling: !1,
                                        //       confirmButtonText: "Ok, got it!",
                                        //       customClass: {
                                        //           confirmButton:
                                        //               "btn btn-primary",
                                        //       },
                                        //   }).then(function (e) {
                                        //       e.isConfirmed &&
                                        //           ((t.querySelector(
                                        //               '[name="email"]'
                                        //           ).value = ""),
                                        //           (t.querySelector(
                                        //               '[name="password"]'
                                        //           ).value = ""));
                                        //   });
                                  }, 2e3))
                                : Swal.fire({
                                      text: "Sorry, looks like there are some errors detected, please try again.",
                                      icon: "error",
                                      buttonsStyling: !1,
                                      confirmButtonText: "Ok, got it!",
                                      customClass: {
                                          confirmButton: "btn btn-primary",
                                      },
                                  });
                        });
                });
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTSigninGeneral.init();
});

		</script>
	</body>
</html>