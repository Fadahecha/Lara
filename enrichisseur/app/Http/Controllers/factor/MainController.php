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

        return view('factor.category', compact('categories'));
    }

    // public function category()
    // {
    //     return "test";
    // }
}

// Method with() on Eloquent model enables for you eager loading.

// That means, when you do request on some model, you could do other requests to the database, if you need this data. Eloquent will fill out you model with loaded data.

// If you do not include some related models to your model and will request them after, Eloquent will apply the new request to DB.

// You could read more about eager loading in the documentation