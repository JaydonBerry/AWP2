<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\job;

class jobController extends Controller
{
    public function create()
	{
		return view('NewJob');
	}

    public function store(Request $request)
	{
		$job = new job($request->all());
		$job->save();
		//return $job;
		return redirect()->action('jobController@selectJob', [$job]);
	}

	public function selectJob($id)
    {
        $job = job::findorFail($id);
        return $job;
        //return view('PatientView', compact('patient', 'triage'));
	}
}
