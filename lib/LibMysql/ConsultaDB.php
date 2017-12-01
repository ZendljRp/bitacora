<?php
include_once './lib/LibMysql/ConexionDB.php';
class ConsultaDB extends ConexionDB{
    private $resultado;
    
    function __construct() {
        parent::__construct();
    }
    
    public function getRow(){
        $lista=array();
        if(!$this->resultado=mysql_query($this->stm)){
            die("Consulta no procesada");
        }
        while($row=mysql_fetch_array($this->resultado)) {
            array_push($lista, $row);
        }
        return $lista;
    }
    
}
