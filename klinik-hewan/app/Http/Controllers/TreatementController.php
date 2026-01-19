<?php

namespace App\Http\Controllers;

use App\Models\Treatement;
use App\Models\Pet;
use Illuminate\Http\Request;

class TreatementController extends Controller
{
    public function index()
    {
        $treatements = Treatement::with('pet')->latest()->get();
        return view('pages.treatements.index', compact('treatements'));
    }

    public function create()
    {
        $pets = Pet::orderBy('nama')->get();
        return view('pages.treatements.create', compact('pets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_perawatan' => 'required|in:vaksin,grooming,pemeriksaan',
            'pet_id' => 'required|exists:pets,id',
        ]);

        Treatement::create([
            'jenis_perawatan' => $request->jenis_perawatan,
            'pet_id' => $request->pet_id,
        ]);

        return redirect()->route('treatements.index')
            ->with('success', 'Perawatan berhasil ditambahkan');
    }

    public function edit(Treatement $treatement)
    {
        $pets = Pet::orderBy('nama')->get();
        return view('pages.treatements.edit', compact('treatement', 'pets'));
    }

    public function update(Request $request, Treatement $treatement)
    {
        $request->validate([
            'jenis_perawatan' => 'required|in:vaksin,grooming,pemeriksaan',
            'pet_id' => 'required|exists:pets,id',
        ]);

        $treatement->update([
            'jenis_perawatan' => $request->jenis_perawatan,
            'pet_id' => $request->pet_id,
        ]);

        return redirect()->route('treatements.index')
            ->with('success', 'Perawatan berhasil diupdate');
    }

    public function destroy(Treatement $treatement)
    {
        $treatement->delete();

        return redirect()->route('treatements.index')
            ->with('success', 'Perawatan berhasil dihapus');
    }
}
