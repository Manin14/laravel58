@extends('layouts.app')

@section('content')
 

      <div class="container">
      	<div class="row">

      	       <!-- left Side Of Navbar -->
		           <ul class="navbar-nav mr-auto">
                         <!-- link -->
				          <div class="col-md-12 mb-3">
				          	 <a href=" {{ url('client/create')}}" class="btn btn-primary"> <i class="glyphicon glyphicon-plus"></i>  Tambah Data Client </a>
				          </div>    


				          <!-- cari -->
                           <input type="text" name="search" id="search" placeholder="Cari : masukan alamat client" style="width: 300px;">
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

          <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                          <!-- tombol cetak -->
				          <div class="col-md-12 mb-3">
				          	<p style="font-size: 20px; color: blue;">		<?php  echo date('d F Y');	 ?> </p>
				          </div>
                    </ul>
   </div>


          <!-- kepala nya -->
           <table class="table table-hover ">
           	  <thead>
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Email</th>
			      <th scope="col">Pasword</th>
			      <th scope="col">Alamat</th>
			       <th scope="col">Aksi</th>
			    </tr>
			  </thead>

           </table>
         
         <div class="scrollable">	
			  <table class="table table-hover ">
			  <thead>
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Email</th>
			      <th scope="col">Pasword</th>
			      <th scope="col">Alamat</th>
			       <th scope="col">Aksi</th>
			    </tr>
			  </thead>

			  <tbody>

			  	<?php $nomor = 1; ?>

			  	@foreach ($clients as $sss)

			    <tr>
			      <th scope="row">{{ $nomor++ }}</th>
			      <td>{{ $sss->email}}</td>
			      <td>{{ $sss->password}}</td>
			      <td>{{ $sss->alamat}}</td>
			      <td>
			         	<!--aksi  -->
			         	<form method="POST" action="{{ url('client') }}/{{ $sss->id }}">
			         		 <!--token  -->
			         		 {{ csrf_field() }} 

			         		 <!-- tombol edit -->
							  <a href="{{ url('client') }}/{{ $sss->id }}/edit" class="btn btn-warning btn-sm m-1"> </i>Edit </a>
                              
                              <!-- tombol hapus -->
                              <!-- hapus gak pake url, pakenya method DELETE ini -->
                               {{ method_field('DELETE') }}
							  <button type="submit" class="btn btn-danger btn-sm m-1" onclick="return confirm('yakin ingin hapus data nya')">Hapus</button>

							  <!-- cetak data -->
							     <a href="{{ url('cetak-perdata-client') }}/{{ $sss->id }}" target="_blank" class="btn btn-success btn-sm m-1"> Cetak </a>


			         	</form>
			      </td>
			    </tr>

			     @endforeach

			  </tbody>
			</table>
			</div>
		
     </div>


        <!--  <script type="text/javascript">
				$('#search').on('keyup',function(){
					$value=$(this).val();
					$.ajax({
						type : 'get',
						url : '{{URL::to('search')}}',
						data:{'search':$value},
						success:function(data){
							$('tbody').html(data);
						}
				});
				})

			</script> -->

			<!-- <script type="text/javascript">
			   $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
			</script> -->


@endsection
