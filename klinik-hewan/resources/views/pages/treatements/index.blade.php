@extends('layouts.layouts')

@section('title','Data Perawatan')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h4>Data Perawatan</h4>
    <a href="{{ route('treatements.create') }}" class="btn btn-primary">
        Tambah Perawatan
    </a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Jenis Perawatan</th>
            <th>Nama Hewan</th>
            <th>Pemilik</th>
            <th width="120">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($treatements as $t)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td class="text-uppercase">{{ $t->jenis_perawatan }}</td>
            <td>{{ $t->pet->nama }}</td>
            <td>{{ $t->pet->owner->name ?? '-' }}</td>
            <td>
                <a href="{{ route('treatements.edit',$t) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>
                <form action="{{ route('treatements.destroy',$t) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Hapus data?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
