<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/style.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <title>Himpunan Informatika Amikom</title>
    <link rel="shortcut icon" href="/assets/images/SPN.png" type="image/x-icon" />
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark"
        style="border-radius: 16px; height: 65px; margin: 20px; padding: 10px; background-color: #500009;">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand me-auto" href="#">
                <img src="/assets/images/Logo.png" alt="HMIF" width="40" height="auto" />
            </a>

            <!-- Navbar Toggler for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Offcanvas Menu -->
            <div class="offcanvas offcanvas-end text-white" style="background-color: #500009" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">HMIF</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white " href="{{ route('kepengurusan') }}">Kepengurusan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('banksoal') }}">Bank Soal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('beritaacara') }}">Berita Acara</a>
                        </li>
                    </ul>
                </div>
            </div>
            

            <!-- Login Icon -->
            <a href="{{ route('login') }}" class="login text-white mx-3">
                <i data-feather="user"></i>
            </a>
        </div>
    </nav>

    <!-- Bootstrap JS & Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-rbsA2VBKQjmrRdWM0FKBjU8r27z3yQu7/JpRrzOHvYI2wM3Hk4uNcWl5UOhR6R" crossorigin="anonymous"></script>

    <!-- Feather Icons Initialization -->
    <script>
        feather.replace();
    </script>

    <!-- AOS Initialization -->
    <script>
        AOS.init();
    </script>
</body>

</html>
