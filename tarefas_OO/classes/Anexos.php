<?php

class Anexo
{
    private $id = 0;
    private $tarefa_id;
    private $nome;
    private $arquivo;
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */ 
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of tarefa_id
     */ 
    public function getTarefaId()
    {
        return $this->tarefa_id;
    }

    /**
     * Set the value of tarefa_id
     */ 
    public function setTarefaId($tarefa_id)
    {
        $this->tarefa_id = $tarefa_id;        
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * Get the value of arquivo
     */ 
    public function getArquivo()
    {
        return $this->arquivo;
    }

    /**
     * Set the value of arquivo
     */ 
    public function setArquivo($arquivo)
    {
        $this->arquivo = $arquivo;
    }
}



?>