@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Daftar Berita Acara</h2>
    <a href="{{ route('admin.beritaacara.create') }}" class="btn btn-primary mb-3">Tambah Berita Acara</a>
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
            @foreach ($beritaacaras as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->content }}</td>
                    <td><img src="{{ asset('storage/' . $item->image) }}" alt="Berita Acara Image" width="100"></td>
                    <td>
                        <a href="{{ route('admin.beritaacara.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.beritaacara.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus berita acara ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection