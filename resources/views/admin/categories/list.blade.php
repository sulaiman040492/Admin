@extends('layouts.admin')



@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<div class="toolbar" id="kt_toolbar">
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
										Dashboard
										<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
										<small class="text-muted fs-7 fw-bold my-1 ms-1">Service Provider</small>
									</h1>
								</div>					
							</div>
						</div>

						<div class="post d-flex flex-column-fluid" id="kt_post">
							<div id="kt_content_container" class="container-fluid">
								<div class="card mb-5 mb-xl-8">
									<div class="card-header border-0 pt-5">
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label fw-bolder fs-3 mb-1">Service Provider</span>
											<span class="text-muted mt-1 fw-bold fs-7">Our 4 Services</span>
										</h3>
										<div class="card-toolbar">
											<div class="d-flex align-items-center py-1">
												<div class="">

                        <a href="{{route('admin.category.create')}}" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder">
														<span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
															</svg>
														</span>
                            Add New
													</a>

													<a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
															</svg>
														</span>

														Filter
													</a>

													<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61484c45b0e77">

														<div class="px-7 py-5">
															<div class="fs-5 text-dark fw-bolder">Filter Options</div>
														</div>

														<div class="separator border-gray-200"></div>

														<div class="px-7 py-5">
															<div class="mb-10">
																<div>
																	<input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Filter">
																</div>
															</div>

															<div class="mb-10">
																<div>
																	<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Area of Inserest" data-dropdown-parent="#kt_menu_61484c45b0e77" data-allow-clear="true">
																		<option></option>
																		<option value="1">Nanny</option>
																		<option value="2">House Caregiver</option>
																		<option value="2">Pet Caregiver</option>
																		<option value="2">Companion Caregiver</option>
																	</select>
																</div>
															</div>

															<div class="mb-10">
																<label class="form-label fw-bold">Status Type:</label>
																<div class="d-flex">
																	<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" value="1" checked="checked" />
																		<span class="form-check-label">Approved</span>
																	</label>

																	<label class="form-check form-check-sm form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="2" />
																		<span class="form-check-label">Non Approved</span>
																	</label>
																</div>
															</div>

															<div class="d-flex justify-content-end">
																<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
																<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="card-body py-3">
										<div class="table-responsive">
											<table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
												<thead>
													<tr class="fw-bolder text-muted">
														<th class="w-25px">
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-13-check" />
															</div>
														</th>
														<!-- <th class="min-w-60px">ID</th> -->
														<th class="min-w-150px">Name</th>
														<!-- <th class="min-w-150px">Email</th>
														<th class="min-w-150px">Area of Insterest</th>
														<th class="min-w-150px">Status</th> -->
														<th class="min-w-60px text-end">Actions</th>
													</tr>
												</thead>

												<tbody>
                          @if(isset($category) && count($category) > 0)
                          @foreach($category as $key => $cate)
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input widget-13-check" type="checkbox" value="1" />
															</div>
														</td>
														<!-- <td>
															<h6 class="text-dark fw-normal text-hover-primary fs-6">XD-1</h6>
														</td> -->
														<td>
															<h6 class="text-dark fw-normal text-hover-primary d-block mb-1 fs-6">{{$cate->name}}</h6>
														</td>
														<!-- <td>
															<h6 class="text-dark fw-normal text-hover-primary d-block mb-1 fs-6">royGeroge@gmail.com</h6>
														</td>
														<td>
															<h6 class="text-dark fw-normal text-hover-primary d-block mb-1 fs-6">House Caregiver</h6>
														</td>

														<td>
															<span class="badge badge-light-success">Approved</span>
														</td> -->
														<td class="text-end">
                            <!-- data-bs-toggle="modal" data-bs-target="#kt_modal_new_target" -->
															<a href="{{route('admin.category.edit',$cate->id)}}" method="GET" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" >
																<span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
																		<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
																	</svg>
																</span>
															</a>
															<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm kt_data_delete_table_ok_category" id="{{$cate->id}}">
																<span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
																		<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
																		<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
																	</svg>
																</span>
															</a>
                              <form method="POST" id="delete-form-{{$cate->id}}" action="{{route('admin.category.destroy',$cate->id)}}">
                                @csrf
                                @method('DELETE')
                              </form>
														</td>
													</tr>
                          @endforeach
                          @endif
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="post d-flex flex-column-fluid" id="kt_post">
							<div id="kt_content_container" class="container-xxl">
								<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<div class="modal-content rounded">
											<div class="modal-header pb-0 border-0 justify-content-end">
												<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
														</svg>
													</span>
												</div>
											</div>

											<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
												<form id="kt_modal_new_target_form" class="form" action="#">
													<div class="mb-13 text-center">
														<h1 class="mb-3">Edit Service Provider</h1>
														<div class="text-muted fw-bold fs-5">ID
														<a href="#" class="fw-bolder link-primary">XD-1</a>.</div>
													</div>

													<div class="d-flex flex-column mb-8 fv-row">
														<label class="d-flex align-items-center fs-6 fw-bold mb-2">
															<span class="required">Name</span>
														</label>

														<input type="text" class="form-control form-control-solid" placeholder="Enter Name Here" name="target_title" value="Geoge" />
													</div>

													<div class="d-flex flex-column mb-8 fv-row">
														<label class="d-flex align-items-center fs-6 fw-bold mb-2">
															<span class="required">Email</span>
														</label>

														<input type="text" class="form-control form-control-solid" placeholder="Enter Email Here" name="target_title" value="royGeroge@gmail.com" />
													</div>

													<div class="row g-9 mb-8">
														<div class="d-flex flex-column mb-8 fv-row">
															<label class="required fs-6 fw-bold mb-2">Assign</label>
															<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
																<option >Select Area of Insterest</option>
																<option selected>House Caregiver</option>
																<option>Nany</option>
																<option>Pet Caregiver</option>
																<option>Compaion Caregiver</option>
															</select>
														</div>
													</div>

													<div class="mb-15 fv-row">
														<div class="d-flex flex-stack">
															<div class="fw-bold me-5">
																<label class="fs-6">Status</label>
																<div class="fs-7 text-muted">Change the status select now!</div>
															</div>

															<div class="d-flex align-items-center">
																<label class="form-check form-check-custom form-check-solid me-10">
																	<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked" />
																	<span class="form-check-label fw-bold">Approved</span>
																</label>

																<label class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="phone" />
																	<span class="form-check-label fw-bold">Non Approved</span>
																</label>
															</div>
														</div>
													</div>

													<div class="text-center">
														<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
														<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
															<span class="indicator-label">Sure</span>
															<span class="indicator-progress">Updating...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
@endsection

