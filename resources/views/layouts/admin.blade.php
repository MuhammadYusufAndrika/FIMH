<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Add other CSS libraries here --> --}}

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/style.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

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
                
                {{-- <div class="row">
                    <div class="col-md-4">

                        <a href="{{ route('admin.carousels.index') }}">
                            <div class="card text-white bg-primary mb-3">
                                <div class="card-header text-light">Total Carousels</div>
                                <div class="card-body">
                                 
                                    <a href="{{ route('admin.carousels.index') }}">
                                        <p class="card-text text-light">Manage all carousels from here.</p>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-header">Total Descriptions</div>
                                <div class="card-body">
                                   
                                    <p class="card-text">Manage all descriptions from here.</p>
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-header">Total Services</div>
                            <div class="card-body">
                                
                                <p class="card-text">Manage all services from here.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-header">Latest Activity</div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Action</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Updated carousel</td>
                                            <td>2024-06-23</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Added new service</td>
                                            <td>2024-06-22</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}

                @yield('content')
            </main>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script type="text/javascript">

</script>
</html>
