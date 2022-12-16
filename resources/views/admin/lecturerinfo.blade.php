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
              <h3 class="page-title"> Lecturer Information </h3>
            </div>
            <div class="">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th> ID </th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                          @foreach($data as $data)
                          <td>{{$data->id}}</td>
                          <td>{{$data->name}}</td>
                          <td>{{$data->email}}</td>
                          <td><button type="button" class="btn btn-danger"><a href={{"del/".$data['id']}}>Delete</a></td>
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