<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdukRequest;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:produk.index')->only('index');
        $this->middleware('permission:produk.create')->only('create', 'store');
        $this->middleware('permission:produk.edit')->only('edit', 'update');
        $this->middleware('permission:produk.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produks = DB::table('produk')
        ->when($request->input('name'),function($query, $name){
            return $query->where('name','like','%',$name, '%');
        })
        ->paginate(10);
        return view('produk.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdukRequest $request)
    {
        $image = uniqid().'.'.$request->file('image')->extension();
        $request -> file('image')->move(public_path('assets/img/'),$image);

        $background = uniqid().'.'.$request->file('background')->extension();
        $request -> file('background')->move(public_path('assets/img/'),$background);

        Produk::create([
            'name' => $request['name'],
            'price' => $request['price'],
            'image' => $image,
            'background' => $background,
            'stok' => $request['stok'],
            'desc' => $request['desc'],
        ]);
        return redirect()->route('produk.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        return view('produk.edit',compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProdukRequest $request, Produk $produk)
    {

        $image = uniqid().'.'.$request->file('image')->extension();
        $request -> file('image')->move(public_path('assets/img/'),$image);

        $background = uniqid().'.'.$request->file('background')->extension();
        $request -> file('background')->move(public_path('assets/img/'),$background);


        $produk->update([
            'name' => $request['name'],
            'price' => $request['price'],
            'image' => $image,
            'background' => $background,
            'stok' => $request['stok'],
            'desc' => $request['desc'],
        ]);

        return redirect()->route('produk.index')->with('success', 'Data Berhasil Diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        $produk ->delete();
        return redirect()->route('produk.index')->with('success', 'Data Berhasil Dihapus');
    }
}
