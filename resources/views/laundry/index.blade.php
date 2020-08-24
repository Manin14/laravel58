@extends('layouts.app')

@section('content')
<h1 class="text-center m-4">Data Transaksi Laundry</h1>

       

 
        <div class="container">
        	      <!-- left Side Of Navbar -->
		           <ul class="navbar-nav mr-auto">
                         <!-- link -->
				          <div class="col-md-12 mb-3">
				          	 <a href=" {{ url('laundry/create')}}" class="btn btn-primary">  Tambah Data Transaksi </a>
				          </div> 


				           <!-- cari -->
				            <div class="col-md-12 mb-3">
				             <div class="form-row">
				             	<div class="col">
                                 <input type="text" name="searchlaundry" id="searchlaundry" class="form-control"  placeholder="Cari : masukan nama" style="width: 300px;">
                               </div>
                           </div>
                           </div>
                    </ul>


             <!-- notif flash message dari codepolitan -->
          <div class="col-md-12">
          	 @if ($message = Session::get('success'))
		      <div class="alert alert-success alert-block">
		        <button type="button" class="close" data-dismiss="alert">×</button> 
		          <strong>{{ $message }}</strong>
		      </div>
		    @endif
          </div>


         <div class="scrollable">	
			  <table class="table table-hover ">
			  <thead>
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Nama</th>
			      <th scope="col">No Telpon</th>
			      <th scope="col">Alamat</th>
			      <th scope="col">Berat</th>
			      <th scope="col">Per kg</th>
			      <th scope="col">Total Bayar</th>
			      <th scope="col">Aksi</th>
			    </tr>
			  </thead>

			  <tbody>

			  	<?php $nomor = 1; ?>

			  	@foreach ($laundry as $sss)

			    <tr>
			      <th scope="row">{{ $nomor++ }}</th>
			      <td>{{ $sss->nama}}</td>
			      <td>{{ $sss->notelpon}}</td>
			      <td>{{ $sss->alamat}}</td>
			      <td>{{ $sss->berat}} kg</td>
			      <td>{{ $sss->perkg}}</td>
			      <td>{{ $sss->totalbayar}}</td>
			      <td>
			         	<!-- aksi delete -->
							      	<form method="POST" action="{{ url('laundry') }}/{{ $sss->id }}">

							      		<!-- tombol edit -->
							      		<a href="{{ url('laundry') }}/{{ $sss->id }}/edit" class="btn btn-warning btn-sm m-1"> <i class="fa fa-edit" ></i>Edit </a>

									    {{ csrf_field() }}
									    {{ method_field('DELETE') }}
									    <button type="submit" class="btn btn-danger btn-sm m-1" onclick="return confirm('yakin ingin hapus data nya')">Hapus</button>

									    <!-- cetak data -->
							      		<a href="{{ url('cetak-perdata-laundry') }}/{{ $sss->id }}" target="_blank" class="btn btn-success btn-sm m-1"> <i class="fa fa-edit"></i>Cetak </a>
									</form>
			      </td>
			    </tr>

			     @endforeach

			  </tbody>
			</table>
		</div> 	



		
@endsection