<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data=Product::get();
        return view('product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        if($request->hasFile('image')){
            $imageName=time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $input['image']=$imageName;
        }
        Product::create($input);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $input=$request->all();
        if($request->hasFile('image')){
            $imageName=time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $input['image']=$imageName;
        }
       $product->update($input);
       return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
       return redirect()->route('product.index');
    }
}
