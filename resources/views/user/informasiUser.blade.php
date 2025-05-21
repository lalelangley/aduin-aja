<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard User</title>
  <link rel="stylesheet" href="{{ asset('css/user/informasiUser.css') }}">
</head>
<body>
  <div class="container">
<div class="navbar">
  <div class="search-box">
    <input type="text" placeholder="Cari laporan..." class="search-input">
  </div>
  <img class="profile-pic" src="{{ asset('image/profile.png') }}" />
</div>


<div class="sidebar">
  <img class="logo" src="{{ asset('image/logo1.png') }}" />

  <div class="menu">
    <div class="menu-item">
      <img src="{{ asset('image/beranda.png') }}" class="icon">
      <span>Beranda</span>
    </div>
    <div class="menu-item daftar-laporan">
      <img src="{{ asset('image/daftar.png') }}" class="icon">
      <span>Daftar Laporan</span>
    </div>
    <div class="menu-item tambah-laporan">
      <img src="{{ asset('image/tambah.png') }}" class="icon">
      <span>Tambah Laporan</span>
    </div>
    <div class="menu-item">
      <img src="{{ asset('image/informasi.png') }}" class="icon">
      <span>Informasi</span>
    </div>
    <div class="menu-item">
      <img src="{{ asset('image/pengaturan.png') }}" class="icon">
      <span>Pengaturan</span>
    </div>
  </div>

  <div class="menu-item keluar">
    <img src="{{ asset('image/keluar.png') }}" class="icon">
    <span>Keluar</span>
  </div>
</div>
  </div>
</body>
</html>
