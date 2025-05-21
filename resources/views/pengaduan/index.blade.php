<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard User</title>
    <link rel="stylesheet" href="{{ asset('css/user/daftarUser.css') }}">
</head>
<body>
  <div class="container">

    <!-- Navbar -->
    <div class="navbar">
      <div class="search-box">
        <input type="text" placeholder="Cari laporan..." class="search-input">
      </div>
      <img class="profile-pic" src="{{ asset('image/profile.png') }}" />
    </div>

    <!-- Sidebar -->
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

    <h2 class="judul-daftar-laporan">Daftar Laporan</h2>

    <div class="laporan-box">
  <div class="laporan-header">
    <div class="anonim-info">
      <img src="image/profileUser.png" class="anonim-icon" />
      <span>Anonim</span>
    </div>
    <div class="tanggal-info">
      <img src="image/tanggalUser.png" class="tanggal-icon" />
      <span>25 Agustus 2024</span>
    </div>
    <div class="kategori-badge keamanan">KEAMANAN DAN KETERTIBAN</div>
  </div>

  <div class="laporan-title">Banjir Akibat Saluran Air Tersumbat</div>
  <div class="laporan-isi">
    Saya ingin melaporkan bahwa saluran air di Jalan Merdeka, RT 05 RW 03] mengalami penyumbatan dan menyebabkan banjir saat hujan turun. Air meluap ke jalan dan menggenangi rumah warga di sekitar.
  </div>

  <button class="lihat-foto-btn">Lihat Foto</button>

  <div class="laporan-footer">
    <div class="info-item">
      <img src="image/komenUser.png" />
      <span>0 Komentar</span>
    </div>
    <div class="info-item">
      <img src="image/dukunganUser.png" />
      <span>0 Dukungan</span>
    </div>
    <div class="info-item">
      <img src="image/downloadUser.png" />
      <span>Download Laporan</span>
    </div>
  </div>
</div>

<div class="laporan-box">
  <div class="laporan-header">
    <div class="anonim-info">
      <img src="image/profileUser.png" class="anonim-icon" />
      <span>Anonim</span>
    </div>
    <div class="tanggal-info">
      <img src="image/tanggalUser.png" class="tanggal-icon" />
      <span>25 Agustus 2024</span>
    </div>
    <div class="kategori-badge lingkungan">LINGKUNGAN DAN KEBERSIHAN</div>
  </div>

  <div class="laporan-title">Banjir Akibat Saluran Air Tersumbat</div>
  <div class="laporan-isi">
    Saya ingin melaporkan bahwa saluran air di Jalan Merdeka, RT 05 RW 03] mengalami penyumbatan dan menyebabkan banjir saat hujan turun. Air meluap ke jalan dan menggenangi rumah warga di sekitar.
  </div>

  <button class="lihat-foto-btn">Lihat Foto</button>

  <div class="laporan-footer">
    <div class="info-item">
      <img src="image/komenUser.png" />
      <span>0 Komentar</span>
    </div>
    <div class="info-item">
      <img src="image/dukunganUser.png" />
      <span>0 Dukungan</span>
    </div>
    <div class="info-item">
      <img src="image/downloadUser.png" />
      <span>Download Laporan</span>
    </div>
  </div>
</div>

<div class="laporan-box">
  <div class="laporan-header">
    <div class="anonim-info">
      <img src="image/profileUser.png" class="anonim-icon" />
      <span>Anonim</span>
    </div>
    <div class="tanggal-info">
      <img src="image/tanggalUser.png" class="tanggal-icon" />
      <span>25 Agustus 2024</span>
    </div>
    <div class="kategori-badge umum">INFRASTRUKTUR DAN FASILITAS UMUM</div>
  </div>

  <div class="laporan-title">Banjir Akibat Saluran Air Tersumbat</div>
  <div class="laporan-isi">
    Saya ingin melaporkan bahwa saluran air di Jalan Merdeka, RT 05 RW 03] mengalami penyumbatan dan menyebabkan banjir saat hujan turun. Air meluap ke jalan dan menggenangi rumah warga di sekitar.
  </div>

  <button class="lihat-foto-btn">Lihat Foto</button>

  <div class="laporan-footer">
    <div class="info-item">
      <img src="image/komenUser.png" />
      <span>0 Komentar</span>
    </div>
    <div class="info-item">
      <img src="image/dukunganUser.png" />
      <span>0 Dukungan</span>
    </div>
    <div class="info-item">
      <img src="image/downloadUser.png" />
      <span>Download Laporan</span>
    </div>
  </div>
</div>

  </div>
</body>
</html>