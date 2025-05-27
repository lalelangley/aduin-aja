@extends('layouts.sidebarpetugas')

@section('title', 'Informasi')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/petugas/informasipetugas.css') }}" />

      <!-- Konten -->
    <div class="container">
      <h1>Informasi Pengaduan</h1>

      <div class="accordion-item">
        <div class="accordion-header">1. Status Pengaduan</div>
        <div class="accordion-content">
          <ul>
            <li>Laporan Diterima - Pengaduan telah diterima dan sedang diproses</li>
            <li>Sedang Diproses - Pengaduan sedang dalam tahap penyelidikan atau perbaikan</li>
            <li>Selesai - Pengaduan telah ditindaklanjuti dan selesai</li>
          </ul>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">2. Panduan Pengaduan</div>
        <div class="accordion-content">
          <p><strong>Cara Membuat Pengaduan:</strong></p>
          <ul>
            <li>Pilih kategori pengaduan (Jalan Rusak, Banjir, dll)</li>
            <li>Isi detail pengaduan dengan jelas</li>
            <li>Unggah foto/video jika diperlukan</li>
            <li>Kirim pengaduan dan pantau statusnya</li>
          </ul>
          <p><strong>Dokumen Pendukung:</strong></p>
          <ul>
            <li>Foto lokasi kejadian</li>
            <li>Bukti pendukung lainnya</li>
          </ul>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">3. Kontak Bantuan</div>
        <div class="accordion-content">
          <ul>
            <li>Call Center: 08xxxxxxxxxx</li>
            <li>Email: pengaduan@domain.com</li>
            <li>Alamat: Jl. Raya No. 123, Kota Anda</li>
          </ul>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">4. Statistik Pengaduan</div>
        <div class="accordion-content">
          <p><strong>Laporan Anda:</strong></p>
          <ul>
            <li>3 Pengaduan Selesai</li>
            <li>1 Pengaduan Dalam Proses</li>
            <li>2 Pengaduan Baru</li>
          </ul>
          <p><strong>Total Pengaduan (Kota Anda):</strong></p>
          <ul>
            <li>1.250 Pengaduan Tahun Ini</li>
            <li>500 Jalan Rusak</li>
            <li>300 Banjir</li>
          </ul>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">5. Berita & Pengumuman</div>
        <div class="accordion-content">
          <ul>
            <li>Update Perbaikan Jalan – Jl. Merdeka diperbaiki hingga 15 April 2025</li>
            <li>Libur Nasional – Kantor tutup pada 1 Juni 2025</li>
          </ul>
        </div>
      </div>
    </div>

  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelectorAll('.accordion-header').forEach(header => {
        header.addEventListener('click', () => {
          const item = header.parentElement;
          item.classList.toggle('active');
        });
      });
    });
  </script>
@endsection