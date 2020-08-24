@extends('layouts.app')

@section('content')
<h1 class="text-center m-5">Tambah Data Transaksi</h1>

          <!-- link kembali-->
          <div class="col-md-12 mb-3">
             <a href=" {{ url('laundry')}}" class="btn btn-warning"> <i class="glyphicon glyphicon-plus"></i> < Kembali </a>
          </div>


 <form method="POST" action="{{ url('laundry') }}">

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



                        <!-- no telpon -->
                        <div class="form-group row">
                            <label for="notelpon" class="col-md-4 col-form-label text-md-right"> No Telpon </label>

                            <div class="col-md-6">
                                <input id="notelpon" type="text" class="form-control @error('notelpon') is-invalid @enderror" name="notelpon" value="{{ old('notelpon') }}" required autocomplete="notelpon" autofocus>

                                @error('notelpon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- alamat -->
                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right"> Alamat </label>

                            <div class="col-md-6">
                                <textarea id="alamat" type="textarea" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>    </textarea>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <!-- berat -->
                        <div class="form-group row">
                            <label for="berat" class="col-md-4 col-form-label text-md-right"> Berat </label>

                            <div class="col-md-6">
                                <input id="berat" type="text" class="form-control @error('berat') is-invalid @enderror" name="berat" value="{{ old('berat') }}" required autocomplete="berat" autofocus min="1" max="100" placeholder="kg"> 

                                @error('berat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- harga per kg -->
                        <div class="form-group row">
                            <label for="perkg" class="col-md-4 col-form-label text-md-right"> Harga Per Kg </label>

                            <div class="col-md-6">
                                <input id="perkg" type="text" class="form-control @error('perkg') is-invalid @enderror" name="perkg" value="{{ old('perkg') }}" required autocomplete="perkg" autofocus style="width: 400px;"> 

                                @error('berat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                         


                        <!-- total bayar -->
                        <div class="form-group row">
                            <label for="totalbayar" class="col-md-4 col-form-label text-md-right"> Total Bayar </label>

                             <div class="col-md-6">
                            <input  type="text" name="totalbayar" id="totalbayar" class="form-control @error('perkg') is-invalid @enderror" style="width: 200px;" required>
                             </div>

                           <!--  <div class="col-md-6 mt-2">
                                
                                <p id="totalbayar" name="totalbayar"> 0 </p>

                                @error('totalbayar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> -->
                        </div>


                        <!-- button simpan -->
                        <div class="form-group row ">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    SIMPAN 
                                </button>  
                            </div>
                        </div>

 </form>


                    <!-- button hitung harus di luar tag form-->
                        <div class="form-group row ">
                            <div class="col-md-8 offset-md-4 hitung">
                                <button type="button" class="btn btn-success hitung"  id="hitung" name="hitung">
                                    HITUNG 
                                </button>  
                            </div>
                        </div>
 @endsection