@extends('layout.master')
@section('title',"Profile FMMB")
@section('content')
    <div class="jumbotron text-center" >
    <img src="img/emet_fmmb.png" class="img-circle">
    <h1>Forum Musola Masjid BSD</h1>
    <p>Moto Organisasi | Moto Organisasi | Moto Organisasi</p>
    </div>

    <!-- about -->
    <section class="about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Tentang FMMB</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-sm-offset-2">
            <p class="pKiri">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
          </div>
          <div class="col-sm-4">
            <p class="pKanan">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        </div>
      </div>
    </section>
    <!-- ahir abaout -->

    <!-- Portfolio -->
    <section class="portfolio overlay" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Info Lebih</h2>
            <hr>
          </div>
        </div>

        <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="img/portfolio/port1.JPG" alt="...">
                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>...</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="img/portfolio/port2.JPG" alt="...">
                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>...</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="img/portfolio/port3.JPG" alt="...">
                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>...</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
        </div>
        </div>
        </div>
      </div>
    </section>
    <!-- Portfolio akhir-->

    <!-- contact -->
    <section class="contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Contact</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" class="form-control" placeholder="Maukkan Nama"></input>
              </div>
              <div class="form-group">
                <label for="nama">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Maukkan Email"></input>
              </div>
              <div class="form-group">
                <label for="nama">No Telep</label>
                <input type="email" id="email" class="form-control" placeholder="Maukkan No Telp"></input>
              </div>
              <select class="form-control">
                <option> -- Pilih Kategori -- </option>
                <option>Web Design</option>
                <option>Web Development</option>
              </select>
              <div class="form-group">
                <label for="pesan">Masukkan Pesan</label>
                  <textarea class="form-control" rows="10" placeholder="Masukkan Pesan">
                    
                  </textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- contact end -->
@endsection
