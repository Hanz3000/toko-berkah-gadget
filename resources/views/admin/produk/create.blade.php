<form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Nama Produk:</label>
    <input type="text" name="nama_produk" required><br>

    <label>Kategori:</label>
    <select name="kategori">
        <option value="smartphone">Smartphone</option>
        <option value="tablet">Tablet</option>
        <option value="smartwatch">Smartwatch</option>
        <option value="aksesoris">Aksesoris</option>
        <option value="second">Second</option>
    </select><br>

    <label>Harga:</label>
    <input type="number" name="harga" required><br>

    <label>Deskripsi:</label>
    <textarea name="deskripsi"></textarea><br>

    <label>Kekurangan:</label>
    <textarea name="kekurangan"></textarea><br>

    <label>Kelengkapan:</label>
    <textarea name="kelengkapan"></textarea><br>

    <label>Gambar:</label>
    <input type="file" name="gambar"><br>

    <button type="submit">Simpan Produk</button>
</form>