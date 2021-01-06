
@extends('layouts.master')
@section('content')


<div class= "col-md-8">
	<div class="widget">
		<h3>AVAILABLE JOBS</h3>
		<div class="row">
         @foreach($jobs as $job)
       <div class="container">
		<div class="col-md-3">
			<div class="card" style="width:400px">
                <div class="card-body">
                    <h3 class="card-title">job title: {{$job->jobtitle}}</h3>
                    <p class="card-text">office name: {{$job->officename}} </p>
                    <p class="card-text">location:  {{$job->location}}</p>
                    <p class="card-text">salary:   {{$job->salary}}</p>
                     <a class="nav-link" href="apply">APPLY NOW</a>
                </div>
            </div>
        </div>
    </div>
        @endforeach
    </div>
	
</div>


</div>
@endsection