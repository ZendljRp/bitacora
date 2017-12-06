<?php
$path_root = "/";
$directory_host = dirname("localhost/bitacora-mvc/");
$directory_root = basename("localhost/bitacora-mvc/");
$rootfile = "http://".$directory_host . $path_root . $directory_root;
include_once "./modelo/User.php";

$appNombre="Administrador de incidencias interno";
$appTitulo=".:: Login | Dircon Solutions ::.";
$appAutor="Dircon Solutions";

include_once './vista/pages/login/login.php';


