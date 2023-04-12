<?php

namespace App\Http\Controllers\Resto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resto;
use App\Models\Menu;
use App\Models\Checkout;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Checkout::join('carts','carts.id_transaction','checkouts.id')
        ->join('users','users.id','checkouts.id_user')
        ->where('carts.status','CHECKOUT')
        ->where('carts.id_transaction','!=',null)
        ->select('checkouts.*','users.name')
        ->groupBy('id')
        ->get();
        return view('resto.pesanan.index',compact('data'));
    }

    public function terima($id)
    {
        $data = Checkout::find($id);
        $data->status = 'DIPROSES';
        $data->save();
        return redirect()->route('pesanan.index');
    }
    
    public function kirim($id)
    {
        $data = Checkout::find($id);
        $data->status = 'DIKIRIM';
        $data->save();
        return redirect()->route('pesanan.index');
    }
    
    public function tolak($id)
    {
        $data = Checkout::find($id);
        $data->status = 'DITOLAK';
        $data->save();
        return redirect()->route('pesanan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
