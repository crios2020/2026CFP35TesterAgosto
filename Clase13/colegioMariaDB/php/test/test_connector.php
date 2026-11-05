<?php ini_set("display_errors","1");?>
<?php
include_once '../connectors/connector.php';

//http://localhost/objetos/clase29/php/test/test_connector.php
    

echo '-- Inicio de Test Connector --<br>';
$connector=new Connector();
$sql="select version()";        //mariaDB
//$sql="select sqlite_version()";        //sqlite
try{
    $registros = $connector->getConnection()->query($sql);
    echo 'Conexión exitosa!<br>';
    foreach($registros as $row){
        echo 'Se conecto a '.$row[0].'<br>';
    }
}catch(Exception $e){
    echo 'Error de conexión2!<br>';
    echo $e.'<br>';
}
echo '-- Fin de Test Connector --<br>';

$connector->insert(
                    "alumnos",
                    "nombre,apellido,edad,id_curso",
                    "'Laura','Gonzalez',46,1"
                );
$connector->delete("alumnos","id=8");
$connector->update("alumnos","apellido='Rivas'","id=11");

echo '-- Inicio Test .get() --<br>';
$registros = $connector->get("alumnos",
                            "apellido like '%z'");
foreach($registros as $row){
    echo $row['id'].", ".$row['nombre'].", ".$row['apellido'].", ".
         $row['edad'].", ".$row['id_curso']."<br>";
}
echo '-- Fin Test .get() --<br>';

echo '-- Inicio Test .getAll() --<br>';
$registros = $connector->getAll("alumnos");
foreach($registros as $row){
    echo $row['id'].", ".$row['nombre'].", ".$row['apellido'].", ".
         $row['edad'].", ".$row['id_curso']."<br>";
}
echo '-- Fin Test .get() --<br>';


?>