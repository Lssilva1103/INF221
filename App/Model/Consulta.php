<?php 

namespace App\Model;

class Consulta{
    private $idConsulta, $sintomas, $anexos, $medicamentos, $tratamento, $atestado, $exames, $medico;

    public function getIdConsulta(){
        return $this->idConsulta;
    }

    public function setIdConsulta($idConsulta){
        $this->idConsulta = $idConsulta;
    }
    
    public function getSintomas(){
        return $this->sintomas;
    }

    public function setSintomas($sintomas){
        $this->sintomas = $sintomas;
    }

    public function getAnexos(){
        return $this->anexos;
    }

    public function setAnexos($anexos){
        $this->anexos = $anexos;
    }

    public function getMedicamentos(){
        return $this->medicamentos;
    }

    public function setMedicamentos($medicamentos){
        $this->medicamentos = $medicamentos;
    }

    public function getTratamento(){
        return $this->tratamento;
    }

    public function setTratamento($tratamento){
        $this->tratamento = $tratamento;
    }

    public function getAtestado(){
        return $this->atestado;
    }

    public function setAtestado($atestado){
        $this->atestado = $atestado;
    }

    public function getExames(){
        return $this->exames;
    }

    public function setExames($exames){
        $this->exames = $exames;
    }

    public function getMedico(){
        return $this->medico;
    }

    public function setMedico($medico){
        $this->medico = $medico;
    }
}