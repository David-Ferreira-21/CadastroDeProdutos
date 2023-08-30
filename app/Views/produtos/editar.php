<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            Edição de Produtos
        </div>
        <div class="card-body">
            <form name="editar" method="POST" action="<?= URL ?>/produtos/editar/<?= $dados['id_produto'] ?>" class="mt-4">
                <div class="form-group">
                    <label for="nome_produto">Nome: </label>
                    <input type="text" name="nome_produto" id="nome_produto" value="<?= $dados['nome_produto'] ?>" class="form-control">
                </div> 
                <div class="form-group">
                    <label for="descricao_produto">Descrição: </label>
                    <textarea name="descricao_produto" id="descricao_produto" class="form-control"><?= $dados['descricao_produto'] ?></textarea>
                </div>            
                <div class="form-group">
                    <label for="valor_produto">Valor: </label>
                    <input name="valor_produto" id="valor_produto" value="<?= $dados['valor_produto'] ?>" class="form-control">
                </div>  
                <div class="row">
                    <div class="col-md-6">
                        <input type="submit" value="Editar" class="btn btn-info btn-block">
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>