<?php  

	include 'BDconnect.php';

	$id1 = $_POST['id1'];
	$id2 = $_POST['id2'];
	$id3 = $_POST['id3'];
	$id4 = $_POST['id4'];
	$id5 = $_POST['id5'];

	$Resposta1 = $_POST['Resposta1'];
	$Resposta2 = $_POST['Resposta2'];
	$Resposta3 = $_POST['Resposta3'];
	$Resposta4 = $_POST['Resposta4'];
	$Resposta5 = $_POST['Resposta5'];
	
	$Pontuacao=0;
	$Qtd_Perguntas = 1;

	while($Qtd_Perguntas <= 5){		

	$sql{$Qtd_Perguntas} = mysqli_query($link, "SELECT * From Resposta 
												WHERE Pergunta_Resposta_id = '".${"id" . $Qtd_Perguntas}."' 
												AND   Resposta             = '".${"Resposta". $Qtd_Perguntas}."'");
    $Resposta_Certa{$Qtd_Perguntas} = mysqli_affected_rows($link);

		if ($Resposta_Certa{$Qtd_Perguntas} > '0') {
			$Pontuacao++;
		}

		$Qtd_Perguntas++;
	}

	echo $Pontuacao;

	echo "<meta HTTP-EQUIV='refresh' CONTENT='0; URL=Pontuacao.php?Pontuacao=$Pontuacao'>"; 
?>