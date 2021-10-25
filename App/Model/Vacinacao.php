<?php 

namespace App\Model;

class Vacinacao{
    private $id, $vacina, $lotevacina, $dataaplica, $dose, $doseout;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getVacina(){
        return $this->vacina;
    }

    public function setVacina($vacina){
        $this->vacina = $vacina;
    }

    public function getLotevacina(){
        return $this->lotevacina;
    }

    public function setLotevacina($lotevacina){
        $this->lotevacina = $lotevacina;
    }

    public function getDataaplica(){
        return $this->dataaplica;
    }

    public function setDataaplica($dataaplica){
        $this->dataaplica = $dataaplica;
    }

    public function getDose(){
        return $this->dose;
    }

    public function setDose($dose){
        $this->dose = $dose;
    }

    public function getDoseout(){
        return $this->doseout;
    }

    public function setDoseout($doseout){
        $this->doseout = $doseout;
    }

    
}