
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
    <form action="applicant" method="post"  >
      {{ csrf_field() }}
  <div class="form-group">
    <label for="Name">Full Name:</label>
    <input type="text" class="form-control" name="name" placeholder="Enter job title" id="name">
  </div>
   <div class="form-group">
    <label for="phone">Phone Number:</label>
    <input type="text" class="form-control"name='phone' placeholder="Enter phone_number" id="phone">
  </div>
   <div class="form-group">
    <label for="email">email:</label>
    <input type="v" class="form-control" name="email" placeholder="Enter email" id="email">
  </div>
   <div class="form-group">
    <label for="education">Education Qualification:</label>
    <input type="text" class="form-control" name="education" placeholder="Enter the education detail with result" id="education">
  </div>
  <div class="form-group">
    <label for="jobtitle">Job Title:</label>
    <input type="text" class="form-control" name="jobtitle" placeholder="Enter the job title you applied for" id="jobtitle">
  </div>
  
  <button type="submit" class="btn btn-primary">Apply</button>
</form>
  </div>
</div>
</div>
</div>
</body>
</html>
@endsection