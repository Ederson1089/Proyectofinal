
<?php
include_once "conexion.php";
include_once "encabezado.php";
include_once "Estudiante.php";
$estudiantes = Estudiante::obtener();
?>
<div class="row">
    <div class="col-12">
        <h1>Listado de estudiantes</h1>
        <a href="formulario_registro_estudiante.php" class="btn btn-info my-2">Nuevo</a>
    </div>
    <div class="col-12 table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Grado</th>
                    <th>Edad</th>
                    <th>Notas</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudiantes as $estudiante) { ?>
                    <tr>
                        <td><?php echo $estudiante["id"] ?></td>
                        <td><?php echo $estudiante["nombre"] ?></td>
                        <td><?php echo $estudiante["apellido"] ?></td>
                        <td><?php echo $estudiante["grupo"] ?></td>
                        <td><?php echo $estudiante["edad"] ?></td>
                        <td>
                            <a href="notas_estudiante.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-info">
                                Notas
                            </a>
                        </td>
                        <td>
                            <a href="editar_estudiante.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="eliminar_estudiante.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-danger">
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
