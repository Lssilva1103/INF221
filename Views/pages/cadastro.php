

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>El Comprador</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet" />
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="../css/sourcesanspro-font.css">
	<!-- Main Style Css -->
    <!--<link rel="stylesheet" href="../css/style.css"/>-->
	
</head>
<body class="form-v8">
	<div class="page-content">
		<div class="form-v8-content">
			
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Cadastro</button>
					</div>
					
				</div>
				<form class="form-detail" action="../../App/Controller/UserController.php?acao=cadastrar" method="post">
					<div class="tabcontent" id="sign-up">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="nome" id="nome" class="input-text" required>
								<span class="label">Nome Completo</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="email" name="email" id="email" class="input-text" required>
								<span class="label">E-Mail</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="cpf" id="cpf" class="input-text" required>
								<span class="label">CPF</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="telefone" id="telefone" class="input-text" required>
								<span class="label">Telefone</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="dataNasc" id="dataNasc" class="input-text">
								<span class="label">Data de Nascimento</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
                            <label class="form-row-inner">Sexo</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexo" value="M" id="M">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Masculino
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexo" value="F" id="F">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Feminino
                                </label>
                            </div>
							<span class="border"></span>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text" required>
								<span class="label">Senha</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<span class="label">Tipo de usuário</span>
							<select name="tipo_usuario" id="tipo_usuario" class="form-select" aria-label="Default select example" required>
								<option selected>Selecione</option>
								<option value="1">Paciente</option>
								<option value="2">Médico</option>
								<option value="3">Enfermeiro</option>
							</select>
							<span class="border"></span>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="crm_coren" id="crm_coren" class="input-text">
								<span class="label">CRM/COREN</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row-last">
                            <a href="../../index.php" class="link-primary">Voltar</a>
							<input type="submit" name="register" class="register" value="Registrar">
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