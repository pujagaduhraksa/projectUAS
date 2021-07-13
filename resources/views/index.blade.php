@extends('layout/main')

@section('title', 'Home')
        
@section('container')
    <div class="container">
        <div class="row">
            
            <div class="col-6">
                <br>
                <br>
            <h3>Selamat Datang Di Aplikasi CRUD Data Ujian</h3>
            <p>Ini adalah contoh CRUD dibuat menggunakan Laravel. <br>
                Pada aplikasi ini bisa menambah, edit, menampilkan serta menghapus data.</p>
            </div>

            <style>
              body {
                background: rgb(72, 79, 87);
              }
              .container{
                /* background: rgb(34, 29, 29); */
              }

              h3, p{
                color: aliceblue;
                text-align: center;
              }
            </style>
            <div class="col-6">
                <br>
                <br>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/1.jpg" class="d-block w-100" alt="Gambar 1">
                      </div>
                      <div class="carousel-item">
                        <img src="img/2.jpg" class="d-block w-100" alt="Gambar 2">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
        </div>
    </div>
@endsection