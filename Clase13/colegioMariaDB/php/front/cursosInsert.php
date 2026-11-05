<?php ini_set("display_errors", "1"); ?>
<?php
include_once 'php/connectors/connector.php';
if (
    isset($_REQUEST['titulo']) && $_REQUEST['titulo'] != '' &&
    isset($_REQUEST['profesor']) && $_REQUEST['profesor'] != ''
) {
    $titulo = $_REQUEST['titulo'];
    $profesor = $_REQUEST['profesor'];
    $dia = $_REQUEST['dia'];
    $turno = $_REQUEST['turno'];

    //echo $titulo.' '.$profesor.' '.$dia.' '.$turno;
    $tabla = "cursos";
    $campos = "titulo,profesor,dia,turno";
    $values = "'" . $titulo . "','" . $profesor . "','" . $dia . "','" . $turno . "'";
    $connector=new Connector();
    $connector->insert($tabla,$campos,$values);
    echo 'Se ingreso un nuevo curso!';
} else {
    echo 'Ingrese un nuevo curso!';
}
?>