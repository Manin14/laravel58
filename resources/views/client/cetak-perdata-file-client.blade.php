<!DOCTYPE html>
<html>
<head>
	<title> cetak perdata	</title>
	<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <h1> perdata client </h1>

   <div class="container">	
     @foreach ($client as $sss)
	   <li>Email : {{ $sss->email }}</li>
	   <li>Password : {{ $sss->password }}</li>
	   <li>Alamat : {{ $sss->alamat }}</li>

	   <br>	
	   <br>	

	   <li>	<?php  echo date('d F Y');	 ?></li>
	  
	 @endforeach
   </div>

</body>
</html>