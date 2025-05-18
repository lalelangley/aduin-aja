<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aduin Aja</title>
  <link rel="stylesheet" href="{{ asset('css/blog5.css') }}" />
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
      <div class="section-title">Apa yang Terjadi Setelah Pengaduan Dikirim?</div>
    </div>

<div class="content">
    <p class="pembuka">Banyak masyarakat belum mengetahui bagaimana proses pengaduan berjalan setelah dikirim ke instansi terkait. Memahami alur ini penting agar kita tahu apa yang bisa diharapkan dan kapan harus menunggu tindak lanjut.</p>
    <h2>✅ 1. Verifikasi Awal oleh Petugas</h2>
    <p class="isi-poin">Setelah pengaduan masuk, tim atau petugas akan memeriksa isi laporan untuk memastikan kelengkapan data, relevansi, serta validitas informasi.</p>

    <h2>🗂️ 2. Pengklasifikasian Jenis Pengaduan</h2>
    <p class="isi-poin">Pengaduan akan dikelompokkan ke dalam kategori tertentu seperti keamanan, infrastruktur, pelayanan publik, dll, agar bisa diteruskan ke dinas atau instansi yang berwenang.</p>

    <h2>📤 3. Distribusi ke Instansi Terkait</h2>
    <p class="isi-poin">Setelah diklasifikasikan, laporan diteruskan ke unit atau lembaga yang bertanggung jawab menangani masalah tersebut.</p>

    <h2>🔍 4. Investigasi atau Tindakan Lapangan</h2>
    <p class="isi-poin">Instansi akan melakukan pemeriksaan di lapangan atau menindaklanjuti langsung berdasarkan tingkat urgensinya. Dalam beberapa kasus, pelapor bisa dihubungi kembali untuk informasi tambahan.</p>

    <h2>📩 5. Umpan Balik ke Pelapor</h2>
    <p class="isi-poin">Jika sistemnya mendukung, pelapor akan menerima notifikasi mengenai status laporan, seperti "diproses", "ditindaklanjuti", atau "selesai".</p>

    <p class="penutup">Mengetahui proses ini membantu kita bersikap lebih sabar dan realistis setelah menyampaikan pengaduan. Setiap laporan yang disampaikan dengan benar pasti memiliki peluang besar untuk ditindaklanjuti secara bertahap.</p>
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

