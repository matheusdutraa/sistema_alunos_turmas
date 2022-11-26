<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("bootstrap/head.php"); ?>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include_once("bootstrap/menu.php"); ?>

    <h1 class="text-center">SISTEMA ACADÊMICO</h1>
   
    <!-- Cards -->
    <div class="row" style="margin: 20px;">
        <div class="col-6">
            <div id="card" class="card text-center" style="width: 18rem;">
                <img class="mx-auto d-block" src="img/card_alunos.png" alt="Alunos"
                    style="max-width: 200px; height: auto;">
                <div class="card-body">
                    <h5 class="card-title">Alunos</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li id="linha" class="list-group-item"><a href="alunos_listar.php" class="card-link">Listagem de Alunos</a></li>
                    <li id="linha" class="list-group-item"><a href="alunos_inc.php" class="card-link">Inserir Aluno</a></li>
                </ul>
            </div>
        </div>

        <div class="col-6">
            <div id="card" class="card text-center" style="width: 18rem;">
                <img class="mx-auto d-block" src="img/card_turmas.png" alt="Alunos"
                    style="max-width: 200px; height: auto;">
                <div class="card-body">
                    <h5 class="card-title">Turmas</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li  class="list-group-item"><a href="turmas_listar.php" class="card-link">Listagem de Turmas</a></li>
                    <li  class="list-group-item"><a href="turmas_inc.php" class="card-link">Inserir Turma</a></li>
                </ul>
            </div>
        </div>
    </div>

    

    <?php include_once("bootstrap/footer.php"); ?>
</body>

</html>
