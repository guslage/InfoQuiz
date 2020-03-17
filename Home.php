<?php
	session_start();
	include 'MenuJogador.php';	
	include_once 'BDconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/customCss.css" rel="stylesheet">
	</head>
<body style="background-color: #eee">
	<center><div class="container">
	<?php 
		$id 	= $_SESSION['Jogador_id'];	
		$Sexo	= $_SESSION['Sexo'];

		$sqlNome  = mysqli_query($link, "SELECT * FROM Jogador WHERE Jogador_id = '$id'");
		$registro = mysqli_fetch_array($sqlNome); 
		
		if($_SESSION['Sexo'] == 'M'){
			echo "<h1>Seja bem-vindo, ".$registro['Nome']."!</h1>";
		}else{
			echo "<h1>Seja bem-vinda, ".$registro['Nome']."!</h1>";
		}
	
	?>

    <h3>Escolha uma matéria e vamos começar!</h3>

    <form action="Pergunta1.php" method="POST">
    <select name="Materia_id" class="form-control">
    	<option hidden>Matéria</option>
		<?php

			$Seleciona_Materia = mysqli_query($link,"SELECT * FROM Materia");

			while($Fetch_Materia = mysqli_fetch_array($Seleciona_Materia)){
		
				echo "<option value=".$Fetch_Materia['Materia_id'].">".$Fetch_Materia['Materia'];
		
			}
		?>
	</select>
	<br>
	<select name="Dificuldade_id" class="form-control">
		<option hidden>Dificuldade</option>
		<?php

			$Seleciona_Dificuldade = mysqli_query($link, "SELECT * FROM Dificuldade");

			while($Fetch_Dificuldade = mysqli_fetch_array($Seleciona_Dificuldade)){

				echo "<option value=".$Fetch_Dificuldade['Dificuldade_id'].">".$Fetch_Dificuldade['Dificuldade'];
			}

		?>
	</select><br>
<input type="submit" value="Começar Quiz" class="btn btn-lg btn-primary">
</form>
</div></center>
</body>
</html>