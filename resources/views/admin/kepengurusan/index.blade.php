@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Daftar Divisi</h2>
    <a href="{{ route('admin.kepengurusan.create') }}" class="btn btn-primary mb-3">Tambah Event</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kepengurusans as $kepengurusan)
                <tr>
                    <td>{{ $kepengurusan->id }}</td>
                    <td>{!! $kepengurusan->title !!}</td>
                    <td>{!! $kepengurusan->content!!}</td>
                    <td><img src="{{ asset('storage/' . $kepengurusan->image) }}" alt="Event Image" width="100"></td>
                    <td>
                        <a href="{{ route('admin.kepengurusan.edit', $kepengurusan->id) }}" class="btn btn-warning mb-2">Edit</a>
                        <form action="{{ route('admin.kepengurusan.destroy', $kepengurusan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus event ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection