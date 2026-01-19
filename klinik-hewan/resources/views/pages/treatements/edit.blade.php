@extends('layouts.layouts')

@section('title','Edit Perawatan')

@section('content')
<h4>Edit Perawatan</h4>

@if ($errors->any())
<div class="alert alert-danger">{{ $errors->first() }}</div>
@endif

<form method="POST" action="{{ route('treatements.update',$treatement) }}">
@csrf @method('PUT')

<div class="mb-3">
    <label>Jenis Perawatan</label>
    <select name="jenis_perawatan" class="form-control">
        @foreach(['vaksin','grooming','pemeriksaan'] as $j)
            <option value="{{ $j }}"
                {{ $treatement->jenis_perawatan == $j ? 'selected' : '' }}>
                {{ ucfirst($j) }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Hewan</label>
    <select name="pet_id" class="form-control">
        @foreach($pets as $p)
            <option value="{{ $p->id }}"
                {{ $p->id == $treatement->pet_id ? 'selected' : '' }}>
                {{ $p->nama }} ({{ $p->jenis }})
            </option>
        @endforeach
    </select>
</div>

<button class="btn btn-warning">Update</button>
<a href="{{ route('treatements.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
