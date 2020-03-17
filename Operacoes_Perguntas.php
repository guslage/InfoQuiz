<?php 
	include 'BDconnect.php';

	if (isset($_POST['TXT_Dificuldade'])) {
		$Dificuldade = $_POST['TXT_Dificuldade'];

		$sql = mysqli_query($link, "SELECT * FROM Dificuldade WHERE Dificuldade = '". $Dificuldade. "'");
		printf($Dificuldade);
		$Colunas = mysqli_affected_rows($link);

		if ($Colunas == 0 ) {
			$Insert = mysqli_query($link, "INSERT INTO Dificuldade VALUES(null, '$Dificuldade')");
		}else{
			$_SESSION['Dificuldade'] = "Dificuldade já existente!";
		}
		printf($Colunas);
		header("location:Adm.php?link=3");
	}


	if(isset($_POST['TXT_Materia'])){
		$Materia = $_POST['TXT_Materia'];
		$sql = mysqli_query($link, "INSERT INTO Materia VALUES(null, '$Materia')");
		header("location:Adm.php?link=3");
	}
?>