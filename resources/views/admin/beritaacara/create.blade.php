@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Tambah Acara</h2>
    <form action="{{ route('admin.beritaacara.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Judul:</label>
        <input type="text" name="title" class="form-control summernote" required>

        <label>content:</label>
        <textarea name="content" class="form-control summernote" required></textarea>

        <label>Gambar:</label>
        <input type="file" name="image" class="form-control">

        <button type="submit" class="btn btn-success mt-3">Simpan</button>
    </form>
</div>
@endsection

