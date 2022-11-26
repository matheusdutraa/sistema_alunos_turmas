<?php

class Turma{
    private $idTurma;
    private $cod_disciplina;
    private $nome_disciplina;
    private $ano;
    private $curso;

    /**
     * Get the value of idTurma
     */
    public function getIdTurma()
    {
        return $this->idTurma;
    }

    /**
     * Set the value of idTurma
     *
     * @return  self
     */
    public function setIdTurma($idTurma)
    {
        $this->idTurma = $idTurma;

        return $this;
    }

    /**
     * Get the value of cod_disciplina
     */
    public function getCodDisciplina()
    {
        return $this->cod_disciplina;
    }

    /**
     * Set the value of cod_disciplina
     *
     * @return  self
     */

    public function setCodDisciplina($cod_disciplina)
    {
        $this->cod_disciplina = $cod_disciplina;

        return $this;
    }

    /**
     * Get the value of nome_disciplina
     */
    public function getNomeDisciplina()
    {
        return $this->nome_disciplina;
    }

    /**
     * Set the value of nome_disciplina
     *
     * @return  self
     */
    public function setNomeDisciplina($nome_disciplina)
    {
        $this->nome_disciplina = $nome_disciplina;

        return $this;
    }

    /**
     * Get the value of ano
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     *
     * @return  self
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get the value of curso
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

}