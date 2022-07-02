<?php

namespace App\Http\Controllers\factor;

use App\Exports\ResultExport;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Keyword;
use App\Models\Phrase;
use App\Models\PhraseTerm;
use App\Models\Terms;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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

        return view('factor.category1', compact('categories'));
    }

    // public function category()
    // {
    //     return "test";
    // }

    public function result1(Request $request){

        $request->validate([
            'keyword' => 'required'
        ]);


        $clickedterms = $request->clickedterms;
        $keyword = $request->keyword;

        //tomo todos los terminos que fueron clikados y creo una coleccion laravel con ellos
        $terms = Terms::whereIn('id', $clickedterms)->get();
        // dd($terms);
        // dd($request->all());

        ///////////////////////////////////
        $sKeyword = new Keyword();
        $sKeyword->name=$keyword;
        $sKeyword->user_id=auth()->user()->id;
        $sKeyword->save();
        //////////////////////////////////

        /////////////////////////////////
        $sPhrase = new Phrase();
        $sPhrase->keyword_id=$sKeyword->id;
        $sPhrase->user_id=auth()->user()->id;
        $sPhrase->save();
        //////////////////////////////////

        foreach($clickedterms as $clickedterm){

            $sphraseTerms = new PhraseTerm();
            $sphraseTerms->phrase_id=$sPhrase->id;
            $sphraseTerms->terms_id=$clickedterm;
            $sphraseTerms->timestamps = false;
            $sphraseTerms->save();
        }
        
        

        //creo una nueva tabla para clasificar todo eso por categoria
        $result = [];

        $categories = Category::all();

        // $result[1]['name'] = null;
        // $result[2]['name'] = null;
        // $result[3]['name'] = null;
        // $result[4]['name'] = null;
        // $result[5]['name'] = null;
        // $result[6]['name'] = null;

        foreach ($categories as $category){
            $result[$category->id]['name']= null;
        }
        // dd($result);
        

        //este foreach va a llenar result[] y en cada linea habra una primera llave(category_id), la segunda los id de terms y la tercera los nombres de terms
        foreach($terms as $term){
           $result[$term->category_id][$term->id]=$term->name_terms;
        }

        //dd($result);

        $phrases=[];

        foreach($result[1] as $cat1){
            foreach($result[2] as $cat2){
                foreach($result[3] as $cat3){
                    foreach($result[4] as $cat4){
                        foreach($result[5] as $cat5){
                            foreach($result[6] as $cat6){
                                array_push($phrases, 
                                $cat1 .' '. $keyword . ' ' . $cat2 . ' ' . 
                                $cat3 . ' ' . $cat4 . ' ' . $cat5 . ' ' . $cat6);
                            }
                        }
                    }
                }
            }
        }
        
            
        return view('result1', compact('keyword', 'clickedterms', 'terms', 'phrases', 'sPhrase'));
    }

    public function export($phrase_id){

        $phrase = Phrase::where('id', $phrase_id)->first();
        $keyword_id = $phrase->keyword_id;

        $k= Keyword::where('id', $keyword_id)->first();
        $keyword = $k->name;

        $clickedterms = PhraseTerm::where('phrase_id', $phrase_id)->pluck('terms_id');

        $terms = Terms::whereIn('id', $clickedterms)->get();

        //creo una nueba tabla para clasificar todo eso por categoria
        $result = [];

        $categories = Category::all();

        foreach ($categories as $category){
            $result[$category->id]['name']= null;
        }

        // $result[1]['name'] = null;
        // $result[2]['name'] = null;
        // $result[3]['name'] = null;
        // $result[4]['name'] = null;
        // $result[5]['name'] = null;
        // $result[6]['name'] = null;

        // dd($result);
        

        //este foreach va a llenar result[] y en cada linea habra una primera llave(category_id), la segunda los id de terms y la tercera los nombres de terms
        foreach($terms as $term){
           $result[$term->category_id][$term->id]=$term->name_terms;
        }

        //dd($result);

        $phrases=[];

        foreach($result[1] as $cat1){
            foreach($result[2] as $cat2){
                foreach($result[3] as $cat3){
                    foreach($result[4] as $cat4){
                        foreach($result[5] as $cat5){
                            foreach($result[6] as $cat6){
                                array_push($phrases, $cat1 .' '. $keyword . ' ' . $cat2 . ' ' . $cat3 . ' ' . $cat4 . ' ' . $cat5 . ' ' . $cat6);
                            }
                        }
                    }
                }
            }
        }





        
            return Excel::download(new ResultExport($keyword, $clickedterms, $terms, $phrases), 'Export-'.$keyword.'.xlsx');
        // return view('export', compact('keyword', 'clickedterms', 'terms', 'phrases'));
    }

}

// Method with() on Eloquent model enables for you eager loading.

// That means, when you do request on some model, you could do other requests to the database, if you need this data. Eloquent will fill out you model with loaded data.

// If you do not include some related models to your model and will request them after, Eloquent will apply the new request to DB.

// You could read more about eager loading in the documentation

