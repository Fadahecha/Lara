<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Requête</title>
    <link rel="stylesheet" href="{{ asset('css/betatemplate.css') }}" />
    <link rel="stylesheet" href="{{ asset('CSS/test.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <link
      href="https://use.fontawesome.com/releases/v5.0.6/css/all.css"
      rel="stylesheet"
    />

  </head>

  <body>
    <div class="page-wrapper chiller-theme toggled">
      <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
      </a>
      <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
          <div class="sidebar-brand text-center">
            <a href="#">Enrichisseur de requêtes</a>
            <div id="close-sidebar">
              <i class="fas fa-times"></i>
            </div>
          </div>
          <div class="text-center">
            <img class="img-fluid img-bar" height="5rem" src="{{ asset('media/Logo-dolauriane-4.png') }}" alt="" />
          </div>
          <!-- sidebar-search  -->
          <div class="sidebar-menu">         
            <ul class="px-2">
                <li class="header-menu text-center">
                  <span>Complétez vos idées</span>
                  <br>
                  {{-- <input type="text" id="motcle" class="form-control" placeholder="Môt-Clé" value=""> --}}
                </li>
                <br>

                @foreach ($categories as $category )
                <li>
                  <a href="#{{ $category->id-1 }}" 
                     class="btn boton ">
                     <span class="boton roboto">Choisissez les {{ $category->name_category }}
                    </span>
                  </a> 
                </li>
               <br>
                @endforeach
                
            </ul>    
          </div>
          <!-- sidebar-menu  -->
        </div> 
      </nav>
  
      
      @yield('content')
    
          {{-- <section class="page-content fix" >
            <div class="row">
              <form action="" method="">
                <div class="form-group col-12">
                  <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Résultat !</h4>
                    
                    <p id="data">
                    
                    </p>
                    
                    <button type="submit">click moi</button>
                  </div>
                </div>
              </form>
            </div>
          </section> --}}
    
        <footer class="text-center text-gradient">
          <div class="mb-2">
            <small>
              © 2022 Fait avec
              <i class="fa fa-heart" style="color: red"></i> by -
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://www.com-par-le-net.com/"
              >
                <img class="img-fluid img-foot" src="{{ asset('media/Logo-dolauriane-4.png') }}" alt="">
              </a>
            </small>

          
          <div>
            <p>21 rue Pierre Toufaire, 17300 Rochefort.</p>
            <p>06.01.80.10.15</p>
            <p>contact@com-par-le-net.com</p>
          </div>
        </footer>
        
      <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/betatemplate.js') }}"></script>
    <script src="{{ asset('js/test.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>



