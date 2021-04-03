<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('design.cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if ($duplicates->isNotEmpty()) {
            return back()->with('error', 'Item is already in your cart!');
        }

        $price = $request['price_offer'] ?? $request['price'];
        // , ['image' => $request->image]
        Cart::add($request->id, $request->name,1 ,$price)
            ->associate('App\Product');

        return redirect()->back()->with('success' , 'Item was added to your cart');
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
        // if($request->quantity > $request->productQuantity) {
        //     session()->flash('error', 'We currently do not have enough items in stock.');
        //     return response()->json(['success', false], 400);
        // }
        
        
        // Cart::update($id, $request->quantity);
        // session()->flash('success', 'Quantity was updated successfully');
        // return response()->json(['success', TRUE]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success', 'Item has been removed!');
    }
}
