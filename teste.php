<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/formulario.php";

$formulario = new Formulario();
$dados = $formulario->DadosFormulario();
?>

<main>

    <div id="paginaPDF">
        <div class="container">

            <h1>Informações Pessoais. </h1>
            <p><strong>Nome Completo: </strong><?= $dados['nome_completo'] ?></p>
            <p><strong>Idade: </strong><?= $dados['idade'] ?></p>
            <p><strong>E-mail: </strong><?= $dados['email'] ?></p>
            <p><strong>Gênero: </strong><?= $dados['genero'] ?></p>
            <p><strong>Celular: </strong><?= $dados['celular'] ?></p>

            <h1>Sobre os usos do Computador. </h1>
            <p><strong>Frequência do uso do Computador: </strong><?= $dados['usoComputador'] ?></p>

            <?php if ($dados['finalidade'] === 'Outros usos sendo esse(s): ') : ?>
                <?php if (!empty($dados['outros_finalidade'])) : ?>
                    <p><strong>Finalidade: </strong> Outros usos sendo esse(s): <?= $dados['outros_finalidade'] ?></p>
                <?php else : ?>
                    <p><strong>Finalidade: </strong> Outros, não especificado.</p>
                <?php endif; ?>
            <?php else : ?>
                <p><strong>Finalidade: </strong><?= $dados['finalidade'] ?></p>
            <?php endif; ?>

            <p><strong>Está com o computador faz: </strong><?= $dados['tempoComputador'] ?></p>
            <p><strong>O desempenho do computador é: </strong><?= $dados['desempenhoComputador'] ?></p>

            <div class="html2pdf__page-break">
            <h1>Sobre o Sistema Operacional. </h1>
            <?php if ($dados['sistemaOperacional'] === 'Outro, sendo ele:') : ?>
                <?php if (!empty($dados['outros_sistema'])) : ?>
                    <p><strong>O Sistema Operacional utilizado é: </strong><?= $dados['outros_sistema'] ?></p>
                <?php else : ?>
                    <p><strong>O Sistema Operacional utilizado é: </strong> Desconhecido.</p>
                <?php endif; ?>
            <?php else : ?>
                <p><strong>O Sistema Operacional utilizado é: </strong><?= $dados['sistemaOperacional'] ?></p>
            <?php endif; ?>


            <p><strong>Sobre as atualizações do Sistema Operacional: </strong> <?= $dados['atualizacaoSistema'] ?></p>

            <h1>Sobre Licença de Softwares. </h1>
            <?php if ($dados['licencaSoftware'] === 'Sim, sendo eles: ') : ?>
                <?php if (!empty($dados['outros_licenca'])) : ?>
                    <p><strong>Licença de Software: </strong><?= $dados['outros_licenca'] ?></p>
                <?php else : ?>
                    <p><strong>Licença de Software: </strong> Não especificado.</p>
                <?php endif; ?>
            <?php else : ?>
                <p><strong>Licença de Software: </strong><?= $dados['licencaSoftware'] ?></p>
            <?php endif; ?>

            <p><strong>Há condições de comprar Licença de Softwares? </strong> <?= $dados['compraLicenca'] ?></p>
            </div>

            <div class="html2pdf__page-break">
                <h1>Backup de Dados. </h1>
                <p><strong>Em relação ao Backup dos dados: </strong> <?= $dados['backup'] ?></p>
                <p><strong>Durante a manutenção: </strong> <?= $dados['backupOpcao'] ?></p>

                <h1>Segurança e Manutenção</h1>
                <?php if ($dados['antiVirus'] === 'Sim, há Antivírus, e é utilizado o(s): ') : ?>
                    <?php if (!empty($dados['especificacao_antivirus'])) : ?>
                        <p><strong>Sobre Antivírus no Computador: </strong><?= $dados['especificacao_antivirus'] ?></p>
                    <?php else : ?>
                        <p><strong>Sobre Antivírus no Computador: </strong> Sim, há antivírus, mas antivírus não especificado.</p>
                    <?php endif; ?>
                <?php else : ?>
                    <p><strong>Sobre Antivírus no Computador: </strong><?= $dados['antiVirus'] ?></p>
                <?php endif; ?>

                <p><strong>A limpeza física do computador ocorre: </strong> <?= $dados['limpezaFisica'] ?></p>

                <?php if ($dados['softwareDownload'] === 'Sim, gostaria do(s) software(s): ') : ?>
                    <?php if (!empty($dados['outros_software'])) : ?>
                        <p><strong>Haverá instalação de Software durante a manutenção? </strong><?= $dados['outros_software'] ?></p>
                    <?php else : ?>
                        <p><strong>Haverá instalação de Software durante a manutenção? </strong> Sim, entratanto não foi especificado.</p>
                    <?php endif; ?>
                <?php else : ?>
                    <p><strong>Haverá instalação de Software durante a manutenção? </strong><?= $dados['softwareDownload'] ?></p>
                <?php endif; ?>

                <h1>Descrição dos Problemas</h1>
                <p><strong>Sobre os problemas enfrentados: </strong> <?= $dados['problemas'] ?></p>
                <p><strong>Sobre o histórico de problemas: </strong> <?= $dados['historicoProblemas'] ?></p>
                <p><strong>Sobre os serviços desejados: </strong> <?= $dados['servicoDesejado'] ?></p>
            </div>
        </div>
    </div>
    <button id="confirmar-pdf">Gerar PDF</button>
</main>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php" ?>