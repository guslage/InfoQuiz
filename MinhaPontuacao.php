<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Minha Pontuação</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		include 'BDconnect.php';
		include 'MenuJogador.php';
	 ?>
 <div class="container">
 
 	<table class="table table-striped" style="background-color: white">
 	<th>Pontuação</th>
 	<th>Matéria</th>
 
 	<?php 
 		$Jogador_id = $_SESSION['Jogador_id'];

 		$sql = mysqli_query($link, "SELECT Jogador.Jogador_id, Materia.Materia_id, Materia.Materia, Pontuacao.Pontuacao_Jogador_id, Pontuacao.Pontuacao_Materia_id, Pontuacao.Pontuacao 
 			FROM Jogador, Materia, Pontuacao
 		    WHERE Jogador.Jogador_id = $Jogador_id
 		    AND Pontuacao.Pontuacao_Jogador_id = $Jogador_id 
 		    AND Materia.Materia_id = Pontuacao.Pontuacao_Materia_id");

 		while($registro = mysqli_fetch_array($sql)){
			echo "<tr>";
				echo "<td>" .$registro['Pontuacao']. "</td>";
				echo "<td>" .$registro['Materia']. "</td>";
 		 	echo "</tr>";
 		}
 	 ?>
</table>
</div>
 </div>	
</body>
</html>