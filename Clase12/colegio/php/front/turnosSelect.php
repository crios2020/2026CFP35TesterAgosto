<?php
include_once "php/enum/turno.php";
foreach (Turno::cases() as $turno) {
    echo "<option value='" . $turno->name . "'>" .
        mb_convert_case($turno->name, MB_CASE_LOWER, "UTF-8"). 
         "</option><br>";
}

?>