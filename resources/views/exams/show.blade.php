@extends('layout/main')

@section('title', 'DETAIL DATA UJIAN')
        
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3">DETAIL DATA UJIAN</h1>

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
                    .card{
                        text-align: center;
                        margin-left: 400px;
                        margin-top: 15px;
                    }
                    @media (max-width:991px) {
                        .card{
                            margin-left: 124px;
                        }
                    }
                </style>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{ $exams->mata_pelajaran }}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{ $exams->nama_pengawas }}</h6>
                      <p class="card-text">{{ $exams->durasi_ujian }}</p>
                      <p class="card-text">{{ $exams->hari_pelaksanaan }}</p>
                      <p class="card-text">{{ $exams->pembuat_soal }}</p>
                      <p class="card-text">{{ $exams->kategori_id }}</p>

                      {{-- <button type="submit" class="btn btn-primary">Edit</button> --}}
                      <a href="{{ $exams->id }}/edit" class="btn btn-dark">Edit</a>
                      
                      <form action="/detail/{{ $exams->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                      </form>

                      <a href="/detail" class="card-link">Kembali</a>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
@endsection