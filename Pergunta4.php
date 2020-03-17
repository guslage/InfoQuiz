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
	<form method='POST' action='Pergunta5.php'>

<?php
	include 'BDconnect.php';

	$id1		= $_POST['id1'];	
	$id2 		= $_POST['id2'];
	$id3		= $_POST['id3'];

	$Resposta1	= $_POST['Resposta1'];
	$Resposta2	= $_POST['Resposta2'];
	$Resposta3	= $_POST['Resposta3'];

	$sql4 = "SELECT * FROM Perguntas WHERE Pergunta_id != '$id2' AND Pergunta_id !='$id1' AND Pergunta_id != '$id3' AND Materia_id = ".$_SESSION['Materia_Escolhida_id']." AND DificuldadePergunta = ".$_SESSION['Dificuldade']." ORDER BY rand() LIMIT 1  ";

	$recordset4 = mysqli_query($link,$sql4);

	while ($registro4 = mysqli_fetch_array($recordset4)){
	echo "<h1>".$registro4['Enunciado']."</h1>";

	echo "<button id='button1' class='btn btn-lg btn-warning btn-block' name='Resposta4' value= $registro4[Alternativa1]>$registro4[Alternativa1]</button>";
	
	echo "<button id='button2' class='btn btn-lg btn-danger btn-block' name='Resposta4' value= $registro4[Alternativa2]>$registro4[Alternativa2]</button>";
	
	echo "<button id='button3' class='btn btn-lg btn-success btn-block' name='Resposta4' value= $registro4[Alternativa3]>$registro4[Alternativa3]</button>";
	
	echo "<button id='button4' class='btn btn-lg btn-primary btn-block' name='Resposta4' value= $registro4[Alternativa4]>$registro4[Alternativa4]</button>";
		
	$id4 = $registro4['Pergunta_id'];
	} 
?>

	<input type="hidden" name="id1" value="<?php echo $id1 ?>">
	<input type="hidden" name="id2" value="<?php echo $id2 ?>">
	<input type="hidden" name="id3" value="<?php echo $id3 ?>">
	<input type="hidden" name="id4" value="<?php echo $id4 ?>">
	<input type="hidden" name="Resposta1" value="<?php echo $Resposta1 ?>">
	<input type="hidden" name="Resposta2" value="<?php echo $Resposta2 ?>">
	<input type="hidden" name="Resposta3" value="<?php echo $Resposta3 ?>">

	</form>
	</div>
</body>
</html>

