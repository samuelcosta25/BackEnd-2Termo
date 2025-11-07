<?php
require_once 'Bebida.php';

class BebidaDAO {
    private $bebidasArray = [];
    private $arquivoJson = 'bebidas.json';

    public function __construct(){
        if(file_exists($this->arquivoJson)){
            $conteudoArquivo = file_get_contents($this->arquivoJson);

            $dadosArquivoEmArray = json_decode($conteudoArquivo, true);

            if ($dadosArquivoEmArray){
                foreach ($dadosArquivoEmArray as $nome => $info){
                    $this->bebidasArray[$nome] = new Bebida(
                        $info['nome'],
                        $info['categoria'],
                        $info['volume'],
                        $info['valor'],
                        $info['qtde']
                    );
                }
            }
        }
    }
        private function salvarArquivo(){
            $dadosParaSalvar=[];

            foreach ($this->bebidasArray as $nome => $bebida){
                $dadosParaSalvar[$nome]=[
                    'nome'=>$bebida->getNome(),
                    'categoria'=>$bebida->getCategoria(),
                    'volume'=>$bebida->getVolume(),
                    'valor'=>$bebida->getValor(),
                    'qtde'=>$bebida->getQtde()
                ];
            }
            file_put_contents($this->arquivoJson, json_encode($dadosParaSalvar, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        }


        // CREATE
        public function criarBebida(Bebida $bebida){
            $this->bebidasArray[$bebida->getNome()] = $bebida;
            $this->salvarArquivo();
        }

        //READ
        public function lerBebidas(){
            return $this->bebidasArray;
        }
        
        // UPDATE 
        public function atualizarBebida($nomeOriginal, $novoNome, $categoria, $volume, $valor, $qtde) {
            if (!isset($this->bebidasArray[$nomeOriginal])) return; // não existe

            // Se mudar o nome e ele já existir, não deixa
            if ($nomeOriginal !== $novoNome && isset($this->bebidasArray[$novoNome])) {
            return;
            }
            // Exclui o objeto antigo para gravar um novo com os mesmos dados
            unset($this->bebidasArray[$nomeOriginal]);
            $this->bebidasArray[$novoNome] = new Bebida($novoNome, $categoria, $volume, $valor, $qtde);
            $this->salvarArquivo();
        }

        // DELETE
        public function excluirBebida($nome){
            unset($this->bebidasArray[$nome]);
            $this->salvarArquivo();
        }

        public function buscarPorNome($nome) {
        return $this->bebidasArray[$nome] ?? null;
    }
    
}