<?php

namespace App\Http\Controllers;

use App\Measure;
use Illuminate\Http\Request;

class MeasureController extends Controller
{
    public function index(){
        $measures = Measure::get();
        return view('admin.measures.index',[
            'measures' => $measures
        ]);
    }

    public function create(){
        return view('admin.measures.create');
    }

    public function store(Request $request){
        \Validator::make($request->all(),[
            'name'   => 'required',
            'status' => 'required'
        ])->validate();
        $measures = new Measure();
        $measures->name = $request->name;
        $measures->status = $request->status;
        $measures->save();
        return redirect()->route('measures.index');
    }

    public function edit($id){
        $measures = Measure::findOrFail($id);
        return view('admin.measures.edit', [
            'measures' => $measures
        ]);
    }

    public function update(Request $request, $id){
        \Validator::make($request->all(),[
            'name'   => 'required',
            'status' => 'required'
        ])->validate();
        $measures = Measure::findOrFail($id);
        $measures->name = $request->name;
        $measures->status = $request->status;
        $measures->update();
        return redirect()->route('measures.index');
    }


    public function destroy($id){
        $measures = Measure::findOrFail($id);
        $measures->delete();
        return redirect()->route('measures.index');
    }
}
