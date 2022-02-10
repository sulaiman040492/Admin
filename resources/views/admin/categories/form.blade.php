@csrf
<div class="card-body p-9">
  <div class="row mb-8">
    <div class="col-xl-3">
      <div class="fs-6 fw-bold mt-2 mb-3">Name</div>
    </div>
    <div class="col-xl-9 fv-row">
      <input type="text" class="form-control form-control-solid" name="name" value="{{ old('name',  isset($category)?$category->name:'') }}" />
    </div>
  </div>
  <div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Description</div>
												</div>

												<div class="col-xl-9 fv-row">
													<textarea name="description" class="form-control form-control-solid h-150px" required>{{old('description',isset($category)?$category->description:'')}}</textarea>
												</div>
											</div>


											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Number of Vacancies</div>
												</div>

												<div class="col-xl-9 fv-row">
													<input type="number" class="form-control form-control-solid" name="number_of_jobs" value="{{old('number_of_jobs',isset($category)?$category->number_of_jobs:'')}}" required/>
												</div>
											</div>

											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Icon</div>
												</div>

												<div class="col-xl-9 fv-row">
                          @if(isset($category) && $category->icon != null)
                            <img src="{{asset('images/categories/'.$category->icon)}}" width="100" height="100" />
                            <input type="hidden" name="old_icon" value="{{$category->icon}}">
                          @endif
													<input type="file" class="form-control form-control-solid" name="icon" value="{{old('icon',isset($category)?$category->icon:'')}}" @if(!isset($category)) required @endif/>
												</div>
											</div>


											<div class="row mb-8">
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Status</div>
												</div>

												<div class="col-xl-9 fv-row">
													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select category status" name="is_active" required>
														<option value="">Select...</option>
														<option @if(old('is_active') == 1) selected @endif @if(isset($category) && $category->is_acitve == 1) selected @endif value="1">Active</option>
														<option @if(old('is_active') == 0) selected @endif @if(isset($category) && $category->is_acitve == 0) selected @endif value="0">Inactive</option>
													</select>
												</div>
											</div>

</div>
<div class="card-footer d-flex justify-content-end py-6 px-9">
  <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
  <button type="submit" class="btn btn-primary" id="kt_project_settings_submit">{{isset($submitButtonText) ? $submitButtonText : 'Add'}}</button>
</div>