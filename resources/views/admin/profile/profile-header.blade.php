<div class="card mb-5 mb-xxl-8">
									<div class="card-body pt-9 pb-0">
										

										@if($file != "other-profile")
										<div class="d-flex overflow-auto h-55px">
											<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap">
												<!--begin::Nav item-->
												<li class="nav-item w-80px">
													<a class="nav-link text-active-primary me-6 {{$file == 'profile' ?  'active' : ''}}" href="{{route('admin.profile')}}">
														Profile
													</a>
												</li>

												<li class="nav-item w-120px">
													<a class="nav-link text-active-primary me-6 {{$file == 'profile-edit' ?  'active' : ''}}" href="{{route('admin.profileEdit')}}">
														Edit Profile
													</a>
												</li>

												<li class="nav-item w-180px">
													<a class="nav-link text-active-primary me-6 {{$file == 'password-change' ?  'active' : ''}}" href="{{route('admin.passwordChange')}}">
														Change Password
													</a>
												</li>

												
											</ul>
										</div>
										@endif
									</div>
								</div>