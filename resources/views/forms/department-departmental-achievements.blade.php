<div class="box box-primary">
  <div class="box-header">
    <h3 class="box-title">Departmental Achievement</h3>
  </div>
  <div class="box-body">
    <table id="department-table" class="table table-bordered table-hover datatable-full">
      <thead>
        <tr>
          <th width="10%">Photo</th>
          <th width="20%">Name</th>
          <th width="50%">Achievement</th>
          <th width="20%">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach (App\Achievement::where("type","1")->where("department",$dep->url)->get() as $ach)
          <tr>
            <td><img src="{{$ach->getUrl()}}" alt="" width="60" height="60"></td>
            <td>{{$ach->name}}</td>
            <td>{{strip_tags($ach->description)}}</td>
            <td>
              <a class="btn btn-warning btn-sm" style="margin-right:10px;" href="{{route('admin_department_edit',[$dep->url,$action,$ach->id])}}"><i class="fa fa-pencil"></i></a>
              <a class="btn btn-sm btn-danger" style="margin-right:10px;" onclick="dashboard.removeYesNo('Are you sure you want to remove this achievement ?', '/api/admin/department/da/remove', {{$ach->id}})"><i class="fa fa-trash-o"></i></a>
            </td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <tr>
            <th width="10%">Photo</th>
            <th width="20%">Name</th>
            <th width="50%">Achievement</th>
            <th width="20%">Actions</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <div class="box box-primary">
    <div class="box-header">
      <h3 class="box-title">Add New</h3>
    </div>
    <div class="box-body">
      <form id="form-department-departmental-achievements" action="/api/admin/department/da/add" method="post" enctype="multipart/form-data" class="form-horizontal" data-form="sr">
        <input type="hidden" name="department" value="{{$dep->url}}">
        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Name:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="name" name="name">
            <p class="help-block"></p>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="image">Photo:</label>
          <div class="col-sm-9">
            <input type="file" class="form-control" id="image" name="image">
            <p class="help-block"></p>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="description">Achievment:</label>
          <div class="col-sm-9">
            <textarea name="description" id="description" class="textarea" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            <p class="help-block"></p>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-4">
            <button type="submit" class="btn btn-primary btn-wide">Add</button>
          </div>
        </div>
      </form>
    </div>
  </div>
