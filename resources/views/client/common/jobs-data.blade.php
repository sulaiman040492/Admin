@if(isset($jobs) && count($jobs['data']) > 0)
													@foreach($jobs['data'] as $key => $job)
													<div class="col-md-12 col-xl-12 col-xxl-12">
														<div class="card">
															<div class="card-body d-flex menu-sm-down-column align-items-flex-start pt-12 p-9 w-100">
																<div class="symbol symbol-65px symbol-circle mb-5">
																	<img 
																	@if($job['clients']['image'] != null)
																	src="{{asset('client/images/avatars/'.$job['clients']['image'])}}"
																	@else
																	src="{{asset('clients/images/avatars/default.png')}}"
																	@endif
																	alt="image" />
																	<div class="bg-success position-absolute border border-4 border-white h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
																</div>

																<div class="d-flex flex-column ps-10 pe-10">
																	<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">{{$job['clients']['first_name']}} {{$job['clients']['last_name']}}</a>
																	
																	<div class="fw-bold text-gray-600 mb-6">
																		Experience {{$job['clients']['experience']}} Year
																	</div>

																	<div class="fw-normal text-gray-400 mb-6">
																		{{$job['clients']['description']}}
																	</div>

																	<a href="profile.php" class="btn btn-info w-150px">
																		<span>View More</span>
																	</a>
																</div>
																	
																	
																<div class="d-flex flex-center flex-wrap ms-10 mb-5">
																	<a href="#" class="btn btn-success w-150px">
																		<span>Apply</span>
																	</a>
																</div>
															</div>
														</div>
													</div>
													@endforeach
													@else
													<h1>No Job Found!</h1>
													@endif