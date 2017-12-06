<?php
$path_root = "/";
$directory_host = dirname("localhost/bitacora-mvc/");
$directory_root = basename("localhost/bitacora-mvc/");
$rootfile = "http://".$directory_host . $path_root . $directory_root;
include_once 'controller/Incidence.php';
$incidence = new Incidence("Bitacora", "Incidencias", "DirconSolutions", $rootfile);
include_once './vista/pages/incidence/indexincidence.php';
