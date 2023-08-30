<?php

class Produtos extends Controller{

    public function __construct(){

        $this->produtoModel = $this->model('Produto');
    }
    
    public function index(){

        $dados = [
            'produtos' => $this->produtoModel->listarTodos()
        ];

        $this->view('produtos/index', $dados);
    }

    public function cadastrar(){

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [
                'nome_produto' => trim($formulario['nome_produto']),
                'descricao_produto' => trim($formulario['descricao_produto']),
                'valor_produto' => trim($formulario['valor_produto']),
            ];

            if ($this->produtoModel->armazenar($dados)) :
                Sessao::mensagem('produto', 'Cadastro do produto realizado com sucesso');
                URL::redirecionar('produtos/index');
            else :
                die("Erro ao armazenar usuario no banco de dados");
            endif;
        else :
            $dados = [
                'nome_produto' => '',
                'descricao_produto' => '',
                'valor_produto' => '',
            ];
        endif;

        $this->view('produtos/cadastrar', $dados);
    }

    public function editar($id_produto){

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [
                'id_produto' => $id_produto,
                'nome_produto' => trim($formulario['nome_produto']),
                'descricao_produto' => trim($formulario['descricao_produto']),
                'valor_produto' => trim($formulario['valor_produto']),
            ];

            if ($this->produtoModel->atualizar($dados)) :
                Sessao::mensagem('produto', 'Atualização do produto realizado com sucesso');
                URL::redirecionar('produtos/index');
            else :
                die("Erro ao armazenar usuario no banco de dados");
            endif;
        else :

            $produtos = $this->produtoModel->listarPorId($id_produto);

            $dados = [
                'id_produto' => $id_produto,
                'nome_produto' => $produtos->nome_produto,
                'descricao_produto' => $produtos->descricao_produto,
                'valor_produto' => $produtos->valor_produto,
            ];
        endif;

        $this->view('produtos/editar', $dados);
    }

    public function excluir($id_produto){

        $id_produto = (int) $id_produto;
            

            if ($this->produtoModel->destruir($id_produto)) :
                Sessao::mensagem('produto', 'Exclusão do produto realizado com sucesso');
                URL::redirecionar('produtos/index');
            else :
                die("Erro ao excluir usuario no banco de dados");
            endif;


        $this->view('produtos/index', $dados);
    }

}