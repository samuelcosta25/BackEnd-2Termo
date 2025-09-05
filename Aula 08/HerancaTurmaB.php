<?php
 class Imovel {
    private $categoria;
    private $n_comodos;
    private $valor;
    private $estado_conservacao;

    public function __construct($categoria, $n_comodos, $valor, $estado_conservacao){
        $this->$categoria=$categoria;
        $this->n_comodos=$n_comodos;
        $this->valor=$valor;
        $this->estado_conservacao=$estado_conservacao;
    }
 }

 class Casa extends Imovel{
    private $tem_quintal; // Atributo booleano - true ou false

    public function __construct($categoria, $n_comodos, $valor, $estado_conservacao, $tem_quintal){
        parent::__construct($categoria, $n_comodos, $valor, $estado_conservacao);

        $this->tem_quintal=$tem_quintal;
    }
 }

 class Apartamento extends Imovel{
    private $andar;

    public function __construct($categoria, $n_comodos, $valor, $estado_conservacao, $andar){
        parent::__construct($categoria, $n_comodos, $valor, $estado_conservacao);

        $this->andar=$andar;
    }
 }

 // Crie uma subclasse chamada Escola com o atributo $seguimento.
    class Escola extends Imovel {
        private $seguimento;

        public function __construct($categoria, $n_comodos, $valor, $estado_conservacao, $seguimento){
            parent::__construct($categoria, $n_comodos, $valor, $estado_conservacao);

             $this->seguimento= $seguimento;
        }
    }
 // Crie uma classe filha chamada comercio com o atributo $tamanho
 class Comercio extends Imovel {
    private $tamanho;

    public function __construct($categoria, $n_comodos, $valor, $estado_conservacao, $tamanho){
        parent::__construct($categoria, $n_comodos, $valor, $estado_conservacao);

        $this->tamanho=$tamanho;
    }
 }
  