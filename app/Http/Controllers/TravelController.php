<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Driver;
use App\Models\Travel;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class TravelController extends Controller
{
    public function choferes(Request $request): View
    {
        $available_drivers = Driver::where('availability', 'available')->paginate(5);

        return view('viajes.choferes', [
            'price' => $request->price,
            'choferes' => $available_drivers
        ]);
    }

    public function end(Request $request): View
    {

        $payment = 1; //fallback
        if (Payment::where("id", Auth::user()->id)->first()) {
            $payment = Payment::where("id", Auth::user()->id)->first();
        }
        $start = '';
        if (!isset($start)) {
            $start = fake()->name();
        }
        $end = '';
        if (!isset($end)) {
            $end = fake()->name();
        }

        Travel::create([
            'payment_id' => $payment,
            'client_id' => Auth::user()->id,
            'driver_id' => Driver::where('name', $request->nombre_chofer)->first(),
            'start' => $start,
            'end' => $end,
            'amount' => $request->price
        ]);

        return view('viajes.disfruta', [
            'nombre_chofer' => $request->nombre_chofer,
            'price' => $request->price
        ]);
    }

    public function review(Request $request): View
    {
        return view('viajes.review', [
            'nombre_chofer' => $request->nombre_chofer,
            'price' => $request->price
        ]);
    }
}
