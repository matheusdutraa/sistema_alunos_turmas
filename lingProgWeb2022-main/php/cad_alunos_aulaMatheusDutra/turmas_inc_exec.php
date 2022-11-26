<?php

include_once("model/turma.php");
include_once("model/curso.php");
include_once("controller/turma_controller.php");

$cod_disciplina = $_POST["cod_disciplina"];
$nome_disciplina = $_POST['nome_disciplina'];
$ano = $_POST['ano'];
$id_curso = $_POST['curso_turma'];

$turma = new Turma();
$turma->setCodDisciplina($cod_disciplina);
$turma->setNomeDisciplina($nome_disciplina);
$turma->setAno($ano);
$curso = new Curso($id_curso);
$turma->setCurso($curso);

$turmaCont = new TurmaController();
$turmaCont->salvar($turma);

header("location: turmas_listar.php");