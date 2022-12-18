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
            <div class="">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <form class="forms-sample" method="post" action="/addproj">
                        @csrf
                      <div class="form-group">
                        <label for="title">Project title: </label>
                        <input type="text" class="form-control" name="title" placeholder="Project title" required>
                      </div>
                      <div class="form-group">
                        <label for="supervisorid">Supervisor ID:</label>
                        <input type="number" class="form-control" min="1" max="4" name="supervisorid" placeholder="Supervisor ID" required>
                      </div>
                      <div class="form-group">
                        <label for="examiner1id">Examiner one ID:</label>
                        <input type="number" class="form-control" min="1" max="4" name="examiner1id" placeholder="Examiner one ID" required>
                      </div>
                      <div class="form-group">
                        <label for="examiner2id">Examiner two ID:</label>
                        <input type="number" class="form-control" min="1" max="4" name="examiner2id" placeholder="Examiner two ID" required>
                      </div>
                      <div class="form-group">
                        <label for="studentid">Student ID:</label>
                        <input type="text" class="form-control" maxlength="8" name="studentid" placeholder="Student ID" required>
                      </div>
                      <div class="form-group">
                        <label for="studentname">Student name:</label>
                        <input type="text" class="form-control" name="studentname" placeholder="Student name" required>
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
      
