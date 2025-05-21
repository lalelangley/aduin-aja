<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-900/90 flex items-center justify-center min-h-screen p-4">
  <div class="bg-white rounded-xl shadow-lg max-w-2xl w-full relative overflow-hidden">
    <!-- Header with close button -->
    <div class="flex justify-between items-center px-4 py-3 border-b">
      <h1 class="text-xl font-bold text-center flex-grow">Register</h1>
      <button class="text-2xl font-bold">✕</button>
    </div>
    
    <!-- Explanation box -->
    <div class="bg-blue-900 text-white p-4 text-sm">
    <p> <span class="font-bold">Mengapa kami meminta data ini?</span><br>
        Layanan Public Voice mengumpulkan data pribadi pengguna sebagai jaminan keabsahan dari aduan atau aspirasi yang disampaikan, pengenal identitas, memverifikasi akun dan mengirim notifikasi laporan, menilai tingkat partisipasi publik, pengolahan dan analisis data, penyusunan perencanaan dan pengambilan kebijakan, monitoring dan evaluasi, dan mendorong terciptanya kebijakan yang inklusif.
    </p>
    </div>

    
    <!-- Social login section -->
    <div class="px-4 py-3 text-center">
      <p class="text-gray-500 text-sm mb-3">Gunakan Akun Sosial Media Anda</p>
      <button class="flex items-center justify-center w-full border border-gray-300 rounded-md py-2 px-4 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium">
    <svg class="h-5 w-5 mr-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
      <path fill="#4285F4" d="M23.64 12.204c0-.79-.07-1.548-.202-2.276H12v4.3h6.356a5.43 5.43 0 01-2.356 3.567v2.964h3.8c2.222-2.052 3.5-5.067 3.5-8.555z"/>
      <path fill="#34A853" d="M12 24c3.243 0 5.965-1.07 7.953-2.908l-3.8-2.964c-1.05.7-2.395 1.114-4.153 1.114-3.188 0-5.898-2.15-6.872-5.042H1.11v3.17A11.998 11.998 0 0012 24z"/>
      <path fill="#FBBC05" d="M5.128 14.199a7.26 7.26 0 010-4.393V6.636H1.11a12 12 0 000 10.728l4.018-3.165z"/>
      <path fill="#EA4335" d="M12 4.78c1.797 0 3.4.618 4.664 1.83l3.495-3.495C17.96 1.24 15.238 0 12 0 7.648 0 3.91 2.4 1.11 6.636l4.018 3.168C6.1 7.126 8.812 4.78 12 4.78z"/>
    </svg>
    GOOGLE
  </button>
      <div class="my-3 flex items-center">
        <div class="flex-grow border-t border-gray-300"></div>
        <span class="px-3 text-gray-500 text-sm">Atau</span>
        <div class="flex-grow border-t border-gray-300"></div>
      </div>
    </div>
    
    <!-- Form -->
    <form action="{{ route('register') }}" method="POST" class="px-4 pb-4">
      @csrf
      
      <!-- Two columns layout -->
      <div class="grid grid-cols-2 gap-4">
        <!-- Left column -->
        <div>
          <!-- NIK -->
          <div class="mb-3">
            <label class="block text-sm font-medium text-gray-700">NIK<span class="text-red-500">*</span></label>
            <input type="text" name="nik" class="w-full p-2 border rounded-md text-sm" placeholder="Nomor Induk Kewarganegaraan ( KTP )" required>
          </div>
          
          <!-- Tempat Tinggal -->
          <div class="mb-3">
            <label class="block text-sm font-medium text-gray-700">Tempat Tinggal Saat Ini<span class="text-red-500">*</span></label>
            <div class="relative">
              <input type="text" name="tempat_tinggal" class="w-full p-2 border rounded-md text-sm" placeholder="Ketik Tempat Tinggal Saat Ini" required>
              <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
              </div>
            </div>
          </div>
          
          <!-- Jenis Kelamin -->
          <div class="mb-3">
            <label class="block text-sm font-medium text-gray-700">Jenis Kelamin<span class="text-red-500">*</span></label>
            <div class="relative">
              <select name="jenis_kelamin" class="w-full p-2 border rounded-md text-sm appearance-none" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
              <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </div>
            </div>
          </div>
          
          <!-- Pekerjaan -->
          <div class="mb-3">
            <label class="block text-sm font-medium text-gray-700">Pekerjaan<span class="text-red-500">*</span></label>
            <div class="relative">
              <input type="text" name="pekerjaan" class="w-full p-2 border rounded-md text-sm appearance-none" required>
              <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
              </div>
            </div>
          </div>
          
          <!-- Username -->
          <div class="mb-3">
            <label class="block text-sm font-medium text-gray-700">Username<span class="text-red-500">*</span></label>
            <input type="text" name="username" class="w-full p-2 border rounded-md text-sm" placeholder="Username" required>
          </div>
          
          <!-- Password -->
          <div class="mb-3">
            <label class="block text-sm font-medium text-gray-700">Password<span class="text-red-500">*</span></label>
            <div class="relative">
              <input type="password" name="password" class="w-full p-2 border rounded-md text-sm" placeholder="••••••••••" id="password"  required>
              <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                <button type="button" class="focus:outline-none" onclick="togglePassword('password')" >
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Right column -->
        <div>
          <!-- Nama Lengkap -->
          <div class="mb-3">
            <label class="block text-sm font-medium text-gray-700">Nama Lengkap<span class="text-red-500">*</span></label>
            <input type="text" name="nama" class="w-full p-2 border rounded-md text-sm" placeholder="Nama Lengkap" required>
          </div>
          
          <!-- Tanggal Lahir -->
          <div class="mb-3">
            <label class="block text-sm font-medium text-gray-700">Tanggal Lahir<span class="text-red-500">*</span></label>
            <div class="relative">
              <input type="date" name="tanggal_lahir" class="w-full p-2 border rounded-md text-sm" placeholder="Pilih Tanggal Lahir" required>
              <div class="absolute inset-y-0 right-0 flex items-center pr-3">
              </div>
            </div>
          </div>
          
          <!-- No Telp Aktif -->
          <div class="mb-3">
            <label class="block text-sm font-medium text-gray-700">No. Telp Aktif<span class="text-red-500">*</span></label>
            <input type="text" name="telp" class="w-full p-2 border rounded-md text-sm" placeholder="Minimal 8 - 14 angka" required>
          </div>
          
          <!-- Penyandang Disabilitas -->
          <div class="mb-3">
            <label class="block text-sm font-medium text-gray-700">Penyandang Disabilitas</label>
            <div class="relative">
              <select name="disabilitas" class="w-full p-2 border rounded-md text-sm appearance-none" required>
                <option value="">Pilih Status</option>
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
              </select>
              <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </div>
            </div>
          </div>
          
          <!-- Email -->
          <div class="mb-3">
            <label class="block text-sm font-medium text-gray-700">Email<span class="text-red-500">*</span></label>
            <input type="email" name="email" class="w-full p-2 border rounded-md text-sm" placeholder="user@gmail.com" required>
          </div>
          
         <!-- Password Confirmation -->
        <div class="mb-3">
        <label class="block text-sm font-medium text-gray-700">
            Password Confirmation<span class="text-red-500">*</span>
        </label>
        <div class="relative">
            <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-2 border rounded-md text-sm" placeholder="••••••••••" required >
            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
            <button type="button" class="focus:outline-none" onclick="togglePassword('password_confirmation')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
            </button>
            </div>
        </div>
        </div>
        </div>
      </div>
      
      <!-- Submit button -->
      <div class="mt-4">
        <button type="submit" class="w-full bg-cyan-500 text-white py-3 rounded-md hover:bg-cyan-600 transition duration-200 font-medium">
          REGISTER
        </button>
      </div>
    </form>
  </div>

 <!-- Script untuk toggle password -->
 <script>
  function togglePassword(id) {
    const input = document.getElementById(id);
    if (input.type === "password") {
      input.type = "text";
    } else {
      input.type = "password";
    }
  }
</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 