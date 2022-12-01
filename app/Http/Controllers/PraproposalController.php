<?php

namespace App\Http\Controllers;

use App\Models\Praproposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class PraproposalController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('praproposal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'judul' => 'required',
            'sumber_ide' => 'required',
            'keminatan' => 'required',
            'tipe_penelitian' => 'required',
            'calon_dosen_pembimbing' => 'required',
            'latar_belakang' => 'required',
            'rumusan_masalah' => 'required',
            'metode_penyelesaian' => 'required',
            'daftar_pustaka' => 'required'
        ]);
        $validated_data['status'] = '0';

        $praproposal = new Praproposal($validated_data);
        $praproposal->user()->associate(Auth::user());
        $praproposal->save();

        return view('praproposal.success');
    }

    /**
     * Display the status of recently submitted Praproposal.
     *
     * @return \Illuminate\Http\Response
     */
    public function status()
    {
        $praproposal = Auth::user()->praproposal()->latest('created_at')->first();
        $status = [
            0 => 'Sedang diverifikasi',
            1 => 'Disetujui',
            2 => 'Ditolak'
        ][$praproposal->status];

        return view('praproposal.status', [
            'status' => $status,
            'praproposal' => $praproposal
        ]);
    }

    /**
     * Generate PDF from recently submitted Praproposal.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $praproposal = Auth::user()->praproposal()->latest('created_at')->first();
        $pdf = Pdf::loadView('praproposal.pdf', $praproposal->toArray());
        $pdf->set_base_path("/www/public/css/");
        return $pdf->stream();
        return view('praproposal.pdf', [
            'praproposal' => $praproposal
        ]);
    }
}
