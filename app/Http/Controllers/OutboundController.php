<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_Keluar;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Outbound;

class OutboundController extends Controller
{
    public function index()
    {
        // $data = Product_Keluar::with(['product', 'customer'])->get();
        // return view('product_keluar.index', compact('data'));
        $datas = Outbound::orderBy('id', 'asc');

        if (request()->has("search")) {
            $datas = $datas->where("name", "like", "%" . request()->get("search") . "%")->paginate(10);
        } else {
            if ($datas->count() > 10) {
                $datas = $datas->paginate(9);;
            } else {
                $datas = $datas->get();
            }
        }

        return view("outbound.index", ["datas" => $datas]);
    }

    public function create()
    {
        $products = Product::all();
        $customers = Customer::all();
        return view('outbound.create', [
            'products' => $products,
            'customers' => $customers
        ]);
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'product_id' => 'required',
        //     'customer_id' => 'required',
        //     'stock' => 'required|numeric',
        //     'tanggal' => 'required|date',
        // ]);

        // Validasi stok mencukupi
        $product = Product::find($request->product_id);

        if (!$product || $request->stock > $product->stock) {
            return redirect()->route('outbound.create')->with('error', 'Stock tidak mencukupi.');
        }

        // Jika stok mencukupi, simpan data produk keluar
        Outbound::create([
            'product_id' => $request->product_id,
            'customer_id' => $request->customer_id,
            'stock' => $request->stock,
            'date' => $request->date
        ]);

        // Kurangi stok produk
        $product->update([
            'stock' => $product->stock - $request->stock,
        ]);

        return redirect('/outbound');
    }

    public function edit($id)
    {
        $data = Outbound::find($id);
        $products = Product::all();
        $customers = Customer::all();

        return view('outbound.edit', [
            'data' => $data,
            'products' => $products,
            'customers' => $customers
        ]);
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'product_id' => 'required',
        //     'customer_id' => 'required',
        //     'stock' => 'required|numeric|min:1',
        //     'tanggal' => 'required|date',
        // ]);

        $data = Outbound::find($id);

        // Update stok di tabel 'products'
        $product = Product::find($data->product_id);
        if ($product) {
            // Tambahkan stok yang lama kembali
            $product->stock += $data->stock;

            // Validasi stok mencukupi
            if ($request->stock > $product->stock) {
                return redirect()->route('outbound.edit', $id)->with('error', 'Stock tidak mencukupi.');
            }

            // Kurangkan stok yang baru
            $product->stock -= $request->stock;
            $product->save();
        }

        $data->update([
            'product_id' => $request->product_id,
            'customer_id' => $request->customer_id,
            'stock' => $request->stock,
            'date' => $request->date
        ]);

        return redirect('/outbound');
    }

    public function destroy($id)
    {
        $data = Outbound::find($id);

        // Tambahkan stok yang lama kembali
        $product = Product::find($data->product_id);
        if ($product) {
            $product->stock += $data->stock;
            $product->save();
        }

        $data->delete();

        return redirect('/outbound');
    }
}
