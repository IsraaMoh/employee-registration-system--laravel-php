<div class="card mb-3">
  <img src="http://www.serviceexperienced.com/wp-content/uploads/2018/07/Hire-Today-Best-Company-Background-Verification-Detective-in-Delhi.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Employees</h5>
    <p class="card-text">You can find here the basic information about employees in the system.</p>
    
    



<table class="table table-striped">
  <thead>
     <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Department</th>
    </tr>
  </thead>
  <tbody>
    @foreach($employees as $employee)
    <tr>
      <td>{{$employee->id}}</td>
      <td>{{$employee->firstName}}</td>
      <td>{{$employee->lastName}}</td>
      <td>{{$employee->age}}</td>
      <td>{{$employee->department}}</td>
      <td>
          
          <a href="{{url('/edit/'.$employee->id)}}"  class="btn btn-sm btn-primary">Edit</a>
          <a href="{{url('/delete/'.$employee->id)}}" class="btn btn-sm btn-danger"> Delete</a>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>


  </div>
