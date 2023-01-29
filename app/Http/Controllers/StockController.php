<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::all();
     
        return view('stocks.index', compact('stocks')); // -> resources/views/stocks/index.blade.php 
    }

public function create()
{
    return view('stocks.create'); // -> resources/views/stocks/create.blade.php
}
public function store(Request $request)
{
    // Validation for required fields (and using some regex to validate our numeric value)
    $request->validate([
        'stock_name'=>'required',
        'ticket'=>'required',
        'value'=>'required|max:10|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/'
    ]); 
    // Getting values from the blade template form
    $stock = new Stock([
        'stock_name' => $request->get('stock_name'),
        'ticket' => $request->get('ticket'),
        'value' => $request->get('value')
    ]);
    $stock->save();
    return redirect('/stocks')->with('success', 'Stock saved.');   // -> resources/views/stocks/index.blade.php
}
    public function edit($id)
    {
        $stock = Stock::find($id);
        return view('stocks.edit')->with('stock', $stock);
    }
    
    

    public function update(Request $request, $id)
    {
        $stock = Stock::find($id);
        $stock->stock_name = $request->input('stock_name');
        $stock->ticket = $request->input('ticket');
        $stock->value = $request->input('value');
        $stock->save();
        return redirect('/stocks')->with('success', 'Stock updated');
    }
    

    public function destroy($id)
    {
        Stock::destroy($id);
        return redirect('/stocks');
    }
}