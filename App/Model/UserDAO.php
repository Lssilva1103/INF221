<?php 

namespace App\Model;

class UserDAO{
    public function create(User $u){
        try{
            $sql = 'INSERT INTO usuarios (nome, email, senha, cpf, telefone, sexo, dataNasc, tipo_usuario, crm_coren) VALUES (?,?,?,?,?,?,?,?,?)';

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $u->getNome());
            $stmt->bindValue(2, $u->getEmail());
            $stmt->bindValue(3, $u->getSenha());
            $stmt->bindValue(4, $u->getCpf());
            $stmt->bindValue(5, $u->getTelefone());
            $stmt->bindValue(6, $u->getSexo());
            $stmt->bindValue(7, $u->getDataNasc());
            $stmt->bindValue(8, $u->getTipo_usuario());
            $stmt->bindValue(9, $u->getCrm_coren());

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

        $sql = 'SELECT * FROM usuarios';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }

    }


    public function searchByNome($nome){

        $sql = 'SELECT * FROM usuarios WHERE nome = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $nome);
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
    public function update(User $u){
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