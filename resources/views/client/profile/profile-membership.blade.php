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
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="assets/css/style.css">
	</head>

	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

		<div class="d-flex flex-column flex-root">
			<div class="page d-flex flex-row flex-column-fluid">
				<?php include("includes/aside.php"); ?>

				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<?php include("includes/header.php"); ?>

					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<div class="toolbar" id="kt_toolbar">
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
										Dashboard
										<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
										<small class="text-muted fs-7 fw-bold my-1 ms-1">Subscription</small>
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
													<img src="assets/media/avatars/150-26.jpg" alt="image" />
													<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
												</div>
											</div>

											<div class="flex-grow-1">
												<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
													<div class="d-flex flex-column">
														<div class="d-flex align-items-center mb-2">
															<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">Geoge</a>
															<a href="#" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Varified Your Account">
																<span class="svg-icon svg-icon-1 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																		<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="#00A3FF" />
																		<path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
																	</svg>
																</span>
															</a>
														</div>

														<div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
															<a href="#" class="btn btn-sm btn-light me-2 kt_favourite_btn">
																<span class="svg-icon svg-icon-3 d-none">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="black" />
																		<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="black" />
																	</svg>
																</span>

																<span class="indicator-label">Favourite</span>
																<span class="indicator-progress">Please wait...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</a>
														</div>

														<div class="d-flex flex-wrap fw-bold fs-6 mb-1 pe-2">
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
																<span class="svg-icon svg-icon-4 me-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
																		<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
																	</svg>
																</span>
																10 years experience
															</a>
														</div>

														<div class="d-flex flex-wrap fw-bold fs-6 mb-1 pe-2">
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
																<span class="svg-icon svg-icon-4 me-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M21.6 11.2L19.3 8.89998V5.59993C19.3 4.99993 18.9 4.59993 18.3 4.59993H14.9L12.6 2.3C12.2 1.9 11.6 1.9 11.2 2.3L8.9 4.59993H5.6C5 4.59993 4.6 4.99993 4.6 5.59993V8.89998L2.3 11.2C1.9 11.6 1.9 12.1999 2.3 12.5999L4.6 14.9V18.2C4.6 18.8 5 19.2 5.6 19.2H8.9L11.2 21.5C11.6 21.9 12.2 21.9 12.6 21.5L14.9 19.2H18.2C18.8 19.2 19.2 18.8 19.2 18.2V14.9L21.5 12.5999C22 12.1999 22 11.6 21.6 11.2Z" fill="black"/>
																		<path d="M11.3 9.40002C11.3 10.2 11.1 10.9 10.7 11.3C10.3 11.7 9.8 11.9 9.2 11.9C8.8 11.9 8.40001 11.8 8.10001 11.6C7.80001 11.4 7.50001 11.2 7.40001 10.8C7.20001 10.4 7.10001 10 7.10001 9.40002C7.10001 8.80002 7.20001 8.4 7.30001 8C7.40001 7.6 7.7 7.29998 8 7.09998C8.3 6.89998 8.7 6.80005 9.2 6.80005C9.5 6.80005 9.80001 6.9 10.1 7C10.4 7.1 10.6 7.3 10.8 7.5C11 7.7 11.1 8.00005 11.2 8.30005C11.3 8.60005 11.3 9.00002 11.3 9.40002ZM10.1 9.40002C10.1 8.80002 10 8.39998 9.90001 8.09998C9.80001 7.79998 9.6 7.70007 9.2 7.70007C9 7.70007 8.8 7.80002 8.7 7.90002C8.6 8.00002 8.50001 8.2 8.40001 8.5C8.40001 8.7 8.30001 9.10002 8.30001 9.40002C8.30001 9.80002 8.30001 10.1 8.40001 10.4C8.40001 10.6 8.5 10.8 8.7 11C8.8 11.1 9 11.2001 9.2 11.2001C9.5 11.2001 9.70001 11.1 9.90001 10.8C10 10.4 10.1 10 10.1 9.40002ZM14.9 7.80005L9.40001 16.7001C9.30001 16.9001 9.10001 17.1 8.90001 17.1C8.80001 17.1 8.70001 17.1 8.60001 17C8.50001 16.9 8.40001 16.8001 8.40001 16.7001C8.40001 16.6001 8.4 16.5 8.5 16.4L14 7.5C14.1 7.3 14.2 7.19998 14.3 7.09998C14.4 6.99998 14.5 7 14.6 7C14.7 7 14.8 6.99998 14.9 7.09998C15 7.19998 15 7.30002 15 7.40002C15.2 7.30002 15.1 7.50005 14.9 7.80005ZM16.6 14.2001C16.6 15.0001 16.4 15.7 16 16.1C15.6 16.5 15.1 16.7001 14.5 16.7001C14.1 16.7001 13.7 16.6 13.4 16.4C13.1 16.2 12.8 16 12.7 15.6C12.5 15.2 12.4 14.8001 12.4 14.2001C12.4 13.3001 12.6 12.7 12.9 12.3C13.2 11.9 13.7 11.7001 14.5 11.7001C14.8 11.7001 15.1 11.8 15.4 11.9C15.7 12 15.9 12.2 16.1 12.4C16.3 12.6 16.4 12.9001 16.5 13.2001C16.6 13.4001 16.6 13.8001 16.6 14.2001ZM15.4 14.1C15.4 13.5 15.3 13.1 15.2 12.9C15.1 12.6 14.9 12.5 14.5 12.5C14.3 12.5 14.1 12.6001 14 12.7001C13.9 12.8001 13.8 13.0001 13.7 13.2001C13.6 13.4001 13.6 13.8 13.6 14.1C13.6 14.7 13.7 15.1 13.8 15.4C13.9 15.7 14.1 15.8 14.5 15.8C14.8 15.8 15 15.7 15.2 15.4C15.3 15.2 15.4 14.7 15.4 14.1Z" fill="black"/>
																	</svg>
																</span>
																$12 - $15/hour
															</a>
														</div>

														<div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
																<span class="svg-icon svg-icon-4 me-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black"/>
																		<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black"/>
																	</svg>
																</span>
																Kissimmee, FL 34746
															</a>

															<span>
																<i class="fa fa-star me-1 text-warning fs-5"></i> 
																<i class="fa fa-star me-1 text-warning fs-5"></i>
																<i class="fa fa-star me-1 text-warning fs-5"></i>
																<i class="fa fa-star me-1 text-warning fs-5"></i>
																<i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
															</span>
														</div>
													</div>

													<div class="d-flex my-4">
														<a href="#" class="btn btn-sm btn-light-primary me-2">
															<span class="svg-icon svg-icon-4 me-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M18.4 5.59998C18.7766 5.9772 18.9881 6.48846 18.9881 7.02148C18.9881 7.55451 18.7766 8.06577 18.4 8.44299L14.843 12C14.466 12.377 13.9547 12.5887 13.4215 12.5887C12.8883 12.5887 12.377 12.377 12 12C11.623 11.623 11.4112 11.1117 11.4112 10.5785C11.4112 10.0453 11.623 9.53399 12 9.15698L15.553 5.604C15.9302 5.22741 16.4415 5.01587 16.9745 5.01587C17.5075 5.01587 18.0188 5.22741 18.396 5.604L18.4 5.59998ZM20.528 3.47205C20.0614 3.00535 19.5074 2.63503 18.8977 2.38245C18.288 2.12987 17.6344 1.99988 16.9745 1.99988C16.3145 1.99988 15.661 2.12987 15.0513 2.38245C14.4416 2.63503 13.8876 3.00535 13.421 3.47205L9.86801 7.02502C9.40136 7.49168 9.03118 8.04568 8.77863 8.6554C8.52608 9.26511 8.39609 9.91855 8.39609 10.5785C8.39609 11.2384 8.52608 11.8919 8.77863 12.5016C9.03118 13.1113 9.40136 13.6653 9.86801 14.132C10.3347 14.5986 10.8886 14.9688 11.4984 15.2213C12.1081 15.4739 12.7616 15.6039 13.4215 15.6039C14.0815 15.6039 14.7349 15.4739 15.3446 15.2213C15.9543 14.9688 16.5084 14.5986 16.975 14.132L20.528 10.579C20.9947 10.1124 21.3649 9.55844 21.6175 8.94873C21.8701 8.33902 22.0001 7.68547 22.0001 7.02551C22.0001 6.36555 21.8701 5.71201 21.6175 5.10229C21.3649 4.49258 20.9947 3.93867 20.528 3.47205Z" fill="black"/>
																	<path d="M14.132 9.86804C13.6421 9.37931 13.0561 8.99749 12.411 8.74695L12 9.15698C11.6234 9.53421 11.4119 10.0455 11.4119 10.5785C11.4119 11.1115 11.6234 11.6228 12 12C12.3766 12.3772 12.5881 12.8885 12.5881 13.4215C12.5881 13.9545 12.3766 14.4658 12 14.843L8.44699 18.396C8.06999 18.773 7.55868 18.9849 7.02551 18.9849C6.49235 18.9849 5.98101 18.773 5.604 18.396C5.227 18.019 5.0152 17.5077 5.0152 16.9745C5.0152 16.4413 5.227 15.93 5.604 15.553L8.74701 12.411C8.28705 11.233 8.28705 9.92498 8.74701 8.74695C8.10159 8.99737 7.5152 9.37919 7.02499 9.86804L3.47198 13.421C2.52954 14.3635 2.00009 15.6417 2.00009 16.9745C2.00009 18.3073 2.52957 19.5855 3.47202 20.528C4.41446 21.4704 5.69269 21.9999 7.02551 21.9999C8.35833 21.9999 9.63656 21.4704 10.579 20.528L14.132 16.975C14.5987 16.5084 14.9689 15.9544 15.2215 15.3447C15.4741 14.735 15.6041 14.0815 15.6041 13.4215C15.6041 12.7615 15.4741 12.108 15.2215 11.4983C14.9689 10.8886 14.5987 10.3347 14.132 9.86804Z" fill="black"/>
																</svg>
															</span>
															Share profile
														</a>
													</div>
												</div>
											</div>
										</div>

										<div class="d-flex overflow-auto h-55px">
											<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap">
												<!--begin::Nav item-->
												<li class="nav-item w-80px">
													<a class="nav-link text-active-primary me-6" href="profile.php">
														Profile
													</a>
												</li>

												<li class="nav-item w-120px">
													<a class="nav-link text-active-primary me-6" href="profile-edit.php">
														Edit Profile
													</a>
												</li>

												<li class="nav-item w-180px">
													<a class="nav-link text-active-primary me-6" href="profile-password-change.php">
														Change Password
													</a>
												</li>

												<li class="nav-item w-180px">
													<a class="nav-link text-active-primary me-6" href="verifi-fb.php">
														Verify Facebook
													</a>
												</li>

												<li class="nav-item w-120px">
													<a class="nav-link text-active-primary me-6 active" href="profile-membership.php">
														Membership
													</a>
												</li>


												<li class="nav-item w-120px">
													<a class="nav-link text-active-primary" href="deactivated.php">
														Close Account
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="d-flex flex-column flex-lg-row">
									<div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
										<div class="card card-flush pt-3 mb-5 mb-xl-10">
											<div class="card-header">
												<div class="card-title">
													<h2 class="fw-bolder">Subscription Details</h2>
												</div>
											</div>

											<div class="card-body pt-3">
												<div class="mb-10">
													<h5 class="mb-4">Billing Address:</h5>
													<div class="d-flex flex-wrap py-5">
														<div class="flex-equal me-5">
															<table class="table fs-6 fw-bold gs-0 gy-2 gx-2 m-0">
																<tr>
																	<td class="text-gray-400 min-w-175px w-175px">Bill to:</td>
																	<td class="text-gray-800 min-w-200px">
																		<a href="#" class="text-gray-800 text-hover-primary">e.smith@kpmg.com.au</a>
																	</td>
																</tr>

																<tr>
																	<td class="text-gray-400">Customer Name:</td>
																	<td class="text-gray-800">Emma Smith</td>
																</tr>

																<tr>
																	<td class="text-gray-400">Address:</td>
																	<td class="text-gray-800">Floor 10, 101 Avenue of the Light Square, New York, NY, 10050.</td>
																</tr>

																<tr>
																	<td class="text-gray-400">Phone:</td>
																	<td class="text-gray-800">(555) 555-1234</td>
																</tr>
																
															</table>
														</div>
														
														<div class="flex-equal">
															
															<table class="table fs-6 fw-bold gs-0 gy-2 gx-2 m-0">
																<tr>
																	<td class="text-gray-400 min-w-175px w-175px">Subscribed Product:</td>
																	<td class="text-gray-800 min-w-200px">
																		<a href="#" class="text-gray-800 text-hover-primary">Basic Bundle</a>
																	</td>
																</tr>

																<tr>
																	<td class="text-gray-400">Subscription Fees:</td>
																	<td class="text-gray-800">$149.99 / Year</td>
																</tr>

																<tr>
																	<td class="text-gray-400">Billing method:</td>
																	<td class="text-gray-800">Annually</td>
																</tr>

																<tr>
																	<td class="text-gray-400">Currency:</td>
																	<td class="text-gray-800">USD - US Dollar</td>
																</tr>
																
															</table>
														</div>
														
													</div>
													
												</div>
												
												<div class="mb-0">
													<h5 class="mb-4">Subscribed Products:</h5>
													
													<div class="table-responsive">
														
														<table class="table align-middle table-row-dashed fs-6 gy-4 mb-0">
															<!--begin::Table head-->
															<thead>
																<!--begin::Table row-->
																<tr class="border-bottom border-gray-200 text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
																	<th class="min-w-150px">Product</th>
																	<th class="min-w-125px">Subscription ID</th>
																	<th class="min-w-125px">Qty</th>
																	<th class="min-w-125px">Total</th>
																	<th class="text-end min-w-70px">Actions</th>
																</tr>
															</thead>
															
															<tbody class="fw-bold text-gray-800">
																<tr>
																	<td>
																		<label class="w-150px">Basic Bundle</label>
																		<div class="fw-normal text-gray-600">Basic yearly bundle</div>
																	</td>
																	<td>
																		<span class="badge badge-light-danger">sub_4567_8765</span>
																	</td>
																	<td>1</td>
																	<td>$149.99 / Year</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
																					<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
																				</svg>
																			</span>
																		</a>
																		
																		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-6 w-200px py-4" data-kt-menu="true">
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3 kt_subscription_pause">
																					Pause Subscription
																				</a>
																			</div>

																			<div class="menu-item px-3">
																				<a href="#" class="menu-link text-danger px-3 kt_subscription_cancel" data-kt-subscriptions-view-action="edit">
																					Cancel Subscription
																				</a>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<label class="w-150px">Pro Bundle</label>
																		<div class="fw-normal text-gray-400">Basic yearly bundle</div>
																	</td>
																	<td>
																		<span class="badge badge-light-danger">sub_4567_3433</span>
																	</td>
																	<td>5</td>
																	<td>$949.99 / Year</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
																					<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
																				</svg>
																			</span>
																		</a>
																		
																		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-6 w-200px py-4" data-kt-menu="true">
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3 kt_subscription_pause">
																					Pause Subscription
																				</a>
																			</div>

																			<div class="menu-item px-3">
																				<a href="#" class="menu-link text-danger px-3 kt_subscription_cancel" data-kt-subscriptions-view-action="edit">
																					Cancel Subscription
																				</a>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<label class="w-150px">Pro Bundle</label>
																		<div class="fw-normal text-gray-400">Basic yearly bundle</div>
																	</td>
																	<td>
																		<span class="badge badge-light-danger">sub_4567_3433</span>
																	</td>
																	<td>5</td>
																	<td>$949.99 / Year</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
																					<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
																				</svg>
																			</span>
																		</a>
																		
																		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-6 w-200px py-4" data-kt-menu="true">
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3 kt_subscription_pause">
																					Pause Subscription
																				</a>
																			</div>

																			<div class="menu-item px-3">
																				<a href="#" class="menu-link text-danger px-3 kt_subscription_cancel" data-kt-subscriptions-view-action="edit">
																					Cancel Subscription
																				</a>
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>

										<!-- <div class="card card-flush pt-3 mb-5 mb-xl-10">
											<div class="card-header">
												<div class="card-title">
													<h2>Invoices</h2>
												</div>

												<div class="card-toolbar">
													<ul class="nav nav-stretch fs-5 fw-bold nav-line-tabs nav-line-tabs-2x border-transparent" role="tablist">
														<li class="nav-item" role="presentation">
															<a id="kt_referrals_year_tab" class="nav-link text-active-primary active" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_1">This Year</a>
														</li>
														<li class="nav-item" role="presentation">
															<a id="kt_referrals_2019_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_2">2020</a>
														</li>
														<li class="nav-item" role="presentation">
															<a id="kt_referrals_2018_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_3">2019</a>
														</li>
														<li class="nav-item" role="presentation">
															<a id="kt_referrals_2017_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_4">2018</a>
														</li>
													</ul>
												</div>
											</div>
											
											
											<div class="card-body pt-2">
												<div id="kt_referred_users_tab_content" class="tab-content">
													<div id="kt_customer_details_invoices_1" class="tab-pane fade show active" role="tabpanel">
														<div class="table-responsive">
															<table id="kt_customer_details_invoices_table_1" class="table align-middle table-row-dashed fs-6 fw-bolder gs-0 gy-4 p-0 m-0">
																<thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
																	<tr class="text-start text-gray-400">
																		<th class="min-w-100px">Order ID</th>
																		<th class="min-w-100px">Amount</th>
																		<th class="min-w-100px">Status</th>
																		<th class="min-w-125px">Date</th>
																		<th class="w-100px">Invoice</th>
																	</tr>
																</thead>

																<tbody class="fs-6 fw-bold text-gray-600">
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary">102445788</a>
																		</td>
																		<td class="text-success">$38.00</td>
																		<td>
																			<span class="badge badge-light-warning">Pending</span>
																		</td>
																		<td>Nov 01, 2021</td>
																		<td class="">
																			<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary">423445721</a>
																		</td>
																		<td class="text-danger">$-2.60</td>
																		<td>
																			<span class="badge badge-light-warning">Pending</span>
																		</td>
																		<td>Oct 24, 2021</td>
																		<td class="">
																			<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																		</td>
																		<td class="text-success">$76.00</td>
																		<td>
																			<span class="badge badge-light-info">In progress</span>
																		</td>
																		<td>Oct 08, 2021</td>
																		<td class="">
																			<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																		</td>
																		<td class="text-success">$5.00</td>
																		<td>
																			<span class="badge badge-light-success">Approved</span>
																		</td>
																		<td>Sep 15, 2021</td>
																		<td class="">
																			<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary">523445943</a>
																		</td>
																		<td class="text-danger">$-1.30</td>
																		<td>
																			<span class="badge badge-light-info">In progress</span>
																		</td>
																		<td>May 30, 2021</td>
																		<td class="">
																			<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													
													
													<div id="kt_customer_details_invoices_2" class="tab-pane fade" role="tabpanel">
														
														<div class="table-responsive">
															
															<table id="kt_customer_details_invoices_table_2" class="table align-middle table-row-dashed fs-6 fw-bolder gs-0 gy-4 p-0 m-0">
																<thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
																	<tr class="text-start text-gray-400">
																		<th class="min-w-100px">Order ID</th>
																		<th class="min-w-100px">Amount</th>
																		<th class="min-w-100px">Status</th>
																		<th class="min-w-125px">Date</th>
																		<th class="w-100px">Invoice</th>
																	</tr>
																</thead>

																<tbody class="fs-6 fw-bold text-gray-600">
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary">523445943</a>
																		</td>
																		<td class="text-danger">$-1.30</td>
																		<td>
																			<span class="badge badge-light-info">In progress</span>
																		</td>
																		<td>May 30, 2020</td>
																		<td class="">
																			<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary">231445943</a>
																		</td>
																		<td class="text-success">$204.00</td>
																		<td>
																			<span class="badge badge-light-info">In progress</span>
																		</td>
																		<td>Apr 22, 2020</td>
																		<td class="">
																			<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary">426445943</a>
																		</td>
																		<td class="text-success">$31.00</td>
																		<td>
																			<span class="badge badge-light-warning">Pending</span>
																		</td>
																		<td>Feb 09, 2020</td>
																		<td class="">
																			<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary">984445943</a>
																		</td>
																		<td class="text-success">$52.00</td>
																		<td>
																			<span class="badge badge-light-warning">Pending</span>
																		</td>
																		<td>Nov 01, 2020</td>
																		<td class="">
																			<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary">324442313</a>
																		</td>
																		<td class="text-danger">$-0.80</td>
																		<td>
																			<span class="badge badge-light-danger">Rejected</span>
																		</td>
																		<td>Jan 04, 2020</td>
																		<td class="">
																			<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													
													
													<div id="kt_customer_details_invoices_3" class="tab-pane fade" role="tabpanel">
														
														<div class="table-responsive">
															
															<table id="kt_customer_details_invoices_table_3" class="table align-middle table-row-dashed fs-6 fw-bolder gs-0 gy-4 p-0 m-0">
																<thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
																	<tr class="text-start text-gray-400">
																		<th class="min-w-100px">Order ID</th>
																		<th class="min-w-100px">Amount</th>
																		<th class="min-w-100px">Status</th>
																		<th class="min-w-125px">Date</th>
																		<th class="w-100px">Invoice</th>
																	</tr>
																</thead>

																<tbody class="fs-6 fw-bold text-gray-600">
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary">426445943</a>
																		</td>
																		<td class="text-success">$31.00</td>
																		<td>
																			<span class="badge badge-light-warning">Pending</span>
																		</td>
																		<td>Feb 09, 2019</td>
																		<td class="">
																			<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary">984445943</a>
																		</td>
																		<td class="text-success">$52.00</td>
																		<td>
																			<span class="badge badge-light-success">Approved</span>
																		</td>
																		<td>Nov 01, 2019</td>
																		<td class="">
																			<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary">324442313</a>
																		</td>
																		<td class="text-danger">$-0.80</td>
																		<td>
																			<span class="badge badge-light-success">Approved</span>
																		</td>
																		<td>Jan 04, 2019</td>
																		<td class="">
																			<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																		</td>
																		<td class="text-success">$5.00</td>
																		<td>
																			<span class="badge badge-light-warning">Pending</span>
																		</td>
																		<td>Sep 15, 2019</td>
																		<td class="">
																			<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary">102445788</a>
																		</td>
																		<td class="text-success">$38.00</td>
																		<td>
																			<span class="badge badge-light-warning">Pending</span>
																		</td>
																		<td>Nov 01, 2019</td>
																		<td class="">
																			<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													
													
													<div id="kt_customer_details_invoices_4" class="tab-pane fade" role="tabpanel">
														
														<div class="table-responsive">
															
															<table id="kt_customer_details_invoices_table_4" class="table align-middle table-row-dashed fs-6 fw-bolder gs-0 gy-4 p-0 m-0">
																<thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
																	<tr class="text-start text-gray-400">
																		<th class="min-w-100px">Order ID</th>
																		<th class="min-w-100px">Amount</th>
																		<th class="min-w-100px">Status</th>
																		<th class="min-w-125px">Date</th>
																		<th class="w-100px">Invoice</th>
																	</tr>
																</thead>

																<tbody class="fs-6 fw-bold text-gray-600">
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary">102445788</a>
																		</td>
																		<td class="text-success">$38.00</td>
																		<td>
																			<span class="badge badge-light-success">Approved</span>
																		</td>
																		<td>Nov 01, 2018</td>
																		<td class="">
																			<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary">423445721</a>
																		</td>
																		<td class="text-danger">$-2.60</td>
																		<td>
																			<span class="badge badge-light-danger">Rejected</span>
																		</td>
																		<td>Oct 24, 2018</td>
																		<td class="">
																			<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary">102445788</a>
																		</td>
																		<td class="text-success">$38.00</td>
																		<td>
																			<span class="badge badge-light-danger">Rejected</span>
																		</td>
																		<td>Nov 01, 2018</td>
																		<td class="">
																			<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary">423445721</a>
																		</td>
																		<td class="text-danger">$-2.60</td>
																		<td>
																			<span class="badge badge-light-danger">Rejected</span>
																		</td>
																		<td>Oct 24, 2018</td>
																		<td class="">
																			<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary">426445943</a>
																		</td>
																		<td class="text-success">$31.00</td>
																		<td>
																			<span class="badge badge-light-success">Approved</span>
																		</td>
																		<td>Feb 09, 2018</td>
																		<td class="">
																			<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div> -->
									</div>
									

									<div class="flex-column flex-lg-row-auto w-lg-250px w-xl-300px mb-10 order-1 order-lg-2">
										<div class="card card-flush mb-0" data-kt-sticky="true" data-kt-sticky-name="subscription-summary" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
											<div class="card-header">
												<div class="card-title">
													<h2>Summary</h2>
												</div>

												<div class="card-toolbar">
													<a href="#" class="btn btn-sm btn-light btn-icon" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect x="10" y="10" width="4" height="4" rx="2" fill="black" />
																<rect x="17" y="10" width="4" height="4" rx="2" fill="black" />
																<rect x="3" y="10" width="4" height="4" rx="2" fill="black" />
															</svg>
														</span>
													</a>
													
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-6 w-200px py-4" data-kt-menu="true">
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3 kt_subscription_pause">
																Pause Subscription
															</a>
														</div>

														<div class="menu-item px-3">
															<a href="#" class="menu-link text-danger px-3 kt_subscription_cancel" data-kt-subscriptions-view-action="edit">
																Cancel Subscription
															</a>
														</div>
													</div>
												</div>
												
											</div>
											
											
											<div class="card-body pt-0 fs-6">
												
												<div class="mb-7">
													
													<div class="d-flex align-items-center">
														<div class="symbol symbol-60px symbol-circle me-3">
															<img alt="Pic" src="assets/media/avatars/150-26.jpg" />
														</div>

														<div class="d-flex flex-column">
															<a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-2">Geoge</a>
															<a href="#" class="fw-bold text-gray-600 text-hover-primary">royGeroge@gmail.com</a>
														</div>
													</div>
												</div>
												
												<div class="separator separator-dashed mb-7"></div>
												
												<div class="mb-7">
													<h5 class="mb-4">Product details</h5>
													
													<div class="mb-0">
														<span class="badge badge-light-info me-2">Basic Bundle</span>
														<span class="fw-bold text-gray-600">$149.99 / Year</span>
													</div>
												</div>
												
												<div class="separator separator-dashed mb-7"></div>
												
												<div class="mb-10">
													<h5 class="mb-4">Payment Details</h5>
													
													<div class="mb-0">
														<div class="fw-bold text-gray-600 d-flex align-items-center">Mastercard
														<img src="assets/media/svg/card-logos/mastercard.svg" class="w-35px ms-2" alt="" /></div>
														<div class="fw-bold text-gray-600">Expires Dec 2024</div>
													</div>
												</div>
												
												<div class="separator separator-dashed mb-7"></div>
												
												<div class="mb-10">
													<h5 class="mb-4">Subscription Details</h5>
													
													<table class="table fs-6 fw-bold gs-0 gy-2 gx-2">
														<tr class="">
															<td class="text-gray-400">Subscription ID:</td>
															<td class="text-gray-800">sub_4567_8765</td>
														</tr>
														
														<tr class="">
															<td class="text-gray-400">Started:</td>
															<td class="text-gray-800">15 Apr 2021</td>
														</tr>
														
														<tr class="">
															<td class="text-gray-400">Status:</td>
															<td>
																<span class="badge badge-light-success">Active</span>
															</td>
														</tr>
														
														<tr class="">
															<td class="text-gray-400">Next Invoice:</td>
															<td class="text-gray-800">15 Apr 2022</td>
														</tr>
														
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php include("includes/footer.php"); ?>
				</div>
			</div>
		</div>

		<script>var hostUrl = "assets/";</script>
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/modals/create-app.js"></script>
		<script src="assets/js/custom/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom.js"></script>
		<script src="assets/js/custom/apps/calendar/calendar.js"></script>
		<script src="assets/js/custom/pages/projects/settings/settings.js"></script>
	</body>

</html>