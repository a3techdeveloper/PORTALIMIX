<?php
session_start();

include_once 'model/AdministradorDAO.php';

if (@$_SESSION['autenticado'] == false) {
    echo "<script>alert('Sem permissão de acesso! Favor efetuar o login.');location='login_adm.php'</script>";
}

if (filter_input(INPUT_GET, 'sair') == 'ok') {
    $aDAO = new AdministradorDAO();
    $aDAO::logout();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IMix - Portal do Aluno(a)</title>
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
    <body style="background-color: #cccaca">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Portal IMix</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Área Administrativa</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Usuários
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="?link=5">Cadastrar</a></li>
                                        <li><a class="dropdown-item" href="?link=1">Listar</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="?link=2">Pesquisar</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="navbar-nav me-2">
                                <li class="nav-item">
                                    <span class="nav-link">Administrador(a): <b><?= ucwords($_SESSION['administrador']) ?></b></span>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="?sair=ok" onclick="return confirm('Deseja sair do Portal?')">Sair</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="row" style="margin-top: 20px; background-color: #fff; border-radius: 4px; box-shadow: 1px 1px 1px #000">
                <div class="col-md-12" style="padding: 40px">
                    <?php
                    $link = filter_input(INPUT_GET, 'link') ? filter_input(INPUT_GET, 'link') : 1;

                    $pag[1] = 'pag/listar_usuarios.php';
                    $pag[2] = 'pag/pesquisar_usuarios.php';
                    $pag[3] = 'pag/formEditarAdm.php';
                    $pag[4] = 'pag/formEditarAdmPesq.php';
                    $pag[5] = 'cadastro.php';

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
                    &COPY;Copyright 2024 - Alguns direitos reservados. Desenvolvido por Anderson Henrique Maciel. Portal do Aluno IMix.
                </div>
            </div>
        </div>
    </body>
</html>
