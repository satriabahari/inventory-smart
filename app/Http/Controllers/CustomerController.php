<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Customer::orderBy('id', 'asc');

        if(request()->has("search")){
            $datas = $datas->where("name", "like", "%" . request()->get("search") . "%")->paginate(10);
        } else {
            if($datas->count() > 10) {
                $datas = $datas->paginate(9);;
            } else {
                $datas = $datas->get();
            }
        }
        return view('customer.index', ["datas" => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'address' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        // ]);

        Customer::create([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect('/customer');
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
        $data = Customer::find($id);
        return view('customer.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'address' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        // ]);

        Customer::find($id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect('/customer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Customer::find($id)->delete();
        return redirect('/customer');
    }
}
