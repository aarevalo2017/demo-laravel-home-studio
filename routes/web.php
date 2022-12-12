<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('test');
});

Route::get('productos', function(){
    $products = \App\Models\Product::all();
    //dd($products);
    return view('productos', [
        'products' => $products,
    ]);
});

Route::get('category/{id}/products', function($id){
    $products = \App\Models\Product::where('category_id', $id)->get();
    return view('productos', [
        'products' => $products,
    ]);
});

Route::get('atributos', function(){
    $attributes = \App\Models\Attribute::all();
    return view('atributos', ['attributes' => $attributes]);
});

Route::get('nuevo-producto', function(){
    $categories = \App\Models\Category::all();
    $brands = \App\Models\Brand::all();
    return view('nuevo-producto', [
        'categories' => $categories,
        'brands' => $brands,
    ]);
})->name('nuevo-producto');

Route::post('crear-producto', function(){
    $request = request();
    $product = \App\Models\Product::create([
        'modelo' => $request->modelo,
        'precio' => $request->precio,
        'stock' => $request->stock,
        'category_id' => $request->categoria,
        'brand_id' => $request->brand,
    ]);

    $data = $request->all();
    foreach ($data as $key => $value) {
        if(!empty($value) && str_starts_with($key, 'attr_')){
            $attribute_id = str_replace('attr_', '', $key);
            Log::info($attribute_id);
            \App\Models\ProductAttribute::create([
                'product_id' => $product->id,
                'attribute_id' => $attribute_id,
                'value' => $value,
            ]);
        }
    }
    return redirect('/');
})->name('crear-producto');


Route::get('category/{id}/attributes', function($id){
    $attributes = \App\Models\Attribute::where('category_id', $id)->get();
    return $attributes;
});
