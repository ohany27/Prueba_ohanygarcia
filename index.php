<?php
	require 'conexion/database.php';
    $db = new Database();
    $con = $db->conectar();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validación de Formulario con Javascript</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css/css.css">
</head>

<body>
   <main>
        <form  method="POST" autocomplete="off" class="formulario" id="formulario">

                <!-- div para capturar el Documento -->

                <div class="" id="grupo__usuario">
                    <label for="docu" class="formulario__label">Documento</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="documento" id="documento" placeholder="Documento">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">
                            El documento tiene que ser de 6 a 11 dígitos y solo puede contener numeros.</p>
                </div>

                <!-- div para capturar el Nombre -->

                <div class="" id="grupo__nombre">
                    <label for="nombre" class="formulario__label">Nombre </label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" onkeyup="mayus(this);" name="nombre" id="nombre" placeholder="Nombres">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">
                        Los nombres del usuario tienen que ser de 3 a 15 dígitos y solo puede contener letras.</p>
                </div>


                <!-- div para capturar el Apellido -->
                <div class="" id="grupo__apellido">
                    <label for="apellido" class="formulario__label">Apellido</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" onkeyup="mayus(this);" name="apellido" id="apellido" placeholder="Apellidos">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">
                        Los apellidos del usuario tienen que ser de 3 a 15 dígitos y solo puede contener letras.</p>
                </div>

                

                <!-- div para capturar el Correo Electronico -->
                <div class="" id="grupo__correo">
                    <label for="correo" class="formulario__label">Correo Electrónico</label>
                    <div class="formulario__grupo-input">
                        <input onkeyup="minus(this);" type="email" class="formulario__input" name="correo" id="correo" placeholder="@correo.com">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
                </div>

                <!-- div para capturar el Telefono -->
                <div class="" id="grupo__correo">
                    <label for="telefono" class="formulario__label">Telefono </label>
                    <div class="formulario__grupo-input">
                        <input onkeyup="minus(this);" type="text" class="formulario__input" name="telefono" id="telefono" placeholder="Telefono">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El Telefono solo puede contener numeros.</p>
                </div>

                <!-- div para capturar fecha de entrada -->
                <div class="" id="grupo__correo">
                    <label for="fecha" class="formulario__label">Fecha </label>
                    <div class="formulario__grupo-input">
                        <input onkeyup="minus(this);" type="date" class="formulario__input" name="Fecha" id="Fecha">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El Telefono solo puede contener numeros.</p>
                </div>

                <!-- div para capturar el Juego Favorito -->
                <div class="" id="grupo__telefono">
                    <label for="id_tip_use" class="formulario__label"> Atracciones </label>
				    <div class="formulario__grupo-select">                 
                    <select class="" name="juego" id="juego" required >
                        <option value="">*** Seleccione Juego Favorito ***</option>
                            <?php
                                $statement = $con -> prepare ("SELECT * FROM juego");
                                $statement -> execute();
                                while ($row = $statement -> fetch(PDO::FETCH_ASSOC))
                                {
                                echo "<option value=" . $row['Id_juego'] . ">" . $row['Juego']. "</option>";
                                }
                                ?>
                    </select>
                    </div>
                </div>

                <!-- div para capturar el combo -->
                <div class="" id="grupo__telefono">
                    <label for="id_tip_use" class="formulario__label"> Combos </label>
				    <div class="formulario__grupo-select">                 
                    <select class="" name="combos" id="combos" required >
                        <option value="">*** Seleccione Combos ***</option>
                            <?php
                                $statement = $con -> prepare ("SELECT * FROM combos");
                                $statement -> execute();
                                while ($row = $statement -> fetch(PDO::FETCH_ASSOC))
                                {
                                echo "<option value=" . $row['Id_tip_com'] . ">" . $row['Tip_com']. "</option>";
                                }
                                ?>
                    </select>
                    </div>
                </div>  

                <div class="" id="grupo_telefono">
                    <label for="id_tip_use" class="formulario__label"> Comida</label>
				    <div class="formulario__grupo-select">
                    <select class="" name="comida" id="comida" required >
                        <option value="">** Seleccione la Comida **</option>
                           
                    </select>               
                    </div>
                </div>  

<!----------------------------------------------- Fin Select ----------------------------------------------->
            <!-- Grupo: Terminos y Condiciones -->
			<div class="formulario__grupo-terminos" id="grupo__terminos">
				<label class="formulario__label">
					<input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
					Acepto los Terminos y Condiciones
				</label>
			</div>
            
			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>
            
            <p class="text-center">
                      
            <div class="formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn" name="save" value="guardar" >Enviar</button>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
            </div>
                
        
        </form>
   </main>
   <script src="js/jquery.js"></script>
   <script src="js/formulario.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

    <!--  Javascript funcion para convertor en mayusculas y minusculas -->
    <!-- <script src="../js/main.js"></script> -->
    <script>
        function mayus(e) {
        e.value = e.value.toUpperCase();
        }

        function minus(e) {
        e.value = e.value.toLowerCase();
        }
    </script>

  <!----------------------------------------------- Inicio Java Select ----------------------------------------------->

    <script type="text/javascript">
        $(document).ready(function(){
            $('#combos').val(0);
            recargarLista();

            $('#combos').change(function(){
                recargarLista();
            })
        })
    </script>

    <script type="text/javascript">
       function recargarLista(){
        $.ajax({
            type:"POST",
            url:"comida.php",
            data:"combos=" + $('#combos').val(),
            success:function(r){
                $('#comida').html(r);
            }
        })
       }
    </script>


<!----------------------------------------------- Fin Java Select ----------------------------------------------->
  
</body>

</html>
