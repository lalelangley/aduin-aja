<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aduin Aja</title>
  <link rel="stylesheet" href="{{ asset('css/blog.css') }}" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
 <nav class="navbar">
    <div class="container">
      <img class="logo" src="{{ asset('image/logo1.png') }}" alt="Logo" />
      <nav class="nav-links">
        <a href="{{ url('/') }}" class="nav-link">HOME</a>
        <a href="{{ url('/about') }}" class="nav-link">ABOUT US</a>
        <a href="{{ url('/services') }}" class="nav-link">SERVICES</a>
        <a href="{{ url('/blog') }}" class="nav-link active">BLOG</a>
        <a href="{{ url('/contact') }}" class="nav-link">CONTACT</a>
      </nav>
    </div>
  </nav>

    <div class="hero-container">
      <img class="hero-image" src="image/bg2.png" />
      <div class="section-title">BLOG</div>
      <div class="headline">Temukan informasi, edukasi, dan inspirasi seputar pengaduan publik.
        Kami menghadirkan berbagai artikel yang membahas cara menyampaikan keluhan secara efektif, cerita sukses penanganan pengaduan, serta tips membangun lingkungan yang lebih baik melalui partisipasi aktif masyarakat.</div>
      </div>

    <section class="blog-cards">
  <div class="card">
    <div class="card-img">
      <img src="image/blog1.png" alt="Card 1" />
    </div>
    <h2>Cara Menyampaikan Pengaduan yang Efektif dan Tepat Sasaran</h2>
    <p>
      Tips dan langkah praktis agar pengaduan Anda lebih mudah ditindaklanjuti oleh pihak berwenang, mulai dari menyusun laporan secara jelas dan lengkap, memilih kategori pengaduan yang tepat, hingga menyertakan bukti atau dokumentasi yang mendukung.    </p>
    <a href="blog1.html">Read More >>></a>
  </div>

  <div class="card">
    <div class="card-img">
      <img src="image/blog2.png" alt="Card 2" />
    </div>
    <h2>Jenis - Jenis Pengaduan Masyarakat yang Perlu Diketahui</h2>
    <p>
      Edukasi tentang berbagai kategori pengaduan yang umum disampaikan masyarakat, seperti masalah keamanan, kerusakan infrastruktur, pencemaran lingkungan, hingga keluhan terhadap layanan publik, agar masyarakat lebih tepat dalam menyampaikan laporan sesuai konteksnya.
    </p>
    <a href="blog2.html">Read More >>></a>
  </div>

  <div class="card">
    <div class="card-img">
      <img src="image/blog3.png" alt="Card 3" />
    </div>
    <h2>Kenapa Suara Masyarakat Penting untuk Kemajuan Daerah?</h2>
    <p>
      Menjelaskan pentingnya peran aktif warga dalam mengawasi, menilai, dan memberikan masukan terhadap pelayanan publik, sebagai bentuk partisipasi untuk menciptakan pemerintahan yang lebih transparan, adil, dan responsif terhadap kebutuhan masyarakat.kan pentingnya peran warga dalam mengawasi dan memperbaiki pelayanan publik.
    </p>
    <a href="blog3.html">Read More >>></a>
  </div>

  <div class="card">
    <div class="card-img">
      <img src="image/blog4.png" alt="Card 4" />
    </div>
    <h2>Etika dalam Menyampaikan Pengaduan</h2>
    <p>
      Panduan bagi masyarakat untuk menyampaikan pengaduan dengan sikap sopan, bahasa yang jelas, serta isi yang objektif, agar laporan lebih dihargai oleh pihak berwenang dan memiliki peluang lebih besar untuk ditindaklanjuti secara serius.
    </p>
    <a href="blog4.html">Read More >>></a>
  </div>

  <div class="card">
    <div class="card-img">
      <img src="image/blog5.png" alt="Card 5" />
    </div>
    <h2>Apa yang Terjadi Setelah Pengaduan Dikirim?</h2>
    <p>
      Uraian mengenai proses penanganan pengaduan, mulai dari saat laporan diterima oleh sistem, diverifikasi oleh petugas, diteruskan ke instansi terkait, hingga pengaduan tersebut ditindaklanjuti dan diberikan umpan balik kepada pelapor.
    </p>
    <a href="blog5.html">Read More >>></a>
  </div>

  <div class="card">
    <div class="card-img">
      <img src="image/blog6.png" alt="Card 6" />
    </div>
    <h2>Cara Mengetahui Status Pengaduan Anda</h2>
    <p>
      Panduan bagi masyarakat untuk memantau perkembangan laporan yang telah dikirim, termasuk cara mengecek status pengaduan melalui platform, serta penjelasan arti dari setiap status seperti “belum diproses”, “sedang diproses”, atau “selesai”, agar pelapor memahami sejauh mana penanganan telah dilakukan.
    </p>
    <a href="blog6.html">Read More >>></a>
  </div>
</section>

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
