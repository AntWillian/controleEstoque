


<div class="conteudo_produtos2">
  <h1>Produtos</h1>

  <div class="botoes">
    <div class="novoProduto" data-toggle="modal" data-target="#exampleModal">

    </div>
  </div>

  <!-- MODAIS -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novo Produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="index.html" method="post">
          <div class="form-group">
            <label for="formGroupExampleInput">Codigo do produto</label>
            <input name="txtCodigo" type="text" class="form-control" id="formGroupExampleInput" placeholder="Codigo">
          </div>


          <div class="form-group">
            <label for="formGroupExampleInput">Descricao</label>
            <input name="txtDescricao" type="text" class="form-control" id="formGroupExampleInput" placeholder="Descricao">
          </div>


          <div class="form-group">
            <label for="formGroupExampleInput">Preço</label>
            <input name="txtPreco" type="text" class="form-control" id="formGroupExampleInput" placeholder="Preço">
          </div>


          <div class="form-group col-md-4">
            <label for="inputState">Categoria</label>
            <select id="inputState" class="form-control">
              <option selected>Bebida</option>
              <option>comida</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlFile1">Selecionar imagem</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>


        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


</div>
