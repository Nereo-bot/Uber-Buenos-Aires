<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\View\View;
use LVR\CreditCard\CardCvc;
use LVR\CreditCard\CardNumber;
use LVR\CreditCard\CardExpirationYear;
use LVR\CreditCard\CardExpirationMonth;

class PaymentController extends Controller
{
    public function options(Request $request): View {

        return view('pagos.pago', [
            'price' => $request->price,
            'nombre_chofer' => $request->nombre_chofer
        ]);
    }

    public function card(Request $request): View {
        return view('pagos.tarjeta', [
            'nombre_chofer' => $request->nombre_chofer,
            'price' => $request->price
        ]);
    }

    public function pay(Request $request): View {
        $request->validate([
            'nombre' => ['required', 'string'],
            'numero' => ['required', 'string', new CardNumber],
            'expiration_year' => ['required', new CardExpirationYear($request->expiration_month)],
            'expiration_month' => ['required', new CardExpirationMonth($request->expiration_year)],
            'cvv' => ['required', new CardCvc($request->numero)]
        ]);

        Payment::create([
            'amount' => $request->price,
            'method' => 'card'
        ]);

        return view('viajes.disfrute', ['price' => $request->price, 'nombre_chofer' => $request->nombre_chofer]);
    }
}
