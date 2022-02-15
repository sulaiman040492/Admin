<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
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
								<img alt="Logo" src="{{asset('/media/logos/logo-2.png')}}" class="h-60px" />
							</a>

							<h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #986923;">Welcome to Island Care</h1>

							<p class="fw-bold fs-2" style="color: #986923;">Lorem Ipsum is simply dummy text of
							<br /> the printing and typesetting industry.</p>
						</div>

						<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(assets/media/illustrations/sketchy-1/13.png"></div>
					</div>
				</div>

				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<div class="w-lg-600px p-10 p-lg-15 mx-auto">
							<form class="form w-100 mb-10" novalidate="novalidate" id="kt_sing_in_two_steps_form">
								<div class="text-center mb-10">
									<img alt="Logo" class="mh-125px" src="{{asset('/media/svg/misc/smartphone.svg')}}" />
								</div>

								<div class="text-center mb-10">
									<h1 class="text-dark mb-3">Two Step Verification</h1>

									<div class="text-muted fw-bold fs-5 mb-5">Enter the verification code we sent to</div>

									<div class="fw-bolder text-dark fs-3">******7859</div>
								</div>

								<div class="mb-10 px-md-10">
									<div class="fw-bolder text-start text-dark fs-6 mb-1 ms-1">Type your 6 digit security code</div>

									<div class="d-flex flex-wrap flex-stack">
										<input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="3" />
										<input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="0" />
										<input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="7" />
										<input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
										<input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
										<input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
									</div>
								</div>

								<div class="d-flex flex-center">
									<button type="button" id="kt_sing_in_two_steps_submit" class="btn btn-lg btn-primary fw-bolder">
										<span class="indicator-label">Submit</span>
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
							</form>

							<div class="text-center fw-bold fs-5">
								<span class="text-muted me-1">Didn’t get the code ?</span>
								<a href="#" class="link-primary fw-bolder fs-5 me-1">Resend</a>
								<span class="text-muted me-1">or</span>
								<a href="#" class="link-primary fw-bolder fs-5">Call Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script>var hostUrl = "assets/";</script>
		<script src="{{asset('/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('/js/scripts.bundle.js')}}"></script>
		<script src="{{asset('/js/custom/authentication/sign-in/two-steps.js')}}"></script>
	</body>
</html>