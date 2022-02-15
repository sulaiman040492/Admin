@if(isset($profiles) && count($profiles) > 0)
													@foreach($profiles['data'] as $key => $profile)
													
													<div class="col-md-12 col-xl-12 col-xxl-12">
														<div class="card">
															<div class="card-body d-flex menu-sm-down-column align-items-flex-start pt-12 p-9 w-100">
																<div class="symbol symbol-65px symbol-circle mb-5">
																	<img 
																	@if($profile['image'] != null)
																	src="{{asset('provider/images/avatars/'.$profile['image'])}}"
																	@else
																	src="{{asset('provider/images/avatars/default.png')}}"
																	@endif
																	alt="image" />
																	<div class="bg-success position-absolute border border-4 border-white h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
																</div>

																<div class="d-flex flex-column ps-10 pe-10">
																	<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">{{$profile['first_name']}} {{$profile['last_name']}}</a>
																	
																	<div class="fw-bold text-gray-600 mb-4">
																		Experience: {{$profile['experience']}} years
																	</div>


																	<div class="fw-bold text-gray-600 mb-6">
																		{{$profile['description']}}
																	</div>


																	<a href="{{route('receiver.otherprofile',$profile['slug'])}}" class="w-150px">
																		<span>View Details</span>
																	</a>
																</div>
																	
																<div class="d-flex flex-center flex-wrap ms-10 mb-5">
																	@if(in_array($profile['id'],$hired_profiles))
																		<a href="javascript:;" class="btn btn-default remove_apply w-150px" id="{{$profile['id']}}">
																			<span>Cancel</span>
																		</a>
																	@else
																		<a href="javascript:;" class="btn btn-success btn-sm apply_btn  w-150px" id="{{$profile['id']}}">
																			<span>Hire</span>
																		</a>
																	@endif
																</div>
															</div>
														</div>
													</div>
													@endforeach
													@else
													<h1>No Job Found!</h1>
													@endif