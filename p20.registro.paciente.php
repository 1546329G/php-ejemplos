<!DOCTYPE html>
<html lang="en">
<form id="formulario" action="" method="post">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<h2>REGISTRO  PASIENTE</h2>
<label for="nombre"> Nombre:</label>
<input type="text" id="nombre" name="nombre" required /><br>

<label for="apellido"><A></A>pellido:</label>
<input type="text" id="apellido" name="apellido" required /><br>

<label for="edad">Edad: </label>
<input type="text" id="edad" name="edad" required /><br>

<label for="talla">Talla(cm):</label>
<input type="text" id="talla" name="talla" required /><br>

<label for="peso">Peso (kg): </label>
<input type="text" id="peso" name="peso"><br>




<h2><u>Sintomas</u></h2>
<input type="checkbox" name="fiebre" id="fiebre">
<label for="fiebre">Fiebre</label><br>

<input type="checkbox" name="disnea" id="disnea">
<label for="disnea">Disnea</label><br>

<input type="checkbox" name="Dolor muscular" id="Dolor muscular">
<label for="Dolor muscular">Dolor muscular</label><br>

<input type="checkbox" id="gripe" name="gripe">
<label for="gripe">Gripe</label><br>

<input type="checkbox" id="presion alta" name="presion alta">
<label for="gripe">presion alta </label><br>

<input type="checkbox" id="Fatiga" name="Fatiga">
<label for="Fatiga">Fatiga</label><br> 

<input type="checkbox" id="Garraspera" name="Garraspera">
<label for="Garraspera">Garraspera</label><br>

<label for="fecha">**Fecha de vacunacion: **</label>
<input type="date" id="fecha" name="fecha">
<div class="Botones">
<br>
<button type="submit">Guardar</button>
<button>Cancelar</button>
</div>
</form>





</body>
</html>