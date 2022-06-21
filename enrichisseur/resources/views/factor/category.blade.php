@extends('home')

@section('content')
 <main class="page-content">
    <div class="container-fluid">
        <form action="/result" method="POST">

            @csrf <!--obligatoire-->
            <h2 class="text-center py-5" >Entrez un mot-clé</h2>
            <input type="text" id="motcle" class="form-control" placeholder="Môt-Clé" name="keyword" value="">
           

            <!--Message erreur-->
            @if ($errors->has('keyword'))
            <span class="text-danger">{{ $errors->first('keyword') }}</span>
            @endif



            @foreach ( $categories as $category )



            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="lc-block drop_caps_1">
                            <div editable="rich">
                               
                                {{-- Terms --}}
                <div class="row">   
                    <h2 class="text-center py-5" id="{{ $category->id-1 }}">
                        Choisissez jusqu'à 3 termes parmis les {{ $category->name_category }}
                    </h2> 
                    
                        @foreach ( $category->terms as $term)

                            <div class="col-12 col-md-6 col-lg-3">                      
                                <input name="clickedterms[]" 
                                       type="checkbox" 
                                       value="{{ $term->id }}" 
                                       class="form-check-input lim{{ $category->id }}" 
                                       id="base1" 
                                       value="{{ $term->name_terms }}" />
                                <label for="base1">{{ $term->name_terms }}</label><br>                                                          
                            </div> 
                            
                        @endforeach
                                                
                </div>

                            </div>
                        </div><!-- /lc-block -->
                    </div><!-- /col -->
                    <div class="col-lg-4 align-self-center">
                        <div class="lc-block">
                            <img class="img-fluid" id="rond"   src="{{ asset('media/'.$category->img) }}">
                        </div><!-- /lc-block -->
                        <!-- /lc-block -->
                    </div><!-- /col -->
                </div>
            </div>

                   
                
                {{-- Suggestion --}}
                <div class="row">
                    <h2 class="text-center py-5">Ou ajoutez votre propre suggestion</h2>                
                    <div class="col-12">                   
                            <label for="sugestiona1">Suggestion</label>
                            <input type="text" class="form-control" id="sugest" placeholder="Disabled input here..." disabled><br>
                                                
                    </div>

                </div>
                {{-- Icons --}}
                <div class="row">
                    <div class="col-6">
                        <input type="reset" value="Reset" class="btn btn-danger" /></span>
                    </div>
                    <div class="col-6 text-end">           
                        <a href="#{{ $category->id }}"><i class="fas fa-caret-right display-1"></i><i class="fas fa-caret-right display-1"></i></a>
                    </div>
                </div>
                <br>
                <hr>
        
            @endforeach

            <div class="text-center"><button type="submit" class="btn btn-info">click moi</button></div>
        </form>
    </div>        
</main> 
@endsection


