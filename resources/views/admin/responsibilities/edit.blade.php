@extends('layouts.admin')
@section('content')
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<div class="toolbar" id="kt_toolbar">
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
										Dashboard
										<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
										<small class="text-muted fs-7 fw-bold my-1 ms-1">Edit Responsibility</small>
									</h1>
								</div>					
							</div>
						</div>

						<div class="post d-flex flex-column-fluid" id="kt_post">
							<div id="kt_content_container" class="container-fluid">

								<div class="card">
									<div class="card-header">
										<div class="card-title fs-3 fw-bolder">Edit <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
										<small class="text-muted fs-7 fw-bold my-1 ms-1">Responsibility</small></div>
									</div>

                                    {{ Form::model($res, ['method'=>'PATCH', 'route' => ['admin.responsibility.update', [$res->id]]]) }}
                                        @include('admin.responsibilities.form', ['submitButtonText'=>'Update'])
                                    {{ Form::close() }}

									<!-- <form id="kt_project_settings_form" class="form" method="POST" action="{{route('admin.category.store')}}">	
									</form> -->
								</div>
							</div>
						</div>
					</div>
      @endsection