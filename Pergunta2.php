<?php
	session_start();
	include 'MenuPergunta.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/Pergunta.css" rel="stylesheet">
</head>
<body>
	<div class="container">
	<form method='POST' action='Pergunta3.php'>

<?php
	include 'BDconnect.php';

	$id1		= $_POST['id1'];

	$Resposta1 	= $_POST['Resposta1'];

	$sql2 = "SELECT * FROM Perguntas WHERE Pergunta_id != '$id1' AND Materia_id = ".$_SESSION['Materia_Escolhida_id']." AND DificuldadePergunta = ".$_SESSION['Dificuldade']." ORDER BY rand() LIMIT 1  ";

	$recordset2 = mysqli_query($link,$sql2);

	while ($registro2 = mysqli_fetch_array($recordset2)){
	echo "<h1>".$registro2['Enunciado']."</h1>";

	echo "<button id='button1' class='btn btn-lg btn-warning btn-block' name='Resposta2' value= $registro2[Alternativa1]>$registro2[Alternativa1]</button>";
	
	echo "<button id='button2' class='btn btn-lg btn-danger btn-block' name='Resposta2' value= $registro2[Alternativa2]>$registro2[Alternativa2]</button>";
	
	echo "<button id='button3' class='btn btn-lg btn-success btn-block' name='Resposta2' value= $registro2[Alternativa3]>$registro2[Alternativa3]</button>";
	
	echo "<button id='button4' class='btn btn-lg btn-primary btn-block' name='Resposta2' value= $registro2[Alternativa4]>$registro2[Alternativa4]</button>";
	
	$id2 = $registro2['Pergunta_id'];
	} 
?>
	<input type="hidden" name="id1" value="<?php echo $id1 ?>">
	<input type="hidden" name="id2" value="<?php echo $id2 ?>">
	<input type="hidden" name="Resposta1" value="<?php echo $Resposta1 ?>">

	</form>
	</div>
</body>
</html>