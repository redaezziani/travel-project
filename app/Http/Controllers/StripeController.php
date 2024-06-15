<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Trip;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function checkout(Request $request)
    {
        $tripId = $request->input('trip_id');
        $trip = Trip::findOrFail($tripId);
        $userId = auth()->id();

        // Set the Stripe API key
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        // Create a new Stripe Checkout Session
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $trip->name,
                    ],
                    'unit_amount' => 2000,
                ],
                'quantity' => 1,
            ]],
            'payment_intent_data' => [
                'metadata' => [
                    'trip_id' => $tripId,
                    'user_id' => $userId,
                ],
            ],
            'mode' => 'payment',
            'success_url'
            => route(
                'booking.success'
            ) .
                '?session_id={CHECKOUT_SESSION_ID}&trip_id='
                .
                $tripId
                .
                '&user_id='
                .
                $userId,
            'cancel_url' => route('booking.cancel'),
        ]);

        return redirect()->away($session->url);
    }

    public function success(Request $request)
    {
        // dd the request query
        $sessionId = $request->query('session_id');
        $tripId = $request->query('trip_id');
        $userId = $request->query('user_id');

    
        // Retrieve the Stripe session
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $session = \Stripe\Checkout\Session::retrieve($sessionId);
    
        // Check if the payment was successful
        if ($session->payment_status == 'paid') {
            // Payment was successful, proceed with booking logic
            $booking = $this->processBooking($session, $tripId, $userId);
    
            if ($booking) {
                // Booking created successfully
                return view('booking.success', ['booking' => $booking]);
            } else {
                // Error occurred while creating the booking
                return view('booking.error');
            }
        } else {
            // Payment was not successful
            return view('booking.failed');
        }
    }
    



    public function cancel()
    {
        return view('booking.cancel');
    }

    private function processBooking($session, $tripId, $userId)
    {
        try {
            // if no session, return null
            if (!$session) {
                return null;
            }
             
            $booking = new Booking();
            // to number
            $booking->trip_id =  $tripId; 
            $booking->user_id =  $userId;
            $booking->save();
            return $booking;
        } catch (\Exception $e) {

            dd($e);

            return null;
        }
    }
}
