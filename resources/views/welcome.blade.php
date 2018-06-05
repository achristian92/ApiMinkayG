<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aplicación Gerencia</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <style type="text/css">
        .presentacion{
            background: url("../resources/assets/img/imagenfondo.png");
             background-size: auto;
             padding-bottom: 25px;
        }

        h2{
            color: white;
            font-weight: bold;
            letter-spacing: 1.5px;
            padding-top: 15PX;
            padding-bottom: 15PX;

        }

        h3{
            color: white;
            letter-spacing: 1.5px;
            font-weight: bold;
            text-align: justify;
            padding-right: 20px;
            padding-left: 20px;
            padding-top: 30px;
        }

        img{
            margin-bottom: 93px
        }

        .botoningreso{
           
            text-align: center;
            padding-top: 50px;
            
        }

        #btningreso{
            font-weight: bold;
            font-size: 16px;
            letter-spacing: 2px;
        }

        .btn{
            padding: 5px 20px
        }

        footer{
            text-align: center;
            background-color: #d8d8d8;
        }
    </style>
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
                                <h2 align="center">CHECKLIST GERENCIA</h2>
            

                <div class="col-sm-6" align="center">
                     <img src="../resources/assets/img/modulos.png"  width="450" height="140">
                    <img src="../resources/assets/img/tablaimagen.png" width="450" height="140">
                                    
                </div>
                <div class="col-sm-6" align="center">

                    <h3>
                        Realice sus operaciones con total comodidad y transparencia para la eficiencia de su proceso de supervisión de las agencias
                    </h3>

                <div class="botoningreso">
                        <a href="{{ route('login') }}" class="btn btn-primary" id="btningreso">
                           INGRESAR AL SISTEMA
                        </a>
                </div>
                    
                </div>

            </div>

           

         
        </section>

        <footer>
        <span> Desarrollador por Minkay</span>
            
     
        </footer>
         


    </body>
</html>
