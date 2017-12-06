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
    private $idIncidence;
    private $nameIncidence;
    private $descriptionIncidence;
    private $solutionIncidence;
    private $dateIncidence;
    private $dateSolutionIncidence;
    private $priorityIncidence;
    private $recurrenceIncidence;
    private $impactIncidence;
    private $leveIncidence;
    private $origenIncidence;
    private $userModify;
    private $statusIncidence;
    
    public function __construct($idIncidence, $nameIncidence, $descriptionIncidence, $solutionIncidence, $dateIncidence, $dateSolutionIncidence, $priorityIncidence, $recurrenceIncidence, $impactIncidence, $leveIncidence, $origenIncidence, $userModify, $statusIncidence) {
        $this->idIncidence = $idIncidence;
        $this->nameIncidence = $nameIncidence;
        $this->descriptionIncidence = $descriptionIncidence;
        $this->solutionIncidence = $solutionIncidence;
        $this->dateIncidence = $dateIncidence;
        $this->dateSolutionIncidence = $dateSolutionIncidence;
        $this->priorityIncidence = $priorityIncidence;
        $this->recurrenceIncidence = $recurrenceIncidence;
        $this->impactIncidence = $impactIncidence;
        $this->leveIncidence = $leveIncidence;
        $this->origenIncidence = $origenIncidence;
        $this->userModify = $userModify;
        $this->statusIncidence = $statusIncidence;
    }
    
    public function getIdIncidence() {
        return $this->idIncidence;
    }

    public function getNameIncidence() {
        return $this->nameIncidence;
    }

    public function getDescriptionIncidence() {
        return $this->descriptionIncidence;
    }

    public function getSolutionIncidence() {
        return $this->solutionIncidence;
    }

    public function getDateIncidence() {
        return $this->dateIncidence;
    }

    public function getDateSlutionIncidence() {
        return $this->dateSlutionIncidence;
    }

    public function getPriorityIncidence() {
        return $this->priorityIncidence;
    }

    public function getRecurrenceIncidence() {
        return $this->recurrenceIncidence;
    }

    public function getImpactIncidence() {
        return $this->impactIncidence;
    }

    public function getLeveIncidence() {
        return $this->leveIncidence;
    }

    public function getOrigenIncidence() {
        return $this->origenIncidence;
    }

    public function getUserModify() {
        return $this->userModify;
    }

    public function getStatusIncidence() {
        return $this->statusIncidence;
    }
    
    


    
}
