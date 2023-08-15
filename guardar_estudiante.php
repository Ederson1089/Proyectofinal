<?php
include_once "conexion.php";
include_once "Estudiante.php";
$estudiante = new Estudiante($_POST["nombre"], $_POST["apellido"], $_POST["grupo"], $_POST["edad"]);
$estudiante->guardar();
header("Location: mostrar_estudiantes.php");
?>