<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use App\Traits\GeneralTrait;

class OrderController extends Controller
{
    use GeneralTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return $this->sendResponse('orders', $orders);
    }

    public function getOrderProducts($id) {
        $order = Order::find($id);
        $orders = $order->products;
        // return $this->sendResponse('order', $order);
        return $this->sendResponse('orders', $orders);
    }

    public function userOrders($id) {
        $user = User::find($id);
        $orders = $user->orders()->with('products')->get();
        // $orders = $user->orders;
        return $this->sendResponse('orders', $orders);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $order = Order::create($request->all());
                return $this->sendSuccess('added order successfully');
        } catch (\Exception $ex) {
            return $this->sendError($ex->getMessage());
        }
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
        Order::findOrFail($id)->update(['status' => $request->status]);
        return $this->sendSuccess('updated order successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        if(empty($order)) {
            return $this->sendError('Order Not Found');
        }
        try{
            $order->delete();
            return $this->sendSuccess('delete order successfully');
        } catch (\Exception $ex) {
            return $this->sendError($ex->getMessage());
        }
    }
}
