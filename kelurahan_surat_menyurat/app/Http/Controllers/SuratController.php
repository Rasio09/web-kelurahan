<?php

// app/Http/Controllers/SuratController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;
use Illuminate\Support\Facades\Auth;

class SuratController extends Controller
{
    public function create()
    {
        return view('surat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pemohon' => 'required|string|max:255',
            'tujuan_surat' => 'required|string|max:255',
        ]);

        Surat::create([
            'nama_pemohon' => $request->nama_pemohon,
            'tujuan_surat' => $request->tujuan_surat,
            'user_id' => Auth::id(),
            'status' => 'pending',
        ]);

        return redirect()->route('surat.create')->with('success', 'Surat created successfully');
    }

    public function index()
    {
        $surats = Surat::where('status', 'pending')->get();
        return view('surat.index', compact('surats'));
    }

    public function verify($id)
    {
        $surat = Surat::findOrFail($id);
        $surat->status = 'verified';
        $surat->save();

        return redirect()->route('surat.index')->with('success', 'Surat verified successfully');
    }
}

