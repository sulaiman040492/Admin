@extends('layouts.client')

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
								

							@include('client.profile.profile-header',['file'=>'profile'])


								<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
									<div class="card-header cursor-pointer">
										<div class="card-title m-0">
											<!-- <div class="card-title fs-3 fw-bolder">ID <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span> -->
											<!-- <small class="text-muted fs-7 fw-bold my-1 ms-1">XD-1</small></div> -->
										</div>
										<div class="mt-4">
											<!-- <a href="user-proflie-edit.php" class="btn btn-primary align-self-center">Share Profile</a> -->
										</div>
									</div>

									<div class="card-body p-9">

										<div class="row mb-7">
											<h1>Introduction</h1>
										</div>

										@if(Auth::guard('client')->user() != null)

										<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Full Name</label>

											<div class="col-lg-8">
												<span class="fw-bolder fs-6 text-gray-800">{{Auth::guard('client')->user()->first_name}} {{Auth::guard('client')->user()->last_name}}</span>
											</div>
										</div>

										<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Email</label>

											<div class="col-lg-8">
												<span class="fw-bolder fs-6 text-gray-800">{{Auth::guard('client')->user()->email}}</span>
											</div>
										</div>

										<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Phone Number</label>

											<div class="col-lg-8">
												<span class="fw-bolder fs-6 text-gray-800">{{Auth::guard('client')->user()->phone_no}}</span>
											</div>
										</div>

										<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Contact Facebook
											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Facebook Account must be active"></i></label>

											<div class="col-lg-8 d-flex align-items-center">
												<span class="fw-bolder fs-6 text-gray-800 me-2">@user-name</span>
												<span class="badge badge-success">Verified</span>
											</div>
										</div>

										<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Address
											</label>

											<div class="col-lg-8">
												<span class="fw-bolder fs-6 text-gray-800">{{Auth::guard('client')->user()->address}}</span>
											</div>
										</div>

										<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Availability
											</label>

											<div class="col-lg-8">
												<span class="fw-bolder fs-6 text-gray-800">{{Auth::guard('client')->user()->availability}}</span>
											</div>
										</div>

										<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">About {{Auth::guard('client')->user()->first_name}} {{Auth::guard('client')->user()->last_name}}
											</label>

											<div class="col-lg-8">
												<span class="fw-bolder fs-6 text-gray-800">{{Auth::guard('client')->user()->description}}</span>
											</div>
										</div>


										<div class="row mb-7">
											<h1>Experience</h1>
										</div>

										<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Job
											</label>

											<div class="col-lg-8">
												<span class="fw-bolder fs-6 text-gray-800">{{Auth::guard('client')->user()->job_title}}</span>
											</div>
										</div>

										<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Experience
											</label>

											<div class="col-lg-8">
												<span class="fw-bolder fs-6 text-gray-800">{{Auth::guard('client')->user()->experience}}</span>
											</div>
										</div>


										<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Company
											</label>

											<div class="col-lg-8">
												<span class="fw-bolder fs-6 text-gray-800">{{Auth::guard('client')->user()->company}}</span>
											</div>
										</div>


										<div class="row mb-7">
											<h1>Education</h1>
										</div>

										<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Degree / Diploma
											</label>

											<div class="col-lg-8">
												<span class="fw-bolder fs-6 text-gray-800">{{Auth::guard('client')->user()->degree}}</span>
											</div>
										</div>

										<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">University / Institute
											</label>

											<div class="col-lg-8">
												<span class="fw-bolder fs-6 text-gray-800">{{Auth::guard('client')->user()->institute}}</span>
											</div>
										</div>






										<!-- <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
											<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
													<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
													<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
												</svg>
											</span>

											<div class="d-flex flex-stack flex-grow-1">
												
												<div class="fw-bold">
													<h4 class="text-gray-900 fw-bolder">We need your attention!</h4>
													<div class="fs-6 text-gray-700">Your payment was declined. To start using tools, please
													<a class="fw-bolder" href="payment-method.php">Add Payment Method</a>.</div>
												</div>
											</div>
										</div> -->
										@endif
									</div>
								</div>
							</div>
						</div>
					</div>


								@endsection