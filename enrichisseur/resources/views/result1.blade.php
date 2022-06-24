<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('CSS/test.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body id="">
    <div class="container" id="">
        <div class="row">
            <section id="features">

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

                <div class="container px-5">
                    <div class="row ">
                        {{-- <div class=""><img src="media/plnlogo.png" alt=""></div> --}}
                        <!--columna de contenido-->

                        <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                            <div class="container-fluid ">

                                <div class="row gx-5">
                                    <div class="col-12 ">
                                        <!-- Feature item-->
                                        <div class="text-center">
                                            <i class="bi-phone icon-feature text-gradient d-block mb-3 text-center"><h2 class="font-alt text-center roboto">Résultat</h2></i>
                                            
                                            <p class="text-muted mb-0 ">
                                                
                                                <span class="res roboto">
                                                    <b class="">{{ $keyword }}</b> 
                                                    
                                                    @foreach ($terms as $term )
                                                                      
                                                        <b class=""> {{ $term->name_terms }}</b>                                                
                                                    
                                                    @endforeach
                                                </span> 

                                            </p>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-12 mb-md-0">
                                        <!-- Feature item-->
                                        <div class="">
                                            <i class="bi-patch-check icon-feature text-gradient d-block mb-3 text-center   "> <h2 class="font-alt text-center roboto">Combinaisons</h2></i>
                                           
                                            <p class="text-muted mb-0">
                                                
                                                <span class="res roboto">
                                                    @foreach ($phrases as $phrase )
                                                       - {{ $phrase }} <br>
                                                    @endforeach
                                                </span>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        
                        <!--columna de telefono y video-->

                        <div class="col-lg-4 order-lg-0">
                            
                            <!-- Features section device mockup-->
                            <div class="features-device-mockup">
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
                                            <div id="overlay1" class="text-center roboto">
                                                Le mot-clé est: <b id="centro">{{ $keyword }}</b></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <img class="img-bar" src="{{ asset('media/Logo-dolauriane-4.png') }}" alt=""><br>
                    <button type="button" class="btn boton text-light" onclick="window.location='{{ route("home") }}'">Accueil</button>
                    <button type="button" class="btn boton text-light" onclick="window.location='{{ route("export", $sphrase->id) }}'">Export</button>
                </div>
                </div>
                
            </section>
        </div>
    </div>
</body>
</html>