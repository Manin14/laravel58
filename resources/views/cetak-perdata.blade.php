<!DOCTYPE html>
<html>
<head>
	<title> cetak perdata</title>
</head>
<body>

<h1> Data Personal Siswa </h1>


	@foreach ($siswas as $sss)
	   <li>Nama : {{ $sss->nama }}</li>
	   <li>Nim : {{ $sss->nim }}</li>
	   <li>Tanggal Lahir : {{ date('d-m-Y', strtotime($sss->tanggal)) }}</li>
	   <li>Jenis Kelamin : {{ $sss->jk }}</li>
	   <li>Jurusan : {{ $sss->jurusan }}</li>
	   <li>Umur : {{ $sss->umur }}</li>
	   <li>Hobi : {{ $sss->hobi }}</li>
		  
	  
	 @endforeach

   <script type="text/javascript">
   	window.print();
   </script>
</body>
</html>
