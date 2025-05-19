<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPendaftaran;

class LandingController extends Controller
{
    public function index()
    {
        $pendaftarans = DataPendaftaran::latest()->get();
        return view('landing', compact('pendaftarans'));
    }
}

