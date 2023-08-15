<?php include "encabezado.php" ?>
<div class="row">
    <div class="col-12">
        <h1>Registro de estudiante</h1>
        <form action="guardar_estudiante.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input name="apellido" required type="text" id="apellido" class="form-control" placeholder="Apellido">
            </div>
            <div class="form-group">
                <label for="grupo">Grado</label>
                <input name="grupo" required type="text" id="grupo" class="form-control" placeholder="Grado">
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input name="edad" required type="text" id="edad" class="form-control" placeholder="Edad">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php include "pie.php" ?>