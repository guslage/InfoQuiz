<?php
session_start();
include 'MenuPergunta.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<meta charset="utf-8">
	<title>Resultados</title>
</head>
<body>
<center><div class="container">
<?php

	include 'BDconnect.php';

	$Pontuacao = $_GET['Pontuacao'];

	if (isset($_SESSION['Jogador_id'])) {
		$id 					= $_SESSION['Jogador_id'];
		$Materia_Escolhida_id 	= $_SESSION['Materia_Escolhida_id'];
	}

	$Erros = (5 - $Pontuacao); 

	echo "<h1>Você teve uma pontuação de " .$Pontuacao. " pontos </h1>";
	echo "<h2>e teve uma média de ".$Erros." Erros</h2>";

	$sql = mysqli_query($link,"INSERT INTO Pontuacao(Pontuacao, Pontuacao_Jogador_id, Pontuacao_Materia_id) VALUES('$Pontuacao','$id','$Materia_Escolhida_id')");

 ?>
 <a href="Quiz.php?link=5" class="btn btn-success">Ranking geral</a>
 <a href="Quiz.php?link=7" class="btn btn-danger">Meu ranking</a>
 <a href="Quiz.php?link=4" class="btn btn-warning">Jogar de novo</a>
 </div></center>

</body>
</html>

