<!-- resources/views/admin/descriptions/create.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Add New </h1>
    <form action="{{ route('admin.tentangkami.store') }}" method="POST">
        @csrf
        {{-- <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div> --}}
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Add Description</button>
    </form>
</div>
@endsection
