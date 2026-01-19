<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Pet;
use App\Models\Treatement;
use App\Models\Checkup;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard', [
            'totalOwner'     => Owner::count(),
            'totalPet'       => Pet::count(),
            'totalTreatment' => Treatement::count(),
            'totalCheckup'   => Checkup::count(),
        ]);
    }
}
