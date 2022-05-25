<?php

namespace App\Http\Controllers\factor;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Terms;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function __invoke()
    {
        //SELECT * FROM terms;
        // $terms = Terms::with('category')->get();
        //  dd($terms);

        //SELECT * FROM terms WHERE category_id = ?
        // $terms = Terms::where('category_id', 1)->get();
        $categories = Category::with('terms')->get();

        return view('factor.sections', compact( 'categories'));
    }
}