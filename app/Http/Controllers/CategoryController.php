<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::get();
        return view('admin.categories.index',[
            'categories' => $categories
        ]);
    }

    public function create(){
        return view('admin.categories.create');
    }

    public function store(Request $request){
        \Validator::make($request->all(),[
            'name'   => 'required',
            'status' => 'required'
        ])->validate();
        $categories = new Category();
        $categories->name = $request->name;
        $categories->status = $request->status;
        $categories->save();
        return redirect()->route('categories.index');
    }

    public function edit($id){
        $categories = Category::findOrFail($id);
        return view('admin.categories.edit', [
            'categories' => $categories
        ]);
    }

    public function update(Request $request, $id){
        \Validator::make($request->all(),[
            'name'   => 'required',
            'status' => 'required'
        ])->validate();
        $categories = Category::findOrFail($id);
        $categories->name = $request->name;
        $categories->status = $request->status;
        $categories->update();
        return redirect()->route('categories.index');
    }

    public function destroy($id){
        $categories = Category::findOrFail($id);
        $categories->delete();
        return redirect()->route('categories.index');
    }
}
