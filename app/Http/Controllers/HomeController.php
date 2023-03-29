<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resto;
use App\Models\Menu;
use App\Models\Cart;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $data = Resto::all();
        return view("home",compact('data')); 
    }
    
    public function detail($id)
    {
        $data = Resto::with(['menu'])
        ->where('id',$id)->first();
        return view("detail",compact('data')); 
    }

    public function addToCart(Request $request)
    {
        if(!Auth::check())
        {
            return response()->json(['login'=>'Silahkan login terlebih dahulu.']);
        }
    
        $data = Cart::updateOrCreate([
            'id_user' => Auth::user()->id,
            'id_menu' => $request->id_menu,
            'status' => 'CART'
            ],
            ['qty' => 1]
        );
        return response()->json(['success'=>'Sukses memasukan ke keranjang.']);
        
    }

    public function cart()
    {
        $data = Cart::with(['menu'])
        ->where('id_user',Auth::user()->id)
        ->where('status','CART')
        ->get();
        return view("cart",compact('data')); 
    }
    
    public function cart_destroy($id)
    {
        $data = Cart::find($id);
        $data->delete();
        return redirect()->route('cart'); 
    }

    public function cart_edit(Request $request)
    {
        $qty = $request->qty;
        $data = Cart::find($request->id);
        $data->qty = $qty;
        $data->save();
        return response()->json(['success'=>'Sukses memasukan ke keranjang.']);
    }
    
    public function checkout()
    {
        $data = Cart::with(['menu'])
        ->where('id_user',Auth::user()->id)
        ->where('status','CART')
        ->get();
        return view("checkout",compact('data')); 
    }

    public function checkout_submit(Request $request)
    {
        if($request->alamat == null){
            return redirect()->route('checkout'); 
        }
        $data = new Checkout();
        $data->id_user = Auth::user()->id;
        $data->pembayaran = $request->pembayaran;
        $data->alamat = $request->alamat;
        $data->save();

        $cart = Cart::where('id_user',Auth::user()->id)->where('status','CART');
        $cart->update(['status' => 'CHECKOUT','id_transaction' => $data->id]);
        return redirect()->route('pembayaran')->with('total', $request->total);

    }
    
    public function pembayaran()
    {
        $data = Cart::with(['menu'])->where('id_user',Auth::user()->id)->get();
        return view("pembayaran",compact('data')); 
    }

    public function selesai()
    {
        $data = Checkout::orderBy('id','DESC')->first();
        $data->status = 'CHECKOUT';
        $data->save();
        return redirect()->route('transaction'); 
    }

    public function transaction()
    {
        $data = Checkout::where('id_user',Auth::user()->id)
        ->get();
        return view("transaction",compact('data')); 
    }
    
    public function transaction_detail($id)
    {
        $data = Cart::with(['menu'])->where('id_transaction',$id)->get();
        return view("transaction_detail",compact('data')); 
    }
}
