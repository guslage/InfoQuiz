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

		$sqlMat = mysqli_query($link, "SELECT * FROM Materia WHERE Materia = '". $Materia ."'");
		$ColunasMat = mysqli_affected_rows($sqlMat);

		if ($ColunasMat == 0) {
			$insertMat = mysqli_query($link, "INSERT INTO Materia VALUES(null, '$Materia')");
		}else{
			$_SESSION['Materia'] = "Matéria já existente";
		}

		header("location:Adm.php?link=3");
	}
?>