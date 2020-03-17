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
	<form method='POST' action='Pergunta4.php'>

<?php
	include 'BDconnect.php';

	$id1		= $_POST['id1'];	
	$id2 		= $_POST['id2'];

	$Resposta1	= $_POST['Resposta1'];
	$Resposta2	= $_POST['Resposta2'];

	$sql3 = "SELECT * FROM Perguntas WHERE Pergunta_id != '$id2' AND Pergunta_id !='$id1' AND Materia_id = ".$_SESSION['Materia_Escolhida_id']." AND DificuldadePergunta = ".$_SESSION['Dificuldade']." ORDER BY rand() LIMIT 1  ";

	$recordset3 = mysqli_query($link,$sql3);

	while ($registro3 = mysqli_fetch_array($recordset3)){
	echo "<h1>".$registro3['Enunciado']."</h1>";

	echo "<button id='button1' class='btn btn-lg btn-warning btn-block' name='Resposta3' value= $registro3[Alternativa1]>$registro3[Alternativa1]</button>";
	
	echo "<button id='button2' class='btn btn-lg btn-danger btn-block' name='Resposta3' value= $registro3[Alternativa2]>$registro3[Alternativa2]</button>";
	
	echo "<button id='button3' class='btn btn-lg btn-success btn-block' name='Resposta3' value= $registro3[Alternativa3]>$registro3[Alternativa3]</button>";
	
	echo "<button id='button4' class='btn btn-lg btn-primary btn-block' name='Resposta3' value= $registro3[Alternativa4]>$registro3[Alternativa4]</button>";
		
	$id3 = $registro3['Pergunta_id'];
	} 
?>
	<input type="hidden" name="id1"       value="<?php echo $id1 ?>">
	<input type="hidden" name="id2"       value="<?php echo $id2 ?>">
	<input type="hidden" name="id3"       value="<?php echo $id3 ?>">
	<input type="hidden" name="Resposta1" value="<?php echo $Resposta1 ?>">
	<input type="hidden" name="Resposta2" value="<?php echo $Resposta2 ?>">

	</form>
	</div>
</body>
</html>