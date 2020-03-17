<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Área admnistrativa </title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/customCss.css" rel="stylesheet">	
</head>
<body>
<?php 
  include 'MenuAdm.php';
  include 'BDconnect.php';
 ?>
 <?php 
 	$Select_NomeAdm = mysqli_query($link, "SELECT * FROM Jogador WHERE Jogador_id = ".$_SESSION['Jogador_id']."");

 	$Fetch_NomeAdm  = mysqli_fetch_array($Select_NomeAdm);

 	echo"<center><h1>Seja bem-vindo, ".$Fetch_NomeAdm['Nome']."!</center></h1>";
  ?>
</body>
</html>
