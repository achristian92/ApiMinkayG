<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aplicación Gerencia</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="../resources/assets/css/estilobienvenida.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header" style="display: inline-block;">
              <div class="navbar-brand" style="padding: 5px 5px"> <img src="../resources/assets/img/logomibanconav.png"  > </div>
            </div>

          </div>
        </nav>
        <section class="presentacion">
            <div class="container">
                <div class="row">

                                <h1 align="center"></h1>
                
                <div class="col-sm-6" style="padding-top: 25px">
                    <center>
                   {{--   <img src="../resources/assets/img/mibancoverde.png" id="imagenlogomb"  >  --}}
                     </center>
                </div>


                <div class="col-sm-6">

                    <h3>
                        Gestiona tus activos
                    </h3>

                    <h4>
                        <p class="subtextop" id="primerp">
                           ¡ Olvídate del papel !
                        </p>
                        <p class="descri">
                            Gestiona los activos de tu organización de manera transparente, óptima y segura.
                        </p>
                        <p class="descri">
                            Ten el control eficiente y eficaz de tu supervisión con seguridad.
                        </p>

                    </h4>

                <div class="botoningreso">
                        <a href="{{ route('login') }}" class="btn btn-primary" id="btningreso">
                           INGRESAR AL SISTEMA ultima actu
                        </a>
                </div>
                    
                </div>

            </div>

           

         
        </section>

        <footer>
            <center>
                <span class="pie"> 
                    Desarrollado por 
                    <a href="https://www.minkay.com.pe" target="_blank">
                        <img src="../resources/assets/img/logominkay.png" height="17" width="85" style="vertical-align: text-top">
                    </a>  
                </span>
            </center>
     
        </footer>
         


    </body>
</html>
