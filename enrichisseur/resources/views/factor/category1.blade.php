@extends('home')

@section('content')
 <main class="page-content">

   <div>
    <nav class="nav">

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto">
          <!-- Authentication Links -->
          @guest
              @if (Route::has('login'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @endif

              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item btn boton text-light" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>

    </nav>
   </div>

    <div class="container-fluid">

        <form action="/result" method="POST">

            @csrf <!--obligatoire-->
            <h2 class="roboto text-gradient d-block mb-3 text-center">Entrez un mot-clé</h2>
            <input type="text" id="motcle" class="form-control" placeholder="Môt-Clé" name="keyword" value="">
           

            <!--Message erreur-->
            @if ($errors->has('keyword'))
            <span class="text-danger">{{ $errors->first('keyword') }}</span>
            @endif



            @foreach ( $categories as $category )


            <header class="masthead">
                <div class="container-fluid ">
                    <div class="row  ">
                        <div class="col-12 col-lg-8">
                            <!-- Mashead text and app badges-->
                            <div class=" mb-lg-0  text-lg-start">
                            
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="lc-block drop_caps_1">
                                                <div editable="rich">
                                                   
                                                    {{-- Terms --}}
                                                    <div class="row">   
                                                        <span class="roboto py-5 text-gradient" id="{{ $category->id-1 }}">
                                                            <h2 class=" text-gradient d-block mb-3 text-center">Choisissez jusqu'à 3 termes parmis les {{ $category->name_category }}</h2>  
                                                        </span> 
                                        
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
                                       
                                    </div>
                                </div>
        
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- Masthead device mockup feature-->
                            <div class="masthead-device-mockup">
                                <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                            <stop class="gradient-start-color" offset="0%"></stop>
                                            <stop class="gradient-end-color" offset="100%"></stop>
                                        </linearGradient>
                                    </defs>
                                    <circle cx="50" cy="50" r="50"></circle></svg
                                ><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                                    <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg
                                ><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                                <div class="device-wrapper">
                                    <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                        <div class="screen bg-black">
                                            <!-- PUT CONTENTS HERE:-->
                                            <!-- * * This can be a video, image, or just about anything else.-->
                                            <!-- * * Set the max width of your media to 100% and the height to-->
                                            <!-- * * 100% like the demo example below.-->
                                            <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%"><source src="{{ asset('media/demo-screen.mp4') }}" type="video/mp4" /></video>
                                            <div id="overlay1" class="text-center">
                                                 <b id="centro" class="roboto">{{ $category->name_category }}</b>
                                                 {{-- <img src="{{ asset('media/'.$category->img) }}" alt=""> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>




            

                   
                
                {{-- Suggestion --}}
                <div class="row">
                    <h4 class="roboto text-gradient d-block mb-3 text-center">Ou ajoutez votre propre suggestion</h4>                
                    <div class="col-12">                   
                            <label for="sugestiona1"></label>
                            <input type="text" class="form-control" id="sugest" placeholder="Suggestion Disabled." disabled><br>
                                                
                    </div>

                </div>
                {{-- Icons --}}
                <div class="row">
                    <div class="col-6">
                        <input type="reset" value="Reset" class="btn boton text-light" /></span>
                    </div>
                    <div class="col-6 text-end">           
                        <a href="#{{ $category->id }}"><i class="fas fa-caret-right display-1 "></i><i class="fas fa-caret-right display-1"></i></a>
                    </div>
                </div>
                <br>
                <hr>
        
            @endforeach

            <div class="text-center"><button type="submit" class="btn boton text-light">click moi</button></div>
        </form>
    </div>        
</main> 
@endsection

