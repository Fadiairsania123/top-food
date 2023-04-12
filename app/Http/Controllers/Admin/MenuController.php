<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resto;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Menu::with(['resto'])->get();
        return view('admin.menu.index',compact('data'));
    }

    public function menu($id)
    {
        $resto = Resto::find($id);
        $data = Menu::with(['resto'])->where('id_resto',$id)->get();
        return view('admin.menu.resto',compact('data','resto'));
    }
    
    public function menu_create($id)
    {
        $resto = Resto::find($id);
        return view('admin.menu.resto_create',compact('resto'));
        
    }

    public function menu_store(Request $request,$id)
    {
        // Validasi
        $request->validate([
            'makanan' =>  'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'img' => 'required',
            'img.*' => 'mimes:jpeg,jpg,png,gif'
        ]);

        $filename = time() . '.' . $request->img->extension();
        $request->img->move(public_path('menu'), $filename);

        $data = new Menu();
        $data->makanan = $request->makanan;
        $data->id_resto = $id;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;
        $data->image = $filename;
        $data->save();

        return redirect()->route('menu.resto',$id)
                        ->with('success','Resto Berhasil Dibuat');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Resto::all();
        return view('admin.menu.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'id_resto' =>  'required',
            'makanan' =>  'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'img' => 'required',
            'img.*' => 'mimes:jpeg,jpg,png,gif'
        ]);

        $filename = time() . '.' . $request->img->extension();
        $request->img->move(public_path('menu'), $filename);

        $data = new Menu();
        $data->makanan = $request->makanan;
        $data->id_resto = $request->id_resto;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;
        $data->image = $filename;
        $data->save();

        return redirect()->route('menu.index')
                        ->with('success','Menu Berhasil Dibuat');
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
        $data = Menu::find($id);
        return view('admin.menu.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi
        $request->validate([
            'makanan' =>  'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ]);
        $data = Menu::find($id);

        if($request->img != null){
            $filename = time() . '.' . $request->img->extension();
            $request->img->move(public_path('menu'), $filename);
            $data->image = $filename;
        }
        $data->makanan = $request->makanan;
        $data->harga = $request->harga;
        $data->deskripsi = $request->deskripsi;
        $data->update();
        return redirect()->route('menu.resto',$data->id_resto)
                        ->with('success','Resto Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Menu::find($id);
        $id_resto = $data->id_resto;
        $data->delete();
        return redirect()->route('menu.resto',$id_resto)
        ->with('success','Menu Berhasil Dihapus');
    }
}
