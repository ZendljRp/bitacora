<?php
include_once './lib/LibMysql/ConexionDB.php';
class ConsultaDB extends ConexionDB{
    private $resultado;
    
    function __construct() {
        parent::__construct();
    }
    
    public function get_resultado() {
        return $this->resultado;
    }

    public function getRow(){
        $lista = array();
        $link  = $this->getLink();
        $resultado = $this->get_resultado();
        
        if(!$this->resultado=$link->query($this->stm)){
            die("Consulta no procesada");
        }
        
        while($row=$resultado->fetch(PDO::FETCH_OBJ)) {
            array_push($lista, $row);
        }
        
        return $lista;
    }
    
}
