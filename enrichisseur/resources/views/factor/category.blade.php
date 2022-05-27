@extends('home')
@section('content')


@foreach ( $categories as $category )
    <main class="page-content">
        <div class="container-fluid">
        
            {{-- {{ dump($terms) }} --}}
            <form action="">
                <div class="row">   
                    <h2 class="text-center py-5" id="{{ $category->id-1 }}">Choisissez jusqu'à 3 termes parmis les {{ $category->name_category }}</h2> 
                    
                    

                        @foreach ( $category->terms as $term)
                            <div class="col-12 col-md-6 col-lg-3">                      
                                <input name="" type="checkbox" class="form-check-input lim{{ $category->id }}" id="base1" value="{{ $term->name_terms }}" />
                                <label for="base1">{{ $term->name_terms }}</label><br>                                                          
                            </div> 
                        @endforeach
                        
                            

                    
                                
                </div>

                <div class="row">
                    <h2 class="text-center py-5">Ou ajoutez votre propre suggestion</h2>                
                    <div class="col-12">                   
                            <label for="sugestiona1">Suggestion</label>
                            <input type="text" class="form-control" id="sugest"><br>
                                                
                    </div>

                </div>

                <div class="row">
                    <div class="col-6">
                        <input type="reset" value="Reset" class="btn btn-danger" /></span>
                    </div>
                    <div class="col-6 text-end">           
                        <a href="#{{ $category->id }}"><i class="fas fa-caret-right display-1"></i><i class="fas fa-caret-right display-1"></i></a>
                    </div>
                </div>
            </form>
            <br>
            <hr>
        </div>
       
    
    </main> 
@endforeach

@endsection


