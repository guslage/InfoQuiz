<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/customCss.css" rel="stylesheet">
</head>
<body>
	<?php 
		$link = $_GET["link"];
		
		$page[2] = "Pergunta1.php";
		$page[3] = "Pontuacao.php";
		$page[4] = "Home.php";
		$page[5] = "RankingJogador.php";
		$page[6] = "Perfil.php";
		$page[7] = "MinhaPontuacao.php";

		if(!empty($link)){
			if (file_exists($page[$link])) {
			include $page[$link];
		}else{
			include "PaginaLogin.php";
		}}
	?>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>