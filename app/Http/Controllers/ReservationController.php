<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string|max:15',
            'reservation_date' => 'required|date',
            'service' => 'required|string|max:255',
        ]);

        try {
            // Simpan ke database
            Reservation::create($validated);

            // Beri respon sukses
            return response()->json(['success' => 'Data berhasil disimpan']);
        } catch (\Exception $e) {
            // Tangani error server (jika ada)
            return response()->json(['error' => 'Terjadi kesalahan pada server'], 500);
        }
    }
}
