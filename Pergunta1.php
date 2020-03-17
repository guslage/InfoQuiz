<?php
	session_start();
	include 'MenuPergunta.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/Pergunta.css" rel="stylesheet">
</head>
<body>
	<div class="container">
	<form method='POST' action='Pergunta2.php'>

<?php 
	include 'BDconnect.php';

	$Materia = $_POST['Materia_id'];
	$_SESSION['Materia_Escolhida_id'] = $Materia;

	$Dificuldade = $_POST['Dificuldade_id'];
	$_SESSION['Dificuldade'] = $Dificuldade;

	$sql = "SELECT * FROM Perguntas WHERE Pergunta_id > 0 AND Materia_id = ".$_SESSION['Materia_Escolhida_id']." AND DificuldadePergunta = ".$_SESSION['Dificuldade']." ORDER BY rand() limit 1";

	$recordset = mysqli_query($link,$sql);

	while ($registro = mysqli_fetch_array($recordset)){
	echo "<h1>".$registro['Enunciado']."</h1>";

	echo "<button id='button1' class='btn btn-lg btn-warning btn-block' name='Resposta1' value= $registro[Alternativa1]>$registro[Alternativa1]</button>";
	
	echo "<button id='button2' class='btn btn-lg btn-danger btn-block' name='Resposta1' value= $registro[Alternativa2]>$registro[Alternativa2]</button>";
	
	echo "<button id='button3' class='btn btn-lg btn-success btn-block' name='Resposta1' value= $registro[Alternativa3]>$registro[Alternativa3]</button>";
	
	echo "<button id='button4' class='btn btn-lg btn-primary btn-block' name='Resposta1' value= $registro[Alternativa4]>$registro[Alternativa4]</button>";
	
	$id1 = $registro['Pergunta_id'];
	
	}  
?>
	<input type="hidden" name="id1" value="<?php echo $id1 ?>">
	</form>	
	</div>
</body>
</html>
