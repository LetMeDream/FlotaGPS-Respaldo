<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Movolytics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="main.js"></script>
   

    
      
</head>
<body>

       <div class="container">
            <div class="wrapper">

            <ul class="steps">
                <li class="is-active">Step 1</li>
                <li>Step 2</li>
                <li>Step 3</li>
                <li>Step 4</li>
                <li>Step 5</li>
                <li>Step 6</li>
                <li>Step 7</li>
                <li>Step 8</li>
            </ul>

            <form class="form-wrapper">

              

                <fieldset class="section is-active">
                <h3>¿Cuantos Vehículos desea localizar?</h3>
                <div class="row">

                    <div class="twelve col">
                        <input type="radio" name="ans1" id="ans1">
                            <label for="ans1">
                                <h4>1-4</h4>
                            </label>
                    </div>

                </div>
                <div class='row'> 

                    <div class="twelve col">
                        <input type="radio" name='ans1' id="ans2">
                            <label for="ans2">
                                <h4>5-9</h4>
                            </label>
                    </div>

                </div>
                <div class='row'> 

                    <div class="twelve col">
                        <input type="radio" name='ans1' id="ans3">
                            <label for="ans3">
                                <h4>10-49</h4>
                            </label>
                    </div>

                </div>

                 <div class='row'> 

                    <div class="twelve col">
                        <input type="radio" name='ans1' id="ans4">
                            <label for="ans4">
                                <h4>50-100</h4>
                            </label>
                    </div>

                </div>

                 <div class='row'> 

                    <div class="twelve col">
                        <input type="radio" name='ans1' id="ans5">
                            <label for="ans5">
                                <h4>Más de 100</h4>
                            </label>
                    </div>

                </div>


                <div class="button" id='buttonC'>¡Compare precios!</div>
                </fieldset>

                <fieldset class="section">
                <h3>¿Necesitas de este servicio para un negocio?</h3>
                <div class="row cf">

                    <div class="six col">
                    <input type="radio" name="r1" id="r1" checked>
                    <label for="r1">
                        <h4>Sí</h4>
                    </label>
                    </div>

                    <div class="six col">
                    <input type="radio" name="r1" id="r2"><label for="r2">
                        <h4>No</h4>
                    </label>
                    </div>

                   

                </div>

                <div class="button" id='buttonC'>Continuar</div>

                </fieldset>
                
                <fieldset class="section">
                <h3>¿Qué es lo que desea localizar?</h3>
                <div class="row cf">

                    <div class="four col">
                    <input type="radio" name="x1" id="x1">
                    <label for="x1">
                        <h4>Autos/camionetas</h4>
                    </label>
                    </div>

                    <div class="four col">
                    <input type="radio" name="x1" id="x2"><label for="x2">
                        <h4>Camiones</h4>
                    </label>
                    </div>

                    <div class="four col">
                    <input type="radio" name="x1" id="x3"><label for="x3">
                        <h4>Maquinaria pesada</h4>
                    </label>
                    </div>

                </div>

                 <div class="row cf">

                        <div class="six col">
                        <input type="radio" name="x1" id="x4" checked>
                        <label for="x4">
                            <h4>Motocicletas</h4>
                        </label>
                        </div>

                        <div class="six col">
                        <input type="radio" name="x1" id="x5"><label for="x5">
                            <h4>Rastreo personal</h4>
                        </label>
                        </div>

                       <div class="button" id='buttonC'>Continuar</div>

                </div>
                
                </fieldset>

                <fieldset class="section">
                <label class='move'><h5 class='move' style='font-size:12px;'>Código Postal:</h5></label>
                <input type='text' name='postalCode' placeholdeR='p.ej. 64000' id='postalCode'>
                <div class="button" id='buttonC'>Continuar</div>
                </fieldset>

                <fieldset class="section">
                <label class='move'><h5 class='move' style='font-size:12px;'>Su nombre:</h5></label>
                <input type='text' name='postalCode' placeholdeR='Pablo Pérez' id='nombre'>
                <div class="button" id='buttonC'>Continuar</div>
                </fieldset>

                <fieldset class="section">
                <label class='move'><h5 class='move' style='font-size:12px;'>Nombre de su negocio:</h5></label>
                <input type='text' name='postalCode' placeholdeR='p.ej. Negocio S.A.' id='negocio'>
                <div class="button" id='buttonC'>Continuar</div>
                </fieldset>

                
                <fieldset class="section">
                <label class='move'><h5 class='move' style='font-size:12px;'>E-mail:</h5></label>
                <input type='text' name='postalCode' placeholdeR='p.ej. ejemplo@gmail.com' id='correo'>
                <div class="button" id='buttonC'>Continuar</div>
                </fieldset>

                <fieldset class="section">
                <label class='move'><h5 class='move' style='font-size:12px;'>Teléfono</h5></label>
                <input type='text' name='postalCode' placeholdeR='p.ej. 91 335 35 35' id='telefono'>
                
                <input class="submit button" type="submit" id='buttonC' value="¡Compare precios!">
                </fieldset>
            </form>

            </div>
        </div>
</body>
</html>