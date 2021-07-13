@extends('layout/main')

@section('title', 'DAFTAR KATEGORI')
        
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Daftar Kategori</h1>

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

                <a href="/detail/create" class="btn btn-dark my-3">Tambah Data</a>

                {{-- @foreach($kategori as $k)
                    
                @endforeach --}}

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Pemeriksa Ujian</th>
                            <th scope="col">Pengesahan Ujian</th>
                            <th scope="col">Durasi Periksa</th>
                            <th scope="col">Hari Pengerjaan</th>
                            <th scope="col">TTD</th>
                            <th scope="col">Aksi</th>
                        </tr>
                       <tbody>
                           @foreach($kategori as $k)
                            <tr>
                                <th scope="row"> {{ $loop->iteration }}</th>
                                <td>{{ $k->pemeriksa_ujian }}</td>
                                <td>{{ $k->pengesahan_ujian }}</td>
                                <td>{{ $k->durasi_periksa }}</td>
                                <td>{{ $k->hari_pengerjaan }}</td>
                                <td>{{ $k->ttd }}</td>
                                <td>
                                    <form action="/kategoris/{{ $k->id }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                           @endforeach
                       </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection