<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        $owners = Owner::latest()->get();
        return view('pages.owners.index', compact('owners'));
    }

    public function create()
    {
        return view('pages.owners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Owner::create([
            'name' => $request->name,
        ]);

        return redirect()->route('owners.index')
            ->with('success', 'Owner berhasil ditambahkan');
    }

    public function edit(Owner $owner)
    {
        return view('pages.owners.edit', compact('owner'));
    }

    public function update(Request $request, Owner $owner)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $owner->update([
            'name' => $request->name,
        ]);

        return redirect()->route('owners.index')
            ->with('success', 'Owner berhasil diupdate');
    }

    public function destroy(Owner $owner)
    {
        $owner->delete();

        return redirect()->route('owners.index')
            ->with('success', 'Owner berhasil dihapus');
    }
}
