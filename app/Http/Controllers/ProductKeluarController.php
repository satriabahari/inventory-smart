<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_Keluar;
use App\Models\Product;
use App\Models\Customer;

class ProductKeluarController extends Controller
{
    public function index()
    {
        $data = Product_Keluar::with(['product', 'customer'])->get();
        return view('product_keluar.index', compact('data'));
    }

    public function create()
    {
        $products = Product::all();
        $customers = Customer::all();
        return view('product_keluar.create', compact('products', 'customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'customer_id' => 'required',
            'stock' => 'required|numeric',
            'tanggal' => 'required|date',
        ]);

        // Validasi stok mencukupi
        $product = Product::find($request->product_id);

        if (!$product || $request->stock > $product->stock) {
            return redirect()->route('product_keluar.create')->with('error', 'Stock tidak mencukupi.');
        }

        // Jika stok mencukupi, simpan data produk keluar
        $entry = Product_Keluar::create($request->all());

        // Kurangi stok produk
        $product->update([
            'stock' => $product->stock - $request->stock,
        ]);

        return redirect()->route('product_keluar.index')->with('success', 'Product Keluar created successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_id' => 'required',
            'customer_id' => 'required',
            'stock' => 'required|numeric|min:1',
            'tanggal' => 'required|date',
        ]);
    
        $entry = Product_Keluar::findOrFail($id);
    
        // Update stok di tabel 'products'
        $product = Product::find($entry->product_id);
        if ($product) {
            // Tambahkan stok yang lama kembali
            $product->stock += $entry->stock;
    
            // Validasi stok mencukupi
            if ($request->stock > $product->stock) {
                return redirect()->route('product_keluar.edit', $id)->with('error', 'Stock tidak mencukupi.');
            }
    
            // Kurangkan stok yang baru
            $product->stock -= $request->stock;
            $product->save();
        }
    
        $entry->update($request->all());
    
        return redirect()->route('product_keluar.index')->with('success', 'Product Keluar updated successfully');
    }

    public function destroy($id)
    {
        $entry = Product_Keluar::findOrFail($id);

        // Tambahkan stok yang lama kembali
        $product = Product::find($entry->product_id);
        if ($product) {
            $product->stock += $entry->stock;
            $product->save();
        }

        $entry->delete();

        return redirect()->route('product_keluar.index')->with('success', 'Product Keluar deleted successfully');
    }
}
