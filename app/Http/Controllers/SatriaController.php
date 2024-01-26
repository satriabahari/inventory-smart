<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;

class SatriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Dashboard::all();
        return view("index", ["datas" => $datas]);
        // return response()-> json($datas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("mahasiswa.tambah");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Dashboard::create([
        //     "name" => $request->nim,
        //     "email" => $request->nama,
        //     "gender" => $request->kelas,
        //     "des" => $request->des,
        // ]);
        // return redirect("/dashboard");
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
        // $mahasiswa = Dashboard::find($id);
        // return view("mahasiswa.edit", ["mahasiswa" => $mahasiswa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Dashboard::find($id)->update([
        //     "name" => $request->nim,
        //     "email" => $request->nama,
        //     "gender" => $request->kelas,
        //     "des" => $request->des,
        // ]);
        // return redirect("/dashboard");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Dashboard::find($id)->delete();
        // return redirect("/kategori");
    }
}
