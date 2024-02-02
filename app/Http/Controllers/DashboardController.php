<?php

namespace App\Http\Controllers;

use App\Charts\DonutChart;
use App\Charts\PolarAreaChart;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Inbound;
use App\Models\Outbound;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(DonutChart $donutChart, PolarAreaChart $polarAreaChart)
    {
        $categories = Category::all();
        $products = Product::all();
        $customers = Customer::all();
        $suppliers = Supplier::all();
        $inbounds = Inbound::all();
        $outbounds = Outbound::all();
        return view('dashboard', [
            "donutChart" => $donutChart->build(),
            "polarAreaChart" => $polarAreaChart->build(),
            "categories" => $categories,
            "products" => $products,
            "customers" => $customers,
            "suppliers" => $suppliers,
            "inbounds" => $inbounds,
            "outbounds" => $outbounds
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
