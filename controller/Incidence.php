<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Incidence
 *
 * @author ADS
 */
class Incidence {
    //put your code here
    private $appNombre;
    private $appTitulo;
    private $appAutor;
    
    public function __construct($appNombre, $appTitulo, $appAutor) {
        $this->appNombre = $appNombre;
        $this->appTitulo = $appTitulo;
        $this->appAutor = $appAutor;
    }
    
    public function get_appNombre() {
        return $this->appNombre;
    }

    public function get_appTitulo() {
        return $this->appTitulo;
    }

    public function get_appAutor() {
        return $this->appAutor;
    }
    
    public function fullNamePage() {
        return ".::" . $this->appNombre . " | " . $this->appTitulo . "::.";
    }
    
    public function index() {
        
    }



}
