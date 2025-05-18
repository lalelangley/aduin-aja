<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aduin Aja</title>
  <link rel="stylesheet" href="{{ asset('css/about.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>
 <nav class="navbar">
    <div class="container">
      <img class="logo" src="{{ asset('image/logo1.png') }}" alt="Logo" />
      <nav class="nav-links">
        <a href="{{ url('/') }}" class="nav-link ">HOME</a>
        <a href="{{ url('/about') }}" class="nav-link active">ABOUT US</a>
        <a href="{{ url('/services') }}" class="nav-link">SERVICES</a>
        <a href="{{ url('/blog') }}" class="nav-link">BLOG</a>
        <a href="{{ url('/contact') }}" class="nav-link">CONTACT</a>
      </nav>
    </div>
  </nav>

    <div class="section section-apa">
      <img class="img-left" src="image/apaitu.png" alt="Apa Itu" />
      <div class="text-right">
        <h2>Apa itu Aduin Aja?</h2>
        <p><strong>Aduin Aja</strong> adalah aplikasi pengaduan masyarakat yang memudahkan siapa saja menyampaikan keluhan, saran, atau aspirasi secara transparan. Dengan sistem real-time yang cepat dan akuntabel, setiap laporan dapat dipantau untuk memastikan tindak lanjut yang efektif. <strong>Aduin Aja</strong> hadir untuk meningkatkan komunikasi masyarakat dengan pemerintah demi perubahan positif dan lingkungan yang lebih responsif.</p>
      </div>
    </div>

    <div class="section section-mengapa">
      <div class="text-left">
        <h2>Mengapa harus Aduin Aja?</h2>
        <p><strong>Aduin Aja</strong> adalah solusi inovatif untuk pengaduan masyarakat yang cepat, transparan, dan akuntabel. Dengan sistem real-time yang mudah digunakan, setiap laporan mendapat tindak lanjut yang tepat. Keamanan data terjamin, memastikan kerahasiaan pengaduan. <strong>Aduin Aja</strong> memberi kekuatan bagi setiap suara untuk mendorong perubahan nyata dan menciptakan lingkungan yang lebih baik.</p>
      </div>
      <img class="img-right" src="image/mengapa.png" alt="Kenapa Aduin Aja" />
    </div>

<div class="visi-misi">
  <div class="visi">
    <img src="image/visi.png" alt="Visi Icon" />
    <h3>VISI KAMI</h3>
    <p>
      Menjadi platform pengaduan masyarakat yang inovatif, transparan, dan terpercaya dalam menciptakan perubahan positif bagi lingkungan dan layanan publik. Aduin Aja berkomitmen untuk membangun sistem yang memudahkan masyarakat dalam menyampaikan aspirasi, memastikan setiap laporan mendapatkan tindak lanjut yang tepat, serta meningkatkan kepercayaan antara masyarakat dan pihak berwenang. Dengan teknologi yang canggih dan sistem yang responsif, kami berupaya menciptakan lingkungan yang lebih baik melalui keterbukaan, partisipasi aktif, dan kolaborasi yang efektif.
    </p>
  </div>
  <div class="misi">
     <img src="image/misi.png" alt="Misi Icon" />
    <h3>MISI KAMI</h3>
    <ol>
      <li><strong>Mempermudah Akses Pengaduan</strong> – Masyarakat dapat menyampaikan laporan kapan saja dan di mana saja dengan mudah.</li>
      <li><strong>Meningkatkan Transparansi</strong> – Setiap laporan dapat dipantau secara real-time untuk memastikan akuntabilitas.</li>
      <li><strong>Membangun Kepercayaan</strong> – Menghubungkan masyarakat dengan pihak berwenang untuk solusi yang lebih cepat dan tepat.</li>
      <li><strong>Mendorong Perbaikan</strong> – Menggunakan data pengaduan untuk meningkatkan kualitas layanan publik dan kesejahteraan masyarakat.</li>
    </ol>
  </div>
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
