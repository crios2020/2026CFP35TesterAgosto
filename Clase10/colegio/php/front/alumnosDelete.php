<?php ini_set("display_errors", "1"); ?>
<?php
    include_once '../connectors/connector.php';
    if(isset($_REQUEST['idBorrar'])){
        $idBorrar=$_REQUEST['idBorrar'];
        $connector=new Connector();
        $connector->delete("alumnos", "id=".$idBorrar);
    }
    header('Location: '."../../alumnos.php");
?>