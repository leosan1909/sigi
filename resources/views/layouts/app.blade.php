<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <!-- Styles -->
    <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet"><!-- GOBIERNO-->
    <link href="/css/style.css" rel="stylesheet">
    
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<header>
    <div class="container-fluid">
     <div class="row">
        <img src={{asset('images/header.png')}}  class="img-responsive">
     </div>
    </div>
</header>
    <div class="container-fluid">
    <!--<div class="row bg-ipn fs-s" >
        <div class="col-xs-6  col-sm-6 col-md-6 text-white">
            <span>Escuela Superior de Cómputo</span>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6  text-white text-right ">
             <span>Departamento de Capital Humano</span>
         </div>
    </div>-->
    </div>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
<!-- Footer -->
<footer class="page-footer bg-ipn">
    <!-- Footer Elements -->
    <div class="container">
      <!-- Grid row-->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-8 col-md-offset-1 text-white text-left p-h-15" >
            <p class="fs12p"><b>INSTITUTO POLITÉCNICO NACIONAL</b><br/>D.R.Instituto Politécnico Nacional (IPN). Av. Luis Enrique Erro S/N, Unidad Profesional Adolfo López Mateos, Zacatenco, Delegación Gustavo A. Madero, C.P. 07738, Ciudad de México 2009-2013.</p>
            <a class="fs10p no-decoration text-white" data-toggle="modal" data-target="#modalAvisoPrivacidad"><b>AVISO DE PRIVACIDAD</b></a>
        </div>
        <div class="col-md-2 col-md-offset-1 p-h-15">
            <img src={{asset('images/logo-escom-blanco.png')}}  height="75">
            <img src={{asset('images/logo-ipn-blanco.png')}}  height="75">
        </div>     
        <!-- Grid column -->
      </div>
      <!-- Grid row-->
    </div>
  </footer>
  <!-- Footer -->
<!----------------------------Modal Login------------------------------------------->
<div class="modal fade" id="modalAvisoPrivacidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center bg-sigi">
        <h4 class="modal-title w-100 font-weight-bold">Aviso de Privacidad</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <center><button class="btn btn-default">Enterado</button></center>
      </div>
    </div>
  </div>
</div>
    <!-- Scripts -->
    <script src="/js/funciones.js" ></script> 
    <script src="https://framework-gb.cdn.gob.mx/gobmx.js" ></script>    <!-- GOBIERNO-->
</body>
</html>
