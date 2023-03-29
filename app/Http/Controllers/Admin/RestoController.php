<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resto;
use App\Models\Menu;

class RestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Resto::all();
        return view('admin.resto.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.resto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'nama' =>  'required',
            'deskripsi' => 'required',
            'img' => 'required',
            'img.*' => 'mimes:jpeg,jpg,png,gif'
        ]);

        $filename = time() . '.' . $request->img->extension();
        $request->img->move(public_path('resto'), $filename);

        $data = new Resto();
        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;
        $data->image = $filename;
        $data->save();

        return redirect()->route('resto.index')
                        ->with('success','Resto Berhasil Dibuat');
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
        $data = Resto::find($id);
        return view('admin.resto.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi
        $request->validate([
            'nama' =>  'required',
            'deskripsi' => 'required'
        ]);
        $data = Resto::find($id);

        if($request->img != null){
            $filename = time() . '.' . $request->img->extension();
            $request->img->move(public_path('resto'), $filename);
            $data->image = $filename;
        }
        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;
        $data->update();
        return redirect()->route('resto.index')
                        ->with('success','Resto Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Resto::find($id);
        $data->delete();
        return redirect()->route('resto.index')
        ->with('success','Resto Berhasil Dihapus');
    }
}
