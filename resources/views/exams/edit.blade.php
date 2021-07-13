@extends('layout/main')

@section('title', 'FORM EDIT DATA UJIAN')
        
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3">FORM EDIT DATA UJIAN</h1>
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
                </style>

                <form method="POST" action="/detail/{{$exams->id}}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                    <label for="mata_pelajaran">Mata Pelajaran</label>
                    <input type="text" class="form-control @error('mata_pelajaran') is-invalid @enderror" id="mata_pelajaran" placeholder="Masukkan Mata Pelajaran" name="mata_pelajaran" value="{{ $exams->mata_pelajaran }}">
                        @error('mata_pelajaran')
                            <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                    <label for="nama_pengawas">Nama Pengawas</label>
                    <input type="text" class="form-control @error('nama_pengawas') is-invalid @enderror" id="nama_pengawas" placeholder="Masukkan Nama Pengawas" name="nama_pengawas" value="{{ $exams->nama_pengawas }}">
                        @error('nama_pengawas')
                            <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                    <label for="durasi_ujian">Durasi Ujian</label>
                    <input type="text" class="form-control @error('durasi_ujian') is-invalid @enderror" id="durasi_ujian" placeholder="Masukkan Durasi Ujian" name="durasi_ujian" value="{{ $exams->durasi_ujian }}">
                        @error('durasi_ujian')
                        <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="hari_pelaksanaan">Hari Pelaksanaan</label>
                        <input type="text" class="form-control @error('hari_pelaksanaan') is-invalid @enderror" id="hari_pelaksanaan" placeholder="Masukkan Hari Pelaksanaan" name="hari_pelaksanaan" value="{{ $exams->hari_pelaksanaan }}">
                        @error('hari_pelaksanaan')
                            <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pembuat_soal">Pembuat Soal</label>
                        <input type="text" class="form-control @error('pembuat_soal') is-invalid @enderror" id="pembuat_soal" placeholder="Masukkan Hari Pelaksanaan" name="pembuat_soal" value="{{ $exams->pembuat_soal }}">
                        @error('pembuat_soal')
                            <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-dark">Ubah Data!</button>
                    <br>
                    <br>
                </form>

            </div>
        </div>
    </div>
@endsection