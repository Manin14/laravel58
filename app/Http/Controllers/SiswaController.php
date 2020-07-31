<?php

namespace App\Http\Controllers;

// ini adalah model Siswa
use App\Siswa; //koneksikan ke app\Siswa , nama namespace nya App

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    
    // agar admin harus masuk dlu, klo mau ke data siswa
     public function __construct()
    {
        $this->middleware('auth');
    }


    // nama methodnya create
    public function create()
    {
        return view('siswa.create'); //file nya create.blade.php ada di folder siswa
    }

    // nama methodnya store buat input data
    public function store( Request $request)
    {
       //dd($request);
    	$siswa =  new Siswa;
    	$siswa->nama = $request->nama;
    	$siswa->nim = $request->nim;
    	$siswa->save();
        

        // setelah data disimpan, kembalikan lagi ke view
        return redirect('siswa')->with(['success' => 'Data Siswa  Berhasil Disimpan']);

    }

    // buat method index, untuk controller menampilkan data
    public function index() {

        // cek dengan
        //dd('masuk bo');

        //ambil data dari model Siswa
        $siswas = Siswa::all();
        
        // tampilakn di view siswa dengan nama file index.blade.php, di compact
        return view('siswa.index',compact('siswas'));
    }


    // controller hapus
    public function hapus ($id) {
        // ambil data yang id nya $id
       $siswa = Siswa::where('id', $id)->first();
       
       // lalu hapus
       $siswa->delete();

       // lalu redirect lagi
       return redirect('siswa')->with(['success' => 'Data Siswa  Berhasil Dihapus']);
    }

    // funntion edit
    public function edit($id) {
        $siswa = Siswa ::where('id', $id)->first();
        
        // oper data nay dengan compact
        return view('siswa.edit', compact('siswa')); //ada di folder siswa nama file nya edit.balde.php
    }


    // buat controller update
    public function update(Request $request, $id) {
       $siswa = Siswa ::where('id', $id)->first();

       $siswa->nama = $request->nama; //nama lama akan didisi nama baru
       $siswa->nim = $request->nim; //nim  lama akan diganti nim baru
       $siswa->update(); //lalu update

        // lalu redirect lagi
       return redirect('siswa')->with(['success' => 'Data Siswa  Berhasil Diupdate']);
    }
}
