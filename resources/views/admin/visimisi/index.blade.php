<!-- resources/views/admin/visimisi/index.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Manage Visi Misi</h1>
    <a href="{{ route('admin.visimisi.create') }}" class="btn btn-primary">Add New Visi Misi</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Visi</th>
                <th>Misi</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($visimisi as $visimisi)
            <tr>
                <td>{{ $visimisi->id }}</td>
                <td>{!! $visimisi->visi !!}</td>
                <td>{!! $visimisi->misi !!}</td>
                <td>
                    <a href="{{ route('admin.visimisi.edit', $visimisi) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.visimisi.destroy', $visimisi) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
