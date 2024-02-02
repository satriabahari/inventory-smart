<?php

namespace App\Http\Controllers;

use App\Charts\ProductsChart;
use App\Charts\StatsChart;
use App\Http\Controllers\Controller;
use App\Models\Category;
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
        $datas = Product::with('category')->orderBy('id', 'asc');

        if(request()->has("search")){
            $datas = $datas->where("name", "like", "%" . request()->get("search") . "%")->paginate(10);
        } else {
            if($datas->count() > 10) {
                $datas = $datas->paginate(9);;
            } else {
                $datas = $datas->get();
            }
        }
        // $datas = Product::with('cattegory')::orderBy('id', 'asc')->get();
        return view('product.index', ["datas" => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $categories = Category::all();
        return view('product.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //    'category_id' => 'required|exists:categories,id',
        //     'name' => 'required',
        //     'description' => 'required',
        //     'price' => 'required',
        //     'stock' => 'required',
         //]);

        Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        return redirect('/product');
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
        $data = Product::find($id);
        $cattegories = Category::all();
        
        return view('product.edit', [
            'data' => $data,
            'cattegories' => $cattegories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $data = Product::findOrFail($id);
        

        // $request->validate([
        //     'cattegory_id' => 'required|exists:cattegories,id',
        //     'name' => 'required',
        //     'description' => 'required',
        //     'price' => 'required|numeric',
        //     'stock' => 'required|numeric',
        // ]);

        // $data->update($request->all());

        Product::find($id)->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        // DB::listen(function ($query) {
        //     dump($query->sql, $query->bindings);
        // });

        return redirect('/product');
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
