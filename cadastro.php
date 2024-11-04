<div class="container">
    <div class="row" style="margin-bottom: 70px">
        <div class="col-md-12"></div>
    </div>
    <div class="row">
        <div class="offset-md-4 col-md-4">
            <h2 class="text-dark">Cadastro de Usuário</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="offset-md-4 col-md-4">
            <form method="post" action="controller/cadastrar.php">
                <div class="mb-3">
                    <label for="InputName" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="InputName" name="InputName" required>
                </div>
                <div class="mb-3">
                    <label for="InputUser" class="form-label">Usuário</label>
                    <input type="text" class="form-control" id="InputUser" name="InputUser" required>
                </div>
                <div class="mb-3">
                    <label for="InputTel" class="form-label">Telefone</label>
                    <input type="tel" class="form-control phone_with_ddd" id="InputTel" name="InputTel" required>
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="InputPassword" name="InputPassword" aria-describedby="passwordHelp" required>
                    <div id="passwordHelp" class="form-text">Nunca compartilharemos sua senha com mais ninguém.</div>
                </div>
                <div class="mb-3">
                    <label for="InputCurso" class="form-label">Curso</label>
                    <select class="form-control" id="InputCurso" name="InputCurso" required>
                        <option selected value="">- Selecione -</option>
                        <option value="Informática">Informática</option>
                        <option value="Profissionalizante">Profissionalizante</option>                                
                        <option value="Farmácia">Farmácia</option>                                
                    </select>
                </div>
                <div class="mb-3">
                    <label for="InputModulo" class="form-label">Módulo</label>
                    <select class="form-control" id="InputModulo" name="InputModulo" required>
                        <option selected value="">- Selecione -</option>
                        <?php
                        include_once 'model/ModuloDAO.php';
                        $moduloDAO = new ModuloDAO();
                        ?>

                        <optgroup label="Informática">
                            <?php
                            foreach ($moduloDAO->select() as $row) {
                                if ($row->modulo == "IPD/Windows" || $row->modulo == "Word" || $row->modulo == "Excel" ||
                                        $row->modulo == "PowerPoint" || $row->modulo == "Internet/Mídias Sociais" || $row->modulo == "CorelDraw" ||
                                        $row->modulo == "Photoshop" || $row->modulo == "InDesign" || $row->modulo == "Stencyl Games" ||
                                        $row->modulo == "Youtuber" || $row->modulo == "Canva Design" || $row->modulo == "Manutenção e Configuração" ||
                                        $row->modulo == "Projetista Digital") {
                                    ?>
                                    <option value="<?= $row->id_modulo ?>"><?= $row->modulo ?></option>
                                <?php }
                            } ?>
                        </optgroup>

                        <optgroup label="Profissionalizante">
                            <?php
                            foreach ($moduloDAO->select() as $row) {
                                if ($row->modulo == "Gestor Administrativo e Financeiro" || $row->modulo == "Recursos Humanos" || $row->modulo == "Crédito, Cobrança e Atendimento" ||
                                        $row->modulo == "Assistente Contábil" || $row->modulo == "Logística e Transporte" || $row->modulo == "Fiscal de Loja" ||
                                        $row->modulo == "Liderança Eficaz e Oratória" || $row->modulo == "Home Office" || $row->modulo == "Marketing Digital" ||
                                        $row->modulo == "Instagram para Vendas" || $row->modulo == "Operador de Caixa" || $row->modulo == "Técnicas de Redação" ||
                                        $row->modulo == "Elaborando Currículo") {
                                    ?>
                                    <option value="<?= $row->id_modulo ?>"><?= $row->modulo ?></option>
    <?php }
} ?>
                        </optgroup>

                        <optgroup label="Farmácia">
                            <?php
                            foreach ($moduloDAO->select() as $row) {
                                if ($row->modulo == "Atendente de Farmácia") {
                                    ?>
                                    <option value="<?= $row->id_modulo ?>"><?= $row->modulo ?></option>
    <?php }
} ?>
                        </optgroup>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="InputClass" class="form-label">Dias e Horário</label>                    
                    <select name="InputClass" class="form-control" id="InputClass" required>
                        <option selected value="">- Selecione -</option>
                        <?php
                        include_once 'model/HorarioDAO.php';
                        $horarioDAO = new HorarioDAO();
                        ?>

                        <optgroup label="Segunda e Quarta">
                            <?php
                            foreach ($horarioDAO->select() as $row) {
                                if ($row->class == "seg-qua-07:30" || $row->class == "seg-qua-08:30" || $row->class == "seg-qua-09:30" ||
                                        $row->class == "seg-qua-10:30" || $row->class == "seg-qua-11:30" || $row->class == "seg-qua-12:30" ||
                                        $row->class == "seg-qua-13:30" || $row->class == "seg-qua-14:30" || $row->class == "seg-qua-15:30" ||
                                        $row->class == "seg-qua-16:30" || $row->class == "seg-qua-17:30" || $row->class == "seg-qua-18:30") {
                                    ?>
                                    <option value="<?= $row->id_class ?>"><?= $row->class ?></option>
                                <?php }
                            } ?>                                   
                        </optgroup>

                        <optgroup label="Terça e Quinta">
                            <?php
                            foreach ($horarioDAO->select() as $row) {
                                if ($row->class == "ter-qui-07:30" || $row->class == "ter-qui-08:30" || $row->class == "ter-qui-09:30" ||
                                        $row->class == "ter-qui-10:30" || $row->class == "ter-qui-11:30" || $row->class == "ter-qui-12:30" ||
                                        $row->class == "ter-qui-13:30" || $row->class == "ter-qui-14:30" || $row->class == "ter-qui-15:30" ||
                                        $row->class == "ter-qui-16:30" || $row->class == "ter-qui-17:30" || $row->class == "ter-qui-18:30") {
                                    ?>
                                    <option value="<?= $row->id_class ?>"><?= $row->class ?></option>
                                <?php }
                            } ?>
                        </optgroup>

                        <optgroup label="Sexta">
                            <?php
                            foreach ($horarioDAO->select() as $row) {
                                if ($row->class == "sex-07:30" || $row->class == "sex-09:00" || $row->class == "sex-10:30" ||
                                        $row->class == "sex-12:00" || $row->class == "sex-13:30" || $row->class == "sex-15:00" ||
                                        $row->class == "sex-16:30" || $row->class == "sex-18:00") {
                                    ?>
                                    <option value="<?= $row->id_class ?>"><?= $row->class ?></option>
                                <?php } ?>
                            <?php } ?>
                        </optgroup>

                        <optgroup label="Sábado">
                            <?php
                            foreach ($horarioDAO->select() as $row) {
                                if ($row->class == "sáb-07:30" || $row->class == "sáb-09:00" || $row->class == "sáb-10:30" ||
                                        $row->class == "sáb-12:00" || $row->class == "sáb-13:30" || $row->class == "sáb-15:00" ||
                                        $row->class == "sáb-16:30" || $row->class == "sáb-18:00") {
                                    ?>
                                    <option value="<?= $row->id_class ?>"><?= $row->class ?></option>
    <?php } ?>
<?php } ?>
                        </optgroup>

                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
    <div class="row text-center" style="margin: 160px 0">
        <div class="col-md-12">
            &COPY;Copyright 2022 - Alguns direitos reservados. Desenvolvido por Anderson Henrique Maciel. Portal do Aluno EducTreina.
        </div>
    </div>
</div>
