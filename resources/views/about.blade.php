@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row">
    <div class="col text-center flex-fill p-3 fs-5 text-dark">
      <h3>About Me</h3>
      <hr>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-sm-3">
      <img src="img/bg-profil-2.png" class="img-thumbnail w-100" alt="taufiq alif">
    </div>
    <div class="col-sm-5">
      <ul class="list-group">
        <li class="list-group-item text-bold fs-4">Name : {{ $name }}</li>
        <li class="list-group-item text-bold fs-4">Age : 24</li>
        <li class="list-group-item text-bold fs-4">Profession : Mahasiswa</li>
        <li class="list-group-item text-bold fs-4">Address : Bandung</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col text-center flex-fill p-3 fs-5 text-dark">
      <p style="padding-top: 50px"><small>"Ketika Aku Bilang Padanya Bahwa Hatiku Terbuat Dari Tanah,<br> Dia Mengejek Ku Karena Dia Merasa Hatinya Terbuat Dari Besi<br> Tak Lama Setelah Itupun Hujan Turun,<br> Hatiku Berbunga Dan Hatinya Pun Berkarat"</small></p>
    </div>
  </div>
  

  {{-- Education --}}
  <div class="row">
    <div class="col text-center flex-fill pt-3 fs-5 text-dark">
      <h3>My Education</h3>
      <hr>
    </div>
  </div>
  <div class="row justify-content-md-center">
    <div class="col-md-4">
      <div class="card text-dark bg-light mb-3" style="max-width: 22rem;">
        <div class="card-header">Tahun</div>
        <div class="card-body">
          <h5 class="card-title">Name school</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-dark bg-light mb-3" style="max-width: 22rem;">
        <div class="card-header">Tahun</div>
        <div class="card-body">
          <h5 class="card-title">Name school</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-dark bg-light mb-3" style="max-width: 22rem;">
        <div class="card-header">Tahun</div>
        <div class="card-body">
          <h5 class="card-title">Name school</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </div>
  {{-- End Education --}}
</div>
@endsection

