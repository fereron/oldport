<?php

namespace App\Http\Controllers;

use App\User;
use App\Work;
use Illuminate\Http\Request;

class WorksController extends Controller
{

    public function Index()
    {

        $works = Work::all();

        return view('works', ['works' => $works]);
    }

    public function addWork(Request $request)
    {

//        $request = $request->all();


        $this->validate($request, [
            'url' => 'required',
            'description' => 'required'
        ]);

        $work = new Work();
        $work->url = $request['url'];
        $work->description = $request['description'];
        $work->image = '';
        $work->save();

        return redirect()->route('works');

    }


}
