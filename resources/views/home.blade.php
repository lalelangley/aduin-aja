<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Aduin Aja</title>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
</head>
<body>

  <nav class="navbar">
    <div class="container">
      <img class="logo" src="{{ asset('image/logo1.png') }}" alt="Logo" />
      <nav class="nav-links">
        <a href="{{ url('/') }}" class="nav-link active">HOME</a>
        <a href="{{ url('/about') }}" class="nav-link">ABOUT US</a>
        <a href="{{ url('/services') }}" class="nav-link">SERVICES</a>
        <a href="{{ url('/blog') }}" class="nav-link">BLOG</a>
        <a href="{{ url('/contact') }}" class="nav-link">CONTACT</a>
      </nav>
    </div>
  </nav>

  <section class="hero-section">
    <div class="container">
      <div class="judul">Aduin Aja</div>
      <div class="subjudul">Suara Anda, Perubahan Nyata</div>
      <div class="deskripsi">
        Aplikasi Pengaduan Masyarakat adalah platform yang memudahkan warga menyampaikan keluhan, saran, dan aspirasi kepada pihak berwenang secara cepat dan efisien. Masalah seputar pelayanan publik, infrastruktur, keamanan, hingga isu sosial dapat dilaporkan langsung melalui aplikasi ini.
      </div>
      <div class="button-container">
        <div class="button login">Login</div>
        <div class="button register">Register</div>
      </div>
    </div>
  </section>

  <div class="container-komitmen">
    <h2 class="judul-komitmen">Komitmen Kami untuk Layanan Terbaik</h2>
    <p class="sub-komitmen">
      Bukan sekadar menerima laporan. Kami bekerja untuk memastikan setiap suara masyarakat ditangani secara tuntas, adil, dan profesional.
    </p>

    <div class="card-wrapper">
      <div class="card">
        <img src="{{ asset('image/efisiensi.png') }}" alt="Eficiency" />
        <p>Kami paham bahwa waktu sangat berharga. Setiap laporan ditangani dengan sistem yang efisien agar respons dapat diberikan secepat mungkin.</p>
      </div>
      <div class="card">
        <img src="{{ asset('image/flexibiliti.png') }}" alt="Flexibility" />
        <p>Kami menyediakan berbagai cara pelaporan, mulai dari website, aplikasi, hingga layanan langsung, agar masyarakat dapat memilih yang paling nyaman.</p>
      </div>
      <div class="card">
        <img src="{{ asset('image/integriti.png') }}" alt="Integrity" />
        <p>Kami menjunjung tinggi kejujuran dan transparansi. Setiap pengaduan diproses secara adil dan akuntabel, dengan laporan tindak lanjut yang jelas.</p>
      </div>
      <div class="card">
        <img src="{{ asset('image/skabiliti.png') }}" alt="Scability" />
        <p>Dengan dukungan dari berbagai instansi dan perangkat daerah, kami siap menangani laporan dari skala kecil hingga isu yang lebih kompleks di seluruh wilayah.</p>
      </div>
    </div>
  </div>

  <footer class="footer">
  <div class="footer-container">
    <div class="footer-section">
      <h3>Aduin Aja</h3>
      <p>Butuh solusi pengaduan yang sesuai kebutuhan atau laporan langsung ke instansi? Kami siap membantu Anda.</p>
    </div>
    <div class="footer-section">
      <h3>Quick Links</h3>
      <nav class="footer-links">
        <a href="{{ url('/') }}">HOME</a>
        <a href="{{ url('/about') }}">ABOUT US</a>
        <a href="{{ url('/services') }}">SERVICES</a>
        <a href="{{ url('/blog') }}">BLOG</a>
        <a href="{{ url('/contact') }}">CONTACT</a>
      </nav>
    </div>
    <div class="footer-section">
      <h3>Sosials</h3>
      <div class="social-icons">
        <a href="https://instagram.com" target="_blank">
          <img src="https://cdn-icons-png.flaticon.com/24/2111/2111463.png" alt="Instagram" />
        </a>
        <a href="https://facebook.com" target="_blank">
          <img src="https://cdn-icons-png.flaticon.com/24/733/733547.png" alt="Facebook" />
        </a>
        <a href="https://twitter.com" target="_blank">
          <img src="https://cdn-icons-png.flaticon.com/24/733/733579.png" alt="Twitter" />
        </a>
      </div>
    </div>
  </div>
</footer>

<div class="copyright">
  © 2025 Aduin Aja. All rights reserved.
</div>

</body>
</html>
