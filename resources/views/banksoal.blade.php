<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Soal</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div>
    @extends('partials.header')
</div>
<!-- Header Section -->
<div class="bg-light py-5 mb-4 ">">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3 mt-5" style="color: #500009">Bank Soal</h1>
        <div class="rounded-pill py-2 px-4 d-inline-block">
            <h2 class="lead text-muted" style="color: #500009">S-1 Informatika</h2>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container">
    <div class="card">
        <div class="card-body">
            <!-- Search and Show entries -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="d-flex align-items-center">
                        <label class="me-2">Show</label>
                        <select class="form-select w-auto">
                            <option>10</option>
                            <option>25</option>
                        </select>
                        <label class="ms-2">entries</label>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <input type="search" class="form-control" placeholder="Search...">
                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th class="text-center" style="width: 5%">No</th>
                            <th style="width: 15%">Semester</th>
                            <th style="width: 15%">Kategori</th>
                            <th style="width: 20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Semester 1</td>
                            <td>
                                <span class="badge bg-success">UTS</span>
                                <span class="badge bg-primary">UAS</span>
                            </td>
                            <td>
                                <a href="https://drive.google.com/drive/folders/19-9zu_l18GeLRjdZk7jwhiKWMZrq1cNN?usp=sharing" class="btn btn-primary btn-sm">Lihat Soal</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Semester 2</td>
                            <td>
                                <span class="badge bg-success">UTS</span>
                                <span class="badge bg-primary">UAS</span>
                            </td>
                            <td>
                                <a href="https://drive.google.com/drive/folders/1qH_CLGcklVRIaMyzqwpxzEtIKgqk7Frz?usp=drive_link" class="btn btn-primary btn-sm">Lihat Soal</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Semester 3</td>
                            <td>
                                <span class="badge bg-success">UTS</span>
                                <span class="badge bg-primary">UAS</span>
                            </td>
                            <td>
                                <a href="https://drive.google.com/drive/folders/1p1s3A0LsdWQJY2Ot_X82mHtIT9BVPz-8?usp=drive_link" class="btn btn-primary btn-sm">Lihat Soal</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Semester 4</td>
                            <td>
                                <span class="badge bg-success">UTS</span>
                                <span class="badge bg-primary">UAS</span>
                            </td>
                            <td>
                                <a href="https://drive.google.com/drive/folders/15oSySLBnSYy4hYPM9KBCwXI3EPKtDkeW?usp=drive_link" class="btn btn-primary btn-sm">Lihat Soal</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Semester 5</td>
                            <td>
                                <span class="badge bg-success">UTS</span>
                                <span class="badge bg-primary">UAS</span>
                            </td>
                            <td>
                                <a href="https://drive.google.com/drive/folders/1jXa3PIn2CcRBYrrbxtBQyz2hzxO4U3Ri?usp=drive_link" class="btn btn-primary btn-sm">Lihat Soal</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td>Semester 6</td>
                            <td>
                                <span class="badge bg-success">UTS</span>
                                <span class="badge bg-primary">UAS</span>
                            </td>
                            <td>
                                <a href="https://drive.google.com/drive/folders/1c8NDp8MPez2oNhEEHmNWTeuuij7AKIUp?usp=drive_link" class="btn btn-primary btn-sm">Lihat Soal</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="row">
                <div class="col-md-6">
                    <h6 class="text-muted fw-light small fst-italic">Note: Gunakan akun students untuk mengakses link bank soal </h6>
                </div>
                <div class="col-md-6">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.btn {
    margin-right: 0.5rem;
}
.table td, .table th {
    vertical-align: middle;
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</body>
</html>