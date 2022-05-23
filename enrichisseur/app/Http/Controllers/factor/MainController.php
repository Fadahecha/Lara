<?php

namespace App\Http\Controllers\factor;

use App\Http\Controllers\Controller;
use App\Models\Terms;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function __invoke()
    {
        //SELECT * FROM terms;
        $terms = Terms::all();
        //  dd($terms);

        //SELECT * FROM terms WHERE category_id = ?
        


        return view('factor.sections', compact('terms'));
    }
}