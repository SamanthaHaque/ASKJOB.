
@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <title>post New Job</title>
</head>
<body>
  
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h4>Job posting portal</h4>
        <div class="card-body">
    <form action="admin" method="post"  >
      {{ csrf_field() }}
  <div class="form-group">
    <label for="jobtitle">Job Title:</label>
    <input type="text" class="form-control" name="jobtitle" placeholder="Enter job title" id="jobtitle">
  </div>
   <div class="form-group">
    <label for="Officename">Office Name:</label>
    <input type="text" class="form-control"name='officename' placeholder="Enter Office Name" id="officename">
  </div>
   <div class="form-group">
    <label for="location">Location:</label>
    <input type="text" class="form-control" name="location" placeholder="Enter Office Location" id="location">
  </div>
   <div class="form-group">
    <label for="salary">Salary:</label>
    <input type="text" class="form-control" name="salary" placeholder="Enter Approximate Salary" id="salary">
  </div>
  
  <button type="submit" class="btn btn-primary">Add Job</button>
</form>
  </div>

</div>
</div>
</div>


  
</div>


</div>

</div>
<div class="container">
  
<div class= "col-md-8">
  <div class="widget">
    <h3>AVAILABLE JOBS</h3>
    <div class="row">
         @foreach($applicants as $applicant)
       <div class="container">
    <div class="col-md-3">
      <div class="card" style="width:400px">
                <div class="card-body">
                    <h3 class="card-title">name: {{$applicant->name}}</h3>
                    <p class="card-text">phone: {{$applicant->phone}} </p>
                    <p class="card-text">email:  {{$applicant->email}}</p>
                    <p class="card-text">education:   {{$applicant->education}}</p>
                    <p class="card-text">jobtitle:   {{$applicant->jobtitle}}</p>
                   {{--  <!--  <a class="nav-link" href={{ route('apply') }}>APPLY NOW</a> --> --}}
                </div>
            </div>
        </div>
    </div>
        @endforeach
    </div>
</body>
</html>
@endsection