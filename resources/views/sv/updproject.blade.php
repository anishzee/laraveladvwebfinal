<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
@include("sv.svcss") 
<style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #FAEBD7;
  color: white;
}
</style>
</head>
<body>
<div class="container-scroller">  
@include("sv.svnavbar") 
    
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Update Project </h3>
            </div>
            <div class="">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                     
                    <form class="forms-sample" method="post" action="/insert">
                        @csrf
                      <div class="form-group">
                      <label for="id">Project ID:</label>
                        <input background-color="#FAEBD7" type="text" class="form-control" name="id" value="{{$data['project_id']}}" readonly>
                      </div>
                      <div class="form-group">
                      <label for="title">Project Title:</label>
                        <input background-color="#FAEBD7" type="text" class="form-control" name="title" value="{{$data['title']}}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="startdate">Start Date:</label>
                        <input type="date" class="form-control" name="startdate" value="{{$data['start_date']}}">
                      </div>
                      <div class="form-group">
                        <label for="enddate">End Date:</label>
                        <input type="date" class="form-control" name="enddate" value="{{$data['end_date']}}">
                      </div>
                      <div class="form-group">
                        <label for="duration">Project Duration(month):</label>
                        <input type="number" class="form-control" name="duration" min="1" max="6" value="{{$data['duration']}}">
                      </div>
                      <div class="form-group">
                        <label for="projectprogress">Project Progress:</label>
                          <select class="js-example-basic-single" style="width:100%" name="projectprogress" >
                            <option value="On track">Milestone 1</option>
                            <option value="Delayed">Milestone 2</option>
                            <option value="Extended">Milestone 3</option>
                            <option value="Completed">Final Report</option>
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
                      <button type=reset class="btn btn-dark">Reset</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>

        
</div>
@include("sv.svscript")   
</body>
</html>
      
