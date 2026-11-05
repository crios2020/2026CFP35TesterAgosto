<?php ini_set("display_errors", "1"); ?>
<?php
include_once 'php/connectors/connector.php';
if (
    isset($_REQUEST['nombre']) && $_REQUEST['nombre'] != '' &&
    isset($_REQUEST['apellido']) && $_REQUEST['apellido'] != ''
) {
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $edad = $_REQUEST['edad'];
    $id_curso = $_REQUEST['id_curso'];

    //echo $nombre.' '.$apellido.' '.$edad.' '.$id_curso;
    $tabla = "alumnos";
    $campos = "nombre,apellido,edad,id_curso";
    $values = "'" . $nombre . "','" . $apellido . "','" . $edad . "','" . $id_curso . "'";
    $connector=new Connector();
    $connector->insert($tabla,$campos,$values);
    echo 'Se ingreso un nuevo alumno!';
} else {
    echo 'Ingrese un nuevo alumno!';
}
?>