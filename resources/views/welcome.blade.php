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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="../resources/assets/css/estilobienvenida.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <nav class="navbar navbar-default" style="margin-bottom: -21px">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Superivisón - Gerencia</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="{{ route('login') }}">Ingresar</a></li>
              <li><a href="#">Registrarse</a></li>

            </ul>
          </div>
        </nav>
        <section class="presentacion">
            <div class="container">
                <div class="row">

                                <h1 align="center">CHECKLIST GERENCIA</h1>
                
                <div class="col-sm-6">
                    
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
                           INGRESAR AL SISTEMA
                        </a>
                </div>
                    
                </div>

            </div>

           

         
        </section>

        <footer>
            <center>
                <span class="pie"> Desarrollador por Minkay</span>
            </center>
     
        </footer>
         


    </body>
</html>
