<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/formulario.php";

$formulario = new Formulario();
$dados = $formulario->DadosFormulario();
?>

<main>

    <div id="paginaPDF">
        <div class="container">
            <p><strong>Nome Completo:</strong><?= $dados['nome_completo'] ?></p>
            <p><strong>Idade:</strong><?= $dados['idade'] ?></p>
            <p><strong>E-mail:</strong><?= $dados['email'] ?></p>
            <p><strong>Gênero:</strong><?= $dados['genero'] ?></p>
            <p><strong>Celular:</strong><?= $dados['celular'] ?></p>

            <p><strong>Uso do Computador:</strong><?= $dados['usoComputador'] ?></p>

            <?php if ($dados['finalidade'] === 'Outros usos sendo esse(s): '): ?>
                <?php if (!empty($dados['outros_finalidade'])): ?>
                    <p><strong>Finalidade:</strong> Outros usos sendo esse(s): <?= $dados['outros_finalidade'] ?></p>
                <?php else : ?>
                    <p><strong>Finalidade:</strong> Outros, não especificado.</p>
                <?php endif; ?>
            <?php else : ?>
                <p><strong>Finalidade:</strong><?= $dados['finalidade'] ?></p>
            <?php endif; ?>

            <p><strong>Está com o computador faz:</strong><?= $dados['tempoComputador'] ?></p>
            <p><strong>O desempenho do computador é:</strong><?= $dados['desempenhoComputador'] ?></p>
            
            <?php if ($dados['sistemaOperacional'] === 'Outro, sendo ele:'):?>
                <?php if (!empty($dados['outros_sistema'])): ?>
                    <p><strong>O Sistema Operacional utilizado é:</strong><?= $dados['outros_sistema'] ?></p>
                <?php else : ?>
                    <p><strong>O Sistema Operacional utilizado é:</strong> Desconhecido.</p>
                <?php endif; ?>
            <?php else: ?>
                <p><strong>O Sistema Operacional utilizado é:</strong><?= $dados['sistemaOperacional'] ?></p>
            <?php endif; ?>


            <p><strong>Sobre as atualizações do Sistema Operacional:</strong> <?= $dados['atualizacaoSistema'] ?></p>

            <?php if ($dados['licencaSoftware'] === 'Sim, sendo eles: '):?>
                <?php if (!empty($dados['outros_licenca'])): ?>
                    <p><strong>Licença de Software:</strong><?= $dados['outros_licenca'] ?></p>
                <?php else : ?>
                    <p><strong>Licença de Software:</strong> Não especificado.</p>
                <?php endif; ?>
            <?php else: ?>
                <p><strong>Licença de Software:</strong><?= $dados['licencaSoftware'] ?></p>
            <?php endif; ?>
            
            <p><strong>Há condições de comprar Licença de Softwares?</strong> <?= $dados['compraLicenca'] ?></p>

            <p><strong>Em relação ao Backup dos dados:</strong> <?= $dados['backup'] ?></p>
            <p><strong>Durante a manutenção:</strong> <?= $dados['backupOpcao'] ?></p>

            <?php if ($dados['antiVirus'] === 'Sim, há Antivírus, e é utilizado o(s): '):?>
                <?php if (!empty($dados['especificacao_antivirus'])): ?>
                    <p><strong>Sobre Antivírus no Computador:</strong><?= $dados['especificacao_antivirus'] ?></p>
                <?php else : ?>
                    <p><strong>Sobre Antivírus no Computador:</strong> Sim, há antivírus, mas antivírus não especificado.</p>
                <?php endif; ?>
            <?php else: ?>
                <p><strong>Sobre Antivírus no Computador:</strong><?= $dados['antiVirus'] ?></p>
            <?php endif; ?>

            <p><strong>A limpeza física do computador ocorre:</strong> <?= $dados['limpezaFisica'] ?></p>

            <?php if ($dados['softwareDownload'] === 'Sim, gostaria do(s) software(s): '):?>
                <?php if (!empty($dados['outros_software'])): ?>
                    <p><strong>Haverá instalação de Software durante a manutenção?</strong><?= $dados['outros_software'] ?></p>
                <?php else : ?>
                    <p><strong>Haverá instalação de Software durante a manutenção?</strong> Sim, entratanto não foi especificado.</p>
                <?php endif; ?>
            <?php else: ?>
                <p><strong>Haverá instalação de Software durante a manutenção?</strong><?= $dados['softwareDownload'] ?></p>
            <?php endif; ?>

            <p><strong>Sobre os problemas enfrentados:</strong> <?= $dados['problemas'] ?></p>
            <p><strong>Sobre o histórico de problemas:</strong> <?= $dados['historicoProblemas'] ?></p>
            <p><strong>Sobre os serviços desejados:</strong> <?= $dados['servicoDesejado'] ?></p>
        </div>
    </div>
    <button id="confirmar-pdf">Gerar PDF</button>
</main>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php" ?>