<div class="modal fade" id="Modal_Materia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #63c45a; color: white">
        <h5 class="modal-title" id="exampleModalLabel">Adicione uma matéria!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="Operacoes_Perguntas.php" method="POST" class="form-group">
          Nova matéria
          <input type="text" name="TXT_Materia" class="form-control">  
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-danger" data-dismiss="modal">Cancelar</button>
          <input type="submit" value="Inserir" class="btn btn-primary btn-success">
        </form>
      </div>
    </div>
  </div>
</div>