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
              <h3 class="page-title"> View Supervisee Project </h3>
            </div>
            <div class="">
              <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Project ID</th>
                            <th>Title</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Duration(month)</th>
                            <th>Project Progress</th>
                            <th>Project Status</th>
                            <th>Supervisor ID</th>
                            <th>Examiner One ID</th>
                            <th>Examiner Two ID</th>
                            <th>Student ID</th>
                            <th>Student Name</th>
                          </tr>
                        </thead>
                        <tbody> 
                          <tr>
                          @foreach($data as $data)
                            <td>{{$data['project_id']}}</td>
                            <td>{{$data['title']}}</td>
                            <td>{{$data['start_date']}}</td>
                            <td>{{$data['end_date']}}</td>
                            <td>{{$data['duration']}}</td>
                            <td>{{$data['project_progress']}}</td>
                            <td>{{$data['project_status']}}</td>
                            <td>{{$data['supervisor_id']}}</td>
                            <td>{{$data['examiner1_id']}}</td>
                            <td>{{$data['examiner2_id']}}</td>
                            <td>{{$data['student_id']}}</td>
                            <td>{{$data['student_name']}}</td>
                          </tr>
                          @endforeach 
                        </tbody>
                      </table>
                    </div>
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
      