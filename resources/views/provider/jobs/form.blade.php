
										@csrf
										<div class="card-body p-9">
											<div class="row mb-5">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Profile</div>
												</div>

												<div class="col-lg-8">
													<div class="fv-row">
														<div class="row">
															<div class="col-lg-6">
																<input type="radio" class="btn-check recurringInput" name="account_type" value="personal" checked="checked" id="kt_create_account_form_account_type_personal" />
																<label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex menu-column align-items-center mb-10" for="kt_create_account_form_account_type_personal">
																	<span class="svg-icon svg-icon-5tx me-5">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"></path>
																			<path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="black"></path>
																		</svg>
																	</span>

																	<span class="text-gray-500 fs-4">
																		Recurring
																	</span>
																</label>
																<!--end::Option-->
															</div>

															<div class="col-lg-6">
																<input type="radio" class="btn-check oneTimeInput" name="account_type" value="corporate" id="kt_create_account_form_account_type_corporate" />
																<label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex menu-column align-items-center" for="kt_create_account_form_account_type_corporate">
																	<span class="svg-icon svg-icon-5tx me-5">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="black"></path>
																			<path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="black"></path>
																		</svg>
																	</span>

																	<span class="text-gray-500 fs-4">
																		One Time
																	</span>
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="row mb-8 jobPostDay">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Select Days</div>
												</div>

												<div class="col-xl-9 fv-row">
													<div class="form-check form-check-custom form-check-solid jobpostcheckDay mb-5">
														<input class="form-check-input" type="checkbox" id="mon" name="days[]" value="mon">
														<label class="form-check-label flex-grow-1 fw-bold text-gray-700 fs-6" for="mon">Monday</label>

														<input class="form-check-input" type="checkbox" id="tues" name="days[]" value="tue">
														<label class="form-check-label flex-grow-1 fw-bold text-gray-700 fs-6" for="tues">Tuesday</label>

														<input class="form-check-input" type="checkbox" id="wed" name="days[]" value="wed">
														<label class="form-check-label flex-grow-1 fw-bold text-gray-700 fs-6" for="wed">Wednesday</label>

														<input class="form-check-input" type="checkbox" id="thu" name="days[]" value="thu">
														<label class="form-check-label flex-grow-1 fw-bold text-gray-700 fs-6" for="thu">Thusday</label>

														<input class="form-check-input" type="checkbox" id="fri" name="days[]" value="fri">
														<label class="form-check-label flex-grow-1 fw-bold text-gray-700 fs-6" for="fri">Friday</label>

														<input class="form-check-input" type="checkbox" id="sat" name="days[]" value="sat">
														<label class="form-check-label flex-grow-1 fw-bold text-gray-700 fs-6" for="sat">Saturday</label>

														<input class="form-check-input" type="checkbox" id="sun" name="days[]" value="sun">
														<label class="form-check-label flex-grow-1 fw-bold text-gray-700 fs-6" for="sun">Sunday</label>

														<input class="form-check-input" type="checkbox" id="allDoDaySelect" name="days[]" value="all">
														<label class="form-check-label flex-grow-1 fw-bold text-gray-700 fs-6" for="allDoDaySelect">All Do</label>
													</div>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Start Date</div>
												</div>

												<div class="col-xl-9 fv-row">
													<input type="date" class="form-control form-control-solid" name="start_date" required/>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">End Date</div>
												</div>

												<div class="col-xl-9 fv-row">
													<input type="date" class="form-control form-control-solid" name="end_date" required/>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Starting Time</div>
												</div>

												<div class="col-xl-9 fv-row">
													<input type="time" pattern="^([0-1]?[0-9]|2[0-4]):([0-5][0-9])(:[0-5][0-9])?$" class="form-control form-control-solid" name="start_time" required/>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Ending Time</div>
												</div>

												<div class="col-xl-9 fv-row">
													<input type="time" class="form-control form-control-solid" name="end_time" required/>
												</div>
											</div>


											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Duration</div>
												</div>

												<div class="col-xl-9 fv-row">
													<input type="text" class="form-control form-control-solid" name="duration" required/>
												</div>
											</div>

											<div class="row mb-8 ">
												<div class="col-xl-12">
													<div class="fs-3 fw-bold mt-2 mb-3">Information About Family</div>
												</div>
												<div class="separator my-2"></div>
											</div>										

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Number Of Childern</div>
												</div>

												<div class="col-xl-9 fv-row">
													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select number of children" name="no_of_child" required>
														<option value="">Select...</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="4+">4+</option>
													</select>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Age Of Childern</div>
												</div>

												<div class="col-xl-9 fv-row">
													<div class="form-check form-check-custom form-check-solid mb-5">
														<input class="form-check-input" type="checkbox" id="inf" name="age[]" value="infant">
														<label class="form-check-label flex-grow-1 fw-bold text-gray-700 fs-6" for="inf">Infant</label>

														<input class="form-check-input" type="checkbox" id="todd" name="age[]" value="toddle">
														<label class="form-check-label flex-grow-1 fw-bold text-gray-700 fs-6" for="todd">Toddle</label>

														<input class="form-check-input" type="checkbox" id="pres" name="age[]" value="preschool">
														<label class="form-check-label flex-grow-1 fw-bold text-gray-700 fs-6" for="pres">Preschool</label>

														<input class="form-check-input" type="checkbox" id="elem" name="age[]" value="elemntry">
														<label class="form-check-label flex-grow-1 fw-bold text-gray-700 fs-6" for="elem">Elemntry School</label>

														<input class="form-check-input" type="checkbox" id="juni" name="age[]" value="junior">
														<label class="form-check-label flex-grow-1 fw-bold text-gray-700 fs-6" for="juni">Junior High</label>
													</div>
												</div>
											</div>

											<div class="row mb-8 ">
												<div class="col-xl-12">
													<div class="fs-3 fw-bold mt-2 mb-3">Job Requirements</div>
												</div>
												<div class="separator my-2"></div>
											</div>	



											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Responsibilities</div>
												</div>

												<div class="col-xl-9 fv-row">
													<div class="form-check form-check-custom form-check-solid d-inline-block  mb-5">
														@if(isset($res) && !empty($res))
														@foreach($res as $key => $re)
														<div class="me-5 mb-5 d-inline-block">
															<input class="form-check-input" type="checkbox" id="res-{{$key}}" name="res_ids[]" value="{{$re->id}}">
															<label class="form-check-label flex-grow-1 fw-bold text-gray-700 fs-6" for="res-{{$key}}">{{$re->value}}</label>
														</div>
														@endforeach
														@endif

													</div>
												</div>
											</div>	

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Requirments</div>
												</div>

												<div class="col-xl-9 fv-row">
													<div class="form-check form-check-custom form-check-solid d-inline-block  mb-5">
													@if(isset($req) && !empty($req))
														@foreach($req as $key => $rq)
														<div class="me-5 mb-5 d-inline-block">
															<input class="form-check-input" type="checkbox" id="req-{{$key}}" name="req_ids[]" value="{{$rq->id}}">
															<label class="form-check-label flex-grow-1 fw-bold text-gray-700 fs-6" for="req-{{$key}}">{{$rq->value}}</label>
														</div>
														@endforeach
													@endif
														

													
													</div>
												</div>
											</div>



											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Hourly Rate</div>
												</div>

												<div class="col-xl-9 fv-row">
													<input type="hourly_rate" class="form-control form-control-solid" name="hourly_rate" required/>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Experience</div>
												</div>

												<div class="col-xl-9 fv-row">
													<input type="text" class="form-control form-control-solid" name="experience" required/>
												</div>
											</div>

											

										

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Job Title</div>
												</div>

												<div class="col-xl-9 fv-row">
													<input type="text" class="form-control form-control-solid" name="title" required/>
												</div>
											</div>


											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Description</div>
												</div>

												<div class="col-xl-9 fv-row">
													<textarea name="description" class="form-control form-control-solid h-150px" required></textarea>
													<input type="hidden" name="category_id" value="{{(isset($_GET['slug']) ? $_GET['slug'] : '')}}" />
												</div>
											</div>
										</div>

										<div class="card-footer d-flex justify-content-end py-6 px-9">
											<button type="reset" class="btn btn-light btn-active-light-primary me-2">Reset</button>
											<button type="submit" class="btn btn-primary" id="">Submit</button>
										</div>