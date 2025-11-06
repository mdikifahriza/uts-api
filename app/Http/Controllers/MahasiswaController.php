<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Ambil semua data mahasiswa dari database
        $mahasiswa = Mahasiswa::all();

        // Return response JSON
        return response()->json([
            'status' => 'success',
            'data' => $mahasiswa
        ], 200);
    }
}