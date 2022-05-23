<?php

namespace App\Http\Controllers\factor;

use App\Http\Controllers\Controller;
use App\Models\Terms;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function __invoke(Request $request)
    {
        //SELECT * FROM terms
        $terms = Terms::all();
        // dd($terms);



        return view('factor.sections', compact('terms'));
    }
}