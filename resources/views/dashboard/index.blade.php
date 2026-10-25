<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Pakan Maggot BSF</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#eaf2e4] p-6">
    <div class="mx-auto max-w-4xl rounded-xl bg-white p-8 shadow-sm">
        <h1 class="text-2xl font-bold text-[#2d6034]">
            Selamat datang, {{ auth()->user()->name }}!
        </h1>

        <p class="mt-2 text-gray-600">
            Login berhasil. Dashboard utama akan kita kembangkan berikutnya.
        </p>

        @if (session('success'))
            <p class="mt-3 text-sm text-green-700">{{ session('success') }}</p>
        @endif

        <form method="POST" action="{{ route('logout') }}" class="mt-6">
            @csrf
            <button type="submit"
                class="rounded-lg bg-[#2d6034] px-5 py-3 text-sm font-semibold text-white hover:bg-[#224b29]">
                Logout
            </button>
        </form>
    </div>
</body>
</html>
