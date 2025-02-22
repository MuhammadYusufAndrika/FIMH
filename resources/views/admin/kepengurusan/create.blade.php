@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Tambah Divisi</h2>
    <form action="{{ route('admin.kepengurusan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Nama Divisi:</label>
        <textarea type="text" name="title" class="form-control summernote" required>> </textarea>

        <label>content:</label>
        <textarea name="content" class="form-control summernote" required></textarea>

        <label>Gambar:</label>
        <input type="file" name="image" class="form-control">

        <button type="submit" class="btn btn-success mt-3">Simpan</button>
    </form>
</div>
@endsection

