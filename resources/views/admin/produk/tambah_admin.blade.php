<form action="{{ route('admin.produk.tambah_admin.store') }}" method="POST">
    @csrf

    <label>Nama:</label>
    <input type="text" name="name" required><br>

    <label>Email:</label>
    <input type="email" name="email" required><br>

    <label>Password:</label>
    <input type="password" name="password" required><br>

    <label>Konfirmasi Password:</label>
    <input type="password" name="password_confirmation" required><br>

    <button type="submit">Tambah Admin</button>
</form>