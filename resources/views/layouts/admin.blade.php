<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" rel="stylesheet">

<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

    <script src="https://unpkg.com/feather-icons"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <title>HMIF ADMIN</title>
    
</head>


<body>
    <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow text-white" style="background-color: #500009;" >
        <h4>Dashboard Admin</h4>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            {{-- <li class="nav-item text-nowrap">
                <a class="nav-link" href="{{ route('logout') }}">Sign out</a>
            </li> --}}
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <div class="border-bottom pb-2 mb-3">
                            <h5 class="mb-3">Home Page</h5>
                            <ul class="nav flex-column">
                                {{-- Dashboard (Di-nonaktifkan) --}}
                                {{-- <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                </li> --}}
                        
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.tentangkami.index') }}">Tentang Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.visimisi.index') }}">Visi Misi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route ('admin.events.index') }}">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route ('admin.aspirasi.index') }}">Aspirasi</a>
                                </li>
                            </ul>
                        </div>

                        <div class="border-bottom pb-2 mb-3">
                            <h5 class="mb-3">Kepengurusan</h5>
                            <ul class="nav flex-column">
                                {{-- Dashboard (Di-nonaktifkan) --}}
                                {{-- <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                </li> --}}
                        
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.kepengurusan.index') }}">Kepengurusan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.visimisi.index') }}">Visi Misi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route ('admin.events.index') }}">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route ('admin.aspirasi.index') }}">Aspirasi</a>
                                </li>
                            </ul>
                        </div>

                        {{-- <li class="nav-item">
                            <h5>Layanan</h5>
                            <a class="nav-link" href="{{ route('admin.layanancctv.index') }}">
                                Layanan CCTV
                            </a>
                            <a class="nav-link" href="{{ route('admin.layananinternet.index') }}">
                                Layanan Internet
                            </a>
                            <a class="nav-link" href="{{ route('admin.layanankomputer.index') }}">
                                Layanan Komputer
                            </a>
                        </li> --}}

                        {{-- <li class="nav-item">
                            <h5>More Pages</h5>
                            <a class="nav-link" href="{{ route('admin.contact.index') }}">
                                Contact
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>
    <script>
        $(document).ready(function () {
        $('.summernote').summernote({
        height: 300,
        placeholder: 'Tulis konten di sini...',
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
});

    </script>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script type="text/javascript">

</script>
</html>
