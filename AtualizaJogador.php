<?php 
session_start();

include 'BDconnect.php';

$id = $_SESSION['Jogador_id'];

?>

<?php
	if(isset($_POST['TXT_Nome']) and isset($_POST['TXT_Sobrenome'])){
	
    	$Nome 		= $_POST['TXT_Nome'];
		$Sobrenome	= $_POST['TXT_Sobrenome'];

		$sql = "UPDATE Jogador SET Nome = '$Nome', Sobrenome = '$Sobrenome' WHERE Jogador_id = '$id'";

	$Con = mysqli_query($link,$sql);
	header("location: Quiz.php?link=6");
	}
?>


<?php
	if(isset($_POST['TXT_Username'])){
	
    	$Username = $_POST['TXT_Username'];

		$sql = "UPDATE Jogador SET UserName = '$Username' WHERE Jogador_id = '$id'";

	$Con = mysqli_query($link,$sql);
	header("location: Quiz.php?link=6");
	}
?>


<?php
	if(isset($_POST['TXT_Data'])){
	
    	$Data = $_POST['TXT_Data'];

		$sql = "UPDATE Jogador SET DataNasc = '$Data' WHERE Jogador_id = '$id'";

	$Con = mysqli_query($link,$sql);
	header("location: Quiz.php?link=6");
	}
?>