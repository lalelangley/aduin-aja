<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'Dashboard')</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f7fa;
      margin: 0;
    }

    /* Sidebar style - fixed, desktop only */
    #sidebar {
      width: 200px;
      height: 100vh;
      background-color: #06174B;
      color: white;
      position: fixed;
      top: 0;
      left: 0;
      padding: 20px 15px;
      overflow-y: auto;
      z-index: 1030;
    }

    #sidebar .logo {
      width: 170px;
      margin-bottom: 25px;
    }

    #sidebar .menu-item {
      display: flex;
      align-items: center;
      padding: 12px 10px;
      cursor: pointer;
      border-radius: 8px;
      color: white;
      margin-bottom: 6px;
      transition: background-color 0.3s, color 0.3s;
    }

    #sidebar .menu-item:hover,
    #sidebar .menu-item.active {
      background-color: #00CCFF;
      color: #000;
    }

    #sidebar .menu-item img.icon {
      width: 20px;
      margin-right: 12px;
      filter: brightness(0) invert(1);
      transition: filter 0.3s;
    }

    #sidebar .menu-item:hover img.icon,
    #sidebar .menu-item.active img.icon {
      filter: none;
    }

    #sidebar .menu-item.keluar {
      margin-top: 50px;
      width: 150px;
      justify-content: flex-start;
      padding-left: 10px;
    }

    /* Konten utama dengan margin kiri sesuai sidebar */
    #content {
      margin-left: 200px;
      padding: 20px;
      min-height: 100vh;
      transition: margin-left 0.3s ease;
    }
  </style>
</head>
<body>

  <nav id="sidebar" aria-label="Sidebar Navigation">
    <img class="logo" src="{{ asset('image/logo1.png') }}" alt="Logo" />
    <div class="menu">
      <div class="menu-item">
        <img src="{{ asset('image/beranda.png') }}" class="icon" alt="Beranda Icon" />
        <span>Beranda</span>
      </div>
      <div class="menu-item daftar-laporan">
        <img src="{{ asset('image/daftar.png') }}" class="icon" alt="Daftar Laporan Icon" />
        <span>Daftar Laporan</span>
      </div>
      <div class="menu-item tambah-laporan">
        <img src="{{ asset('image/tambah.png') }}" class="icon" alt="Tambah Laporan Icon" />
        <span>Tambah Laporan</span>
      </div>
      <div class="menu-item">
        <img src="{{ asset('image/informasi.png') }}" class="icon" alt="Informasi Icon" />
        <span>Informasi</span>
      </div>
      <div class="menu-item">
        <img src="{{ asset('image/pengaturan.png') }}" class="icon" alt="Pengaturan Icon" />
        <span>Pengaturan</span>
      </div>
    </div>
    <div class="menu-item keluar">
      <img src="{{ asset('image/keluar.png') }}" class="icon" alt="Keluar Icon" />
      <span>Keluar</span>
    </div>
  </nav>

  <main id="content" tabindex="-1">
    @yield('content')
  </main>

</body>
</html>
