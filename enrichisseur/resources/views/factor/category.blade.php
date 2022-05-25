@extends('home')
@section('content')


@foreach ( $categories as $category )
    <main class="page-content">
        <div class="container-fluid">
        <!--base-->
        <section id="base" class="">
            {{-- {{ dump($terms) }} --}}
        <form action="">
            <div class="row">   
                <h2 class="text-center py-5">Choisissez jusqu'à 3 termes parmis les</h2> 
                
                

                        @foreach ( $terms as $term)
                            <div class="col-12 col-md-6 col-lg-3">                      
                        <input name="" type="checkbox" class="form-check-input lim1" id="base1" value="{{ $term->name_terms }}" />
                        <label for="base1">{{ $term->name_terms }}</label><br>                                                          
                        </div> 
                        @endforeach
                    
                        

                
                            
            </div>

            <div class="row">
                <h2 class="text-center py-5">Ou ajoutez vos propres suggestions</h2>                
                <div class="col-12">                   
                        <label for="sugestiona1">Suggestion N°1</label>
                        <input type="text" class="form-control" id="subase1"><br>
                                        
                </div>

            </div>

            <div class="row">
            <div class="col-6">
                <input type="reset" value="Reset" class="btn btn-danger" /></span>
            </div>
            <div class="col-6 text-end">           
                <a href="#action"><i class="fas fa-caret-right display-1"></i><i class="fas fa-caret-right display-1"></i></a>
            </div>
            </div>
            </form>

       
    
   </main> 
@endforeach
<section>
    <div class="row">
    <div class="form-group col-12">
        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Résultat !</h4>
        <p id="data">
        
            
        </p>
    </div>
    </div>
    </div>
</section>
@endsection


