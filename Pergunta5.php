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
	<link href="css/Pergunta.css"      rel="stylesheet">
</head>
<body>
	<div class="container">
	<form method='POST' action='ValidaPergunta.php'>

<?php
	include 'BDconnect.php';

	$id1		= $_POST['id1'];	
	$id2 		= $_POST['id2'];
	$id3		= $_POST['id3'];
	$id4		= $_POST['id4'];

	$Resposta1	= $_POST['Resposta1'];
	$Resposta2	= $_POST['Resposta2'];
	$Resposta3	= $_POST['Resposta3'];
	$Resposta4 	= $_POST['Resposta4'];

	$sql5 = "SELECT * FROM Perguntas WHERE Pergunta_id != '$id1' and Pergunta_id !='$id2' and Pergunta_id != '$id3' and Pergunta_id != '$id4'AND Materia_id = ".$_SESSION['Materia_Escolhida_id']." AND DificuldadePergunta = ".$_SESSION['Dificuldade']." ORDER BY rand() LIMIT 1  ";

	$recordset5 = mysqli_query($link,$sql5);


	while ($registro5 = mysqli_fetch_array($recordset5)){
	echo "<h1>".$registro5['Enunciado']."</h1>";

	echo "<button id='button1' class='btn btn-lg btn-warning btn-block' name='Resposta5' value= $registro5[Alternativa1]>$registro5[Alternativa1]</button>";
	
	echo "<button id='button2' class='btn btn-lg btn-danger btn-block' name='Resposta5' value= $registro5[Alternativa2]>$registro5[Alternativa2]</button>";
	
	echo "<button id='button3' class='btn btn-lg btn-success btn-block' name='Resposta5' value= $registro5[Alternativa3]>$registro5[Alternativa3]</button>";
	
	echo "<button id='button4' class='btn btn-lg btn-primary btn-block' name='Resposta5' value= $registro5[Alternativa4]>$registro5[Alternativa4]</button>";
		
	$id5 = $registro5['Pergunta_id'];

	} 
?>

	<input type="hidden" name="id1"		 	value="<?php echo $id1 ?>">
	<input type="hidden" name="id2" 		value="<?php echo $id2 ?>">
	<input type="hidden" name="id3" 		value="<?php echo $id3 ?>">
	<input type="hidden" name="id4" 		value="<?php echo $id4 ?>">
	<input type="hidden" name="id5" 		value="<?php echo $id5 ?>">
	<input type="hidden" name="Resposta1"	value="<?php echo $Resposta1 ?>">
	<input type="hidden" name="Resposta2" 	value="<?php echo $Resposta2 ?>">
	<input type="hidden" name="Resposta3" 	value="<?php echo $Resposta3 ?>">
	<input type="hidden" name="Resposta4" 	value="<?php echo $Resposta4 ?>">
		
	</form>
	</div>
</body>
</html>