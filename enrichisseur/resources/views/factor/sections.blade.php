@extends('home')
@section('content')
    <!-- sidebar-wrapper  -->
    <main class="page-content">
      <div class="container-fluid">
        <!--base-->
        <section id="base" class="">
          {{-- {{ dump($terms) }} --}}
        <form action="">
          <div class="row">   
              <h2 class="text-center py-5">Choisissez jusqu'à 3 termes parmis les suggestions</h2> 
              
              

                  @foreach ($categories as $category)

                    {{ $category->name_category }}


                    @foreach ($category->terms as $term )
                    
                       <div class="col-12 col-md-6 col-lg-3">                      
                        <input name="" type="checkbox" class="form-check-input lim{{ $category->id }}" id="base1" value="{{ $term->name_terms }}" />
                        <label for="base1">{{ $term->name_terms }}</label><br>                                                          
                      </div> 
                    @endforeach
                     

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

      <section>
        <div class="form-group col-md-12">
          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Résultat !</h4>
            <p id="data">
            
              
            </p>
        </div>
      </div>
      </section>
      
      <div>
        <!--/base-->
      
        <!--action-->
        <section id="action" class="">
          <form action="">
            <div class="row">   
                <h2 class="text-center py-5">Choisissez jusqu'à 3 termes parmis les suggestions</h2>            
                    <div class="col-12 col-md-6 col-lg-3">                      
                        <input name="" type="checkbox" class="form-check-input lim2" id="action1" value="avoir" />
                        <label for="action1">avoir</label><br>                                         
                        <input name="" type="checkbox" class="form-check-input lim2" id="action2" value="expliquer" />
                        <label for="action2">expliquer</label><br>                         
                        <input name="" type="checkbox" class="form-check-input lim2" id="action3" value="arrêter" />
                        <label for="action3">arrêter</label><br>                         
                        <input name="" type="checkbox" class="form-check-input lim2" id="action4" value="vaincre" />
                        <label for="action4">vaincre</label><br>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">                       
                        <input name="" type="checkbox" class="form-check-input lim2" id="action5" value="sentir" />
                        <label for="action5">sentir</label><br>                                          
                        <input name="" type="checkbox" class="form-check-input lim2" id="action6" value="connaître" />
                        <label for="action6">connaître</label><br>                          
                        <input name="" type="checkbox" class="form-check-input lim2" id="action7" value="faire" />
                        <label for="action7">faire</label><br>                       
                        <input name="" type="checkbox" class="form-check-input lim2" id="action8" value="dépasser" />
                        <label for="action8">dépasser</label><br>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">                        
                        <input name="" type="checkbox" class="form-check-input lim2" id="action9" value="ressentir" />
                        <label for="action9">ressentir</label><br>                                           
                        <input name="" type="checkbox" class="form-check-input lim2" id="action10" value="stopper" />
                        <label for="action10">stopper</label><br>                          
                        <input name="" type="checkbox" class="form-check-input lim2" id="action11" value="calmer" />
                        <label for="action11">calmer</label><br>                        
                        <input name="" type="checkbox" class="form-check-input lim2" id="action12" value="surmonter" />
                        <label for="action12">surmonter</label><br>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">                        
                        <input name="" type="checkbox" class="form-check-input lim2" id="action13" value="comprendre" />
                        <label for="action13">comprendre</label><br>                                           
                        <input name="" type="checkbox" class="form-check-input lim2" id="action14" value="vivre" />
                        <label for="action14">vivre</label><br>                          
                        <input name="" type="checkbox" class="form-check-input lim2" id="action15" value="gérer" />
                        <label for="action15">gérer</label><br>                        
                        <input name="" type="checkbox" class="form-check-input lim2" id="action16" value="contrôler" />
                        <label for="action16">contrôler</label><br>
                    </div>                   
            </div>

            <div class="row">
                <h2 class="text-center py-5">Ou ajoutez vos propres suggestions</h2>                  
                <div class="col-12">
                        <label for="sugestiona1">Suggestion N°1</label>
                        <input type="text" class="form-control" id="suaction1"><br>
                        <label for="sugestiona1">Suggestion N°2</label>
                        <input type="text" class="form-control" id="suaction2"><br>
                        <label for="sugestiona1">Suggestion N°3</label>
                        <input type="text" class="form-control" id="suaction3"><br>                      
                </div>                  
            </div>
          <div class="row">
            <div class="col-6">
              <input type="reset" value="Reset" class="btn btn-danger" /></span>
            </div>
            <div class="col-6 text-end">           
              <a href="#objet"><i class="fas fa-caret-right display-1"></i><i class="fas fa-caret-right display-1"></i></a>
            </div>
          </div>              
          </form>         
        </section>
        <!--/action-->

        <!--objet-->
        <section id="objet" class="">
          <form action="">
            <div class="row">   
                <h2 class="text-center py-5">Choisissez jusqu'à 3 termes parmis les suggestions</h2>            
                    <div class="col-12 col-md-6 col-lg-3">                      
                        <input name="" type="checkbox" class="form-check-input lim3" id="1" value="" />
                        <label for="1"></label><br>                                         
                        <input name="" type="checkbox" class="form-check-input lim3" id="2" value="" />
                        <label for="2"></label><br>                         
                        <input name="" type="checkbox" class="form-check-input lim3" id="3" value="" />
                        <label for="3"></label><br>                         
                        <input name="" type="checkbox" class="form-check-input lim3" id="4" value="" />
                        <label for="4"></label><br>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">                       
                        <input name="" type="checkbox" class="form-check-input lim3" id="5" value="" />
                        <label for="5"></label><br>                                          
                        <input name="" type="checkbox" class="form-check-input lim3" id="6" value="" />
                        <label for="6"></label><br>                          
                        <input name="" type="checkbox" class="form-check-input lim3" id="7" value="" />
                        <label for="7"></label><br>                       
                        <input name="" type="checkbox" class="form-check-input lim3" id="8" value="" />
                        <label for="8"></label><br>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">                        
                        <input name="" type="checkbox" class="form-check-input lim3" id="9" value="" />
                        <label for="9"></label><br>                                           
                        <input name="" type="checkbox" class="form-check-input lim3" id="10" value="" />
                        <label for="10"></label><br>                          
                        <input name="" type="checkbox" class="form-check-input lim3" id="11" value="" />
                        <label for="11"></label><br>                        
                        <input name="" type="checkbox" class="form-check-input lim3" id="12" value="" />
                        <label for="12"></label><br>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">                        
                        <input name="" type="checkbox" class="form-check-input lim3" id="13" value="" />
                        <label for="13"></label><br>                                           
                        <input name="" type="checkbox" class="form-check-input lim3" id="14" value="" />
                        <label for="14"></label><br>                          
                        <input name="" type="checkbox" class="form-check-input lim3" id="15" value="" />
                        <label for="15"></label><br>                        
                        <input name="" type="checkbox" class="form-check-input lim3" id="16" value="" />
                        <label for="16"></label><br>
                    </div>                   
            </div>

            <div class="row">
                <h2 class="text-center py-5">Ou ajoutez vos propres suggestions</h2>
                
                <div class="col-12">
                        <label for="sugestiona1">Suggestion N°1</label>
                        <input type="text" class="form-control" id="suobjet1"><br>
                        <label for="sugestiona1">Suggestion N°2</label>
                        <input type="text" class="form-control" id="suobjet2"><br>
                        <label for="sugestiona1">Suggestion N°3</label>
                        <input type="text" class="form-control" id="suobjet3"><br>
                </div>
            </div>

            <div class="row">
              <div class="col-6">
                <input type="reset" value="Reset" class="btn btn-danger" /></span>
              </div>
              <div class="col-6 text-end">           
                <a href="#perception"><i class="fas fa-caret-right display-1"></i><i class="fas fa-caret-right display-1"></i></a>
              </div>
            </div>
        </form>
        </section>
        <!--/objet-->

            <!--perception-->
            <section id="perception" class="">
              <form action="">
                <div class="row">   
                    <h2 class="text-center py-5">Choisissez jusqu'à 3 termes parmis les suggestions</h2>            
                        <div class="col-12 col-md-6 col-lg-3">                      
                            <input name="" type="checkbox" class="form-check-input lim4" id="1" value="" />
                            <label for="1"></label><br>                                         
                            <input name="" type="checkbox" class="form-check-input lim4" id="2" value="" />
                            <label for="2"></label><br>                         
                            <input name="" type="checkbox" class="form-check-input lim4" id="3" value="" />
                            <label for="3"></label><br>                         
                            <input name="" type="checkbox" class="form-check-input lim4" id="4" value="" />
                            <label for="4"></label><br>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">                       
                            <input name="" type="checkbox" class="form-check-input lim4" id="5" value="" />
                            <label for="5"></label><br>                                          
                            <input name="" type="checkbox" class="form-check-input lim4" id="6" value="" />
                            <label for="6"></label><br>                          
                            <input name="" type="checkbox" class="form-check-input lim4" id="7" value="" />
                            <label for="7"></label><br>                       
                            <input name="" type="checkbox" class="form-check-input lim4" id="8" value="" />
                            <label for="8"></label><br>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">                        
                            <input name="" type="checkbox" class="form-check-input lim4" id="9" value="" />
                            <label for="9"></label><br>                                           
                            <input name="" type="checkbox" class="form-check-input lim4" id="10" value="" />
                            <label for="10"></label><br>                          
                            <input name="" type="checkbox" class="form-check-input lim4" id="11" value="" />
                            <label for="11"></label><br>                        
                            <input name="" type="checkbox" class="form-check-input lim4" id="12" value="" />
                            <label for="12"></label><br>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">                        
                            <input name="" type="checkbox" class="form-check-input lim4" id="13" value="" />
                            <label for="13"></label><br>                                           
                            <input name="" type="checkbox" class="form-check-input lim4" id="14" value="" />
                            <label for="14"></label><br>                          
                            <input name="" type="checkbox" class="form-check-input lim4" id="15" value="" />
                            <label for="15"></label><br>                        
                            <input name="" type="checkbox" class="form-check-input lim4" id="16" value="" />
                            <label for="16"></label><br>
                        </div>                   
                </div>

                <div class="row">
                    <h2 class="text-center py-5">Ou ajoutez vos propres suggestions</h2>
                    
                    <div class="col-12">
                            <label for="sugestiona1">Suggestion N°1</label>
                            <input type="text" class="form-control" id="suaction1"><br>
                            <label for="sugestiona1">Suggestion N°2</label>
                            <input type="text" class="form-control" id="suaction2"><br>
                            <label for="sugestiona1">Suggestion N°3</label>
                            <input type="text" class="form-control" id="suaction3"><br>
                    </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <input type="reset" value="Reset" class="btn btn-danger" /></span>
                  </div>
                  <div class="col-6 text-end">           
                    <a href="#situation"><i class="fas fa-caret-right display-1"></i><i class="fas fa-caret-right display-1"></i></a>
                  </div>
                </div>
            </form>
            </section>
            <!--/perception-->

                <!--situation-->
        <section id="situation" class="">
          <form action="">
            <div class="row">   
                <h2 class="text-center py-5">Choisissez jusqu'à 3 termes parmis les suggestions</h2>            
                    <div class="col-12 col-md-6 col-lg-3">                      
                        <input name="" type="checkbox" class="form-check-input lim5" id="1" value="" />
                        <label for="1"></label><br>                                         
                        <input name="" type="checkbox" class="form-check-input lim5" id="2" value="" />
                        <label for="2"></label><br>                         
                        <input name="" type="checkbox" class="form-check-input lim5" id="3" value="" />
                        <label for="3"></label><br>                         
                        <input name="" type="checkbox" class="form-check-input lim5" id="4" value="" />
                        <label for="4"></label><br>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">                       
                        <input name="" type="checkbox" class="form-check-input lim5" id="5" value="" />
                        <label for="5"></label><br>                                          
                        <input name="" type="checkbox" class="form-check-input lim5" id="6" value="" />
                        <label for="6"></label><br>                          
                        <input name="" type="checkbox" class="form-check-input lim5" id="7" value="" />
                        <label for="7"></label><br>                       
                        <input name="" type="checkbox" class="form-check-input lim5" id="8" value="" />
                        <label for="8"></label><br>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">                        
                        <input name="" type="checkbox" class="form-check-input lim5" id="9" value="" />
                        <label for="9"></label><br>                                           
                        <input name="" type="checkbox" class="form-check-input lim5" id="10" value="" />
                        <label for="10"></label><br>                          
                        <input name="" type="checkbox" class="form-check-input lim5" id="11" value="" />
                        <label for="11"></label><br>                        
                        <input name="" type="checkbox" class="form-check-input lim5" id="12" value="" />
                        <label for="12"></label><br>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">                        
                        <input name="" type="checkbox" class="form-check-input" id="13" value="" />
                        <label for="13"></label><br>                                           
                        <input name="" type="checkbox" class="form-check-input" id="14" value="" />
                        <label for="14"></label><br>                          
                        <input name="" type="checkbox" class="form-check-input" id="15" value="" />
                        <label for="15"></label><br>                        
                        <input name="" type="checkbox" class="form-check-input" id="16" value="" />
                        <label for="16"></label><br>
                    </div>                   
            </div>

            <div class="row">
                <h2 class="text-center py-5">Ou ajoutez vos propres suggestions</h2>
                
                <div class="col-12">
                        <label for="sugestiona1">Suggestion N°1</label>
                        <input type="text" class="form-control" id="suaction1"><br>
                        <label for="sugestiona1">Suggestion N°2</label>
                        <input type="text" class="form-control" id="suaction2"><br>
                        <label for="sugestiona1">Suggestion N°3</label>
                        <input type="text" class="form-control" id="suaction3"><br>                     
                </div>
            </div>
            <div class="row">
              <div class="col-6">
                <input type="reset" value="Reset" class="btn btn-danger" /></span>
              </div>
              <div class="col-6 text-end">           
                <a href="#qualification"><i class="fas fa-caret-right display-1"></i><i class="fas fa-caret-right display-1"></i></a>
              </div>
            </div>
        </form>
        </section>
        <!--/situation-->

            <!--qualification-->
            <section id="qualification" class=" ">
              <form action="">
                <div class="row ">   
                    <h2 class="text-center py-5">Choisissez jusqu'à 3 termes parmis les suggestions</h2>            
                        <div class="col-12 col-md-6 col-lg-3">                      
                            <input name="" type="checkbox" class="form-check-input lim6" id="1" value="" />
                            <label for="1"></label><br>                                         
                            <input name="" type="checkbox" class="form-check-input lim6" id="2" value="" />
                            <label for="2"></label><br>                         
                            <input name="" type="checkbox" class="form-check-input lim6" id="3" value="" />
                            <label for="3"></label><br>                         
                            <input name="" type="checkbox" class="form-check-input lim6" id="4" value="" />
                            <label for="4"></label><br>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">                       
                            <input name="" type="checkbox" class="form-check-input lim6" id="5" value="" />
                            <label for="5"></label><br>                                          
                            <input name="" type="checkbox" class="form-check-input lim6" id="6" value="" />
                            <label for="6"></label><br>                          
                            <input name="" type="checkbox" class="form-check-input lim6" id="7" value="" />
                            <label for="7"></label><br>                       
                            <input name="" type="checkbox" class="form-check-input lim6" id="8" value="" />
                            <label for="8"></label><br>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">                        
                            <input name="" type="checkbox" class="form-check-input lim6" id="9" value="" />
                            <label for="9"></label><br>                                           
                            <input name="" type="checkbox" class="form-check-input lim6" id="10" value="" />
                            <label for="10"></label><br>                          
                            <input name="" type="checkbox" class="form-check-input lim6" id="11" value="" />
                            <label for="11"></label><br>                        
                            <input name="" type="checkbox" class="form-check-input lim6" id="12" value="" />
                            <label for="12"></label><br>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">                        
                            <input name="" type="checkbox" class="form-check-input lim6" id="13" value="" />
                            <label for="13"></label><br>                                           
                            <input name="" type="checkbox" class="form-check-input lim6" id="14" value="" />
                            <label for="14"></label><br>                          
                            <input name="" type="checkbox" class="form-check-input lim6" id="15" value="" />
                            <label for="15"></label><br>                        
                            <input name="" type="checkbox" class="form-check-input lim6" id="16" value="" />
                            <label for="16"></label><br>
                        </div>                   
                </div>

                <div class="row">
                    <h2 class="text-center py-5">Ou ajoutez vos propres suggestions</h2>
                    
                    <div class="col-12">
                            <label for="sugestiona1">Suggestion N°1</label>
                            <input type="text" class="form-control" id="suaction1"><br>
                            <label for="sugestiona1">Suggestion N°2</label>
                            <input type="text" class="form-control" id="suaction2"><br>
                            <label for="sugestiona1">Suggestion N°3</label>
                            <input type="text" class="form-control" id="suaction3"><br>
                    </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <input type="reset" value="Reset" class="btn btn-danger" /></span>
                  </div>
                  <div class="col-6 text-end">           
                    <a href="#base"><i class="fas fa-caret-right display-1"></i><i class="fas fa-caret-right display-1"></i></a>
                  </div>
                </div>
            </form>
            </section>
            <!--/qualification-->


      
          
      </div>


      
      
    
    </main>
@endsection