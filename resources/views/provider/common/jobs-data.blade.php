@if(isset($jobs) && count($jobs['data']) > 0)
													@foreach($jobs['data'] as $key => $job)
													@if(isset($job['receivers']) && count($job['receivers']) > 0)
													<div class="col-md-12 col-xl-12 col-xxl-12">
														<div class="card">
															<div class="card-body d-flex menu-sm-down-column align-items-flex-start pt-12 p-9 w-100">
																<div class="symbol symbol-65px symbol-circle mb-5">
																	<img 
																	@if($job['receivers']['image'] != null)
																	src="{{asset('receiver/images/avatars/'.$job['receivers']['image'])}}"
																	@else
																	src="{{asset('receivers/images/avatars/default.png')}}"
																	@endif
																	alt="image" />
																	<div class="bg-success position-absolute border border-4 border-white h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
																</div>

																<div class="d-flex flex-column ps-10 pe-10">
																	<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">{{$job['receivers']['first_name']}} {{$job['receivers']['last_name']}}</a>
																	
																	<div class="fw-bold text-gray-600 ">
																		Job Type: {{$job['category']['name']}}
																	</div>

																	<div class="fw-bold text-gray-600 ">
																		Hourly Rate: {{$job['hourly_rate']}}$
																	</div>

																	<div class="fw-bold text-gray-600 ">
																		Kids: {{$job['number_of_children']}}
																	</div>

																	<div class="fw-bold text-gray-600 ">
																		Age: {{$job['children_ages']}}
																	</div>

																	<div class="fw-bold text-gray-600 mb-6">
																		schedule: {{($job['days'] != null) ? $job['days'] : 'one-time'}}
																	</div>

																	<div class="fw-bold text-gray-600 mb-6">
																		{{$job['description']}}
																	</div>


																	<a href="{{route('provider.job_profile',$job['slug'])}}" class="w-150px">
																		<span>View Details</span>
																	</a>
																</div>
																	
																	
																<div class="d-flex flex-center flex-wrap ms-10 mb-5">
																	@if(in_array($job['id'],$applied_jobs))
																		<a href="javascript:;" class="btn btn-default remove_apply w-150px" id="{{$job['id']}}">
																			<span>Cancel</span>
																		</a>
																	@else
																		<a href="javascript:;" class="btn btn-success apply_btn  w-150px" id="{{$job['id']}}">
																			<span>Apply</span>
																		</a>
																	@endif
																</div>
															</div>
														</div>
													</div>
													@endif
													@endforeach
													@else
													<h1>No Job Found!</h1>
													@endif