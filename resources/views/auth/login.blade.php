<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-900/90 flex items-center justify-center h-screen">

  <div class="bg-white p-6 rounded-xl shadow-lg w-[400px] relative">
    <!-- Tombol Close -->
    <button class="absolute top-4 right-4 text-black text-2xl font-bold">&times;</button>

    <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

    <!-- Garis dengan teks -->
    <div class="flex items-center mb-4">
      <div class="flex-grow border-t border-gray-300"></div>
      <span class="mx-2 text-sm text-gray-500">Gunakan Akun Sosial Media Anda</span>
      <div class="flex-grow border-t border-gray-300"></div>
    </div>

    <!-- Tombol Login Google -->
    <a href="{{ route('google.login') }}" class="flex items-center justify-center w-full bg-gray-100 border border-gray-300 py-2 rounded-md hover:bg-gray-200 transition">
      <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="w-5 h-5 mr-2">
      <span class="font-medium">GOOGLE</span>
    </a>

    <!-- Garis dengan teks -->
    <div class="flex items-center my-4">
      <div class="flex-grow border-t border-gray-300"></div>
      <span class="mx-2 text-sm text-gray-500">Atau dengan Username Anda</span>
      <div class="flex-grow border-t border-gray-300"></div>
    </div>

    <!-- Form Login -->
    <form action="{{ route('login') }}" method="POST" class="space-y-4">
      @csrf

      <!-- Username input -->
      <div class="flex items-center border rounded-md px-3 py-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0l-4 4m4-4l-4-4"/>
        </svg>
        <input type="text" name="username" placeholder="Masukan Username Kamu" required class="w-full focus:outline-none">
      </div>
      @error('username')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror

      <!-- Password input -->
      <div class="flex items-center border rounded-md px-3 py-2 relative">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-1.1.9-2 2-2h.01c1.1 0 2 .9 2 2v1c0 1.1-.9 2-2 2H12v2h6v-2c0-1.1-.9-2-2-2h-.01c-1.1 0-2-.9-2-2v-1z"/>
        </svg>
        <input id="password" type="password" name="password" placeholder="Masukan Password" required class="w-full focus:outline-none">
        <button type="button" id="togglePassword" class="absolute right-3 text-gray-500">
          <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12h.01M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.065 7-9.542 7s-8.268-2.943-9.542-7z"/>
          </svg>
        </button>
      </div>
      @error('password')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror

      <!-- Link horizontal -->
      <div class="flex justify-between text-sm text-blue-500">
        <a href="{{ route('register') }}" class="hover:underline">Belum Punya Akun?</a>
        <a href="{{ route('password.request') }}" class="hover:underline">Lupa Password</a>
      </div>

      <!-- Tombol Masuk -->
      <button type="submit" class="w-full bg-sky-400 text-white py-2 rounded-md hover:bg-sky-500 transition">
        MASUK
      </button>
    </form>
  </div>

  <!-- Script untuk toggle password -->
  <script>
    const toggle = document.getElementById('togglePassword');
    const password = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    toggle.addEventListener('click', function () {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);

      // Ganti ikon
      if (type === 'text') {
        eyeIcon.setAttribute('d', 'M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.27-2.944-9.543-7a10.05 10.05 0 011.337-2.592m1.886-2.306A9.957 9.957 0 0112 5c4.478 0 8.27 2.944 9.543 7a9.955 9.955 0 01-4.192 5.163M15 12a3 3 0 11-6 0 3 3 0 016 0z');
      } else {
        eyeIcon.innerHTML = `
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M15 12h.01M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274
            4.057-5.065 7-9.542 7s-8.268-2.943-9.542-7z"/>
        `;
      }
    });
  </script>
</body>
</html>
