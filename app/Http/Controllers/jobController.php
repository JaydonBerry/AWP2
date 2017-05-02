<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\job;

class jobController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

	public function all()
	{
	 	$job = job::all();
	 	//return $job;
	 	return view('JobFeed', compact('job'));
	}

    public function create()
	{
		return view('NewJob');
	}

    public function store(Request $request)
	{
		$job = new job($request->all());
		if ($file = $request->hasFile('img'))
		{
			$file = $request->file('img');
			$name = time() . '-' . $file->getClientOriginalName();
			$file->move(public_path().'/uploads/images/', $name);
			$job['img'] = $name;
		}
		$job->save();
		//return $job;
		return redirect()->action('jobController@selectJob', [$job]);
	}

	public function selectJob($id)
    {
        $job = job::findorFail($id);
        //return $job;
        return view('JobView', compact('job'));
	}

	public function edit($id)
	{
		$job = job::findorFail($id);
		return view('JobEdit', compact('job'));

	}

	public function update(Request $request, $id)
	{
		$job = job::findorFail($id);
		if ($file = $request->hasFile('img'))
		{
			$file = $request->file('img');
			$name = time() . '-' . $file->getClientOriginalName();
			$file->move(public_path().'/uploads/images/', $name);
			$job['img'] = $name;
		}
		$job->save();
		return redirect()->action('jobController@selectJob', [$job]);
	}


	public function delete($id)
	{
		$job = job::findorFail($id);
		$job->delete();
		return redirect()->action('jobController@all');
	}

	public function search(Request $request)
	{
		$query = $request->search;
		$job = job::search($query)->get();
		//return $job;
		return view('JobFeed', compact('job'));
	}


}
