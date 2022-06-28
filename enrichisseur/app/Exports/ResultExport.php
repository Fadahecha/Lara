<?php

namespace App\Exports;


use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ResultExport implements FromView
{

    public function __construct($keyword, $clickedterms, $terms, $phrases){

            $this->keyword = $keyword;
            $this->clickedterms = $clickedterms;
            $this->terms = $terms;
            $this->phrases = $phrases;
    }
   



    public function view(): View
    {

        $keyword = $this->keyword;
        $clickedterms = $this->clickedterms;
        $terms = $this->terms;
        $phrases = $this->phrases;

        return view('export', compact('keyword', 'clickedterms', 'terms', 'phrases'));
        
    }
}