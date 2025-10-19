<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Guest;
use App\Models\GuestReservation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;




class Authcontroller extends Controller
{
    //
    public function register(Request $request)
    {
        $fields = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'num_tel' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',

        ]);
        $user = User::create([
            'nom' => $fields['nom'],
            'prenom' => $fields['prenom'],
            'num_tel' => $fields['num_tel'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),


        ]);
        

        $token = $user->createToken('myapptoken')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response($response, 201);
    }


    public function login(Request $request)
    {
        $fields = $request->validate([

            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        // check email
        $user = User::where('email', $fields['email'])->first();

        // check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'bad creds'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response($response, 201);
    }
    // public function logout(Request $request)
    // {
    //     auth()->user()->tokens()->delete();
    //     return [
    //         'messagge' => 'logged out'
    //     ];
    // }


    public function createGuest(Request $request)
    {
        try {
            $fields = $request->validate([
                'nom' => 'required|string',
                'prenom' => 'required|string',
                'num_tel' => 'required|string',
                'email' => 'required|string',
                'voyages_id' => 'required|integer',
                'nombre_de_passagers' => 'required|integer|min:1',
                'date_reservation' => 'required|date',
            ]);

            // Create the guest
            $guest = Guest::create([
                'nom' => $fields['nom'],
                'prenom' => $fields['prenom'],
                'num_tel' => $fields['num_tel'],
                'email' => $fields['email'],
                'voyages_id' => $fields['voyages_id']
            ]);

            // Create the guest reservation
            $guestReservation = GuestReservation::create([
                'voyage_id' => $fields['voyages_id'],
                'guest_id' => $guest->id,
                'nombre_de_passagers' => $fields['nombre_de_passagers'],
                'date_reservation' => $fields['date_reservation']
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Guest and reservation created successfully',
                'guest' => $guest,
                'reservation' => $guestReservation
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
                'message' => 'Failed to create guest reservation',
                'error' => $e->getMessage()
            ], 500);
        }
    }


}
