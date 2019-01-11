<?php
require 'leadsolution.class.php';
$res = Leadsolution::handle('http://leadtowin.afiliasolution.com/leads');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Comparador control de flota</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon2.png" type="image/x-icon">

    <!-- <link rel="image_src" href="img/logo.png"> -->
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="style.css" /> -->
    <!-- <script src="main.js"></script> -->

    <!-- bootstrap -->
    <!-- Latest compiled and minified CSS -->
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"-->
<!-- Optional theme -->

<!-- Latest compiled and minified JavaScript -->

  <!-- Fin de bootstrap -->


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">


  <link rel="stylesheet" type="text/css" href="css/cool.css">


  <link type="text/css" rel="stylesheet" href="css/2.css" media="all" >
    <link rel="stylesheet" href="http://18.224.116.77/bootstrap337/">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="overlay.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <!-- GOOGLE FONTS DOWN HERE-->
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Javascript code-->
    <script src="js/main.js"></script>
    <script src="js/fade.js"></script>
    <script src="js/fade2.js"></script>
    <script src="js/smooth.js"></script>
    <!--script src="js/altura.js"></script-->


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


</head>

<body>
<header style="text-align: center;background-color:rgb(29, 29, 29)" id='myForm'>
  <h1>¡Compara precios de servicios de control de flota y ahorra!</h1>
</header>
<!-- Principal -->
  <div  id='j' class="w3-row-padding sig container-fluid">
        <!-- Main -->

               <!-- <form method="post">
               <p class="formtitle" style="text-align: center;"><strong>¿Cuántos vehículos desea localizar?</strong></p>
               <div style="text-align: center;">
               <input class="formitem" type="submit" value="1-4"        name='meta_vehiculos'><br>
               <input class="formitem" type="submit" value="5-9"        name='meta_vehiculos'><br>
               <input class="formitem" type="submit" value="10-49"      name='meta_vehiculos'><br>
               <input class="formitem" type="submit" value="50-100"     name='meta_vehiculos'><br>
               <input class="formitem" type="submit" value="Más de 100" name='meta_vehiculos'><br>
               </div>
               </form> -->
<!-- video -->
    <div id='fuck' style=' box-sizing: content-box;' class='container-fluid'>
        <img class='sakura' id='wide'  style='width: 130%;' >


    </div>
        <div class="overlay container" >

            <div class="wrapper">

                <ul class="steps">
                    <li class="is-active">Pasos 1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                </ul>
  <!-- formulario   -->
              <form class="form-wrapper" method='POST' id="form1" >
                <fieldset form="form1" class="section is-active">
                        <h3>¿Cuantos Vehículos desea localizar?</h3>
                        <div class="row">

                            <div class="twelve col">
                                <input  type="radio" class='button' name="meta_cantidadVehiculos" value="1 a 4" id="ans1">
                                    <label for="ans1">
                                        <h4>1-4</h4>
                                    </label>
                            </div>

                        </div>
                        <div class='row'>

                            <div class="twelve col">
                                <input  type="radio" class='button' name='meta_cantidadVehiculos' value="5 a 9" id="ans2">
                                    <label for="ans2">
                                        <h4>5-9</h4>
                                    </label>
                            </div>

                        </div>
                        <div class='row'>

                            <div class="twelve col">
                                <input  type="radio" class='button' name='meta_cantidadVehiculos' value="10 a 50" id="ans3">
                                    <label for="ans3">
                                        <h4>10-49</h4>
                                    </label>
                            </div>

                        </div>

                        <div class='row'>

                            <div class="twelve col">
                                <input type="radio" class='button' name='meta_cantidadVehiculos' value="50 a 100" id="ans4">
                                    <label for="ans4">
                                        <h4>50-100</h4>
                                    </label>
                            </div>

                        </div>

                        <div class='row'>

                            <div class="twelve col">
                                <input type="radio" class='button' name='meta_cantidadVehiculos'value="mas de 100" id="ans5">
                                    <label for="ans5">
                                        <h4>Más de 100</h4>
                                    </label>
                            </div>

                        </div>


                        <button disabled='disabled' class="button" id='buttonA' >¡Compare precios!</button>
                    </fieldset>

                    <fieldset form="form1" class="section">
                    <h3>¿Necesitas de este servicio para un negocio?</h3>
                    <div class="row cf">

                        <div class="six col">
                        <input  type="radio" class='button' name="meta_negocio" value="SI" id="r1" >
                        <label for="r1">
                            <h4>Sí</h4>
                        </label>
                        </div>

                        <div class="six col">
                        <input type="radio" class='button' name="meta_negocio" value="NO"id="r2">
                        <label for="r2">
                            <h4>No</h4>
                        </label>
                        </div>



                    </div>
                    <button id='back2' class='sex'>Volver</button>


                    </fieldset>

                    <fieldset form="form1" class="section">
                    <h3>¿Qué es lo que desea localizar?</h3>
                    <div class="row cf">

                        <div class=" col-12 ">
                        <input  type="radio" class='button' name="meta_Gestion" value="Autos/camionetas" id="x1">
                        <label for="x1">
                            <h4>Autos/camionetas</h4>
                        </label>
                        </div>

                    </div>

                    <div class='row'>

                        <div class=" col-12 ">
                            <input  type="radio" class='button' name="meta_Gestion" value="Camiones"id="x2">
                            <label for="x2">
                                <h4>Camiones</h4>
                            </label>
                        </div>

                    </div>

                    <div class='row'>
                        <div class="col-12">
                        <input  type="radio" class='button'name="meta_Gestion" value="Maquinaria pesada" id="x3"><label for="x3">
                            <h4>Maquinaria pesada</h4>
                        </label>
                        </div>

                    </div>


                     <div class="row cf">

                            <div class=" col-12">
                            <input type="radio" class='button' name="meta_Gestion" value="Motocicletas" id="x4" >
                            <label for="x4">
                                <h4>Motocicletas</h4>
                            </label>
                            </div>
                     </div>
                     <div class='row cf'>
                            <div  class=" col-12">
                            <input type="radio" class='button' name="meta_Gestion" value="Personal" id="x5"><label for="x5">
                                <h4>Rastreo personal</h4>
                            </label>
                            </div>
                           <button id='back2' class='sex'>Volver</button>

                    </div>


                    </fieldset>
    <!--  Here we can star with the formMerging -->
                    <fieldset form="form1" class="section 3">

                    <input autocomplete='off'  type='text' name="name" placeholdeR='Nombre' id='nombre'>
                    <input autocomplete='off' type='text' name="mobile_phone" placeholdeR='Teléfono: 34640000111' id='telefono'>
                    <input autocomplete='off'   type='text' name="meta_codigopostal" placeholdeR='Código Postal' id='postalCode'>
                    <input autocomplete='off'   type='text' name="meta_empresa" placeholdeR='Nombre de Empresa. S.A' id='negocio'>
                    <input autocomplete='off'  type='email' name="email" placeholdeR='Correo: ejemplo@gmail.com' id='correo'>
                    <input type="hidden" name="source" value="<?=isset($_GET['source'])?$_GET['source']:'JHAVAGV'?>" />
                    <input type="hidden" name="id_country" value="1" />
                    <input type="hidden" name="format" value="json" />
                    <button  id='back2' style='right:200px;' class='sex'>Volver</button>
                    <button disabled='true' class="submit button" type="submit" id='buttonA4'>¡Compare precios!</button>
                    </fieldset>



                    <fieldset class="section">
                        <div>
                            <h5>Gracias por su solicitud</h5>
                            <p>¿Qué sucede ahora?</p>
                            <!--div class='button sex'>Go back</div-->
                        </div>
                    </fieldset>

                </form>

                </div>

        </div>


  </div>

<!-- Container element, trying parallax effect style='width: 130%;' en los 2 container fluids de los parallaxes
    *Recently changed width of row sexi from 90% to 100%-->
<!-- caja 1 -->
    <div class="parallax"  style='width: 130%'>
        <div class='container-fluid' >
            <div class='wrapper' style='text-align:center'>
                <div class='row sexi' style='display:inline-block; width:100%;'>
                    <div class='col col-xl-1 col-lg-1 col-sm-2 col-1'></div>
                    <div class='col col-xl-3 col-lg-3 col-sm-5 toptexts2 col-7' id='toptexts2' style=' color:#ffffff; background-color:rgba(156, 156, 156, 0.5);
                                      border-radius: 1%;box-shadow: 0px 2px 4px rgb(131, 131, 131); ' >
                        <h3 class='text-left'>Consigue la solución mas completa para la gestión de tu flota</h3>
                        <p class='text-left'>
                          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Sistema antirobo.<br>
                          &nbsp;<i class="fa fa-female" aria-hidden="true"></i>&nbsp; Anti intrución de polizones<br>
                          <i class="fas fa-address-card"></i> Cumplimiento de jornada laboral<br>
                          &nbsp;<i class="fa fa-mobile-phone" aria-hidden="true"></i>&nbsp; Reporte de entregas y recogidas desde smartphones.<br>
                          <i class="fa fa-automobile" aria-hidden="true"></i>&nbsp; Informe de kilometrages y horas motor.<br>

                          <br>
                          <p><strong>Consigue estos y otros beneficios de sistemas de control de flota, te asesoramos segun tus necesidades para que adquieras el mejor servicio y al mejor precio.</strong></p>
                        </p>
                        <div>
                            <a href='#myForm'><button class='buttonInfo'>Solicitar información</button></a>
                        </div>
                    </div>
                    <div class='col col-xl-4 col-lg-4 col-sm-2 col-1'></div>
                    <div class='col col-xl-4 col-lg-4 col-sm-3 col-3'></div>



                </div>


            </div>
        </div>
    </div>
<!-- Container element, trying parallax effect -->
    <div class="parallax2"   style='width: 130%;'>

        <div class='container-fluid 'style='height: 410px;'>
            <div class='wrapper' style='text-align:center'>
                <div class='row' style='display:inline-block; width: 100%;'>
                    <div class='col col-xl-1 col-lg-1 col-sm-2 col-1'></div>
                    <div class='col col-xl-3 col-lg-3 col-sm-5 toptexts col-7 ' id='toptexts' style='background-color:rgba(156, 156, 156, 0.5); border-radius: 1%;box-shadow: 0px 2px 4px rgb(131, 131, 131);'>
                        <h2 style='font-weight:400;' class='text-left'>Reduce gastos</h2>
                        <p class='text-left' >
                            Aplicando el sistema de control de flotas ahorra.<br><br>

                            <i class="fas fa-gas-pump"></i> Reduce costo de gasolina<br>
                            <i class="fa fa-map" aria-hidden="true"></i> Optimiza las rutas, reduciendo tiempos<br>

<i class="fa fa-wrench" aria-hidden="true"></i> Atiende fallas del vehículo antes que estas impidan el funcionamiento del mismo.
                         </p>
                                <a href='#myForm'><button class='buttonInfo'>Solicitar información</button></a>


                    </div>
                    <div class='col col-xl-4 col-lg-4 col-sm-2 col-1'></div>
                    <div class='col col-xl-4 col-lg-4 col-sm-3 col-3'></div>



                </div>


            </div>

        </div>





    </div>

        <!-- Carousel process down below.-->
    <div class='container-fluid d-none d-md-block'>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" >
                      <div class="carousel-item active">
                        <img class="d-block w-100"  src="img/flota.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-lg-block joseJi">
                                <p id='joseliP'>"¡Desde que implemente el sistema de control de flota he ahorrado increíblemente! he logrado reducir los costos mensuales un 20%"</p>
                                <h5 style='float:right;'>José Jimenes</h5>
                        </div>

                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/flota2.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-lg-block albertoCo">
                                <p>"Con los datos que me brinda el sistema hemos podido tomar mejores decisiones y logramos aumentar nuestra flota sin perder el control de la misma, es increíble lo mucho que aligera el trabajo del control de la flota"</p>
                                <h5 style='float:right;'>Alberto Correa</h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/taxi.jpeg" alt="Third slide">
                        <div class="carousel-caption d-none d-lg-block felipeVi">
                                <p>Con el sistema de control de flota que nos recomendaron hemos aumentado las ganancias y mejorado el servicio,
                                        Sabemos dónde están cada uno de nuestro choferes en todo momento y asignarlos a los clientes es mas rápido, todos estamos contentos
                                        </p>
                                <h5 style='float:right;'>Felipe Villanueva</h5>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>


                  <div style='position:relative; bottom:90px;' class='atravesar'>
                        <a href='#myForm'><button class='buttonAtravesar'>Solicitar información</button></a>
                    </div>
    </div>

<div  id='footerOfMine'>
  <footer style=" padding-bottom: 35px;text-align: center;height:110px; background-color:rgb(29, 29, 29)"><p style='margin-top:34px;'>Lead to win</p></footer>
</div>
</body>
</html>
