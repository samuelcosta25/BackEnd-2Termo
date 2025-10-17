<?php
// CRUD --> Create, Read, Update e Delete

class AlunoDAO { // "DAO --> "Data Access Object"
    private $alunos = []; // Array para armazenamento temporário dos objetos e seus atributos, antes de mandar para o banco de dados. Foi criado inicialmente vazio [];

    public function criarAluno(Aluno $aluno): void{ // Método Create --> para criar um novo objeto;
        $this->alunos[$aluno->getId()]= $aluno;
    }
    public function lerAluno(){ // Método Read --> para ler informações de um objeto já criado;
        return $this->alunos;
    }
    public function atualizarAluno($id, $novoNome, $novoCurso){ // Método update --> para atualizar informações de um objeto já existente;
        if (isset($this->alunos[$id])) {
            $this->alunos[$id]->setNome($novoNome);
            $this->alunos[$id]->setCurso($novoCurso);
        }
    }
    public function excluirAluno($id){ // Método Delete --> para excluir um objeto
        unset($this->alunos[$id]);
    }
}