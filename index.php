<?php
require_once "controladores/ctrlprincipal.php";
require_once "controladores/ctrlusuarios.php";

require_once "modelos/mdlusuarios.php";

$objPrincipal = new principal();
$objPrincipal->ctrlPrincipal();