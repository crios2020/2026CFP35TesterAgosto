<?php
include_once "php/connectors/connector.php";
$connector=new Connector();
$registros=$connector->getAll("cursos");
foreach ($registros as $registro) {
    echo "<option value='" . $registro['id'] . "'>" .
            $registro['id'].', '.$registro['titulo'].', '.$registro['profesor']
            .', '.$registro['dia'].', '.$registro['turno']
        ."</option>";
}
?>