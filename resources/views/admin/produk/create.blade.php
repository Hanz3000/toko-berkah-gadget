<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Produk</title>
    <style>
        :root {
            --primary-color: #4f46e5;
            --primary-hover: #4338ca;
            --gray-light: #f3f4f6;
            --gray-medium: #e5e7eb;
            --gray-dark: #6b7280;
            --error-color: #ef4444;
            --success-color: #10b981;
            --text-color: #374151;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f9fafb;
            color: var(--text-color);
            line-height: 1.5;
        }

        .container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .card-header {
            background-color: var(--primary-color);
            color: white;
            padding: 1.5rem;
            font-size: 1.25rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .card-header svg {
            width: 24px;
            height: 24px;
        }

        .card-body {
            padding: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #374151;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #374151;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid var(--gray-medium);
            border-radius: 0.375rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(79, 70, 229, 0.25);
        }

        .form-control::placeholder {
            color: var(--gray-dark);
            opacity: 0.7;
        }

        select.form-control {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236b7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 1em;
            padding-right: 2.5rem;
        }

        textarea.form-control {
            min-height: 100px;
            resize: vertical;
        }

        .file-input-wrapper {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
            border: 2px dashed var(--gray-medium);
            border-radius: 0.5rem;
            background-color: var(--gray-light);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .file-input-wrapper:hover {
            border-color: var(--primary-color);
        }

        .file-input-wrapper input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .file-input-icon {
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .file-input-text {
            font-size: 0.875rem;
            color: var(--gray-dark);
            text-align: center;
        }

        .file-preview {
            margin-top: 1rem;
            display: none;
        }

        .file-preview img {
            max-width: 100%;
            max-height: 200px;
            border-radius: 0.375rem;
            box-shadow: var(--shadow);
        }

        .btn {
            display: inline-block;
            font-weight: 500;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.375rem;
            transition: all 0.15s ease-in-out;
            cursor: pointer;
        }

        .btn-primary {
            color: #fff;
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
            border-color: var(--primary-hover);
        }

        .btn-lg {
            padding: 1rem 2rem;
            font-size: 1.125rem;
            border-radius: 0.5rem;
        }

        .text-right {
            text-align: right;
        }

        /* Grid Layout */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -0.75rem;
            margin-left: -0.75rem;
        }

        .col-12,
        .col-md-6 {
            position: relative;
            width: 100%;
            padding-right: 0.75rem;
            padding-left: 0.75rem;
        }

        /* Responsive Adjustments */
        @media (min-width: 768px) {
            .col-md-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeIn {
            animation: fadeIn 0.3s ease-out forwards;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card animate-fadeIn">
            <div class="card-header">
                <span>Tambah Produk Baru</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data" id="productForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_produk" class="form-label">Nama Produk</label>
                                <input type="text" id="nama_produk" name="nama_produk" class="form-control" placeholder="Masukkan nama produk" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select id="kategori" name="kategori" class="form-control">
                                    <option value="" disabled selected>Pilih kategori</option>
                                    <option value="smartphone">Smartphone</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="smartwatch">Smartwatch</option>
                                    <option value="aksesoris">Aksesoris</option>
                                    <option value="second">Second</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="harga" class="form-label">Harga (Rp)</label>
                        <input type="number" id="harga" name="harga" class="form-control" placeholder="Masukkan harga" required>
                    </div>

                    <div class="form-group">
                        <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                        <textarea id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi detail produk"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kekurangan" class="form-label">Kekurangan</label>
                                <textarea id="kekurangan" name="kekurangan" class="form-control" placeholder="Tambahkan kekurangan produk jika ada"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kelengkapan" class="form-label">Kelengkapan</label>
                                <textarea id="kelengkapan" name="kelengkapan" class="form-control" placeholder="Sebutkan kelengkapan produk"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Gambar Produk</label>
                        <div class="file-input-wrapper" id="dropArea">
                            <div class="file-input-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="file-input-text">
                                <p><strong>Klik atau seret gambar ke sini</strong></p>
                                <p>Mendukung JPG, JPEG, PNG</p>
                            </div>
                            <input type="file" name="gambar" id="gambar" accept="image/*">
                        </div>
                        <div class="file-preview" id="imagePreview">
                            <img id="previewImg" src="#" alt="Preview">
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Simpan Produk
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Image preview script
        document.getElementById('gambar').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    document.getElementById('previewImg').src = e.target.result;
                    document.getElementById('imagePreview').style.display = 'block';
                }

                reader.readAsDataURL(file);
            }
        });

        // Drag and drop functionality
        const dropArea = document.getElementById('dropArea');

        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            dropArea.addEventListener(eventName, highlight, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, unhighlight, false);
        });

        function highlight() {
            dropArea.style.borderColor = 'var(--primary-color)';
            dropArea.style.backgroundColor = '#EEF2FF';
        }

        function unhighlight() {
            dropArea.style.borderColor = 'var(--gray-medium)';
            dropArea.style.backgroundColor = 'var(--gray-light)';
        }

        dropArea.addEventListener('drop', handleDrop, false);

        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;

            if (files.length) {
                document.getElementById('gambar').files = files;

                // Trigger change event manually
                const event = new Event('change');
                document.getElementById('gambar').dispatchEvent(event);
            }
        }

        // Format currency
        document.getElementById('harga').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value === '') return;
            e.target.value = value;
        });
    </script>
</body>

</html>