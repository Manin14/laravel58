@extends('layouts.app')

@section('content')

<h1>	edit</h1>



 <!-- link kembali-->
          <div class="col-md-12 mb-3">
             <a href=" {{ url('client')}}" class="btn btn-warning"> <i class="glyphicon glyphicon-plus"></i> < Kembali </a>
          </div>

<div class="container">
		<form method="POST" action="{{ url('client')}}/{{ $client->id}}">
			  @csrf
			          <!--  tambah input hidden ini buat ambil id nya -->
                       <input type="hidden" name="_method" value="PUT">
			  
		  <div class="form-group row">
		    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="inputEmail3" name="email" value="{{ $client->email }}" required placeholder="contoh@gmail.com">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="inputPassword3" name="password" value="{{ $client->password}}" required placeholder="password">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Alamat</label>
		    <div class="col-sm-10">
		     <textarea  class="form-control" rows="3" id="exampleFormControlTextarea1" name="alamat"  required placeholder="masukan alamat"> {{ $client->alamat }}</textarea>
		    </div>
		  </div>
		 
		 
		  <div class="form-group row">
		    <div class="col-md-8">
		      <button type="submit" class="btn btn-primary">Update</button>
		    </div>
		  </div>
		</form>
</div>
@endsection