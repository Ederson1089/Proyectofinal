<?php
class Materia
{
    private $nombre, $creditos, $nivel, $tipo, $id;

    public function __construct($nombre, $creditos, $nivel, $tipo, $id = null)
    {
        $this->nombre = $nombre;
        $this->creditos = $creditos;
        $this->nivel = $nivel;
        $this->tipo = $tipo;

        if ($id) {
            $this->id = $id;
        }
    }

    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO materias
            (nombre, creditos, nivel, tipo)
                VALUES
                (?, ?, ?, ?)");
        $sentencia->bind_param("ssss", $this->nombre, $this->creditos, $this->nivel, $this->tipo);
        $sentencia->execute();
    }

    public static function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT id, nombre, creditos, nivel, tipo FROM materias");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public static function obtenerUna($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT id, nombre, creditos, nivel, tipo FROM materias WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();
    }
    public function actualizar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("update materias set nombre = ?, creditos = ?, nivel = ?, tipo = ? where id = ?");
        $sentencia->bind_param("ssssi", $this->nombre, $this->creditos, $this->nivel, $this->tipo, $this->id);
        $sentencia->execute();
    }

    public static function eliminar($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM materias WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
    }
}
?>