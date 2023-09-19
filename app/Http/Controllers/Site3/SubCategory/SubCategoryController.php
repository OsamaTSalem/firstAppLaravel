<?php

namespace App\Http\Controllers\Site3\SubCategory;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    function index($id){
        // id -> category -------->> subcategory
        // $sub_categories = SubCategory::Where('category_id','=', $id)->get(); 
        $sub_categories = SubCategory::query()->Where('category_id','=', $id)->get(); 
        // Where('category_id','=', $id) => اي بدي الاي دي الخاص بالفئة الي بساوي الاي دي الي بعته
        return view('site3.sub_category.index', compact('sub_categories'));
    }
}
