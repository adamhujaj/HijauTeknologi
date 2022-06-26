<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class controller_Crud extends Controller
{
    public function index()
    {
       
        // mengambil data dari table pegawai
    	$product = DB::table('products')->get();
 
    	// mengirim data pegawai ke view index
    	return view('crud',['products' => $product]);
    }
    
    public function tambah()
    {
 
	    // memanggil view tambah
	    return view('tambah');
 
    }
    public function store(Request $request)
    {
	// insert data ke table pegawai
	    DB::table('products')->insert([
		'id' => $request->id,
		'namabarang' => $request->namabarang,
		'hargabarang' => $request->hargabarang
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/crud');
    }
    // method untuk edit data pegawai
    public function edit($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$product = DB::table('products')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit',['products' => $product]);
 
    }
    public function update(Request $request)
    {
	// update data pegawai
	DB::table('products')->where('id',$request->id)->update([
		'namabarang' => $request->namabarang,
		'hargabarang' => $request->hargabarang,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/crud');
    }
    // method untuk hapus data pegawai
    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('products')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/crud');
    }
    




}
