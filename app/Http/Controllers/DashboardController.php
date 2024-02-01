<?php

namespace App\Http\Controllers;

use App\Charts\ProductsChart;
use App\Charts\StatsChart;
use App\Http\Controllers\Controller;
use App\Models\Cattegory;
use App\Models\Customer;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(ProductsChart $productChart, StatsChart $statsChart)
    {
        $cattegories = Cattegory::all();
        $products = Product::all();
        $customers = Customer::all();
        $users = User::all();
        return view('dashboard', [
            "productChart" => $productChart->build(),
            "statsChart" => $statsChart->build(),
            "cattegories" => $cattegories,
            "products" => $products,
            "customers" => $customers,
            "users" => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
