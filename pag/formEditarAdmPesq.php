<h3 class="text-dark">Editar sua Conta</h3>

<?php
include_once 'model/Usuario.php';
include_once 'model/UsuarioDAO.php';
include_once 'model/HorarioDAO.php';
include_once 'model/ModuloDAO.php';

$id = filter_input(INPUT_GET, 'id');
$pag = $_SESSION['pag'];

$u = new Usuario();
$uDAO = new UsuarioDAO();
$horarioDAO = new HorarioDAO();
$moduloDAO = new ModuloDAO();

$u->setId_user($id);
$res = $uDAO->selectId($u);
?>

<div class="offset-md-4 col-md-4">
    <form method="post" action="controller/editar_adm_pesq.php">
        <input type="hidden" name="pag" value="<?= $pag ?>">
        <input type="hidden" name="id_user" value="<?= $res->id_user ?>">
        <div class="mb-3">
            <label for="InputName" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="InputName" name="InputName" required value="<?= $res->name ?>">
        </div>
        <div class="mb-3">
            <label for="InputUser" class="form-label">Usuário</label>
            <input type="text" class="form-control" id="InputUser" name="InputUser" required value="<?= $res->user ?>">
        </div>
        <div class="mb-3">
            <label for="InputTel" class="form-label">Telefone</label>
            <input type="tel" class="form-control phone_with_ddd" id="InputTel" name="InputTel" required value="<?= $res->tel ?>">
        </div>
        <div class="mb-3">
            <label for="InputPassword" class="form-label">Senha</label>
            <input type="password" class="form-control" id="InputPassword" name="InputPassword" aria-describedby="passwordHelp" required value="<?= $res->pass ?>">
            <div id="passwordHelp" class="form-text">Nunca compartilharemos sua senha com mais ninguém.</div>
        </div>
        <div class="mb-3">
            <label for="InputCurso" class="form-label">Curso</label>
            <select class="form-control" id="InputCurso" name="InputCurso" required>
                <?php
                if ($res->curso == "Informática") {
                    ?>
                    <option selected value="Informática">Informática</option>
                    <option value="Profissionalizante">Profissionalizante</option>                                
                    <option value="Farmácia">Farmácia</option>         
                    <?php
                } else if ($res->curso == "Profissionalizante") {
                    ?>
                    <option value="Informática">Informática</option>
                    <option selected value="Profissionalizante">Profissionalizante</option>                                
                    <option value="Farmácia">Farmácia</option>    
                    <?php
                } else {
                    ?>
                    <option value="Informática">Informática</option>
                    <option value="Profissionalizante">Profissionalizante</option>                                
                    <option selected value="Farmácia">Farmácia</option>       
                <?php } ?>                              
            </select>
        </div>
        <div class="mb-3">
            <label for="InputModulo" class="form-label">Módulo</label>
            <select class="form-control" id="InputModulo" name="InputModulo" required>
                <?php
                foreach ($moduloDAO->select() as $modulo) {
                    if ($res->id_modulo == $modulo->id_modulo) {
                        ?>
                        <option selected value="<?= $modulo->id_modulo ?>"><?= utf8_encode($modulo->modulo) ?></option>
                        <?php
                    } else {
                        ?>        
                        <option value="<?= $modulo->id_modulo ?>"><?= utf8_encode($modulo->modulo) ?></option>
                        <?php
                    }
                }
                ?>                               
            </select>
        </div>
        
        <div class="mb-3">
            <label for="InputClass" class="form-label">Dias e Horário</label>                    
            <select name="InputClass" class="form-control" id="InputClass" required>
                <option selected value="">- Selecione -</option>
            <?php
            foreach ($horarioDAO->select() as $row) {
                if ($res->id_class == $row->id_class) {
            ?>
                <option selected value="<?= $row->id_class ?>"><?= $row->class ?></option>
            <?php
                } else {
            ?>
                <option value="<?= $row->id_class ?>"><?= $row->class ?></option>  
            <?php }
            }
            ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" onclick="return confirm('Confirmar edição do registro?')">Editar</button>
    </form>
</div>