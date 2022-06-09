<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Validations
use App\Http\Requests\Category;

//Models
use App\Category as CategoryModel;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = CategoryModel::orderBy('category_name','ASC')->get();
        return view('category.index',compact('categories'));
    }

    public function store(Category $validated)
    {
        $category = new CategoryModel;
        $category->category_name = $validated->category_name;
        $category->save();
        return back()->with('success','Successfully Added');
    }

    public function delete($id)
    {
        $find_category = CategoryModel::find($id);
        if(!$find_category)
        {
            return back()->with('error','Category not found');
        }
        $find_category->delete();
        return back()->with('success','Category Deleted Successfully');
    }
}
