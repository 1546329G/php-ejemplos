<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>    
    <center><h1>Busqueda de Pacientes</h1></center>
    <!-- <form action="P22.1-consulta-pdo.php" method="POST"> -->
    <input type="text" placeholder="Escribe aqui" name="nombre" id="nombre" /><br>
    <label id="tos" name="tos">Tos</label><input type="checkbox" for="tos">
    <button type="button" onclick="buscarPacientes();">Buscar</button>
    <table style="border: 1px solid black;" id="tabla">
        <tr>
            <td>Paciente</td>
            <td>Edad</td>
            <td>Talla</td>
            <td>Peso</td>
            <td>Tos</td>
            <td>Fiebre</td>
            <td>Disnea</td>
            <td>Acciones</td>
        </tr>          
    </table>
    <!-- </form> -->
    <script type="text/javascript"
    src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="P25.1_ajax.js"></script>
 
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Nuevo Paciente
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombres" name="nombres"/>
                <label for="edad" class="form-label">Edad:</label>
                <input type="text" class="form-control" id="edad" name="edad"/>
                <label for="talla" class="form-label">Talla:</label>
                <input type="text" class="form-control" id="talla_m" name="talla"/>
                <label for="peso" class="form-label">Peso:</label>
                <input type="text" class="form-control" id="peso_kg" name="peso"/>
                <label for="tos" class="form-label">Tos:</label>
                <input type="checkbox" class="form-check-input" id="sintoma_tos" name="tos"/>
                <label for="fiebre" class="form-label">Fiebre:</label>
                <input type="checkbox" class="form-check-input" id="sintoma_fiebre" name="fiebre"/>
                <label for="disnea" class="form-label">Disnea:</label>
                <input type="checkbox" class="form-check-input" id="sintoma_disnea" name="disnea"/><br>
                <button type="button" class="btn-guardar" data-bs-dismiss="modal" aria-label="guardar" onclick="Actualizar" style="background-color: #0E78FF; color: white; border: none; border-radius: 4px; padding: 10px 20px;">Guardar</button>
                <button type="button" class="btn-cancelar" data-bs-dismiss="modal" aria-label="cancelar" onclick="Cancelar" style="background-color: #0E78FF; color: white; border: none; border-radius: 4px; padding: 10px 20px;">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>