<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Coin;
use App\TempOrder;
use App\Order;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**`12
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $coins = Coin::get();
        //return $coins;
        return view('home')->with('coins',$coins);
    }

    public function coin()
    {
        $coins = Coin::get();
        return $coins;
        
    }
    public function find($coin_name)
    {
        $coins = Coin::get()->where('name',$coin_name);
        return response()->json([ $coins]);
    }

    public function store(Request $request)
    {
        # code...
        $order=$request->all();
        $id=Auth::id();
        $user = Auth::user();
        return $order;
        
           
    }

    public function temporder(Request $request)
    {
        # code...

        $this->validate($request, [
            'name' => 'required|max:500'
        ]);
           $id=Auth::id();
           $temp= new TempOrder;
           $temp->u_id =$id;
           $temp->curr_name = $request['name'];
           $temp->price =$request['price'];
           $temp->total =$request['total'];
           $temp->bank =$request['bank'];
           $temp->phone_no =$request['phn'];
           $temp->email =$request['email'];
           $temp->type =$request['type'];
           $temp->ex_total=$request['coin_num'];
           $temp->exchange_to=$request['exchange_coin'];
           $temp->save();
       

        
           return 'Data saved'; 

    }

    public function order(Request $request)
    {
        # code...

        $this->validate($request, [
            'name' => 'required|max:500'
        ]);
           $id=Auth::id();
           $u_name=Auth::user()->name;
           $temp= new Order;
           $temp->u_id =$id;
           $temp->users_name=$u_name;
           $temp->curr_name = $request['name'];
           $temp->amount = $request['amt'];
           $temp->price =$request['price'];
           $temp->total =$request['total'];
           $temp->bank =$request['bank'];
           $temp->phone_no =$request['phn'];
           $temp->email =$request['email'];
           $temp->Trx_no =$request['Trx'];
           $temp->account_no =$request['account'];
           $temp->type =$request['type'];
           $temp->ex_total=$request['coin_num'];
           $temp->exchange_to=$request['exchange_coin'];
           $temp->status = '0';
           $temp->save();
       

        
           return 'Data saved'; 

    }

}

