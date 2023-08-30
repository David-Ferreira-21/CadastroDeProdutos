<div class="container py-5">

<div class="card">
    <div class="card-header bg-info text-white">
        <h1>Produtos</h1>
        <div class="float-right">
            <a href="<?=URL?>/produtos/cadastrar" class="btn btn-light">Cadastrar</a>
        </div>
    </div>
    <div class="card-body">
      <?=Sessao::mensagem('produto')?>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Descrição</th>
          <th scope="col">Valor</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($dados['produtos'] as $produtos): ?>
        <tr>
          <th scope="row"><?= $produtos->nome_produto ?></th>
          <td><?= $produtos->descricao_produto ?></td>
          <td><?= $produtos->valor_produto ?></td>
          <td>
              <div class="row">
                  <a href="<?= URL ?>/produtos/editar/<?= $produtos->id_produto ?>" class="btn btn-warning mr-2">Editar</a>
                  <form name="excluir" method="POST" action="<?= URL . '/produtos/excluir/' . $produtos->id_produto ?>">
                    <input type="submit" value="Excluir" class="btn btn-danger">
                  </form>
                </div>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    </div>
</div>


</div>