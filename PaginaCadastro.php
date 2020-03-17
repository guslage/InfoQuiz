<!DOCTYPE html>
<?php
	session_start();
?>
<html>
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/PaginaCadastro.css" rel="stylesheet">
</head>
<body>
<div id="box">
<div class="container">
	<center><fieldset style="width: 22%; background-color: white"><table>
	<form method="POST" class="form-signin" action="ValidaCadastro.php">
           <div class="form-group">
		  
			<tr>Nome</tr>
			<tr><input type="text" name="Nome" class="form-control" id="Nome" placeholder="Nome" required></tr>
				
			<tr>Sobrenome</tr>
			<tr><input type="text" name="Sobrenome" class="form-control" id="Sobrenome" placeholder="Sobrenome" required></tr>

			<tr>Username</tr>
			<tr><input type="text" name="Username" class="form-control" id="Username" placeholder="Username" required></tr>
		
			<tr>Senha</tr>
			<tr><input type="password" name="Senha" class="form-control" id="Senha" placeholder="Senha" required></tr>

			<td>Sexo</td>
			<td style="padding-left: 30px"><input type="radio" name="Sexo" class="form-check-input" value="M" required> M</td>
			<td style="padding-left: 50px"><input type="radio" name="Sexo"  class="form-check-input"  value="F" required> F</td>

			<tr>Data de Nascimento</tr>
			<tr><input type="date" name="DataNasc" class="form-control" required></tr>

			<tr>Adcione uma frase para ajudar na recuperação de senha mais tarde!</tr>
			<tr><input type="text" name="Rec_Senha" class="form-control"></tr>

	</table>
	<?php
		if(isset($_SESSION['msgErroCadastro'])){
			 echo "<p style='color:#d81313;'><b>".$_SESSION['msgErroCadastro']."</b></p>";
            session_unset();
		}
	?>
		<button class="btn btn-lg btn-primary btn-block" id="button" type="submit">Cadastrar</button><br>
	 </div>
	</form></center></fieldset>

 	</div>
 </div>
</body>
</html>
