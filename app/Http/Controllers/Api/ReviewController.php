<?php

namespace App\Http\Controllers\Api;

use App\Review;
use App\Product;
use Illuminate\Http\Request;
use App\Traits\GeneralTrait;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    use GeneralTrait;
    
    public function index(){
        $reviews = Review::all();
        return $this->sendResponse('reviews', $reviews);
    }

    public function getAvg($id) {
        $product = Product::findOrFail($id)->reviews()->avg('rating');
        $productAvg = number_format($product, 2);
        return $this->sendResponse('reviews', $productAvg);
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
            Review::create($request->all());
                return $this->sendSuccess('added review successfully');
        } catch (\Exception $ex) {
            return $this->sendError($ex->getMessage());
        }
    }

}
