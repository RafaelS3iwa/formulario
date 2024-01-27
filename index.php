<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/formulario.php"; 

$formulario = new Formulario();
$formulario->DadosFormulario();
?>

<main>
    <div class="container">
        <h1 class="titulo">Diagnóstico para Manutenção</h1>
    </div>


    <!-- Informações do Cliente -->
    <form method="post" action="teste.php">
        <div class="formulario container">
            <h1>Informações Pessoais</h1>
            <div class="formLinha">
                <div class="form-group">
                    <div class="col">
                        <label for="nome_completo" class="form-label">Nome Completo: </label>
                        <input type="text" name="nome_completo" id="nome_completo" class="form-control" required>
                    </div>

                    <div class="col">
                        <label for="idade" class="form-label">Idade: </label>
                        <input type="number" name="idade" id="idade" class="form-control" required>
                    </div>

                    <div class="col">
                        <label for="genero" class="form-label">Gênero (opcional): </label>
                        <input type="text" name="genero" id="genero" class="form-control">
                    </div>

                    <div class="col">
                        <label for="email" class="form-label">E-mail: </label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="col">
                        <label for="celular" class="form-label">Celular: </label>
                        <input type="text" name="celular" id="celular" class="form-control" required>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sobre uso do Computador -->
        <div class="formulario container">
            <h1>Uso do Computador</h1>
            <p>Utiliza seu computador frequentemente? </p>
            <table>
                <tr>
                    <td><label class="form-check-label" for="usoComputador1"><input class="form-check-input" type="radio" name="usoComputador" id="usoComputador1" value="Usa frequentemente" required></label> Sim</td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="usoComputador2"><input class="form-check-input" type="radio" name="usoComputador" id="usoComputador2" value="Não usa frequentemente" required></label> Não</td>
                </tr>
            </table>

            <p>Para qual finalidade você utiliza seu computador?</p>
            <table>
                <tr>
                    <td><label class="form-check-label" for="finalidade1"><input class="form-check-input" type="radio" name="finalidade" id="finalidade1" value="Para trabalhos de design e manipulação de mídia digital."></label> Para trabalhos de design e manipulação de mídia digital.</td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="finalidade2"><input class="form-check-input" type="radio" name="finalidade" id="finalidade2" value="Para jogos"></label> Para jogos</td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="finalidade3"><input class="form-check-input" type="radio" name="finalidade" id="finalidade3" value="Escritório,  ara tarefas administrativas e gestão de documentos e/ou uso pessoal. "></label> Escritório, para tarefas administrativas, gestão de documentos e/ou uso pessoal.</td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="finalidade4"><input class="form-check-input" type="radio" name="finalidade" id="finalidade4" value="Outros usos sendo esse(s): "></label> Outros
                        <input type="text" name="outros_finalidade" id="outros_finalidade" class="form-control" placeholder="Especifique">
                    </td>
                </tr>
            </table>

            <p>Há quanto tempo você possui seu computador atual? </p>
            <table>
                <tr>
                    <td><label class="form-check-label" for="tempoComputador1"><input class="form-check-input" type="radio" name="tempoComputador" id="tempoComputador1" value="Menos de 1 ano."></label> Menos de 1 ano</td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="tempoComputador2"><input class="form-check-input" type="radio" name="tempoComputador" id="tempoComputador2" value="De 1 a 3 anos."></label> 1-3 anos</td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="tempoComputador3"><input class="form-check-input" type="radio" name="tempoComputador" id="tempoComputador3" value="De 3 a 5 anos"></label> 3-5 anos</td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="tempoComputador4"><input class="form-check-input" type="radio" name="tempoComputador" id="tempoComputador4" value="Mais de 5 anos"></label> Mais de 5 anos</td>
                </tr>
            </table>

            <p>Como descreveria o desempenho do seu computador em relação às suas necessidades?</p>
            <table>
                <tr>
                    <td><label class="form-check-label" for="desempenhoComputador1"><input class="form-check-input" type="radio" name="desempenhoComputador" id="desempenhoComputador1" value="Rápido e eficiente."></label> Rápido e eficiente</td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="desempenhoComputador2"><input class="form-check-input" type="radio" name="desempenhoComputador" id="desempenhoComputador2" value="Aceitável, mas poderia ser melhorado."></label> Aceitável, mas poderia ser melhorado</td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="desempenhoComputador3"><input class="form-check-input" type="radio" name="desempenhoComputador" id="desempenhoComputador3" value="Lento com dificuldades para atender às necessidades."></label> Lento com dificuldades para atender às necessidades</td>
                </tr>
            </table>
        </div>

        <div class="formulario container">
            <h1>Sistema Opercional</h1>
            <p>Qual Sistema Operacional você utiliza? (Caso desconheça o sistema, apenas selecione "Outro:")</p>
            <table>
                <tr>
                    <td><label class="form-check-label" for="sistemaOperacional1"><input class="form-check-input" type="radio" name="sistemaOperacional" id="sistemaOperacional1" value="O Windows."></label> Windows</td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="sistemaOperacional2"><input class="form-check-input" type="radio" name="sistemaOperacional" id="sistemaOperacional2" value="O Linux."></label> Linux</td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="sistemaOperacional3"><input class="form-check-input" type="radio" name="sistemaOperacional" id="sistemaOperacional3" value="O Mac."></label> Mac</td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="sistemaOperacional4"><input class="form-check-input" type="radio" name="sistemaOperacional" id="sistemaOperacional4" value="Outro, sendo ele: "></label> Outro:
                        <input type="text" name="outros_sistema" id="outros_sistema" class="form-control" placeholder="Especifique">
                    </td>
                </tr>
            </table>

            <p>Você costuma realizar atualizações de seu sistema operacional quando disponíveis? </p>
            <table>
                <tr>
                    <td><label class="form-check-label" for="atualizacaoSistema1"><input class="form-check-input" type="radio" name="atualizacaoSistema" id="atualizacaoSistema1" value="As atualizações de sistema estão em dia."></label> Sim, sempre</td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="atualizacaoSistema2"><input class="form-check-input" type="radio" name="atualizacaoSistema" id="atualizacaoSistema2" value="Provável que haja atualização pendente."></label> Às vezes</td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="atualizacaoSistema3"><input class="form-check-input" type="radio" name="atualizacaoSistema" id="atualizacaoSistema3" value="O sistema operacional está desatualizado."></label> Nunca</td>
                </tr>
            </table>
        </div>

        <div class="formulario container">
            <h1>Licença de Software</h1>
            <p>Você possui alguma licença de software?</p>
            <table>
                <tr>
                    <td><label class="form-check-label" for="licencaSoftware1"><input class="form-check-input" type="radio" name="licencaSoftware" id="licencaSoftware1" value="Sim, sendo eles: "></label> Sim, sendo eles:
                        <input type="text" name="outros_licenca" id="outros_licenca" class="form-control" placeholder="Especifique">
                    </td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="licencaSoftware2"><input class="form-check-input" type="radio" name="licencaSoftware" id="licencaSoftware2" value="Não há licença de softwares."></label> Não possuo</td>
                </tr>
            </table>

            <p>Em relação a pergunta acima, se caso não possua licença tem condições de comprar? </p>
            <table>
                <tr>
                    <td><label class="form-check-label" for="compraLicenca1"><input class="form-check-input" type="radio" name="compraLicenca" id="compraLicenca1" value="Há condições de comprar licenças."></label> Sim</td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="compraLicenca2"><input class="form-check-input" type="radio" name="compraLicenca" id="compraLicenca2" value="Não há condições de comprar licenças."></label> Não</td>
                </tr>
            </table>
        </div>

        <div class="formulario container">
            <h1>Backup de Dados</h1>
            <p>Você já fez uma cópia de segurança dos seus arquivos importantes para evitar perdas em caso de problemas no computador?</p>
            <table>
                <tr>
                    <td><label class="form-check-label" for="backup1"><input class="form-check-input" type="radio" name="backup" id="backup1" value="Sim, já há uma cópia de segurança dos arquivos."></label> Sim</td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="backup2"><input class="form-check-input" type="radio" name="backup" id="backup2" value="Não, não há cópia de segurança dos arquivos."></label> Não</td>
                </tr>
            </table>
            
            <p>Gostaria de realizar um backup de seus arquivos durante a manutenção? (Se sim, o valor da manutenção será acrescentado)</p>
            <table>
                <tr>
                    <td><label class="form-check-label" for="backupOpcao1"><input class="form-check-input" type="radio" name="backupOpcao" id="backupOpcao1" value="Sim, gostaria que o backup fosse feito durante a manutenção."></label> Sim</td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="backupOpcao2"><input class="form-check-input" type="radio" name="backupOpcao" id="backupOpcao2" value="Não, não gostaria que o backup fosse feito durante a manutenção"></label> Não</td>
                </tr>
            </table>
        </div>


        <div class="formulario container">
            <h1>Segurança e Manutenção</h1>
            <p>Você utiliza algum programa para proteger o computador de vírus? </p>
            <table>
                <tr>
                    <td><label class="form-check-label" for="antiVirus1"><input class="form-check-input" type="radio" name="antiVirus" id="antiVirus1" value="Sim, há Antivírus, e é utilizado o(s): "></label> Sim, poderia nos dizer qual é o Antivírus utilizado?
                    <input type="text" name="especificacao_antivirus" id="especificacao_antivirus" class="form-control" placeholder="Especifique">
                </td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="antiVirus2"><input class="form-check-input" type="radio" name="antiVirus" id="antiVirus2" value="Não há Antivírus."></label> Não</td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="antiVirus3"><input class="form-check-input" type="radio" name="antiVirus" id="antiVirus3" value="Não se sabe se há Antivírus."></label> Não sei</td>
                </tr>
            </table>

            <p>Você costuma limpar fisicamente o seu computador?</p>
            <table>
                <tr>
                    <td><label class="form-check-label" for="limpezaFisica1"><input class="form-check-input" type="radio" name="limpezaFisica" id="limpezaFisica1" value="Regularmente."></label> Sim, regularmente</td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="limpezaFisica2"><input class="form-check-input" type="radio" name="limpezaFisica" id="limpezaFisica2" value="Raramente ocorre a limpeza física."></label> Raramente</td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="limpezaFisica3"><input class="form-check-input" type="radio" name="limpezaFisica" id="limpezaFisica3" value="Nunca foi feita a limpeza física."></label> Nunca</td>
                </tr>
            </table>

            <p>Durante a manutenção, há algum software específico que você gostaria que fosse instalado?</p>
            <table>
                <tr>
                    <td><label class="form-check-label" for="softwareDownload1"><input class="form-check-input" type="radio" name="softwareDownload" id="softwareDownload1" value="Sim, gostaria do(s) software(s): "></label> Sim, por favor, liste os softwares desejados:
                        <input type="text" name="outros_software" id="outros_software" class="form-control" placeholder="Especifique">
                    </td>
                </tr>
                <tr>
                    <td><label class="form-check-label" for="softwareDownload2"><input class="form-check-input" type="radio" name="softwareDownload" id="softwareDownload2" value="Não, haverá instalação de nenhum software."></label> Não</td>
                </tr>
            </table>
        </div>

        <div class="formulario container">
            <h1>Descrição dos problemas</h1>
            <div class="col">
                <label for="problemas" class="form-label">Você enfrenta frequentemente problemas com o computador? Se sim, quais? </label>
                <input type="text" name="problemas" id="problemas" class="form-control">
            </div>

            <div class="col">
                <label for="historicoProblemas" class="form-label">Pode fornecer informações sobre problemas específicos que enfrentou no passado? </label>
                <input type="text" name="historicoProblemas" id="historicoProblemas" class="form-control">
            </div>

            <div class="col">
                <label for="servicoDesejado" class="form-label">Por fim, poderia fornecer informações sobre o serviço desejado e seus motivos? </label>
                <input type="text" name="servicoDesejado" id="servicoDesejado" class="form-control">
            </div>

        </div>

        <div class="formulario container">
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </form>
</main>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php" ?>