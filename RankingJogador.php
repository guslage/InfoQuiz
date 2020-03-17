<?php 
	session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	
 <?php 
 include 'BDconnect.php';
 include 'MenuJogador.php';
  ?>

  <div class="container">
 	<table class="table table-striped" style="background-color: white">
 	<th><b>#</b></th>
 	<th>UserName</th>
 	<th>Matéria</th>
  	<th>Pontuação</th>

  <?php
  	$Jogador_id = $_SESSION['Jogador_id'];

	$sql  = "SELECT Jogador.Jogador_id,Jogador.UserName,
					Materia.Materia_id,Materia.Materia,
					Pontuacao.Pontuacao_Jogador_id,Pontuacao.Pontuacao_Materia_id,Pontuacao.Pontuacao
		   	 FROM   Jogador,Materia,Pontuacao
		   	 WHERE  Jogador.Jogador_id = Pontuacao.Pontuacao_Jogador_id
		   	 AND    Pontuacao.Pontuacao_Materia_id = Materia.Materia_id";

	$recordset  = mysqli_query($link,$sql);
	
	while($registro = mysqli_fetch_array($recordset)){
		echo "<tr>";
			echo "<td>" .$registro['Jogador_id']	. "</td>";
			echo "<td>" .$registro['UserName']		. "</td>";
			echo "<td>" .$registro['Materia'] 		. "</td>";
			echo "<td>" .$registro['Pontuacao']		. "</td>";
		echo "</tr>";
	}
 	 ?>
 	</table>
 </div>
 </body>
 </html>