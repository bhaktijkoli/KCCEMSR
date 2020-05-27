@php
  $ach = App\Achievement::where("id",$edit)->first();
  if(!$ach) abort('404',"Not found!");
@endphp
<div class="box box-primary">
  <div class="box-header">
    <h3 class="box-title">Edit Student Achievment</h3>
  </div>
  <div class="box-body">
    <form id="form-department-student-achievements" action="/api/admin/department/sa/edit" method="post" enctype="multipart/form-data" class="form-horizontal" data-form="sr">
      <input type="hidden" name="department" value="{{$dep->url}}">
      <input type="hidden" name="achievement-id" value="{{$ach->id}}">
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="name" name="name" value="{{$ach->name}}">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Studnet Type:</label>
        <div class="col-sm-9">
          <select class="form-control" id="type" name="type">
            <option value="0" {{$ach->type == '0'?'selected': ''}}>Student</option>
            <option value="2" {{$ach->type == '2'?'selected': ''}}>Alumni</option>
          </select>
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Category:</label>
        <div class="col-sm-9">
          <select class="form-control" id="category" name="category">
            <option value="Academics" {{$ach->type == 'Academics'?'selected': ''}}>Academics</option>
            <option value="Technical" {{$ach->type == 'Technical'?'selected': ''}}>Technical</option>
            <option value="Literary" {{$ach->type == 'Literary'?'selected': ''}}>Literary</option>
            <option value="Cultural" {{$ach->type == 'Cultural'?'selected': ''}}>Cultural</option>
            <option value="Sports" {{$ach->type == 'Sports'?'selected': ''}}>Sports</option>
          </select>
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="image">Photo:</label>
        <div class="col-sm-9">
          <img src="{{$ach->getUrl()}}" class="img-thumbnail" width="172"/>
          <br />
          <br />
          <input type="file" class="form-control" id="image" name="image">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="description">Achievment:</label>
        <div class="col-sm-9">
          <textarea name="description" id="description" class="textarea" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{strip_tags($ach->description)}}</textarea>
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
          <button type="submit" class="btn btn-primary btn-wide">Save</button>
        </div>
      </div>
    </form>
  </div>
</div>
