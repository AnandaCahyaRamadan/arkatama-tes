@extends('layouts.layouts')

@section('title', 'Edit Owner')

@section('content')
<h4 class="mb-3">Edit Owner</h4>

<form action="{{ route('owners.update', $owner) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nama Owner</label>
        <input type="text" name="name"
            class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name', $owner->name) }}" placeholder="Masukkan Nama">

        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button class="btn btn-warning">Update</button>
    <a href="{{ route('owners.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
