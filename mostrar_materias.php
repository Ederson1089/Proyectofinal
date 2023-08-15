<?php
include_once "conexion.php";
include_once "encabezado.php";
include_once "Materia.php";
$materias = Materia::obtener();
?>
<div class="row">
    <div class="col-12">
        <h1>Listado de materias</h1>
        <a href="formulario_registro_materia.php" class="btn btn-info my-2">Nueva</a>
    </div>
    <div class="col-12 table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Creditos</th>
                    <th>Nivel</th>
                    <th>Tipo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materias as $materia) { ?>
                    <tr>
                        <td><?php echo $materia["id"] ?></td>
                        <td><?php echo $materia["nombre"] ?></td>
                        <td><?php echo $materia["creditos"] ?></td>
                        <td><?php echo $materia["nivel"] ?></td>
                        <td><?php echo $materia["tipo"] ?></td>
                        <td>
                            <a href="editar_materia.php?id=<?php echo $materia["id"] ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="eliminar_materia.php?id=<?php echo $materia["id"] ?>" class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include_once "pie.php";
