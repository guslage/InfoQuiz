<?php 
	include 'BDconnect.php';
	$Pergunta_id = $_POST['Pergunta_id']; 

	$Enunciado 	= $_POST['TXT_Enunciado'];
	$Alt1		= $_POST['TXT_Alternativa1'];
	$Alt2		= $_POST['TXT_Alternativa2'];
	$Alt3		= $_POST['TXT_Alternativa3'];
	$Alt4		= $_POST['TXT_Alternativa4'];
	$Materia	= $_POST['Materia_id'];
	$Dific		= $_POST['Dificuldade_id'];

	$Resposta   = $_POST['TXT_Resposta'];
 ?> 

 <?php 
 	if(isset($_POST['Cadastrar'])){
 		$insert  = mysqli_query($link, "INSERT INTO Perguntas VALUES (null, '$Enunciado', '$Alt1', '$Alt2',' $Alt3', '$Alt4', '$Dific', '$Materia')");

 		$insert2 = mysqli_query($link, "INSERT INTO Resposta(Resposta_id, Resposta, Pergunta_Resposta_id) VALUES (null, '$Resposta', (SELECT MAX(Pergunta_id) FROM Perguntas))");
	}

	if(isset($_POST['Update'])){
		$Update  = mysqli_query($link, "UPDATE Perguntas 
					   				    SET Enunciado = '$Enunciado', Alternativa1 = '$Alt1', Alternativa2 = '$Alt2', Alternativa3 = '$Alt3', Alternativa4 = '$Alt4', DificuldadePergunta = 
									        $Dific, Materia_id = '$Materia' 
									    WHERE Pergunta_id =  '$Pergunta_id'");

		$Update2 = mysqli_query($link, "UPDATE Resposta
										SET Resposta = '$Resposta'
										WHERE Pergunta_Resposta_id = '$Pergunta_id'");
	}
 	header("location:Adm.php?link=3");
 ?>