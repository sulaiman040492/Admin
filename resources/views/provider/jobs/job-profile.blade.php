@extends('layouts.provider')
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
								<div class="card mb-5 mb-xxl-8">
									<div class="card-body pt-9 pb-0">
										<div class="d-flex flex-wrap flex-sm-nowrap mb-3">
											<div class="me-7 mb-4">
												<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
													<img 
													@if($job[0]['receivers']['image'] != null)
														src="{{asset('provider/images/avatars/'.$job[0]['receivers']['image'])}}"
													@else
														src="{{asset('provider/images/avatars/default.png')}}"
													@endif
													alt="image" />
													<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
												</div>
											</div>

											<div class="flex-grow-1">
												<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
													<div class="d-flex flex-column">
														<div class="d-flex align-items-center mb-2">
															<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{$job[0]['receivers']['first_name']}} {{$job[0]['receivers']['last_name']}}</a>
															<a href="#" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Varified Your Account">
																<span class="svg-icon svg-icon-1 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																		<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="#00A3FF" />
																		<path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
																	</svg>
																</span>
															</a>
														</div>

														<div class="d-flex flex-wrap fw-bold fs-6 mb-1 pe-2">
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Job Type">
																<span class="svg-icon svg-icon-4 me-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
																		<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
																	</svg>
																</span>
																{{$job[0]['category']['name']}}
															</a>
														</div>

														<div class="d-flex flex-wrap fw-bold fs-6 mb-1 pe-2">
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Hourly Rate">
																<span class="svg-icon svg-icon-4 me-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M21.6 11.2L19.3 8.89998V5.59993C19.3 4.99993 18.9 4.59993 18.3 4.59993H14.9L12.6 2.3C12.2 1.9 11.6 1.9 11.2 2.3L8.9 4.59993H5.6C5 4.59993 4.6 4.99993 4.6 5.59993V8.89998L2.3 11.2C1.9 11.6 1.9 12.1999 2.3 12.5999L4.6 14.9V18.2C4.6 18.8 5 19.2 5.6 19.2H8.9L11.2 21.5C11.6 21.9 12.2 21.9 12.6 21.5L14.9 19.2H18.2C18.8 19.2 19.2 18.8 19.2 18.2V14.9L21.5 12.5999C22 12.1999 22 11.6 21.6 11.2Z" fill="black"/>
																		<path d="M11.3 9.40002C11.3 10.2 11.1 10.9 10.7 11.3C10.3 11.7 9.8 11.9 9.2 11.9C8.8 11.9 8.40001 11.8 8.10001 11.6C7.80001 11.4 7.50001 11.2 7.40001 10.8C7.20001 10.4 7.10001 10 7.10001 9.40002C7.10001 8.80002 7.20001 8.4 7.30001 8C7.40001 7.6 7.7 7.29998 8 7.09998C8.3 6.89998 8.7 6.80005 9.2 6.80005C9.5 6.80005 9.80001 6.9 10.1 7C10.4 7.1 10.6 7.3 10.8 7.5C11 7.7 11.1 8.00005 11.2 8.30005C11.3 8.60005 11.3 9.00002 11.3 9.40002ZM10.1 9.40002C10.1 8.80002 10 8.39998 9.90001 8.09998C9.80001 7.79998 9.6 7.70007 9.2 7.70007C9 7.70007 8.8 7.80002 8.7 7.90002C8.6 8.00002 8.50001 8.2 8.40001 8.5C8.40001 8.7 8.30001 9.10002 8.30001 9.40002C8.30001 9.80002 8.30001 10.1 8.40001 10.4C8.40001 10.6 8.5 10.8 8.7 11C8.8 11.1 9 11.2001 9.2 11.2001C9.5 11.2001 9.70001 11.1 9.90001 10.8C10 10.4 10.1 10 10.1 9.40002ZM14.9 7.80005L9.40001 16.7001C9.30001 16.9001 9.10001 17.1 8.90001 17.1C8.80001 17.1 8.70001 17.1 8.60001 17C8.50001 16.9 8.40001 16.8001 8.40001 16.7001C8.40001 16.6001 8.4 16.5 8.5 16.4L14 7.5C14.1 7.3 14.2 7.19998 14.3 7.09998C14.4 6.99998 14.5 7 14.6 7C14.7 7 14.8 6.99998 14.9 7.09998C15 7.19998 15 7.30002 15 7.40002C15.2 7.30002 15.1 7.50005 14.9 7.80005ZM16.6 14.2001C16.6 15.0001 16.4 15.7 16 16.1C15.6 16.5 15.1 16.7001 14.5 16.7001C14.1 16.7001 13.7 16.6 13.4 16.4C13.1 16.2 12.8 16 12.7 15.6C12.5 15.2 12.4 14.8001 12.4 14.2001C12.4 13.3001 12.6 12.7 12.9 12.3C13.2 11.9 13.7 11.7001 14.5 11.7001C14.8 11.7001 15.1 11.8 15.4 11.9C15.7 12 15.9 12.2 16.1 12.4C16.3 12.6 16.4 12.9001 16.5 13.2001C16.6 13.4001 16.6 13.8001 16.6 14.2001ZM15.4 14.1C15.4 13.5 15.3 13.1 15.2 12.9C15.1 12.6 14.9 12.5 14.5 12.5C14.3 12.5 14.1 12.6001 14 12.7001C13.9 12.8001 13.8 13.0001 13.7 13.2001C13.6 13.4001 13.6 13.8 13.6 14.1C13.6 14.7 13.7 15.1 13.8 15.4C13.9 15.7 14.1 15.8 14.5 15.8C14.8 15.8 15 15.7 15.2 15.4C15.3 15.2 15.4 14.7 15.4 14.1Z" fill="black"/>
																	</svg>
																</span>
																${{$job[0]['hourly_rate']}}/hour
															</a>
														</div>

														<div class="d-flex flex-wrap fw-bold fs-6 mb-1 pe-2">
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="No of Kinds">
																<span class="svg-icon svg-icon-4 me-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black"></path>
																		<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black"></rect>
																	</svg>
																</span>
																{{$job[0]['number_of_children']}}
															</a>
														</div>

														<div class="d-flex flex-wrap fw-bold fs-6 mb-1 pe-2">
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Age Of Kinds">
																<span class="svg-icon svg-icon-4 me-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M8.4 14L15.6 8.79999L20 9.90002V6L16 4L9 11L5 12V14H8.4Z" fill="black"/>
																		<path d="M21 18H20V12L16 11L9 16H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z" fill="black"/>
																	</svg>
																</span>
																{{$job[0]['children_ages']}}
															</a>
														</div>

														<div class="d-flex flex-wrap fw-bold fs-6 mb-1 pe-2">
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Schedule">
																<span class="svg-icon svg-icon-4 me-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black"></path>
																		<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black"></path>
																		<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black"></path>
																	</svg>
																</span>
																{{($job[0]['days'] != null) ? $job[0]['days'] : 'one-time' }}
															</a>
														</div>

														<div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
															<a href="javascript:;" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
																<span class="svg-icon svg-icon-4 me-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black"></path>
																		<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black"></path>
																	</svg>
																</span>
																{{$job[0]['receivers']['address']}}
															</a>
														</div>

													</div>
													<div class="d-flex my-4">
													
													<a href="{{route('provider.dashboard')}}" class="btn btn-sm btn-light fs-4 me-2 kt_apply_btn">
															<span class="svg-icon svg-icon-3 d-none">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="black"></path>
																	<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="black"></path>
																</svg>
															</span>

															<span class="indicator-label">Back</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</a>

														@if($applied_job != null)
														<a href="javascript:;" class="btn btn-sm btn-light fs-4 me-2 kt_apply_btn remove_btn" id="{{$job[0]['id']}}">
															<span class="svg-icon svg-icon-3 d-none">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="black"></path>
																	<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="black"></path>
																</svg>
															</span>

															<span class="indicator-label">Cancel</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</a>
														@else
														<a href="javascript:;" class="btn btn-sm btn-light fs-4 me-2 kt_apply_btn apply_btn" id="{{$job[0]['id']}}">
															<span class="svg-icon svg-icon-3 d-none">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="black"></path>
																	<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="black"></path>
																</svg>
															</span>

															<span class="indicator-label">Apply</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</a>
														@endif
													</div>
												</div>
											</div>
										</div>

										<div class="separator my-2"></div>

										<div class="row mb-8">
											<div class="col-md-4">
												<div class="fs-2 text-gray-900 fw-bolder pt-5 pb-3">Need Care Stating From</div>

												<div class="timeline-label custom-my mb-10">
													<div class="timeline-item">
														<div class="timeline-badge">
															<i class="fa fa-genderless text-warning fs-1"></i>
														</div>

														<div class="fw-normal timeline-content text-muted ps-3">Date: {{date('d-M-y', strtotime($job[0]['start_date']));  }}</div>
													</div>
													<div class="timeline-item">
														<div class="timeline-badge">
															<i class="fa fa-genderless text-success fs-1"></i>
														</div>

														<div class="timeline-content d-flex">
															<span class="fw-normal timeline-content text-muted ps-3">Day: {{($job[0]['days'] != null) ? $job[0]['days'] : 'one-time' }}</span>
														</div>
													</div>
													<div class="timeline-item">
														<div class="timeline-badge">
															<i class="fa fa-genderless text-info fs-1"></i>
														</div>

														<div class="timeline-content d-flex">
															<span class="fw-normal timeline-content text-muted ps-3">Duration: {{$job[0]['duration']}}</span>
														</div>
													</div>
													<div class="timeline-item">
														<div class="timeline-badge">
															<i class="fa fa-genderless text-dark fs-1"></i>
														</div>

														<div class="timeline-content d-flex">
															<span class="fw-normal timeline-content text-muted ps-3">Time: {{$job[0]['start_time']}}</span>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-4">
												<div class="fs-2 text-gray-900 fw-bolder pt-5 pb-3">Responsibilities</div>

												<div class="timeline-label custom-my mb-10">
													@php $colors = ["text-warning","text-success","text-info","text-dark"] @endphp
													@foreach($res as $key => $re)
														<div class="timeline-item">
															<div class="timeline-badge">
																<i class="fa fa-genderless {{$colors[$key]}} fs-1"></i>
															</div>

															<div class="fw-normal timeline-content text-muted ps-3">{{$re->value}}</div>
														</div>					
													@endforeach
													<!-- <div class="timeline-item">
														<div class="timeline-badge">
															<i class="fa fa-genderless text-warning fs-1"></i>
														</div>

														<div class="fw-normal timeline-content text-muted ps-3">Res 1</div>
													</div>
													<div class="timeline-item">
														<div class="timeline-badge">
															<i class="fa fa-genderless text-success fs-1"></i>
														</div>

														<div class="timeline-content d-flex">
															<span class="fw-normal timeline-content text-muted ps-3">Res 2</span>
														</div>
													</div>
													<div class="timeline-item">
														<div class="timeline-badge">
															<i class="fa fa-genderless text-info fs-1"></i>
														</div>

														<div class="timeline-content d-flex">
															<span class="fw-normal timeline-content text-muted ps-3">Res 3</span>
														</div>
													</div>
													<div class="timeline-item">
														<div class="timeline-badge">
															<i class="fa fa-genderless text-dark fs-1"></i>
														</div>

														<div class="timeline-content d-flex">
															<span class="fw-normal timeline-content text-muted ps-3">Res 4</span>
														</div>
													</div> -->
												</div>
											</div>

											<div class="col-md-4">
												<div class="fs-2 text-gray-900 fw-bolder pt-5 pb-3">Requirements</div>

												<div class="timeline-label custom-my mb-10">
												@foreach($req as $key => $requ)
														<div class="timeline-item">
															<div class="timeline-badge">
																<i class="fa fa-genderless {{$colors[$key]}} fs-1"></i>
															</div>

															<div class="fw-normal timeline-content text-muted ps-3">{{$requ->value}}</div>
														</div>					
													@endforeach
													<!-- <div class="timeline-item">
														<div class="timeline-badge">
															<i class="fa fa-genderless text-warning fs-1"></i>
														</div>

														<div class="fw-normal timeline-content text-muted ps-3">Req 1</div>
													</div>
													<div class="timeline-item">
														<div class="timeline-badge">
															<i class="fa fa-genderless text-success fs-1"></i>
														</div>

														<div class="timeline-content d-flex">
															<span class="fw-normal timeline-content text-muted ps-3">Req 2</span>
														</div>
													</div>
													<div class="timeline-item">
														<div class="timeline-badge">
															<i class="fa fa-genderless text-info fs-1"></i>
														</div>

														<div class="timeline-content d-flex">
															<span class="fw-normal timeline-content text-muted ps-3">Req 3</span>
														</div>
													</div>
													<div class="timeline-item">
														<div class="timeline-badge">
															<i class="fa fa-genderless text-dark fs-1"></i>
														</div>

														<div class="timeline-content d-flex">
															<span class="fw-normal timeline-content text-muted ps-3">Req 4</span>
														</div>
													</div> -->
												</div>
											</div>	
										</div>

										<div class="row mb-8">
											<div class="col-md-12">
												<div class="fs-2 text-gray-900 fw-bolder pt-5 pb-3">Description</div>

												<p class="fs-4 text-gray-400">
													{{$job[0]['description']}}
												</p>
											</div>
										</div>									
									</div>
								</div>
							</div>
						</div>
					</div>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script>
		$('.apply_btn').click(function(){
			  var id = $(this).attr('id');
			  var url = '{{ route("provider.apply_job", ":id") }}';
			  url = url.replace(':id', id);
			  $.ajax({
				  url:url,
				  type:"GET",
				  success:function(res){
					if(res == 1){
						Swal.fire(
 						 '',
  						 'Successfully apply on this job!',
  						 'success'
						).then(()=>{
							window.location.reload();
						})
						// $('.apply_btn .indicator-label').html('Cancel');
						// $('.apply_btn').removeClass('apply_btn').addClass('remove_apply');
					}
				  }
			  })
		  })
		  $('.remove_btn').click(function(){
			  var id = $(this).attr('id');
			  var url = '{{ route("provider.remove_apply", ":id") }}';
			  url = url.replace(':id', id);
			  $.ajax({
				  url:url,
				  type:"GET",
				  success:function(res){
					if(res == 1){
						Swal.fire(
 						 '',
  						 'Successfully Cancel Applying Request!',
  						 'success'
						).then(()=>{
							window.location.reload();
						})
						
						// $('.remove_apply .indicator-label').html('Apply');
						// $('.remove_apply').removeClass('remove_apply').addClass('apply_btn');
					}
				  }
			  })
		  })
		</script>

		@endsection