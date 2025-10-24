<?php
// CRUD --> Create, Read, Update e Delete

class AlunoDAO { // "DAO --> "Data Access Object"
    private $alunos = []; // Array para armazenamento temporário dos objetos e seus atributos, antes de mandar para o banco de dados. Foi criado inicialmente vazio [];

    private $arquivo = "alunos.json"; // Cria o arquivo de json para que os dados sejam armazenados

    // Construtor AlunoDAO --> carrega os dados do arquivo ao iniciar a aplicação
    public function __construct(){
        if (file_exists($this->arquivo)){
            // Lê o conteúdo do arquivo caso ele já exista
            $conteudo = file_get_contents($this->arquivo); // Atribui as informações do arquivo existente à variavel $conteudo

            $dados = json_decode($conteudo, true); // Converte um JSON em array associativo

            if ($dados){ // Verifica se o array é nulo ou falso, caso sejá valído e contenha conteúdo, ele prossegue para a lógica dentro do if
                foreach ($dados as $id => $info){ // percorre o array $dados relacionando chave e valor
                    $this->alunos[$id] = new Aluno( // cria um novo objeto com as chaves e valores associados
                        $info['id'],
                        $info['nome'],
                        $info['curso']
                    );
                }
            }
        }
    }

    // Método Auxilar -> salva o array de alunos no arquivo
    private function salvarEmArquivo(){
        $dados = [];

        // Transforma os objetos em arrays convencionais
        foreach ($this->alunos as $id => $aluno){
            $dados[$id]=[
                'id' => $aluno->getId(),
                'nome' => $aluno->getNome(),
                'curso' => $aluno->getCurso()
            ];
        }

       // Converte para JSON formatado e grava o arquivo
       file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT));
    }
    // CREATE 
    public function criarAluno(Aluno $aluno): void{ // Método Create --> para criar um novo objeto;
        $this->alunos[$aluno->getId()]= $aluno;
        $this->salvarEmArquivo();
    }
    //READ
    public function lerAluno(){ // Método Read --> para ler informações de um objeto já criado;
        return $this->alunos;
    }
    // UPDATE
    public function atualizarAluno($id, $novoNome, $novoCurso){ // Método update --> para atualizar informações de um objeto já existente;
        if (isset($this->alunos[$id])) {
            $this->alunos[$id]->setNome($novoNome);
            $this->alunos[$id]->setCurso($novoCurso);
        }
        $this->salvarEmArquivo();
    }
    // DELETE
    public function excluirAluno($id){ // Método Delete --> para excluir um objeto
        unset($this->alunos[$id]);
        $this->salvarEmArquivo();
    }
}