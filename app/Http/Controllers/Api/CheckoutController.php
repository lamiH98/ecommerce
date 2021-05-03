<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cartalyst\Stripe\Exception\CardErrorException;
use App\Http\Requests\CheckoutRequest;
use App\Order;
use App\Product;
use App\OrderProduct;
use App\Traits\GeneralTrait;

class CheckoutController extends Controller
{
    use GeneralTrait;

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->sendSuccess('يوجد خلل');
    }

    public function addToOrdersTable($request, $error) {
        // Insert into orders table
        $order = Order::create([
            'user_id'           => $request->user_id,
            'name'              => $request->name,
            'email'             => $request->email,
            'city'              => $request->city,
            'neighourhood'      => $request->neighourhood,
            'street'            => $request->street,
            'phone'             => $request->phone,
            'discount'          => $request->discount,
            'discount_code'     => $request->code,
            'total'             => $request->total,
            'newTotal'          => $request->newTotal,
            'error'             => $error,
        ]);

        // Insert into order_product table
        foreach($request->cart as $item) {
            OrderProduct::create([
                'order_id'      => $order->id,
                'product_id'    => $item['id'],
                'quantity'      => $item['quantity'],
            ]);
        }
    }

    protected function decreaseQuantities(Request $request) {
        foreach ($request->cart as $cart) {
            $product = Product::find($cart['id']);
            $product->update(['quantity' => $product->quantity - $cart['quantity']]);
        }
    }

    protected function productAreNotLongerAvailable(Request $request) {
        foreach($request->cart as $cart) {
            $product = Product::find($cart['id']);
            if($product->quantity < $cart['quantity']) {
                return true;
            }
        }
        return false;
    }

}
