<?php 

namespace App\Model;

class User{
    private $usuario, $nome, $email, $senha, $cpf, $telefone, $sexo, $dataNasc, $tipo_usuario, $crm_coren;

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function getDataNasc(){
        return $this->dataNasc;
    }

    public function setDataNasc($dataNasc){
        $this->dataNasc = $dataNasc;
    }

    public function getTipo_usuario(){
        return $this->tipo_usuario;
    }

    public function setTipo_usuario($tipo_usuario){
        $this->tipo_usuario = $tipo_usuario;
    }

    public function getCrm_coren(){
        return $this->crm_coren;
    }

    public function setCrm_coren($crm_coren){
        $this->crm_coren = $crm_coren;
    }
}