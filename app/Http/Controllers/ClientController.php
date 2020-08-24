<?php

namespace App\Http\Controllers;

// import model Client
use App\Client;

// use DB
use DB;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //


    // nama methodnya create
    public function create()
    {
        return view('client.create'); //file nya create.blade.php ada di folder siswa
    }

    // nama methodnya store buat input data
    public function store( Request $request)
    {
       //dd($request);
    	$client =  new Client;
    	$client->email = $request->email;
    	$client->password = md5($request->password);
       $client->alamat = $request->alamat;
      
             // 

    	$client->save();
        //dd($client);

        // setelah data disimpan, kembalikan lagi ke view,
       //clients ini adalah route 
        return redirect('client')->with(['success' => 'Data Client  Berhasil Disimpan']);

    }


     // buat method index, untuk controller menampilkan data
    public function index() {

        // cek dengan
        //dd('masuk bo');

        //ambil data dari model Siswa
        $clients = Client::all();

        // sortir data DESCENDING
        $sorted = $clients->sortByDesc('id');
        $clients = $sorted;
       
        
        // tampilakn di view siswa dengan nama file index.blade.php, di compact
        return view('/clients_saya',compact('clients'));
    }


    // funntion edit
    public function edit($id) {
        $client = Client::where('id', $id)->first();
        //dd($client);
        // oper data nay dengan compact
        return view('client.edit', compact('client')); //ada di folder client nama file nya edit.balde.php
    }

    // buat controller update
    public function update(Request $request, $id) {
       $client = Client::where('id', $id)->first();

       $client->email = $request->email; //nama lama akan didisi nama baru
       $client->password = md5($request->password); //nim  lama akan diganti nim baru
       $client->alamat = $request->alamat; //tanggal  lama akan diganti nim baru
      

       $client->update(); //lalu update

        // lalu redirect lagi
       return redirect('client')->with(['success' => 'Data Client  Berhasil Diupdate']);
    }


    // controller hapus
    public function hapus ($id) {
        // ambil data yang id nya $id
       $client = Client::where('id', $id)->first();
       
       // lalu hapus
       $client->delete();

       // lalu redirect lagi
       return redirect('client')->with(['success' => 'Data Client  Berhasil Dihapus']);
    }


    // cari
    public function search(Request $request){
       $query = $request->get('search');
     

        if($request->ajax()){

                $clientsa= Client::where('alamat','LIKE','%'.$request->search."%")->get();
                
                // desc 
                $sorted = $clientsa->sortByDesc('id');
                $clientsa = $sorted;

                 return view('client.result', compact('clientsa', 'query'));

                           }
                   }


      // controller cetak perdata
    public function perdata($id){

     // $siswas = Siswa::get($id); 
       $client = Client ::where('id', $id)->get();
      //dd($siswas);
      return view('client.cetak-perdata-file-client',compact('client'));
    }
                
     
}
