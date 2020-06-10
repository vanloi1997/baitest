<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class AdminCategoryController extends Controller
{
    //
    public function index()
    {
        $category = Categories::get();
        $viewData = [
            'categories' => $category
        ];
        return view('index' , $category);
    }
    public function store(Request $request)
    {
        $category = new Categories();
        // var_dump($category);
        $category -> name = $request->name;
        $category->save();

        return redirect()->back();
    }
}
