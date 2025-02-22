<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin HMIF Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #500009;
            --secondary-color: #800010;
        }
        body {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            min-height: 100vh;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            overflow: hidden;
            position: relative;
        }
        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 7px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }
        .card-body {
            position: relative;
            z-index: 1;
        }
        .logo-container {
            background: radial-gradient(circle at center, rgba(80, 0, 9, 0.1) 0%, transparent 70%);
            padding: 2rem;
            border-radius: 50%;
            margin-bottom: 2rem;
        }
        .logo-container img {
            max-width: 150px;
            height: auto;
        }
        .input-group {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .input-group-text {
            background-color: white !important;
            border: none;
            color: var(--primary-color);
        }
        .form-control {
            border: none;
            padding: 12px;
            background-color: white;
        }
        .form-control:focus {
            box-shadow: none;
            background-color: white;
        }
        .btn-login {
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border: none;
            padding: 12px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(80, 0, 9, 0.3);
            transition: all 0.3s ease;
        }
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(80, 0, 9, 0.4);
            background: linear-gradient(90deg, var(--secondary-color), var(--primary-color));
        }
        .login-title {
            color: var(--primary-color);
            font-weight: 800;
            letter-spacing: 0.5px;
        }
        .welcome-text {
            color: #666;
            font-size: 0.95rem;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-8 col-md-6 col-lg-5">
                <div class="card login-card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <div class="text-center">
                            <div class="logo-container d-inline-block">
                                <img src="{{ asset('assets/images/Logo.png') }}" alt="HMIF Logo" class="img-fluid">
                            </div>
                            <h3 class="login-title mb-2">ADMIN HMIF</h3>
                            <p class="welcome-text mb-5">Selamat datang kembali! Silakan masuk ke dashboard Anda</p>
                        </div>
                        
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-4">
                                <label for="username" class="form-label small fw-bold text-secondary">Username</label>
                                <div class="input-group mb-1">
                                    <span class="input-group-text">
                                        <i class="bi bi-person-fill"></i>
                                    </span>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username" required>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label for="password" class="form-label small fw-bold text-secondary">Password</label>
                                <div class="input-group mb-1">
                                    <span class="input-group-text">
                                        <i class="bi bi-lock-fill"></i>
                                    </span>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password" required>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-login text-white w-100 mt-4 mb-3 fw-bold">
                                <i class="bi bi-box-arrow-in-right me-2"></i>Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>