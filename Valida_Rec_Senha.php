<?php 
	session_start();

	include 'BDconnect.php';

	if(isset($_POST['TXT_Rec_Username']) and isset($_POST['TXT_Rec_Frase'])){
		$Rec_Username = $_POST['TXT_Rec_Username'];
		$Rec_Frase    = $_POST['TXT_Rec_Frase'];

		$sql = mysqli_query($link, "SELECT * FROM Jogador WHERE UserName = '$Rec_Username' AND Rec_Senha ='$Rec_Frase'");

		$Colunas = mysqli_affected_rows($link);

		if($Colunas > 0){
			$Senha = mysqli_fetch_array($sql);

			$_SESSION['Rec_Senha'] = $Senha['Senha'];
		}else{
			$_SESSION['Rec_Invalido'] = 'Usuário ou chave inválida';
		}

		header("location:Rec_Senha.php");
	}

 ?>