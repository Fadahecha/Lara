<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Requête</title>
    <link rel="stylesheet" href="css/betatemplate.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
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
                  <input type="text" id="motcle" class="form-control" placeholder="Môt-Clé" value="">
                </li>
                <br>

                @foreach ($categories as $category )
                <li>
                  <a href="#{{ $category->id-1 }}" class="btn btn-secondary "><span class="boton">Choisissez les {{ $category->name_category }}</span></a> 
               </li>
               <br>
                @endforeach
            </ul>    
          </div>
          <!-- sidebar-menu  -->
        </div> 
      </nav>
  
      
      @yield('content')
    
      <section class="page-content fix" >
        <div class="row">
          <form action="{{ route('phrase.store') }}" method="POST">
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
    </section>
    
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
    <script src="js/betatemplate.js"></script>
    <script src="js/test.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>

<!-- https://codepen.io/sonorangirl/pen/qNXJMV  modal viejo? -->
<!-- https://codepen.io/haydmills/pen/zLraGJ multiple modal css -->

<!-- https://codepen.io/pixskull/pen/myPGpm cambiar contenido -->

