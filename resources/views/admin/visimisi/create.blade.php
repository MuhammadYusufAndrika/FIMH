@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Add New Visi Misi</h1>
    <form action="{{ route('admin.visimisi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="visi" class="form-label">Visi</label>
            <textarea class="form-control summernote" id="visi" name="visi" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label for="misi" class="form-label">Misi</label>
            <textarea class="form-control summernote" id="misi" name="misi" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Add Visi Misi</button>
    </form>
</div>
@endsection
