<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CartToOrderResource;
use App\Http\Resources\CartResource;
use App\Http\Resources\OrderResource;

use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use App\Http\Requests\OrderRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OrderResource::collection(Order::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $myCarts =  Cart::where('user_id',Auth::user()->id)->where('status','pending')->get();

        if(empty($myCarts)){
            return response()->json([
                'message' => "Cart null",
                'code' => '0'
            ],200);
        }
        $request['order_number'] =  Carbon::now()->format('Ymd').rand(1111,9999);
        $request['user_id'] = Auth::user()->id;
        $carts =  CartResource::collection($myCarts)->response();
       
        $data['data']['items'] =  $carts->original;
        $data['data']['total'] =  totalOriginalCartPrice(json_decode(json_encode($carts),false)->original);
       // $data['data']['detail'] =  ;
        $request['detail'] = json_encode($data);
    
        if (Order::create($request->all())){
           
            foreach($myCarts as $myCart){
                $update = Cart::find($myCart->id);
                $update->status = 'success';
                $update->save();
            }
        
            return response()->json([
                'message' => "Success",
                'code' => '200'
            ],200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      

    }
}
