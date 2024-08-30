<?php

/*=============================================
Mostrar errores
=============================================*/
ini_set('display_errors', 1);
ini_set("log_errors", 1); 
ini_set("error_log",  "D:/xampp/htdocs/blog-php/php_error_log"); 

require_once "controladores/plantilla.controlador.php";

require_once "controladores/blog.controlador.php";
require_once "modelos/blog.modelo.php";

require_once "controladores/correo.controlador.php";

require 'extensiones/vendor/autoload.php';

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();