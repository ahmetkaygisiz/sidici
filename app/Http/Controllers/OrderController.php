<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function Orders($type=''){

        if($type == 'pending'){
            $orders = Order::where('delivered','0')->get();
        }else if($type =='delivered'){
            $orders= Order::where('delivered','1')->get();
        }else{
            $orders = Order::all();
        }

        $orderItems = DB::table('film_order')->get();
        return view('admin.orders',compact(['orders','orderItems']));
    }

}
