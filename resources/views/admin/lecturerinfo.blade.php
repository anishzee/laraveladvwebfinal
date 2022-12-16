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
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bordered table</h4>
                    <p class="card-description"> Add class <code>.table-bordered</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
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
                            <td> 1 </td>
                            <td> Herman Beck </td>
                            <td>
                              
                            </td>
                            <td> $ 77.99 </td>
                            <td> May 15, 2015 </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
    </div> 
   <center><table bgcolor="grey" border="3px">

            <tr align="center">
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>

            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td><a href={{"del/".$data['id']}}>Delete</a></td>
            </tr>
            @endforeach

    </table></center>
  </div>
  @include("admin.adminscript")   
  </body>
</html>