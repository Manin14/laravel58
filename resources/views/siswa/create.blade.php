@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <!-- link kembali-->
          <div class="col-md-12 mb-3">
             <a href=" {{ url('siswa')}}" class="btn btn-primary"> <i class="glyphicon glyphicon-plus"></i> Kembali </a>
          </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Siswa </div>

                <div class="card-body">
                	<!-- post dengan url siswa  -->
                    <form method="POST" action="{{ url('siswa') }}">
                        @csrf
                       
                       <!-- nama -->
                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right"> Nama </label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nim" class="col-md-4 col-form-label text-md-right">NIM </label>

                            <div class="col-md-6">
                                <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" required autocomplete="current-nim">

                                @error('nim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- tanggal  -->
                        <div class="form-group row">
                            <label for="tanggal" class="col-md-4 col-form-label text-md-right">tanggal lahir</label>

                            <div class="col-md-6">
                                <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" required autocomplete="current-tanggal">

                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- jenis kelamin  -->
                        <div class="form-group row">
                            <label for="jk" class="col-md-4 col-form-label text-md-right">Jenis kelamin</label>

                            <div class="col-md-6">
                               <div class="radio">
                               <label><input type="radio" name="jk" value="pria" checked="checked">Pria</label>
                             </div>

                                 <div class="radio">
                                   <label><input type="radio" name="jk" value="wanita">Wanita</label>
                                 </div>

                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Jurusan -->
                         <div class="form-group row">
                             <label for="jurusan" class="col-md-4 col-form-label text-md-right">Jurusan</label>

                                <div class="col-md-6">
                                  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="jurusan"> 
                                        <option selected>Informatika</option>
                                        <option value="Sistem Informasi" selected="selected">Sistem Informasi</option>
                                        <option value="Teknik Industri">Teknik Industri</option>
                                        <option value="Teknik Sipil">Teknik Sipil</option>
                                  </select>
                                 </div>
                        </div>

                         <!-- umur -->
                         <div class="form-group row">
                            <label for="umur" class="col-md-4 col-form-label text-md-right"> Umur </label>

                            <div class="col-md-6">
                                <input min="17" max="50" id="umur" type="number" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{ old('umur') }}" required autocomplete="umur" autofocus>

                                @error('umur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- hobi check box -->
                         <div class="form-group row">
                            <label for="hobi" class="col-md-4 col-form-label text-md-right"> Hobi </label>

                            <div class="col-md-6">
                                <input  type="checkbox"  name="hobi[]" value="Membaca" checked=""  > Membaca <br>   
                                <input  type="checkbox"  name="hobi[]" value="Menulis" > Menulis <br>   
                                <input  type="checkbox"  name="hobi[]" value="Coding"  > Coding <br> 

                                <!-- @error('hobi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>
                        
                       
                       <!-- button simpan -->
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    SIMPAN 
                                </button>

                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
