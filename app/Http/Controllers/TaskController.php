<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view('admin.task');
    }

    public function store(Request $request){
        // dd($request->all());
        $data = new Task();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->status = $request->status;
        $data->save();

        return back()->with('message','data store successfull');
    }

    public function view(){
        $data = Task::all();
        return view('admin.view',compact('data'));
    }
}
