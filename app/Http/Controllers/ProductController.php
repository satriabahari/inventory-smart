<?php

namespace App\Http\Controllers;

use App\Charts\ProductsChart;
use App\Charts\StatsChart;
use App\Http\Controllers\Controller;
use App\Models\Cattegory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*$datas = Product::orderBy('id', 'asc');

        if(request()->has("search")){
            $datas = $datas->where("name", "like", "%" . request()->get("search") . "%")->paginate(10);
        } else {
            if($datas->count() > 10) {
                $datas = $datas->paginate(9);;
            } else {
                $datas = $datas->get();
            }
        }*/
        $datas = Product::with('cattegory')->get();
        return view('product.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $categories = Cattegory::all();
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cattegory_id' => 'required|exists:cattegories,id',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        Product::create($request->all());

        return redirect()->route('product.index')->with('success', 'Product created successfully');
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
        $data = Product::findOrFail($id);
        $cattegories = Cattegory::all();
        
        return view('product.edit', compact('data', 'cattegories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Product::findOrFail($id);
        

        $request->validate([
            'cattegory_id' => 'required|exists:cattegories,id',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
        ]);

        $data->update($request->all());

        DB::listen(function ($query) {
            dump($query->sql, $query->bindings);
        });

        return redirect()->route('product.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return redirect("/product");
    }
}
