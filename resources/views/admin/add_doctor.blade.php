

<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
      label{
        display: inline-flex;
        align-items: center;
        width: 200px;
      }
    </style>
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


        




          <div class="container" align="center" style="padding-top: 50px;">
        

              <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                @csrf
               <div style="padding: 15px;"> 
                  <label>Doctor Name </label>
                  <input type="text" style="color:black;" name="name" placeholder="Write the name" required="">
                </div> 
                <div style="padding: 15px;"> 
       
                  <label>Phone </label>
                 <input type="number" style="color:black;" name="number" placeholder="Write the number" required="">
                </div> 
                <div style="padding: 15px;"> 
       
                  <label>speciality </label>
                  <select name="speciality" style="color: black; width: 200px;" required="">
                    <option>--Select--</option>
                    <option value="Skin">Skin</option>
                    <option value="Heart">Heart</option>
                    <option value="Eye">Eye</option>
                    <option value="Noses">Noses</option>

                  </select>
                </div> 
                <div style="padding: 15px;"> 
       
                  <label>RoomNo</label>
                 <input type="number" style="color:black;" name="RoomNo" placeholder="Write the room number" required="">
                </div> 
                <div style="padding: 15px;"> 
       
                  <label>Doctor Image </label>
                  <input type="file" name="file" required="">
                </div>
                <div style="padding: 15px;"> 
       
                  
                  <input type="submit" class="btn btn-success">
                </div>
                 

              </form>
              @if(session()->has('message'))

                 <div class="alert alert-success">
                   <button type="button" class="close" data-dismal="alert">
                      X
                    </button>
                   {{session()->get('message')}}


                  </div>
              @endif
            
        </div>
          <h1>Add doctor</h1>
    </div>
   

        
       
        <!-- partial -->
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
  </body>
</html>
