<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Complaint;

class WelcomeController extends Controller
{
    public function index(){
    	$subjects = Subject::all();
    	$complaints =  Complaint::all();
    	return view('welcome', [
    		'subjects' => $subjects,
    		'complaints' => $complaints
    	]);
    }

    public function saveComplaint(Request $request){
    	$complaint = new Complaint();
    	$complaint->subject = $request->subject;
    	$complaint->title = $request->title;
    	$complaint->save();
    	return;
    }
}
