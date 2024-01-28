<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Stock::all();
        // $datas = Stock::orderBy('id', 'asc');

        // if(request()->has("search")){
        //     $datasSearch = $datas->where("name", "like", "%" . request()->get("search") . "%")->get();
        // } else {
        //     $datasSearch = $datas->get();
        // }

        return view("product.index", ["datas" => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("product.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Stock::create([
            "name" => $request->name,
            "description" => $request->description,
            "stock" => $request->stock,
        ]);
        return redirect("/stock");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Stock::find($id);
        return view("product.edit", ["data" => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Stock::find($id)->update([
            "name" => $request->name,
            "description" => $request->description,
            "stock" => $request->stock,
        ]);
        return redirect("/stock");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Stock::find($id)->delete();
        return redirect("/stock");
    }
}
