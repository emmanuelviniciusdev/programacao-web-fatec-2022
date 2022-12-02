<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <h1>Upload de Arquivos</h1>
    <h2>Extensões permitidas:</h2>
    <ul>
        <li>image/gif</li>
        <li>image/jpeg</li>
        <li>image/bmp</li>
        <li>application/pdf</li>
    </ul>
    <h2>Tamanho máximo permitido:</h2>
    <ul>
        <li>9MB (9000000 bytes)</li>
    </ul>
    <form method="post" action="upload.php" enctype="multipart/form-data">
        <input type="file" name="file[]" multiple>
        <button>Upload</button>
    </form>
</body>
</html>
