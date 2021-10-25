<?php
    require_once '../../vendor/sessao.php';
    require_once '../../vendor/autoload.php';
   
    use \App\Model\Consulta;
    use \App\Model\ConsultaDAO;
    
    $acao = $_GET['acao'];
    switch ($acao){
        case 'login':
            login();
            break;
        case 'logout':
            logout();
            break;
        case 'cadastrar':
            cadastra();
            break;
        case 'buscar': 
            searchById();
            break;
    }

    function cadastra(){
        $diretorio = 'anexos/';
        $date = new DateTime();
        $anexo = $diretorio.$date->getTimestamp().".".pathinfo($_FILES['anexos']['name'], PATHINFO_EXTENSION);
        
        if (!file_exists($diretorio)){
            mkdir($diretorio, 0755,true);
        }
        if(move_uploaded_file($_FILES['anexos']['tmp_name'], $anexo)){
            $consulta = new Consulta();
            $consulta->setSintomas($_POST['sintomas']);
            $consulta->setAnexos($anexo);
            $consulta->setMedicamentos($_POST['medicamentos']);
            $consulta->setTratamento($_POST['tratamento']);
            $consulta->setAnexos($_POST['atestado']);//olhar
            $consulta->setExames($_POST['exames']);
            $consulta->setMedico($_SESSION['idUsuario']);



            $consultaDAO = new ConsultaDAO();
            $cadastro = $consultaDAO->create($consulta);

                if($cadastro){

                    echo "<script>location.href='../../Views/pages/inicio2.php';</script>";
                }else{
                    die();
                    echo "<script>alert('Falha ao realizar o cadastro.'); location.href='../../index.php';</script>";
                }
        }else {
            echo "<script>alert('Falha ao realizar o upload do arquivo.'); location.href='../../index.php';</script>";
        }
    }

    function lista(){
        $consultaDAO = new \App\Model\ConsultaDAO();
        $consultaDAO->read();
    }

?>
