@extends('layout/main')

@section('title', 'DETAILS')
        
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Detail Data Ujian</h1>

                <style>
                     body {
                        background: rgb(72, 79, 87);
                    }
                    h1{
                        text-align: center;
                        margin-top: 20px;
                        margin-bottom: 20px;
                        color: aliceblue;
                    }
                    .container{
                        /* background: rgb(34, 29, 29); */
                    }
                </style>

                <a href="/detail/create" class="btn btn-dark my-3">Tambah Data</a>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                <ul class="list-group">
                    @foreach( $exams as $e)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $e->mata_pelajaran }}
                      <a href="/detail/{{ $e->id }}" class="badge badge-light">Detail</a>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
@endsection