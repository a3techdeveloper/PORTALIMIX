<?php
session_start();

include_once 'model/Usuario.php';
include_once 'model/UsuarioDAO.php';
$u = new Usuario();
$uDAO = new UsuarioDAO();


if (@$_SESSION['autenticado'] == false) {
    echo "<script>alert('Sem permissão de acesso! Favor efetuar o login.');location='index.php'</script>";
}

if (filter_input(INPUT_GET, 'sair') == 'ok') {
    $uDAO::logout();
}

$u->setId_user($_SESSION['id_user']);
$select = $uDAO->selectId($u);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMix - Portal do Aluno(a)</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="bootstrap/js/jquery-3.6.1.js" type="text/javascript"></script>
        <script src="bootstrap/js/jquery.mask.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $('.date').mask('00/00/0000');
                $('.time').mask('00:00:00');
                $('.date_time').mask('00/00/0000 00:00:00');
                $('.cep').mask('00000-000');
                $('.phone').mask('0000-0000');
                $('.phone_with_ddd').mask('(00) 00000-0000');
                $('.phone_us').mask('(000) 000-0000');
                $('.mixed').mask('AAA 000-S0S');
                $('.cpf').mask('000.000.000-00', {reverse: true});
                $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
                $('.money').mask('000.000.000.000.000,00', {reverse: true});
                $('.money2').mask("#.##0,00", {reverse: true});
                $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
                    translation: {
                        'Z': {
                            pattern: /[0-9]/, optional: true
                        }
                    }
                });
                $('.ip_address').mask('099.099.099.099');
                $('.percent').mask('##0,00%', {reverse: true});
                $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
                $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
                $('.fallback').mask("00r00r0000", {
                    translation: {
                        'r': {
                            pattern: /[\/]/,
                            fallback: '/'
                        },
                        placeholder: "__/__/____"
                    }
                });
                $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
            });
        </script>
    </head>
    <style>
        .whatsapp-link{
            position:fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            color: #ffffff;
            border-radius: 50px;
            text-align: center;
            font-size: 40px;
            z-index: 1000;
            opacity: .5;
            transition: .7s;
        }
        .whatsapp-link:hover{
            opacity: 1;
            transition: .7s;
        }
        .whatsapp-link img{
            width:50px;
            height:50px;
        }
    </style>
    <body style="background-color: #575656">

        <a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=5561994470402" target="_blank">
            <img src="imagem/ico-whats.png" alt="Logo Whats">
        </a>

        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Portal Imix</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="?link=1">Sobre o Portal</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Informática
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="?link=3">IPD</a></li>
                                        <li><a class="dropdown-item" href="?link=4">Windows</a></li>
                                        <li><a class="dropdown-item" href="?link=5">Word</a></li>
                                        <li><a class="dropdown-item" href="?link=6">Excel</a></li>
                                        <li><a class="dropdown-item" href="?link=7">PowerPoint</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="?link=8">Internet</a></li>
                                        <!-- <li><a class="dropdown-item" href="?link=9">Mídias Sociais</a></li> -->
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="?link=10">CorelDraw</a></li>
                                        <li><a class="dropdown-item" href="?link=11">Photoshop</a></li>
                                        <li><a class="dropdown-item" href="?link=12">InDesign</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <!-- <li><a class="dropdown-item" href="?link=13">Stencyl Games</a></li> -->
                                        <li><hr class="dropdown-divider"></li>
                                        <!-- <li><a class="dropdown-item" href="?link=14">Youtuber</a></li> -->
                                        <!-- <li><a class="dropdown-item" href="?link=15">Canva Design</a></li> -->
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="?link=16">Manutenção e Configuração</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Profissionalizantes
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="?link=22">Gestor Administrativo e Financeiro</a></li>
                                        <li><a class="dropdown-item" href="?link=24">Recursos Humanos</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <!-- <li><a class="dropdown-item" href="?link=20">Crédito, Cobrança e Atendimento</a></li> -->
                                        <li><a class="dropdown-item" href="?link=26">Assistente Contábil</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <!-- <li><a class="dropdown-item" href="?link=25">Logística e Transporte</a></li> -->
                                        <!-- <li><a class="dropdown-item" href="?link=23">Fiscal de Loja</a></li> -->
                                        <li><hr class="dropdown-divider"></li>
                                        <!-- <li><a class="dropdown-item" href="?link=21">Liderança Eficaz e Oratória</a></li> -->
                                        <!-- <li><a class="dropdown-item" href="?link=28">Home Office</a></li> -->
                                        <li><hr class="dropdown-divider"></li>
                                        <!-- <li><a class="dropdown-item" href="?link=19">Marketing Digital</a></li> -->
                                        <!-- <li><a class="dropdown-item" href="?link=18">Instagram para Vendas</a></li> -->
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="?link=27">Operador de Caixa</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <!-- <li><a class="dropdown-item" href="?link=17">Técnicas de Redação</a></li> -->
                                        <!-- <li><a class="dropdown-item" href="?link=29">Elaborando Currículo</a></li> -->
                                    </ul>
                                </li>
								<!--
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Farmácia
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="?link=30">Atendente de Farmácia</a></li>
                                    </ul>
                                </li>
								-->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Arquivos
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="?link=35">Enviar Arquivo</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="navbar-nav me-2">                                
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="?sair=ok" onclick="return confirm('Deseja sair do Portal?')">Sair</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row text-center">
                <div class="col-md-12" style="margin-top: 20px; padding: 8px; background-color: #fff; border-radius: 4px; box-shadow: 1px 1px 1px #000">
                    <h5>Dados do Aluno(a)</h5>
                    Nome: <b><?= $_SESSION['usuario'] ?></b> <br>
                    Turma: <b><?= ucfirst($select->class) ?></b> <br>
                    Curso: <b><?= $_SESSION['curso'] ?></b> <br>
                    Módulo: <b><?= $select->modulo ?></b> <br>
                    <hr>
                    <a href="?link=2&id=<?= $_SESSION['id_user'] ?>" target=""><b>Editar Informações</b></a>
                </div>
            </div>

            <div class="row" style="margin-top: 20px; background-color: #fff; border-radius: 4px; box-shadow: 1px 1px 1px #000">
                <div class="col-md-12" style="padding: 40px">
                    <?php
                    $link = filter_input(INPUT_GET, 'link') ? filter_input(INPUT_GET, 'link') : 1;

                    $pag[1] = 'pag/sobre.php';
                    $pag[2] = 'pag/formEditarUser.php';

                    $pag[3] = 'pag/ipd.php';
                    $pag[4] = 'pag/windows.php';
                    $pag[5] = 'pag/word.php';
                    $pag[6] = 'pag/excel.php';
                    $pag[7] = 'pag/powerpoint.php';

                    $pag[8] = 'pag/internet.php';
                    $pag[9] = 'pag/midias_sociais.php';

                    $pag[10] = 'pag/coreldraw.php';
                    $pag[11] = 'pag/photoshop.php';
                    $pag[12] = 'pag/indesign.php';

                    $pag[13] = 'pag/stencyl_games.php';

                    $pag[14] = 'pag/youtuber.php';
                    $pag[15] = 'pag/canva.php';

                    $pag[16] = 'pag/manutencao.php';

                    $pag[17] = 'pag/tecnicas_redacao.php';
                    $pag[18] = 'pag/instagram_vendas.php';
                    $pag[19] = 'pag/marketing_digital.php';
                    $pag[20] = 'pag/credito_cobranca.php';
                    $pag[21] = 'pag/lideranca_eficaz.php';
                    $pag[22] = 'pag/gestor_administrativo.php';
                    $pag[23] = 'pag/fiscal_loja.php';
                    $pag[24] = 'pag/recursos_humanos.php';
                    $pag[25] = 'pag/logistica.php';
                    $pag[26] = 'pag/assistente_contabil.php';
                    $pag[27] = 'pag/operador_caixa.php';
                    $pag[28] = 'pag/home_office.php';
                    $pag[29] = 'pag/elaborar_curriculo.php';

                    $pag[30] = 'pag/atendente_farmacia.php';

                    $pag[31] = 'provas/windows.php';
                    $pag[32] = 'controller/recebe_prova_windows.php';

                    $pag[33] = 'provas/word.php';
                    $pag[34] = 'controller/recebe_prova_word.php';

                    $pag[35] = 'pag/formUpload.php';

                    if (file_exists($pag[$link])) {
                        include_once $pag[$link];
                    } else {
                        echo "A página não foi encontrada";
                    }
                    ?>
                </div>
            </div>

            <div class="row text-center" style="margin: 160px 0">
                <div class="col-md-12">
                    &COPY;Copyright 2024 - Alguns direitos reservados. Desenvolvido por Anderson Henrique Maciel. Portal do Aluno Imix.
                </div>
            </div>
        </div>
    </body>
</html>
