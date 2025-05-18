<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aduin Aja</title>
  <link rel="stylesheet" href="css/contact.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container">

 <nav class="navbar">
    <div class="container">
      <img class="logo" src="{{ asset('image/logo1.png') }}" alt="Logo" />
      <nav class="nav-links">
        <a href="{{ url('/') }}" class="nav-link">HOME</a>
        <a href="{{ url('/about') }}" class="nav-link">ABOUT US</a>
        <a href="{{ url('/services') }}" class="nav-link">SERVICES</a>
        <a href="{{ url('/blog') }}" class="nav-link">BLOG</a>
        <a href="{{ url('/contact') }}" class="nav-link active">CONTACT</a>
      </nav>
    </div>
  </nav>

    <main>
    <section class="contact-heading">
      <h1>Kontak Kami</h1>
      <p>Kami siap membantu! Jika Anda memiliki pertanyaan, saran, atau ingin bekerja sama, jangan ragu untuk menghubungi kami melalui informasi di bawah ini.</p>
    </section>

    <section class="contact-box">
      <div class="info-section">
        <h2>Contact Information</h2>
        <p>Kami siap membantu! Jika Anda memiliki pertanyaan, saran, atau ingin bekerja sama, jangan ragu untuk menghubungi kami melalui informasi di bawah ini.</p>

        <div class="info-item">
          <img src="image/call.png" alt="Phone Icon" />
          <p>+62 123456789<br>+62 123456789</p>
        </div>

        <div class="info-item">
          <img src="image/email.png" alt="Email Icon" />
          <p>aduinaja@gmail.com</p>
        </div>

        <div class="info-item">
          <img src="image/lokasi.png" alt="Location Icon" />
          <p>Bandung, Indonesia</p>
        </div>
      </div>

      <form class="form-section">
        <div class="input-row">
          <input type="text" placeholder="YOUR NAME" />
          <input type="email" placeholder="YOUR EMAIL" />
        </div>
        <input type="text" placeholder="YOUR SUBJECT" />
        <textarea placeholder="Write here your message"></textarea>
        <button type="submit">Send Message</button>
      </form>
    </section>
  </main>

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
