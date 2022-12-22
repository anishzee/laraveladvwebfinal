<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  @include("admin.admincss") 

<style>
h1 {
  text-align: center;
}

</style>
</head>
  <body>

  <div class="container-scroller">  
  @include("admin.navbar") 
   
  <div class="main-panel">
    
    <h1>WELCOME TO ADMIN PAGE</h1>
            
  </div>

  </div>     
  @include("admin.adminscript")  
  </body>
</html>
