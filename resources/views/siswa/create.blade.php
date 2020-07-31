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
