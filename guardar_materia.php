<?php
include_once "conexion.php";
include_once "Materia.php";
$materia = new Materia($_POST["nombre"], $_POST["creditos"], $_POST["nivel"], $_POST["tipo"]);
$materia->guardar();
header("Location: mostrar_materias.php");
?>