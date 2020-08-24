<!DOCTYPE html>
<html>
<head>
	<title> cetak</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <!--  <h1> cetak data </h1> -->
<!-- @foreach ($siswas as $sss)
   <li>{{ $sss->nama }}</li>
   <li> {{ $sss->nim }}</li>
   @endforeach -->



   <div class="col-md-12">
			<div class="card">
				<div class="card-header center">
					 Laporan Data Siswa
				</div>
                
                

				<div class="card-body scrollable">
					<table class="table ">
						  <thead>
						    <tr>
						      <th scope="col">Nomor </th>
						      <th scope="col">Nama</th>
						      <th scope="col">NIM</th>
						      <th scope="col">Tanggal Lahir</th>
						      <th scope="col">Jenis kelamin</th>
						      <th scope="col">Jurusan</th>
						      <th scope="col">Umur</th>
						       <th scope="col">Hobi</th>
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
						    </tr>
						   @endforeach
						  </tbody>
						</table>
				</div>
			</div>
		</div>


		<!-- otomatis print -->
		<script type="text/javascript">
			window.print();
		</script>
</body>
</html>