@csrf
<div class="card-body p-9">
  <div class="row mb-8">
    <div class="col-xl-3">
      <div class="fs-6 fw-bold mt-2 mb-3">Name</div>
    </div>
    <div class="col-xl-9 fv-row">
      <input type="text" class="form-control form-control-solid" name="value" value="{{ old('value',  isset($res)?$res->value:'') }}" />
    </div>
  </div>
</div>
<div class="card-footer d-flex justify-content-end py-6 px-9">
  <a href="{{route('admin.responsibility.index')}}"><button type="button" class="btn btn-light btn-active-light-primary me-2">Back</button></a>
  <button type="submit" class="btn btn-primary" id="kt_project_settings_submit">{{isset($submitButtonText) ? $submitButtonText : 'Add'}}</button>
</div>