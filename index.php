<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/paises.controlador.php";
require_once "controladores/departamentos.controlador.php";
require_once "controladores/ciudades.controlador.php";
require_once "controladores/tipoProducto.controlador.php";
require_once "controladores/empresas.controlador.php";

require_once "modelos/productos.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/paises.modelo.php";
require_once "modelos/departamentos.modelo.php";
require_once "modelos/ciudades.modelo.php";
require_once "modelos/tipoProducto.modelo.php";
require_once "modelos/empresas.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla ->ctrPlantilla();

