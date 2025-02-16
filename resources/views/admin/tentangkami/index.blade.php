<!-- resources/views/admin/descriptions/index.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Manage Descriptions</h1>
    <a href="{{ route('admin.tentangkami.create') }}" class="btn btn-primary">Add New Description</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tentangkami as $tentangkami)
            <tr>
                <td>{{ $tentangkami->id }}</td>
                <td>{!!$tentangkami->content !!}</td>
                <td class="d-flex gap-1">
                    <a href="{{ route('admin.tentangkami.edit', $tentangkami) }}" class="btn btn-warning me-2">Edit</a>
                    <form action="{{ route('admin.tentangkami.destroy', $tentangkami) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this item?');">
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
