<?php
include_once './lib/LibMysql/ParametrosDB.php';
class ConexionDB {
    private $link=null;
    public $stm=null;
    function __construct() {
        try{
            $host =  ParametrosDB::DB_HOST_SQLSRV;
            $user =  ParametrosDB::DB_USER_SQLSRV;
            $pass =  ParametrosDB::DB_PASW_SQLSRV;
            $DBname =  ParametrosDB::DB_NAME_SQLSRV;
            $this->link = new PDO ("sqlsrv:Server=$host;Database=$DBname", $user, $pass);
            $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo "No se accedio a la Base de Datos: " . $e->getMessage() . "\n";
            exit;
        }
    }
    
    public function getLink() {
        return $this->link;
    }
}
