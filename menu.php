<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<title>Parcial 2</title>
	<link rel="stylesheet" href="act4.css">
    <script src="jquery-3.6.1.js"> </script>
</head>
<body>
	
<form id="formulario" method="post">

Ingrese el nombre de su Jugador
    <input name="name" type="text" placeholder="..."><br><br>

    <button type="button" id="iniciar">Iniciar juego</button><br><br>

</form>
<div id="resultado">

</div>

  
<!-- Ajax para Iniciar juego y guardar el nombre!-->
<script>
$("#iniciar").click(function(){
    $.ajax({
        url: "clases_abs.php",
        type: "post",
        data: $("#formulario").serialize(),
        success: function(resultado){
            $("#resultado").html(resultado);
        }
    });
});
</script>

<!-- Ajax para Obtener Area!-->
<script>
$("#area").click(function(){
    $.ajax({
        url: "clase_abstracta.php",
        type: "post",
        data: $("#formulario2").serialize(),
        success: function(resultado){
            $("#resultado2").html(resultado);
        }
    });
});
</script>

</body>
</html>