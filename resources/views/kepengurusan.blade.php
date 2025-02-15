<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kepengurusan - Organisasi</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
</head>
<body>

    @extends('partials.header')
<!-- Header Section -->
<header class="bg-light py-5 text-center mt-5 ">
    <div class="container">
        <h1 class="display-4 fw-bold" style="color: #500009">Himpunan Mahasiswa Informatika Amikom Yogyakarta</h1>
        <p class="lead text-muted">Struktur Organisasi & Kepengurusan</p>
    </div>
</header>

<!-- Departments Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Pengurus Harian -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up">
                <div class="card h-100 shadow-sm hover-card">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <img src="/api/placeholder/80/80" class="rounded-circle bg-warning p-2" alt="Pengurus">
                        </div>
                        <h5 class="card-title fw-bold">Pengurus Harian</h5>
                        <p class="card-text text-muted">Mengelola kegiatan organisasi sehari-hari</p>
                        <a href="{{ route('kepengurusan.show', 1) }}" class="btn btn-warning px-4">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Departemen Aspirasi -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 shadow-sm hover-card">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <img src="/api/placeholder/80/80" class="rounded-circle bg-info p-2" alt="Aspirasi">
                        </div>
                        <h5 class="card-title fw-bold">Divisi Aspirasi & Advokasi</h5>
                        <p class="card-text text-muted">Menampung dan menyalurkan aspirasi anggota</p>
                        <a href="{{ route('kepengurusan.show', 2) }}" class="btn btn-warning px-4">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Departemen Internal -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow-sm hover-card">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <img src="/api/placeholder/80/80" class="rounded-circle bg-success p-2" alt="Internal">
                        </div>
                        <h5 class="card-title fw-bold">Divisi Litbang</h5>
                        <p class="card-text text-muted">Pengembangan Teknologi dan Riset</p>
                        <a href="{{ route('kepengurusan.show', 3) }}" class="btn btn-warning px-4">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Departemen RISTEK -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 shadow-sm hover-card">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <img src="/api/placeholder/80/80" class="rounded-circle bg-primary p-2" alt="RISTEK">
                        </div>
                        <h5 class="card-title fw-bold">Divisi Keorganisasian</h5>
                        <p class="card-text text-muted">Mengkoordinasi kegiatan internal organisasi</p>
                        <a href="{{ route('kepengurusan.show', 4) }}" class="btn btn-warning px-4">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Departemen Eksternal -->
            <div class="col-md-6 col-lg-3 mx-auto" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 shadow-sm hover-card">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <img src="/api/placeholder/80/80" class="rounded-circle bg-danger p-2" alt="Eksternal">
                        </div>
                        <h5 class="card-title fw-bold">Divisi Humas</h5>
                        <p class="card-text text-muted">Menjalin hubungan dengan pihak luar</p>
                        <a href="{{ route('kepengurusan.show', 5) }}" class="btn btn-warning px-4">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    @extends('partials.footer')
</section>

<style>
    .hover-card {
        transition: transform 0.3s ease-in-out;
    }
    .hover-card:hover {
        transform: translateY(-5px);
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true
    });
</script>

</body>
</html>