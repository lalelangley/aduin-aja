<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aduin Aja</title>
  <link rel="stylesheet" href="{{ asset('css/blog6.css') }}" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
 <nav class="navbar">
    <div class="container">
      <img class="logo" src="{{ asset('image/logo1.png') }}" alt="Logo" />
      <nav class="nav-links">
        <a href="{{ url('/') }}" class="nav-link ">HOME</a>
        <a href="{{ url('/about') }}" class="nav-link">ABOUT US</a>
        <a href="{{ url('/services') }}" class="nav-link">SERVICES</a>
        <a href="{{ url('/blog') }}" class="nav-link active">BLOG</a>
        <a href="{{ url('/contact') }}" class="nav-link">CONTACT</a>
      </nav>
    </div>
  </nav>

    <div class="hero-container">
      <img class="hero-image" src="image/bg2.png" />
      <div class="section-title">Cara Mengetahui Status Pengaduan Anda?</div>
    </div>

<div class="content">
    <p class="pembuka">Setelah laporan dikirim, pelapor dapat mengecek status pengaduan secara berkala untuk mengetahui sejauh mana proses penanganan telah dilakukan. Berikut penjelasan arti dari setiap status:</p>
    <h2>1. Buka Aplikasi / Website Layanan Pengaduan</h2>
    <p class="isi-poin">Login menggunakan akun yang Anda gunakan saat membuat laporan.</p>

    <h2>2. Masuk ke Menu “Pengaturan”</h2>
    <p class="isi-poin">Setelah berhasil login, cari ikon atau menu Pengaturan di pojok kanan atas.</p>

    <h2>3. Pilih “Ubah Profil”</h2>
    <p class="isi-poin">Di dalam menu pengaturan, klik Ubah Profil untuk masuk ke halaman profil Anda.</p>

    <h2>4. Klik “Lihat Laporan”</h2>
    <p class="isi-poin">Di halaman profil, cari tombol atau tab Lihat Laporan untuk melihat daftar laporan yang telah Anda kirim.</p>

    <h2>5. Cek Status Laporan Anda</h2>
    <p class="isi-poin">Setiap laporan akan memiliki status:</p>
      <ol>🟡 Belum Diproses – Laporan sudah masuk, sedang menunggu ditangani.</ol>
      <ol>🔄 Sedang Diproses – Laporan sedang dalam tahap penanganan.</ol>
      <ol>✅ Selesai – Laporan sudah ditindaklanjuti dan ditutup.</ol>

    <p class="penutup">Dengan memanfaatkan fitur pelacakan ini, Anda tidak hanya mengetahui sejauh mana laporan ditangani, tapi juga ikut mengawal prosesnya agar tetap transparan. Ingat, partisipasi aktif Anda adalah bagian penting dalam membangun pelayanan publik yang lebih baik.</p>

    <p class="penutup">Jangan ragu untuk melapor, dan terus pantau perkembangan pengaduan Anda. Suara Anda berarti.</p>
</div>


<footer class="footer">
      <div class="footer-section">
        <h3>Aduin Aja</h3>
        <p>Butuh solusi pengaduan yang sesuai kebutuhan atau laporan langsung ke instansi? Kami siap membantu Anda.</p>
      </div>
      <div class="footer-section">
        <h3>Quick Links</h3>
        <p>
   <a href="{{ url('/') }}" class="nav-link">HOME</a>
    <a href="{{ url('/about') }}" class="nav-link">ABOUT US</a>
    <a href="{{ url('/services') }}" class="nav-link">SERVICES</a>
    <a href="{{ url('/blog') }}" class="nav-link">BLOG</a>
    <a href="{{ url('/contact') }}" class="nav-link">CONTACT</a>
        </p>
      </div>

      <div class="footer-section">
        <h3>Sosials</h3>
        <div class="social-icons">
          <a href="https://instagram.com" target="_blank">
            <img src="https://cdn-icons-png.flaticon.com/24/2111/2111463.png" alt="Instagram">
          </a>
          <a href="https://facebook.com" target="_blank">
            <img src="https://cdn-icons-png.flaticon.com/24/733/733547.png" alt="Facebook">
          </a>
          <a href="https://twitter.com" target="_blank">
            <img src="https://cdn-icons-png.flaticon.com/24/733/733579.png" alt="Twitter">
          </a>
        </div>
      </div>
    </footer>
    <div class="copyright">
      © 2025 Aduin Aja. All rights reserved.
    </div>    
</body>
</html>
