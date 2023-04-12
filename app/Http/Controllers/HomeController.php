<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resto;
use App\Models\Menu;
use App\Models\User;
use App\Models\Cart;
use App\Models\Checkout;
use App\Models\Review;
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
        $rating = Review::with(['menu','user'])
        ->whereHas('menu', function ($query) use ($id) {
            return $query->where('id_resto', '=', $id);
        })->get();
        return view("detail",compact('data','rating')); 
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

        $carrt = Cart::where('id_transaction', $data->id)->get();
        foreach($carrt as $car){
            $rev = new Review();
            $rev->id_user = Auth::user()->id;
            $rev->id_menu = $car->id_menu;
            $rev->value = '';
            $rev->ulasan = '';
            $rev->id_transaction = $data->id;
            $rev->save();
        }
        
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
        $data = Checkout::where('checkouts.id_user',Auth::user()->id)
        ->leftjoin('carts','carts.id_transaction','checkouts.id')
        ->leftjoin('reviews','reviews.id_transaction','checkouts.id')
        ->select('checkouts.*','reviews.value')
        ->groupBy('checkouts.id')
        ->get();
        // dd($data);
        return view("transaction",compact('data')); 
    }
    
    public function transaction_detail($id)
    {
        $data = Cart::with(['menu'])->where('id_transaction',$id)->get();
        return view("transaction_detail",compact('data')); 
    }

    public function addRating($id)
    {
        $data = Cart::with(['menu','menu.rating'])->where('id_transaction',$id)->get();
        return view("rating",compact('data')); 
    }

    public function editRating(Request $request)
    {
        $validated = $request->validate([
            // 'id_user' => 'required',
            'ulasan' => 'required',
            // 'value' => 'required'
        ]);
        $ulasanArray = $request->ulasan;
        $no=0;
        foreach($ulasanArray as $ulasan){
            $starRating = $request->input('star_rating_' . $request->input('id')[$no]);
            $data = Review::updateOrCreate(
                [
                    'id_menu' => $request->id[$no],
                    'id_transaction' => $request->id_transaction[$no]
                ],
                [
                    'value' => $starRating,
                    'ulasan' => $ulasan
                ]
            );

            $no++;
        }
    
        
    
        //return response()->json(['success' => $data['id_user']]);
        return redirect()->route('transaction');
    }
    
    // public function saveText(Request $request)
    // {
    //     $validated = $request->validate([
    //         'id_user' => Auth::user()->id,
    //         // 'id_menu' => $request->id,
    //         'ulasan' => 'required',
            
    //     ]);
        
    //     $ulasan = Review::updateOrCreate(
            
    //         ['id_user' => Auth::user()->id,
    //         'id_menu' => $request->id,
    //         ],
    //         ['value' => $request->val ,'ulasan' => $validated['ulasan']]
    //     );

    //     return redirect()->back()->with('success', 'Ulasan berhasil disimpan!');
    // }

    //PESANAN DITERIMA
    public function diterima($id)
    {
        $data = Checkout::find($id);
        $data->status = 'SELESAI';
        $data->save();
        return redirect()->route('transaction');
    }
}
