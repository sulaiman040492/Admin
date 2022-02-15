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
							<p>sulaimanj.spout@gmail.com</p>

						</div>

						<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(assets/media/illustrations/sketchy-1/13.png"></div>
					</div>
				</div>

				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<div class="w-lg-500px p-10 p-lg-15 mx-auto">
							@if(Session::has('error'))
								<div class="alert alert-danger">
										<ul>
											<li>{{ Session::get('error') }}</li>
										</ul>
									</div>
							@endif
							@if (session('status'))
								<div class="alert alert-success" role="alert">
								{{ session('status') }}
								</div>
								@endif
							{{-- <form method="POST" action="{{url('receiver.password.email')}}" class="form w-100" novalidate="novalidate" id="kt_password_reset_form1"> --}}
							<form method="POST" action="{{route('receiver.password.email')}}" class="form w-100" id="kt_password_reset_form1">
								@csrf
								<div class="text-center mb-10">
									<h1 class="text-dark mb-3">Forgot Password ?</h1>
									<div class="text-gray-400 fw-bold fs-4">Enter your email to reset your password.</div>
								</div>

								<div class="fv-row mb-10">
									<label class="form-label fw-bolder text-gray-900 fs-6">Email</label>
									<input class="form-control form-control-solid @error('email') is-invalid boarder-danger @enderror" type="email" placeholder=""  name="email" autocomplete="off" />
									@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>

								<div class="d-flex flex-wrap justify-content-center pb-lg-0">
									<button type="submit" id="kt_password_reset_submit" class="btn btn-lg btn-primary fw-bolder me-4">
										<span class="indicator-label">Submit</span>
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
									<a href="{{route('receiver.login')}}" class="btn btn-lg btn-light-primary fw-bolder">Cancel</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script>var hostUrl = "assets/";</script>
		<script src="{{asset('/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('/js/scripts.bundle.js')}}"></script>
		<script src="{{asset('/js/custom/authentication/password-reset/password-reset.js')}}"></script>
	</body>
</html>