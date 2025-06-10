<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Toko Berkah Gadget</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?q=80&w=1920&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 900px;
            overflow: hidden;
            display: flex;
            position: relative;
            height: 600px;
        }

        .blue-section {
            background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
            width: 40%;
            padding: 60px 40px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: absolute;
            left: 0;
            height: 100%;
            transition: transform 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            z-index: 2;
        }

        .form-section {
            position: relative;
            width: 100%;
            height: 100%;
            transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .login-form,
        .register-form {
            position: absolute;
            top: 0;
            width: 60%;
            height: 100%;
            padding: 20px 60px;
            transition: all 0.8s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            opacity: 1;
        }

        .register-form h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 25px;
            text-align: left;
            font-weight: 600;
        }

        .register-form .form-group {
            margin-bottom: 20px;
            /* Mengurangi margin bottom */
        }

        .register-form input {
            padding: 12px 15px 12px 45px;
            /* Mengurangi padding vertikal */
        }

        .register-form button[type="submit"] {
            margin-top: 15px;
            /* Mengurangi margin top button */
        }

        .register-form .social-login {
            margin-top: 20px;
            /* Mengurangi margin top social login */
        }

        .login-form {
            left: 40%;
            opacity: 1;
            z-index: 1;
        }

        .register-form {
            left: 28%;
            opacity: 0;
            z-index: 1;
        }

        .container.register-mode .blue-section {
            transform: translateX(150%);
        }

        .container.register-mode .login-form {
            transform: translateX(-40%);
            opacity: 0;
            pointer-events: none;
        }

        .container.register-mode .register-form {
            transform: translateX(66.6%);
            opacity: 1;
            pointer-events: all;
            transition-delay: 0.2s;
        }

        .container.register-mode .form-section {
            transform: translateX(-66.6%);
        }

        .blue-section h2 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .blue-section p {
            font-size: 14px;
            margin-bottom: 30px;
        }

        .blue-btn {
            background: transparent;
            border: 2px solid white;
            color: white;
            padding: 10px 30px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .blue-btn:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .form-section h2 {
            color: #333;
            font-size: 28px;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
        }

        .input-group {
            position: relative;
            display: flex;
            align-items: center;
        }

        .form-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #4e73df;
            z-index: 1;
        }

        input {
            width: 100%;
            padding: 15px 15px 15px 45px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
            background-color: white;
        }

        input:focus {
            outline: none;
            border-color: #4e73df;
            box-shadow: 0 0 0 3px rgba(78, 115, 223, 0.2);
        }

        button[type="submit"] {
            background: #4e73df;
            color: white;
            width: 100%;
            border: none;
            border-radius: 8px;
            padding: 15px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        button[type="submit"]:hover {
            background: #3a56c5;
        }

        .social-login {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            gap: 15px;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background: #e0e0e0;
        }

        .social-icon i {
            color: #333;
            font-size: 18px;
        }

        .error-container {
            background-color: rgba(254, 215, 215, 0.9);
            border-left: 4px solid #e53e3e;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 25px;
            position: relative;
        }

        .register-form {
            display: none;
        }

        .container.register-mode .login-form {
            display: none;
            opacity: 0;
        }

        .container.register-mode .register-form {
            display: block;
            opacity: 1;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                max-width: 480px;
                height: auto;
                /* Tinggi otomatis pada mobile */
            }

            .blue-section,
            .form-section {
                width: 100%;
                padding: 40px;
                /* Padding yang sama untuk mobile */
            }

            .blue-section {
                order: -1;
                min-height: 200px;
                /* Tinggi minimum untuk area biru */
            }

            .container.register-mode .blue-section {
                transform: translateY(0);
                order: 1;
            }

            .container.register-mode .form-section {
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="container" id="container">
        <div class="blue-section">
            <h2>Selamat Datang!</h2>
            <p>Masuk dan mulai belanja di Toko Berkah Gadget</p>
            <button class="blue-btn" id="register-btn">Daftar</button>
        </div>


        <div class="form-section">
            <div class="login-form">
                <h2>Login</h2>

                @if ($errors->any())
                <div class="error-container">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                                placeholder="Masukkan email Anda" autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" id="password" required
                                placeholder="Masukkan password Anda">
                        </div>
                    </div>

                    <button type="submit">Login</button>
                </form>

                <div class="social-login">
                    <div class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <div class="social-icon">
                        <i class="fab fa-google"></i>
                    </div>
                    <div class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                </div>
            </div>

            <div class="register-form">

                <h2>registrasi</h2>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <div class="input-group">
                            <i class="fas fa-user"></i>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" required
                                placeholder="Masukkan nama Anda" autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="reg-email">Email</label>
                        <div class="input-group">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" id="reg-email" value="{{ old('email') }}" required
                                placeholder="Masukkan email Anda">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="reg-password">Password</label>
                        <div class="input-group">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" id="reg-password" required
                                placeholder="Masukkan password Anda">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Konfirmasi Password</label>
                        <div class="input-group">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password_confirmation" id="password_confirmation" required
                                placeholder="Konfirmasi password Anda">
                        </div>
                    </div>

                    <button type="submit">Registrasi Akun</button>
                </form>


            </div>
        </div>
    </div>

    <script>
        const container = document.getElementById('container');
        const registerBtn = document.getElementById('register-btn');

        registerBtn.addEventListener('click', () => {
            container.classList.toggle('register-mode');

            // Ubah teks tombol dan konten berdasarkan mode dengan delay
            setTimeout(() => {
                if (container.classList.contains('register-mode')) {
                    registerBtn.textContent = 'Masuk';
                    document.querySelector('.blue-section h2').textContent = 'Mulai Sekarang';
                    document.querySelector('.blue-section p').textContent = 'Sudah memiliki akun? Silakan login untuk melanjutkan';
                } else {
                    registerBtn.textContent = 'Daftar';
                    document.querySelector('.blue-section h2').textContent = 'Selamat Datang!';
                    document.querySelector('.blue-section p').textContent = 'Masuk dan mulai belanja di Toko Berkah Gadget';
                }
            }, 400); // Delay untuk menunggu animasi selesai
        });
    </script>
</body>

</html>