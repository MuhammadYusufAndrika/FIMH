@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Event</h2>
    <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Title:</label>
        <input type="text" name="title" class="form-control summernote" value="{{ $event->title }}" required>

        <label>Content:</label>
        <textarea class="form-controlsummernote" name="content">{{ old('content', $event->content ?? '') }}</textarea>

        
        <label>Gambar:</label>
        <input type="file" name="image" class="form-control">
        @if($event->image)
            <div class="mt-2">
                <p>Gambar saat ini:</p>
                <img src="{{ asset('storage/' . $event->image) }}" alt="Event Image" width="200">
            </div>
        @endif

        <button type="submit" class="btn btn-success mt-3">Simpan Perubahan</button>
    </form>
</div>
@endsection


