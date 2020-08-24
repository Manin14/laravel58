<h1>	 cetak laundry </h1>

   @foreach ($laundry as $sss)
	   <li>Nama : {{ $sss->nama }}</li>
	   <li>No Telepon : {{ $sss->notelpon }}</li>
	   <li>Alamat : {{ $sss->alamat }}</li>
	   <li>Berat : {{ $sss->berat}} (kg) </li>
	   <li>Harga / kg : {{ $sss->perkg }}</li>
	   <li>Total Bayar : {{ $sss->totalbayar }}</li>
       
       <br>	

	    <li>Tanggal :	<?php  echo date('d F Y');	 ?></li>
		  
	  
	 @endforeach

	 <script type="text/javascript">
   	window.print();
   </script>