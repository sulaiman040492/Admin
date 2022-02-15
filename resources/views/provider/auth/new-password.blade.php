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
						<div class="w-lg-550px p-10 p-lg-15 mx-auto">
							<form class="form w-100" method="post" action="{{ route('provider.password.update') }}" id="kt_new_password_form1">
								@csrf
								<input type="hidden" name="token" value="{{ $token }}">
								<input type="hidden" name="email" value="{{ $email ?? old('email') }}">

								<div class="text-center mb-10">
									<h1 class="text-dark mb-3">Setup New Password</h1>	
									<div class="text-gray-400 fw-bold fs-4">Already have reset your password ?
									<a href="{{ route('provider.register') }}" class="link-primary fw-bolder">Sign in here</a></div>
								</div>

								<div class="mb-10 fv-row" data-kt-password-meter="true">
									<div class="mb-1">
										<label class="form-label fw-bolder text-dark fs-6">Password</label>

										<div class="position-relative mb-3">
											<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password" autocomplete="off" />
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

								<div class="fv-row mb-10">
									<label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
									<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password_confirmation" autocomplete="off" />
								</div>

								

								<div class="text-center">
									<button type="submit" id="kt_new_password_submit" class="btn btn-lg btn-primary fw-bolder">
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

		<script>var hostUrl = "assets/";</script>
		<script src="{{asset('plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('js/scripts.bundle.js')}}"></script>
		<script src="{{asset('js/custom/authentication/password-reset/new-password.js')}}"></script>
	</body>
</html>