<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HMIF Admin Dashboard - Management interface for HMIF website content">
    <title>HMIF Admin Dashboard</title>
    
    <!-- Consolidated CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css">
    <link rel="stylesheet" href="/style.css">
    
    <!-- Preload critical assets -->
    <link rel="preload" href="/style.css" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" as="style">
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow text-white" style="background-color: #500009;" role="navigation">
            <div class="container-fluid">
                <h1 class="h4 mb-0">Dashboard Admin</h1>
                <button class="navbar-toggler d-md-none" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#sidebarMenu" 
                        aria-controls="sidebarMenu" 
                        aria-expanded="false" 
                        aria-label="Toggle navigation menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Navigation -->
            <aside id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <nav class="position-sticky pt-3" role="navigation" aria-label="Main navigation">
                    <section class="sidebar-section border-bottom pb-2 mb-3">
                        <h2 class="h5 mb-3">Home Page</h2>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.tentangkami.index') }}" aria-current="page">
                                    <span class="nav-text">Tentang Kami</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.visimisi.index') }}">
                                    <span class="nav-text">Visi Misi</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.events.index') }}">
                                    <span class="nav-text">Events</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.aspirasi.index') }}">
                                    <span class="nav-text">Aspirasi</span>
                                </a>
                            </li>
                        </ul>
                    </section>

                    <section class="sidebar-section border-bottom pb-2 mb-3">
                        <h2 class="h5 mb-3">Kepengurusan</h2>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.kepengurusan.index') }}">
                                    <span class="nav-text">Kepengurusan</span>
                                </a>
                            </li>
                        </ul>
                    </section>

                    <section class="sidebar-section border-bottom pb-2 mb-3">
                        <h2 class="h5 mb-3">Berita Acara</h2>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.beritaacara.index') }}">
                                    <span class="nav-text">Berita Acara</span>
                                </a>
                            </li>
                        </ul>
                    </section>
                </nav>
            </aside>

            <!-- Main Content Area -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" role="main">
                <div class="content-wrapper">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <!-- Scripts loaded at the end for better performance -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js" defer></script>
    <script src="https://unpkg.com/feather-icons" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Initialize Summernote -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('.summernote').summernote({
                height: 300,
                placeholder: 'Tulis konten di sini...',
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ],
                callbacks: {
                    onImageUpload: function(files) {
                        // Add image upload handling if needed
                    }
                }
            });
        });
    </script>
</body>
</html>