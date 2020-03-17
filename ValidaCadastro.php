<?php 
	session_start();
	include 'BDconnect.php';
	
	$Nome 		= $_POST['Nome'];
	$Sobrenome 	= $_POST['Sobrenome'];
	$Username	= $_POST['Username'];
	$Senha		= $_POST['Senha'];
	$Sexo		= $_POST['Sexo'];
	$Rec_Senha  = $_POST['Rec_Senha'];
	$DataNasc	= $_POST['DataNasc'];
	
	$revisa = mysqli_query($link, "SELECT * FROM Jogador WHERE Username = '$Username'");
	
	$row = mysqli_affected_rows($link);
	
	if($row > 0){
		$_SESSION['msgErroCadastro'] = 'Este Usuário já existe';
			header("location: PaginaCadastro.php");
	}

	$sql = "INSERT INTO jogador(Nome, Sobrenome, Username, Senha, Sexo, Rec_Senha, DataNasc, NivelAcesso) 
		 	VALUES    ('$Nome', '$Sobrenome', '$Username','$Senha', '$Sexo', '$Rec_Senha', '$DataNasc', '0')";
	
	mysqli_query($link,$sql);

	echo "<meta HTTP-EQUIV='refresh' CONTENT='0; URL=PaginaLogin.php'>"; 
?>