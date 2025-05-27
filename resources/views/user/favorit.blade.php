<h1>Daftar Produk Favorit Anda</h1>

@if ($favorit_produk->isEmpty())
<p>Anda belum memiliki produk favorit.</p>
@else
<ul>
    @foreach ($favorit_produk as $produk)
    <li>
        <p>Nama Produk: {{ $produk->nama_produk }}</p>

        <p>ID Produk: {{ $produk->id }}</p>
        <a href="{{ route('user.produk.detail', $produk->id) }}">Lihat Detail</a>

    </li>
    @endforeach
</ul>
@endif