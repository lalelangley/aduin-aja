<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Aduin Aja</title>
  <link rel="stylesheet" href="{{ asset('css/services.css') }}" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="container">
      <img class="logo" src="{{ asset('image/logo1.png') }}" alt="Logo" />
      <nav class="nav-links">
        <a href="{{ url('/') }}" class="nav-link">HOME</a>
        <a href="{{ url('/about') }}" class="nav-link">ABOUT US</a>
        <a href="{{ url('/services') }}" class="nav-link active">SERVICES</a>
        <a href="{{ url('/blog') }}" class="nav-link">BLOG</a>
        <a href="{{ url('/contact') }}" class="nav-link">CONTACT</a>
      </nav>
    </div>
  </nav>

  <!-- Main content -->
  <div class="container">
    <div class="hero-container">
      <img class="hero-image" src="{{ asset('image/bg1.png') }}" />
      <div class="section-title">SERVICES</div>
      <div class="headline">
        Kami hadir untuk mendengarkan setiap suara masyarakat, memberikan respon cepat, dan mengambil tindakan nyata atas setiap aduan yang masuk. Dengan komitmen pada pelayanan yang transparan dan bertanggung jawab, kami memastikan setiap laporan ditangani dengan penuh perhatian, akurasi, dan kecepatan, demi menciptakan lingkungan yang lebih baik dan harmonis untuk semua.
      </div>
    </div>

    <div class="services-section">
      <!-- Card 1 -->
      <div class="service-card">
        <img class="icon" src="image/fpo.png" alt="Formulir Pengaduan Online" />
        <div class="service-title">Formulir Pengaduan Online</div>
        <div class="service-desc">Memudahkan masyarakat dalam menyampaikan keluhan, kritik, saran, atau aspirasi secara digital kapan saja dan di mana saja.</div>
      </div>

      <!-- Card 2 -->
      <div class="service-card">
        <img class="icon" src="image/pp.png" alt="Pelacakan Pengaduan" />
        <div class="service-title">Pelacakan Pengaduan</div>
        <div class="service-desc">Pengguna dapat memantau status pengaduannya secara real-time mulai dari diterima, diproses, hingga ditindaklanjuti.</div>
      </div>

      <!-- Card 3 -->
      <div class="service-card">
        <img class="icon" src="image/rc.png" alt="Respons Cepat" />
        <div class="service-title">Respons Cepat</div>
        <div class="service-desc">Pengaduan yang bersifat mendesak atau darurat akan direspons lebih cepat oleh pihak terkait.</div>
      </div>

      <!-- Card 4 -->
      <div class="service-card">
        <img class="icon" src="image/knb.png" alt="Konsultasi dan Bantuan" />
        <div class="service-title">Konsultasi dan Bantuan</div>
        <div class="service-desc">Memberikan panduan atau bantuan jika pengguna mengalami kesulitan dalam menyampaikan pengaduan.</div>
      </div>

      <!-- Card 5 -->
      <div class="service-card">
        <img class="icon" src="image/lt.png" alt="Laporan Transparan" />
        <div class="service-title">Laporan Transparan</div>
        <div class="service-desc">Menjamin transparansi dalam proses penanganan setiap pengaduan, mulai dari diterima hingga selesai.</div>
      </div>
    </div>
  </div>

  <!-- Footer (di luar container agar full width) -->
  <footer class="footer">
    <div class="footer-section">
      <h3>Aduin Aja</h3>
      <p>Butuh solusi pengaduan yang sesuai kebutuhan atau laporan langsung ke instansi? Kami siap membantu Anda.</p>
    </div>
    <div class="footer-section">
      <h3>Quick Links</h3>
      <p>
        <a href="{{ url('/') }}">HOME</a>
        <a href="{{ url('/about') }}">ABOUT US</a>
        <a href="{{ url('/services') }}">SERVICES</a>
        <a href="{{ url('/blog') }}">BLOG</a>
        <a href="{{ url('/contact') }}">CONTACT</a>
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
