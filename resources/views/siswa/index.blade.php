@extends('layouts.app')

@section('content')


<div class="container">
	<div class="row">
                     <!-- left Side Of Navbar -->
		           <ul class="navbar-nav mr-auto">
                         <!-- link -->
				          <div class="col-md-12 mb-3">
				          	 <a href=" {{ url('siswa/create')}}" class="btn btn-primary"> <i class="glyphicon glyphicon-plus"></i>  Tambah Data Siswa </a>
				          </div>

				          <!-- form cari -->
				           <div class="col-md-12 mb-3">
					          <form action="{{ url('query')}}" method="GET">
					          	   <div class="form-row">
					          	   	<div class="col">
						          	    <input type="text" name="cari" class="form-control" placeholder="Masukan nama / nim siswa" style="width: 300px;">
						          	  </div>

						          	  	<div class="col">
						          	   <button type="submit"  class="btn btn-outline-danger"> CARI</button>
						          	    </div>

					          	   </div>
				              </form>  
				            </div>
                    </ul>

		      <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                          <!-- tombol cetak -->
				          <div class="col-md-12 mb-3">
				          	 <a href=" {{ url('cetak')}}" target="_blank" class="btn btn-outline-primary"> <i class="glyphicon glyphicon-plus" ></i>  Cetak semua data </a>
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
          

		<div class="col-md-12  ">
			<div class="card">
				<div class="card-header">
					Data Siswa
				</div>
                
                <div class="card-body">
                	<table class="kepala" cellspacing="5" cellpadding="5">
		                 <thead>
								    <tr>
								      <th >Nomor </th>
								      <th >Nama</th>
								      <th >NIM</th>
								      <th >Tanggal lahir</th>
								      <th >Jenis Kelamin</th>
								      <th >Jurusan</th>
								      <th >Umur</th>
								      <th >Hobi</th>
								      <th >Aksi</th>
								    </tr>
						 </thead>
						  <tbody>
								    <tr>
								      <th >V</th>
								      <th >V</th>
								      <th >V</th>
								      <th >V</th>
								      <th >V</th>
                                      <th >V</th>
                                      <th >V</th>
                                      <th >V</th>
                                      <th >V</th>
								    </tr>
						 </tbody>
					 </table>
                 </div>

				<div class="card-body scrollable">
					<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">Nomor </th>
						      <th scope="col">Nama</th>
						      <th scope="col">NIM</th>
						      <th scope="col">Tanggal lahir</th>
						      <th scope="col">Jenis Kelamin</th>
						      <th scope="col">Jurusan</th>
						      <th scope="col">Umur</th>
						      <th scope="col">Hobi</th>
						       <th scope="col">Aksi</th>
						    </tr>
						  </thead>
						  <tbody>
                             <!-- perulangan untuk nomor -->
                             <?php $nomor = 1; ?>

						  	@foreach ($siswas as $sss)
						    <tr>
						      <th scope="row"> {{ $nomor++ }}</th>
						      <td> {{ $sss->nama}}</td>
						      <td>{{ $sss->nim}}</td>
						      <td>{{ date('d-m-Y', strtotime($sss->tanggal)) }}</td>
						      <td>{{ $sss->jk}}</td>
						      <td>{{ $sss->jurusan}}</td>
						      <td>{{ $sss->umur}}</td>
						       <td>{{ $sss->hobi}}</td>
						      <td>
						      	 <!-- aksi delete -->
							      	<form method="POST" action="{{ url('siswa') }}/{{ $sss->id }}">

							      		<!-- tombol edit -->
							      		<a href="{{ url('siswa') }}/{{ $sss->id }}/edit" class="btn btn-warning btn-sm m-1"> <i class="fa fa-edit" ></i>Edit </a>

									    {{ csrf_field() }}
									    {{ method_field('DELETE') }}
									    <button type="submit" class="btn btn-danger btn-sm m-1" onclick="return confirm('yakin ingin hapus data nya')">Hapus</button>

									    <!-- cetak data -->
							      		<a href="{{ url('cetak-perdata') }}/{{ $sss->id }}" target="_blank" class="btn btn-success btn-sm m-1"> <i class="fa fa-edit"></i>Cetak </a>
									</form>
						      </td>
						    </tr>
						   @endforeach
						  </tbody>
						</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
