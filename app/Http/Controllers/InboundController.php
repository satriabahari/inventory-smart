<?php

namespace App\Http\Controllers;

use App\Models\Inbound;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Supplier;

class InboundController extends Controller
{
    public function index()
    {
        // $data = Product_Masuk::with(['product', 'supplier'])->get();
        // return view('product_masuk.index', compact('data'));
        $datas = Inbound::with(['product', 'supplier'])->orderBy('id', 'asc');

        if (request()->has("search")) {
            $datas = $datas->where("name", "like", "%" . request()->get("search") . "%")->paginate(10);
        } else {
            if ($datas->count() > 10) {
                $datas = $datas->paginate(9);;
            } else {
                $datas = $datas->get();
            }
        }
        // $datas = Product::with('cattegory')::orderBy('id', 'asc')->get();
        return view('inbound.index', ["datas" => $datas]);
    }

    public function create()
    {
        $products = Product::all();
        $suppliers = Supplier::all();
        // return view('product_masuk.create', compact('products', 'suppliers'));
        return view("inbound.create", [
            "products" => $products,
            "suppliers" => $suppliers
        ]);
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'product_id' => 'required',
        //     'supplier_id' => 'required',
        //     'stock' => 'required|numeric',
        //     'tanggal' => 'required|date',
        // ]);

        Inbound::create([
            'product_id' => $request->product_id,
            'supplier_id' => $request->supplier_id,
            'stock' => $request->stock,
            'date' => $request->date
        ]);

        $product = Product::find($request->product_id);
        if ($product) {
            $product->stock += $request->stock;
            $product->save();
        }

        return redirect('/inbound');
    }

    public function edit($id)
    {
        $data = Inbound::find($id);
        $products = Product::all();
        $suppliers = Supplier::all();

        return view('inbound.edit', [
            'data' => $data,
            'products' => $products,
            'suppliers' => $suppliers
        ]);
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'product_id' => 'required',
        //     'supplier_id' => 'required',
        //     'stock' => 'required|numeric',
        //     'tanggal' => 'required|date',
        // ]);

        $data = Inbound::find($id);

        // Hitung perbedaan stok sebelum pembaruan
        $stockDifferenceBeforeUpdate = $data->getOriginal('stock');

        $data->update([
            'product_id' => $request->product_id,
            'supplier_id' => $request->supplier_id,
            'stock' => $request->stock,
            'date' => $request->date
        ]);

        // Hitung perbedaan stok setelah pembaruan
        $stockDifferenceAfterUpdate = $request->stock - $stockDifferenceBeforeUpdate;

        // Perbarui jumlah stok di tabel 'products'
        $product = Product::find($request->product_id);
        if ($product) {
            $product->stock += $stockDifferenceAfterUpdate;
            $product->save();
        }

        return redirect('/inbound');
    }

    public function destroy($id)
    {
        $data = Inbound::find($id);

        // Ambil nilai stok sebelum entri dihapus
        $stockBeforeDelete = $data->stock;

        // Hapus entri dari product_masuk
        $data->delete();

        // Perbarui jumlah stok di tabel 'products'
        $product = Product::find($data->product_id);
        if ($product) {
            $product->stock -= $stockBeforeDelete;
            $product->save();
        }

        return redirect('/inbound');
    }
}
