<?php

namespace App\Http\Controllers;

use App\MenuCategory;
use Illuminate\Http\Request;

class MenuCategoryController extends Controller
{
    public function index(){
        $menu = MenuCategory::get();
        return view('admin.menu.index',[
            'menu' => $menu
        ]);
    }
    public function create(){
        return view('admin.menu.create');
    }
    public function store(Request $request){
        \Validator::make($request->all(),[
            'name'   => 'required',
            'priority' => 'required'
        ])->validate();
        $menu = new MenuCategory();
        $menu->name = $request->name;
        $menu->priority = $request->priority;
        $menu->save();
        return redirect()->route('menu.index');
    }
    public function edit($id){
        $menu = MenuCategory::findOrFail($id);
        return view('admin.menu.edit', [
            'menu' => $menu
        ]);
    }

    public function update(Request $request, $id){
        \Validator::make($request->all(),[
            'name'   => 'required',
            'priority' => 'required'
        ])->validate();
        $menu = MenuCategory::findOrFail($id);
        $menu->name = $request->name;
        $menu->priority = $request->priority;
        $menu->update();
        return redirect()->route('menu.index');
    }


    public function destroy($id){
        $menu = MenuCategory::findOrFail($id);
        $menu->delete();
        return redirect()->route('menu.index');
    }
}
