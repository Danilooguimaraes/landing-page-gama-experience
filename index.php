<!DOCTYPE html>
<html lang="en">
<head>
  <title>Landing Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	<style>
		form {
		border-style: solid;
		border-color: #46c0bc;
		}
		.top{
			margin-top:0px;
		}
		.form-group{
			
			padding-right: 10px;
			
			padding-left: 10px;
		}
		.jumbotron{
			background-image: url("imagem-desktop.jpeg")
		}
	</style>
</head>
<body>
<div style="background-color:#46c0bc;" "class="page-header" >
  <h1 class = "top" style="text-align:center;">ESPM</h1>
</div>
<div class="jumbotron" style="background:transparent !important;">
	<h1 style="color:#80298f;text-align:center;">evolua </br>com o mundo</h1>      
	<p style="color:#80298f;text-align:center;">MBA em Design e Comunicação Digital</p>
	<div class="text-center">
	<a href="agradecimento.php" style="background-color:#46c0bc;color:white" class="btn btn-default btn-lg" role="button">Quero Evoluir <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-6" style="color:#80298f;">
			<h1>a evolução</h1>
			fasdfasdfasdf<br/>afdfasdfsadfsadf</br>fafddafdf</br>fadfsdfdsfs
			<h1>objetivo</h1>
			fasdfasdfasdf<br/>afdfasdfsadfsadf</br>fafddafdf
			<h1>valor</h1>
			R$660</br>
			10x R$66
		</div>
		<div class="col-sm-1" ></div>
		<div class="col-sm-5">
			<form>
				<div class = "menu" style="background-color:#46c0bc;text-align:center;">
					<h1 style="color:white;margin-top:0px;">Quero evoluir</h1>
					<spam style="color:white;">
					Preencha o formulário</br>
					e inicia sua inscrição
					</spam>
				</div>
				<div class="form-group">
				<label for="nome">Nome:</label>
				<input type="nome" class="form-control" id="nome">
				</div>
				
				<div class="form-group">
				<label for="telefone">Telefone:</label>
				<input type="telefone" class="form-control" id="telefone">
				</div>
				
				<div class="form-group">
				<label for="email">E-mail:</label>
				<input type="email" class="form-control" id="email">
				</div>
				
				<div class="form-group">
				<label for="periodo">Período:</label>
				<input type="periodo" class="form-control" id="periodo">
				</div>
				
				<a href="agradecimento.php" style="background-color:#46c0bc;color:white;" class="btn btn-default" role="button">Inscrever-se <span class="glyphicon glyphicon-chevron-right"></a>
				
			</form>
		</div>
	</div>     
</div>
</body>
</html>