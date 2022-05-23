<body>
    <div class="page-wrapper chiller-theme toggled">
      <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
      </a>
      <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
          <div class="sidebar-brand">
            <a href="#">Enrichisseur de requêtes</a>
            <div id="close-sidebar">
              <i class="fas fa-times"></i>
            </div>
          </div>
          <div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="media/plnlogo.png" alt="" />
          </div>
          <!-- sidebar-search  -->
          <div class="sidebar-menu">         
            <ul class="px-2">
                <li class="header-menu">
                  <span>Môt-clé principal de votre requête</span>
                  <br>
                  <input type="text" id="motcle" class="form-control" placeholder="Môt-Clé">
                </li>
                <br>
                <li>
                   <a href="#base" class="btn btn-secondary "><span class="boton">Choisissez les bases</span></a> 
                </li>
                <br>
                <li>
                   <a href="#action" class="btn btn-secondary "><span class="boton">Choisissez les actions</span></a> 
                </li>
                <br>
                <li>
                   <a href="#objet" class="btn btn-secondary "><span class="boton">Choisissez les objets</span></a> 
                </li>
                <br>
                <li>
                   <a href="#perception" class="btn btn-secondary "><span class="boton">Choisissez les perceptions</span></a> 
                </li>
                <br>
                <li>
                   <a href="#situation" class="btn btn-secondary "><span class="boton">Choisissez les situations</span></a> 
                </li>
                <br>
                <li>
                   <a href="#qualification" class="btn btn-secondary "><span class="boton">Choisissez les qualifications</span></a> 
                </li>
            </ul>    
          </div>
          <!-- sidebar-menu  -->
        </div> 
      </nav>
  
      

      <!-- sidebar-wrapper  -->
      <main class="page-content">
        <div class="container-fluid">
          <!--base-->
          <section id="base" class="vh-100">
          <form action="">
            <div class="row">   
                <h2 class="text-center py-5">Choisissez jusqu'à 3 termes parmis les suggestions</h2>            
                    <div class="col-12 col-md-6 col-lg-3">                      
                        <input name="" type="checkbox" class="form-check-input lim1" id="base1" value="qui" />
                         <label for="base1">qui</label><br>                                         
                        <input name="" type="checkbox" class="form-check-input lim1" id="base2" value="pourquoi" />
                        <label for="base2">pourquoi</label><br>                         
                        <input name="" type="checkbox" class="form-check-input lim1" id="base3" value="sans" />
                        <label for="base3">sans</label><br>                         
                        <input name="" type="checkbox" class="form-check-input lim1" id="base4" value="quel" />
                        <label for="base4">quel</label><br>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">                       
                        <input name="" type="checkbox" class="form-check-input lim1" id="base5" value="où" />
                        <label for="base5">où</label><br>                                          
                        <input name="" type="checkbox" class="form-check-input lim1" id="base6" value="quand" />
                        <label for="base6">quand</label><br>                          
                        <input name="" type="checkbox" class="form-check-input lim1" id="base7" value="que faire avec" />
                        <label for="base7">que faire avec</label><br>                       
                        <input name="" type="checkbox" class="form-check-input lim1" id="base8" value="c'est quoi" />
                        <label for="base8">c'est quoi</label><br>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">                        
                        <input name="" type="checkbox" class="form-check-input lim1" id="base9" value="quoi" />
                        <label for="base9">quoi</label><br>                                           
                        <input name="" type="checkbox" class="form-check-input lim1" id="base10" value="avec" />
                        <label for="base10">avec</label><br>                          
                        <input name="" type="checkbox" class="form-check-input lim1" id="base11" value="que faire contre" />
                        <label for="base11">que faire contre</label><br>                        
                        <input name="" type="checkbox" class="form-check-input lim1" id="base12" value="qu'est-ce que" />
                        <label for="base12">qu'est-ce que</label><br>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">                        
                        <input name="" type="checkbox" class="form-check-input lim1" id="base13" value="comment" />
                        <label for="base13">comment</label><br>                                           
                        <input name="" type="checkbox" class="form-check-input lim1" id="base14" value="pour" />
                        <label for="base14">pour</label><br>                          
                        <input name="" type="checkbox" class="form-check-input lim1" id="base15" value="que faire pour" />
                        <label for="base15">que faire pour</label><br>                        
                        <!-- <input name="" type="checkbox" class="form-check-input" id="base16" value="" />
                        <label for="base16"></label><br> -->
                    </div>                   
            </div>

            <div class="row">
                <h2 class="text-center py-5">Ou ajoutez vos propres suggestions</h2>                
                <div class="col-12">                   
                        <label for="sugestiona1">Suggestion N°1</label>
                        <input type="text" class="form-control" id="subase1"><br>
                        <label for="sugestiona1">Suggestion N°2</label>
                        <input type="text" class="form-control" id="subase2"><br>
                        <label for="sugestiona1">Suggestion N°3</label>
                        <input type="text" class="form-control" id="subase3"><br>                    
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
<<<<<<< HEAD

=======
>>>>>>> 8ad6470786e6386f4859e1e04e4dba773edaf3a6
        <section>
          <div class="form-group col-md-12">
            <div class="alert alert-success" role="alert">
              <h4 class="alert-heading">Résultat !</h4>
<<<<<<< HEAD
              <p id="data">
=======
              <p id="resultat">
>>>>>>> 8ad6470786e6386f4859e1e04e4dba773edaf3a6
               
                
              </p>
          </div>
        </div>
        </section>
<<<<<<< HEAD

=======
>>>>>>> 8ad6470786e6386f4859e1e04e4dba773edaf3a6
        </section>
          <!--/base-->
        
          <!--action-->
          <section id="action" class="vh-100">
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
           <section id="objet" class="vh-100">
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
              <section id="perception" class="vh-100">
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
           <section id="situation" class="vh-100">
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
              <section id="qualification" class="vh-100 ">
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


<<<<<<< HEAD
        <!--------------------------------------------------->
        
        </div>


=======
       
>>>>>>> 8ad6470786e6386f4859e1e04e4dba773edaf3a6
        
        </div>
          <footer class="text-center">
            <div class="mb-2">
              <small>
                © 2022 Fait avec
                <i class="fa fa-heart" style="color: red"></i> by -
                <a
                  target="_blank"
                  rel="noopener noreferrer"
                  href="https://www.com-par-le-net.com/"
                >
                  <img src="media/plnlogo.png" alt="">
                </a>
              </small>

            </div>
            <div>
              <p>21 rue Pierre Toufaire, 17300 Rochefort.</p>
              <p>06.01.80.10.15</p>
              <p>contact@com-par-le-net.com</p>
            </div>
          </footer>
        </div>
      </main>
      <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/betatemplate.js"></script>
    <script src="js/test.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>