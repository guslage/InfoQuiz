<?php
    session_start();
?>
<!doctype html>
  <head>
    <meta charset="utf-8">
    <title>InfoQuiz</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/PaginaLogin.css" rel="stylesheet">
  </head>

  <body>
        <div id="Logo">
          <img src="Imagens/Quiz2.png">
        </div>

     <div class="container">  
       <form class="form-signin" method="POST" action="ValidaLogin.php">
         <input type="text" name="ValidaUserName" class="form-control" placeholder="Username">
        
         <input type="password" name="ValidaSenha" class="form-control"  placeholder="Senha" >
          
            <?php
              if (isset($_SESSION['msgErro'])) {
                echo "<p style='color:#b72f2f;'><b>".$_SESSION['msgErro']."</b></p>";
                session_unset();
              }
            ?>
        
        <button class="btn btn-lg btn-primary btn-block" id="button" type="submit">Entrar</button><br>
        <div id="Cadastro">
          <p>Não possui uma conta ainda? <a href="PaginaCadastro.php"> Cadastre-se aqui!</a></p>
          <center><p><a href="Rec_Senha.php">Esqueci minha senha!</a></p></center>
        </div>
      </form>
    </div> 
  </body>
</html>
