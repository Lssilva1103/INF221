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
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
        <meta name="generator" content="Jekyll v4.1.1" />
        <title>Sistema Médico</title>

        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" />


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css">
        <link rel="stylesheet" href="../css/all.css"> <!-- FONT AWESOME -->

        <style>
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
        <link href="../css/custom.css" rel="stylesheet" />

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark shadow nav-background">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 nav-background exit" href="inicio.php">Sistema Médico</a>
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
                   
                    
                    <div class="container theme-showcase" role="main">
                        <div class="col-md">
                        <table id="tabCiclos" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Paciente</th>
                                        <th>Status</th>
                                        <th>Consulta</th>
                                        <th>Vacinação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>Lucas Lauro</td>
                                            <td>Vinculado</td>
                                            <td><a href="consulta.php" class="link-primary">Realizar</a></td>
                                            <td><a href="vacinacao.php" class="link-primary">Realizar</a></td>
                                        </tr>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                    <div>
                        
                    </div>
                </main>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script>
            window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>');
        </script>
        <script src="../js/bootstrap.bundle.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>
        <!-- Latest compiled and minified Locales -->
        <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/locale/bootstrap-table-pt-BR.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="../js/dashboard.js"></script>
    </body>
</html>
