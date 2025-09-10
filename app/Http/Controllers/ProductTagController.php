<?php

namespace App\Http\Controllers;

use App\Models\ProductTag;
use Illuminate\Http\Request;

class ProductTagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data=ProductTag::get();
        return view('productTag.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('productTag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ProductTag::create($request->all());
       return redirect()->route('productTag.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductTag $productTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductTag $productTag)
    {
       return view('productTag.edit',compact('productTag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductTag $productTag)
    {
        $productTag->update($request->all());
       return redirect()->route('productTag.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductTag $productTag)
    {
        $productTag->delete();
       return redirect()->route('productTag.index');
    }
}
