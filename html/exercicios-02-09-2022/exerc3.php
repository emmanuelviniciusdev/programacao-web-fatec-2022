<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <?php
        $usuario = [
            [
                'nome' => 'Antônio',
                'tipo' => 'leitor',
                'email' => 'anv@ftek.com',
                'login' => 'anv',
                'senha' => 'f@tek',
            ],
            [
                'nome' => 'Bete',
                'tipo' => 'bibliotecária',
                'email' => 'bete@ftek.com',
                'login' => 'bib',
                'senha' => 'bib123',
            ],
            [
                'nome' => 'Teco',
                'tipo' => 'admin',
                'email' => 'teco@ftek.com',
                'login' => 'admin',
                'senha' => 'admin123',
            ],
        ];

        array_push($usuario, [
            'nome' => 'Tico',
            'tipo' => 'admin',
            'email' => 'tico@ftek.com',
            'login' => 'admin1',
            'senha' => 'admin456',
        ]);
    ?>

    <table border="1">
        <tr>
            <th>Usuário</th>
            <th>Tipo</th>
            <th>e-mail</th>
            <th>login</th>
            <th>senha</th>
        </tr>
        <?php foreach ($usuario as $u) { ?>
            <tr>
                <td><?php echo $u['nome']; ?></td>
                <td><?php echo $u['tipo']; ?></td>
                <td><?php echo $u['email']; ?></td>
                <td><?php echo $u['login']; ?></td>
                <td><?php echo $u['senha']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>