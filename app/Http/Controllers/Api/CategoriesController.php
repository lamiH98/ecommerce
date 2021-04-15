<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Traits\GeneralTrait;
use App\Http\Requests\CategoryRequest;

class CategoriesController extends Controller
{

    use GeneralTrait;

    public function index() {
//         $categories = Category::with('subcategory')->get();
        $categories = Category::with('subcategory')->where('parent_id', null)->get();
        return $this->sendResponse('categories', $categories);
    }

    public function getChildCategory($id) {
        $categories = Category::where('parent_id', $id)->get();
        return $this->sendResponse('categories', $categories);
    }

    public function store(CategoryRequest $request)
    {
        if($request->hasFile('category_image')) {
            $uploadImage = $request->file('category_image');
            $nameImage   = time() . '.' . $uploadImage->getClientOriginalExtension();
            $direction   = public_path('image/');
            $uploadImage->move($direction , $nameImage);
            $pathImage   = '/image/' . $nameImage;

            $request['image'] = $pathImage;
        }

        Category::create($request->all());
            return $this->returnSuccessMessage('تم عملية الإضافة بنجاح');
    }

    public function changeStatus(Request $request) {
       //validation
        Category::where('id', $request->id)->update(['active' => $request->active]);
        return $this->returnSuccessMessage('تم تغيير الحاله بنجاح');
    }

}
