
<h3 class="text-dark">Sobre o Portal</h3>
<p style="text-indent: 40px; text-align: justify; line-height: 30px">
    Olá, seja muito bem vindo(a) ao nosso portal. Aqui você encontrará um suporte em todos os módulos do seu curso.
    Disponibizamos os materiais didáticos (apostilas), exercícios de fixação, vídeos e no final de cada módulo teremos
    uma avaliação que será aplicada através dessa ferramenta. Esperamos contribuir com o crescimento profissional e 
    desejamos o seu sucesso em todas as atividades no decorrer do curso e da sua vida. Obrigado pela preferência.
</p>
<img src="imagem/eu.jpg" alt="Minha Foto" style="width: 100px; float: left; margin-right: 20px; box-shadow: 1px 1px 1px #000">
<p style="text-indent: 40px; text-align: justify; line-height: 30px;">
    Me chamo Anderson Henrique, sou professor e instrutor de cursos profissionalizantes na área de T.I. (Tecnologia da
    Informação) desde 2008, sou graduado na área da Teologia com diploma emitido pela Universidade Federal de Goiás. Tenho
    Pós-graduação em Docência do Ensino Superior. Atualmente estou tirando a Licenciatura em Metodologia do Ensino de
    História e Pedagogia pela Faculdade Intervale.
</p>
<p style="text-indent: 40px; text-align: justify; line-height: 30px">
    Gosto de Jogos Antigos, curto Rock e Hip Hop, sou amante das artes e da música. Espero que tenhamos uma caminhada
    bastante frutífera e que a cada dia possamos crescer um pouco mais.
</p>
<hr>
<h3 class="text-dark">Seus Arquivos</h3>
<p style="text-indent: 40px; text-align: justify; line-height: 30px">
    Abaixo você tem uma lista das atividades realizadas em sala de aula. Clicando no botão download poderá baixar o arquivo dando continuidade
    exatamente do lugar onde você parou.
    <br>    
</p>
<table class="table table-responsive">
    <thead>
        <tr>
            <th>Nome do Arquivo</th>
            <th>Gerenciamento</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include_once 'model/UploadDAO.php';

        $upDAO = new UploadDAO();

        foreach ($upDAO->listarArquivos() as $arquivos) {
            if ($arquivos->id_user == $_SESSION['id_user']) {
        ?>
        <tr>
            <td><?=$arquivos->arquivo?></td>
            <td>
                <a class="btn btn-primary" href="uploads/<?=$arquivos->arquivo?>" target="_blank">Download</a>
                <a class="btn btn-danger" href="controller/excluirArquivo.php?arquivo=<?=$arquivos->arquivo?>&id=<?=$arquivos->id_upload?>" onclick="return confirm('Deseja excluir o arquivo?')">Excluir</a>
            </td>
        </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>