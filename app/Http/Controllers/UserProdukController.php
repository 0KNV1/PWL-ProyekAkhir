<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProdukController extends Controller
{

    public function index(Request $request){
        $produks = Produk::all();
        // ->select('name','image','background','desc');
        // dd($produks);
        return view('user-template.index ',compact('produks'));
    }
    public function produk(Request $request){
        $produks = Produk::all();
        // ->select('name','image','background','desc');
        // dd($produks);
        return view('produk-template.produk',compact('produks'));
    }
}
