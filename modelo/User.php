<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author ADS
 */
class User {
    private $user;
    private $password;
    
    public function __construct($user, $password) {
        $this->user = $user;
        $this->password = $password;
    }
    
    public function getUser() {
        return $this->user;
    }

    public function getPassword() {
        return $this->password;
    }


}
