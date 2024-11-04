<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IMix - Portal do Aluno(a)</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body style="background-color: #cccaca">
        
        <div class="container">
            
            <div class="row" style="margin-bottom: 70px">
                <div class="col-md-12"></div>
            </div>
            
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <img src="imagem/imix_logo.png" alt="Logo" class="img-fluid">
                    <hr>
                </div>
            </div>
            
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <h2 class="h4 text-muted">Área Administrativa</h2>
                    <hr>
                </div>
            </div>
            
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form method="post" action="controller/autenticar_adm.php">
                        <div class="mb-3">
                            <label for="InputUser" class="form-label text-muted">Usuário</label>
                            <input type="text" class="form-control" id="InputUser" name="InputUser" required>
                        </div>
                        <div class="mb-3">
                            <label for="InputPassword" class="form-label text-muted">Senha</label>
                            <input type="password" class="form-control" id="InputPassword" name="InputPassword" required>
                        </div>
                        <button type="submit" class="btn btn-danger">Acessar</button>
                    </form>
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
