<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $kepengurusan->title }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<section>
    @extends('partials.header')

</section>
    <!-- Header -->
    <section>
        <div class="container py-5 text-center mt-5">
            <h1 class="fw-bold">{{ $kepengurusan->title }}</h1>
        </div>
    </section>
<!-- Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Gambar -->
            <div class="col-md-6 mb-4">
                @if ($kepengurusan->image)
                    <img src="{{ asset('storage/' . $kepengurusan->image) }}" class="img-fluid rounded shadow" alt="{{ $kepengurusan->title }}">
                @else
                    <img src="https://via.placeholder.com/600x400?text=No+Image" class="img-fluid rounded shadow" alt="Default Image">
                @endif
            </div>
            <!-- Deskripsi -->
            <div class="col-md-6">
                <h3 class="mb-3">{{ $kepengurusan->title }}</h3>
                <p class="text-muted">{{ $kepengurusan->content }}</p>
                <a href="{{ route('kepengurusan') }}" class="btn btn-secondary mt-3">Kembali</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class=""></footer>
    <div>
        @extends('partials.footer')
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
