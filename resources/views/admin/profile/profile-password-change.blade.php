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
								

							@include('client.profile.profile-header',['file'=>'password-change'])



<div class="row g-6 g-xl-9 mb-6 mb-xl-9">
									<div class="col-md-12">
										<div class="card">
											<div class="card-body pt-5">
												<div class="d-flex flex-column flex-lg-row-fluid py-10">
													<div class="d-flex flex-center flex-column flex-column-fluid">
														<div class="w-lg-550px p-10 p-lg-15 mx-auto">
															<form class="form w-100" novalidate="novalidate" id="kt_new_password_form" method="post" action="{{route('client.passwordChangeProcess')}}">
																@csrf
																<div class="text-center mb-10">
																	<h1 class="text-dark mb-3">Change Password</h1>
																</div>

																<div class="fv-row mb-10">
																	<label class="form-label fw-bolder text-dark fs-6">Old Password</label>
																	<input class="form-control form-control-lg form-control-solid @error('old-password') border-danger is-invalid @enderror" type="password" placeholder="" name="old-password" value="{{ old('old-password') }}" autocomplete="off" />
																	@error('old-password')
                                        							<span class="invalid-feedback" role="alert">
                                            							<strong>{{ $message }}</strong>
                                        							</span>
                                    								@enderror
																</div>

																<div class="mb-10 fv-row" data-kt-password-meter="true">
																	<div class="mb-1">
																		<label class="form-label fw-bolder text-dark fs-6">Password</label>

																		<div class="position-relative mb-3">
																			<input class="form-control form-control-lg form-control-solid @error('password') border-danger is-invalid @enderror" type="password" placeholder="" value="{{ old('password') }}" name="password" autocomplete="off" />
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

																<div class="fv-row mb-10">
																	<label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
																	<input class="form-control form-control-lg form-control-solid @error('password_confirmation ') border-danger is-invalid @enderror" type="password" placeholder="" name="password_confirmation" value="{{ old('password_confirmation') }}" autocomplete="off" />
																	@error('password_confirmation ')
                                        									<span class="invalid-feedback" role="alert">
                                            									<strong>{{ $message }}</strong>
                                        									</span>
                                    								@enderror
																</div>

																<!-- <div class="fv-row mb-10">
																	<div class="form-check form-check-custom form-check-solid form-check-inline">
																		<input class="form-check-input" type="checkbox" name="toc" value="1" />
																		<label class="form-check-label fw-bold text-gray-700 fs-6">I Agree &amp;
																		<a href="#" class="ms-1 link-primary">Terms and conditions</a>.</label>
																	</div>
																</div> -->

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
									</div>
								</div>

								@endsection