<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\job;

class AdminPagesController extends Controller
{
    public function admin()
    {
    	return view('admin');
    }
    
    public function adminpost(Request $request)
    {
    	$job = new job;
    	$job->officename = $request->officename;
    	$job->jobtitle = $request->jobtitle;
    	$job->location = $request->location;
    	$job->salary = $request->salary;
    	$job->save();

    	session()->flash('msg','new post added successfully!');

    	return redirect('adminpost');


    }

}
