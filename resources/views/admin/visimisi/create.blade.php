@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Add New Visi Misi</h1>
    <form action="{{ route('admin.visimisi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="visi" class="form-label">Visi</label>
            <input type="text" class="form-control" id="visi" name="visi" required>
        </div>
        <div class="mb-3">
            <label for="misi" class="form-label">Misi</label>
            <textarea class="form-control" id="misi" name="misi" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Add Visi Misi</button>
    </form>
</div>
@endsection
