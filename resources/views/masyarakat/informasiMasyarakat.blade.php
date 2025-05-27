<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard User</title>
  <link rel="stylesheet" href="{{ asset('css/user/informasiUser.css') }}" />
</head>
<body>
  <div class="container">

    <!-- Navbar -->
    <div class="navbar">
      <div class="search-box">
        <input type="text" placeholder="Cari laporan..." class="search-input">
      </div>
      <img class="profile-pic" src="image/profile.png" />
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <img class="logo" src="image/logo1.png" />

      <div class="menu">
        <div class="menu-item">
          <img src="image/beranda.png" class="icon">
          <span>Beranda</span>
        </div>
        <div class="menu-item daftar-laporan">
          <img src="image/daftar.png" class="icon">
          <span>Daftar Laporan</span>
        </div>
        <div class="menu-item tambah-laporan">
          <img src="image/tambah.png" class="icon">
          <span>Tambah Laporan</span>
        </div>
        <div class="menu-item">
          <img src="image/informasi.png" class="icon">
          <span>Informasi</span>
        </div>
        <div class="menu-item">
          <img src="image/pengaturan.png" class="icon">
          <span>Pengaturan</span>
        </div>
      </div>

      <div class="menu-item keluar">
        <img src="image/keluar.png" class="icon">
        <span>Keluar</span>
      </div>
    </div>

    <!-- Konten -->
    <div class="container">
      <h1>Informasi Pengaduan</h1>

      <div class="accordion-item">
        <div class="accordion-header">1. Status Pengaduan</div>
        <div class="accordion-content">
          <ul>
            <li>Laporan Diterima - Pengaduan telah diterima dan sedang diproses</li>
            <li>Sedang Diproses - Pengaduan sedang dalam tahap penyelidikan atau perbaikan</li>
            <li>Selesai - Pengaduan telah ditindaklanjuti dan selesai</li>
          </ul>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">2. Panduan Pengaduan</div>
        <div class="accordion-content">
          <p><strong>Cara Membuat Pengaduan:</strong></p>
          <ul>
            <li>Pilih kategori pengaduan (Jalan Rusak, Banjir, dll)</li>
            <li>Isi detail pengaduan dengan jelas</li>
            <li>Unggah foto/video jika diperlukan</li>
            <li>Kirim pengaduan dan pantau statusnya</li>
          </ul>
          <p><strong>Dokumen Pendukung:</strong></p>
          <ul>
            <li>Foto lokasi kejadian</li>
            <li>Bukti pendukung lainnya</li>
          </ul>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">3. Kontak Bantuan</div>
        <div class="accordion-content">
          <ul>
            <li>Call Center: 08xxxxxxxxxx</li>
            <li>Email: pengaduan@domain.com</li>
            <li>Alamat: Jl. Raya No. 123, Kota Anda</li>
          </ul>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">4. Statistik Pengaduan</div>
        <div class="accordion-content">
          <p><strong>Laporan Anda:</strong></p>
          <ul>
            <li>3 Pengaduan Selesai</li>
            <li>1 Pengaduan Dalam Proses</li>
            <li>2 Pengaduan Baru</li>
          </ul>
          <p><strong>Total Pengaduan (Kota Anda):</strong></p>
          <ul>
            <li>1.250 Pengaduan Tahun Ini</li>
            <li>500 Jalan Rusak</li>
            <li>300 Banjir</li>
          </ul>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">5. Berita & Pengumuman</div>
        <div class="accordion-content">
          <ul>
            <li>Update Perbaikan Jalan – Jl. Merdeka diperbaiki hingga 15 April 2025</li>
            <li>Libur Nasional – Kantor tutup pada 1 Juni 2025</li>
          </ul>
        </div>
      </div>
    </div>

  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelectorAll('.accordion-header').forEach(header => {
        header.addEventListener('click', () => {
          const item = header.parentElement;
          item.classList.toggle('active');
        });
      });
    });
  </script>
</body>
</html>
