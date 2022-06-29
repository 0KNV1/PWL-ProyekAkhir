<?php

namespace App\Http\Controllers;

use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Cart $cart)
    {
        // dd($request);
        $total = 0;
        
        
        $carts = Cart::query()
            ->with('produk')
            ->whereBelongsTo($request->user())
            ->get();
            $quantity=(clone $carts)->sum('quantity');
          
           
            foreach ($carts as $cart) {
                $items[] = array(
                    'price' => $cart->produk->price,
                    'quantity' => $cart->quantity,         
                );
                $total += ($cart->produk->price * $cart->quantity);
            }
           
         
        return view('cart.cart',['carts'=>CartResource::collection($carts),
        'quantity'=>$quantity,'total'=>$total]);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Produk $produk,Cart $cart)
    {
        Cart::create([
            'produk_id' => $produk->id,
            'user_id' => auth()->id(),
            'quantity' => $request->quantity
        ]);

        return to_route('cart.index')->with('success', 'Berhasil menambah item ke dalam keranjang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();
        return to_route('cart.index')->with('success', 'Berhasil menghapus item di keranjang');
    }
}
