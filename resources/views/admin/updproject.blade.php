<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
@include("admin.admincss") 
</head>
<body>
<div class="container-scroller">  
@include("admin.navbar") 
    
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Update Project </h3>
            </div>
            <div class="">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                     
                    <form class="forms-sample" method="post" action="/update">
                        @csrf
                      <div class="form-group">
                        <input type="hidden" class="form-control" name="id" value="{{$data['project_id']}}">
                      </div>
                      <div class="form-group">
                        <label for="startdate">Start Date:</label>
                        <input type="date" class="form-control" name="startdate" placeholder="Start date">
                      </div>
                      <div class="form-group">
                        <label for="enddate">End Date:</label>
                        <input type="date" class="form-control" name="enddate" placeholder="End date">
                      </div>
                      <div class="form-group">
                        <label for="duration">Project Duration(month):</label>
                        <input type="number" class="form-control" name="duration" placeholder="Duration">
                      </div>
                      <div class="form-group">
                        <label for="projectprogress">Project Progress:</label>
                          <select class="js-example-basic-single" style="width:100%" name="projectstatus">
                            <option value="On track">On track</option>
                            <option value="Delayed">Delayed</option>
                            <option value="Extended">Extended</option>
                            <option value="Completed">Completed</option>
                      </select>
                      </div>
                      <div class="form-group">
                        <label for="projectstatus">Project Status</label>
                          <select class="js-example-basic-single" style="width:100%" name="projectstatus">
                            <option value="On track">On track</option>
                            <option value="Delayed">Delayed</option>
                            <option value="Extended">Extended</option>
                            <option value="Completed">Completed</option>
                      </select>
                      </div>
                    
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>

        
</div>
@include("admin.adminscript")   
</body>
</html>
      
