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
        
        // Check race condition when there are less item available to purchase
//         if($this->productAreNotLongerAvailable($request)) {
//             return $this->sendError('product Are Not Longer Available');
//         }

        // dd($request->user_id);
        // $contents = $request->cart->map(function ($item) {
        //     return $item->name.', '.$item->quantity;
        // })->values()->toJson();

        try {

            // Insert into orders table & Insert into order_product table
            $this->addToOrdersTable($request, null);

            // Decrease the quantities of all the products in the cart
//             $this->decreaseQuantities($request);

            return $this->sendSuccess('تم عملية الإضافة بنجاح');
        } catch (CardErrorException $e) {
            $this->addToOrdersTable($request, $e->getMessage());
            return $this->sendResponse('brands', $e, 'All Brand');
        }
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
