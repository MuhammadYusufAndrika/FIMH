<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Events</title>
</head>
<body>
    {{-- NeWS --}}

    <section>
        @extends('partials.header')
    </section>
    <section class="events">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 text-center">
                    <h2 class="fw-bold mt-5">{!! $event->title!!}</h2>
                    <img src="{{ asset('storage/' . $event->image) }}" class="img-fluid mt-3 mb-4" style="max-width: 100%; height: auto;" alt="Seminar Nasional Informatika">
                    <p style="text-align: justify;">{!!$event->content!!}</p>
                </div>
            </div>
        </div>
    </section>  
    {{-- End News --}} 

    @extends('partials.footer')
</body>
</html>