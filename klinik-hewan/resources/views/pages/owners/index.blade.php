@extends('layouts.layouts')

@section('title', 'Owner')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h4>Data Owner</h4>
    <a href="{{ route('owners.create') }}" class="btn btn-primary">
        Tambah Owner
    </a>
</div>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th width="50">No</th>
            <th>Nama</th>
            <th width="150">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($owners as $owner)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $owner->name }}</td>
                <td>
                    <a href="{{ route('owners.edit', $owner) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('owners.destroy', $owner) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin hapus data?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center">Data kosong</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
