<?php

class Produto
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function listarTodos(){
        $this->db->query("SELECT * FROM produtos order by produtos.id_produto desc ");
        return $this->db->resultados();
    }

    public function listarPorId($id_produto){
        $this->db->query("SELECT * FROM produtos where id_produto = :id_produto");
        $this->db->bind('id_produto', $id_produto);

        return $this->db->resultado();
    }

    public function armazenar($dados)
    {
        $this->db->query("INSERT INTO produtos(nome_produto, descricao_produto, valor_produto) VALUES (:nome_produto, :descricao_produto, :valor_produto)");

        $this->db->bind("nome_produto", $dados['nome_produto']);
        $this->db->bind("descricao_produto", $dados['descricao_produto']);
        $this->db->bind("valor_produto", $dados['valor_produto']);

        if ($this->db->executa()) :
            return true;
        else :
            return false;
        endif;
    }

    public function atualizar($dados)
    {
        $this->db->query("UPDATE produtos SET nome_produto = :nome_produto, descricao_produto = :descricao_produto, valor_produto = :valor_produto WHERE id_produto = :id_produto ");

        $this->db->bind("id_produto", $dados['id_produto']);
        $this->db->bind("nome_produto", $dados['nome_produto']);
        $this->db->bind("descricao_produto", $dados['descricao_produto']);
        $this->db->bind("valor_produto", $dados['valor_produto']);

        if ($this->db->executa()) :
            return true;
        else :
            return false;
        endif;
    }

    public function destruir($id_produto)
    {
        $this->db->query("DELETE FROM `produtos` WHERE id_produto = :id_produto ");

        $this->db->bind("id_produto", $id_produto);

        if ($this->db->executa()) :
            return true;
        else :
            return false;
        endif;
    }
}