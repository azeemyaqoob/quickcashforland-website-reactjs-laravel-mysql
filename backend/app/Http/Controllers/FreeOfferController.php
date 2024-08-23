<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FreeOffer;
use App\Mail\FreeOfferCreated;
use Illuminate\Support\Facades\Mail;

class FreeOfferController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string', // Add state field
            'email' => 'required|string',
            'aquire_property' => 'required|string',
            'state' => 'required|string', // Add state field
            'county' => 'required|string', // Add county field
            'city' => 'required|string', // Add city field
            'zip_code' => 'required|string', // Add zip code field
            'apn' => 'nullable|string', // Add APN field
            'more_than_one_property' => 'required|string', // Add more than one property field
            'vacant_land_in_different_state' => 'required|string', // Add vacant land in different state field
            'currently_live_in_different_state' => 'required|string', // Add currently live in different state field
            'priority' => 'required|string', // Add priority field
            'agree' => 'required|boolean', // Add agree field
            'agree1' => 'required|boolean', // Add agree1 field
        ]);

        // Create a new FreeOffer instance
        $freeOffer = FreeOffer::create($validatedData);

        // Get the email address from validated data
        // $emailAddress = $validatedData['email'];

        // Send email
        // Mail::to([$emailAddress, 'yaqoobazeem740@gmail.com'])->send(new FreeOfferCreated($freeOffer));

        // Return a response indicating success
        return response()->json(['message' => 'Free offer created successfully', 'data' => $freeOffer], 201);
    }
}
