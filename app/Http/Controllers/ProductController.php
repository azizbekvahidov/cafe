<?php

namespace App\Http\Controllers;

use App\Category;
use App\Measure;
use App\Product;
use App\ProductType;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index() {
        $products = Product::where('status', 1)->get();
        return view('admin.products.index',[
            'products' => $products
        ]);
    }

    public function create(){
        $products = Product::get();
        return view('admin.products.create', [
            'products' => $products,
            'measures' => Measure::get(),
            'productTypes' => ProductType::get(),
            'categories' => Category::get()
        ]);

    }

    public function store(Request $request){
        try {
            $products = new Product();
            $products->name = $request->name;
            $products->measure_id = $request->measures;
            $products->prod_type_id = $request->productTypes;
            $products->category_id = $request->category;
            $products->status = $request->status;
            $products->cnt = $request->cnt;

            if ($request->file('image')) {
                $path = Storage::putFile('public/images', $request->file('image'));
                $url = str_replace('/public/', '/', Storage::url($path));
                $products->image = $url;
            }
            $products->save();
            $success_output = 'success';//'<div class="alert alert-success">Добавлена новая запись</div>';
            $output = array(
                'result' => $success_output,
                'id' => $products->id
            );
            return response($output, 201);
        }
        catch(\Exception $ex){
            return response($ex->getMessage(),400);
        }
    }

    public function edit($id){
        $products = Product::findOrFail($id);
        return view('admin.products.edit',[
            'products' => $products,
            'measures' => Measure::get(),
            'productTypes' => ProductType::get(),
            'categories' => Category::get()
        ]);
    }

    public function update(Request $request, $id){
        $products = Product::findOrFail($id);
        $products->name = $request->name;
        $products->measure_id = $request->measures;
        $products->prod_type_id = $request->productTypes;
        $products->category_id = $request->category;
        $products->cnt = $request->cnt;

        if ($request->file('image')){
            $path = Storage::putFile('public/images', $request->file('image'));
            $url = str_replace('/public/', '/', Storage::url($path));
            $products->image = $url;
        }
        $products->update();
        return redirect()->route('products.index');
    }

    public function show(Request $request){
        $products = Product::where('status',1)->orderBy('id')->get();
        $productTypes = ProductType::get();
        $measures = Measure::get();
        return view('admin.products.show',[
            'products' => $products,
            'productTypes' => $productTypes,
            'measures' => $measures
        ]);
    }
    public function destroy($id){
        try {
            $products = Product::findOrFail($id);
            $products->update([
                'status' => 0
            ]);
            $success_output = 'success';
            $output =  array(
                'result' => $success_output,
                'id' => $products->id
            );
            return response($output, 201);
        }
        catch (\Exception $ex) {
            return response($ex->getMessage(), 400);
        }
    }
}
