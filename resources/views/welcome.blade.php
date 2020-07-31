@extends('layouts.app')

@section('content')
<h1> Manin </h1>
<div class="container">
    <div class="row">
        <div class="col-md-6 ">
             <!-- gambar logo drog di welcome -->
                   <img src="{{ url('images/babeh.jpg') }}" width="200" align="right">
        </div> 

        <div class="col-md-6 ">
            <h1> wahidev academy </h1>
            <p> Melalui teknologi kita siap berkarya </p>
           
            <a href="" class="btn btn-primary btn-lg"> <img src="https://img.icons8.com/wired/64/000000/enter-2.png"/> Daftar </a>
        </div> 
    </div>

    <!-- row baru -->
    <div class="row mt-5">	
        <div class="col-md-4">	
	            <div class="card text-center" style="width: 18rem;">
				  <img src="{{ url ('images/m.jpg')}}" class="card-img-top" alt="...">
				  <div class="card-body">
				    <p class="card-text "> Laravel </p>
				  </div>
				</div>
        </div>
        <div class="col-md-4">	
        	 <div class="card text-center" style="width: 18rem;">
				  <img src="{{ url ('images/iron.jpg')}}" class="card-img-top" alt="...">
				  <div class="card-body">
				    <p class="card-text">Phyton</p>
				  </div>
			 </div>
        </div>
        <div class="col-md-4">	
        	 <div class="card text-center" style="width: 18rem;">
				  <img src="{{ url ('images/arifin.jpg')}}" class="card-img-top" alt="...">
				  <div class="card-body">
				    <p class="card-text">Golang </p>
				  </div>
			 </div>
        </div>
    </div>

</div>
@endsection
