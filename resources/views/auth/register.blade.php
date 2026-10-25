<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Pakan Maggot BSF</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-white text-[#18351d]">

<header class="flex items-center justify-between border-b px-5 py-4 md:px-8">
    <div>
        <h1 class="font-bold text-gray-800">Papan rancangan antarmuka</h1>
        <p class="text-xs text-gray-500">Sistem Informasi Pakan Maggot BSF</p>
    </div>
    <a href="{{ route('login') }}"
       class="rounded-lg border border-[#2d6034] px-4 py-2 text-sm text-[#2d6034]">
        Masuk
    </a>
</header>

<main class="flex min-h-[calc(100vh-73px)] items-center justify-center bg-[#eaf2e4] px-4 py-10">
    <div class="w-full max-w-md rounded-xl border border-gray-200 bg-white p-7 shadow-sm">
        <div class="mb-5 text-center">
            <div class="mx-auto mb-3 flex h-12 w-12 items-center justify-center rounded-xl bg-[#2d6034] text-xl font-bold text-white">
                M
            </div>
            <h2 class="text-2xl font-semibold text-[#2d6034]">Buat Akun</h2>
            <p class="mt-2 text-sm text-gray-500">Daftar untuk menggunakan sistem</p>
        </div>

        @if ($errors->any())
            <div class="mb-4 rounded-lg bg-red-50 p-3 text-sm text-red-700">
                <ul class="list-inside list-disc">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register.process') }}" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="mb-1 block text-sm font-medium">Nama lengkap</label>
                <input id="name" name="name" value="{{ old('name') }}" required
                    autocomplete="name"
                    class="w-full rounded-lg border border-gray-300 px-3 py-3 text-sm outline-none focus:border-[#2d6034] focus:ring-1 focus:ring-[#2d6034]">
            </div>

            <div>
                <label for="username" class="mb-1 block text-sm font-medium">Nama pengguna</label>
                <input id="username" name="username" value="{{ old('username') }}" required
                    autocomplete="username"
                    class="w-full rounded-lg border border-gray-300 px-3 py-3 text-sm outline-none focus:border-[#2d6034] focus:ring-1 focus:ring-[#2d6034]">
            </div>

            <div>
                <label for="email" class="mb-1 block text-sm font-medium">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                    autocomplete="email"
                    class="w-full rounded-lg border border-gray-300 px-3 py-3 text-sm outline-none focus:border-[#2d6034] focus:ring-1 focus:ring-[#2d6034]">
            </div>

            <div>
                <label for="password" class="mb-1 block text-sm font-medium">Kata sandi</label>
                <input id="password" type="password" name="password" required minlength="8"
                    autocomplete="new-password"
                    class="w-full rounded-lg border border-gray-300 px-3 py-3 text-sm outline-none focus:border-[#2d6034] focus:ring-1 focus:ring-[#2d6034]">
            </div>

            <div>
                <label for="password_confirmation" class="mb-1 block text-sm font-medium">Konfirmasi kata sandi</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required minlength="8"
                    autocomplete="new-password"
                    class="w-full rounded-lg border border-gray-300 px-3 py-3 text-sm outline-none focus:border-[#2d6034] focus:ring-1 focus:ring-[#2d6034]">
            </div>

            <button type="submit"
                class="w-full rounded-lg bg-[#2d6034] px-4 py-3 text-sm font-semibold text-white hover:bg-[#224b29]">
                Daftar
            </button>
        </form>

        <p class="mt-5 text-center text-sm text-gray-500">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="font-semibold text-[#2d6034] hover:underline">
                Masuk
            </a>
        </p>
    </div>
</main>

</body>
</html>
