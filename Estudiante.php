<?php
class Estudiante
{
    private $nombre, $apellido, $grupo, $edad, $id;

    public function __construct($nombre, $apellido, $grupo, $edad, $id = null)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->grupo = $grupo;
        $this->edad = $edad;

        if ($id) {
            $this->id = $id;
        }
    }

    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO estudiantes
            (nombre, apellido, grupo, edad)
                VALUES
                (?, ?, ?, ?)");
        $sentencia->bind_param("ssss", $this->nombre, $this->apellido, $this->grupo, $this->edad);
        $sentencia->execute();
    }

    public static function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT id, nombre, apellido, grupo, edad FROM estudiantes");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public static function obtenerUno($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT id, nombre, apellido, grupo, edad FROM estudiantes WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();
    }
    public function actualizar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("update estudiantes set nombre = ?, apellido = ?, grupo = ?, edad = ? where id = ?");
        $sentencia->bind_param("ssssi", $this->nombre, $this->apellido, $this->grupo,$this->edad, $this->id);
        $sentencia->execute();
    }

    public static function eliminar($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM estudiantes WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
    }
}
?>