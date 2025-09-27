<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;

use Illuminate\Http\Request;

class OrderItemController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data=OrderItem::get();
        return view('orderItem.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('orderItem.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        OrderItem::create($request->all());
       return redirect()->route('orderItem.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderItem $orderItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderItem $orderItem)
    {
       return view('orderItem.edit',compact('orderItem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderItem $orderItem)
    {
        $orderItem->update($request->all());
       return redirect()->route('orderItem.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderItem $orderItem)
    {
        $orderItem->delete();
       return redirect()->route('orderItem.index');
    }
}
