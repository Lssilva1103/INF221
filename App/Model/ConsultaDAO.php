<?php 

namespace App\Model;

class ConsultaDAO{
    public function create(Consulta $c){
        try{
            $sql = 'INSERT INTO consultas (sintomas, anexos, medicamentos, tratamento, atestado, exames, medico) VALUES (?,?,?,?,?,?,?)';

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getSintomas());
            $stmt->bindValue(2, $c->getAnexos());
            $stmt->bindValue(3, $c->getMedicamentos());
            $stmt->bindValue(4, $c->getTratamento());
            $stmt->bindValue(5, $c->getAtestado());
            $stmt->bindValue(6, $c->getExames());
            $stmt->bindValue(7, $c->getMedico());

            if($stmt->execute()){
                return true;
            }
            return false;
        }catch(Exception $ex){
            echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
            return false;
        }
    }

    public function read(){

        $sql = 'SELECT * FROM consultas';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }

    }

    public function searchById($usuario){
        $sql = 'SELECT * FROM usuarios WHERE idUsuario = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $idUsuario);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return false;
        }
    }

    public function searchByEmail($email){
        $sql = 'SELECT * FROM usuarios WHERE email = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return false;
        }
    }
    //olhar
    public function update(Consulta $u){
        try{
            $sql = 'UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?';

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $u->getNome());
            $stmt->bindValue(2, $u->getEmail());
            $stmt->bindValue(3, $u->getSenha());
            $stmt->bindValue(4, $u->getId());
            $stmt->execute();
            return true;
        }catch(Exception $ex){
            echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
            return false;
        }
    }

    public function delete($id){
        try{
            $sql = 'DELETE FROM usuarios WHERE id = ?';

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return true;
        }catch(Exception $ex){
            echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
            return false;
        }
    }
}