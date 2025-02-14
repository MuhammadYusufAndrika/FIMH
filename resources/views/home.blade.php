@include('partials/header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('partials/header')
    <title>Document</title>
</head>
<body>
    {{-- Tentang Kami --}}
    <section class="tentangkami">
        <div class="bg-light py-5">
            <div class="container my-5">
                <div id="Home" class="row align-items-center">
                    <!-- Kolom Kiri (Teks) -->
                    <div class="col-md-6 ">
                        <h2 class="fw-bold" style="color: #500009">HMIF</h2>
                        <h2 class="fw-bold" style="color: #500009">Universitas Amikom</h2>
                        <h2 class="fw-bold" style="color: #500009">Yogyakarta</h2>
                        <p style="text-align: justify;">
                            {{ $tentangkami->content ?? 'Deskripsi belum tersedia.' }}
                        </p>
                        <a href="https://www.youtube.com/@hmifamikomyogyakarta7239"><button type="button" style="background-color: #500009; color: white; border: none; padding: 10px 10px; border-radius: 10px;">Youtube</button></a>
                        
                    </div>
                    <!-- Kolom Kanan (Gambar) -->
                    <div class="col-md-6 text-center">
                        <img src="{!! asset('assets/images/Logo.png') !!}" alt="Logo HMIF" class="img-fluid rounded" style="max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </div>    
    </section>  
    
    {{-- End Tentang Kami --}} 

   {{-- Visi Misi --}}
<section class="visimisi">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center mb-4" style="color: #500009">VISI MISI</h1>
                <h4 class="mb-3">VISI</h4>
                <ul class="list-group" style="text-align: justify;">
                    @foreach($visi as $item)
                        <li class="list-group-item">{{ $item }}</li>
                    @endforeach
                </ul>
            
                <h4 class="mb-3">MISI</h4>
                <ul class="list-group" style="text-align: justify;">
                    @foreach($misi as $item)
                        <li class="list-group-item">{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
    {{-- End Visi Misi --}}

    {{-- event --}}
    <section class="event">
        <div class="container">
            <div class="pilih-paket text-center my-5">
                <h1 class="text-center mb-4" style="color:#500009">Kabar Informatika</h1>
            </div>
            <div class="row">
                @foreach($events as $event)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="{{ $event->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $event->title }}</h5>
                                <p class="card-text">{{ Str::limit($event->content, 300) }}</p>
                                <a href="{{ route('events.show', $event->id) }}" class="btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    {{-- end event --}}
    
    {{-- event--}}
    {{-- <section class="event">
        <div class="container">
            <div class="pilih-paket text-center my-5">
                <h1 class="text-center mb-4" style="color:#500009">Kabar Informatika</h1>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/assets/images/Cover.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Seminar Nasional Informatika</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut debitis perferendis dolores libero? Molestias harum enim sunt officia soluta dolores quis, nesciunt, sint itaque eum temporibus modi distinctio vitae? Quasi.</p>
                </div>
                <div class="card-body">
                  <a href="#" class="card-link">Selengkapnya</a>
                </div>
              </div>
        </div>
    </section> --}}
    {{-- End Event --}}

    {{-- Aspirasi --}}
    <section class="aspirasi">
        <div class="">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="card shadow-sm">
                            <div class="card-body p-4">
                                <h2 class="text-center mb-2" style="color: #500009">ASPIRASI</h2>
                                <div class="text-center mb-4">
                                    <div class="border-bottom border-danger mx-auto" style="width: 100px;"></div>
                                </div>
                                
                                <p class="text-center mb-4">Tuliskan saran dan kritik untuk perkuliahan dan keinginanmu untuk Informatika</p>
                                
                                <form>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="angkatan" class="form-label">Angkatan</label>
                                                <input type="text" class="form-control" id="angkatan" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="kelas" class="form-label">Kelas</label>
                                                <input type="text" class="form-control" id="kelas" required>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="mb-3">
                                        <label for="subjek" class="form-label">Subjek</label>
                                        <input type="text" class="form-control" id="subjek" required>
                                    </div>
        
                                    <div class="mb-4">
                                        <label for="pesan" class="form-label">Pesan/Aspirasi</label>
                                        <textarea class="form-control" id="pesan" rows="5" required></textarea>
                                    </div>
        
                                    <div class="text-center">
                                        <button type="submit" class="px-4 rounded" style="background-color: #500009; color: white;">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Aspirasi --}}

    {{-- footer --}}
    @include('partials/footer')
    {{-- End Footer --}}
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>