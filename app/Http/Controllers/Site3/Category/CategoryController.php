<?php

namespace App\Http\Controllers\Site3\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index() {
       // $categories = Category::all() ;// array // هذا السطر بجيبلي كل الفئات الي موجودة بالداتا بيز
       $categories = Category::orderBy('id', 'desc')->paginate(5); //رتبهم و أعرض 5 صفوف في الصفحة 
        
        return view('site3.category.index', compact('categories'));
    }

    function create(){
        return view('site3.category.create');
    }
    function store(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);
        Category::create([
            'name'=> $request->name,
            'description'=> $request->description
        ]);
        return redirect()->route('category.index')->with(['msg' => 'Category Added Success 😁'])->with(['type' => 'success']);
    }

    function edit($id){
        $category = Category::query()->findOrFail($id);
        return view('site3.category.edit', compact('category'));
    }
    function update(Request $request, $id){
        
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);
        $category = Category::query()->findOrFail($id);
        $category->update([
            'name'=> $request->name,
            'description'=> $request->description
        ]);
        return redirect()->route('category.index')->with(['msg' => 'Category Updated Success 😁'])->with(['type' => 'success']);

    }

    function destroy($id){
        Category::destroy($id);
        return redirect()->route('category.index')->with(['msg' => 'Category Deleted Success 😁'])->with(['type' => 'danger']);
    }
    
}
