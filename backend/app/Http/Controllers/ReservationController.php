<?php

namespace App\Http\Controllers;

use App\Models\GuestReservation;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function reserver(Request $request)
    {
        try {
            // Validate the request
            $validated = $request->validate([
                'voyage_id' => 'required|integer',
                'user_id' => 'required|integer',
                'nombre_de_passagers' => 'required|integer|min:1',
                'date_reservation' => 'required|date',
            ]);

            $reservation = new Reservation;
            $reservation->voyage_id = $validated['voyage_id'];
            $reservation->user_id = $validated['user_id'];
            $reservation->nombre_de_passagers = $validated['nombre_de_passagers'];
            $reservation->date_reservation = $validated['date_reservation'];

            $reservation->save();

            return response()->json([
                'success' => true,
                'message' => 'Reservation created successfully',
                'reservation' => $reservation
            ], 201);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create reservation',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function reserverGuest(Request $request)
    {
        // $request['date_reservation'] = Carbon::createFromFormat('m/d/Y', $request->date_reservation)->format('d-m-Y');

        $reservation = new GuestReservation();
        $reservation->voyage_id = $request['voyage_id'];
        $reservation->guest_id = $request['guest_id'];
        $reservation->nombre_de_passagers = $request['nombre_de_passagers'];
        $reservation->date_reservation = $request['date_reservation'];
        $reservation->save();
    }
}
