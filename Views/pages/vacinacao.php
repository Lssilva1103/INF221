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
        <title>Vacinacao</title>

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
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 nav-background exit" href="inicio2.php">Vacinação</a>
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
                                <form method="POST" action="../../App/Controller/VacinacaoController.php?acao=cadastrar" enctype="multipart/form-data">

                                    <div>
                                        <h2>INSERIR NOVA VACINA</h2>
                                       
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="recipient-medicamentos" class="control-label">Vacina:</label>
                                        <select name="vacina" id="vacina" class="form-control" required>
                                            <option selected>Selecione</option>
                                            <option value="CoronaVac">CoronaVac</option>
                                            <option value="Pfizer">Pfizer</option>
                                            <option value="Astrazeneca">Astrazeneca</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-lotevacina" class="control-label">Lote da Vacina:</label>
                                        <textarea name="lotevacina" id="lotevacina" type="text" class="form-control"> </textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient-dataaplica" class="control-label">Data da aplicação:</label>
                                        <input name="dataaplica" id="dataaplica" type="date" class="form-control"> </input>
                                    </div>

                                    <div class="form-row">
                                        <label class="form-row-inner">Dose da aplicação: </label>
                                        
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dose" value="U" id="U">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Unica
                                                </label>
                                            </div>
                                        
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dose" value="O" id="O">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Outras
                                                </label>
                                                <div class="form-group">
                                                    <label for="recipient-doseout" class="control-label"></label>
                                                    <textarea name="doseout" id="doseout" type="text" class="form-control"> </textarea>
                                                </div>
                                                
                                            </div>
                                    </div>
                                   
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Vizualizar Cartão de Vacinas</button>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Adicionar</button>
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