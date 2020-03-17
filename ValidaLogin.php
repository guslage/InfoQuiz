<?php 
	session_start();
	include 'BDconnect.php';

	if(isset($_POST['ValidaUserName']) && isset($_POST['ValidaSenha'])){

	$ValidaUserName = $_POST['ValidaUserName'];
	$ValidaSenha    = $_POST['ValidaSenha'];

	$Consulta 	= mysqli_query($link, "SELECT * FROM Jogador WHERE UserName = '$ValidaUserName' AND Senha = '$ValidaSenha'");
	$Rows 		= Mysqli_affected_rows($link);

		if ($Rows > 0) {
			while ($Registro = mysqli_fetch_array($Consulta)) {
				$NivelAcesso = $Registro['NivelAcesso'];
						
						$_SESSION['Jogador_id'] = $Registro['Jogador_id'];
						$_SESSION['Sexo']		= $Registro['Sexo'];

					if ($NivelAcesso == 1) {
						header("location: Adm.php?link=1");
					}else{
						header("location: Quiz.php?link=4");
							}
			}
		}else{
			$_SESSION['msgErro'] = 'Login incorreto.';
			header("location: PaginaLogin.php");
		}
				}else{
					$_SESSION['campos'] = 'Preencha todos os campos';
					header("location: PaginaLogin.php");
}
?>
