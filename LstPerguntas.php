<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Área admnistrativa</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/customCss.css" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body style="background-color: #eee">

<?php 
  include_once 'BDconnect.php';
  include 'MenuAdm.php';
  include 'Modal_Dificuldade.php';
  include 'Modal_Materia.php';
?> 

<div class="container">
  <div class="insidebox" style="padding: 1%; background-color: white">
  
 <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="btn btn-primary" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Perguntas</a>
  </li>
  <li class="nav-item">
    <a class="btn btn-primary" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Matérias</a>
  </li>
  <li class="nav-item">
    <a class="btn btn-primary" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Dificuldade</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <a href='Adm.php?link=4' class='btn btn-primary'>Adicionar Pergunta</a>
    <table class="table table-striped">
    <th><b>#</b></th>
    <th class="select">Enunciado</th>
    <th>Dificuldade</th>
    <th>Matéria</th>
    <th colspan="2" style="text-align:center">Operações</th>
  
  <?php

    $sql = mysqli_query($link,"SELECT Perguntas.Pergunta_id,Perguntas.Enunciado,Perguntas.DificuldadePergunta,Materia.Materia_id,Materia.Materia,Dificuldade.Dificuldade 
                               FROM Perguntas,Materia,Dificuldade 
                               WHERE Perguntas.Materia_id = Materia.Materia_id
                               AND Perguntas.DificuldadePergunta = Dificuldade.Dificuldade_id
                               ORDER BY Pergunta_id desc ");

    while($registro = mysqli_fetch_array($sql)){
      echo "<tr>";
        echo "<td>" .$registro['Pergunta_id']  . "</td>";
        echo "<td>" .$registro['Enunciado']    . "</td>";
        echo "<td>" .$registro['Dificuldade']  . "</td>";
        echo "<td>" .$registro['Materia']      . "</td>";

        echo "<form action='OperacoesAdm.php' method='POST'>";
          echo"<td><button name='Delete_Pergunta' type='submit' class='btn btn-danger' value=".$registro['Pergunta_id'].">Excluir Pergunta</button></td>";
        echo "</form>";

        echo "<form action='Adm.php?link=4' method='POST'>"; 
          echo"<td><button name='Altera_Pergunta' type='submit' class='btn btn-warning' value=".$registro['Pergunta_id'].">Alterar</button></td>";
        echo "</form>";

    echo "</tr>";
    }
   ?>
  </table>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><form action="Operacoes_Perguntas.php" method="POST" class="form-group">
          Nova matéria
          <input type="text" name="TXT_Materia" class="form-control">
    </form> 

    <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Matérias existentes</th>
              <th scope="col" colspan="2">Operações</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sqlMateria = mysqli_query($link, "SELECT Materia, Materia_id FROM Materia");
              while($materias = mysqli_fetch_array($sqlMateria)){
                echo "<tr>";
                echo "<td>". $materias['Materia_id'] ."</td>";
                echo "<td>". $materias['Materia'] ."</td>";
                echo "<form action='OperacoesAdm.php' method='POST'>";
                echo"<td><button name='Delete_Materia' type='submit' class='btn btn-danger' value=".$materias['Materia_id'].">Excluir </button></td>";
                echo "</form>";
                echo "</tr>"; 
              }
            ?>
          </tbody>
        </table>
    
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    <form action="Operacoes_Perguntas.php" method="POST" class="form-group">
          Nova dificuldade
          <input type="text" name="TXT_Dificuldade" class="form-control">
    </form>
     <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Dificuldades existentes</th>
              <th scope="col" colspan="2">Operações</th>
            </tr>
          </thead>
          <tbody>
            <?php 
      $sqldificuldade = mysqli_query($link, "SELECT * FROM Dificuldade");
      while ($dificuldades = mysqli_fetch_array($sqldificuldade)) {
        echo "<tr>";
          echo "<td>". $dificuldades['Dificuldade_id'] ."</td>";
          echo "<td>". $dificuldades['Dificuldade'] ."</td>";

          echo "<form action='OperacoesAdm.php' method='POST'>";
          echo"<td><button name='Delete_Dificuldade' type='submit' class='btn btn-danger' value=".$dificuldades['Dificuldade_id'].">Excluir </button></td>";
        echo "</form>";

        echo "</tr>"; 
      }
     ?>
          </tbody>
        </table>
    
  </div>
</div>
</div>
  
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
