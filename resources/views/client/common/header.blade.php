<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>Dashboard</title>
		<meta name="description" content=""/>
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />

		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="{{asset('admin//media/logos/favicon.ico" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="{{asset('admin//plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin//plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin//css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{asset('admin//css/style.css')}}">
	</head>

	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

		<div class="d-flex flex-column flex-root">
			<div class="page d-flex flex-row flex-column-fluid">
				<?php include "includes/aside.php";?>

				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<?php //include("includes/header.php"); ?>

					<div id="kt_header" style="" class="header align-items-stretch">
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
								<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
									<span class="svg-icon svg-icon-2x mt-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
								</div>
							</div>

							<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
								<a href="index.php" class="d-lg-none">
									<img alt="Logo" src="{{asset('admin//media/logos/logo-2.css')}}" class="h-30px" />
								</a>
							</div>

							<div class="d-flex align-items-stretch justify-content-end flex-lg-grow-1">
								<div class="d-flex align-items-stretch flex-shrink-0">
									<div class="d-flex align-items-stretch flex-shrink-0">
										<div class="d-flex align-items-stretch ms-1 ms-lg-3">
											<div id="kt_header_search" class="d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
												<div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
													<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px">
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
																<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
															</svg>
														</span>
													</div>
												</div>

												<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
													<div data-kt-search-element="wrapper">
														<form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
															<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
																	<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
																</svg>
															</span>

															<input type="text" class="form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input" />

															<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
																<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
															</span>
														</form>

														<div class="separator border-gray-200 mb-6"></div>

														<div data-kt-search-element="results" class="d-none">
															<div class="scroll-y mh-200px mh-lg-350px">

																<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																	<div class="symbol symbol-40px me-4">
																		<img src="{{asset('admin//media/avatars/150-1..svg')}}" alt="" />
																	</div>

																	<div class="d-flex flex-column justify-content-start fw-bold">
																		<span class="fs-6 fw-bold">Karina Clark</span>
																		<span class="fs-7 fw-bold text-muted">Service Provider</span>
																	</div>
																</a>

																<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																	<div class="symbol symbol-40px me-4">
																		<img src="{{asset('admin//media/avatars/150-3.jpg')}}" alt="" />
																	</div>

																	<div class="d-flex flex-column justify-content-start fw-bold">
																		<span class="fs-6 fw-bold">Olivia Bold</span>
																		<span class="fs-7 fw-bold text-muted">Service Receiver</span>
																	</div>
																</a>

																<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																	<div class="symbol symbol-40px me-4">
																		<img src="{{asset('admin//media/avatars/150-8.jpg')}}" alt="" />
																	</div>

																	<div class="d-flex flex-column justify-content-start fw-bold">
																		<span class="fs-6 fw-bold">Ana Clark</span>
																		<span class="fs-7 fw-bold text-muted">Service Receiver</span>
																	</div>
																</a>
															</div>
														</div>

														<div class="mb-4" data-kt-search-element="main">
															<div class="d-flex flex-stack fw-bold mb-4">
																<span class="text-muted fs-6 me-2">Recently Searched:</span>
															</div>

															<div class="scroll-y mh-200px mh-lg-325px">
																<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																	<div class="symbol symbol-40px me-4">
																		<img src="{{asset('admin//media/avatars/150-1.jpg')}}" alt="" />
																	</div>

																	<div class="d-flex flex-column justify-content-start fw-bold">
																		<span class="fs-6 fw-bold">Karina Clark</span>
																		<span class="fs-7 fw-bold text-muted">Service Provider</span>
																	</div>
																</a>

																<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																	<div class="symbol symbol-40px me-4">
																		<img src="{{asset('admin//media/avatars/150-3.jpg')}}" alt="" />
																	</div>

																	<div class="d-flex flex-column justify-content-start fw-bold">
																		<span class="fs-6 fw-bold">Olivia Bold</span>
																		<span class="fs-7 fw-bold text-muted">Service Receiver</span>
																	</div>
																</a>

																<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																	<div class="symbol symbol-40px me-4">
																		<img src="{{asset('admin//media/avatars/150-8.jpg')}}" alt="" />
																	</div>

																	<div class="d-flex flex-column justify-content-start fw-bold">
																		<span class="fs-6 fw-bold">Ana Clark</span>
																		<span class="fs-7 fw-bold text-muted">Service Receiver</span>
																	</div>
																</a>
															</div>
														</div>

														<div data-kt-search-element="empty" class="text-center d-none">
															<div class="pt-10 pb-10">
																<span class="svg-icon svg-icon-4x opacity-50">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" fill="black" />
																		<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="black" />
																		<rect x="13.6993" y="13.6656" width="4.42828" height="1.73089" rx="0.865447" transform="rotate(45 13.6993 13.6656)" fill="black" />
																		<path d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z" fill="black" />
																	</svg>
																</span>
															</div>

															<div class="pb-15 fw-bold">
																<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
																<div class="text-muted fs-7">Please try again with a different query</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="d-flex align-items-center ms-1 ms-lg-3">
											<div class="btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
												<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>

												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black"></path>
														<rect x="6" y="12" width="7" height="2" rx="1" fill="black"></rect>
														<rect x="6" y="7" width="12" height="2" rx="1" fill="black"></rect>
													</svg>
												</span>
											</div>

											<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
												<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('{{asset('admin//media/misc/pattern-1.jpg')}}')">
													<h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications</h3>
												</div>

												<div class="tab-content">
													<div>
														<div class="scroll-y mh-325px my-5 px-8">
															<div class="d-flex flex-stack py-4">
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-35px me-4">
																		<span class="symbol-label bg-light-primary">
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z" fill="black" />
																					<path d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z" fill="black" />
																				</svg>
																			</span>
																		</span>
																	</div>

																	<div class="mb-0 me-2">
																		<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project Alice</a>
																		<div class="text-gray-400 fs-7">Phase 1 development</div>
																	</div>
																</div>

																<span class="badge badge-light fs-8">1 hr</span>
															</div>

															<div class="d-flex flex-stack py-4">
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-35px me-4">
																		<span class="symbol-label bg-light-danger">
																			<span class="svg-icon svg-icon-2 svg-icon-danger">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
																					<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
																					<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
																				</svg>
																			</span>
																		</span>
																	</div>

																	<div class="mb-0 me-2">
																		<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">HR Confidential</a>
																		<div class="text-gray-400 fs-7">Confidential staff documents</div>
																	</div>
																</div>

																<span class="badge badge-light fs-8">2 hrs</span>
															</div>

															<div class="d-flex flex-stack py-4">
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-35px me-4">
																		<span class="symbol-label bg-light-warning">
																			<span class="svg-icon svg-icon-2 svg-icon-warning">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
																					<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
																				</svg>
																			</span>
																		</span>
																	</div>

																	<div class="mb-0 me-2">
																		<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Company HR</a>
																		<div class="text-gray-400 fs-7">Corporeate staff profiles</div>
																	</div>
																</div>

																<span class="badge badge-light fs-8">5 hrs</span>
															</div>
														</div>

														<div class="py-3 text-center border-top">
															<a href="#" class="btn btn-color-gray-600 btn-active-color-primary">
																View All

																<span class="svg-icon svg-icon-5">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
											<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
												<img src="{{asset('admin//media/avatars/150-26.jpg')}}" alt="user" />
											</div>

											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
												<div class="menu-item px-3">
													<div class="menu-content d-flex align-items-center px-3">
														<div class="symbol symbol-50px me-5">
															<img alt="Logo" src="{{asset('admin//media/avatars/150-26.jpg" />
														</div>

														<div class="d-flex flex-column">
															<div class="fw-bolder d-flex align-items-center fs-5">Max Smith</div>
															<a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
														</div>
													</div>
												</div>

												<div class="separator my-2"></div>

												<div class="menu-item px-5">
													<a href="#" class="menu-link px-5">My Profile</a>
												</div>

												<div class="separator my-2"></div>

												<div class="menu-item px-5 my-1">
													<a href="#" class="menu-link px-5">Account Settings</a>
												</div>

												<div class="separator my-2"></div>

												<div class="menu-item px-5">
													<a href="sign-in.php" class="menu-link px-5">Sign Out</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
