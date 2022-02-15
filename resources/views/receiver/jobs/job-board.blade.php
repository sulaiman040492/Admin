@extends('layouts.receiver')

@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<div class="toolbar" id="kt_toolbar">
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
										Dashboard
										<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
										<small class="text-muted fs-7 fw-bold my-1 ms-1">Jobs</small>
									</h1>
								</div>					
							</div>
						</div>

						<div class="post d-flex flex-column-fluid" id="kt_post">
							<div id="kt_content_container" class="container-fluid">
								<div class="row g-5 g-xl-8">
									@if(isset($categories))
									@if(count($categories) > 0)
									@foreach($categories as $value)
									<div class="col-xl-3">
										<div class="card card-xl-stretch mb-xl-8">
											<a href="{{route('receiver.job.create',['slug'=>$value->slug])}}" class="card-body d-flex align-items-center pt-3 pb-0">
												<div class="d-flex flex-column flex-grow-1 py-2 py-lg-13 me-2">
													<h6 class="fw-bolder text-dark fs-4 mb-2 text-hover-primary">{{$value->name}}</h6>
													<span class="fw-bold text-muted fs-5 text-hover-primary">Can You Post Job Click Me!</span>
												</div>
												<img src="{{asset("/images/categories/{$value->icon}")}}" alt="" class="align-self-end h-100px" />
											</a>
										</div>
									</div>
									@endforeach
									@else
									<h1>No Service Found!</h1>
									@endif
									@endif

								</div>
							</div>
						</div>
					</div>
@endsection
