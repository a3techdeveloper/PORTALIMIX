<h3 class="text-dark">Pesquisar Usuários</h3>
<div class="row">
    <div class="col-md-6">
        <form class="form" method="post">
            <div class="mb-3">
                <label for="valor">Informe o nome, usuário, turma, curso ou módulo</label>
            </div>
            <div class="mb-3">
                <input class="form-control" type="search" name="pesquisa" id="valor" required>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Pesquisar" name="pesquisar">
            </div>
        </form>
    </div>
</div>

<?php
if (filter_input(INPUT_POST, 'pesquisar')) {
    ?>
    <div class="table-responsive">
        <table class="table text-center">
            <thead class="table-dark">
                <tr>
                    <td style="">Nome</td>
                    <td style="">Usuário</td>
                    <td style="">Telefone</td>
                    <td style="">Curso</td>
                    <td style="">Módulo</td>
                    <td style="">Turma</td>
                    <td style="">Ações</td>
                </tr>
            </thead> 
            <tbody>
                <?php
                $valor = filter_input(INPUT_POST, 'pesquisa');
                $valorBusca = "%$valor%";

                include_once 'model/UsuarioDAO.php';
                $uDAO = new UsuarioDAO();
                
                foreach ($uDAO->search($valorBusca) as $res) {
                    ?>
                    <tr>
                        <td style=""><?= $res->name ?></td>
                        <td style=""><?= $res->user ?></td>
                        <td style=""><?= $res->tel ?></td>
                        <td style=""><?= $res->curso ?></td>
                        <td style=""><?= utf8_encode($res->modulo) ?></td>
                        <td style=""><?= $res->class ?></td>
                        <td style="">
                            <a class="btn btn-warning" href="principal_adm.php?link=4&id=<?= $res->id_user ?>" target="">Editar</a> &nbsp;&nbsp;
                            <a class="btn btn-danger" href="controller/excluir_pesq.php?id=<?= $res->id_user ?>" onclick="return confirm('Deseja excluir o registro?')" target="">Excluir</a> &nbsp;&nbsp;
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>
