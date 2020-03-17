
<!DOCTYPE html>
<html>
<head>
	<title>Área admnistrativa</title>	
	
</head>
<body>
	<?php 
		$link = $_GET["link"];
		
		$PaginaAdm[1] = "AdminPage.php";
		$PaginaAdm[2] = "LstJogadores.php";
		$PaginaAdm[3] = "LstPerguntas.php";
		$PaginaAdm[4] = "AddPergunta.php";
		$PaginaAdm[5] = "LstAdms.php";

		if(!empty($link)){
			if (file_exists($PaginaAdm[$link])) {
				include $PaginaAdm[$link];
			}else{
				include "AdminPage.php";
			}
		}
	?>
</body>
</html>