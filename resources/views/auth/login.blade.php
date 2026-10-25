<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Pakan Maggot BSF</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-white font-sans text-[#18351d]">

    <!-- Header -->
    <header class="flex min-h-[64px] items-center justify-between border-b border-gray-200 px-5 py-3 md:px-8">
        <div class="flex items-center gap-3">
            <!-- Logo sementara -->
            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#2d6034] text-xl font-bold text-white">
                M
            </div>

            <div>
                <h1 class="text-sm font-bold text-gray-800">
                    Manggot BSF
                </h1>
                <p class="text-[10px] text-gray-500">
                    Sistem Informasi dan Analitik Pakan Maggot BSF
                </p>
            </div>
        </div>

    </header>

    <!-- Judul halaman -->
    <main class="px-4 py-5 md:px-7">
        
        <!-- Area utama -->
        <section class="flex min-h-[550px] items-center justify-center border border-[#d9e4d2] bg-[#eaf2e4] px-4 py-10 md:min-h-[554px]">

            <!-- Kartu login -->
            <div class="w-full max-w-[400px] rounded-xl border border-gray-200 bg-white px-6 py-8 shadow-sm sm:px-8">

                <!-- Logo -->
                <div class="mb-3 flex justify-center">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#2d6034] text-xl font-bold text-white">
                        <img src="" alt="">
                    </div>
                </div>

                <h3 class="text-center text-2xl font-medium text-[#2d6034]">
                    Pakan Maggot BSF
                </h3>

                <p class="mt-2 text-center text-xs text-gray-500">
                    Peternakan H. Faisol Efendi
                </p>

                <!-- Form login: tampilan awal -->
                
                <form method="POST" action="{{ route('login.process') }}" class="mt-7 space-y-5">
                    @csrf

                    <!-- Pesan kesalahan -->
                    @if ($errors->any())
                        <div class="rounded-lg bg-red-50 p-3 text-xs text-red-600">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <!-- Nama pengguna -->
                    <div>
                        <label for="username" class="mb-2 block text-xs font-semibold text-gray-800">
                            Nama pengguna
                        </label>

                        <input
                            type="text"
                            id="username"
                            name="username"
                            value="{{ old('username') }}"
                            placeholder="Masukkan nama pengguna"
                            autocomplete="username"
                            required
                            class="w-full rounded-xl border border-[#d5e1d1] bg-white px-4 py-3 text-xs text-gray-800 outline-none transition placeholder:text-gray-400 focus:border-[#2d6034] focus:ring-2 focus:ring-[#2d6034]/10"
                        >
                    </div>

                    <!-- Kata sandi -->
                    <div>
                        <label for="password" class="mb-2 block text-xs font-semibold text-gray-800">
                            Kata sandi
                        </label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Masukkan kata sandi"
                            autocomplete="current-password"
                            required
                            class="w-full rounded-xl border border-[#d5e1d1] bg-white px-4 py-3 text-xs text-gray-800 outline-none transition placeholder:text-gray-400 focus:border-[#2d6034] focus:ring-2 focus:ring-[#2d6034]/10"
                        >
                    </div>

                    <!-- Tombol masuk -->
                    <button
                        type="submit"
                        class="w-full rounded-xl bg-[#2d6034] px-4 py-3 text-xs font-semibold text-white transition hover:bg-[#224b29] focus:outline-none focus:ring-2 focus:ring-[#2d6034]/30"
                    >
                        Masuk
                    </button>

                    <!-- Lupa kata sandi -->
                    <div class="text-center">
                        <a href="#" class="text-xs font-semibold text-[#2d6034] hover:underline">
                            Lupa kata sandi
                        </a>
                    </div>
                </form>

                <p class="mt-6 text-center text-[10px] leading-relaxed text-gray-500">
                    <a href="{{ route('register') }}"
                        class="font-semibold text-[#2d6034] hover:underline">>
                        belum punya akun? buat disini
                    </a>
                </p>
            </div>
        </section>
    </main>

</body>
</html>
