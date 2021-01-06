<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\job;



class PagesController extends Controller
{
    public function index()
    {
     	return view('index');
     }
     

     public function showJobs()
    {
    	$jobs = job::all();
    	
    	
    	return view('job')->with(['jobs'=>$jobs]);
    }
    public function login()
    {
    	return view('login');
    }
    


    
    // public function jobs()
    // {
    // 	$jobs = job::orderBy('id','officename','jobtitle','location','salary')->get();
    // 	return view('job')->with('jobs',$jobs);
    // }
}
