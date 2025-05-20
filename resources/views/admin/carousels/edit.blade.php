<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Carousel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Edit Carousel</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('admin.carousels.update', $carousel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') {{-- Atau gunakan PATCH tergantung kebutuhan --}}

            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $carousel->judul }}" required>
            </div>

            <div class="form-group">
                <label for="gambar">Gambar:</label>
                <br>
                @if ($carousel->gambar)
                <img src="{{ asset('storage/' . $carousel->gambar) }}" alt="{{ $carousel->judul }}" width="150">
                <p class="mt-2">Kosongkan jika tidak ingin mengubah gambar.</p>
                @else
                <p>Tidak ada gambar saat ini.</p>
                @endif
                <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>

            <div class="form-group">
                <label for="harga_normal">Harga Normal:</label>
                <input type="number" class="form-control" id="harga_normal" name="harga_normal" value="{{ $carousel->harga_normal }}" required>
            </div>

            <div class="form-group">
                <label for="harga_diskon">Harga Diskon:</label>
                <input type="number" class="form-control" id="harga_diskon" name="harga_diskon" value="{{ $carousel->harga_diskon }}">
                <small class="form-text text-muted">Kosongkan jika tidak ada diskon.</small>
            </div>

            {{-- Tambahkan input field lain sesuai kolom di tabel carousels Anda --}}

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('admin.carousels.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>