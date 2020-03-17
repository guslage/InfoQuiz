<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/customCss.css" rel="stylesheet">
</head>
<body style="background-color: #eee">

<?php 
	include 'BDconnect.php';
	include 'MenuAdm.php';
 ?>

    <div class="container">
 	<table class="table table-striped table-hover">
 	<th><b>#</b></th>
 	<th>Nome</th>
 	<th>Sobrenome</th>
 	<th>Username</th>
	<th>Nascimento</th>
	<th colspan="2" style="text-align:center">Operações</th>
 	
 	<?php
	$sql  = "SELECT * FROM Jogador WHERE NivelAcesso != 1 ";
	$recordset  = mysqli_query($link,$sql);
	
 		while($registro = mysqli_fetch_array($recordset)){
			echo "<tr>";
				echo "<td>" .$registro['Jogador_id']	. "</td>";
				echo "<td>" .$registro['Nome']		    . "</td>";
				echo "<td>" .$registro['Sobrenome']		. "</td>";
				echo "<td>" .$registro['UserName']		. "</td>";
				echo "<td>"  
				    . substr($registro['DataNasc'], 8, 3)."/"
			        . substr($registro['DataNasc'], 5, 2)."/"
	                . substr($registro['DataNasc'], 0, 4) ;
	            echo "</td>";

				echo "<form action='OperacoesAdm.php' method='POST'>";
					echo"<td><button name='Delete' type='submit' id='button' class='btn btn-danger' value=".$registro['Jogador_id'].">Excluir</button></td>";
					echo"<td><button name='Adm'    type='submit' id='button' class='btn btn-info'   value=".$registro['Jogador_id'].">+Admin </button></td>";
				echo "</form>";
 		 	echo "</tr>";
 		}
 	 ?>
 </table>
 </div>
</body>
</html>
