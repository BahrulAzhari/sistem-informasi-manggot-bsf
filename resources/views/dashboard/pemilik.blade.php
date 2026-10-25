<h1>Dashboard Pemilik</h1>
<p>Halaman untuk melihat analitik dan laporan produksi.</p>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
