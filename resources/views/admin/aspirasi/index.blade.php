<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aspirasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4" style="color: #500009;">Data Aspirasi</h2>
        <div class="text-center mb-4">
            <div class="border-bottom border-danger mx-auto" style="width: 150px;"></div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Angkatan</th>
                            <th>Kelas</th>
                            <th>Subjek</th>
                            <th>Pesan</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($aspirasi as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->angkatan }}</td>
                            <td>{{ $item->kelas }}</td>
                            <td>{{ $item->subjek }}</td>
                            <td class="text-start">{{ $item->pesan }}</td>
                            <td>{{ $item->created_at->format('d-m-Y H:i') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="text-center mt-3">
                    <form action="{{ route('admin.aspirasi.export') }}" method="GET" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-success px-4">
                            Export to Excel
                        </button>
                    </form>
                    <form action="{{ route('admin.aspirasi.clearAll') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-success px-4">
                            Hapus data aspirasi
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
