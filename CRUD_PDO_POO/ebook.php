<?php
    class Ebook {
        private $id;
        private $titulo;
        private $descricao;
        private $lisbn;
        private $data_publicacao;
        private $preco;
        private $idioma;
        private $foto;
        

        public function __construct ($titulo, $descricao, $lisbn, $data_publicacao, $preco, $idioma, $foto) {
            $this->titulo = $titulo;
            $this->descricao = $descricao;
            $this->lisbn = $lisbn;
            $this->data_publicacao = $data_publicacao;
            $this->preco = $preco;
            $this->idioma = $idioma;
            $this->foto = $foto;
            
            
    }

    public function inserir(){}
    
    public function buscar($id){}

    public function buscarTodos(){}

    public function atualizar($id){}

    public function deletar($id){}

}

?>