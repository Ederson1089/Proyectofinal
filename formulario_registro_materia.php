
<?php include "encabezado.php" ?>
<div class="row">
    <div class="col-12">
        <h1>Registro de materia</h1>
        <form action="guardar_materia.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="creditos">Creditos</label>
                <input name="creditos" required type="text" id="creditos" class="form-control" placeholder="Creditos">
            </div>
            <div class="form-group">
                <label for="nivel">Nivel</label>
                <input name="nivel" required type="text" id="nivel" class="form-control" placeholder="Nivel">
            </div>
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <input name="tipo" required type="text" id="tipo" class="form-control" placeholder="Tipo">
            </div>

            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php include "pie.php" ?>