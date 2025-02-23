@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Event</h2>
    <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Title:</label>
        <textarea class="form-contro summernote" id="title" name="title" rows="5" required>{!! $event->title !!}</textarea>
        

        <label>Content:</label>
        <textarea class="form-control summernote" name="content" required>{{ old('content', $event->content ?? '') }}</textarea>

        
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


