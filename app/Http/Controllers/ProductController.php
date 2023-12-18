<?php

namespace App\Http\Controllers;

use App\Events\UserLog;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('product.index',[
            'product' => $product
        ]);
    }

    public function create(){
        return view('product/create');
    }

    public function store(Request $request){
        $request->validate([
            'name'      => 'required|string',
            'description'     => 'required|string',
            'square_meter'  => 'required|integer',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
 
        ]);
if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = Str::slug($request->name) . '_' . time() . '.' . $image->getClientOriginalExtension();
        Storage::disk('public')->put('photos/' . $imageName, file_get_contents($image));
    }

    $imagePath = $request->file('image')->store('photos', 'public');
    // dd($imagePath);
       

        $product = Product::create($request->all());
        $log_entry = Auth::user()->name . " added a product ". $product->name . " with the id# ". $product->id;
        event(new UserLog($log_entry));
        return redirect('/product')->with('message', ' Product added successfully!');
    }

    public function edit(Product $product){
        return view('product/edit',[
            'product' => $product
        ]);
    }

    public function update(Request $request, Product $product) {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'square_meter' => 'required|integer',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
 
        ]);

          if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('public/photos');
        $imagePath = str_replace('public/', '', $imagePath);
        $product->update(['image' => $imagePath]);
    }

        $product->update($data);
        $log_entry = Auth::user()->name . " updated a product ". $product->name . " with the id# ". $product->id;
        event(new UserLog($log_entry));


        return redirect('/product')->with('message', 'Product updated successfully!');
    }

    public function destroy(Product $product){
        $product->delete();
        $log_entry = Auth::user()->name . " deleted an product ". $product->name . " with the id# ". $product->id;
        event(new UserLog($log_entry));
        return redirect('/product')->with('message', 'Product deleted successfully!');
    }
}
