<?php
include_once "php/enum/dia.php";
foreach (Dia::cases() as $dia) {
    echo "<option value='" . $dia->name . "'>" .
                strtolower($dia->name) . 
         "</option><br>";
}
