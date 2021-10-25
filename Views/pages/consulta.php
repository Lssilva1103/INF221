<?php
require_once '../../vendor/autoload.php';
session_start();

if (isset($_SESSION["acesso"])){
    if ($_SESSION["acesso"] != "concedido"){
        header("Location: ../../index.php");
    }
}else{
    header("Location: ../../index.php");
}

include_once "conect.php";
$user = $_SESSION['idUsuario'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
        <meta name="generator" content="Jekyll v4.1.1" />
        <title>Consultas</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/" />

        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        
        <style>
            a.buttons-collection {
                margin-left: 1em;
            }

            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="../css/dashboard.css" rel="stylesheet" />

        <link rel="stylesheet" href="../css/all.css"> <!-- FONT AWESOME -->
        <link href="../css/custom.css" rel="stylesheet" />

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark shadow nav-background">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 nav-background exit" href="inicio2.php">Consulta Médica</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto px-3">
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" style="color: #FFFFFF;" href="">PACIENTES</a>
                    </li>
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" style="color: #FFFFFF;" href="">CONSULTA</a>
                    </li>
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" style="color: #FFFFFF;" href="">CARTÃO DE VACINA</a>
                    </li>
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" style="color: #FFFFFF;" href="">PERFIL</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto px-3">
                    <li class="nav-item text-nowrap">
                        <a class="nav-link exit" style="color: #FFFFFF;" href="../../App/Controller/UserController.php?acao=logout"><i class="fas fa-sign-out-alt"></i> Sair</a>
                    </li>
                </ul>
            </div>
       </nav>

        <div class="container-fluid">
            <div class="row">
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                    <div class="container theme-showcase pt-4" role="main">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="../../App/Controller/ConsultaController.php?acao=cadastrar" enctype="multipart/form-data">
                                    <div>
                                        <h2>INSERIR NOVA CONSULTA</h2>
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-sintomas" class="control-label">Sintomas:</label>
                                        <textarea name="sintomas" id="sintomas" type="text" class="form-control"> </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-anexos" class="control-label">Anexos:</label>
                                        <input class="form-control-file" type="file" id="anexos" name="anexos" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-medicamentos" class="control-label">Medicamento:</label>
                                        <select name="medicamentos" id="medicamentos" class="form-control" required>
                                            <option selected>Selecione</option>
                                            <option value="Novalgina">Novalgina</option>
                                            <option value="Tylenol">Tylenol</option>
                                            <option value="Diclofenaco">Diclofenaco</option>
                                            <option value="Vitamina C">Vitamina C</option>
                                            <option value="Amoxilina">Amoxilina</option>
                                            <option value="Atenolol">Atenolol</option>
                                            <option value="Clonazepam">Clonazepam</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-medicamentos" class="control-label">Tratamento:</label>
                                        <textarea name="tratamento" id="tratamento" type="text" class="form-control"> </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-medicamentos" class="control-label">Atestado:</label>
                                        <input name="atestado" id="atestado" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-medicamentos" class="control-label">Exames:</label>
                                        <textarea name="exames" id="exames" type="text" class="form-control"> </textarea>
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Cadastrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script>
            window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>');
        </script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="../js/dashboard.js"></script>

    </body>
</html>