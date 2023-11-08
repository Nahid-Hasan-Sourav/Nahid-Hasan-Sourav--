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
        $datas = Task::all();
        return view('admin.view',compact('datas'));
    }

    public function edit(Request $request,$id){
        // dd("test");
        $data = Task::find($id);

        return view('admin.edit',compact('data'));
    }
    public function update(Request $request,$id){
        $data = Task::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->status = $request->status;
        $data->save();
        return redirect()->to('/task/view')->with('message','data update successfull');
    }
    public function delete($id){
        $data = Task::find($id);
        $data->delete();

        return back()->with('message','delete successfully');
    }
}
