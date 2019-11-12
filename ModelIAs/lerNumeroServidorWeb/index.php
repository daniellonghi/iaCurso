<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Conversor de Imagem em Texto</title>
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="styles.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,800" rel="stylesheet">
</head>
<body>
	<main>
		<div class="wrapper-800">
			<div class="itens-form">
				<h1>Conversor de <strong>Imagem</strong> para <strong>Texto</strong>.</h1>
				<form id="item-submit" action="processa-imagem.php" enctype="multipart/form-data" method="POST">
					<div class="itens-form">
						<input type="file" name="imagem_upload">
					</div>
					<div class="itens-form">
						<input type="submit" value="Enviar">						
					</div>
				</form>

				<div class="texto-lido">
					<?php
					session_start();
					if(isset($_SESSION["ultimoTexto"])){
						echo "<h2>Sua última imagem foi: </h2>";
						echo "<img src=./" . $_SESSION["ultimoFile"] . ">";
						echo "<h2>E o texto é: </h2>";
						foreach ($_SESSION["ultimoTexto"] as $texto){
							echo "<p>" . $texto . "<p>";
						}
					}else{
						echo "<p>Não há texto.<p>"; 
					}
					?>
				</div>
			</div>
		</div>
	</main>
	<script type="text/javascript" src="https://www.vectraconstrutora.com.br/common/default/js/plugins/jquery-2.0.3.min.js"></script>
	<script src="./index.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>