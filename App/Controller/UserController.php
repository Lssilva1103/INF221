<?php
    require_once '../../vendor/sessao.php';
    require_once '../../vendor/autoload.php';
   
    use \App\Model\User;
    use \App\Model\UserDAO;
    
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
        $usuario = new User();
        $usuario->setNome($_POST['nome']);
        $usuario->setEmail($_POST['email']);
        $usuario->setCpf($_POST['cpf']);
        $usuario->setTelefone($_POST['telefone']);
        $usuario->setSenha(MD5($_POST['password']));//olhar
        $usuario->setSexo($_POST['sexo']);
        $usuario->setDataNasc($_POST['dataNasc']);
        $usuario->setTipo_usuario($_POST['tipo_usuario']);
        $usuario->setCrm_coren($_POST['crm_coren']);

        $usuarioDAO = new UserDAO();
        $verifica = ($usuarioDAO->searchByEmail($usuario->getEmail()));
        if(!$verifica){
            $cadastro = $usuarioDAO->create($usuario);

            if($cadastro){
                $user = $usuarioDAO->searchByEmail($_POST['email']);
                $_SESSION['idUsuario'] = $user['idUsuario'];
                $_SESSION['acesso'] = "concedido";

                echo "<script>location.href='../../Views/pages/inicio".$user['tipo_usuario'].".php';</script>";
            }else{
                die();
                echo "<script>alert('Falha ao realizar o cadastro.'); location.href='../../index.php';</script>";
            }
        }else{
            echo "<script>alert('Usuario já cadastrado'); location.href='../../index.php';</script>";
        }
        
    }
    //feito
    function login(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = (isset($_POST['email_1'])) ? $_POST['email_1'] : '';
            $senha = (isset($_POST["password_1"])) ? $_POST["password_1"] : '';
            $senha = MD5($senha);
        }

        $usuarioDAO = new UserDAO();
        $user = $usuarioDAO->searchByEmail($_POST['email_1']);

        

        if( ($user['senha'] == $senha) && ($user['email'] == $email) ){
            $_SESSION['idUsuario'] = $user['idUsuario'];
            $_SESSION['acesso'] = "concedido";
			echo "<script>location.href='../../Views/pages/inicio".$user['tipo_usuario'].".php';</script>";
        }else{
            unset($_SESSION['idUsuario'], $_SESSION['acesso']);
		    echo "<script>alert('Dados invalidos!'); location.href='../../';</script>";
        }
    }
    //feito
    function logout(){
            unset($_SESSION['idUsuario'], $_SESSION['acesso']);
			SESSION_DESTROY();
	
			echo "<script>location.href='../../index.php';</script>";
    }

    function lista(){
        $usuarioDAO = new \App\Model\UserDAO();
        $usuarioDAO->read();
    }

?>
