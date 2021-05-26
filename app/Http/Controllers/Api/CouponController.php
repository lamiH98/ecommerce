<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Coupon;
use App\Traits\GeneralTrait;

class CouponController extends Controller
{
    use GeneralTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::all();
        return $this->sendResponse('coupons', $coupons, 'All Coupon');
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
            $coupon = Coupon::create($request->all());
                return $this->sendSuccess('added coupon successfully');
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
        $coupon = Coupon::findOrFail($id);
        try {
            $coupon->update($request->all());
                return $this->sendSuccess('update coupon successfully');
        } catch (\Exception $ex) {
            return $this->sendError($ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon = Coupon::findOrFail($id);
        if(empty($coupon)) {
            return $this->sendError('Coupon Not Found');
        }
        try{
            $coupon->delete();
            return $this->sendSuccess('delete coupon successfully');
        } catch (\Exception $ex) {
            return $this->sendError($ex->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function save_coupon(Request $request) {
        $coupon = Coupon::where('code', $request->coupon_code)->first();
        if(! $coupon) {
            return back()->with('error', 'Invalid coupon code. please try again');
        }
        session()->put('coupon', [
            'name'      => $coupon->code,
            'discount'  => $coupon->discount(Cart::Subtotal()),
        ]);

        return back()->with('success', 'Coupon has been applied!');
    }

    /**
     * Remove the Coupon In Front End
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete_coupon() {
        session()->forget('coupon');
        return redirect()->route('checkout.index')->with('success', 'Coupon has been removed.');
    }


}
