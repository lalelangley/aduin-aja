<!-- Overlay -->
<div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>

<!-- LOGIN MODAL -->
<div id="loginModal" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-6 rounded-xl shadow-xl z-50 hidden w-full max-w-md">
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-xl font-semibold">Login</h2>
    <button onclick="closeModal('loginModal')" class="text-gray-500 hover:text-red-600">✕</button>
  </div>
  <button class="w-full bg-white border border-gray-300 text-gray-700 py-2 rounded-md mb-4">Login with Google</button>
  <div class="text-center text-gray-400 text-sm mb-4">atau dengan Email Anda</div>
  <form>
    <input type="email" placeholder="Email" class="w-full border p-2 rounded-md mb-3" required>
    <input type="password" placeholder="Password" class="w-full border p-2 rounded-md mb-3" required>
    <div class="flex items-center justify-between mb-4">
      <label><input type="checkbox" class="mr-1"> Remember Me</label>
      <a href="#" class="text-sm text-blue-600">Lupa Password?</a>
    </div>
    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md">MASUK</button>
  </form>
</div>

<!-- REGISTER MODAL -->
<div id="registerModal" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-6 rounded-xl shadow-xl z-50 hidden w-full max-w-lg">
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-xl font-semibold">Register</h2>
    <button onclick="closeModal('registerModal')" class="text-gray-500 hover:text-red-600">✕</button>
  </div>
  <div class="bg-blue-100 text-blue-800 text-sm p-2 rounded mb-4">
    Masukkan nomor identitas, nama lengkap, dan data pribadi pengguna sebagai jaminan keaslian identitas pelapor.
  </div>
  <button class="w-full bg-white border border-gray-300 text-gray-700 py-2 rounded-md mb-4">Daftar dengan Google</button>
  <div class="text-center text-gray-400 text-sm mb-4">atau isi form berikut</div>
  <form class="grid grid-cols-2 gap-4">
    <input type="text" placeholder="NIK" class="border p-2 rounded-md col-span-2">
    <input type="text" placeholder="Nama Lengkap" class="border p-2 rounded-md col-span-2">
    <input type="text" placeholder="Tempat Tanggal Lahir" class="border p-2 rounded-md">
    <input type="text" placeholder="Tempat Lahir" class="border p-2 rounded-md">
    <select class="border p-2 rounded-md">
      <option value="">Jenis Kelamin</option>
      <option>Laki-laki</option>
      <option>Perempuan</option>
    </select>
    <input type="text" placeholder="No. Telp Aktif" class="border p-2 rounded-md">
    <input type="text" placeholder="Pekerjaan" class="border p-2 rounded-md">
    <input type="text" placeholder="Penyandang Disabilitas" class="border p-2 rounded-md">
    <input type="password" placeholder="Password" class="border p-2 rounded-md">
    <input type="password" placeholder="Konfirmasi Password" class="border p-2 rounded-md">
    <button type="submit" class="col-span-2 bg-blue-600 text-white py-2 rounded-md">REGISTER</button>
  </form>
</div>
