
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
								
							@include('client.profile.profile-header',['file'=>'other-profile'])

								<div class="row g-6 g-xl-9 mb-6 mb-xl-9">
									<div class="col-md-6">
										<div class="card">
											<div class="card-header">
												<div class="card-title fs-3 fw-bolder">
													<h2 class="fw-bolder">About Us</h2>
												</div>										
											</div>

											<div class="card-body pt-5">
												<div class="timeline-label custom-my">
													<div class="timeline-item">
														<div class="timeline-badge">
															<i class="fa fa-genderless text-warning fs-1"></i>
														</div>

														<div class="fw-normal timeline-content text-muted ps-3">Has Car</div>
													</div>

													<div class="timeline-item">
														<div class="timeline-badge">
															<i class="fa fa-genderless text-success fs-1"></i>
														</div>

														<div class="timeline-content d-flex">
															<span class="fw-normal timeline-content text-muted ps-3">Speak Frenc</span>
														</div>
													</div>
												</div>

												<div class="fs-5 fw-bold text-gray-600 pt-10">
													<p class="mb-8">
														ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
													</p>

													<p class="mb-8">
														labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
													</p>

													<p class="mb-8">
														incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
													</p>

													<p class="mb-8">
														<a href="../../demo1/dist/pages/blog/home.html" class="link-info pe-1">Read More</a>
													</p>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="card">
											<div class="card-header">
												<div class="card-title fs-3 fw-bolder">
													<h2 class="fw-bolder">Background Varified</h2>
												</div>										
											</div>

											<div class="card-body pt-5">
												<div class="fs-5 fw-bold text-gray-600">
													<p class="mb-8">
														We encourage parents to conduct their own screenings using the background check tools.
														<br>
														See what each of the badges covered, or learn more about keeping your family safe by visiting the Trust & Safety Center.
														<br>
														We encourage parents to conduct their own screenings using the background check tools. 
													</p>
												</div>

												<div class="row g-6 g-xl-9 mb-6 mb-xl-9">
													<div class="col-md-6">
														<div class="card h-100">
															<div class="card-body d-flex justify-content-center text-center flex-column p-8">
																<a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">
																	<div class="symbol symbol-75px mb-5">
																		<img src="assets/media/svg/files/pdf.svg" alt="">
																	</div>

																	<div class="fs-5 fw-bolder mb-2">Enhanced Criminal</div>
																</a>

																<div class="fs-7 fw-bold text-gray-400">Never run</div>
															</div>
														</div>
													</div>

													<div class="col-md-6">
														<div class="card h-100">
															<div class="card-body d-flex justify-content-center text-center flex-column p-8">
																<a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">
																	<div class="symbol symbol-75px mb-5">
																		<img src="assets/media/svg/files/pdf.svg" alt="">
																	</div>

																	<div class="fs-5 fw-bolder mb-2">Basic Criminal</div>
																</a>

																<div class="fs-7 fw-bold text-gray-400">Expired on 11/05/2020</div>
															</div>
														</div>
													</div>

													<div class="col-md-6">
														<div class="card h-100">
															<div class="card-body d-flex justify-content-center text-center flex-column p-8">
																<a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">
																	<div class="symbol symbol-75px mb-5">
																		<img src="assets/media/svg/files/doc.svg" alt="">
																	</div>

																	<div class="fs-5 fw-bolder mb-2">Vehicle Records</div>
																</a>

																<div class="fs-7 fw-bold text-gray-400">Never run</div>
															</div>
														</div>
													</div>


													<div class="col-md-6">
														<div class="card h-100">
															<div class="card-body d-flex justify-content-center text-center flex-column p-8">
																<a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">
																	<div class="symbol symbol-75px mb-5">
																		<img src="assets/media/svg/files/pdf.svg" alt="">
																	</div>

																	<div class="fs-5 fw-bolder mb-2">First aid certification</div>
																</a>

																<div class="fs-7 fw-bold text-gray-400">Not reported</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row g-6 g-xl-9 mb-6 mb-xl-9">
									<div class="col-md-12">
										<div class="card">
											<div class="card-header">
												<div class="card-title fs-3 fw-bolder">
													<h2 class="fw-bolder">Ratings & reviews</h2>
												</div>										
											</div>

											<div class="card-body pt-5">
												<div class="row g-6 mb-6 g-xl-9 mb-xl-9">
													<div class="col-md-6 col-xxl-4">
														<div class="card notice d-flex bg-light-info rounded border-info border border-dashed rounded-3">
															<div class="card-body d-flex flex-center flex-column p-9">
																<div class="symbol symbol-65px symbol-circle mb-5">
																	<img src="assets/media//avatars/150-12.jpg" alt="image" />
																	<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-white h-15px w-15px ms-n3 mt-n3"></div>
																</div>

																<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">Chris</a>

																<div class="fw-bold text-gray-400 mb-2">21 Nov 2021</div>

																<span class="mb-6">
																	<i class="fa fa-star me-1 text-warning fs-5"></i> 
																	<i class="fa fa-star me-1 text-warning fs-5"></i>
																	<i class="fa fa-star me-1 text-warning fs-5"></i>
																	<i class="fa fa-star me-1 text-warning fs-5"></i>
																	<i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
																</span>

																<p class="text-center">
																	Generally available afternoons, evenings, late nights and w After school care availability
																</p>
															</div>
														</div>
													</div>

													<div class="col-md-6 col-xxl-4">
														<div class="card notice d-flex bg-light-info rounded border-info border border-dashed rounded-3">
															<div class="card-body d-flex flex-center flex-column p-9">
																<div class="symbol symbol-65px symbol-circle mb-5">
																	<img src="assets/media//avatars/150-2.jpg" alt="image" />
																	<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-white h-15px w-15px ms-n3 mt-n3"></div>
																</div>

																<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">cJhon</a>

																<div class="fw-bold text-gray-400 mb-2">18 Nov 2021</div>

																<span class="mb-6">
																	<i class="fa fa-star me-1 text-warning fs-5"></i> 
																	<i class="fa fa-star me-1 text-warning fs-5"></i>
																	<i class="fa fa-star me-1 text-warning fs-5"></i>
																	<i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
																	<i class="far fa-star me-1 text-warning fs-5"></i>
																</span>

																<p class="text-center">
																	Generally available afternoons, evenings, late nights and w After school care availability
																</p>
															</div>
														</div>
													</div>

													<div class="col-md-6 col-xxl-4">
														<div class="card notice d-flex bg-light-info rounded border-info border border-dashed rounded-3">
															<div class="card-body d-flex flex-center flex-column p-9">
																<div class="symbol symbol-65px symbol-circle mb-5">
																	<img src="assets/media//avatars/150-5.jpg" alt="image" />
																	<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-white h-15px w-15px ms-n3 mt-n3"></div>
																</div>

																<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">Bella</a>

																<div class="fw-bold text-gray-400 mb-2">10 Nov 2021</div>

																<span class="mb-6">
																	<i class="fa fa-star me-1 text-warning fs-5"></i> 
																	<i class="fa fa-star me-1 text-warning fs-5"></i>
																	<i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
																	<i class="far fa-star me-1 text-warning fs-5"></i>
																	<i class="far fa-star me-1 text-warning fs-5"></i>
																</span>

																<p class="text-center">
																	Generally available afternoons, evenings, late nights and w After school care availability
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row g-6 g-xl-9 mb-6 mb-xl-9">
									<div class="col-md-4">
										<div class="card">
											<div class="card-header">
												<div class="card-title fs-3 fw-bolder">
													<h2 class="fw-bolder">Experience</h2>
												</div>										
											</div>

											<div class="card-body pt-5">
												<div class="fs-5 fw-bold text-gray-600">
													<p class="mb-8">
														Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Recentlyunchanged. Recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
													</p>

													<p class="mb-8">
														It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset.
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-4">
										<div class="card">
											<div class="card-header">
												<div class="card-title fs-3 fw-bolder">
													<h2 class="fw-bolder">Education</h2>
												</div>										
											</div>

											<div class="card-body pt-5">
												<div class="fs-5 fw-bold text-gray-600 d-flex nav-tabs pb-8">
													<div class="d-flex align-items-start">
														<span class="svg-icon svg-icon-2x svg-icon-primary d-block me-2">
															<svg xmlns="http://www.w4.org/2000/svg" version="1.0" width="20.000000pt" height="20.000000pt" viewBox="0 0 20.000000 20.000000" preserveAspectRatio="xMidYMid meet">
																<g transform="translate(0.000000,20.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
																<path d="M47 160 c-48 -30 -57 -45 -34 -53 9 -3 9 -7 -2 -20 -8 -10 -10 -24 -6 -34 5 -10 7 -22 6 -28 -1 -5 8 0 21 13 19 19 21 25 10 42 -10 17 -9 22 13 36 14 9 29 14 33 10 4 -4 -1 -12 -11 -17 -23 -13 -22 -26 3 -39 17 -9 30 -6 70 17 28 15 50 31 50 36 0 7 -89 67 -100 67 -3 0 -27 -13 -53 -30z m-7 -95 c0 -8 -7 -15 -15 -15 -8 0 -15 7 -15 15 0 8 7 15 15 15 8 0 15 -7 15 -15z"/>
																<path opacity="0.3" d="M140 65 c-14 -8 -37 -14 -52 -15 -33 0 -36 -15 -8 -30 23 -12 77 10 87 36 8 22 1 24 -27 9z"/>
																</g>
															</svg>
														</span>
														<div class="ps-3">
															<h6 class="fs-4 text-gray-800 fw-bolder mb-0 d-block">Graduation</h6>
															<p class=" m-0">SECRETARIAL SCIENCE LEGAL/PARALEGAL STUDIES</p>
															<span class="fw-bolder fs-6 text-gray-800">From xxxxx University</span>
														</div>															
													</div>
												</div>

												<div class="fs-5 fw-bold text-gray-600 d-flex nav-tabs pb-5 pt-5">
													<div class="d-flex align-items-start">
														<span class="svg-icon svg-icon-2x svg-icon-primary d-block me-2">
															<svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="20.000000pt" height="20.000000pt" viewBox="0 0 20.000000 20.000000" preserveAspectRatio="xMidYMid meet">
																<g transform="translate(0.000000,20.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
																<path d="M47 160 c-48 -30 -57 -45 -34 -53 9 -3 9 -7 -2 -20 -8 -10 -10 -24 -6 -34 5 -10 7 -22 6 -28 -1 -5 8 0 21 13 19 19 21 25 10 42 -10 17 -9 22 13 36 14 9 29 14 33 10 4 -4 -1 -12 -11 -17 -23 -13 -22 -26 3 -39 17 -9 30 -6 70 17 28 15 50 31 50 36 0 7 -89 67 -100 67 -3 0 -27 -13 -53 -30z m-7 -95 c0 -8 -7 -15 -15 -15 -8 0 -15 7 -15 15 0 8 7 15 15 15 8 0 15 -7 15 -15z"/>
																<path opacity="0.3" d="M140 65 c-14 -8 -37 -14 -52 -15 -33 0 -36 -15 -8 -30 23 -12 77 10 87 36 8 22 1 24 -27 9z"/>
																</g>
															</svg>
														</span>
														<div class="ps-3">
															<h6 class="fs-4 text-gray-800 fw-bolder mb-0 d-block">High School</h6>
															<p class=" m-0">SECRETARIAL SCIENCE LEGAL/PARALEGAL STUDIES</p>
															<span class="fw-bolder fs-6 text-gray-800">From xxxxx University</span>
														</div>															
													</div>
												</div>

												<div class="fs-5 fw-bold text-gray-600 d-flex pt-5">
													<div class="d-flex align-items-start">
														<span class="svg-icon svg-icon-2x svg-icon-primary d-block me-2">
															<svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="20.000000pt" height="20.000000pt" viewBox="0 0 20.000000 20.000000" preserveAspectRatio="xMidYMid meet">
																<g transform="translate(0.000000,20.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
																<path d="M47 160 c-48 -30 -57 -45 -34 -53 9 -3 9 -7 -2 -20 -8 -10 -10 -24 -6 -34 5 -10 7 -22 6 -28 -1 -5 8 0 21 13 19 19 21 25 10 42 -10 17 -9 22 13 36 14 9 29 14 33 10 4 -4 -1 -12 -11 -17 -23 -13 -22 -26 3 -39 17 -9 30 -6 70 17 28 15 50 31 50 36 0 7 -89 67 -100 67 -3 0 -27 -13 -53 -30z m-7 -95 c0 -8 -7 -15 -15 -15 -8 0 -15 7 -15 15 0 8 7 15 15 15 8 0 15 -7 15 -15z"/>
																<path opacity="0.3" d="M140 65 c-14 -8 -37 -14 -52 -15 -33 0 -36 -15 -8 -30 23 -12 77 10 87 36 8 22 1 24 -27 9z"/>
																</g>
															</svg>
														</span>
														<div class="ps-3">
															<h6 class="fs-4 text-gray-800 fw-bolder mb-0 d-block">Extra Courses</h6>
															<p class=" m-0">Courses One</p>
															<span class="fw-bolder fs-6 text-gray-800">From xxxxx</span>
															<p class=" m-0">Courses Two</p>
															<span class="fw-bolder fs-6 text-gray-800">From xxxxx</span>
															
														</div>															
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-4">
										<div class="card">
											<div class="card-header">
												<div class="card-title fs-3 fw-bolder">
													<h2 class="fw-bolder">Additional Services</h2>
												</div>										
											</div>

											<div class="card-body pt-5">
												<div class="fs-5 fw-bold text-gray-600 d-flex nav-tabs pb-5">
													<div class="d-flex align-items-start">
														<span class="svg-icon svg-icon-2x svg-icon-primary d-block me-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
																<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
															</svg>
														</span>
														<div class="ps-3">
															<h6 class="fs-4 text-gray-800 fw-bolder mb-0 d-block">Service item one</h6>
															<p class=" m-0">Short description here</p>
														</div>															
													</div>
												</div>

												<div class="fs-5 fw-bold text-gray-600 d-flex nav-tabs pb-5 pt-3">
													<div class="d-flex align-items-start">
														<span class="svg-icon svg-icon-2x svg-icon-primary d-block me-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
																<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
															</svg>
														</span>
														<div class="ps-3">
															<h6 class="fs-4 text-gray-800 fw-bolder mb-0 d-block">Service item two</h6>
															<p class=" m-0">Short description here</p>
														</div>															
													</div>
												</div>

												<div class="fs-5 fw-bold text-gray-600 d-flex nav-tabs pb-5 pt-3">
													<div class="d-flex align-items-start">
														<span class="svg-icon svg-icon-2x svg-icon-primary d-block me-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
																<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
															</svg>
														</span>
														<div class="ps-3">
															<h6 class="fs-4 text-gray-800 fw-bolder mb-0 d-block">Service item three</h6>
															<p class=" m-0">Short description here</p>
														</div>															
													</div>
												</div>

												<div class="fs-5 fw-bold text-gray-600 d-flex nav-tabs pb-5 pt-3">
													<div class="d-flex align-items-start">
														<span class="svg-icon svg-icon-2x svg-icon-primary d-block me-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
																<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
															</svg>
														</span>
														<div class="ps-3">
															<h6 class="fs-4 text-gray-800 fw-bolder mb-0 d-block">Service item four</h6>
															<p class=" m-0">Short description here</p>
														</div>															
													</div>
												</div>

												<div class="fs-5 fw-bold text-gray-600 d-flex pt-3">
													<div class="d-flex align-items-start">
														<span class="svg-icon svg-icon-2x svg-icon-primary d-block me-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
																<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
															</svg>
														</span>
														<div class="ps-3">
															<h6 class="fs-4 text-gray-800 fw-bolder mb-0 d-block">Service item five</h6>
															<p class=" m-0">Short description here</p>
														</div>															
													</div>
												</div>
											</div>


										</div>
									</div>
								</div>

								<div class="row g-6 g-xl-9">
									<div class="col-md-12">
										<div class="card">
											
												<div class="card-body pt-5 me-5">
													<a href="#" class="btn btn-light-info w-150px me-5">
														<span>Share Profile</span>
													</a>

													<a href="#" class="btn btn-light-primary w-150px me-5">
														<span>Message</span>
													</a>

													<a href="#" class="btn btn-light-danger w-150px">
														<span>Report</span>
													</a>
												</div>										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					@endsection