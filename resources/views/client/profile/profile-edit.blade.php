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
								

							
							@include('client.profile.profile-header',['file'=>'profile-edit'])

								<div class="card">
									<div class="card-header">
										<div class="card-title fs-3 fw-bolder">ID <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
										<small class="text-muted fs-7 fw-bold my-1 ms-1">XD-1</small></div>
									</div>





									<form id="kt_project_settings_form_custom" class="form" action="{{route('client.profileUpdate')}}" method="POST" enctype="multipart/form-data">
										@csrf
										<div class="card-body p-9">
											<div class="row mb-5">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Profile</div>
												</div>

												<div class="col-lg-8">
													<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/avatars/blank.png')">

														<div class="image-input-wrapper w-125px h-125px bgi-position-center" style="background-size: 95%; 
														@if(Auth::guard('client')->user()->image != null)
														background-image: url('{{asset('client/images/avatars/').'/'.Auth::guard('client')->user()->image}}')
														@else
														background-image: url('{{asset('client/images/avatars/default.png')}}')
														@endif
														"></div>

														<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
															<i class="bi bi-pencil-fill fs-7"></i>
															<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
															<input type="hidden" name="avatar_remove" />
														</label>

														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
															<i class="bi bi-x fs-2"></i>
														</span>

														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
															<i class="bi bi-x fs-2"></i>
														</span>
													</div>

													<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">First Name</div>
												</div>

												<div class="col-xl-9 fv-row">
												<input type="hidden" name="id" value="@if(Auth::guard('client')->user()->id != null) {{Auth::guard('client')->user()->id}} @endif" />
													<input type="text" class="form-control form-control-solid" name="fname" value="@if(Auth::guard('client')->user()->first_name != null) {{Auth::guard('client')->user()->first_name}} @endif" />
												</div>
											</div>


											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Last Name</div>
												</div>

												<div class="col-xl-9 fv-row">
													<input type="text" class="form-control form-control-solid" name="lname" value="@if(Auth::guard('client')->user()->last_name != null) {{Auth::guard('client')->user()->last_name}} @endif" />
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Email</div>
												</div>

												<div class="col-xl-9 fv-row">
													<input type="email" class="form-control form-control-solid" name="email" value="@if(Auth::guard('client')->user()->email != null) {{Auth::guard('client')->user()->email}} @endif" />
												</div>
											</div>


											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Date of Birth</div>
												</div>

												<div class="col-xl-9 fv-row">
												@if(Auth::guard('client')->user()->date_of_birth != null)
													<input type="text" class="form-control form-control-solid" name="date_of_birth" id="dob_old" value="{{Auth::guard('client')->user()->date_of_birth}}" readonly/>
												@endif
													<input type="date" class="form-control form-control-solid" id="dob_new" />
												</div>
											</div>


											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Phone Number</div>
												</div>

												<div class="col-xl-9 fv-row">
													<input type="text" class="form-control form-control-solid" name="phone" value="@if(Auth::guard('client')->user()->phone_no != null) {{Auth::guard('client')->user()->phone_no}} @endif" />
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Address</div>
												</div>

												<div class="col-xl-9 fv-row">
													<textarea name="address" class="form-control form-control-solid h-60px">@if(Auth::guard('client')->user()->address != null) {{Auth::guard('client')->user()->address}} @endif</textarea>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Postal Code</div>
												</div>

												<div class="col-xl-9 fv-row">
												<input type="text" class="form-control form-control-solid" name="postal" value="@if(Auth::guard('client')->user()->postal != null) {{Auth::guard('client')->user()->postal}} @endif" />
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">City</div>
												</div>

												<div class="col-xl-9 fv-row">
													<textarea name="city" class="form-control form-control-solid h-60px">@if(Auth::guard('client')->user()->city != null) {{Auth::guard('client')->user()->city}} @endif</textarea>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Country</div>
												</div>

												<div class="col-xl-9 fv-row">
													<textarea name="country" class="form-control form-control-solid h-60px">@if(Auth::guard('client')->user()->country != null) {{Auth::guard('client')->user()->country}} @endif</textarea>
												</div>
											</div>


											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Hourly Rate</div>
												</div>

												<div class="col-xl-9 fv-row">
													<input type="text" class="form-control form-control-solid" name="hourly_rate" value="@if(Auth::guard('client')->user()->hourly_rate != null) {{Auth::guard('client')->user()->hourly_rate}} @endif" />
												</div>
											</div>

											<!-- <div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Connect Facebook</div>
												</div>

												<div class="col-xl-9 fv-row">
													<a href="javascript:;" class="btn btn-flex flex-center btn-light btn-lg mb-5">
														<img alt="Logo" src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3">Continue with Facebook
													</a>
												</div>
											</div> -->


											<div class="row mb-8 ">
												<div class="col-xl-12">
													<div class="fs-4 fw-bold mt-2 mb-3">Education</div>
												</div>
												<div class="separator my-2"></div>
											</div>

										

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Degree</div>
												</div>

												<div class="col-xl-9 fv-row">
													<input type="text" class="form-control form-control-solid" name="degree_title" value="@if(isset(Auth::guard('client')->user()->degree) && Auth::guard('client')->user()->degree != null) {{Auth::guard('client')->user()->degree}} @endif"/>
												</div>
											</div>

								

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Institute</div>
												</div>

												<div class="col-xl-9 fv-row" id="">
													<input class="form-control form-control-solid" name="institute_name" value="@if(isset(Auth::guard('client')->user()->institute) && Auth::guard('client')->user()->institute != null) {{Auth::guard('client')->user()->institute}} @endif"/>
												</div>
											</div>



											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">From Date</div>
												</div>

												<div class="col-xl-9 fv-row" id="">
													@if(isset($edu->from_date) && $edu->from_date != null)
														<input type="text" class="form-control form-control-solid" name="from_date_ed" id="from_date_ed_old" value="{{Auth::guard('client')->user()->education_from}}" readonly/>
													@endif
													<input type="date" class="form-control form-control-solid"  id="from_date_ed_new" name="from_date_ed_new">
													<!-- <input class="form-control form-control-solid" value="" name="institute" /> -->
												</div>
											</div>




											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">To Date</div>
												</div>

												<div class="col-xl-9 fv-row" id="">
													@if(isset($edu->to_date) && $edu->to_date != null)
														<input type="text" class="form-control form-control-solid" name="to_date_ed" id="to_date_ed_old" value="{{Auth::guard('client')->user()->education_to}}" readonly/>
													@endif
													<input type="date" class="form-control form-control-solid" id="to_date_ed_new" name="to_date_ed_new">
													<!-- <input class="form-control form-control-solid" value="" name="institute" /> -->
												</div>
											</div>



											<!-- <div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Extra Courses</div>
												</div>

												<div class="col-xl-9 fv-row" id="">
													<h5>Old Courses : </h5>
													@if(isset($ext) && count($ext) > 0)
															@foreach($ext as $extra)
																{{$extra->value}} {{$loop->last ? '' : ',' }}
															@endforeach
													@endif
													<input class="form-control form-control-solid" value="" name="courses" />
												</div>
											</div> -->







											<div class="row mb-8 ">
												<div class="col-xl-12">
													<div class="fs-4 fw-bold mt-2 mb-3">Experience</div>
												</div>
												<div class="separator my-2"></div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Job Title</div>
												</div>

												<div class="col-xl-9 fv-row" id="kt_modal_new_target_form">
													<input class="form-control form-control-solid"  name="job_title" value="@if(isset(Auth::guard('client')->user()->job_title) && Auth::guard('client')->user()->job_title != null) {{Auth::guard('client')->user()->job_title}} @endif"/>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Compnany Name</div>
												</div>

												<div class="col-xl-9 fv-row" id="kt_modal_new_target_form">
													<input class="form-control form-control-solid" name="company_name" value="@if(isset(Auth::guard('client')->user()->company) && Auth::guard('client')->user()->company != null) {{Auth::guard('client')->user()->company}} @endif"/>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Experience</div>
												</div>

												<div class="col-xl-9 fv-row" id="kt_modal_new_target_form">
													<input class="form-control form-control-solid" name="experience" value="@if(isset(Auth::guard('client')->user()->experience) && Auth::guard('client')->user()->experience != null) {{Auth::guard('client')->user()->experience}} @endif"/>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">From Date</div>
												</div>

												<div class="col-xl-9 fv-row" id="kt_modal_new_target_form">
													@if(isset(Auth::guard('client')->user()->experience_from) && Auth::guard('client')->user()->experience_from != null)
														<input type="text" class="form-control form-control-solid" name="from_date_ex" id="from_date_ex_old" value="{{Auth::guard('client')->user()->experience_from}}" readonly/>
													@endif
													<input type="date" class="form-control form-control-solid" id="from_date_ex_new">
													<!-- <input class="form-control form-control-solid" name="institute" /> -->
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">To Date</div>
												</div>

												<div class="col-xl-9 fv-row" id="kt_modal_new_target_form">
													@if(isset(Auth::guard('client')->user()->experience_to) && Auth::guard('client')->user()->experience_to != null)
														<input type="text" class="form-control form-control-solid" name="to_date_ex" id="to_date_ex_old" value="{{Auth::guard('client')->user()->experience_to}}" readonly/>
													@endif
													<input type="date" class="form-control form-control-solid" id="to_date_ex_new">
													<!-- <input class="form-control form-control-solid" name="institute" /> -->
												</div>
											</div>


											<!-- <div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Extra Courses</div>
												</div>

												<div class="col-xl-9 fv-row" id="kt_modal_new_target_form">
													<input class="form-control form-control-solid" name="courses" />
												</div>
											</div> -->

											
											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Availability</div>
												</div>

												<div class="col-xl-9 fv-row">
													<textarea name="availability" class="form-control form-control-solid h-150px">@if(Auth::guard('client')->user()->availability != null) {{Auth::guard('client')->user()->availability}} @endif</textarea>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Description</div>
												</div>

												<div class="col-xl-9 fv-row">
													<textarea name="description" class="form-control form-control-solid h-150px">@if(Auth::guard('client')->user()->description != null) {{Auth::guard('client')->user()->description}} @endif</textarea>
												</div>
											</div>


										</div>

										<div class="card-footer d-flex justify-content-end py-6 px-9">
											<a href="{{url('profile')}}"><button type="button" class="btn btn-light btn-active-light-primary me-2">Discard</button></a>
											<button type="submit" class="btn btn-primary">Save Changes</button>
										</div>
									</form>




									<!-- <form id="kt_project_settings_form" class="form">
										<div class="card-body p-9">
											<div class="row mb-5">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Profile</div>
												</div>


												<div class="col-lg-8">
													<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/avatars/blank.png')">
														<div class="image-input-wrapper w-125px h-125px bgi-position-center" style="background-size: 95%; background-image: url('assets/media/avatars/150-26.jpg')"></div>

														<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
															<i class="bi bi-pencil-fill fs-7"></i>
															<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
															<input type="hidden" name="avatar_remove" />
														</label>

														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
															<i class="bi bi-x fs-2"></i>
														</span>

														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
															<i class="bi bi-x fs-2"></i>
														</span>
													</div>

													<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Name</div>
												</div>

												<div class="col-xl-9 fv-row">
													<input type="text" class="form-control form-control-solid" name="name" value="Geoge" />
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Email</div>
												</div>

												<div class="col-xl-9 fv-row">
													<input type="email" class="form-control form-control-solid" name="email" value="royGeroge@gmail.com" />
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Area of Insterest</div>
												</div>

												<div class="col-xl-9 fv-row">
													<input type="text" class="form-control form-control-solid" name="insterest" value="House Caregiver" />
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Status</div>
												</div>

												<div class="col-xl-9">
													<div class="d-flex fw-bold h-100">
														<div class="form-check form-check-custom form-check-solid me-9">
															<input class="form-check-input" type="checkbox" value="" id="email" />
															<label class="form-check-label ms-3" for="email">Approved</label>
														</div>
														<div class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" id="phone" checked="checked" />
															<label class="form-check-label ms-3" for="phone">Non Approved</label>
														</div>
													</div>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Experience</div>
												</div>

												<div class="col-xl-9 fv-row">
													<input type="number" class="form-control form-control-solid" name="experience" value="0" />
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Hourly Rat</div>
												</div>

												<div class="col-xl-9 fv-row">
													<input type="time" class="form-control form-control-solid" name="hourly_rate" value="08:30" />
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Address</div>
												</div>

												<div class="col-xl-9 fv-row">
													<textarea name="address" class="form-control form-control-solid h-60px">1999 S Bascom Avenue, Suite 700, Campbell, CA  95008, Map & directions</textarea>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Plus Point</div>
												</div>

												<div class="col-xl-9 fv-row" id="kt_modal_new_target_form">
													<input class="form-control form-control-solid" value="Item One, Item Two" name="point"  data-bs-target="#kt_modal_new_target"/>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Additional Services</div>
												</div>

												<div class="col-xl-9 fv-row" id="kt_modal_new_target_form">
													<input class="form-control form-control-solid" value="Item One, Item Two" name="service"  data-bs-target="#kt_modal_new_target"/>
												</div>
											</div>

											<div class="row mb-8 ">
												<div class="col-xl-12">
													<div class="fs-4 fw-bold mt-2 mb-3">Education</div>
												</div>
												<div class="separator my-2"></div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Graduation</div>
												</div>

												<div class="col-xl-9 fv-row" id="kt_modal_new_target_form">
													<input class="form-control form-control-solid" value="from X, from Y" name="graduation"  data-bs-target="#kt_modal_new_target"/>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">High School</div>
												</div>

												<div class="col-xl-9 fv-row" id="kt_modal_new_target_form">
													<input class="form-control form-control-solid" value="from X, from Y" name="school"  data-bs-target="#kt_modal_new_target"/>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Extra Courses</div>
												</div>

												<div class="col-xl-9 fv-row" id="kt_modal_new_target_form">
													<input class="form-control form-control-solid" value="Item One, Item Two" name="courses"  data-bs-target="#kt_modal_new_target"/>
												</div>
											</div>											

											<div class="row mb-8 ">
												<div class="col-xl-12">
													<div class="fs-4 fw-bold mt-2 mb-3">Bio</div>
												</div>
												<div class="separator my-2"></div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Availability</div>
												</div>

												<div class="col-xl-9 fv-row">
													<textarea name="description" class="form-control form-control-solid h-150px">lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</textarea>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Description</div>
												</div>

												<div class="col-xl-9 fv-row">
													<textarea name="description" class="form-control form-control-solid h-150px">lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</textarea>
												</div>
											</div>
										</div>

										<div class="card-footer d-flex justify-content-end py-6 px-9">
											<button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
											<button type="submit" class="btn btn-primary" id="kt_project_settings_submit">Save Changes</button>
										</div>
									</form> -->
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