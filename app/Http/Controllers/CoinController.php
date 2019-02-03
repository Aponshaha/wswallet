<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Coin;
use App\TempOrder;
use App\Order;

class CoinController extends Controller
{
    public function index()
    {
        return 0;
    }

    public function order()
    {
       $orders= Order::get()->where('type',0);
       //return $orders;
       return view('/vendor/voyager/order')->with('orders',$orders);

    }

    public function sell_order()
    {
       $orders= Order::get()->where('type',1);
       //return $orders;
       return view('/vendor/voyager/sell_order')->with('orders',$orders);

    }

    public function exchange_order()
    {
       $orders= Order::get()->where('type',2);
       //return $orders;
       return view('/vendor/voyager/exchange_order')->with('orders',$orders);

    }
    public function addstock( )
    {
        $coins = Coin::get();
        
        return view('/vendor/voyager/addstock')->with('coins',$coins);
    }

    public function stock_store(Request $request,$id)
    {
        $coins = Coin::get();
        $stock=Coin::find($id);
        $stock->stock +=$request->get('stock');
        $stock->save();
        return back()->withInput();
    }

    public function approve($ord_id)
    {
        # code...
         $order_id = Order::get()->where ('id',$ord_id)->first();
         $order_id->status='1';
         $order_id->save();
         return back()->withInput();
        
    }
    public function destroy($ord_id)
    {
        # code...
         $order_id = Order::get()->where ('id',$ord_id)->first();
         $order_id->status='0';
         $order_id->save();
         return back()->withInput();
        
    }
}
