<?php
	require_once 'vendor/sessao.php';
	require_once 'vendor/autoload.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>El Comprador</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="Views/css/bootstrap.min.css" rel="stylesheet" />
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="Views/css/sourcesanspro-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="Views/css/style.css"/>
	<link rel="stylesheet" href="Views/css/all.css"> <!-- FONT AWESOME -->
	
</head>
<body class="form-v8">
	<div class="page-content">
		<div class="form-v8-content">
			
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-in')" id="defaultOpen"><i class="fas fa-user"></i> Login</button>
					</div>
					
				</div>
				<form class="form-detail" action="App/Controller/UserController.php?acao=login" method="post">
					<div class="tabcontent" id="sign-in">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="email" name="email_1" id="email_1" class="input-text" required>
								<span class="label">Usuário</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password_1" id="password_1" class="input-text" required>
								<span class="label">Senha</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row-last">
							<input type="submit" name="register" class="register" value="Entrar">
							<a href="Views/pages/cadastro.php" class="link-primary">Não tem conta? Cadastre-se</a>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
	<script type="text/javascript">
		function openCity(evt, cityName) {
		    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }
		    document.getElementById(cityName).style.display = "block";
		    evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
</body>
</html>