@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Divisi</h2>
    <form action="{{ route('admin.kepengurusan.update', $kepengurusan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Title:</label>
        <textarea name="title" class="form-control summernote" required>{{ $kepengurusan->title }}</textarea>

        <label>Content:</label>
        <textarea name="content" class="form-control summernote" required>{{ $kepengurusan->content }}</textarea>
        
        <label>Gambar:</label>
        <input type="file" name="image" class="form-control">
        @if($kepengurusan->image)
            <div class="mt-2">
                <p>Gambar saat ini:</p>
                <img src="{{ asset('storage/' . $kepengurusan->image) }}" alt="Event Image" width="200">
            </div>
        @endif

        <button type="submit" class="btn btn-success mt-3">Simpan Perubahan</button>
    </form>
</div>
@endsection
