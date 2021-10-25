<?php
    require_once '../../vendor/sessao.php';
    require_once '../../vendor/autoload.php';
   
    use \App\Model\Vacinacao;
    use \App\Model\VacinacaoDAO;
    
    $acao = $_GET['acao'];
    switch ($acao){
        case 'cadastrar':
            cadastra();
            break;
       
    }

    function cadastra(){
        $usuario = new Vacinacao();
        $usuario->setVacina($_POST['vacina']);
        $usuario->setLotevacina($_POST['lotevacina']);
        $usuario->setDataaplica($_POST['dataaplica']);
        $usuario->setDose($_POST['dose']);
        $usuario->setDoseout($_POST['doseout']);
        
        $usuarioDAO = new VacinacaoDAO();
        $cadastro = $usuarioDAO->create($usuario);

        if($cadastro){
            echo "<script>location.href='../../Views/pages/inicio2.php';</script>";
        }else{
            die();
            echo "<script>alert('Falha ao realizar o cadastro.'); location.href='../../index.php';</script>";
        }
    }
   

    function lista(){
        $usuarioDAO = new \App\Model\VacinacaoDAO();
        $usuarioDAO->read();
    }

?>
