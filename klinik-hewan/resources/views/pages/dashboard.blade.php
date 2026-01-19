@extends('layouts.layouts')

@section('title','Dashboard')

@section('content')

<div class="row g-4">

    <!-- OWNER -->
    <div class="col-xl-3 col-md-6">
        <div class="card stat-card bg-gradient-primary text-white shadow-sm">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-uppercase mb-1">Owner</h6>
                    <h2 class="fw-bold mb-0">{{ $totalOwner }}</h2>
                </div>
                <div class="icon-box">
                    <i class="bi bi-people"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- PET -->
    <div class="col-xl-3 col-md-6">
        <div class="card stat-card bg-gradient-success text-white shadow-sm">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-uppercase mb-1">Hewan</h6>
                    <h2 class="fw-bold mb-0">{{ $totalPet }}</h2>
                </div>
                <div class="icon-box">
                    <i class="bi bi-heart-pulse"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- TREATMENT -->
    <div class="col-xl-3 col-md-6">
        <div class="card stat-card bg-gradient-warning text-white shadow-sm">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-uppercase mb-1">Perawatan</h6>
                    <h2 class="fw-bold mb-0">{{ $totalTreatment }}</h2>
                </div>
                <div class="icon-box">
                    <i class="bi bi-bandaid"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- CHECKUP -->
    <div class="col-xl-3 col-md-6">
        <div class="card stat-card bg-gradient-danger text-white shadow-sm">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-uppercase mb-1">Pemeriksaan</h6>
                    <h2 class="fw-bold mb-0">{{ $totalCheckup }}</h2>
                </div>
                <div class="icon-box">
                    <i class="bi bi-clipboard2-pulse"></i>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
