<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('judul')</title>

    <!-- Scripts bootstap -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- jquery -->
   <!--  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
 -->
    <!-- jquery nya  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- perhitungan laundry -->
    <script type="text/javascript" >
          //script perhitungan laundry  dengan javascript murni
        function hitung(){

          let berat = parseInt(document.getElementById('berat').value);
          let perkg = parseInt(document.getElementById('perkg').value);

            let hasilnya =berat * perkg;

            document.getElementById('totalbayar').value=hasilnya;

            //  let berat = parseInt($('#berat').value);
            // let perkg = parseInt($('#perkg').value);

            // let hasilnya =berat * perkg;

            // $('#totalbayar').value=hasilnya;
       }
    </script>

    <!-- css scroll -->
    <style type="text/css">
        .scrollable {
          
            height: 400px;
            overflow: scroll;
        }
        .kepala {
           width: 800px;
           color: blue;
        }
        img {
            border-radius: 100%;
        }
        .hitung{
            z-index: 999;
            left: 420px;
            top: -160px;
        }
    </style>

   <!-- script cari dengan jquery client -->
    <!-- <script type="text/javascript">
        $(document).ready(function(){
             $('#search').on('keyup', function () {
                $value=$(this).val();
             //alert('yey');
             $.ajax({
                        type : 'get',
                        url : '{{URL::to('search')}}',
                        data:{'search':$value},
                        success:function(data){
                            $('tbody').html(data);
                        }
            

             });
        });
       });   
    
    </script> -->


  <!-- ini perhitungan laundry dengan jquery, klik button hitung -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#hitung').click(function () {
                let berat = $('#berat').val();
                let perkg = $('#perkg').val();

                let hasilnya = parseInt(berat) * parseInt(perkg);

                $('#totalbayar').val(hasilnya);

            });
             
        });
    </script>

    <!-- ini perhitungan laundry dengan jquery keyup, otomatis ke isi tanpa klik tombol hitung buttonnya -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#berat,#perkg').keyup(function () {
                let berat = $('#berat').val();
                let perkg = $('#perkg').val();

                let hasilnya = parseInt(berat) * parseInt(perkg);

                $('#totalbayar').val(hasilnya);

            });
             
        });
    </script>



    <!-- script carilaundry dengan jquery  -->
    <script type="text/javascript">
        $(document).ready(function(){
             $('#searchlaundry').on('keyup', function () {
                $value=$(this).val();
             //alert('yey');
             $.ajax({
                        type : 'get',
                        url : '{{URL::to('searchlaundry')}}',
                        data:{'searchlaundry':$value},
                        success:function(data){
                            $('tbody').html(data);
                        }
            

             });
        });
       });   
    
    </script>

    <!--  -->


   

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <!-- gambar logo drog dinavbar -->
                   <img src="{{ url('images/m.jpg') }}" width="100">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto m-3">
                       <!-- tentang kami -->
                        <li class="nav-item m-3">
                                <a class="nav-link btn btn-primary" href="{{ url('tentang-kami') }}">{{ __('Tentang Kami') }}</a>
                        </li>

                         <!-- data siswa -->
                        <li class="nav-item m-3">
                                <a class="nav-link btn btn-primary" href="{{ url('siswa') }}"> Data Siswa </a>
                        </li>

                        <!-- data siswa -->
                        <li class="nav-item m-3">
                                <a class="nav-link btn btn-primary" href="{{ url('client') }}"> Data Client </a>
                        </li>

                        <!-- portofolio -->
                        <li class="nav-item m-3">
                                <a class="nav-link btn btn-primary" href="{{ url('portofolio') }}"> Portofolio </a>
                        </li>

                        <!-- data laundry -->
                        <li class="nav-item m-3">
                                <a class="nav-link btn btn-primary" href="{{ url('laundry') }}"> Data Laundry </a>
                        </li>

                        <!-- Right Side Of Navbar -->
                        <li class="nav-item m-3">
                            <!-- Authentication Links -->
                              <!-- tombol cetak -->
                              <div class="col-md-12 mb-3">
                                <p style="font-size: 20px; color: blue;">       <?php  echo date('d F Y');   ?> </p>
                              </div>
                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
