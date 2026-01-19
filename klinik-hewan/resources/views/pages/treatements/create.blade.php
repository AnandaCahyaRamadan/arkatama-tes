@extends('layouts.layouts')

@section('title','Tambah Perawatan')

@section('content')
<h4>Tambah Perawatan</h4>

@if ($errors->any())
<div class="alert alert-danger">{{ $errors->first() }}</div>
@endif

<form method="POST" action="{{ route('treatements.store') }}">
@csrf

<div class="mb-3">
    <label>Jenis Perawatan</label>
    <select name="jenis_perawatan" class="form-control" required>
        <option value="">-- Pilih --</option>
        <option value="vaksin">Vaksin</option>
        <option value="grooming">Grooming</option>
        <option value="pemeriksaan">Pemeriksaan</option>
    </select>
</div>

<div class="mb-3">
    <label>Hewan</label>
    <select name="pet_id" class="form-control" required>
        <option value="">-- Pilih Hewan --</option>
        @foreach($pets as $p)
            <option value="{{ $p->id }}">
                {{ $p->nama }} ({{ $p->jenis }})
            </option>
        @endforeach
    </select>
</div>

<button class="btn btn-primary">Simpan</button>
<a href="{{ route('treatements.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
