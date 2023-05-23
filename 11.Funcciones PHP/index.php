<?php

function hexagonArea($side) {
$area= (3*sqrt(3)*pow($side, 2)) /2;
return $area;
}

include "view.php";

?>