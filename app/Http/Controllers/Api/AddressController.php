<?php

namespace App\Http\Controllers\Api;

use App\Address;
use Illuminate\Http\Request;
use App\Traits\GeneralTrait;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    use GeneralTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adress = Address::all();
        return $this->sendResponse('adress', $adress, 'All Dress');
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
            Address::create($request->all());
                return $this->sendSuccess('added address successfully');
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
        $address = Address::findOrFail($id);
        $address->update($request->all());
            return $this->sendSuccess('update address successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $address = Address::findOrFail($id);
        if(empty($address)) {
            return $this->sendError('Address Not Found');
        }
        try{
            $address->delete();
            return $this->sendSuccess('delete address successfully');
        }
        catch(\Exception $ex) {
            return $this->sendError($ex->getMessage());
        }
    }
}
