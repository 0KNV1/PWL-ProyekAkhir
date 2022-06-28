<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProdukController extends Controller
{

    public function index(Request $request){
        $produks = Produk::all();
        // ->select('name','image','background','desc');
        // dd($produks);
        return view('user-template.index ',compact('produks'));
        // return auth()->user()->hasRole('super-admin')?view('home', ['users' => User::get(),])
        // :(auth()->user()->hasRole('user')?view ('user-template.index', compact('produks')):back()) ;
    }
    public function produk(Request $request){
        $produks = Produk::all();
        // ->select('name','image','background','desc');
        // dd($produks);
        return view('produk-template.produk',compact('produks'));
    }
}
