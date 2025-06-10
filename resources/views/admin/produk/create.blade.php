@extends('layouts.template')

@section('title', 'Tambah Produk')

@section('header-title', 'Tambah Produk')
@section('header-subtitle', 'Tambahkan produk baru ke dalam sistem')

@section('search-form')
@endsection

@section('content')
<div class="max-w-5xl mx-auto p-6">
    <div class="bg-gradient-to-br from-indigo-50 to-blue-50 rounded-2xl shadow-lg p-8 animate-fadeIn border border-indigo-100">
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center gap-3">
                <div class="bg-indigo-600 p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">Tambah Produk Baru</h2>
            </div>
        </div>

        <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data" id="productForm" class="space-y-8">
            @csrf

            <div class="w-full bg-gray-100 rounded-full h-2 mb-6">
                <div id="formProgress" class="bg-indigo-600 h-2 rounded-full w-0 transition-all duration-300"></div>
            </div>

            <div class="p-6 border border-gray-100 rounded-xl bg-gray-50">
                <h3 class="font-semibold text-lg text-gray-700 mb-4 flex items-center">
                    <span class="bg-indigo-600 text-white rounded-full w-6 h-6 flex items-center justify-center mr-2 text-sm">1</span>
                    Informasi Dasar
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="form-group">
                        <label for="nama_produk" class="block mb-2 text-sm font-medium text-gray-700">Nama Produk</label>
                        <div class="relative">
                            <input type="text" id="nama_produk" name="nama_produk"
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 pl-10"
                                placeholder="Masukkan nama produk" required>
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                        </div>
                        <p class="validation-message text-xs mt-1 text-red-500 hidden">Nama produk tidak boleh kosong</p>
                    </div>

                    <div class="form-group">
                        <label for="kategori" class="block mb-2 text-sm font-medium text-gray-700">Kategori</label>
                        <div class="relative">
                            <select id="kategori" name="kategori"
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 pl-10 appearance-none"
                                required>
                                <option value="" disabled selected>Pilih kategori</option>
                                <option value="smartphone">Smartphone</option>
                                <option value="tablet">Tablet</option>
                                <option value="smartwatch">Smartwatch</option>
                                <option value="aksesoris">Aksesoris</option>
                                <option value="second">Second</option>
                            </select>
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                                </svg>
                            </div>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                        <p class="validation-message text-xs mt-1 text-red-500 hidden">Pilih kategori produk</p>
                    </div>
                </div>

                <div class="mt-6">
                    <label for="harga" class="block mb-2 text-sm font-medium text-gray-700">Harga (Rp)</label>
                    <div class="relative">
                        <input type="text" id="harga" name="harga"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 pl-10"
                            placeholder="Masukkan harga" required>
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <p class="validation-message text-xs mt-1 text-red-500 hidden">Harga tidak boleh kosong</p>
                    <p class="text-xs text-gray-500 mt-1">Masukkan harga tanpa titik atau koma</p>
                </div>

                <div class="mt-6">
                    <label for="warna" class="block mb-2 text-sm font-medium text-gray-700">Warna Produk</label>
                    <div class="relative">
                        <input type="text" id="warna" name="warna"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 pl-10"
                            placeholder="Contoh: Black, White, Red">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618V15.382a1 1 0 01-1.447.894L15 14M4 6h16M4 10h16M4 14h16M4 18h16" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">Masukkan warna produk, pisahkan dengan koma jika lebih dari satu</p>
                </div>

            </div>

            <div class="p-6 border border-gray-100 rounded-xl bg-gray-50">
                <h3 class="font-semibold text-lg text-gray-700 mb-4 flex items-center">
                    <span class="bg-indigo-600 text-white rounded-full w-6 h-6 flex items-center justify-center mr-2 text-sm">2</span>
                    Detail Produk
                </h3>

                <div class="form-group mb-6">
                    <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-700">Deskripsi Produk</label>
                    <div class="relative">
                        <textarea id="deskripsi" name="deskripsi" rows="4"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            placeholder="Deskripsikan produk secara detail..."></textarea>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">Sertakan fitur, spesifikasi, dan informasi penting lainnya</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="form-group">
                        <label for="kekurangan" class="block mb-2 text-sm font-medium text-gray-700">Kekurangan</label>
                        <div class="relative">
                            <textarea id="kekurangan" name="kekurangan" rows="4"
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Tambahkan kekurangan produk jika ada..."></textarea>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Transparansi meningkatkan kepercayaan pelanggan</p>
                    </div>

                    <div class="form-group">
                        <label for="kelengkapan" class="block mb-2 text-sm font-medium text-gray-700">Kelengkapan</label>
                        <div class="relative">
                            <textarea id="kelengkapan" name="kelengkapan" rows="4"
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Sebutkan kelengkapan yang diterima pelanggan..."></textarea>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Misal: charger, kabel, kotak, dll.</p>
                    </div>
                </div>
            </div>

            <div class="p-6 border border-gray-100 rounded-xl bg-gray-50">
                <h3 class="font-semibold text-lg text-gray-700 mb-4 flex items-center">
                    <span class="bg-indigo-600 text-white rounded-full w-6 h-6 flex items-center justify-center mr-2 text-sm">3</span>
                    Gambar Produk
                </h3>

                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium text-gray-700">Upload Gambar</label>
                    <div id="dropArea" class="relative border-2 border-dashed border-gray-300 bg-gray-50 rounded-lg p-8 text-center cursor-pointer transition hover:bg-indigo-50">
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <p class="text-gray-700 text-lg font-medium mb-1">Klik atau seret gambar ke sini</p>
                        <p class="text-sm text-gray-500">Format yang didukung: JPG, JPEG, PNG (Maks. 5MB)</p>
                        <input type="file" name="gambar" id="gambar" accept="image/jpeg,image/jpg,image/png" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" onchange="previewImage(this)">
                    </div>
                </div>

                <div id="imagePreview" class="mt-6 hidden">
                    <div class="bg-white p-4 rounded-lg border border-gray-100 shadow-sm">
                        <div class="relative inline-block">
                            <img id="previewImg" src="#" alt="Preview" class="max-h-32 w-32 object-cover rounded-lg border">
                            <button type="button" id="removeImage" class="absolute -top-3 -right-3 bg-red-500 text-white rounded-full p-1.5 hover:bg-red-600 shadow-md transition" onclick="removePreviewImage()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <script>
                    function previewImage(input) {
                        const preview = document.getElementById('previewImg');
                        const previewContainer = document.getElementById('imagePreview');
                        const dropArea = document.getElementById('dropArea');

                        if (input.files && input.files[0]) {
                            const reader = new FileReader();

                            reader.onload = function(e) {
                                preview.src = e.target.result;
                                previewContainer.classList.remove('hidden');
                                dropArea.classList.add('bg-indigo-50', 'border-indigo-300');
                            }

                            reader.readAsDataURL(input.files[0]);
                        }
                    }

                    function removePreviewImage() {
                        const input = document.getElementById('gambar');
                        const preview = document.getElementById('previewImg');
                        const previewContainer = document.getElementById('imagePreview');
                        const dropArea = document.getElementById('dropArea');

                        input.value = '';
                        preview.src = '#';
                        previewContainer.classList.add('hidden');
                        dropArea.classList.remove('bg-indigo-50', 'border-indigo-300');
                    }
                </script>
            </div>

            <div class="flex justify-between items-center pt-6 border-t border-gray-200">
                <button type="button" onclick="resetForm()" class="px-6 py-2.5 border border-gray-300 rounded-lg hover:bg-gray-50 transition text-gray-700 font-medium flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                    Reset Form
                </button>

                <script>
                    function resetForm() {
                        if (confirm('Apakah Anda yakin ingin mereset form ini?')) {
                            document.getElementById('productForm').reset();
                            document.getElementById('previewImg').src = '';
                            document.getElementById('imagePreview').classList.add('hidden');
                            document.getElementById('dropArea').classList.remove('bg-indigo-50', 'border-indigo-300');

                            // Reset all validation styles
                            document.querySelectorAll('input, select, textarea').forEach(field => {
                                field.classList.remove('border-red-300');
                            });

                            document.querySelectorAll('.validation-message').forEach(message => {
                                message.classList.add('hidden');
                            });

                            // Reset progress bar
                            document.getElementById('formProgress').style.width = '0%';
                        }
                    }
                </script>
                <button type="submit" id="submitBtn" class="bg-indigo-600 text-white px-8 py-3 rounded-lg hover:bg-indigo-700 transition font-semibold flex items-center gap-2 shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Simpan Produk
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const inputFile = document.getElementById('gambar');
        const dropArea = document.getElementById('dropArea');
        const imagePreview = document.getElementById('imagePreview');
        const previewImg = document.getElementById('previewImg');
        const removeImage = document.getElementById('removeImage');
        const resetBtn = document.getElementById('resetBtn');
        const productForm = document.getElementById('productForm');
        const submitBtn = document.getElementById('submitBtn');
        const formProgress = document.getElementById('formProgress');
        const requiredFields = document.querySelectorAll('input[required], select[required]');
        const validationMessages = document.querySelectorAll('.validation-message');
        const hargaInput = document.getElementById('harga');

        // Fungsi untuk menangani preview gambar
        function handleFileSelect(file) {
            const validTypes = ['image/jpeg', 'image/jpg', 'image/png'];
            const maxSize = 5 * 1024 * 1024; // 5MB

            if (!validTypes.includes(file.type)) {
                alert('Hanya file JPG, JPEG, dan PNG yang diperbolehkan!');
                return;
            }

            if (file.size > maxSize) {
                alert('Ukuran file melebihi batas maksimum 5MB!');
                return;
            }

            const reader = new FileReader();

            reader.onload = function(e) {
                previewImg.src = e.target.result;
                imagePreview.classList.remove('hidden');
                dropArea.classList.add('bg-indigo-50', 'border-indigo-300');
            };

            reader.onerror = function() {
                alert('Terjadi kesalahan saat membaca file.');
            };

            reader.readAsDataURL(file);
            updateProgress();
        }

        // Event listener untuk input file
        inputFile.addEventListener('change', function(e) {
            const file = this.files[0];
            if (file) {
                handleFileSelect(file);
            }
        });

        // Event listener untuk drag and drop
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, function(e) {
                e.preventDefault();
                e.stopPropagation();
            }, false);
        });

        dropArea.addEventListener('dragenter', () => {
            dropArea.classList.add('ring-2', 'ring-indigo-500', 'border-indigo-300');
        });

        dropArea.addEventListener('dragleave', () => {
            dropArea.classList.remove('ring-2', 'ring-indigo-500', 'border-indigo-300');
        });

        dropArea.addEventListener('dragover', () => {
            dropArea.classList.add('ring-2', 'ring-indigo-500', 'border-indigo-300');
        });

        dropArea.addEventListener('drop', function(e) {
            const file = e.dataTransfer.files[0];
            if (file) {
                handleFileSelect(file);
                inputFile.files = e.dataTransfer.files;
            }
            dropArea.classList.remove('ring-2', 'ring-indigo-500');
        });

        // Event listener untuk tombol hapus gambar
        removeImage.addEventListener('click', function() {
            inputFile.value = '';
            previewImg.src = '';
            imagePreview.classList.add('hidden');
            dropArea.classList.remove('bg-indigo-50', 'border-indigo-300');
            updateProgress();
        });

        // Price input formatting
        if (hargaInput) {
            hargaInput.addEventListener('input', function() {
                // Remove non-digits and format with thousand separator
                let value = this.value.replace(/\D/g, '');
                this.value = value;

                // Display formatted value for visual feedback
                let formattedValue = new Intl.NumberFormat('id-ID').format(value);
                this.setAttribute('data-formatted', 'Rp ' + formattedValue);

                updateProgress();
            });
        }

        // Form validation and progress
        function updateProgress() {
            let filled = 0;
            let total = requiredFields.length;

            requiredFields.forEach(field => {
                if (field.value.trim() !== '') {
                    filled++;
                    field.classList.remove('border-red-300');

                    // Hide validation message
                    const messageElement = field.parentElement.parentElement.querySelector('.validation-message');
                    if (messageElement) {
                        messageElement.classList.add('hidden');
                    }
                }
            });

            // Add image to calculation
            if (inputFile.files.length > 0) {
                filled += 0.5; // Mengasumsikan gambar memiliki bobot 0.5 untuk progress
            }

            const progress = Math.min(100, Math.round((filled / total) * 100));
            formProgress.style.width = progress + '%';

            // Set button state based on progress
            if (progress >= 100) {
                submitBtn.classList.remove('opacity-70');
                submitBtn.disabled = false;
            } else {
                submitBtn.classList.add('opacity-70');
                // Jangan nonaktifkan untuk memungkinkan validasi formulir menampilkan kesalahan
            }
        }

        // Input validation
        requiredFields.forEach(field => {
            field.addEventListener('blur', function() {
                validateField(field);
                updateProgress();
            });

            field.addEventListener('input', function() {
                updateProgress();
            });
        });

        function validateField(field) {
            const messageElement = field.parentElement.parentElement.querySelector('.validation-message');

            if (field.value.trim() === '') {
                field.classList.add('border-red-300');
                if (messageElement) {
                    messageElement.classList.remove('hidden');
                }
                return false;
            } else {
                field.classList.remove('border-red-300');
                if (messageElement) {
                    messageElement.classList.add('hidden');
                }
                return true;
            }
        }

        // Form submission
        productForm.addEventListener('submit', function(e) {
            e.preventDefault();

            let valid = true;

            // Validate all required fields
            requiredFields.forEach(field => {
                if (!validateField(field)) {
                    valid = false;
                }
            });

            if (valid) {
                // Show loading state
                submitBtn.disabled = true;
                submitBtn.innerHTML = `
                    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Menyimpan...
                `;

                // Submit form
                this.submit();
            } else {
                // Scroll to first error
                const firstError = document.querySelector('.border-red-300');
                if (firstError) {
                    firstError.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }
            }
        });

        // Reset form
        resetBtn.addEventListener('click', function() {
            const confirmReset = confirm('Anda yakin ingin mengosongkan form?');
            if (confirmReset) {
                productForm.reset();
                inputFile.value = '';
                previewImg.src = '';
                imagePreview.classList.add('hidden');
                dropArea.classList.remove('bg-indigo-50', 'border-indigo-300');

                // Reset validation styles
                requiredFields.forEach(field => {
                    field.classList.remove('border-red-300');
                });
                validationMessages.forEach(message => {
                    message.classList.add('hidden');
                });

                updateProgress();
            }
        });

        // Initialize progress
        updateProgress();
    });
</script>

<style>
    /* Custom animations */
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

    @keyframes fadeOut {
        from {
            opacity: 1;
            transform: translateY(0);
        }

        to {
            opacity: 0;
            transform: translateY(-10px);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 0.3s ease-out forwards;
    }

    .animate-fadeOut {
        animation: fadeOut 0.3s ease-in forwards;
    }

    /* Show formatted price */
    #harga:not(:placeholder-shown)::before {
        content: attr(data-formatted);
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 0.875rem;
        color: #6b7280;
    }
</style>
@endsection