<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/formulario.php";

$formulario = new Formulario();
$dados = $formulario->DadosFormulario();
?>

<main>

    <div id="paginaPDF">
        <div class="container">
            <p>Nome Completo: <?= $dados['nome_completo'] ?></p>
            <p>Idade: <?= $dados['idade'] ?></p>
            <p>E-mail: <?= $dados['email'] ?></p>
            <p>Gênero: <?= $dados['genero'] ?></p>
            <p>Celular: <?= $dados['celular'] ?></p>
        </div>
    </div>
    <button id="confirmar-pdf">Gerar PDF</button>
</main>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php" ?>