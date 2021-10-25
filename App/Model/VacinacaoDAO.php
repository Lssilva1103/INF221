<?php 

namespace App\Model;

class VacinacaoDAO{
    public function create(Vacinacao $u){
        try{
            $sql = 'INSERT INTO vacinacao (vacina, lotevacina, dataaplica, dose, doseout) VALUES (?,?,?,?,?)';

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $u->getVacina());
            $stmt->bindValue(2, $u->getLotevacina());
            $stmt->bindValue(3, $u->getDataaplica());
            $stmt->bindValue(4, $u->getDose());
            $stmt->bindValue(5, $u->getDoseout());

            if($stmt->execute()){
                return true;
            }
            return false;
        }catch(Exception $ex){
            echo $ex->getFile().' : '.$ex->getLine().' : '.$ex->getMessage();
            return false;
        }

        echo "<script>location.href='../../Views/pages/inicio2.php';</script>";
    }

}