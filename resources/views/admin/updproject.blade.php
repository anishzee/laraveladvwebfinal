<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
@include("admin.admincss") 
<style>
.city {
  background-color:darkgrey;
  color: white;
}

.fontcolor {
  color: black;
}

</style>
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
                        <label for="id">Project ID:</label>
                        <input type="text" class="form-control" class="fontcolor" name="id" value="{{$data['project_id']}}" readonly>
                        </div>
                        <div class="form-group">
                        <label for="title">Project Title:</label>
                        <input type="text" class="form-control" name="title" value="{{$data['title']}}" readonly>
                        </div>
                        <div class="form-group">
                        <label for="startdate">Start Date:</label>
                        <input type="date" class="form-control" name="startdate" value="{{$data['start_date']}}" required>
                        </div>
                        <div class="form-group">
                        <label for="enddate">End Date:</label>
                        <input type="date" class="form-control" name="enddate" value="{{$data['end_date']}}" required>
                        </div>
                        <div class="form-group">
                        <label for="duration">Project Duration(month):</label>
                        <input type="number" class="form-control" name="duration" min="1" max="6" value="{{$data['duration']}}" required>
                        </div>
                        <div class="form-group">
                        <label for="projectprogress">Project Progress:</label>
                          <select class="city" style="width:100%" name="projectprogress" required >
                            <option value="Milestone 1">Milestone 1</option>
                            <option value="Milestone 2">Milestone 2</option>
                            <option value="Milestone 3">Milestone 3</option>
                            <option value="Final Report">Final Report</option>
                          </select>
                        </div>
                        <div class="form-group">
                        <label for="projectstatus">Project Status</label>
                          <select class="city" style="width:100%" name="projectstatus" required>
                            <option value="On track">On track</option>
                            <option value="Delayed">Delayed</option>
                            <option value="Extended">Extended</option>
                            <option value="Completed">Completed</option>
                          </select>
                        </div>
                    
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button type="reset" class="btn btn-dark">Reset</button>
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
      
