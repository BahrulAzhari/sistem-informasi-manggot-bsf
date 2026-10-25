<h1>Dashboard Petugas</h1>
<p>Halaman untuk mengisi data operasional harian.</p>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
