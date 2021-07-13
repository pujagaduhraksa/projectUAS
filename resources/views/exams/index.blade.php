@extends('layout/main')

@section('title', 'DAFTAR UJIAN')
        
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Daftar Ujian</h1>
                <br>

                {{-- <a href="{{ route('logout') }}">Log Out</a> --}}

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
                    .table{
                        color: aliceblue;
                    }
                    .container{
                        /* background: rgb(34, 29, 29); */
                    }
                </style>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Nama Pengawas</th>
                            <th scope="col">Durasi Ujian</th>
                            <th scope="col">Hari Pelaksanaan</th>
                            <th scope="col">Pembuat Soal</th>
                            <th scope="col">Kategori</th>
                        </tr>
                       <tbody>
                           @foreach($exams as $e)
                            <tr>
                                <th scope="row"> {{ $loop->iteration }}</th>
                                <td>{{ $e->mata_pelajaran }}</td>
                                <td>{{ $e->nama_pengawas }}</td>
                                <td>{{ $e->durasi_ujian }}</td>
                                <td>{{ $e->hari_pelaksanaan }}</td>
                                <td>{{ $e->pembuat_soal }}</td>
                                <td>{{ $e->kategori_id }}</td>
                            </tr>
                           @endforeach
                       </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection