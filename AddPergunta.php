<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="css/customCss.css" rel="stylesheet">
<?php 
	include "MenuAdm.php";
	include "BDconnect.php";
 ?>
</head>
<body style="background-color: #eee">
	<?php 
		
		if(isset($_POST['Altera_Pergunta'])){
				$Pergunta_id = $_POST['Altera_Pergunta'];

				$Select_Pergunta = mysqli_query($link, "SELECT * FROM Perguntas, Resposta WHERE Perguntas.Pergunta_id = $Pergunta_id AND Resposta.Pergunta_Resposta_id = $Pergunta_id");
				$Fetch_Pergunta  = mysqli_fetch_array($Select_Pergunta);

				$Enunciado    = $Fetch_Pergunta['Enunciado'];
				$Alternativa1 = $Fetch_Pergunta['Alternativa1'];
				$Alternativa2 = $Fetch_Pergunta['Alternativa2'];
				$Alternativa3 = $Fetch_Pergunta['Alternativa3'];
				$Alternativa4 = $Fetch_Pergunta['Alternativa4'];
				$Resposta 	  = $Fetch_Pergunta['Resposta'];
				$Btn_Submit   = "Update";
				}else{
				$Pergunta_id  = NULL;
				$Enunciado    = NULL;
				$Alternativa1 = NULL;
				$Alternativa2 = NULL;
				$Alternativa3 = NULL;
				$Alternativa4 = NULL;
				$Resposta 	  = NULL;
				$Btn_Submit   = "Cadastrar";
				}
	 ?>
	<div class="container">
	<form method="POST" action="InserePergunta.php" class="form-group ">

		Enunciado
		<textarea  rows="10" name="TXT_Enunciado" class="form-control"><?php echo $Enunciado ?></textarea><br>

		Alternativa 1
		<input type="text" name="TXT_Alternativa1" value="<?php echo $Alternativa1 ?>" class="form-control"><br>

		Alternativa 2
		<input type="text" name="TXT_Alternativa2" value="<?php echo $Alternativa2 ?>" class="form-control"><br>

		Alternativa 3
		<input type="text" name="TXT_Alternativa3" value="<?php echo $Alternativa3 ?>" class="form-control"><br>

		Alternativa 4
		<input type="text" name="TXT_Alternativa4" value="<?php echo $Alternativa4 ?>" class="form-control"><br>

		Resposta
		<input type="text" name="TXT_Resposta"     value="<?php echo $Resposta ?>"     class="form-control"><br>

		Matéria
		<select name="Materia_id" class="form-control">
		<option hidden>Escolha uma matéria</option>	

		<?php 
			$sqlMateria = mysqli_query($link,"SELECT * FROM Materia");

			while ($Registro = mysqli_fetch_array($sqlMateria)) {
				echo "<option value = ".$Registro['Materia_id'].">".$Registro['Materia'];
			}
 		?>
 		</select><br>


 		Dificuldade
 		<select name="Dificuldade_id" class="form-control">
 		<option hidden>Escolha uma dificulade</option>	

		<?php  
			$sqlDificuldade = mysqli_query($link, "SELECT * FROM Dificuldade");

			while ($Registro2 = mysqli_fetch_array($sqlDificuldade)) {
				echo "<option value=".$Registro2['Dificuldade_id'].">".$Registro2['Dificuldade'];
			}
		?>
	    </select><br>

	    <input type="hidden" name="Pergunta_id" value="<?php echo $Pergunta_id ?>">
	    <input type="submit" name="<?php echo $Btn_Submit ?>" class="btn btn-lg btn-primary" value="Cadastrar pergunta">
	</form>
</div>
</body>
</html>