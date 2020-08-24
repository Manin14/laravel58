

 <table class="table table-hover ">

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


