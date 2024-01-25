<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $dados = [
        'nome_completo' => isset($_POST['nome_completo']) ? $_POST['nome_completo'] : '',
        'idade' => isset($_POST['idade']) ? $_POST['idade'] : '',
        'genero' => isset($_POST['genero']) ? $_POST['genero'] : '',
        'email' => isset($_POST['email']) ? $_POST['email'] : '',
        'celular' => isset($_POST['celular']) ? $_POST['celular'] : '',

        'usoComputador' => isset($_POST['usoComputador']) ? $_POST['usoComputador'] : '', 
        'finalidade' => isset($_POST['finalidade']) ? $_POST['finalidade'] : '',
        'outros_finalidade' => isset($_POST['outros_finalidade']) ? $_POST['outros_finalidade'] : '', 
        'tempoComputador' => isset($_POST['tempoComputador']) ? $_POST['tempoComputador'] : '', 
        'desempenhoComputador' => isset($_POST['desempenhoComputador']) ? $_POST['desempenhoComputador'] : '', 
        'sistemaOperacional' => isset($_POST['sistemaOperacional']) ? $_POST['sistemaOperacional'] : '', 
        'outros_sistema' => isset($_POST['outros_sistema']) ? $_POST['outros_sistema'] : '', 
        'atualizacaoSistema' => isset($_POST['atualizacaoSistema']) ? $_POST['atualizacaoSistema'] : '',
        'licencaSoftware' => isset($_POST['licencaSoftware']) ? $_POST['licencaSoftware'] : '',
        'compraLicenca' => isset($_POST['compraLicenca']) ? $_POST['compraLicenca'] : '',
        'backup' => isset($_POST['backup']) ? $_POST['backup'] : '',
        'backupOpcao' => isset($_POST['backupOpcao']) ? $_POST['backupOpcao'] : '',
        'antiVirus' => isset($_POST['antiVirus']) ? $_POST['antiVirus'] : '',
        'limpezaFisica' => isset($_POST['limpezaFisica']) ? $_POST['limpezaFisica'] : '',
        'softwareDownload' => isset($_POST['softwareDownload']) ? $_POST['softwareDownload'] : '',
        'outros_software' => isset($_POST['outros_software']) ? $_POST['outros_software'] : '',
        'problemas' => isset($_POST['problemas']) ? $_POST['problemas'] : '',
        'historicoProblemas' => isset($_POST['historicoProblemas']) ? $_POST['historicoProblemas'] : '',
        'servicoDesejado' => isset($_POST['servicoDesejado']) ? $_POST['servicoDesejado'] : '',
     ];

}