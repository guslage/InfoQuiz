<?php
	session_start(); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Recuperação de senha</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="background-color: #eee">
	<div class="container" style="margin-top: 10%">
	<form method="POST" action="Valida_Rec_Senha.php">

		<b>Username</b>
	    <input type="text" name="TXT_Rec_Username" class="form-control">
	    
	    <b>Frase de recuperação</b>
	    <input type="text" name="TXT_Rec_Frase" class="form-control">

	    <?php 
	    	if(isset($_SESSION['Rec_Invalido'])){
	    		echo "<p style='color: red'><b>".$_SESSION['Rec_Invalido']."</b></p>";
	    		session_unset();
	    	}
	    	if(isset($_SESSION['Rec_Senha'])){
	    		echo "<h1 style='color: green'> Sua senha é: ".$_SESSION['Rec_Senha']."</h1>";
	    		session_unset();
	    	}
	     ?>
	     <br>	
	    <input type="submit" name="btn_Submit" value="Enviar" class="btn btn-lg btn-success">
		<a href="PaginaLogin.php" class="btn btn-lg btn-danger">Voltar</a>
	</form>
		
</body>
</html>