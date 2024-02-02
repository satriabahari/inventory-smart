<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        // $datas = Supplier::all();
        // return view('supplier.index', compact('datas'));

        $datas = Supplier::orderBy('id', 'asc');

        if(request()->has("search")){
            $datas = $datas->where("name", "like", "%" . request()->get("search") . "%")->paginate(10);
        } else {
            if($datas->count() > 10) {
                $datas = $datas->paginate(9);;
            } else {
                $datas = $datas->get();
            }
        }
        return view('supplier.index', ["datas" => $datas]);
    }

    public function create()
    {
        return view('supplier.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'address' => 'required|string',
        //     'email' => 'required|email|unique:suppliers,email',
        //     'phone' => 'required|string',
        // ]);

        // Simpan data Supplier
        Supplier::create([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect('/supplier');
    }

    public function edit(string $id)
    {
        $data = Supplier::find($id);
        return view('supplier.edit', ['data' => $data]);
    }

    public function update(Request $request, string $id)
    {
        // Validasi input
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'address' => 'required|string',
        //     'email' => 'required|email|unique:suppliers,email,' . $supplier->id,
        //     'phone' => 'required|string',
        // ]);

        // Update data Supplier
        Supplier::find($id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect('/supplier');
    }

    public function destroy(string $id)
    {
        Supplier::find($id)->delete();
        return redirect('/supplier');
    }
}
