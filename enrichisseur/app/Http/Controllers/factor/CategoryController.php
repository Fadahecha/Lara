<?php

namespace App\Http\Controllers\factor;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Terms;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function __invoke(Request $request)
    {
 
        $categories = Category::all();
        // dd($categories);
        $terms = Terms::all();
        // dd($terms);
        return view('factor.category', compact('categories', 'terms'));
    }
}
