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
								

							@include('admin.profile.profile-header',['file'=>'profile'])


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

										@if(Auth::guard('admin')->user() != null)

										<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Full Name</label>

											<div class="col-lg-8">
												<span class="fw-bolder fs-6 text-gray-800">{{Auth::guard('admin')->user()->name}}</span>
											</div>
										</div>

										<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Email</label>

											<div class="col-lg-8">
												<span class="fw-bolder fs-6 text-gray-800">{{Auth::guard('admin')->user()->email}}</span>
											</div>
										</div>


										
										@endif
									</div>
								</div>
							</div>
						</div>
					</div>


								@endsection