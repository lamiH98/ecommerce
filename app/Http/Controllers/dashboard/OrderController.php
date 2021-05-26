<?php

namespace App\Http\Controllers\Dashboard;

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
        return view('dashboard.order.index' , compact('orders'));
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        $products = $order->products;
        return view('dashboard.order.show', compact('order', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD
        $order = Order::findOrFail($id);
        return  view('dashboard.order.edit', compact('order'));
=======
        //
>>>>>>> 2381c3773d64648a3e592ce3dad493e5e041b35f
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
<<<<<<< HEAD
        Order::findOrFail($id)->update(['status' => $request->status]);
            return redirect()->route('order.index')->with('success', __('message.update_success'));
=======
        //
>>>>>>> 2381c3773d64648a3e592ce3dad493e5e041b35f
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
            return redirect()->route('order.index')->with('error', __('message.not_found'));
        }
        try{
            $order->delete();
            return redirect()->back()->with('success',  __('message.delete_success'));
        }
        catch(ModelNotFoundException $ModelNotFoundException) {
            return redirect()->route('order.index')->with('error', __('message.error_delete'));
        }
    }
}
