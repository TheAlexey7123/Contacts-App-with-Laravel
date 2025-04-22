<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function checkout()
    {
        return auth()->user()
            ->newSubscription('default', config("stripe.price_id"))
            ->checkout();
    }

    public function billing()
    {
        return auth()->user()->redirectToBillingPortal();
    }

    public function freeTrialEnded()
    {
        return view("free-trial-end");
    }
}
