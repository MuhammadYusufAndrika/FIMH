<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Acara - Dokumentasi</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div>
    @extends('partials.header')
</div>

<!-- Header Section -->
<div class="bg-gradient py-5 mb-4">
    <div class="container text-center">
        <h1 style="color: #500009" class="display-4 fw-bold mb-3 mt-5">Berita Acara</h1>
        <div class="bg-white rounded-pill py-2 px-4 d-inline-block">
            <h2 class="lead text-muted" style="color: #500009">Dokumentasi Kegiatan</h2>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container mb-5">
    <div class="row justify-content-center">
        @foreach ($beritaacaras as $berita)
            <div class="col-lg-8">
                <div class="card shadow-sm mb-4" onclick="window.location.href='{{ route('beritaacara.show', $berita->id) }}'" style="cursor: pointer;">
                    <div class="card-body">
                        <h3 class="card-title">{!! $berita->title !!}</h3>
                        <div class="d-flex align-items-center text-muted mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3 me-2" viewBox="0 0 16 16">
                                <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                                <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg>
                            <span>{{ date('d F Y', strtotime($berita->created_at)) }}</span>
                        </div>
                        <img src="{{ asset('storage/' . $berita->image) }}" class="img-fluid rounded mb-3" alt="{{ $berita->title }}">
                        <div class="content">
                            {{-- <p class="">{!! $berita->content !!}</p> --}}
                            <p>{!!Str::limit($berita->content, 500)!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
.card {
    border: none;
    transition: transform 0.2s;
}
.card:hover {
    transform: translateY(-5px);
}
.content {
    line-height: 1.6;
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</body>
</html>
