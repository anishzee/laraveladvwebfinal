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
              <h3 class="page-title"> Create New Project </h3>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <form class="forms-sample" method="post" action="/addproj">
                        @csrf
                      <div class="form-group">
                        <label for="title">Project title: </label>
                        <input type="text" class="form-control" name="title" placeholder="Project title">
                      </div>
                      <div class="form-group">
                        <label for="supervisorid">Supervisor ID:</label>
                        <input type="text" class="form-control" name="supervisorid" placeholder="Supervisor ID">
                      </div>
                      <div class="form-group">
                        <label for="examiner1id">Examiner one ID:</label>
                        <input type="text" class="form-control" name="examiner1id" placeholder="Examiner one ID">
                      </div>
                      <div class="form-group">
                        <label for="examiner2id">Examiner two ID:</label>
                        <input type="text" class="form-control" name="examiner2id" placeholder="Examiner two ID">
                      </div>
                      <div class="form-group">
                        <label for="studentid">Student ID:</label>
                        <input type="text" class="form-control" name="studentid" placeholder="Student ID">
                      </div>
                      <div class="form-group">
                        <label for="studentname">Student name:</label>
                        <input type="text" class="form-control" name="studentname" placeholder="Student name">
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
      
