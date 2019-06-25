<?php

namespace App\Http\Controllers;

use App\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /*
    public function step1()
    {
        if (Auth::check()) {
            return redirect()->route('checkout.shipping');
        }

        return redirect('login');
    }
*/
    public function shipping()
    {
        return view('front.shipping-info');
    }

    public function payment()
    {
        return view('front.payment');
    }
    public function storePayment(Request $request)
    {

        \Stripe\Stripe::setApiKey("sk_test_r9mIklPOqvsMtICpEDVNp8X3");
        // Get the credit card details submitted by the form
        $token = $request->stripeToken;

        // Create a charge: this will charge the user's card
        try {
            $charge = \Stripe\Charge::create(array(
                "amount" => Cart::subtotal()*100, // Amount in cents
                "currency" => "try",
                "source" => $token,
                "description" => "Example charge"
            ));
        } catch (\Stripe\Error\Card $e) {
            // The card has been declined
        }
        //Create the order
        Order::createOrder();
        Cart::destroy();
        return redirect()->route('home');
    }
}