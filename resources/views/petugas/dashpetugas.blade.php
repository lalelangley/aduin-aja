@extends('layouts.sidebarpetugas')

@section('title', 'Daftar Laporan')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<style>
  .content-wrapper {
    max-width: 1140px;
    width: 100%;
    margin: 0 auto;
  }
</style>

<div class="container-fluid py-3">
  <div class="content-wrapper">

    <!-- Header dan Search -->
    <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
      <div class="input-group w-50">
        <input type="text" class="form-control" placeholder="Cari laporan..." aria-label="Cari laporan">
      </div>
      <img src="{{ asset('image/profile.png') }}" alt="Profile" class="rounded-circle" style="width: 40px; height: 40px;">
    </div>

    <!-- Welcome Box -->
    <div class="p-4 rounded-4 d-flex align-items-center mb-5" style="background-color: #03154d;">
      <div class="me-4 flex-shrink-0">
        <img src="{{ asset('image/dashUser.png') }}" alt="Petugas" class="rounded-4" style="max-width: 250px;">
      </div>
      <div class="text-white">
        <h4 class="fw-bold mb-2" style="color: #00c4ff;">Selamat Datang, <span class="text-white">Petugas!</span></h4>
        <p class="mb-3">
          Terima kasih telah menjadi bagian dari Public Voice. Peran Anda sangat penting dalam memastikan setiap pengaduan masyarakat dikelola dengan cepat, transparan, dan tepat sasaran. Gunakan panel admin ini untuk memantau, menanggapi, dan menindaklanjuti setiap laporan yang masuk.
        </p>
        <a href="{{ route('petugas.daftarlaporan') }}" class="btn btn-info text-white fw-semibold">Lihat Laporan</a>
      </div>
    </div>

    <!-- Header Info -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h5 class="mb-1">Info Dashboard Laporan</h5>
        <p class="text-muted mb-0">Dashboard informasi total laporan</p>
      </div>
      <a href="{{ route('petugas.daftarlaporan') }}" class="btn btn-outline-primary fw-semibold">
        Kelola
      </a>
    </div>

    <!-- Kartu Statistik -->
    <div class="row g-4 mb-5">
      <div class="col-md-3">
        <div class="bg-white p-4 rounded-3 shadow d-flex justify-content-between align-items-center border-start border-4 border-primary">
          <div>
            <div class="text-muted small">Total laporan</div>
            <div class="fs-4 fw-bold">{{ $totalLaporan }}</div>
          </div>
          <i class="fas fa-clipboard-list fs-2 text-primary"></i>
        </div>
      </div>
      <div class="col-md-3">
        <div class="bg-white p-4 rounded-3 shadow d-flex justify-content-between align-items-center border-start border-4 border-danger">
          <div>
            <div class="text-muted small">Laporan belum diproses</div>
            <div class="fs-4 fw-bold">{{ $belumDiproses }}</div>
          </div>
          <i class="fas fa-hourglass-half fs-2 text-danger"></i>
        </div>
      </div>
      <div class="col-md-3">
        <div class="bg-white p-4 rounded-3 shadow d-flex justify-content-between align-items-center border-start border-4 border-warning">
          <div>
            <div class="text-muted small">Laporan diproses</div>
            <div class="fs-4 fw-bold">{{ $diproses }}</div>
          </div>
          <i class="fas fa-cogs fs-2 text-warning"></i>
        </div>
      </div>
      <div class="col-md-3">
        <div class="bg-white p-4 rounded-3 shadow d-flex justify-content-between align-items-center border-start border-4 border-success">
          <div>
            <div class="text-muted small">Laporan selesai</div>
            <div class="fs-4 fw-bold">{{ $selesai }}</div>
          </div>
          <i class="fas fa-check-circle fs-2 text-success"></i>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
