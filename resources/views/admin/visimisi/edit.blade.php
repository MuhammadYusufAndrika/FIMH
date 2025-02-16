@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Visi Misi</h1>
    <form action="{{ route('admin.visimisi.update', $visimisi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="visi" class="form-label">Visi</label>
            <textarea class="form-contro summernote" id="visi" name="visi" rows="5" required>{!! $visimisi->visi !!}</textarea>
        </div>
        <div class="mb-3">
            <label for="misi" class="form-label">Misi</label>
            <textarea class="form-control summernote" id="misi" name="misi" rows="5" required>{!! $visimisi->misi !!}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update Visi Misi</button>
    </form>
</div>
@endsection
