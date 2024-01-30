<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cattegory;
use Illuminate\Http\Request;

class CattegoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Cattegory::orderBy('id', 'asc');

        if(request()->has("search")){
            $datas = $datas->where("name", "like", "%" . request()->get("search") . "%")->paginate(5);
        } else {
            if($datas->count() > 5) {
                $datas = $datas->paginate(4);;
            } else {
                $datas = $datas->get();
            }
        }

        return view("cattegory.index", ["datas" => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("cattegory.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cattegory::create([
            "name" => $request->name
        ]);
        return redirect("/cattegory");
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
        $data = Cattegory::find($id);
        return view("cattegory.edit", ["data" => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Cattegory::find($id)->update([
            "name" => $request->name
        ]);
        return redirect("/cattegory");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cattegory::find($id)->delete();
        return redirect("/cattegory");
    }
}
