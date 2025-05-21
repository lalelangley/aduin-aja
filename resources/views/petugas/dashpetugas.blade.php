@extends('layouts.sidebarpetugas')

@section('title', 'Daftar Laporan')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container py-3">
  <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
    <div class="input-group w-50">
      <input type="text" class="form-control" placeholder="Cari laporan..." aria-label="Cari laporan">
    </div>
    <img src="{{ asset('image/profile.png') }}" alt="Profile" class="rounded-circle" style="width: 40px; height: 40px;">
  </div>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container my-5">
  <div class="p-4 rounded-4 d-flex align-items-center" style="background-color: #03154d;">
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
</div>

@endsection