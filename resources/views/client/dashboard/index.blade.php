@extends('layouts.client')
@section('content')

<style type="text/css">
  		.ajax-load{
  			background: #e1e1e1;
		    padding: 10px 0px;
		    width: 100%;
  		}
  	</style>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<div class="toolbar" id="kt_toolbar">
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Dashboard</h1>
								</div>					
							</div>
						</div>

						<div class="post d-flex flex-column-fluid" id="kt_post">
							<div id="kt_content_container" class="container-fluid">
								<div class="d-flex flex-column flex-lg-row">
									<div class="flex-lg-row-fluid">
										<div class="d-flex flex-wrap flex-stack pb-7">
											<div class="d-flex flex-wrap align-items-center my-1">
												<h3 class="fw-bolder me-5 my-1">3 Items Found
												<span class="text-gray-400 fs-6">by Recent Updates ↓</span></h3>
											</div>
										</div>

										<div class="tab-content">
											<div id="kt_project_users_card_pane" class="tab-pane fade show active">
												<div class="row g-6 g-xl-9 data">
													@include('client.common.jobs-data')
													<div style="display:none" class="ajax-load">
														<p><img src="http://demo.onlinecode/plugin/loader.gif">Loading More post</p>
													</div>
												</div>
												<!--end::Row-->
												<!--begin::Pagination-->
												
												<!--end::Pagination-->
											</div>
											<!--end::Tab pane-->
											<!--begin::Tab pane-->
											
											<!--end::Tab pane-->
										</div>
										<!--end::Tab Content-->
									</div>

									<div class="flex-column flex-lg-row-auto w-100 w-lg-250px w-xxl-325px mb-8 mb-lg-0 ms-lg-9 me-5 mt-17">
										<!--begin::Form-->
										<form>
											<!--begin::Card-->
											<div class="card">
												<!--begin::Body-->
												<div class="card-body">
													<!--begin:Search-->
													<div class="position-relative">
														<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
														<span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
																<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Search" id="search"/>
													</div>
													<!--end:Search-->
													<!--begin::Border-->
													<div class="separator separator-dashed my-8"></div>
													<!--end::Border-->
													<!--begin::Input group-->
													<div class="mb-5">
														<label class="fs-6 form-label fw-bolder text-dark">Find</label>
														<!--begin::Select-->
														<select class="form-select form-select-solid" data-control="select2" data-placeholder="In Progress" data-hide-search="true">
															<option value=""></option>
															<option value="1">Babysitter/Nanny</option>
															<option value="2" selected="selected">HouseKeeping</option>
															<option value="3">Senior Care</option>
															<option value="4">School Suppot</option>
															<option value="5">Pet Care</option>
														</select>
														<!--end::Select-->
													</div>

													<div class="mb-5">
														<label class="fs-6 form-label fw-bolder text-dark">Hourly Rate</label>
														<!--begin::Dialer-->
														<div class="position-relative" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="50000" data-kt-dialer-step="1" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
															<!--begin::Decrease control-->
															<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
																<!--begin::Svg Icon | path: icons/duotune/general/gen042.svg-->
																<span class="svg-icon svg-icon-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
																		<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</button>
															<!--end::Decrease control-->
															<!--begin::Input control-->
															<input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="$50" />
															<!--end::Input control-->
															<!--begin::Increase control-->
															<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
																<!--begin::Svg Icon | path: icons/duotune/general/gen041.svg-->
																<span class="svg-icon svg-icon-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
																		<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black" />
																		<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</button>
															<!--end::Increase control-->
														</div>
														<!--end::Dialer-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-10">
														<label class="fs-6 form-label fw-bolder text-dark mb-5">Search by Area</label>
														<!--begin::Checkbox-->
														<div class="form-check form-check-custom form-check-solid mb-5">
															<input class="form-check-input" type="checkbox" id="kt_search_category_1" />
															<label class="form-check-label flex-grow-1 fw-bold text-gray-700 fs-6" for="kt_search_category_1">East</label>
															<span class="text-gray-400 fw-bolder">28</span>
														</div>
														<!--end::Checkbox-->
														<!--begin::Checkbox-->
														<div class="form-check form-check-custom form-check-solid mb-5">
															<input class="form-check-input" type="checkbox" id="kt_search_category_2" checked="checked" />
															<label class="form-check-label flex-grow-1 fw-bold text-gray-700 fs-6" for="kt_search_category_2">Central</label>
															<span class="text-gray-400 fw-bolder">307</span>
														</div>
														<!--end::Checkbox-->
														<!--begin::Checkbox-->
														<div class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" id="kt_search_category_3" />
															<label class="form-check-label flex-grow-1 fw-bold text-gray-700 fs-6" for="kt_search_category_3">West</label>
															<span class="text-gray-400 fw-bolder">54</span>
														</div>
														<!--end::Checkbox-->
													</div>
													<!--end::Input group-->
													<!--begin::Action-->
													<div class="d-flex align-items-center justify-content-end">
														<a href="#" class="btn btn-active-light-primary btn-color-gray-400 me-3">Discard</a>
														<a href="#" class="btn btn-primary">Search</a>
													</div>
													<!--end::Action-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Card-->
										</form>
										<!--end::Form-->
									</div>
									<!--end::Layout-->
								</div>
							</div>
						</div>
					</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

	var page = 1;
	var scroll = true;

	$(window).scroll(function() {
	    if($(window).scrollTop() + $(window).height() >= $(document).height()) {
	        page++;
			if(scroll){
				var chk = loadMoreData(page);
				if(!chk){
					scroll = false;
				}
			}
			else{
		
			}
	    }
	});


	$('#search').keyup(function(){
		var search = $(this).val();
			$.ajax(
			{
	            url: '?search=' + search,
	            type: "get",
	            beforeSend: function()
	            {
	                $('.ajax-load').show();
	            }
	        })
			.done(function(data)
	        {
	            if(data.html == " "){
	                $('.ajax-load').html("No more records found");
	            }
	            $('.ajax-load').hide();
	            $(".data").html(data.html);
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	              alert('server not responding...');
	        });
	});



	function loadMoreData(page){
	  $.ajax(
	        {
	            url: '?page=' + page,
	            type: "get",
	            beforeSend: function()
	            {
	                $('.ajax-load').show();
	            }
	        })
	        .done(function(data)
	        {
	            if(data.html == " "){
	                $('.ajax-load').html("No more records found");
	                return false;
	            }
	            $('.ajax-load').hide();
	            $(".data").append(data.html);
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	              alert('server not responding...');
	        });
	}

</script>

					@endsection
					