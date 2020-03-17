<?php
  include 'BDconnect.php';

  $Select_data = mysqli_query($link,"SELECT * FROM Jogador WHERE Jogador_id = ".$_SESSION['Jogador_id']."");

  $Fecth_data  = mysqli_fetch_array($Select_data);

 ?>
<div class="modal fade" id="Modal_Data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #63c45a; color: white">
        <h5 class="modal-title" id="exampleModalLabel">Atualize seus dados!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="AtualizaJogador.php" method="POST" class="form-group">
          Nova data de nascimento
          <input type="date" name="TXT_Data" class="form-control" value="<?php echo $Fecth_data['DataNasc'] ?>">    
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-danger" data-dismiss="modal">Cancelar</button>
          <input type="submit" value="Atualizar dados" class="btn btn-primary btn-success">
        </form>
      </div>
    </div>
  </div>
</div>