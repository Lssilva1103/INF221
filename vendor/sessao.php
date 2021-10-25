<?php
	session_start();

    if (isset($_SESSION["acesso"])){
        if ($_SESSION["acesso"] != "concedido"){
            header("Location: ../index.php");
        }
	}
?>	