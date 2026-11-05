<?php
include_once "php/connectors/connector.php";
$connector = new Connector();
//$registros = $connector->getAll("cursos");
$buscar = "";
if (isset($_REQUEST['buscar'])) $buscar = $_REQUEST['buscar'];
$registros = $connector->get("cursos", "titulo like '%" . $buscar . "%'");
foreach ($registros as $registro) {
    echo ("<tr>");
    echo ("<td>" . $registro['id'] . "</td>");
    echo ("<td>" . $registro['titulo'] . "</td>");
    echo ("<td>" . $registro['profesor'] . "</td>");
    echo ("<td>" . $registro['dia'] . "</td>");
    echo ("<td>" . $registro['turno'] . "</td>");
?>
    <td>
        <form action="php/front/cursosDelete.php" onsubmit="return confirmarBorrar()">
            <input type="text" name="idBorrar" value="<?php echo $registro['id']; ?>" hidden readonly>
            <button type="submit" class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                </svg>
            </button>
        </form>
    </td>
<?php
    echo ("</tr>");
}
?>