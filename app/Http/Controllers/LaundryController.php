<?php

namespace App\Http\Controllers;

// import model Laundry nya
use App\Laundry;

use Illuminate\Http\Request;

class LaundryController extends Controller
{
    //

    public function index(){
     // ambil semua data dari dtabase model Laundry
    	$laundry = Laundry::all();

    	// sortir data DESCENDING
        $sorted = $laundry->sortByDesc('id');
        $laundry = $sorted;

    	return view('laundry.index',compact('laundry'));
    }


    // nama methodnya create
    public function create()
    {
        return view('laundry.create'); //file nya create.blade.php ada di folder laundry
    }


    // nama methodnya store buat input data
    public function store( Request $request)
    {
       //dd($request);
        $laundry =  new Laundry;
        $laundry->nama = $request->nama;
        $laundry->notelpon = $request->notelpon;
          $laundry->alamat = $request->alamat;
          $laundry->berat = $request->berat;
          $laundry->perkg = $request->perkg;
          $laundry->totalbayar = $request->totalbayar;
              

        $laundry->save();
        

        // setelah data disimpan, kembalikan lagi ke view
        return redirect('laundry')->with(['success' => 'Data baru  Berhasil Disimpan']);

    }



    // funntion edit
    public function edit($id) {
        $laundry = Laundry ::where('id', $id)->first();
        
        // oper data nay dengan compact
        return view('laundry.edit', compact('laundry')); //ada di folder laundry nama file nya edit.balde.php
    }


    // buat controller update
    public function update(Request $request, $id) {
       $laundry = Laundry ::where('id', $id)->first();

       $laundry->nama = $request->nama;
        $laundry->notelpon = $request->notelpon;
          $laundry->alamat = $request->alamat;
          $laundry->berat = $request->berat;
          $laundry->perkg = $request->perkg;
          $laundry->totalbayar = $request->totalbayar;

       $laundry->update(); //lalu update

        // lalu redirect lagi
       return redirect('laundry')->with(['success' => 'Data   Berhasil Diupdate']);
    }


    // controller hapus
    public function hapus ($id) {
        // ambil data yang id nya $id
       $laundry = Laundry::where('id', $id)->first();
       
       // lalu hapus
       $laundry->delete();

       // lalu redirect lagi
       return redirect('laundry')->with(['success' => 'Data   Berhasil Dihapus']);
    }


    // controller cetak perdata laundry
    public function perdata($id){

     // $siswas = Siswa::get($id); 
       $laundry = Laundry ::where('id', $id)->get();
      //dd($siswas);
      return view('laundry.cetak-perdata-laundry',compact('laundry'));
    }



    // cari
    public function search(Request $request){
       $query = $request->get('searchlaundry');
     

        if($request->ajax()){

                $laundry= Laundry::where('nama','LIKE','%'.$request->searchlaundry."%")->get();
                
                // desc 
                $sorted = $laundry->sortByDesc('id');
                $laundry = $sorted;

                 return view('laundry.result', compact('laundry', 'query'));

                           }
                   }
}
