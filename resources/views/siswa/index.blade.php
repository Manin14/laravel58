@extends('layouts.app')

@section('content')
<h1>  Data Siswa read </h1>

<div class="container">
	<div class="row">
		<!-- link -->
          <div class="col-md-12 mb-3">
          	 <a href=" {{ url('siswa/create')}}" class="btn btn-primary"> <i class="glyphicon glyphicon-plus"></i>  Tambah Data Siswa </a>
          </div>

          <!-- notif flash message dari codepolitan -->
          <div class="col-md-12">
          	 @if ($message = Session::get('success'))
		      <div class="alert alert-success alert-block">
		        <button type="button" class="close" data-dismiss="alert">×</button> 
		          <strong>{{ $message }}</strong>
		      </div>
		    @endif
          </div>
          

		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Data Siswa
				</div>

				<div class="card-body">
					<table class="table">
						  <thead>
						    <tr>
						      <th scope="col">Nomor </th>
						      <th scope="col">Nama</th>
						      <th scope="col">NIM</th>
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
						      <td>
						      	 <!-- aksi delete -->
							      	<form method="POST" action="{{ url('siswa') }}/{{ $sss->id }}">

							      		<!-- tombol edit -->
							      		<a href="{{ url('siswa') }}/{{ $sss->id }}/edit" class="btn btn-warning"> <i class="fa fa-edit"></i>Edit </a>

									    {{ csrf_field() }}
									    {{ method_field('DELETE') }}
									    <button type="submit" class="btn btn-danger"> <i class="fa-volume-up"></i>Delete</button>
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
