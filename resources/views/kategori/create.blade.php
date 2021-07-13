@extends('layout/main')

@section('title', 'FORM TAMBAH KATEGORI')
        
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3">FORM TAMBAH KATEGORI</h1>
                <br>

                <style>
                    body {
                        background: rgb(72, 79, 87);
                    }
                    .container{
                        /* background: rgb(34, 29, 29); */
                    }
                    h1{
                        text-align: center;
                        color: aliceblue;
                    }
                    label{
                        color: aliceblue;
                    }
                </style>

                <form method="POST" action="/kategoris">
                    @csrf
                    <div class="form-group">
                      <label for="pemeriksa_ujian">Pemeriksa Ujian</label>
                      <input type="text" class="form-control @error('pemeriksa_ujian') is-invalid @enderror" id="pemeriksa_ujian" placeholder="Masukkan Pemeriksa Ujian" name="pemeriksa_ujian" value="{{ old('pemeriksa_ujian')}}">
                          @error('pemeriksa_ujian')
                            <div class="invalid-feedback"> {{ $message }}</div>
                          @enderror
                    </div>
                    <div class="form-group">
                      <label for="pengesahan_ujian">Pengesahan Ujian</label>
                      <input type="text" class="form-control @error('pengesahan_ujian') is-invalid @enderror" id="pengesahan_ujian" placeholder="Masukkan Pengesahan Ujian" name="pengesahan_ujian" value="{{ old('pengesahan_ujian')}}">
                          @error('pengesahan_ujian')
                            <div class="invalid-feedback"> {{ $message }}</div>
                          @enderror
                    </div>
                    <div class="form-group">
                      <label for="durasi_periksa">Durasi Periksa</label>
                      <input type="text" class="form-control @error('durasi_periksa') is-invalid @enderror" id="durasi_periksa" placeholder="Masukkan Durasi Periksa" name="durasi_periksa" value="{{ old('durasi_periksa')}}">
                        @error('durasi_periksa')
                          <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="hari_pengerjaan">Hari Pengerjaan</label>
                        <input type="text" class="form-control @error('hari_pengerjaan') is-invalid @enderror" id="hari_pengerjaan" placeholder="Masukkan Hari Pengerjaan" name="hari_pengerjaan" value="{{ old('hari_pengerjaan')}}">
                          @error('hari_pengerjaan')
                            <div class="invalid-feedback"> {{ $message }}</div>
                          @enderror
                    </div>
                    <div class="form-group">
                        <label for="ttd">TTD</label>
                        <input type="text" class="form-control @error('ttd') is-invalid @enderror" id="ttd" placeholder="Masukkan TTD" name="ttd" value="{{ old('ttd')}}">
                          @error('ttd')
                            <div class="invalid-feedback"> {{ $message }}</div>
                          @enderror
                    </div>
        
                    <button type="submit" class="btn btn-dark">Tambah Data!</button>
                    <br>
                    <br>
                </form>

            </div>
        </div>
    </div>
@endsection