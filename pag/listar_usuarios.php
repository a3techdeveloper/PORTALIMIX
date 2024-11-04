<?php

include_once 'model/UsuarioDAO.php';
$uDAO = new UsuarioDAO();

$pag = filter_input(INPUT_GET, "pag") ? filter_input(INPUT_GET, "pag") : 1;
$_SESSION["pag"] = $pag;
$totalRegistros = $uDAO->count();
$reg = 7;
$ini = ($reg * $pag) - $reg;
$numPaginas = ceil($totalRegistros / $reg);
$maxPaginas = 3;
?>
<h3 class="text-dark text-center">Lista de Usuários</h3>
<span style="font-size: 12pt; text-align: center">Total de Alunos(as): <?= $totalRegistros ?></span>
<div class="table-responsive">
    <table class="table text-center">
        <thead class="table-dark">
            <tr>
                <td style="">Nome</td>
                <td style="">Usuário</td>
                <td style="">Curso</td>
                <td style="">Módulo</td>
                <td style="">Turma</td>
                <td style="">Ações</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($uDAO->pagination($ini, $reg) as $res) {
                ?>
                <tr>
                    <td style=""><?= $res->name ?></td>
                    <td style=""><?= $res->user ?></td>
                    <td style=""><?= $res->curso ?></td>
                    <td style=""><?= $res->modulo ?></td>
                    <td style=""><?= ucfirst($res->class) ?></td>
                    <td style="">
                        <a class="btn btn-warning" href="principal_adm.php?link=3&id=<?= $res->id_user ?>" target="">Editar</a> &nbsp;&nbsp;
                        <a class="btn btn-danger" href="controller/excluir.php?id=<?= $res->id_user ?>&pag=<?=$pag?>" onclick="return confirm('Deseja excluir o registro?')" target="">Excluir</a> &nbsp;&nbsp;
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>

<div class="row">
    <div class="col-md-12">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="principal_adm.php?link=1&pag=1" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php
                for ($i = $pag - $maxPaginas; $i <= $pag - 1; $i++) {
                    if ($i >= 1) {
                        print "<li class='page-item'><a class='page-link' href='principal_adm.php?link=1&pag=$i'>$i</a></li>";
                    }
                }
                
                print "<li class='page-item active'><a class='page-link' href='principal_adm.php?link=1&pag=$pag'>$pag</a></li>";

                for ($i = $pag + 1; $i <= $pag + $maxPaginas; $i++) {
                    if ($i <= $numPaginas) {
                       print "<li class='page-item'><a class='page-link' href='principal_adm.php?link=1&pag=$i'>$i</a></li>"; 
                    }
                }
                ?>
                <li class="page-item">
                    <a class="page-link" href="principal_adm.php?link=1&pag=<?= $numPaginas ?>">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>