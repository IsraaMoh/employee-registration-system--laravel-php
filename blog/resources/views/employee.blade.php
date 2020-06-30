<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('CSS/style.css')}}">
    <title>Employee Mangment System</title>
  </head>
  <body>
  @include("navbar")
  
  <div class="row header-container justify-content-center">
     <div class="header">
       <h1> Employee Management System</h1>

  </div>



   @if($layout == 'index')
        <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">

        <div class ="row justify-content-center">
          <section class="col-md-7">
           @include("employeelist")
           </section>
          </div>
          <section class="col-md-5"> </section>
    </div>
      </div>
   @elseif($layout == 'create')
    <div class="container-fluid mt-4">
    <div class ="row">
        <section class="col-md-7">
           @include("employeelist")
         </section>
      <section class="col-md-5">
      <div class="card mb-3">
      
      <div class="card-body">
     <h5 class="card-title">Enter the information about new employee</h5>
     <form action ="{{url('/store')}}" method="post">
              @csrf
            <div class="form-group">
                 <label>ID</label>
                 <input  name ="ID" type="integer" class="form-control"  placeholder="Enter ID">
            </div>

            <div class="form-group">
                 <label>First Name</label>
                 <input  name ="firstName" type="text" class="form-control"  placeholder="Enter First Name">
            </div>

            <div class="form-group">
                 <label>Last Name</label>
                 <input  name ="lastName" type="text" class="form-control"  placeholder="Enter Last Name">
            </div>
          
            <div class="form-group">
                 <label>Age</label>
                 <input  name ="age" type="integer" class="form-control"  placeholder="Enter the age">
            </div>

            <div class="form-group">
                 <label>Department</label>
                 <input  name ="department" type="text" class="form-control"  placeholder="Enter Department">
            </div>

            <input type="submit" class="btn btn-info" vlaue="Save">
            <input type="reset"  class="btn btn-info" value="Reset">

        </form> 

      </div>
        
        
    </section>
  </div>
    </div>

   @elseif($layout == 'show')
   <div class="container-fluid mt-4">
   <div class ="row">
        <section class="col">
           @include("employeelist")
         </section>
        <section class="col"> </section>
    </div>
     </div>

   @elseif($layout == 'edit')
   <div class="container-fluid mt-4">
   <div class ="row">
        <section class="col-md-7">
           @include("employeelist")
         </section>
        <section class="col-md-5"> 
        
      <div class="card-body">
     <h5 class="card-title">Update the information about new employee</h5>
        <form action ="{{url('/update/'.$employee->id)}}" method="post">
              @csrf
            <div class="form-group">
                 <label>ID</label>
                 <input value="{{$employee->id}}" name ="ID" type="integer" class="form-control"  placeholder="Enter ID">
            </div>

            <div class="form-group">
                 <label>First Name</label>
                 <input value="{{$employee->firstName}}"  name ="firstName" type="text" class="form-control"  placeholder="Enter First Name">
            </div>

            <div class="form-group">
                 <label>Last Name</label>
                 <input value="{{$employee->lastName}}"  name ="lastName" type="text" class="form-control"  placeholder="Enter Last Name">
            </div>
          
            <div class="form-group">
                 <label>Age</label>
                 <input value="{{$employee->age}}" name ="age" type="integer" class="form-control"  placeholder="Enter the age">
            </div>

            <div class="form-group">
                 <label>Department</label>
                 <input value="{{$employee->department}}" name ="department" type="text" class="form-control"  placeholder="Enter Department">
            </div>

            <input type="submit" class="btn btn-info" vlaue="Update">
            <input type="reset"  class="btn btn-info" value="Reset">

        </form> 
        </div>
        </section>
    </div>
  </div>
   @endif


<footer> 
 </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>