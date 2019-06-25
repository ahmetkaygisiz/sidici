<?php

namespace App;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    protected $fillable = ['total','shipment','delivered'];

    public function orderItems()
    {
        return $this->belongsToMany(film::class)->withPivot('qty','total');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public static function createOrder(){
        $user = Auth::user();
        $order = $user->orders()->create([
            'total' => Cart::subtotal(),
            'delivered'=> 0,
            'shipment'=> 0
        ]);

        $cartItems = Cart::content();

        foreach ($cartItems as $cartItem){
            $order->orderItems()->attach($cartItem->id,[
                'qty'=>$cartItem->qty,
                'total'=>$cartItem->qty*$cartItem->price
            ]);
        }
    }
}
