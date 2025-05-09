<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string|max:15',
            'reservation_date' => 'required|date',
            'service' => 'required|string|max:255',
        ]);

        // Save the data to the database
        Reservation::create($request->all());

        // Return a JSON response for the popup
        return response()->json(['success' => 'Data inputted successfully']);
    }
}