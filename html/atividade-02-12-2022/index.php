<?php
    session_start();
    $ultimoUsuarioSalvo = $_SESSION['ultimoUsuarioSalvo'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/bootstrap.min.css" rel="stylesheet" />
    <title>Upload de Foto do Usuário</title>
</head>
<body>
    <div class="container">
        <div class="row my-5">
            <div class="col">
                <h1 class="text-center">Upload de Foto do Usuário</h1>
            </div>
        </div>
        <div class="row my-5">
            <div class="d-flex justify-content-center">
                <form action="salvar-usuario-com-foto.php" method="post" enctype="multipart/form-data" style="width: 400px;">
                    <div class="form-group my-2">
                        <label for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome">
                    </div>
                    <div class="form-group my-2">
                        <label for="email">E-mail</label>
                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                    <div class="form-group my-2">
                        <label for="dataNascimento">Data de Nascimento</label>
                        <input class="form-control" type="date" name="dataNascimento" id="dataNascimento">
                    </div>
                    <div class="form-group my-2">
                        <label for="fotoUsuario">Foto do usuário:</label>
                        <input type="file" name="fileFotoUsuario" id="fotoUsuario">
                    </div>
                    <div class="form-group my-2">
                        <button class="btn btn-primary w-100">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
        <?php if (isset($ultimoUsuarioSalvo)) { ?>
            <div class="row my-5">
                <div class="d-flex justify-content-center">
                    <div class="width: 300px">
                        <h2>Informações do último usuário salvo</h2>
                        <img
                            src="./fotos/<?php echo $ultimoUsuarioSalvo['nomeArquivoFotoUsuario'] ?>"
                            alt="Foto de <?php echo $ultimoUsuarioSalvo['nome'] ?>" 
                            class="img-thumbnail my-3" 
                            style="width: 200px; height: 200px;">
                        <p><b>Nome:</b> <?php echo $ultimoUsuarioSalvo['nome'] ?></p>
                        <p><b>E-mail:</b> <?php echo $ultimoUsuarioSalvo['email'] ?></p>
                        <p><b>Data de Nascimento:</b> <?php echo $ultimoUsuarioSalvo['dataNascimento'] ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <script src="./assets/bootstrap.bundle.min.js"></script>
</body>
</html>