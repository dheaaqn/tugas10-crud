<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
    	$data_produk = \App\Produk::all();
    	return view('siswa.index', ['data_produk' => $data_produk]);
    }

    public function create(Request $request)
    {
    	\App\Produk::create($request->all());
    	return redirect('/produk')->with('success', 'Data Submitted');
    }

    public function edit($id)
    {
    	$produk = \App\Produk::find($id);
    	return view('siswa/edit', ['produk' => $produk]);
    }

    public function update(Request $request, $id)
    {
    	$produk = \App\Produk::find($id);
    	$produk->update($request->all());
    	return redirect('/produk')->with('success', 'Data Updated');
    }

    public function delete($id)
    {
    	$produk = \App\Produk::find($id);
    	$produk->delete($produk);
    	return redirect('/produk')->with('success', 'Data Deleted Succesfully');
    }
}
