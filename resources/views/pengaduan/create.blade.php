<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard User</title>
  <link rel="stylesheet" href="{{ asset('css/user/tambahUser.css') }}">
</head>
<body>
  <div class="container">

    <!-- Navbar -->
    <div class="navbar">
      <div class="search-box">
        <input type="text" placeholder="Cari laporan..." class="search-input" />
      </div>
      <img class="profile-pic" src="{{ asset('image/profile.png') }}" alt="Profile" />
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <img class="logo" src="{{ asset('image/logo1.png') }}" alt="Logo" />
      <div class="menu">
        <div class="menu-item">
          <img src="{{ asset('image/beranda.png') }}" class="icon" alt="Beranda" />
          <span>Beranda</span>
        </div>
        <div class="menu-item daftar-laporan">
          <img src="{{ asset('image/daftar.png') }}" class="icon" alt="Daftar Laporan" />
          <span>Daftar Laporan</span>
        </div>
        <div class="menu-item tambah-laporan">
          <img src="{{ asset('image/tambah.png') }}" class="icon" alt="Tambah Laporan" />
          <span>Tambah Laporan</span>
        </div>
        <div class="menu-item">
          <img src="{{ asset('image/informasi.png') }}" class="icon" alt="Informasi" />
          <span>Informasi</span>
        </div>
        <div class="menu-item">
          <img src="{{ asset('image/pengaturan.png') }}" class="icon" alt="Pengaturan" />
          <span>Pengaturan</span>
        </div>
      </div>
      <div class="menu-item keluar">
        <img src="{{ asset('image/keluar.png') }}" class="icon" alt="Keluar" />
        <span>Keluar</span>
      </div>
    </div>

    <!-- Form laporan -->
    <div class="form-wrapper">
      <h2 class="form-title">Sampaikan Laporan Anda</h2>
      <form class="laporan-form" enctype="multipart/form-data" method="POST" action="#">
        <label for="judul-laporan">Judul Laporan*</label>
        <input type="text" id="judul-laporan" name="judul_laporan" placeholder="Masukkan judul" required />
        <label for="isi-laporan">Isi Laporan*</label>
        <textarea id="isi-laporan" name="isi_laporan" placeholder="Tulis isi laporan" required></textarea>
        <label for="tanggal-kejadian">Tanggal Kejadian*</label>
        <input type="date" id="tanggal-kejadian" name="tanggal_kejadian" required />
        <label for="lokasi-kejadian">Lokasi Kejadian*</label>
        <input type="text" id="lokasi-kejadian" name="lokasi_kejadian" placeholder="Contoh: Jl. Merdeka No.10" required />
        <label for="foto-laporan">Unggah Foto</label>
        <input type="file" id="foto-laporan" name="foto_laporan" accept="image/*" />
        <div class="checkbox-anonim">
          <input type="checkbox" id="anonim" name="anonim" />
          <label for="anonim">Anonim</label>
        </div>
        <button type="submit" class="kirim-btn">Kirim</button>
      </form>
    </div>

<div class="laporan-container">
  <div class="laporan-card">
    <h3>Banjir Akibat Saluran Air Tersumbat</h3>
    <p>
      Saya ingin melaporkan bahwa saluran air di Jalan Merdeka, RT 05 RW 03 mengalami penyumbatan dan menyebabkan banjir saat hujan turun. Air meluap ke jalan dan menggenangi rumah warga di sekitar.
    </p>
    <div class="laporan-footer">
      <div class="user-info">
        <img src="image/profileUser.png" alt="user" />
        <span>Anonim</span>
      </div>
      <div class="interaksi">
        <img src="image/komenUser.png" alt="komentar" />
        <span>0 Komentar</span>
        <img src="image/dukunganUser.png" alt="komentar" />
        <span>0 Dukungan</span>
      </div>
    </div>
  </div>

  <div class="laporan-card">
    <h3>Jalan Berlubang</h3>
    <p>
      Saya ingin melaporkan adanya jalan berlubang di Jalan Sudirman, dekat pertigaan menuju Pasar Rayal yang berpotensi membahayakan pengendara, terutama saat malam hari atau saat hujan.
    </p>
    <div class="laporan-footer">
      <div class="user-info">
        <img src="image/profileUser.png" alt="user" />
        <span>Adi Sobari</span>
      </div>
      <div class="interaksi">
        <img src="image/komenUser.png" alt="komentar" />
        <span>0 Komentar</span>
        <img src="image/dukunganUser.png" alt="komentar" />
        <span>0 Dukungan</span>
      </div>
    </div>
  </div>
  <div class="laporan-card">
    <h3>Jalan Berlubang</h3>
    <p>
      Saya ingin melaporkan adanya jalan berlubang di Jalan Sudirman, dekat pertigaan menuju Pasar Rayal yang berpotensi membahayakan pengendara, terutama saat malam hari atau saat hujan.
    </p>
    <div class="laporan-footer">
      <div class="user-info">
        <img src="image/profileUser.png" alt="user" />
        <span>Adi Sobari</span>
      </div>
<div class="interaksi">
        <img src="image/komenUser.png" alt="komentar" />
        <span>0 Komentar</span>
        <img src="image/dukunganUser.png" alt="komentar" />
        <span>0 Dukungan</span>
      </div>
    </div>
  </div>
</div>

</div>
  </div>
</body>
</html>
