<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  @include("sv.svcss") 
</head>
  <body>
  <div class="container-scroller">  
  @include("sv.svnavbar") 

  <center><form method="post" action="/insert">
    @csrf
          <input type="hidden" name="id" value="{{$data['project_id']}}"></input><br>

          <label for="startdate">Start Date: </label><br>
          <input type="date" name="startdate"></input><br>

          <label for="enddate">End Date: </label><br>
          <input type="date" name="enddate"></input><br>

          <label for="duration">Project Duration(month): </label><br>
          <input type="number" name="duration"></input><br>

          <label for="projprogress">Project Progress: </label><br>
          <input type="text" name="projectprogress"></input><br>

          <label for="projstatus">Project Status: </label><br>
          <input type="text" name="projectstatus"></input><br>


          <button type="submit">Update</button>
          <button type="reset">Reset Form</button>
  </form></center>







  </div>   
  @include("sv.svscript")  
  </body>
</html>