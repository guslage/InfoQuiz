<?php

	include 'BDconnect.php';

	//Torna o Jogador Administrador
	if(isset($_POST['Adm'])){
		$Adm = $_POST['Adm'];
	$sqlAdm = mysqli_query($link,"Update Jogador SET NivelAcesso = '1' WHERE Jogador_id = $Adm");
	header("location:Adm.php?link=2");
	}
	
	//Exclui um Jogador
	if(isset($_POST['Delete'])){
		$Delete = $_POST['Delete'];
	$sqldel = mysqli_query($link,"DELETE FROM Jogador WHERE Jogador_id = $Delete");
	header("location:Adm.php?link=2");
	}

	//Exclui uma Pergunta
	if(isset($_POST['Delete_Pergunta'])){
		$Delete_Pergunta = $_POST['Delete_Pergunta'];
	$sqldelper = mysqli_query($link,"DELETE FROM Perguntas WHERE Pergunta_id = $Delete_Pergunta");
	header("location:Adm.php?link=3");
	}
	
	//Exclui uma dificuldade
	if (isset($_POST['Delete_Dificuldade'])) {
		$Delete_Dificuldade = $_POST['Delete_Dificuldade'];
		
		$sqldeldif = mysqli_query($link, "DELETE FROM dificuldade WHERE Dificuldade_id = $Delete_Dificuldade");
		
		$sqldeldif2 = mysqli_query($link, "DELETE FROM perguntas WHERE DificuldadePergunta = $Delete_Dificuldade");
		
		header("location:Adm.php?link=3");
	}
	
	//Exclui uma matéria
	if (isset($_POST['Delete_Materia'])) {
		$Delete_Materia = $_POST['Delete_Materia'];
		
		$sqldelmat = mysqli_query($link, "DELETE FROM materia WHERE Materia_id = $Delete_Materia");
		
		$sqldelmat2 = mysqli_query($link, "DELETE FROM perguntas WHERE DificuldadePergunta = $Delete_Materia");
		
		header("location:Adm.php?link=3");
	}
	

?>