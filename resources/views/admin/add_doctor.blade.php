

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
          @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
           
           
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      
        <!-- partial:partials/_navbar.html -->
       @include('admin.navbar')
       <div class="container-fluid page-body-wrapper">
       <h1>Add doctor</h1>
         </div>
        
       
        <!-- partial -->
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
  </body>
</html>
