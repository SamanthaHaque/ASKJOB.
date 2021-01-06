<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\applicant;
use App\Models\job;
class ApplicantController extends Controller
{
    
 
    public function showapplicants()
    {
    	
      $applicants = applicant::all(); 
    	// dd($applicants);
    	
    	return view('admin')->with(['applicants'=>$applicants]);
    }
    public function apply()
    {
    	return view('apply');
    }
     public function applystore(Request $request)
    {

    	$applicant = new applicant;
    	$applicant->name = $request->name;
    	$applicant->phone = $request->phone;
    	$applicant->email = $request->email;
    	$applicant->education = $request->education;
    	$applicant->jobtitle = $request->jobtitle;
    	$applicant->save();

    	session()->flash('msg','new post added successfully!');

    	return redirect('applystore');
}
}