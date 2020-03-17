<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/customCss.css" rel="stylesheet">
</head>
<body style="background-color: #eee">

<?php 
	include 'BDconnect.php';
	include 'MenuAdm.php';
 ?>

    <div class="container">
 	<table class="table table-striped">
 	<th><b>#</b></th>
 	<th>Nome</th>
 	<th>Sobrenome</th>
 	<th>Username</th>
	<th>Nascimento</th>
 	
 	<?php
		$sql  = "SELECT * FROM Jogador WHERE NivelAcesso = 1";
		$recordset  = mysqli_query($link,$sql);
		
	 		while($registro = mysqli_fetch_array($recordset)){
				echo "<tr>";
					echo "<td>" .$registro['Jogador_id']. "</td>";
					echo "<td>" .$registro['Nome']. "</td>";
					echo "<td>" .$registro['Sobrenome']. "</td>";
					echo "<td>" .$registro['UserName']. "</td>";
					echo "<td>"  
					    . substr($registro['DataNasc'], 8, 3)."/"
				        . substr($registro['DataNasc'], 5, 2)."/"
		                . substr($registro['DataNasc'], 0, 4) ;
		            echo "</td>";
	 		 	echo "</tr>";
	 		}
 	 ?>
 </table>
 </div>
</body>
</html>
