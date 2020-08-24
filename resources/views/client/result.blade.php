

 <table class="table table-hover ">

<tbody>

			  	<?php $nomor = 1; ?>

			  	@foreach ($clientsa as $sss)

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


