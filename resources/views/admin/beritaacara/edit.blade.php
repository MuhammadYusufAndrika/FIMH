@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Berita Acara</h2>
    <form action="{{ route('admin.beritaacara.update', $beritaacara->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Title:</label>
        <textarea type="text" name="title" class="form-control summernote"> {{ $beritaacara->title }} </textarea>

        <label>Content:</label>
        <textarea name="content" class="form-control summernote" required>{{ $beritaacara->content }}</textarea>
        
        <label>Gambar:</label>
        <input type="file" name="image" class="form-control">
        @if($beritaacara->image)
            <div class="mt-2">
                <p>Gambar saat ini:</p>
                <img src="{{ asset('storage/' . $beritaacara->image) }}" alt="Berita Acara Image" width="200">
            </div>
        @endif

        <button type="submit" class="btn btn-success mt-3">Simpan Perubahan</button>
    </form>
</div>
@endsection
