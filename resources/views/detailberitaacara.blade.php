<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $beritaacara->title ?? 'Detail Berita Acara' }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Header --> 
{{-- <div class="bg-gradient py-5 mb-4">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3" style="color: #500009">{{ $beritaacara->title }}</h1>
        <div class="bg-white rounded-pill py-2 px-4 d-inline-block">
            <h2 class="lead text-muted">{{ $beritaacara->created_at->format('d M Y') }}</h2>
        </div>
    </div>
</div> --}}

<!-- Main Content -->
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- Image -->
            @if($beritaacara->image)
            <div class="mb-4 text-center mt-5">
                <img src="{{ asset('storage/' . $beritaacara->image) }}" class="img-fluid rounded shadow" alt="Gambar Berita Acara" style="max-height: 400px; object-fit: cover;">
            </div>
            @endif

            <!-- Content -->
            <div class="card shadow-sm p-4">
                <div class="card-body">
                    <h3 class="mb-3">{!! $beritaacara->title !!}</h3>
                    <div class="mb-3 text-muted">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3 me-2" viewBox="0 0 16 16">
                            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg>
                        <span>{{ $beritaacara->created_at->format('d F Y') }}</span>
                    </div>
                    <div class="content">
                        {!! $beritaacara->content !!}
                    </div>
                </div>
            </div>

            <!-- Back Button -->
            <div class="mt-4 text-center">
                <a href="{{ url('/beritaacara') }}" class="btn btn-outline-primary">
                    Kembali ke Daftar Berita Acara
                </a>
            </div>
        </div>
    </div>
</div>

<style>
.content {
    text-align: justify;
    line-height: 1.7;
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
