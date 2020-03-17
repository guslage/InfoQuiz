<!DOCTYPE html>
<?php
	session_start();
?>
<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/Home.css" rel="stylesheet">
  <link href="css/Modal_Jogador.css" rel="stylesheet">
</head>
<body>
        <?php 
          include_once 'BDconnect.php';
          include 'MenuJogador.php';
          include 'Modal_Nome.php';
          include 'Modal_Username.php';
          include 'Modal_Data.php';
         ?>
  <div class="container">
  
    <?php 
    
      $Jogador_id = $_SESSION['Jogador_id'];

      $sql = mysqli_query($link,"SELECT * FROM Jogador WHERE Jogador_id = $Jogador_id");

      $Registro = mysqli_fetch_array($sql);

     ?>
     
  <table class="table table-striped">
        <tbody>
      <tr>
        <td><b>Nome Completo</b></td>
        <td><?php echo $Registro['Nome']; echo ' '; echo $Registro['Sobrenome']; ?></td>
        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modal_Nome">Atualizar</button></td>
      </tr>
      <tr>
        <td><b>Username</b></td>
        <td><?php echo $Registro['UserName']; ?></td>
        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modal_Username">Atualizar</button></td>
      </tr>
      <tr>
        <td><b>Data de Nascimento</b></td>
        <td><?php echo   substr($Registro['DataNasc'], 8, 3)."/"
                       . substr($Registro['DataNasc'], 5, 2)."/"
                       . substr($Registro['DataNasc'], 0, 4) ; ?>
        </td>
        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modal_Data">Atualizar</button></td>
      </tr>
    </tbody>
  </table>

    <a href='Quiz.php?link=7' class='btn btn-lg btn-success' id="button_pontuacao">Minha pontuação</a>
   
  </div>

</body>
</html>