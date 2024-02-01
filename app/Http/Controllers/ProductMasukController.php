<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_Masuk;
use App\Models\Product;
use App\Models\Supplier;

class ProductMasukController extends Controller
{
    public function index()
    {
        $data = Product_Masuk::with(['product', 'supplier'])->get();
        return view('product_masuk.index', compact('data'));
    }

    public function create()
    {
        $products = Product::all();
        $suppliers = Supplier::all();
        return view('product_masuk.create', compact('products', 'suppliers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'supplier_id' => 'required',
            'stock' => 'required|numeric',
            'tanggal' => 'required|date',
        ]);

        Product_Masuk::create($request->all());

        $product = Product::find($request->product_id);
        if ($product) {
            $product->stock += $request->stock;
            $product->save();
        }

        return redirect()->route('product_masuk.index')->with('success', 'Product Masuk added successfully');
    }

    public function edit($id)
    {
        $entry = Product_Masuk::findOrFail($id);
        $products = Product::all();
        $suppliers = Supplier::all();

        return view('product_masuk.edit', compact('entry', 'products', 'suppliers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_id' => 'required',
            'supplier_id' => 'required',
            'stock' => 'required|numeric',
            'tanggal' => 'required|date',
        ]);
    
        $entry = Product_Masuk::findOrFail($id);
    
        // Hitung perbedaan stok sebelum pembaruan
        $stockDifferenceBeforeUpdate = $entry->getOriginal('stock');
    
        $entry->update($request->all());
    
        // Hitung perbedaan stok setelah pembaruan
        $stockDifferenceAfterUpdate = $request->stock - $stockDifferenceBeforeUpdate;
    
        // Perbarui jumlah stok di tabel 'products'
        $product = Product::find($request->product_id);
        if ($product) {
            $product->stock += $stockDifferenceAfterUpdate;
            $product->save();
        }
    
        return redirect()->route('product_masuk.index')->with('success', 'Product Masuk updated successfully');
    }

    public function destroy($id)
    {
        $entry = Product_Masuk::findOrFail($id);

    // Ambil nilai stok sebelum entri dihapus
    $stockBeforeDelete = $entry->stock;

    // Hapus entri dari product_masuk
    $entry->delete();

    // Perbarui jumlah stok di tabel 'products'
    $product = Product::find($entry->product_id);
    if ($product) {
        $product->stock -= $stockBeforeDelete;
        $product->save();
    }

    return redirect()->route('product_masuk.index')->with('success', 'Product Masuk deleted successfully');
    }
}